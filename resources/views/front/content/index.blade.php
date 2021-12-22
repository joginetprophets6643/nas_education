@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-yellow">
                        {{ __('lang.National Achievement Survey') }}
                    </h2>
                    <div class="breadcrum-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                              @if(!empty($content->page_meta_title))
                              <li class="breadcrumb-item active" aria-current="page">{{$content->page_meta_title}}</li>
                              @endif
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutpage-wrap bg-grey ptb-60" data-aos="fade-up">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                @if(!empty($content->page_meta_title))
                   <div class="card-white">
                    <div class="d-flex">
                      {{-- <div class="col-md-12 col-lg-6 aboutpage-img-wrap">
                        <img src="{{asset('assets/front/images/about.png')}}" alt="img" class="img-fluid" />
                      </div> --}}
                      <div class="col-md-12 col-lg-6 aboutpage-content">
                        <h2 class="heading-blue">
                          {{$content->page_meta_title}}
                        </h2>
                        
                      </div>
                      
                    </div>
                    <div class="col-md-12">
                      <div class="desc-black" data-aos="fade-up">
                            {!!$content->inner_page_content!!}
                        </div>
                    </div>
                   </div>
                   @endif
              </div>
                
                
            </div>
        </div>
    </section>
@include('front.includes.footer')