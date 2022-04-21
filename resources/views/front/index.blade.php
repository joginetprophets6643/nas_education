@include('front.includes.header')
@include('front.includes.nav')

    <section class="hero-slider-wrap">
        <div class="hero-slider">
          <div class="owl-carousel owl-theme" id="bannerSlider">

            @foreach($banners as $banner)
            <div class="item">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="heading-white-md animate animate-dir fadeInLeft">
                      {{$banner->description}}
                    </h2>
                  </div>
                  <div class="col-md-6">
                      <div class="banner-img-wrap animate animate-dir fadeInRight">
                          <img src="{{asset('assets/uploads/banner/'.$banner->image)}}" alt="img" class="img-fluid">
                      </div>
                  </div>
                </div>
              </div>             
            </div>
            @endforeach  
          </div>
        </div>
    </section>

    <section class="about-wrap ptb-60 bg-grey" id="About">
      <div class="container">
          <div class="row">
              <div class="col-md-6 pe-0">
                <div class="about-card" data-aos="fade-right">
                  <div class="about-content">
                    <h2 class="heading-white-lg">
                      {{ __('lang.about nas') }}
                    </h2>
                    <div class="desc-white">
                      @if(!empty($content->page_meta_title))
                      {!!$content->home_page_content!!}
                      @endif
                  </div>
                  </div>

                  <div class="btn-wrap">
                    <a href="{{url('/about-nas')}}" class="white-link">
                      {{ __('lang.Read More') }}
                      <span class="material-icons-round">
                        east
                      </span>
                    </a>
                  </div>

                </div>
                
                
              </div>
              <div class="col-md-6 ps-0">
                <div class="about-img-wrap" data-aos="fade-left">
                  <img src="{{asset('assets/front/images/about.png')}}" alt="img" class="img-fluid" />
                </div> 
              </div>
          </div>
      </div>
    </section>

    <section class="report-card-wrap nrc-home-wrap ptb-60">
      <div class="container">
        <div class="row align-items-center p-3 line-card-shadow">
          <div class="col-md-12">
            <h2 class="heading-blue">
                  <span id="name">NATIONAL</span> REPORT CARD
                </h2>
                <p class="title-grey-sm" id="select-info">
                  Please select a State on the interactive map or search
                  for the name below to continue.
                </p>
          </div>
          <div class="col-md-5">
              <div class="report-card-content" data-aos="fade-right">
                
                <div class="report-select-wrap col-md-12">
                  <label>State</label>
                  <select class="form-select" id="states">
                    <option value="" selected>All India</option>
                    @foreach($states as $state)
                    <option value="{{$state->state_id}}">{{$state->state_name}}</option>
                    @endforeach
                  </select>
                </div>
                <!-- <div class="info-wrap">
                  <ul>
                    <li>
                      <div class="d-flex">
                          <div class="info-icon">
                            <img src="{{asset('assets/front/images/location.svg')}}" alt="location" class="img-fluid" />
                          </div>
                          <div class="info-content">
                              <h2 class="total-no">
                                <span id="total_area">3.287</span>
                                <small>million km<sup>2</sup></small>
                              </h2>
                              <span class="title-grey-md">
                                Area of the <span class="type_of_chart">Nation</span>
                              </span>
                          </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                          <div class="info-icon">
                            <img src="{{asset('assets/front/images/density.svg')}}" alt="density" class="img-fluid" />
                          </div>
                          <div class="info-content">
                              <h2 class="total-no">
                                <span id="population_density">464</span>
                                <small>per km<sup>2</sup></small>
                              </h2>
                              <span class="title-grey-md">
                                Density of Population
                              </span>
                          </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                          <div class="info-icon">
                            <img src="{{asset('assets/front/images/teacher.svg')}}" alt="teacher" class="img-fluid" />
                          </div>
                          <div class="info-content">
                              <h2 class="total-no" id="total_teachers">
                                5,816,673
                              </h2>
                              <span class="title-grey-md">
                                Teachers in <span class="type_of_chart">Nation</span>
                              </span>
                          </div>
                      </div>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <div class="d-flex">
                          <div class="info-icon">
                            <img src="{{asset('assets/front/images/population.svg')}}" alt="population" class="img-fluid" />
                          </div>
                          <div class="info-content">
                              <h2 class="total-no" id="total_population">
                                138 Crores
                              </h2>
                              <span class="title-grey-md">
                                Population
                              </span>
                          </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                          <div class="info-icon">
                            <img src="{{asset('assets/front/images/literacy.svg')}}" alt="literacy" class="img-fluid" />
                          </div>
                          <div class="info-content">
                              <h2 class="total-no" id="literacy_rate">
                                88.7%
                              </h2>
                              <span class="title-grey-md">
                                Literacy Rate
                              </span>
                          </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                          <div class="info-icon">
                            <img src="{{asset('assets/front/images/girls.svg')}}" alt="girls" class="img-fluid" />
                          </div>
                          <div class="info-content">
                              <h2 class="total-no" id="sex_ratio">
                                963
                                <small>girls per 1000 boys</small>
                              </h2>
                              <span class="title-grey-md">
                                Child Sex Ratio (0-6 age)
                              </span>
                          </div>
                      </div>
                    </li>
                  </ul>
                </div> -->

                <div class="info-wrap" id="demographics_details">
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12 col-lg-6">
                          <div class="infotab-content light-blue-bg">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="content">
                                  <h3 class="title" id="area-title">
                                    Area of the Nation
                                  </h3>
                                  <p class="total-no">
                                  <span id="total_area">3.287</span>
                                  <small id="total_area_text">km<sup>2</sup></small>
                                  </p>
                                </div>
                                <div class="img">
                                  <img src="{{asset('assets/front/images/area-blue.svg')}}" alt="icon" class="img-fluid" />
                                </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-6">
                          <div class="infotab-content light-pink-bg">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="content">
                                <h3 class="title">
                                  Population
                                </h3>
                                <p class="total-no" id="total_population">
                                138 Crores
                                </p>
                              </div>
                              <div class="img">
                                <img src="{{asset('assets/front/images/population-pink.svg')}}" alt="icon" class="img-fluid" />
                              </div>
                            </div>
                            
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-6">
                          <div class="infotab-content light-green-bg">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="content">
                                <h3 class="title">
                                  Density of population
                                </h3>
                                <p class="total-no">
                                <span id="population_density">464</span>
                                <small>per km<sup>2</sup></small>
                                </p>
                              </div>
                              <div class="img">
                                <img src="{{asset('assets/front/images/density-green.svg')}}" alt="icon" class="img-fluid" />
                              </div>
                            </div>
                            
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-6">
                          <div class="infotab-content light-yellow-bg">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="content">
                                <h3 class="title">
                                  Literacy Rate
                                </h3>
                                <p class="total-no" id="literacy_rate">
                                  88.7%
                                </p>
                              </div>
                              <div class="img">
                                <img src="{{asset('assets/front/images/litracy-yellow.svg')}}" alt="icon" class="img-fluid" />
                              </div>
                            </div>
                            
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-6">
                        <div class="infotab-content light-purple-bg">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="content">
                              <h3 class="title" id="teacher-title">
                                Teachers in Nation
                              </h3>
                              <p class="total-no" id="total_teachers">
                                5,816,673
                              </p>
                            </div>
                            <div class="img">
                              <img src="{{asset('assets/front/images/teacher-purple.svg')}}" alt="icon" class="img-fluid" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-lg-6">
                          <div class="infotab-content light-sagegreen-bg">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="content">
                                <h3 class="title">
                                  Child sex ratio (0-6 age)
                                </h3>
                                <p class="total-no" >
                                <span id="sex_ratio"> 963 girls per 1000 boys</span>
                                <!-- <small>girls per 1000 boys</small> -->
                                </p>
                              </div>
                              <div class="img">
                                <img src="{{asset('assets/front/images/child-sagegreen.svg')}}" alt="icon" class="img-fluid" />
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="btn-wrap">
                <a href="javascript:void(0);" onClick="goToReportCard()" class="black-link">
                    {{ __('lang.Read More') }}
                    <span class="material-icons-round">
                      east
                    </span>
                  </a>
                </div>
                  
              </div>
          </div>
          <div class="col-md-7">
            <div class="report-img-wrap" data-aos="fade-left">
              <div id="map-container"></div>
              <div class="btn-wrap justify-content-end">
              <div id="BackToN">
                <a href="javascript:void(0);" onClick="BackToNational()" class="black-link">
                  <span class="material-icons-round">
                    west
                  </span>    
                    Back
                </a>
              </div>
              </div>
              <div id="district-map-container"></div>

                <!-- <img src="{{asset('assets/front/images/map.svg')}}" alt="map" class="img-fluid" /> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="quick-links-wrap ptb-60 bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h2 class="heading-blue">
                {{__('lang.QUICK LINKS')}}
              </h2>
              <p class="title-black-sm mb-4">
                <!-- {{__('lang.Content')}} -->
              <!-- Below is the collection of services provided by NAS -->
              </p>
          </div>
          <div class="col-md-6 mb-4-sm">
              <a href="{{url('/report-card')}}" target="_blank" class="links-card report-bg" data-aos="fade-up">
                  <div class="links-content">
                    <div class="d-flex align-items-center">
                      <div class="link-icon">
                          <img src="{{asset('assets/front/images/report-card.svg')}}" alt="img" class="img-fluid">
                      </div>
                      <h2 class="heading-white-sm">
                        {{__('lang.REPORT CARD')}}
                      </h2>
                    </div> 
                    <div class="desc-white">
                    @if(!empty($report->page_meta_title))
                        {!!$report->home_page_content!!}
                    @endif
                    <!-- NCERT, under the aegis of MHRD, conducted the National Achievement Survey (NAS) throughout the country on November 13, 2021, for Classes 3, 5 and 8 in government and government-aided schools. The survey tools used multiple test booklets with 45 questions in Classes 3 and 5 and 60 questions in Class VIII in Mathematics, Language, Sciences and Social Sciences. The competency-based test questions reflect the learning outcomes developed by...                      -->
                    </div>
                  </div>
                  
                  <div class="btn-wrap">
                    <button class="white-link btn">
                      {{ __('lang.Explore') }}
                      <span class="material-icons-round">
                        east
                      </span>
                     </button>
                  </div>
              </a>
          </div>
          <div class="col-md-6">
            <a href="{{url('visualization')}}" target="_blank" class="links-card analytics-bg mb-4" data-aos="fade-up">
              <div class="links-content">
                <div class="d-flex align-items-center">
                  <div class="link-icon">
                      <img src="{{asset('assets/front/images/analysis.svg')}}" alt="img" class="img-fluid">
                  </div>
                  <h2 class="heading-white-sm">
                    {{__('lang.VISUALIZATION')}}
                  </h2>
                </div> 
                <div class="desc-white">
                @if(!empty($visual->page_meta_title))
                        {!!$visual->home_page_content!!}
                    @endif
                <!-- Data Visualisation is the user-friendly presentation of summarised data in a pictorial or graphical form that enables decision-makers to ... -->
                </div>
              </div>
              
              <div class="btn-wrap">
                <button class="white-link btn">
                  {{ __('lang.Explore') }}
                  <span class="material-icons-round">
                    east
                  </span>
                </button>
              </div>
            </a>
            <a href="{{url('/data-share')}}" target="_blank" class="links-card data-bg" data-aos="fade-up">
              <div class="links-content">
                <div class="d-flex align-items-center">
                  <div class="link-icon">
                      <img src="{{asset('assets/front/images/data-share.svg')}}" alt="img" class="img-fluid">
                  </div>
                  <h2 class="heading-white-sm">
                   {{__('lang.DATA SHARE')}}
                  </h2>
              </div> 
              <div class="desc-white">
              @if(!empty($data->page_meta_title))
                        {!!$data->home_page_content!!}
                    @endif
              <!-- The NAS 2021 collects data on the learning levels disaggregated by gender, location, social groups and management of schools, wherever applicable... -->
              </div>
              </div>
              
              <div class="btn-wrap">
                <button class="white-link btn">
                  {{ __('lang.Explore') }}
                  <span class="material-icons-round">
                    east
                  </span>
                </button>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery-wrap ptb-60" data-aos="fade-up">
        <div class="container">
            <div class="row photos">
                <div class="col-md-6 item">
                    <h2 class="heading-blue mb-4">
                     {{__('lang.Photo Gallery')}}
                    </h2>
                    <div id="gallery-slider">
                      <div class="owl-carousel owl-theme" id="photoSlider">
                        @foreach($events as $event)
                        <div class="item">
                            <div class="gallery-img-wrap">
                            <a class="gallery-anchor" href="{{asset('assets/uploads/'.$image[$event->id])}}" data-lightbox="photos">
                            <img src="{{asset('assets/uploads/'.$image[$event->id])}}" alt="img" class="img-fluid">                        
                            <button class="gallery-zoom-icon">
                        <span class="material-icons-round">
                        zoom_in
                        </span>
                        </button>
                        </a>
                              
                            </div>
                        </div>
                        @endforeach
                      </div>
                      <div class="btn-wrap">
                        <a href="{{url('/gallery')}}" class="org-link">
                          {{ __('lang.VIEW ALL') }} 
                          <span class="material-icons-round">
                            east
                          </span>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <h2 class="heading-blue mb-4">
                    {{__('lang.Video Gallery')}}
                  </h2>
                  <div id="gallery-slider">
                      <div class="owl-carousel owl-theme" id="videoSlider">                   
                      @if(!$videos->isEmpty())
                                             
                        @foreach($videos as $video)
                        @if($video->url)
                        <div class="item">
                            <div class="gallery-img-wrap">
                                <iframe width="263" height="150" src="https://www.youtube.com/embed/{{ $video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif
                        @if($video->vedio)
                        <div class="item">
                          <div class="gallery-img-wrap">
                            <video width="263" height="150" controls>
                                <source src="{{URL::asset('/assets/uploads/vedios/'.$video->vedio)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            </div>
                        </div> 
                        
                        @endif
                        @endforeach
                      </div>
                      <div class="slider-viewbtn btn-wrap">
                        <a href="{{url('/gallery')}}" class="org-link">
                          {{ __('lang.VIEW ALL') }} 
                          <span class="material-icons-round">
                            east
                          </span>
                        </a>
                      </div>
                      </div>
                        
                        @else
                        <p class="text-center" style="margin-top:100px;">No Video Uploaded Yet!<p>
                        @endif
                        
                  
                </div>
            </div>
        </div>
    </section>

    <div class="client-wrap ptb-60 bg-grey" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="client-slider">
              <div class="owl-carousel owl-theme" id="clientSlider">
                @foreach($client_logo as $key=>$logos)
                <div class="item">
                  <div class="client-img-wrap">
                    <a href="{{$logos->url}}" target="_blank">
                     <img src="{{asset('assets/uploads/client_logo/'.$logos->logo)}}" alt="img" class="img-fluid" />
                    </a>
                  </div>
                </div>
                @endforeach
                <!-- <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/ncert.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/nic.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/niti.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/unicef.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/ministry.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/cbsc.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/ncert.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/nic.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/niti.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/unicef.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div>
                <div class="item">
                  <div class="client-img-wrap">
                    <img src="{{asset('assets/front/images/ministry.png')}}" alt="img" class="img-fluid" />
                  </div>
                </div> -->
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="mobileapp-page-wrap ptb-60">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                        <div class="mobileapp-img-wrap">
                            <img src="{{asset('assets/front/images/mobileapp.png')}}" alt="img" class="img-fluid" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mobileapp-content">
                        @if(!empty($mobile->page_meta_title))
                            <h2 class="heading-blue">
                            {!!$mobile->page_meta_title!!}
                            </h2>
                            <div class="desc-black">
                                {!!$mobile->inner_page_content!!}
                            </div>
                        @endif
                            <div class="app-wrap">
                                <h3 class="text-black">
                                    Download the <span class="text-red">FREE</span> App Today!
                                </h3>
                                <div class="btn-wrap">
                                    <a href="#" class="btn app-btn">
                                        <img src="{{asset('assets/front/images/google_play.png')}}" alt="gp" class="img-fluid" />
                                    </a>
                                    <a href="#" class="btn app-btn">
                                        <img src="{{asset('assets/front/images/app_store.png')}}" alt="as" class="img-fluid" />
                                    </a>
                                </div>
                            </div>
                        </div>
                      </div>   
            </div>
        </div>
    </section>
  

