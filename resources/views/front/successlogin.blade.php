@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                Data Share
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/data-share')}}">Data Share</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="registration-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="card-white">
                    <div class="registration-content">
                    <h2 class="heading-blue">
                        LOGIN
                    </h2>
                    <div>
                        <p>LOGIN Successfully Done</p>
                        <div class="register-link">
                        <a href="{{url('data-share/logout')}}" class="link-blue">Logout</a>
                        </div>
                    </div>
                    </div>
                </div>
        </div>   
        </div>
    </div>
</section>
@include('front.includes.footer')
