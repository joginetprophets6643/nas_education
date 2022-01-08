<body>
    <div class="header-top">
      <div class="date">
        Last Modified : 25/11/2021
      </div>
      <div class="skip-wrap">
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
        </ul>
      </div>
      
    </div>
    <header class="site-header fixed-top">
        <nav class="navbar navbar-expand-lg">
          <div class="logo-wrap">
            <?php $setting=get_setting()?>
            @if($setting)
            <div class="d-flex justify-content-between w-100">
              <a class="navbar-brand" href="{{url('/')}}">
              
                <img src="{{asset('assets/uploads/logo/'.$setting->logo_1)}}" alt="logo" class="img-fluid" />
              
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
            </div>
            
            <a href="#">
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
              <li class="nav-item">
                <a class="nav-link {{ Request::is('report-card') ? 'active' : '' }}" href="{{url('/report-card')}}">{{__('lang.REPORT CARD')}}</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('lang.REPORT CARD')}}</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="report-card.html">{{__('lang.NAS 2017')}}</a></li>
                  <li><a class="dropdown-item" href="report-card.html">{{__('lang.NAS 2021')}}</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                <a class="nav-link {{ Request::is('data-share') || Request::is('data-share/*') ? 'active' : '' }}" href="{{url('/data-share')}}">{{__('lang.DATA SHARE')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('visualization') ? 'active' : '' }}" href="{{url('/visualization')}}">{{__('lang.VISUALIZATION')}}</a>
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
            </ul>
            <!-- <div class="btn-wrap">
              <a href="#" class="btn btn_sm org-btn">Login</a>
            </div> -->
          </div>
      </nav>
      
    </header>