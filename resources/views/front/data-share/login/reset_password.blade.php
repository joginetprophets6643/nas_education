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
                          <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
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

                        <div class="col-md-6 m-auto">
                            <div class="login-content">
                                <h2 class="heading-blue">
                                  RESET PASSWORD
                                </h2>
                                <p class="text-danger" id="error"></p>
                                <p class="text-success" id="success"></p>

                                @if(session('success'))
                                  <span class="text-danger">{{session('success')}}</span>
                                @endif
                                <div class="common-form login-form">

                                <form id="reset-form">
                                    <div class="form-group">
                                      <input type="number" class="form-control mobile" name="mobile_no" placeholder="Mobile No." autocomplete="off">
                                      <label class="form-input-label">Mobile No.</label>
                                      <sapn class="input-icon">
                                        <img src="{{asset('assets/front/images/mobile-icon.svg')}}" alt="icon" />
                                      </sapn>

                                      <span class="text-danger" id="valid_mobile"></span>
                                    </div>

                                    <div class="otp-wrap justify-content-center pb-0">
                                        <div class="otp-input-wrap otp-dis" >
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

                                    <div class="text-center">
                                        <span class="text-danger" id="valid_otp"></span>
                                    </div>

                                    <div class="form-group">
                                      <button type="button" class="btn org-btn p-btn mt-3 otp-dis">PROCEED</button>
                                      <div class="register-link">
                                        <a href="{{url('data-share/login')}}" class="link-blue">Back to Login!</a>
                                      </div>
                                    </div> 
                                    <input type="hidden" name="common_otp" id="common_otp">
                                </form>
                                

                                <form id="password-form" class="otp-dis">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                            <label class="form-input-label">Password</label>
                                            <span class="text-danger" id="conf_pass"></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="user" id="user_mobile">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                            <label class="form-input-label">Confirm Password</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <button type="button" class="btn org-btn s-btn">Submit</button>
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

let user='' 
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
                console.log(OTP)
                $('#common_otp').val(OTP);             

                $.ajax({
                    type: "GET",
                    headers:{
                        'Access-Control-Allow-Origin':'*'
                    },
                    url: backend_api_url + 'send-email/' + btoa(user[0].email)+ '/' + btoa(OTP),
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
    $('#common_otp').val('');
    $('.p-btn').prop('disabled',true)
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


$('.p-btn').click(()=>{

    let data=$('form').serializeArray();
    doValidation()

})

function doValidation(){
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
            $('#reset-form').css('display','none')
            $('#password-form').css('display','block')
            $('#error').html('')
            $('#success').html('')
        }
    }
    else{
        $('#valid_otp').html('The OTP field is required')
    }
    
}

$('.s-btn').click(()=>{
    let data=$('form').serializeArray();
    let pass="pass";
    let con_pass="con";
    data.forEach(item => {
        if(item.name=='password')
        {
            pass=item.value
        }
        if(item.name=='password_confirmation')
        {
            con_pass=item.value
        }
    });
    
    if(pass==con_pass){

        if(pass.length>5){

            $.ajax({
                type: "POST",
                data: data,
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                url: base_url + 'data-share/change-password',
                success: function (data) {
                    if(data){
                        console.log("updated successfully")
                        window.location='http://localhost:8000/data-share/login'
                    }
                }
            })

        }
        else{

        $('#conf_pass').html('The password must be greater than 5 characters.')

        }
        
    }else{

        $('#conf_pass').html('The password confirmation does not match.')

    }
    
    
})

</script>