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
            <div class="row">
                @foreach($vedios as $vedio)
                <div class="col-md-4">
                    <div class="gallery-card">
                        <div class="gallery-img-wrap">
                            <img src="{{asset('assets/front/images/video1.png')}}" alt="img" class="img-fluid">
                            <a href="#" class="gallery-play-icon">
                                <span class="material-icons">
                                    play_circle_filled
                                </span>
                            </a>
                        </div>
                        <div class="gallery-content">
                            <p class="gallery-title pb-15">
                                {{$vedio->title}}
                            </p>
                            <div class="btn-wrap">
                                <a href="#" class="btn org-btn">
                                    Download
                                    <span class="material-icons">
                                    file_download
                                    </span>
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

    
@include('front.includes.footer')