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
                        <li class="breadcrumb-item active" aria-current="page">Registration</li>
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
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{old('name')}}">
                                    <label class="form-input-label">Full Name</label>
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{old('address')}}">
                                    <label class="form-input-label">Address</label>
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <select class="form-select form-control" name="country">
                                        <option value="">Country</option>
                                        <option value="India" {{ old('country') == "India" ? 'selected' : '' }}>India</option>
                                    </select>
                                    <label class="form-input-label">Country</label>
                                    @error('country')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="form-select form-control" name="state" id="state">
                                        <option value="">State</option>
                                        @foreach($states as $state)
                                        <option value="{{$state->state_id}}">{{$state->state_name}}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-input-label">State</label>
                                    @error('state')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4">
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
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <label class="form-input-label">Password</label>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                    <label class="form-input-label">Confirm Password</label>
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="email" placeholder="Email ID" id="email" value="{{old('email')}}">
                                    <label class="form-input-label">Email ID</label>
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    @if(session('error'))
                                    <span class="text-danger">{{session('error')}}</span>
                                    @endif
                                    <input type="hidden" name="email_otp" id="email_otp">
                                    <div class="otp-wrap">
                                        <div class="otp-input-wrap">
                                            <input class="otp-input" maxlength="1" name="email_otp1"type="text">
                                            <input class="otp-input" maxlength="1" name="email_otp2" type="text">
                                            <input class="otp-input" maxlength="1" name="email_otp3" type="text">
                                            <input class="otp-input" maxlength="1" name="email_otp4" type="text">
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
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Mobile No" name="mobile_no" id="mobile" value="{{old('mobile_no')}}">
                                    <label class="form-input-label">Mobile No</label>
                                    @error('mobile_no')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" name="mobile_otp" id="mobile_otp">
                                    <div class="otp-wrap">
                                        <div class="otp-input-wrap">
                                            <input class="otp-input" maxlength="1" name="mobile_otp1" type="text">
                                            <input class="otp-input" maxlength="1" name="mobile_otp2" type="text">
                                            <input class="otp-input" maxlength="1" name="mobile_otp3" type="text">
                                            <input class="otp-input" maxlength="1" name="mobile_otp4" type="text">
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

                            
                            <div class="row">
                                <div class="form-group col-md-12 mb-0">
                                    <button type="submit" class="btn org-btn">REGISTER</button>
                                    <div class="register-link">
                                        <a href="{{url('login')}}" class="link-blue">Already Register? Login Here</a>
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
    function emailValidation(){
        let email=document.getElementById('email').value;
        $('#email_otp').val('');
        let OTP = '';
        var valid = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(email.toLowerCase().match(valid)){
            OTP=otpCreation();
            $.ajax({
            type: "GET",
            headers:{
                'Access-Control-Allow-Origin':'http://localhost:8000/'
            },
            url: 'http://localhost:8000/api/send-email'+'/'+email+'/'+OTP,
            })
            document.getElementById("email-btn").style.display = "none";
            document.getElementById("email-resend").style.display = "none";
            setTimeout(otpReset, 600000,'email');
            countdown( "ten-countdown_email", 10, 0 );
        }
        console.log(OTP)
        $('#email_otp').val(OTP);
    }

    function otpReset(name){
        if(name=== 'email'){
            $('#email_otp').val('');
            console.log(document.getElementById("email_otp").value)
        }
        if(name==='mobile'){
            $('#mobile_otp').val('');
        }
    }
    function mobileValidation(){
        $('#mobile_otp').val('');
        let mobile=document.getElementById('mobile').value;
        let OTP = '';
        var valid = /^\d{10}$/;
        if(mobile.match(valid)){
            OTP=otpCreation();
            
            setTimeout(otpReset, 600000,'mobile');
            countdown( "ten-countdown_mobile", 10, 0 );
        }
        $('#mobile_otp').val(OTP);
        console.log(OTP)
    }

    function otpCreation(){
        var string = '0123456789';
        var len = string.length;
        let OTP=""
        for (let i = 0; i < 4; i++ ) {
            OTP += string[Math.floor(Math.random() * len)];
        }
        return OTP;
    }


    function countdown( elementName, minutes, seconds )
    {
        var element, endTime, hours, mins, msLeft, time;

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
    let districts=''
    $('#state').change((e)=>{
        $('#ajax_districts').empty();
        $('#ajax_districts').append('<option value="">District</option>')
        var id=e.target.value;
    
        var dis=districts.filter(function(districts){
            return districts.state_id==id;
        })
        dis.forEach(function(item){
             $('#ajax_districts').append(`<option value="${item.district_id}">
                ${item.district_name}
            </option>`);
        })
        
    })




    $(document).ready(function() {
        $.ajax({
        type: "GET",
        url: api_url + 'district_masters?limit=-1',
        }).done(response=>{
            districts=response.data;
        })
    })

</script>