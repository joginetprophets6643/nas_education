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
                                            <input class="form-check-input" type="radio" name="user_type" id="Individual" value="Individual"  {{(old('user_type') == 'Individual') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="Individual">
                                                Individual
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="user_type" id="Organization" value="Organization" {{(old('user_type') == 'Organization') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="Organization">
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
                                <div class="form-group col-md-6 common-select-wrap">
                                    <select class="form-select form-control" name="identify_yourself" id="identify_yourself">
                                        <option value="">Select</option>
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
                                <div class="form-group col-md-4 common-select-wrap">
                                    <select class="form-select form-control" name="country" id="country">
                                        <option value="">Country</option>
                                        <option class="options" value="India">India</option>
                                        <option value="USA">USA</option>
                                    </select>
                                    <label class="form-input-label">Country</label>
                                    @error('country')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 common-select-wrap" id="state-form">
                                    <select class="form-select form-control" name="state" id="state" disabled>
                                        <option value="">State</option>
                                    </select>
                                    <label class="form-input-label">State</label>
                                    @error('state')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 common-select-wrap" id="district-form">
                                    <select class="form-select form-control" name="district" id="ajax_districts" disabled>
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
                                      <input type="password" class="form-control pass_log_id" name="password" id="passw" placeholder="Password" autocomplete="off">
                                      <label class="form-input-label">Password</label>
                                      <sapn class="input-icon  toggle-password ">
                                        <img class="otp-dis open-eye" src="{{asset('assets/front/images/eye-icon.svg')}}" alt="icon" />
                                        <img class="close-eye" src="{{asset('assets/front/images/eye-close.svg')}}" alt="icon" />
                                      </sapn>
                                      @error('password')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                </div>
                            
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation" id="conf_passw" placeholder="Confirm Password" autocomplete="off">
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
                                    <input type="hidden" name="email_otp" id="email_otp">
                                    <div class="otp-wrap">
                                        <div class="otp-input-wrap">
                                            <input class="otp-input" maxlength="1" name="email_otp1"type="text" autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="email_otp2" type="text" autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="email_otp3" type="text" autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="email_otp4" type="text" autocomplete="off">
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
                                    <span class="text-danger" id="valid_otp"></span>
                                </div>
                                <div class="form-group col-md-6" id="mobile-form">
                                    <input type="number" class="form-control" placeholder="Mobile No." name="mobile_no" id="mobile" value="{{old('mobile_no')}}" autocomplete="off" disabled>
                                    <label class="form-input-label">Mobile No.</label>
                                    @error('mobile_no')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" name="mobile_otp" id="mobile_otp">
                                    <div class="otp-wrap">
                                        <div class="otp-input-wrap">
                                            <input class="otp-input" maxlength="1" name="mobile_otp1" type="text" disabled autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="mobile_otp2" type="text" disabled autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="mobile_otp3" type="text" disabled autocomplete="off">
                                            <input class="otp-input" maxlength="1" name="mobile_otp4" type="text" disabled autocomplete="off">
                                        </div>
                                        <div class="otp-btn">
                                            
                                            <a class="btn grey-btn" onclick="mobileValidation()" id="mobile-btn">SEND OTP</a>
                                            <div id="ten-countdown_mobile"></div>
                                            <div class="resend-wrap">
                                                <p>Didn't receive a code?</p>
                                                <a onclick="mobileValidation()">Resend again</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            
                                <div class="row justify-content-center">
                                    <div class="form-group col-md-8 d-flex">
                                        <div class="captcha-wrap">
                                            <p class="captcha-code" id="html_captcha_code"></p>
                                            <a onclick="captchaGenerate()">
                                            <img src="{{asset('assets/front/images/refresh-icon.svg')}}" alt="icon" />
                                            </a>
                                        </div>

                                    <div class="captcha-input w-100">
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

                            </div>

                            
                            <div class="row justify-content-center">
                                <div class="form-group col-md-8 mb-0">
                                    <button type="submit" class="btn org-btn rg-btn" disabled>REGISTER</button>
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
        $('#valid-email').html("");
        $.ajax({
        type: "GET",
        headers:{
            'Access-Control-Allow-Origin':'*'
        },
        url: backend_api_url + 'send-email/' + btoa(email)+ '/' + btoa(OTP),
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
    $('#ajax_districts').empty();
    $('#ajax_districts').append('<option value="">District</option>')

    if(id=="India"){

        $('#mobile').prop('disabled',false)
        $('input[name="mobile_otp1"]').prop('disabled',false)
        $('input[name="mobile_otp2"]').prop('disabled',false)
        $('input[name="mobile_otp3"]').prop('disabled',false)
        $('input[name="mobile_otp4"]').prop('disabled',false)
        $('#state').prop('disabled',false)
        $('#ajax_districts').prop('disabled',false)
        
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
        $('#mobile').val('')
        $('#mobile').prop('disabled',true)
        $('input[name="mobile_otp1"]').prop('disabled',true)
        $('input[name="mobile_otp2"]').prop('disabled',true)
        $('input[name="mobile_otp3"]').prop('disabled',true)
        $('input[name="mobile_otp4"]').prop('disabled',true)
        $('#state').prop('disabled',true)
        $('#ajax_districts').prop('disabled',true)

    }

    
})

$('.otp-input').keyup(()=>{
  let data=$('form').serializeArray();
  let e_otp='';
  data.forEach(item => {
      if(item.name=='email_otp1' || item.name=='email_otp2' || item.name=='email_otp3' || item.name=='email_otp4'){
      e_otp+=item.value
      }
  });

  if(e_otp.length==4){
      if(e_otp!=$('#email_otp').val()){
        $('#valid_otp').html('OTP is not valid')
        $('.rg-btn').prop('disabled',true);
      }
      else{
        $('.rg-btn').prop('disabled',false);
        $('#valid_otp').html('')
      }
  }
  else{
    $('#valid_otp').html('The OTP field is required')
    $('.rg-btn').prop('disabled',true);
  }

})

function identifyOptions(name){
    if(name=='Individual'){
        $('#identify_yourself').empty();
        $('#identify_yourself').append('<option value="">Select</option>')
        $('#identify_yourself').append('<option value="Student">Student</option>')
        $('#identify_yourself').append('<option value="Research Scholar">Research Scholar</option>')
        $('#identify_yourself').append('<option value="Teacher">Teacher</option>')
        $('#identify_yourself').append('<option value="Principle">Principle</option>')
        $('#identify_yourself').append('<option value="Individual-Others">Individual-Others</option>')
    }
    else{
        $('#identify_yourself').empty();
        $('#identify_yourself').append('<option value="">Select</option>')
        $('#identify_yourself').append('<option value="NGO">NGO</option>')
        $('#identify_yourself').append('<option value="Govt. Organization">Govt. Organization</option>')
        $('#identify_yourself').append('<option value="Organization-Others">Organization-Others</option>')
    }

}

if($("#Individual").is(":checked")){
    identifyOptions('Individual')
}

if($("#Organization").is(":checked")){
    identifyOptions('Organization')
}

$("#Individual").click(()=>{
    identifyOptions('Individual')
})

$("#Organization").click(()=>{
    identifyOptions('Organization')
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

    $('#state').select2();
    $('#identify_yourself').select2();
    $('#country').select2();
    $('#ajax_districts').select2();

    captchaGenerate()
})

$("body").on('click', '.toggle-password', function() {

  var input = $(".pass_log_id");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
    $('.close-eye').css('display','none')
    $('.open-eye').css('display','flex')
  } else {
    input.attr("type", "password");
    $('.open-eye').css('display','none')
    $('.close-eye').css('display','flex')
  }

});

$('#passw').keyup(()=>{
  $('#passw').val($('#passw').val().replace(/\s+/g, " ").trim())
})
$('#conf_passw').keyup(()=>{
  $('#conf_passw').val($('#conf_passw').val().replace(/\s+/g, " ").trim())
})

</script>