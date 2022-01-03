@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{ __('lang.Gallery') }}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Gallery') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-main-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="card-white">
                    <div class="photogallery-content">
                    <h2 class="heading-blue mb-4">
                        {{ __('lang.Photo Gallery') }}
                    </h2>
                    <div class="row">
                        @foreach($events as $event)
                        <div class="col-md-3">
                            <div class="gallery-img-wrap">
                              <img src="{{asset('assets/uploads/'.$image[$event->id])}}" alt="img" class="img-fluid" style="height:136.48px" >
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="col-md-12">
                            <a href="{{url('/gallery/image-gallery')}}" class="org-link">
                                {{ __('lang.VIEW ALL') }}  
                                <span class="material-icons-round">
                                    east
                                </span>
                            </a>
                        </div>
                    </div>
                    </div>
                    <div class="videogallery-content">
                    <h2 class="heading-blue mb-4">
                        {{__('lang.Video Gallery')}}
                    </h2>
                    @if($vedios)
                        <div class="row">                       
                        @foreach($vedios as $vedio)
                        @if($vedio->url)
                        <div class="col-md-4">
                            <div class="video-wrap">
                            <iframe width="280" height="240" src="https://www.youtube.com/embed/{{ $vedio->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif
                        @if($vedio->vedio)
                        <div class="col-md-4">
                            <div class="video-wrap">
                            <video width="300" height="240" controls>
                                <source src="{{URL::asset('/assets/uploads/vedios/'.$vedio->vedio)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        </div>
                        @else
                        <p class="text-center">No Video Uploaded Yet!<p>
                        @endif
                        
                        
                        <div class="col-md-12">
                            <a href="{{url('/gallery/vedio-gallery')}}" class="org-link">
                                {{ __('lang.VIEW ALL') }} 
                                <span class="material-icons-round">
                                    east
                                </span>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
</section>

@include('front.includes.footer')