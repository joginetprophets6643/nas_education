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
                    <a href="{{url('/about')}}" class="btn btn_lg btn-white">{{ __('lang.Read More') }}</a>
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

    <section class="report-card-wrap ptb-60">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
              <div class="report-card-content" data-aos="fade-right">
                <h2 class="heading-blue">
                  <span id="name">All India</span> REPORT CARD
                </h2>
                <p class="title-grey-sm">
                  Please select a State on the interactive map or search<br />
                  for the name below to continue.
                </p>
                <div class="report-select-wrap col-md-10">
                  <label>State</label>
                  <select class="form-select" id="states">
                    <option value="" selected>All India</option>
                    @foreach($states as $state)
                    <option value="{{$state->state_id}}">{{$state->state_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="info-wrap">
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
                </div>
                <div class="btn-wrap">
                    <a href="#" class="btn btn_md org-btn">{{ __('lang.Read More') }}</a>
                </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="report-img-wrap" data-aos="fade-left">
              <div id="map-container"></div>
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
                QUICK LINKS
              </h2>
              <p class="title-black-sm mb-4">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              </p>
          </div>
          <div class="col-md-6 mb-4-sm">
              <div class="links-card report-bg" data-aos="fade-up">
                  <div class="links-content">
                    <div class="d-flex align-items-center">
                      <div class="link-icon">
                          <img src="{{asset('assets/front/images/report-card.svg')}}" alt="img" class="img-fluid">
                      </div>
                      <h2 class="heading-white-sm">
                        REPORT CARD
                      </h2>
                    </div> 
                    <p class="desc-white">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                  
                  <div class="btn-wrap">
                    <a href="#" class="white-link">
                      {{ __('lang.Read More') }}
                      <span class="material-icons-round">
                        east
                      </span>
                    </a>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="links-card analytics-bg mb-4" data-aos="fade-up">
              <div class="links-content">
                <div class="d-flex align-items-center">
                  <div class="link-icon">
                      <img src="{{asset('assets/front/images/analysis.svg')}}" alt="img" class="img-fluid">
                  </div>
                  <h2 class="heading-white-sm">
                    VISUALIZATION
                  </h2>
                </div> 
                <p class="desc-white">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                </p>
              </div>
              
              <div class="btn-wrap">
                <a href="#" class="white-link">
                  {{ __('lang.Read More') }}
                  <span class="material-icons-round">
                    east
                  </span>
                </a>
              </div>
            </div>
            <div class="links-card data-bg" data-aos="fade-up">
              <div class="links-content">
                <div class="d-flex align-items-center">
                  <div class="link-icon">
                      <img src="{{asset('assets/front/images/data-share.svg')}}" alt="img" class="img-fluid">
                  </div>
                  <h2 class="heading-white-sm">
                    DATA SHARE
                  </h2>
              </div> 
              <p class="desc-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
              </p>
              </div>
              
              <div class="btn-wrap">
                <a href="#" class="white-link">
                  {{ __('lang.Read More') }}
                  <span class="material-icons-round">
                    east
                  </span>
                </a>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gallery-wrap ptb-60" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="heading-blue mb-4">
                     {{__('lang.Photo Gallery')}}
                    </h2>
                    <div id="gallery-slider">
                      <div class="owl-carousel owl-theme" id="photoSlider">
                        @foreach($events as $event)
                        <div class="item">
                            <div class="gallery-img-wrap">
                              <img src="{{asset('assets/uploads/'.$image[$event->id])}}" alt="img" class="img-fluid" style="width:100%;height:178.42px">
                              <a href="#" class="gallery-zoom-icon">
                                <span class="material-icons-round">
                                  zoom_in
                                </span>
                              </a>
                            </div>
                        </div>
                        @endforeach
                      </div>
                      <div class="btn-wrap">
                        <a href="{{url('/image-gallery')}}" class="org-link">
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
                      @foreach($vedios as $vedio)
                      <div class="item">
                          <div class="gallery-img-wrap">
                            <img src="{{asset('assets/front/images/video1.png')}}" alt="img" class="img-fluid" />
                            <a href="#" class="gallery-play-icon">
                                <span class="material-icons">
                                  play_circle_filled
                                </span>
                            </a>
                          </div>
                      </div>
                      @endforeach
                    </div>
                    <div class="btn-wrap">
                      <a href="{{url('/vedio-gallery')}}" class="org-link">
                        {{ __('lang.VIEW ALL') }} 
                        <span class="material-icons-round">
                          east
                        </span>
                      </a>
                    </div>
                  </div>
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
                    <a href="{{$logos->url}}">
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
    

@include('front.includes.footer')
<script>
  let fetchedStateData;
  let state_all_info;

  $(document).ready(function() {
    $.ajax({
      type: "GET",
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
  });

function generateNationalMap(data){
  Highcharts.mapChart('map-container', {
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
    tooltip: { enabled: false },
      navigation: {
          buttonOptions: {
              enabled: false
          }
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
                            const selectedMapData = DISTRICT_MAPS.find(data=> data.name === e.point.name.toUpperCase())
                              triggerDistrictChart(selectedMapData)                 
                              populateDemographicInfo(e.point.value)
                          }

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
          name: 'Random data',
          allowPointSelect: true,
          cursor: 'pointer',
          color: "#fff",
          states: {
              hover: {
                  color: '#006BB6'
              }
          },
          dataLabels: {
              enabled: false,
              format: '{point.name}'
          }
      }]
  });
}

  AOS.init({
      duration: 1500,
      disable: 'tablet',
      disable: 'mobile'
  });

  function triggerDistrictChart(data){
    let demographicInfo = []

    document.getElementById("map-container").style.display = "none";
    if(typeof data  === 'undefined'){
      $('#district-map-container').html('<p class="text-center">Map not found</p>')
      document.getElementById("district-map-container").style.display = "";
      return
    }
    Highcharts.mapChart('district-map-container',{
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
        enabled: true 
      },
      navigation: {
          buttonOptions: {
              enabled: false
          }
      }

    })
    document.getElementById("district-map-container").style.display = "";

  }

  function populateDemographicInfo(state_id,type='state'){
    let demographic_info;
    let total_teachers;
    let display_name;
    if(type === 'state'){
       demographic_info = state_all_info.filter(states_demographic=>{
        if(states_demographic.state_id === state_id){
          return states_demographic
        }
      })
    }else{
     const national_demographic_info = sessionStorage.getItem("national_demographic_data");
     demographic_info= JSON.parse(national_demographic_info)
    }

    const info =  demographic_info.pop()
    if(type === 'state'){
      total_teachers = parserInt(info.teacher_central_govt_schools) + parserInt(info.teacher_govt_aided_schools)
                          + parserInt(info.teacher_private_unaided_reco_schools) + parserInt(info.teacher_state_govt_schools) 
      display_name = info.state_name
      }else{
      total_teachers = 0
      display_name = 'National'
    }
    // console.log(info)
    
    // populating demographics

    $('.type_of_chart').html(display_name)
    $('#literacy_rate').html(info.literacy_rate)
    $('#total_area').html(info.total_district_area)
    $('#total_population').html(info.total_population)
    $('#population_density').html(info.density_of_population)
    $('#total_teachers').html(total_teachers)
    $('#sex_ratio').html(info.child_sex_ratio)

  }

  $('#states').change((e)=> { 
    const val = e.target.value
    
    const index = fetchedStateData.map(state => {
      return state.value
    }).indexOf(parserInt(val))

    if(val === ''){
      populateDemographicInfo('','')
      $('#name').html('All India');
      document.getElementById("map-container").style.display = "";
      document.getElementById("district-map-container").style.display = "none";

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
        const state_name = selected_state['hc-key'] 
        const selectedMapData = DISTRICT_MAPS.find(data=> data.name === state_name.toUpperCase())
        triggerDistrictChart(selectedMapData)
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
        return parseInt(value)
      }
    }
  }

  function getNationalDemographics(){
    console.log('api hit ----')
    $.ajax({
      type: "GET",
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
</script>