@include('front.includes.footer')
<script>
  let fetchedStateData;
  let state_all_info;

  $(document).ready( async function() {
    
    await $.ajax({
      type: "GET",
      headers: {
        "Authorization": "Bearer " + token
      },
      url: api_url + 'state_masters?limit=-1',
    }).done(response=>{
        state_all_info = response.data
        const state_data = response.data.map((state,index) =>{
          if(state.state_name === 'Delhi'){
           return ['nct of delhi',state.state_id]
          }else{
            return [ state.state_name.toLowerCase(),state.state_id]
          }
        })
        fetchedStateData = state_data
        if(fetchedStateData.length === 0 ){
          console.log('static data ---------- debug')
          generateNationalMap(state_static_data)
        }else{
          console.log('fetched data ---------- debug')
          // console.log(fetchedStateData)
          generateNationalMap(fetchedStateData)
        }
    });
    getNationalDemographics()
    removePreviousData()
  });

  function generateNationalMap(data){

    const chart = Highcharts.mapChart('map-container', {
        chart: {
            map: 'countries/in/custom/in-all-disputed'
        },

        title: {
            text: ''
        },

        subtitle: {
            text: ''
        },
        legend: {
          enabled: false
        },
      tooltip: { 
        enabled: true,
        pointFormat: '{point.name}'
      },
        navigation: {
            buttonOptions: {
                enabled: false
            }
        },
        mapNavigation: {
            enabled: true
        },
        credits: {
          enabled: false
        },
      plotOptions: {
                  series: {
                      events: {
                          click: function (e) {
                              $('#name').html(e.point.name.toUpperCase());
                              $('#states').val(e.point.value);
                              $('#area-title').html('Area of the State');
                              $('#teacher-title').html('Teachers in state');
                              $('#select-info').html('Please select a District on the interactive map or search for the name below to continue.');

                              const selectedMapData = DISTRICT_MAPS.find(data=> data.name === e.point.name.toUpperCase())
                              triggerDistrictChart(e.point.name,selectedMapData)                 
                              populateDemographicInfo(e.point.value)
                            },
                      }
                  }
              },
      
      /*  mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        }, */

        series: [{
            data: data,
            name: 'State',
            allowPointSelect: true,
            cursor: 'pointer',
            color: "#f7941c",
            borderColor: "#fff",
            states: {
                hover: {
                    // color: '#006BB6'
                    color:'#006bb6'
                },
                select: {
                  color: '#006bb6',
                }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            }
        }]
    });
    
    chart.series.forEach(s => {
      s.data.forEach((point) => {
        point.select(false);
      });
    });
    // chart.series[0].states.select.color = '#9ec2e4'
    //     chart.series[0].states.hover.color = '#9ec2e4'
  }

  AOS.init({
      duration: 1500,
      disable: 'tablet',
      disable: 'mobile'
  });

  function BackToNational(){
    $('#states').val('');
    populateDemographicInfo('','')
    generateNationalMap(fetchedStateData)
    $('#name').html('NATIONAL');
    $('#area-title').html('Area of the Nation');
    $('#teacher-title').html('Teachers in Nation');
    $('#select-info').html('Please select a State on the interactive map or search for the name below to continue.');
    document.getElementById("map-container").style.display = "";
    document.getElementById("district-map-container").style.display = "none";
    $('#BackToN').css('display','none');
  }

  function triggerDistrictChart(name,data){
    let demographicInfo = []
    document.getElementById("map-container").style.display = "none";
    if(typeof data  === 'undefined'){
      $('#district-map-container').html('<p class="text-center">Map not found</p>')
      document.getElementById("district-map-container").style.display = "";
      $('#BackToN').css('display','block');
      return
    }

    // console.log(data.data)
    data.data[0].data.forEach((item)=>{
        item.color="#f7941c";
        item.borderColor="#fff";
        item.states.hover.color="#006bb6";
    })

    const chart1 = Highcharts.mapChart('district-map-container',{
      title: {
          text: data.name
      },
      legend: {
        enabled: false
      },
      credits: {
        enabled: false
      },
      series:data.data,
      tooltip: { 
        enabled: true,
        pointFormat: '{point.name}'
      },
      navigation: {
          buttonOptions: {
              enabled: false
          }
      },
      
      plotOptions: {
        series:{
          name: 'District',
          allowPointSelect: true,
          states: {
            select: {
              // color: '#f7941c'
              color: '#006bb6'
            },
          },
          events:{
            click: (e)=>{
              const selected_district=[JSON.parse(sessionStorage.getItem('activeDistrict'))].pop()
              if(selected_district!=null && selected_district.district_id==e.point.id){
                $('#name').html(selected_district.state_name.toUpperCase());
                $('.highcharts-title').html(selected_district.state_name.toUpperCase());
                $('#area-title').html('Area of the State');
                $('#teacher-title').html('Teachers in state');
                $('#select-info').html('Please select a District on the interactive map or search for the name below to continue.');
                populateDemographicInfo(selected_district.state_id);
              }
              else{
                $('#name').html(e.point.name.toUpperCase());
                $('.highcharts-title').html(name.toUpperCase()+' ('+e.point.name.toUpperCase()+')');
                $('#area-title').html('Area of the District');
                $('#teacher-title').html('Teachers in District');
                $('#select-info').html('Please proceed to READ MORE.');
                setActiveDistrict(e.point.id);
              }
            }
          },
          
        }  
      },

    });

    chart1.series.forEach(s => {
      s.data.forEach((point) => {
        point.select(false);
      });
    });
    
    document.getElementById("district-map-container").style.display = "";
    $('#BackToN').css('display','block');
  }

  function populateDemographicInfo(state_id,type='state'){
    let demographic_info;
    let total_teachers;
    let display_name;
    if(type === 'state'){
       demographic_info = state_all_info.filter(states_demographic=>{
        if(states_demographic.state_id === state_id){
          sessionStorage.setItem('activeState',JSON.stringify(states_demographic))
          return states_demographic
        }
      })
      if(sessionStorage.hasOwnProperty('activeDistrict')){
        sessionStorage.removeItem('activeDistrict');
      }
    }
    else if(type === 'district'){
      demographic_info = [JSON.parse(sessionStorage.getItem('activeDistrict'))]
    }
    else{
     removePreviousData()
     const national_demographic_info = sessionStorage.getItem("national_demographic_data");
     demographic_info= JSON.parse(national_demographic_info)
    }

    const info =  demographic_info.pop()
    if(type === 'state'){
      $('#total_population').html(info.total_population ? parseInt(info.total_population).toLocaleString() : 0)
      $('#total_area_text').html(`km<sup>2</sup>`)
      total_teachers = parserInt(info.teacher_central_govt_schools) + parserInt(info.teacher_govt_aided_schools)
                          + parserInt(info.teacher_private_unaided_reco_schools) + parserInt(info.teacher_state_govt_schools) 
      display_name = info.state_name
      }
    else if(type === 'district'){
      $('#total_population').html(info.total_population ? parseInt(info.total_population).toLocaleString() : 0)
      $('#total_area_text').html(`km<sup>2</sup>`)
      total_teachers = parserInt(info.teacher_central_govt_schools) + parserInt(info.teacher_govt_aided_schools)
                          + parserInt(info.teacher_private_unaided_reco_schools) + parserInt(info.teacher_state_govt_schools) 
      display_name = info.district_name
    }
    else{
      $('#total_area_text').html(`million km<sup>2</sup>`)
      $('#total_population').html(info.total_population ? parseInt(info.total_population).toLocaleString() + ' Crore': 0)
      total_teachers = info.no_of_teachers
      display_name = 'National'
    }
    // console.log(info)
    
    // populating demographics
    if(type==='district' && (info.total_district_area==null || info.total_district_area==0)){
      $('#demographics_details').addClass('otp-dis');
    }
    else{
      if($('#demographics_details').hasClass('otp-dis')){
        $('#demographics_details').removeClass('otp-dis');
      }
    }
    $('.type_of_chart').html(display_name)
    $('#literacy_rate').html(info.literacy_rate ? parseFloat(info.literacy_rate).toLocaleString()+'%' : 0+'%' )
    $('#total_area').html(info.total_district_area ? (parseFloat(info.total_district_area)).toLocaleString() : 0)
    $('#population_density').html(info.density_of_population ? parseFloat(info.density_of_population).toLocaleString() : 0)
    $('#total_teachers').html(parseInt(total_teachers).toLocaleString())
    $('#sex_ratio').html(info.child_sex_ratio ? parseFloat(info.child_sex_ratio).toLocaleString() : 0)

  }

  $('#states').change((e)=> { 
    const val = e.target.value
    
    const index = fetchedStateData.map(state => {
      return state.value
    }).indexOf(parserInt(val))

    if(val === ''){
      populateDemographicInfo('','')
      $('#name').html('NATIONAL');
      document.getElementById("map-container").style.display = "";
      document.getElementById("district-map-container").style.display = "none";
      $('#BackToN').css('display','none');


    }else{
      if(index > -1){
        const selected_state =  fetchedStateData[index]
        if(selected_state['hc-key']==="nct of delhi")
        {
          $('#name').html('DELHI');
        }
        else{
        $('#name').html(selected_state['hc-key'].toUpperCase());
        }
        console.log(selected_state['hc-key'])
        $('#area-title').html('Area of the State');
        $('#teacher-title').html('Teachers in state');
        $('#select-info').html('Please select a District on the interactive map or search for the name below to continue.');
        const state_name = selected_state['hc-key'] 
        const selectedMapData = DISTRICT_MAPS.find(data=> data.name === state_name.toUpperCase())
        triggerDistrictChart(state_name,selectedMapData)
        populateDemographicInfo(parserInt(val))
      }
    }
  });

  function parserInt(value){
    if(typeof value === 'undefined'){
      return 0
    }else{
      if(value === ''){
        return 0
      }else{
        console.log(value,"Before")
        console.log(Math.round(value),"After")
        return Math.round(value)
        
      }
    }
  }

  function getNationalDemographics(){
    console.log('api hit ----')
    $.ajax({
      type: "GET",
      headers: {
        "Authorization": "Bearer " + token
      },
      url: api_url + "national_statistic?limit=-1",
    }).done(response=>{
      const info = response.data
      setNationalDemographic(info)
    })
  }

  function setNationalDemographic(data){
    console.log('set national-----')
    sessionStorage.setItem("national_demographic_data", JSON.stringify(data));
    populateDemographicInfo('','')
  }
  
  function goToReportCard(){
    const activeState = JSON.parse(sessionStorage.getItem('activeState'))
    // console.log(activeState)
    // if(activeState !== null){
      window.open(base_url + 'report-card/nas-2021', '_blank');
      // location.href = base_url + 'report-card/nas-2021'
    // }
  }

  function removePreviousData(){
    sessionStorage.removeItem('activeState')
    sessionStorage.removeItem('activeDistrict')
  }

  async function setActiveDistrict(district_id){
    await $.ajax({
      type: "GET",
      headers: {
        "Authorization": "Bearer " + token
      },
      url: api_url + 'district_masters?limit=-1&filter={"district_id":{"_eq":'+district_id+'}}',
    }).done(response=>{
      sessionStorage.setItem('activeDistrict',JSON.stringify(response.data.pop()))
    });
    populateDemographicInfo('','district')
  }
    
</script>
