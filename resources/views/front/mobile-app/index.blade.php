@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{ __('lang.Mobile App') }}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Mobile App') }}</li>
                        </ol>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mobileapp-page-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-white">
                    <div class="row align-items-center">
                    <div class="col-md-6">
                    <div class="mobileapp-img-wrap">
                        <img src="{{asset('assets/front/images/mobileapp.png')}}" alt="img" class="img-fluid" />
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mobileapp-content">
                        <h2 class="heading-blue">
                            MOBILE APP
                        </h2>
                        <p class="desc-black">
                            This mobile application provides a quick and an easy access to information on learning outcome. Disaggregated and details learning achievement by management of schools, gender, social groups and location till district level in classes 3, 5 and 8 and detailed achievement by learning outcomes in classes 3, 5 and 8 are provided in the mobile app. After the selection of indicator and subgroup user can visualize information in charts and maps as per his/her choice and easily share through email or social media to any other user.
                        </p>
                        <div class="app-wrap">
                            <h3 class="text-black">
                                Download the <span class="text-red">FREE</span> App Today!
                            </h3>
                            <div class="btn-wrap">
                                <a href="#" class="btn app-btn">
                                    <img src="{{asset('assets/front/images/google_play.png')}}" alt="gp" class="img-fluid" />
                                </a>
                                <a href="#" class="btn app-btn">
                                    <img src="{{asset('assets/front/images/app_store.png')}}" alt="as" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>

@include('front.includes.footer')
