@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{__('lang.Feedback')}}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('lang.Feedback')}}</li>
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

                            <!-- <div class="d-flex justify-content-between align-items-center">
                                <h2 class="heading-blue">
                                Download CSV Data
                                </h2>
                                <div class="btn-wrap">
                                <a href="{{url('data-share/logout')}}" class="btn org-btn p-5-10">Logout</a>
                                </div>
                            </div> -->
                            @if(session('success'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{session('success')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{route('storefeedback')}}" method="POST">
                                @csrf

                                <div class="row mb-4">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <!-- <label for="#name">Type:</label> -->
                                        <select class="form-select form-control" name="content" id="content">
                                            <option value="">Select</option>
                                            <option value='Content Related' {{ (old("content") == "Content Related" ? "selected":"") }}>Content Related</option>
                                            <option value='UI/UX Related' {{ (old("content") == "UI/UX Related" ? "selected":"") }}>UI/UX Related</option>
                                            <option value='Map Related' {{ (old("content") == "Map Related" ? "selected":"") }}>Map Related</option>
                                            <option value='Report Card(DRC, SRC, NRC) Related' {{ (old("content") == "Report Card(DRC, SRC, NRC) Related" ? "selected":"") }}>Report Card(DRC, SRC, NRC) Related</option>
                                            <!-- <option value='visualization' {{ (old("content") == "visualization" ? "selected":"") }}>Visualization</option> -->
                                        </select>
                                        @error('content')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <!-- <label for="#name">Name:</label> -->
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" autocomplete="off" value="{{old('name')}}">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <!-- <label for="#name">Email:</label> -->
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" value="{{old('email')}}">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                <div class="form-group">
                                <!-- <label for="#feedback">Feedback</label> -->
                                    <textarea name="feedback" class="form-control" id="feedback" class="w-100" rows="5" placeholder="Type here..." autocomplete="off" value="{{old('feedback')}}">{{old('feedback')}}</textarea>
                                    <!-- <span class="text-danger" id="valid_feedback"></span> -->
                                    @error('feedback')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                </div>
                                
                                <input type="hidden" name="rating" value="0">
                                
                                <div class="mb-5">
                                    <div class="rate">
                                        <input type="radio" id="star1" name="rate" value="5" />
                                        <label for="star1" title="text">1 star</label>
                                        <input type="radio" id="star2" name="rate" value="4" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star4" name="rate" value="2" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star5" name="rate" value="1" />
                                        <label for="star5" title="text">5 stars</label>    
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-center">
                                <button type="submit" id="submit" class="btn org-btn p-5-10">Submit</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
            </div>   
        </div>
    </div>
</section>


@include('front.includes.footer')
<script>
    $('input[name=rate]').click((e)=>{
        $('input[name=rating]').val(e.target.value)
    })
    $('#name').attr('maxlength',35);
    $('#feedback').on("paste",function(e) {
        replaceSpecialchar(this,'feedback')
    });

    $('#name').on("paste",function(e) {     
        replaceSpecialchar(this,'name')
    });

    function replaceSpecialchar(el,id){
        setTimeout(() => {
            value=$(el).val()
            value=value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi,'')
            $('#'+id).val(value)
        }, 100);
    }

    $('#feedback').keypress((e)=>{
        preventSymbols(e)        
    })
    $('#name').keypress((e)=>{
        preventSymbols(e)        
    })

    function preventSymbols(e) {
        var key = e.keyCode;
        var regex =/[^a-z0-9]/gi;

        //Validate TextBox value against the Regex.
        var isValid = regex.test(String.fromCharCode(key))
        if (isValid && key!=32 && key!=46) {
            e.preventDefault();
        }
    }
</script>