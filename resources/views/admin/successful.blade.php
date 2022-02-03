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
                <strong style="color:green;margin-left:20px">Your Password is Successfully reset.</strong>
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