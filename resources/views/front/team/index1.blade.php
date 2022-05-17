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
                  @foreach($members as $key=>$member)
                    @if($key=="NAS-2021 National Steering Committee")
                      <div class="nasteam-list mb-4">
                        <div class="row">
                            <div class="col-md-12 p-0 nasteam-heading dark-blue">
                                <h2 class="heading-white">
                                    {{$key}}
                                </h2>
                            </div>    
                        </div> 
                          <ul>                            
                            <li>
                              <div class="row">
                                  @foreach($member as $data)
                                  <div class="col-md-4 nasteam-container team-blue p-0">
                                      <div class="nasteam-content">
                                        <div class="content-left">
                                          <div class="img-wrap">
                                            @if(empty($data->image))
                                            <img src="{{asset('assets/front/images/user.png')}}" alt="user" class="img-fluid" />
                                            @else
                                            <img src="{{asset('assets/uploads/team/'.$data->image)}}" alt="user" class="img-fluid" />
                                            @endif
                                          </div>  
                                        </div>
                                        <div class="content-right">
                                          <h2 class="name-blue">
                                              {{$data->name}}
                                          </h2>
                                          <p class="title">
                                              {{$data->designation}} 
                                          </p>
                                          <p class="number">
                                              {{$data->mobile}} 
                                          </p>
                                        </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                            </li>                            
                          </ul>     
                      </div>
                    
                    @elseif($key=="Sub-Committee : Data Analysis, Reporting  and Dissemination")
                      <div class="nasteam-list mb-4">
                        <div class="row">
                            <div class="col-md-12 p-0 nasteam-heading dark-pink">
                                <h2 class="heading-white">
                                    {{$key}}
                                </h2>
                            </div>    
                        </div> 
                          <ul>
                            <li>
                              <div class="row">
                                @foreach($member as $data)
                                  <div class="col-md-4 nasteam-container team-pink p-0">
                                      <div class="nasteam-content">
                                        <div class="content-left">
                                          <div class="img-wrap">
                                            @if(empty($data->image))
                                            <img src="{{asset('assets/front/images/user.png')}}" alt="user" class="img-fluid" />
                                            @else
                                            <img src="{{asset('assets/uploads/team/'.$data->image)}}" alt="user" class="img-fluid" />
                                            @endif
                                          </div>  
                                        </div>
                                        <div class="content-right">
                                          <h2 class="name-blue">
                                              {{$data->name}}
                                          </h2>
                                          <p class="title">
                                              {{$data->designation}} 
                                          </p>
                                          <p class="number">
                                              {{$data->mobile}}
                                          </p>
                                        </div>
                                      </div>
                                  </div>
                                @endforeach
                              </div>
                            </li>
                          </ul>     
                      </div>
                    @elseif($key=="National Project Coordinators")
                      <div class="nasteam-list mb-4">
                        <div class="row">
                            <div class="col-md-12 p-0 nasteam-heading dark-blue">
                                <h2 class="heading-white">
                                    {{$key}}
                                </h2>
                            </div>    
                        </div> 
                          <ul>
                              <li>
                                <div class="row">
                                  @foreach($member as $data)
                                    <div class="col-md-6 nasteam-container team-blue p-0">
                                        <div class="nasteam-subheading">
                                            <h2>{{$data->sub_title}}</h2>
                                        </div>
                                        <div class="nasteam-content">
                                          <div class="content-left">
                                            <div class="img-wrap">
                                              @if(empty($data->image))
                                              <img src="{{asset('assets/front/images/user.png')}}" alt="user" class="img-fluid" />
                                              @else
                                              <img src="{{asset('assets/uploads/team/'.$data->image)}}" alt="user" class="img-fluid" />
                                              @endif
                                            </div>  
                                          </div>
                                          <div class="content-right">
                                            <h2 class="name-blue">
                                                {{$data->name}}
                                            </h2>
                                            <p class="title">
                                                {{$data->designation}} 
                                            </p>
                                            <p class="number">
                                                {{$data->mobile}}
                                            </p>
                                          </div>
                                        </div>
                                    </div>
                                  @endforeach
                                </div>
                              </li>
                          </ul>     
                      </div>
                    @else
                      <div class="nasteam-list mb-4">
                        <div class="row">
                            <div class="col-md-12 p-0 nasteam-heading dark-pink">
                                <h2 class="heading-white">
                                    {{$key}} 
                                </h2>
                            </div>    
                        </div> 
                          <ul>
                            <li>
                              <div class="row">
                                <?php $sub_title=array();$member=$member->groupBy('sub_title');?>
                                @foreach($member as $sub_key=>$data)
                                @if(!in_array($sub_key,$sub_title))
                                  <div class="col-md-12 nasteam-container team-pink p-0">
                                      <div class="nasteam-subheading">
                                          <h2>{{$sub_key}}</h2>
                                      </div>
                                  </div>
                                  <?php array_push($sub_title,$sub_key)?>
                                @endif
                                @foreach($data as $data)
                                  <div class="col-md-4 nasteam-container team-pink p-0">
                                      <div class="nasteam-content">
                                        <div class="content-left">
                                          <div class="img-wrap">
                                            @if(empty($data->image))
                                            <img src="{{asset('assets/front/images/user.png')}}" alt="user" class="img-fluid" />
                                            @else
                                            <img src="{{asset('assets/uploads/team/'.$data->image)}}" alt="user" class="img-fluid" />
                                            @endif
                                          </div>  
                                        </div>
                                        <div class="content-right">
                                          <h2 class="name-blue">
                                              {{$data->name}}
                                          </h2>
                                          <p class="title">
                                              {{$data->designation}} 
                                          </p>
                                          <p class="number">
                                              {{$data->mobile}}
                                          </p>
                                        </div>
                                      </div>
                                  </div>
                                @endforeach
                                @endforeach  
                              </div>
                            </li>
                          </ul>     
                      </div>
                    @endif
                  @endforeach
                 </div>
            </div>
          </div>
      </div>
    </section>

    @include('front.includes.footer')