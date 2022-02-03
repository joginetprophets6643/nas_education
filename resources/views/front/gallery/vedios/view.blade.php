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
                            <li class="breadcrumb-item"><a href="{{url('/gallery/video-gallery')}}">{{ __('lang.Gallery') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$videos[0]->name}}</li>
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
            <div class="row photos">
            @foreach($videos as $video)
                    @if($video->vedio)
                    <div class="col-md-6 item">
                    <!-- <div class="gallery-card"> -->
                        <div class="video-wrap">
                            <video width="385" height="240" controls>
                                <source src="{{URL::asset('/assets/uploads/vedios/'.$video->vedio)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <!-- <h5>{{ $video->title}}</h5> -->
                        </div>
                    <!-- </div> -->
                    </div>
                    @endif
                    @if($video->url)
                    <div class="col-md-6 item">
                    <!-- <div class="gallery-card"> -->
                        <div class="video-wrap">
                            <iframe height="300" src="https://www.youtube.com/embed/{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <!-- <h5>{{ $video->title}}</h5> -->
                        </div>
                    <!-- </div> -->
                    </div>
                    @endif

                @endforeach
                

                

            </div>
        </div>
    </div>

</section>



@include('front.includes.footer')
</div>
<script>
    $('a').click(()=>{
        $('body').addClass('overflow-hidden');
    });
    $('.lightboxOverlay').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    $('.lightbox').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    $('.lb-close').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    $('.lb-closeContainer').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    
    
</script>


