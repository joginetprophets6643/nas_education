@include('front.includes.header')
@include('front.includes.nav')


<section class="banner-wrap">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="heading-yellow">
                    Data Share
                  </h2>
                  <div class="breadcrum-wrap">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="data-share.html">Data Share</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                          </ol>
                        </nav>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <section class="login-wrap bg-grey ptb-60">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
                 <div class="card-white">
                     <div class="login-container row">
                       
                        <div class="col-md-6">
                             <div class="login-img-wrap">
                                 <img src="{{asset('assets/front/images/login-img.gif')}}" alt="login" class="img-fluid" />
                             </div>
                        </div>
                        <div class="col-md-6">
                            <div class="login-content">
                                <h2 class="heading-blue">
                                  LOGIN
                                </h2>
                                @if(session('success'))
                                  <span class="text-danger">{{session('success')}}</span>
                                @endif
                                <div class="common-form login-form">
                                  <form action="{{route('check')}}" method="POST">
                                    @csrf
                                    <div class="radio-wrap ptb-15">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="method" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Mobile OTP
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="method" id="flexRadioDefault2" checked="">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Password
                                        </label>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No">
                                      <label class="form-input-label">Mobile No</label>
                                      <sapn class="input-icon">
                                        <img src="{{asset('assets/front/images/mobile-icon.svg')}}" alt="icon" />
                                      </sapn>
                                      @error('mobile_no')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" name="password" placeholder="Password">
                                      <label class="form-input-label">Password</label>
                                      <sapn class="input-icon">
                                        <img src="{{asset('assets/front/images/eye-icon.svg')}}" alt="icon" />
                                      </sapn>
                                      @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                      <div class="reset-link">
                                        <a href="#" class="link-blue">Reset Password?</a>
                                      </div>
                                      
                                    </div>
                                    <div class="form-group">
                                      <div class="captcha-wrap">
                                          <p class="captcha-code" id="html_captcha_code"></p>
                                          <a onclick="captchaGenerate()">
                                            <img src="{{asset('assets/front/images/refresh-icon.svg')}}" alt="icon" />
                                          </a>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="captcha-input">
                                        <input type="text" class="form-control" placeholder="Captcha" name="captcha_code">
                                        @if(session('error'))
                                          <span class="text-danger">{{session('error')}}</span>
                                        @endif
                                        @error('captcha_code')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <input type="hidden" name="captcha" id="captcha">
                                        <label class="form-input-label">Captcha</label>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <button type="submit" class="btn org-btn">LOGIN</button>
                                      <div class="register-link">
                                        <a href="{{url('registration')}}" class="link-blue">New User? Register Here</a>
                                      </div>
                                    </div>  
                                  </form>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>    
          </div>
      </div>
    </section>

@include('front.includes.footer')

<script>
$(document).ready(function() {
  captchaGenerate()
  })
function captchaGenerate(){
        var string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var len = string.length;
        let captcha=""
        for (let i = 0; i < 6; i++ ) {
            captcha += string[Math.floor(Math.random() * len)];
        }
        $('#html_captcha_code').html(captcha);
        $('#captcha').val(captcha);
}


</script>