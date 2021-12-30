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
                        <li class="breadcrumb-item"><a href="index.html">{{ __('lang.Home') }}</a></li>
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
                              <img src="{{asset('assets/uploads/'.$image[$event->id])}}" alt="img" class="img-fluid" >
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="col-md-12">
                            <a href="{{url('/image-gallery')}}" class="org-link">
                                VIEW ALL 
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
                    <div class="row">
                        @foreach($vedios as $vedio)
                      <div class="col-md-3">
                            <div class="gallery-img-wrap">
                            <img src="{{asset('assets/front/images/video1.png')}}" alt="img" class="img-fluid" />
                          </div>
                      </div>
                      @endforeach
                        
                        <div class="col-md-12">
                            <a href="{{url('/vedio-gallery')}}" class="org-link">
                                VIEW ALL 
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