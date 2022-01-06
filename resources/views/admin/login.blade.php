@include('admin.includes.header')

<body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="{{asset('assets/front/images/logo.png')}}" style="width:100%">
                </div>
                @if(session('success'))
                  <span class="text-danger">{{session('success')}}</span>
                @endif
                <form class="pt-3" action="{{url('/login-post')}}" method="POST">
                    @csrf
                    <input type="hidden" name="address">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                      <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="display:block;" value="Login"/>  
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="{{url('/forget-password')}}" class="auth-link text-black" style="display:block">Forgot password?</a>
                  </div>

                </form>
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