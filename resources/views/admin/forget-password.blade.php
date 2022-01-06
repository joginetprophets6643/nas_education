@include('admin.includes.header')

<body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                <div class="row">
                <div class="col-2">
                <img src="{{asset('assets/admin/vendors/images/NAS_Icon.svg')}}" style="width:100%">
                </div>
                <div class="col-10">
                <img src="{{asset('assets/front/images/logo.png')}}" style="width:100%">
                </div>
                </div>
                </div>
                @if(session('success'))
                  <span style="color:green;">{{session('success')}}</span>
                @endif
                @if(session('error'))
                  <span class="text-danger">{{session('error')}}</span>
                @endif
                <form class="pt-3" action="{{url('/proceed')}}" method="POST">
                    @csrf
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email Address">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mt-3">
                      <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="display:block;" value="Proceed"/>  
                  </div>
                </form>
                <div class="mt-3">
                <a href="{{url('/secure-admin')}}" class="auth-link text-center text-black" style="display:block">Back to Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.includes.footer')
  </body>
</html>