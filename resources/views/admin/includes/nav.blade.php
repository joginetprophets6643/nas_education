<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="{{url('/secure-admin/dashboard')}}">
        <img src="{{asset('assets/admin/vendors/images/NAS_Icon.svg')}}" alt="logo"  />
        <!-- <img src="{{asset('assets/front/images/logo.png')}}" alt="logo"  />         -->
      </a>
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/front/images/logo.png')}}" alt="logo" /></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="welcome-heading mb-0 font-weight-medium d-lg-flex">Welcome NAS Admin dashboard!</h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">          
          
          <li class="nav-item dropdown d-xl-inline-flex user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#"  data-bs-toggle="dropdown" aria-expanded="false">
            <span class="font-weight-normal"> {{Auth::user()->name}} </span></a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <p class="mb-1 mt-3">{{Auth::user()->name}}</p>
                <p class="email-text font-weight-light text-muted mb-0">{{Auth::user()->email}}</p>
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
          
          <li class="nav-item hide-item" id="User">
            <a class="nav-link" href="{{url('/secure-admin/user')}}">
              <span class="menu-title">Manage User</span>
              <img src="{{asset('assets/admin/vendors/images/user-solid.svg')}}" alt="">
            </a>
          </li>

          <li class="nav-item hide-item" id="Media">
            <a class="nav-link" data-bs-toggle="collapse" href="#media" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Manage Media</span>
              <!-- <i class="icon-doc menu-icon"></i> -->
              <img class="sidebar-icons" src="{{asset('assets/admin/vendors/images/photo-film-solid.svg')}}" alt="">
            </a>
            <div class="collapse" id="media">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/event')}}"> Manage Images </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/video_event')}}"> Manage Videos </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item hide-item" id="Team">
            <a class="nav-link" href="{{url('/secure-admin/team-manager')}}">
              <span class="menu-title">Manage Team</span>
              <img class="sidebar-icons" src="{{asset('assets/admin/vendors/images/users-solid.svg')}}" alt="">           
            </a>
          </li>

          <li class="nav-item hide-item" id="Content">
            <a class="nav-link" href="{{url('secure-admin/static-content')}}">
              <span class="menu-title">Manage Content</span>
              <img src="{{asset('assets/admin/vendors/images/file-alt-solid.svg')}}" alt="">            
            </a>
          </li>

          <li class="nav-item hide-item" id="Program">
            <a class="nav-link" href="{{url('/secure-admin/static-program')}}">
              <span class="menu-title">Manage Program</span>
              <img src="{{asset('assets/admin/vendors/images/file-lines-solid.svg')}}" alt="">            
            </a>
          </li>

          <li class="nav-item hide-item" id="Master">
            <a class="nav-link" data-bs-toggle="collapse" href="#master" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Master</span>
              <img src="{{asset('assets/admin/vendors/images/earth-africa-solid.svg')}}" alt="">            
            </a>
            <div class="collapse" id="master">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/district')}}"> District Master </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/secure-admin/state')}}"> State Master </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item hide-item" id="Statistic">
            <a class="nav-link" href="{{url('/secure-admin/national-statistic')}}">
              <span class="menu-title">National Statistic</span>
              <img src="{{asset('assets/admin/vendors/images/globe-solid.svg')}}" alt="">            
            </a>
          </li>


          <li class="nav-item hide-item" id="Data">
            <a class="nav-link" href="{{url('/secure-admin/upload-csv-files')}}">
              <span class="menu-title">Manage Data</span>
              <img src="{{asset('assets/admin/vendors/images/database-solid.svg')}}" alt="">            
            </a>
          </li>

          <li class="nav-item hide-item" id="Query">
            <a class="nav-link" href="{{url('/secure-admin/query-button')}}">
              <span class="menu-title">Query Buttons</span>
              <img src="{{asset('assets/admin/vendors/images/database-solid.svg')}}" alt="">            
            </a>
          </li>


          <li class="nav-item hide-item" id="Banner">
            <a class="nav-link" href="{{url('/secure-admin/manage-banner')}}">
              <span class="menu-title">Manage Banner</span>
              <img class="sidebar-icons" src="{{asset('assets/admin/vendors/images/images-regular.svg')}}" alt="">            
            </a>
          </li>

          <li class="nav-item hide-item" id="Client-Logo">
            <a class="nav-link" href="{{url('/secure-admin/client-logo')}}">
              <span class="menu-title">Manage Client Logo</span>
              <img class="sidebar-icons" src="{{asset('assets/admin/vendors/images/images-solid.svg')}}" alt="">          
            </a>
          </li>

          <li class="nav-item hide-item" id="Registration">
            <a class="nav-link" href="{{url('/secure-admin/registration-list')}}">
              <span class="menu-title">Total Registration</span>
              <img class="sidebar-icons" src="{{asset('assets/admin/vendors/images/user-group-solid.svg')}}" alt="">            
            </a>
          </li>

          <li class="nav-item  hide-item" id="RTI">
            <a class="nav-link" href="{{url('/secure-admin/manage-rti')}}">
              <span class="menu-title">Manage RTI</span>
              <!-- <i class="icon-user menu-icon"></i> -->
              <img src="{{asset('assets/admin/vendors/images/file-pdf-solid.svg')}}" alt="">           
            </a>
          </li>

          <li class="nav-item  hide-item" id="Setting">
            <a class="nav-link" href="{{route('setting')}}">
              <span class="menu-title">Manage Setting</span>
              <!-- <i class="icon-user menu-icon"></i> -->
              <img src="{{asset('assets/admin/vendors/images/gear-solid.svg')}}" alt="">
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
