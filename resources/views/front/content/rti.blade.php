@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-yellow">
                        {{ __('lang.National Achievement Survey') }}
                    </h2>
                    <div class="breadcrum-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                              <li class="breadcrumb-item active" aria-current="page">{{ __('lang.RTI') }}</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutpage-wrap bg-grey ptb-60" data-aos="fade-up">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                   <div class="card-white">
                   <div class="heading-wrap mb-15">
                   <h4 class="heading-blue-sm">Disclosure Under RTI</h4>
                   </div>  
                  
                    <div class="col-md-12">
                      <div class="desc-black rti-desc" data-aos="fade-up">
                        <?php $i=1 ?>
                        @foreach($links as $link)
                        {{$i++}}.
                        {{$link->title}}
                        <?php $files=json_decode($link->file) ?>
                        @foreach($files as $file)
                        <a href="{{asset('assets/uploads/rti/'.$file)}}" target="_blank">Download/View</a>
                        @endforeach
                        <br>
                        @endforeach
                        </div>
                    </div>

                    <br>

                    <div class="heading-wrap mb-15">
                   <h4 class="heading-blue-sm">Office Hours:</h4>
                   </div>  
                   <div class="col-md-12">
                      <div class="desc-black" data-aos="fade-up">
                      <p>Administrative : 9.00 Hrs to 17.30 Hrs Lunch Break : 13:00 Hrs to 13.30 Hrs Sales Counter (Publication): 9.00 Hrs to 16.00 Hrs (Working days only) Library : 8.00 Hrs to 20.30 Hrs (Monday to Friday) 9.00 Hrs to 17.30 Hrs (Saturday & Sunday) Closed on Public and Gazetted Holidays</p>
                      </div>
                    </div>
                   </div>
                   
              </div>
                
              
            </div>
        </div>
    </section>
@include('front.includes.footer')