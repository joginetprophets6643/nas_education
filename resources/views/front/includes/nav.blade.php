<body>
    <div class="header-top">
    <div class="container{{isset($container_type) ? '-'.$container_type : ''}}">
        <div class="row">
          <div class="col-md-12">
            <div class="header-top-content">
              <div class="skip-wrap nic-skip-wrap">
                <ul>
                    <li>
                    <a class="white-text" target="_blank" href="https://www.india.gov.in/">{{ __('lang.Government of India') }}</a>
                    </li>
                    <li>
                    <a class="white-text" target="_blank" href="https://www.education.gov.in/en">{{ __('lang.Ministry of Education') }}</a>
                    </li>
                </ul>
              </div>
              <div class="skip-wrap nic-skip-wrap d_sm_none">
                <ul>
                  <li>
                    <a href="#About">{{ __('lang.Skip to Main Content') }}</a>
                  </li>
                  <li>
                    <a href="{{route('screen_reader_access')}}">{{ __('lang.Screen Reader Access') }}</a>
                  </li>
                  <li>
                    <div class="d-flex">
                      <a href="javascript:void(0)" class="textplus" id="btn-orig">A</a>
                      <a href="javascript:void(0)" class="textplus" id="btn-decrease">A+</a>
                      <a href="javascript:void(0)" class="textplus" id="btn-increase">A++</a>
                    </div>
                  </li>
                  <!-- <li>
                      <div class="d-flex">
                        <a href="#" class="whitebox">A</a>
                        <a href="#" class="blackbox">A</a>
                      </div>
                  </li> -->
                  <li>
                    <a href="javascript:void(0)">
                      <div class="select-wrap">
                        <select class="form-select Langchange">
                          <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                          <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                        </select>
                        <span class="material-icons">
                          arrow_drop_down
                        </span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user-logout')}}">Logout</a>
                  </li>
                </ul>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
              </button>
            </div>
          </div>
        </div>
    </div>
    </div>
    <header class="site-header fixed-top">
    <div class="container{{isset($container_type) ? '-'.$container_type : ''}}">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg">
              <div class="logo-wrap">
                <?php $setting=get_setting()?>
                @if($setting)

                  <a class="navbar-brand" href="{{url('/')}}">
                  
                    <img src="{{asset('assets/uploads/logo/'.$setting->logo_1)}}" alt="logo" class="img-fluid" />
                  
                  </a>

                
                <a href="{{url('https://www.education.gov.in/en/school-education')}}" target="_blank">
                  <img src="{{asset('assets/uploads/logo/'.$setting->logo_2)}}" alt="img" class="img-fluid" />
                </a>
              </div>
              @endif
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link home-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}">
                      <span class="material-icons">
                        home
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('about-nas') ? 'active' : '' }}" href="{{url('/about-nas')}}">
                      {{ __('lang.about nas') }}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('nas-program') ? 'active' : '' }}" href="{{url('/nas-program')}}">{{__('lang.NAS PROGRAM')}}</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('report-card') || Request::is('report-card/*') ? 'active' : '' }}" href="{{url('/report-card')}}" target="_blank">{{__('lang.REPORT CARD')}}</a>
                  </li> -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('report-card') || Request::is('report-card/*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">{{__('lang.REPORT CARD')}}
                    <span class="material-icons-round icon-hide">
                      arrow_drop_down
                    </span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{url('/report-card/2017')}}">{{__('lang.NAS 2017')}}</a></li>
                      <li><a class="dropdown-item" href="{{url('/report-card')}}">{{__('lang.NAS 2021')}}</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('data-share') || Request::is('data-share/*') ? 'active' : '' }}" href="{{url('/data-share')}}" target="_blank">{{__('lang.DATA SHARE')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('visualization') || Request::is('visualization/*') ? 'active' : '' }}" href="{{url('/visualization')}}" target="_blank">{{__('lang.VISUALIZATION')}}</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('gallery') || Request::is('gallery/*') ? 'active' : '' }}" href="{{url('gallery')}}">{{__('lang.GALLERY')}}</a>
                  </li>
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('lang.GALLERY')}}</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{url('/image-gallery')}}">{{__('lang.Photo Gallery')}}</a></li>
                      <li><a class="dropdown-item" href="{{url('/vedio-gallery')}}">{{__('lang.Video Gallery')}}</a></li>
                    </ul>  
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('nas-team') ? 'active' : '' }}" href="{{url('nas-team')}}">{{__('lang.NAS TEAM')}}</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('nas-exam') ? 'active' : '' }}" href="{{url('http://nas21.inroad.in/web/nas-exam.html')}}" target="_blank">{{__('lang.NAS EXAM')}}</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('mobile-app') ? 'active' : '' }}" href="{{url('mobile-app')}}">{{__('lang.MOBILE APP')}}</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('download-data-state-wise') ? 'active' : '' }}" href="{{url('download-data-state-wise')}}">{{__('lang.Download')}}</a>
                  </li> -->
                </ul>
                <!-- <div class="btn-wrap">
                  <a href="#" class="btn btn_sm org-btn">Login</a>
                </div> -->
              </div>
            </nav>
</div>
</div>
</div>
      
    </header>