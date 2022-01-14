@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{__('lang.Data Share')}}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('lang.Data Share')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="datashare-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="card-white">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                    <p class="desc-black">
                    The NAS 2021 collects data on the learning levels disaggregated by gender, location, social groups and management of schools, wherever applicable at various administrative levels such as the national, state, and district. Disaggregating data is important to reveal patterns that are generally masked by large aggregate data. Disaggregated data analysis is important to inform decisions related to implementation, monitoring, efficiency, effectiveness and equity of a development intervention. It can also be used to advocate specific policy changes, provide evidence for targeted and differential programming, and look for patterns over time and see if similarities or differences within and among sub-groups are emerging. The DVA facilitates disaggregated analysis presentation of data collected in NAS for informed decision-making for policy planning, programme management and advocacy.
                    </p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="line-card line-card-pink">
                    <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/ds-login.png')}}" alt="login" class="img-fluid" />
                    </div>
                    <div class="btn-wrap">
                        <a href="{{url('data-share/login')}}" class="line-cardbtn w-100 btn-pink">Login to Download Data</a>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="line-card line-card-green">
                    <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/ds-registration.png')}}" alt="registration" class="img-fluid" />
                    </div>
                    <div class="btn-wrap">
                        <a href="{{url('data-share/registration')}}" class="line-cardbtn w-100 btn-green">Register for Data Request</a>
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