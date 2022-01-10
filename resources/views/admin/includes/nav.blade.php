<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="{{url('/secure-admin/dashboard')}}">
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
              <a href="{{url('/secure-admin/profile')}}" class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
              
              <a href="{{url('/secure-admin/logout')}}" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
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
            <a class="nav-link" href="{{url('/secure-admin/dashboard')}}">
              <span class="menu-title">Dashboard</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item" id="User" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/user')}}">
              <span class="menu-title">Manage User</span>
              <i class="icon-user menu-icon"></i>
            </a>
          </li>

          <li class="nav-item" id="Media" style="display:none;">
            <a class="nav-link" data-toggle="collapse" href="#media" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Manage Media</span>
              <!-- <i class="icon-doc menu-icon"></i> -->
              <i class="fa fa-photo-video menu-icon"></i>            </a>
            <div class="collapse" id="media">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/event')}}"> Manage Images </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/videos')}}"> Manage Videos </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" id="Team" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/team-manager')}}">
              <span class="menu-title">Manage Team</span>
              <i class="fa fa-users menu-icon"></i>            
            </a>
          </li>

          <li class="nav-item" id="Content" style="display:none;">
            <a class="nav-link" href="{{url('secure-admin/static-content')}}">
              <span class="menu-title">Manage Content</span>
              <i class="fas fa-file-alt menu-icon"></i>            
            </a>
          </li>

          <li class="nav-item" id="Program" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/static-program')}}">
              <span class="menu-title">Manage Program</span>
              <i class="far fa-file-alt menu-icon"></i>            
            </a>
          </li>

          <li class="nav-item" id="Master" style="display:none;">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Master</span>
              <i class="fas fa-globe-africa menu-icon"></i>            
            </a>
            <div class="collapse" id="master">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/district')}}"> District Master </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/state')}}"> State Master </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" id="Statistic" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/national-statistic')}}">
              <span class="menu-title">National Statistic</span>
              <i class="fas fa-globe menu-icon"></i>            
            </a>
          </li>


          <li class="nav-item" id="Data" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/upload-csv-files')}}">
              <span class="menu-title">Manage Data</span>
              <i class="fas fa-database menu-icon"></i>            
            </a>
          </li>


          <li class="nav-item" id="Banner" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/manage-banner')}}">
              <span class="menu-title">Manage Banner</span>
              <i class="far fa-images menu-icon"></i>            
            </a>
          </li>

          <li class="nav-item" id="Client-Logo" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/client-logo')}}">
              <span class="menu-title">Manage Client Logo</span>
              <i class="fas fa-images menu-icon"></i>            
            </a>
          </li>

          <li class="nav-item" id="Registration" style="display:none;">
            <a class="nav-link" href="{{url('/secure-admin/registration-list')}}">
              <span class="menu-title">Total Registration</span>
              <i class="fas fa-user-friends menu-icon"></i>            
            </a>
          </li>

          <li class="nav-item" id="Setting" style="display:none;">
            <a class="nav-link" href="{{route('setting')}}">
              <span class="menu-title">Manage Setting</span>
              <!-- <i class="icon-user menu-icon"></i> -->
              <i class="fas fa-cog menu-icon"></i>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <?php $permission=permissions(Auth::user()->id);?>
      <input type="hidden" name="view[]" value="{{$permission->view}}" id="view">
      <input type="hidden" name="edit[]" value="{{$permission->edit}}" id="edit">
      <input type="hidden" name="add[]" value="{{$permission->add}}" id="add">
      <input type="hidden" name="delete[]" value="{{$permission->delete}}" id="delete">
