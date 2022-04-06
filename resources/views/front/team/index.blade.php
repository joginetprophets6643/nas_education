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
                @foreach($members as $key =>$member)
                    <div class="nasteam-list mb-4">
                    @if($key)
                    <div class="row">
                        @if($key=="NAS-2021 National Steering Committee")
                        <div class="col-md-12 p-0 nasteam-heading dark-blue">

                            <h2 class="heading-white">
                            {{$key}}
                            </h2>
                        </div>
                        @else
                        <div class="col-md-12 p-0 nasteam-heading dark-pink">
                        <h2 class="heading-white">
                        {{$key}}
                        </h2>
                        </div>
                        @endif
                    </div> 
                        <ul>
                            <li>
                            <div class="row">
                            @foreach($member as $mem)
                                @if($key=="NAS-2021 National Steering Committee")
                                <div class="col-md-4 nasteam-container team-blue">
                                    <div class="nasteam-content">
                                        <div class="content-left">
                                        <div class="img-wrap">
                                            @if(empty($mem->image))
                                            <img src="{{asset('assets/front/images/user.png')}}" alt="user" class="img-fluid" />
                                            @else
                                            <img src="{{asset('assets/uploads/team/'.$mem->image)}}" alt="user" class="img-fluid" />
                                            @endif
                                        </div>  
                                        </div>
                                        <div class="content-right">
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
                                </div>
                                @else
                                <div class="col-md-4 nasteam-container team-pink">
                                    <div class="nasteam-content">
                                    <div class="content-left">
                                        <div class="img-wrap">
                                        @if(empty($mem->image))
                                        <img src="{{asset('assets/front/images/user.png')}}" alt="user" class="img-fluid" />
                                        @else
                                        <img src="{{asset('assets/uploads/team/'.$mem->image)}}" alt="user" class="img-fluid" />
                                        @endif
                                        </div>  
                                        </div>
                                        <div class="content-right">
                                        <h2 class="name-blue">
                                            <?php $name=explode(',',$mem->name)?>
                                            {{$name[0]}}<br>
                                            {{isset($name[1])?$name[1]:''}}
                                        </h2>
                                        <p class="title">
                                            {{$mem->designation}} 
                                        </p>
                                        <p class="number">
                                            {{$mem->mobile}}
                                        </p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            </li>
                    </ul>
                        @endif
                        </div>
                        @endforeach

                                
</section>

@include('front.includes.footer')