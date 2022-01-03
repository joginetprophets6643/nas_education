@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{__('lang.DATA SHARE')}}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('lang.DATA SHARE')}}</li>
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
                    <div class="datashare-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br />
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="btn-wrap mtb-30">
                        <a class="btn btn-pink" href="{{url('/data-share/login')}}"><span><img src="{{asset('assets/front/images/user-icon.svg')}}" alt="img" class="img-fluid" /></span> Login to Download Data</a>
                        <a class="btn btn-green" href="{{url('/data-share/registration')}}"><span><img src="{{asset('assets/front/images/pencil-icon.svg')}}" alt="img" class="img-fluid" /></span> Register for Data Request</a>
                    </div>
                    </div>
                </div>
        </div>
            
            
        </div>
    </div>
</section>

@include('front.includes.footer')