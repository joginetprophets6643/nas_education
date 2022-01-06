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
                <?php $email=encode5t($email)?>
                <form class="pt-3" action="{{route('succeed',$email)}}" method="POST">
                    @csrf
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mt-3">
                      <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="display:block;" value="Reset Password"/>  
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