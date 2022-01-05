@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{ __('lang.NAS Team') }}
                </h2>
                <div class="breadcrum-wrap">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('lang.NAS Team') }}</li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nasteam-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="card-white">
                    <div class="nasteam-list mb-4">
                    <div class="row">
                        @foreach($members as $key =>$member)
                        @if($key)
                        <div class="col-md-12 nasteam-heading">
                            <h2 class="heading-black-sm">
                                {{$key}}
                            </h2>
                        </div>
                          
                    </div> 
                        <ul>
                            <li>
                            <div class="row">
                                @foreach($member as $mem)
                                @if($key=="NAS-2021 National Steering Committee")
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            {{$mem->name}}
                                        </h2>
                                        <p class="title">
                                            {{$mem->designation}} 
                                        </p>
                                        <p class="number">
                                            {{$mem->mobile}}
                                        </p>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            {{$mem->name}}
                                        </h2>
                                        <p class="title">
                                            {{$mem->designation}} 
                                        </p>
                                        <p class="number">
                                            {{$mem->mobile}}
                                        </p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
</li>
</ul>
<br>
                        @endif
                        @endforeach
                        </div>
                                <!-- <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Maneesh Garg
                                        </h2>
                                        <p class="title">
                                            IAS, Jt. Secretary, DoSEL, Min. of Education 
                                        </p>
                                        <p class="number">
                                            011-23386232
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Prof. (Dr.) Sridhar Srivastava
                                        </h2>
                                        <p class="title">
                                            Director NCERT 
                                        </p>
                                        <p class="number">
                                            011-26519154, 011-26510105
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="row">
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Prem Singh
                                        </h2>
                                        <p class="title">
                                            IAS, Advisor, NITI Aayog 
                                        </p>
                                        <p class="number">
                                            011-23096677, 011-23096688
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            P.K. Banerjee
                                        </h2>
                                        <p class="title">
                                            DDG (Stats), DoSEL,Min. of Education 
                                        </p>
                                        <p class="number">
                                            011-26712464
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Prof. (Dr.) IndraniBhaduri
                                        </h2>
                                        <p class="title">
                                            Head, ESD, NCERT 
                                        </p>
                                        <p class="number">
                                            011-26592143
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="row">
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            J.P. Pandey
                                        </h2>
                                        <p class="title">
                                            Director, DoSEL, Min. of Education 
                                        </p>
                                        <p class="number">
                                            011-23383324
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Manoj Kr. Srivastava
                                        </h2>
                                        <p class="title">
                                            Director (PE) Head NAS Cell-CBSE 
                                        </p>
                                        <p class="number">
                                            011-22059683
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Saba Akhtar
                                        </h2>
                                        <p class="title">
                                            Scientist F, NIC 
                                        </p>
                                        <p class="number">
                                            011-23381570
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </li>
                        </ul>     
                    </div>

                    <div class="nasteam-list">
                    <div class="row">
                        <div class="col-md-12 nasteam-heading">
                            <h2 class="heading-black-sm">
                                NAS Cell CBSE HQ
                            </h2>
                        </div>    
                    </div> 
                        <ul>
                            <li>
                            <div class="row">
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Manoj Kr. Srivastava
                                        </h2>
                                        <p class="title">
                                            Head (NAS Cell) and Director 
                                        </p>
                                        <p class="number">
                                            011-22059683
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Raj Rani Sharma, Dy. Secretary
                                        </h2>
                                        <p class="title">
                                            Admin & Conf 
                                        </p>
                                        <p class="number">
                                            011-22421437
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Shambhu Lal Prasad, Dy. Secretary
                                        </h2>
                                        <p class="title">
                                            IT
                                        </p>
                                        <p class="number">
                                            011-22054966
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="row">
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Shekhar Chandra, Dy. Secretary
                                        </h2>
                                        <p class="title">
                                            Exam & A/c 
                                        </p>
                                        <p class="number">
                                            011-22054966
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Ajay Gupta, Asst. Secretary
                                        </h2>
                                        <p class="title">
                                            Exam 
                                        </p>
                                        <p class="number">
                                            011-22054966
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Indu Kumar, Asst. Secretary
                                        </h2>
                                        <p class="title">
                                            Coordination 
                                        </p>
                                        <p class="number">
                                            011-22054966
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="row">
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                        <h2 class="name-blue">
                                            Pradip Sagar, Accounts Officer
                                        </h2>
                                        <p class="title">
                                            Payments/PFMS 
                                        </p>
                                        <p class="number">
                                            011-22054966
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </li>
                        </ul>     
                    </div> -->
                <!-- </div>
        </div>
        </div>
    </div> -->
</section>

@include('front.includes.footer')