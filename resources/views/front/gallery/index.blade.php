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
                    <div class="row photos">
                        @foreach($events as $event)
                        <div class="col-md-3 item">
                            <div class="gallery-card">
                            <div class="gallery-img-wrap">
                            <a class="gallery-anchor" href="{{asset('assets/uploads/'.$image[$event->id])}}" data-lightbox="photos">
                            <img src="{{asset('assets/uploads/'.$image[$event->id])}}" alt="img" class="img-fluid">                        
                            <button class="gallery-zoom-icon">
                        <span class="material-icons-round">
                        zoom_in
                        </span>
                        </button>
                        </a>
                        </div>
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
                    @if(!$videos->isEmpty())
                        <div class="row">                       
                        @foreach($videos as $video)
                        @if($video->vedio)
                        <div class="col-md-3">
                            <div class="video-wrap">
                            <video width="246" height="136" style="border-radius:6px;" controls>
                                <source src="{{URL::asset('/assets/uploads/vedios/'.$video->vedio)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            </div>
                        </div>
                        @else
                        <div class="col-md-3">
                            <div class="video-wrap">
                            <iframe width="246" height="136" style="border-radius:6px;" src="https://www.youtube.com/embed/{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif
                        
                        @endforeach
                        <div class="col-md-12">
                            <a href="{{url('/gallery/video-gallery')}}" class="org-link">
                                {{ __('lang.VIEW ALL') }} 
                                <span class="material-icons-round">
                                    east
                                </span>
                            </a>
                        </div>
                        </div>
                        @else
                        <p class="text-center">No Video Uploaded Yet!<p>
                        @endif
                        
                        
                        
                    </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
</section>

@include('front.includes.footer')