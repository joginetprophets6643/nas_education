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
                        <li class="breadcrumb-item active" aria-current="page">{{__('lang.Registration')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="registration-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="card-white">
                    <div class="registration-content">
                    <h2 class="heading-blue">
                        REGISTRATION
                    </h2>
                    <div class="common-form registration-form">
                        <form action="{{route('registered')}}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="form-wrap ptb-30">
                                        <h2>User Type</h2>
                                        <div class="radio-wrap">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault11" value="Individual"  {{(old('user_type') == 'Individual') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="flexRadioDefault11">
                                                Individual
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="user_type" id="flexRadioDefault12" value="Organization" {{(old('user_type') == 'Organization') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="flexRadioDefault12">
                                                Organization
                                            </label>
                                            </div>
                                            @error('user_type')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-wrap ptb-30">
                                        <h2>Gender</h2>
                                        <div class="radio-wrap">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault23" value="M" {{(old('gender') == 'M') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="flexRadioDefault23">
                                                Male
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault24" value="F" {{(old('gender') == 'F') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="flexRadioDefault24">
                                                Female
                                            </label>
                                            </div>
                                            @error('gender')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <select class="form-select form-control" name="identify_yourself">
                                        <option value="">Select</option>
                                        <option value="Govt_Organization" {{ old('identify_yourself') == "Govt_Organization" ? 'selected' : '' }}>Govt. Organization</option>
                                        <option value="Individual" {{ old('identify_yourself') == "Individual" ? 'selected' : '' }}>Individual</option>
                                    </select>
                                    <label class="form-input-label">Identify Yourself</label>
                                    @error('identify_yourself')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{old('name')}}" autocomplete="off">
                                    <label class="form-input-label">Full Name</label>
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{old('address')}}" autocomplete="off">
                                    <label class="form-input-label">Address</label>
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <select class="form-select form-control" name="country" id="country">
                                        <option value="">Country</option>
                                        <option value="India" {{ old('country') == "India" ? 'selected' : '' }}>India</option>
                                        <option value="USA" {{ old('country') == "USA" ? 'selected' : '' }}>USA</option>
                                    </select>
                                    <label class="form-input-label">Country</label>
                                    @error('country')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 otp-dis" id="state-form">
                                    <select class="form-select form-control" name="state" id="state">
                                        <option value="">State</option>
                                    </select>
                                    <label class="form-input-label">State</label>
                                    @error('state')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 otp-dis" id="district-form">
                                    <select class="form-select form-control" name="district" id="ajax_districts">
                                       <option value="">District</option> 
                                    </select>
                                    <label class="form-input-label">District</label>
                                    @error('district')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                                    <label class="form-input-label">Password</label>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autocomplete="off">
                                    <label class="form-input-label">Confirm Password</label>
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="email" placeholder="Email ID" id="email" value="{{old('email')}}" autocomplete="off">
                                    <label class="form-input-label">Email ID</label>
                                    <span class="text-danger" id="valid-email"></span>
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    @if(session('error'))
                                    <span class="text-danger">{{session('error')}}</span>
                                    @endif
                                    <input type="hidden" name="email_otp" id="email_otp">
                                    <div class="otp-wrap">
                                        <div class="otp-input-wrap">
                                            <input class="otp-input" maxlength="1" name="email_otp1"type="text" required autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="email_otp2" type="text" required autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="email_otp3" type="text" required autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="email_otp4" type="text" required autocomplete="off">
                                        </div>
                                        <div class="otp-btn">
                                            <a class="btn grey-btn" onclick="emailValidation()" id="email-btn">SEND OTP</a>
                                            <div id="ten-countdown_email" class="text-danger"></div>
                                            <div class="resend-wrap" id="email-resend">
                                                <p>Didn't receive a code?</p>
                                                <a onclick="emailValidation()" id="resend_link">Resend again</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6" id="mobile-form">
                                    <input type="number" class="form-control" placeholder="Mobile No" name="mobile_no" id="mobile" value="{{old('mobile_no')}}" autocomplete="off">
                                    <label class="form-input-label">Mobile No</label>
                                    @error('mobile_no')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" name="mobile_otp" id="mobile_otp">
                                    <div class="otp-wrap">
                                        <div class="otp-input-wrap">
                                            <input class="otp-input" maxlength="1" name="mobile_otp1" type="text" autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="mobile_otp2" type="text" autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="mobile_otp3" type="text" autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="mobile_otp4" type="text" autocomplete="off">
                                        </div>
                                        <div class="otp-btn">
                                            
                                            <a class="btn grey-btn" onclick="mobileValidation()">SEND OTP</a>
                                            <div id="ten-countdown_mobile"></div>
                                            <div class="resend-wrap">
                                                <p>Didn't receive a code?</p>
                                                <a onclick="mobileValidation()">Resend again</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                          <span class="text-danger">{{session('captcha')}}</span>
                                        @endif
                                        @error('captcha_code')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        <input type="hidden" name="captcha" id="captcha">
                                        <label class="form-input-label">Captcha</label>
                                      </div>

                                    </div>

                            
                            <div class="row">
                                <div class="form-group col-md-12 mb-0">
                                    <button type="submit" class="btn org-btn">REGISTER</button>
                                    <div class="register-link">
                                        <a href="{{url('data-share/login')}}" class="link-blue">Already Register? Login Here</a>
                                    </div>
                                </div>
                            </div>
                            </form>
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


function emailValidation(){
    // let email=document.getElementById('email').value;
    let email = $('#email').val()
    $('#email_otp').val('');
    let OTP = '';

    let valid = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if(email.toLowerCase().match(valid)){
        OTP = otpCreation();
        $.ajax({
        type: "GET",
        headers:{
            'Access-Control-Allow-Origin':'*'
        },
        url: backend_api_url + 'send-email/' + email+ '/' + OTP,
        })

        $('#email-btn').attr('style','display:none');
        $('#email-resend').attr('style','display:none');

        // document.getElementById("email-btn").style.display = "none";
        // document.getElementById("email-resend").style.display = "none";

        setTimeout(otpReset, 600000,'email');
        countdown( "ten-countdown_email", 10, 0 );
    }
    else{
        $('#valid-email').html("Please enter valid email");
    }
    console.log(OTP)
    $('#email_otp').val(OTP);
}

function otpReset(name){
    if(name === 'email'){
        $('#email_otp').val('');
    }
    if(name === 'mobile'){
        $('#mobile_otp').val('');
    }
}
function mobileValidation() {

    $('#mobile_otp').val('');
    // let mobile=document.getElementById('mobile').value;
    let mobile = $('#mobile').val()
    let OTP = '';
    let valid = /^\d{10}$/;

    if(mobile.match(valid)) {

        OTP = otpCreation();
        setTimeout(otpReset, 600000,'mobile');
        countdown( "ten-countdown_mobile", 10, 0 );

    }

    $('#mobile_otp').val(OTP);
    // console.log(OTP)
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
            document.getElementById("email-resend").style.display = "block";
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

let districts = ''
let states = ''

$('#state').change((e)=>{

    $('#ajax_districts').empty();
    $('#ajax_districts').append('<option value="">District</option>')
    let id = e.target.value;

    let dis = districts.filter(function(districts){
        return districts.state_id==id;
    })
    dis=dis.sort((a, b) => a.district_name.localeCompare(b.district_name))
    dis.forEach((item)=>{
            $('#ajax_districts').append(`<option value="${item.district_id}">
            ${item.district_name}
        </option>`);
    })
    
})

$('#country').change((ev)=>{
    let id = ev.target.value;

    $('#state').empty();
    $('#state').append('<option value="">State</option>')

    if(id=="India"){

        $('#mobile-form').css('display','block')
        $('#state-form').css('display','block')
        $('#district-form').css('display','block')
        
        states=states.sort((a, b) => a.state_name.localeCompare(b.state_name))
        states.forEach((item)=>{
                $('#state').append(`<option value="${item.state_id}">
                ${item.state_name}
            </option>`);
        })

        $('#ajax_districts').empty();
        $('#ajax_districts').append('<option value="">District</option>')

    }
    else{

        $('#mobile-form').css('display','none')
        $('#state-form').css('display','none')
        $('#district-form').css('display','none')

    }

    
})




$(document).ready(()=> {
    $.ajax({
    type: "GET",
    url: api_url + 'district_masters?limit=-1',
    }).done(response => {
        districts=response.data;
    })

    $.ajax({
    type: "GET",
    url: api_url + 'state_masters?limit=-1',
    }).done(response => {
        states=response.data;
    })
})

</script>