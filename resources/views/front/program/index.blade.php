@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="heading-yellow">
                   {{ __('lang.NAS Program') }}
                  </h2>
                  <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.NAS Program') }}</li>
                        </ol>
                    </nav>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <section class="nasprogram-main-wrap bg-grey ptb-60">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
                 <div class="card-white">
                      <div class="nasprogram-content">
                    <?php $i=0?>
                    <ul>
                        @foreach($programs as $program)
                        <?php $i++?>
                        
                    <li>
                        
                        <div class="row">
                            @if(($i%2)!=0)
                            <div class="col-md-4">
                                <div class="nasprogram-img">
                                    <img src="{{asset('assets/uploads/program/'.$program->image)}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                            @endif
                            <div class="col-md-8 order-2 order-md-1">
                                <h2 class="heading-blue-sm">
                                    {{$program->title}}
                                </h2>
                                <div class="nasprogram-desc">
                                    {!!$program->content!!}
                                </div>
                            </div>
                            @if(($i%2)==0)
                            <div class="col-md-4 order-1 order-md-2">
                                <div class="nasprogram-img">
                                    <img src="{{asset('assets/uploads/program/'.$program->image)}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                            @endif
                        </div>
                    </li>
                    @endforeach 
                    </ul>

                    <div class="nasprogram-about">
                        <div class="row">
                            @foreach($members as $member)
                            <div class="col-md-3 mb-3">
                                <h2 class="name">
                                {{$member->name}}
                                </h2>
                                <p>{{$member->designation}}</p>
                                <p>{{$member->address}}</p>
                                <p>{{$member->date}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                     
                 </div>
            </div>
          </div>
      </div>
    </section>

@include('front.includes.footer')