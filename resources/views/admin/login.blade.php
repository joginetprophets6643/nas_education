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
                  <span class="text-danger">{{session('success')}}</span>
                @endif
                <form class="pt-3" action="{{url('/login-post')}}" method="POST" id="frm">
                    @csrf
                    <input type="hidden" name="address">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" autocomplete="off">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mt-3">
                      <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="display:block;" value="Login"/>  
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="{{url('/secure-admin/forget-password')}}" class="auth-link text-black" style="display:block">Forgot password?</a>
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

<script>

  $('form').on('submit', function (e) {
    e.preventDefault();
     form = $('#frm'); //$("#frm")

      $.each(form.elements, function (i, el) {
        console.log(el)
          el.value = btoa($('input[name=email]').val());
      });

      // form.submit();
    e.currentTarget.submit();
  })
</script>