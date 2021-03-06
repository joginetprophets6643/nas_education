<link href="{{asset('assets/front-login/css/style.css')}}" rel="stylesheet">

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
                <img src="{{asset('assets/front-login/images/NAS_Icon.svg')}}" style="width:100%">
                </div>
                <div class="col-10">
                <img src="{{asset('assets/front/images/logo.png')}}" style="width:100%">
                </div>
                </div>
                </div>
                  <span class="text-danger" id="failed"></span>
                <form class="pt-3" method="post">
                    <input type="hidden" name="address">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" autocomplete="off" required>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="passw" placeholder="Password" autocomplete="off" required>
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="mt-3">
                      <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="display:block;" value="Login"/>  
                  </div>
                  <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="{{url('/secure-admin/forget-password')}}" class="auth-link text-black" style="display:block">Forgot password?</a>
                  </div> -->

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
  </body>
  <script src="{{asset('assets/front/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
  <script>
      $('#admin-title').html('NAS')
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          data={
            'email':btoa($('input[name=email]').val()),
            'password':btoa($('input[name=password]').val())
          }
          data = {...data ,"_token": "{{ csrf_token() }}"}
          var url = '{{ route("credentials")}}';
          $.ajax({
            type: "POST",
            contentType: "application/json",
            dataType: "json",
            data:JSON.stringify(data),
            url: url,
          }).done((response)=>{
            if(response=='success'){
              window.location='{{route("/")}}'
            }
            else{
              $('#failed').html('Login details are invalid')
            }

          })

        });

      });

      $(document).ready(function () {     
    
        $('#passw').keypress(function (e) {    
            var charCode = (e.which) ? e.which : event.keyCode    

            if (e.currentTarget.value.length == 11)    

                return false;                        

        });

      });
      
  </script>
</html>