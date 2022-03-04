@include('front.includes.header')
@include('front.includes.nav')


<section class="banner-wrap">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h2 class="heading-yellow">
                  {{__('lang.Data Share')}}
                  </h2>
                  <div class="breadcrum-wrap">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                          <li class="breadcrumb-item"><a href="{{url('/data-share')}}">{{__('lang.Data Share')}}</a></li>
                          <li class="breadcrumb-item active" aria-current="page">{{__('lang.Login')}}</li>
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

                                <span class="text-danger" id="error"></span>
                                <span class="text-success" id="success"></span>

                                @if(session('success'))
                                  <span class="text-danger">{{session('success')}}</span>
                                @endif

                                <div class="common-form login-form password-content">
                                  <form action="{{route('check')}}" method="POST">
                                    @csrf

                                    <div class="radio-wrap ptb-15">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="method" id="mobile-radio">
                                        <label class="form-check-label" for="mobile-radio">
                                          Mobile OTP
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="method" id="password-radio" checked="">
                                        <label class="form-check-label" for="password-radio" >
                                          Password
                                        </label>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <input type="text" class="form-control mobile" name="mobile_no" placeholder="Mobile No." autocomplete="off">
                                      <label class="form-input-label">Mobile No.</label>
                                      <sapn class="input-icon">
                                        <img src="{{asset('assets/front/images/mobile-icon.svg')}}" alt="icon" />
                                      </sapn>

                                      <span class="text-danger" id="valid_mobile"></span>
                                      @error('mobile_no')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                    </div>

                                    <div class="form-group">
                                      <input type="password" class="form-control" name="password" placeholder="Password" id="pass_log_id" autocomplete="off">
                                      <label class="form-input-label">Password</label>
                                      <sapn class="input-icon  toggle-password ">
                                        <img src="{{asset('assets/front/images/eye-icon.svg')}}" alt="icon" />
                                      </sapn>
                                      @error('password')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror

                                      <div class="d-flex justify-content-between">
                                      <div class="otp-wrap otp-dis">
                                          <div class="otp-input-wrap otp-dis">
                                              <input class="otp-input" maxlength="1" name="mobile_otp1" type="text" autocomplete="off">
                                              <input class="otp-input" maxlength="1" name="mobile_otp2" type="text" autocomplete="off">
                                              <input class="otp-input" maxlength="1" name="mobile_otp3" type="text" autocomplete="off">
                                              <input class="otp-input" maxlength="1" name="mobile_otp4" type="text" autocomplete="off">
                                          </div>
                                          
                                          <div class="otp-btn">
                                              <a class="btn grey-btn" onclick="sendOtp()" id="mobile-btn">SEND OTP</a>
                                              <div id="ten-countdown_mobile"></div>
                                              <div class="resend-wrap" id="mobile-resend">
                                                  <p>Didn't receive a code?</p>
                                                  <a onclick="sendOtp()" id="resend_link">Resend again</a>
                                              </div>
                                          </div>
                                      </div>

                                      

                                      <div class="reset-link">
                                        <a href="{{url('data-share/reset-password')}}" class="link-blue">Reset Password?</a>
                                      </div>
                                      </div>
                                      <div>
                                        <span class="text-danger" id="valid_otp"></span>
                                      </div>
                                      
                                    </div>

                                    <input type="hidden" name="common_otp" id="common_otp">

                                    

                                    <div class="form-group d-flex justify-content-between">
                                      <div class="captcha-wrap">
                                          <p class="captcha-code" id="html_captcha_code"></p>
                                          <a onclick="captchaGenerate()">
                                            <img src="{{asset('assets/front/images/refresh-icon.svg')}}" alt="icon" />
                                          </a>
                                      </div>

                                      <div class="captcha-input">
                                        <input type="text" class="form-control" placeholder="Captcha" name="captcha_code" autocomplete="off">
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
                                      <button type="submit" class="btn org-btn lg-btn">LOGIN</button>
                                      <div class="register-link">
                                        <a href="{{url('data-share/registration')}}" class="link-blue">New User? Register Here</a>
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

