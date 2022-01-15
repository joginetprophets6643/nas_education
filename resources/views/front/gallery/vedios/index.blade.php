@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                    {{ __('lang.Video Gallery') }}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/gallery')}}">{{ __('lang.Gallery') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Video Gallery') }}</li>
                        </ol>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-wrap bg-grey ptb-60">
    <div class="container">
        <div class="card-white">
            <div class="row">

            @foreach($videos as $video)
                <div class="col-md-4">
                    <div class="gallery-card">
                        
                        <div class="video-wrap">
                            @if($video->vedio)
                            <video width="325" height="240" controls>
                                <source src="{{URL::asset('/assets/uploads/vedios/'.$video->vedio)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            @else
                            <iframe width="325" height="240" src="https://www.youtube.com/embed/{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif
                            
                            </div> 
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center pb-15">
                                <span class="total-img">
                                    <img src="{{asset('assets/front/images/gallery.svg')}}" alt="img" class="img-fluid" />  {{$video->total_videos}}
                                </span>
                                <?php $id=encode5t($video->event_id)?>
                                <a href="{{url('gallery/video-gallery/'.$id)}}" class="org-link">View All</a>
                            </div>
                            
                            <p class="gallery-title">
                                {{$video->name}}
                            </p>  
                        </div>

                    </div>
                </div>


                @endforeach




                
            </div>
        </div>
    </div>
</section>

@include('front.includes.footer')
</div>
