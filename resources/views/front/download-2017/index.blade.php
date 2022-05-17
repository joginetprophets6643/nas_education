@include('front.includes.header')
@include('front.includes.nav')

<div class="sidebaroverlay"></div>
<div class="sidebarmenu" id="statesidebar">
  <a class="closesidebar">
    <svg viewBox="0 0 311 311.07733">
          <path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"></path>
          <path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"></path>
      </svg>
  </a>
  
</div>


<!-- <div class="sidebaroverlay"></div> -->
<div class="sidebarmenu" id="districtsidebar">
  <a class="closesidebar">
    <svg viewBox="0 0 311 311.07733">
          <path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"></path>
          <path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"></path>
      </svg>
  </a>
  
</div>

<section class="banner-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-yellow">
                    {{ __('lang.Report Card') }}
                    </h2>
                    <div class="breadcrum-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                              <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Report Card') }}</li>
                              <li class="breadcrumb-item active" aria-current="page">{{ __('lang.NAS 2017') }}</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section class="rcmain-page-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-white">
                    <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                    <div class="desc-black">
                    
                        <!-- NCERT, under the aegis of MHRD, conducted the National Achievement Survey (NAS) throughout the country on November 13, 2021, for Classes 3, 5 and 8 in government and government-aided schools. The survey tools used multiple test booklets with 45 questions in Classes 3 and 5 and 60 questions in Class VIII in Mathematics, Language, Sciences and Social Sciences. The competency-based test questions reflect the learning outcomes developed by NCERT which were recently incorporated in the RTE Act by the Government of India. Along with the test items, questionnaires about students, teachers and schools were also used. The learning levels of 2.2 million students from 1,10,000 schools across 701 districts in all 36 states/UTs were assessed. The findings of the survey help guide the education policy, planning and implementation at national, state, district and classroom levels to improve the learning levels of children and bring about qualitative improvements. -->
</div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                    <div class="line-card line-card-pink">
                        <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/national.jpg')}}" alt="national" class="img-fluid" />
                        </div>
                        <div class="btn-wrap">
                        <a href="javascript:void(0);" class="line-cardbtn w-100 btn-pink">National Report Card</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                    <div class="line-card line-card-green">
                        <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/state.jpg')}}" alt="state" class="img-fluid" />
                        </div>
                        <div class="btn-wrap">
                        <a class="line-cardbtn w-100 btn-green stateopen" href="{{url('/download-data-state-wise-2017')}}" >State Report Card</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                    <div class="line-card line-card-blue">
                        <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/district.jpg')}}" alt="district" class="img-fluid" />
                        </div>
                        <div class="btn-wrap">
                        <a class="line-cardbtn w-100 btn-blue districtopen" href="{{url('/download-data-district-wise-2017')}}">District Report Card</a>
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