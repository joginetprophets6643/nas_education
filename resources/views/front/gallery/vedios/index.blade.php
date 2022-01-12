@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                    {{__('lang.Video Gallery')}}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/gallery')}}">{{ __('lang.Gallery') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('lang.Video Gallery')}}</li>
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
            @if($videos)
                        <div class="row">                       
                        @foreach($videos as $video)
                        @if($video->url)
                        <div class="col-md-4">
                            <div class="video-wrap">
                            <iframe width="385" height="240" src="https://www.youtube.com/embed/{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>  
                        </div>
                        @endif
                        @if($video->vedio)
                        <div class="col-md-4">
                            <div class="video-wrap">
                            <video width="385" height="240" controls>
                                <source src="{{URL::asset('/assets/uploads/vedios/'.$video->vedio)}}" type="video/mp4">
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
        </div>
    </div>
</section>

    
@include('front.includes.footer')
