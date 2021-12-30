<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="{{url('/dashboard')}}">
        <img src="{{asset('assets/admin/vendors/images/logo.png')}}" alt="logo"  />        </a>
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/front/images/logo.png')}}" alt="logo" /></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome NAS Admin dashboard!</h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">          
          
          <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <span class="font-weight-normal"> {{Auth::user()->name}} </span></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <p class="mb-1 mt-3">{{Auth::user()->name}}</p>
                <p class="font-weight-light text-muted mb-0">{{Auth::user()->email}}</p>
              </div>
              <a href="/profile" class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
              
              <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>




    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard')}}">
              <span class="menu-title">Dashboard</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#media" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Manage Media</span>
              <i class="icon-doc menu-icon"></i>
            </a>
            <div class="collapse" id="media">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/events')}}"> Manage Images </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/vedios')}}"> Manage Videos </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/team-manager')}}">
              <span class="menu-title">Manage Team</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/static-content')}}">
              <span class="menu-title">Manage Content</span>
              <i class="icon-doc menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/static-program')}}">
              <span class="menu-title">Manage Program</span>
              <i class="icon-doc menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Master</span>
              <i class="icon-doc menu-icon"></i>
            </a>
            <div class="collapse" id="master">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/district')}}"> District Master </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/state')}}"> State Master </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/national-statistic')}}">
              <span class="menu-title">National Statistic</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{url('/upload-csv-files')}}">
              <span class="menu-title">Manage Data</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{url('/manage-banner')}}">
              <span class="menu-title">Manage Banner</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/client-logo')}}">
              <span class="menu-title">Manage Client Logo</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/user-list')}}">
              <span class="menu-title">Total Registration</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('setting')}}">
              <span class="menu-title">Manage Setting</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->