$("body").on('click', '.toggle-password', function() {

  var input = $("#pass_log_id");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }

});

$('#mobile-radio').click(()=>{
  $('.otp-wrap').css('display','flex');
  $('.lg-btn').prop('disabled',true);
  $('.otp-input').prop('required',true);
  $("form")[0].reset();
  $('#mobile-radio').prop('checked',true)
  $('.text-danger').html('')
  
})

$('#password-radio').click(()=>{
  $('.otp-wrap').css('display','none');
  $('.lg-btn').prop('disabled',false);
  $('.otp-input').prop('required',false);
  $("form")[0].reset();
  $('#password-radio').prop('checked',true)
  $('.text-danger').html('')
  $('#success').html('')
  // $('#mobile-btn').css('display','flex')
})


let OTP='';

function sendOtp(){

    let flag=Validation();

    if(flag){
        
        const filters={
            "mobile_no":{
                "_eq": $('.mobile').val()
            }
        }

        $.ajax({
            type: "GET",
            url: api_url + "users?filter="+ JSON.stringify(filters),
        }).done(response => {
            user=response.data;

            if(user.length>0){
                $('#user_mobile').val(user[0].mobile_no)
                OTP = otpCreation(); 
                $('#common_otp').val(OTP);             

                $.ajax({
                    type: "GET",
                    headers:{
                        'Access-Control-Allow-Origin':'*'
                    },
                    url: backend_api_url + 'send-email/' + user[0].email+ '/' + OTP,
                })
                $('#error').html('')
                $('#success').html('OTP is sent to registered mobile number & email')
                $('#mobile-btn').css('display','none');
                $('#mobile-resend').css('display','none');
                $('.otp-input-wrap').css('display','block');
                $('.p-btn').prop('disabled',false)
                $('.p-btn').css('display','block');
                setTimeout(otpReset, 600000,'mobile');
                countdown( "ten-countdown_mobile", 10, 0 );

            }else{
                $('#error').html('Unauthorized User')
                $('#success').html('')

            }

        })

    }

}

function otpReset(name){
    if(name === 'mobile'){
        $('#common_otp').val('');
    }
}


function otpCreation(){
    let string = '0123456789';
    let len = string.length;
    let OTP = ""

    for (let i = 0; i < 4; i++ ) {
        OTP += string[Math.floor(Math.random() * len)];
    }
    return OTP;
}

function Validation(){

    if($('.mobile').val()==''){
        $('#valid_mobile').html("The mobile number field is required.");
        return false
    }
    else{
        let mobile = $('.mobile').val()
        let valid = /^\d{10}$/;
        
        if(mobile.match(valid)) {
            $('#valid_mobile').html("");
            return true
        }
        else{
            $('#valid_mobile').html("Please enter valid mobile number");
            return false
        }
        
    }

}

function countdown( elementName, minutes, seconds )
{
    let element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML="";
            document.getElementById("mobile-resend").style.display = "block";
            document.getElementById("resend_link").style.color = "blue";
            document.getElementById("resend_link").style.cursor = "pointer";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}


$('.otp-input').keyup(()=>{
  let data=$('form').serializeArray();
  let common_otp='';
  data.forEach(item => {
      if(item.name=='mobile_otp1' || item.name=='mobile_otp2' || item.name=='mobile_otp3' || item.name=='mobile_otp4'){
      common_otp+=item.value
      }
  });

  if(common_otp.length==4){
      if(common_otp!=$('#common_otp').val()){
        $('#valid_otp').html('OTP is not valid')
      }
      else{
        $('.lg-btn').prop('disabled',false);
        $('#valid_otp').html('')
      }
  }
  else{
    $('#valid_otp').html('The OTP field is required')
  }

})

</script>