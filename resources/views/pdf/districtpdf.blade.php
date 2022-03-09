<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="http://nas21.inroad.in/report-pdf/assets/scss/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- Material Icons -->
  <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/material-icons.css">
  <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/style.css">
  <title>NAS</title>
  <style>
    .col-md-1 {
      width: 8.33333333%;
    }

    .col-md-2 {
      width: 16.66666667%;
    }

    .col-md-3 {
      width: 25%;
    }

    .col-md-4 {
      width: 33.33333333%;
    }

    .col-md-5 {
      width: 41.66666667%;
    }

    .col-md-6 {
      width: 50%;
    }

    .col-md-7 {
      width: 58.33333333%;
    }

    .col-md-8 {
      width: 66.66666667%;
    }

    .col-md-9 {
      width: 75%;
    }

    .col-md-10 {
      width: 83.33333333%;
    }

    .col-md-11 {
      width: 91.66666667%;
    }

    .col-md-12 {
      width: 100%;
    }
  </style>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="http://nas21.inroad.in/report-pdf/assets/js/jquery-3.6.0.min.js"></script>
  <script src="http://nas21.inroad.in/report-pdf/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Show District Map according to state start --->
    <script src="http://nas21.inroad.in/assets/front/js//highmaps.js"></script>
    <script src="http://nas21.inroad.in/assets/front/js/district_maps.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
        <?php
          if(strtoupper($districtVal->state_name)=='DELHI')
          {
            $stateName = 'NCT OF DELHI';
          }
          else
          {
            $stateName = strtoupper($districtVal->state_name);
          }
        ?>
        const selectedMapData = DISTRICT_MAPS.find(data=> data.name === '{{$stateName}}')
        // console.log(selectedMapData);
        triggerDistrictChart(selectedMapData)  
      });
    function triggerDistrictChart(data){
      // console.log(data.data)
      // let demographicInfo = []
      // document.getElementById("map-container").style.display = "none";
      // if(typeof data  === 'undefined'){
      //   $('#district-map-container').html('<p class="text-center">Map not found</p>')
      //   document.getElementById("district-map-container").style.display = "";
      //   $('#BackToN').css('display','block');
      //   return
      // }    
          // console.log(data.data)
      data.data[0].data.forEach((item)=>{
          // console.log(item)
          // console.log({{isset($districtVal->district_id)?$districtVal->district_id:'-'}})
          if(parseInt(item.id) === {{isset($districtVal->district_id)?$districtVal->district_id:'-'}}){
            // console.log('ok')
          item.color="#f7941c";
          item.borderColor="#6e6f70";
          item.states.hover.color="#f7941c";
          }else{
          item.color="#fff";
          item.borderColor="#6e6f70";
          item.states.hover.color="#f7941c";
          }

      })

     const map = Highcharts.mapChart('district-map-container',{
       chart: {
         width: "1000",
         height: "600",
         backgroundColor: "#d6e5f4"
       },
        title:{
            text:'',
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
        },
        
        plotOptions: {
          series:{
            allowPointSelect: true,
            states: {
              select: {
                color: '#f7941c'
              }
            },
            events:{
              click: (e)=>{
                setActiveDistrict(e.point.id);
                // e.point.color = '#f7941c';
              }
            },
            
          }  
        },

      });
     // console.log(map)
      // map.get("{{isset($districtVal->district_id)?$districtVal->district_id:'-'}}").zoomTo();

      document.getElementById("district-map-container").style.display = "";
      $('#BackToN').css('display','block');
      }
    </script>
  <!-- Show District Map according to state end --->
  <script src="https://code.highcharts.com/highcharts.js"></script>

</head>

<body class="p-0">
  <!-- Page 1 -->
  <div class="page">
    <section class="reportview-wrap drc-front">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reportview-container mb-0 dark-blue-bg">
              <div class="reportview-content-wrap">
                <div class="reportview-content dark-blue-bg">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="imgwrap text-start">
                        <img src="http://nas21.inroad.in/report-pdf/assets/images/ncert-view.jpg" alt="img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="imgwrap text-center">
                        <img src="http://nas21.inroad.in/report-pdf/assets/images/ministry-view.jpg" alt="img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="imgwrap text-end">
                        <img src="http://nas21.inroad.in/report-pdf/assets/images/cbsc-view.png" alt="img" class="img-fluid" />
                      </div>
                    </div>
                  </div>
                  <h2 class="heading-white-xl text-center ptb-30">
                    District Report Card
                  </h2>
                </div>
                <div class="reportview-content light-blue-bg">
                  <div class="row align-items-center">
                    <div class="col-md-5">
                      <div class="map-content text-center">
                        <h2 class="heading-black-xl ptb-15">
                          {{isset($districtVal->district_name)?$districtVal->district_name:'-'}}
                          <small>({{isset($districtVal->state_name)?$districtVal->state_name:'-'}})</small>
                        </h2>
                        <div class="rv-ranking-wrap" style="display: none;">
                            <h3 class="title-black-xl ptb-15">
                              District Ranking in NAS
                          </h3>
                            <div class="row align-items-center justify-content-center">
                              <span class="rv-ranking-box col-md-2">6</span>
                              <span class="rv-ranking-box col-md-2">7</span>
                              <span class="rv-ranking-box col-md-2">1</span>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="w-100" id="district-map-container">
                        <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/district-map.jpg" alt="img" class="img-fluid white-bg" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-content dark-blue-bg">
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <!-- <div class="col-md-12">
                        <h2>
                          Kadapa district is one of the thirteen districts in
                          the Indian state of AP. It is also one of the four
                          districts in the Rayalaseema region of the state.
                        </h2>
                      </div> -->
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Total District Area</h3>
                          <p class="total-no">{{isset($districtVal->total_district_area)&&$districtVal->total_district_area!=''?$districtVal->total_district_area:'0'}} sq. km.</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Total Population</h3>
                          <p class="total-no">{{(isset($districtVal->total_population)&&$districtVal->total_population!='')?$districtVal->total_population:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Rural Population</h3>
                          <p class="total-no">{{(isset($districtVal->rural_population)&&$districtVal->rural_population!='')?$districtVal->rural_population:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Urban Population</h3>
                          <p class="total-no">{{(isset($districtVal->urban_population)&&$districtVal->urban_population!='')?$districtVal->urban_population:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Density of Population</h3>
                          <p class="total-no">{{(isset($districtVal->density_of_population)&&$districtVal->density_of_population!='')?$districtVal->density_of_population:'0'}} per sq. km.</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Literacy Rate</h3>
                          <p class="total-no">{{(isset($districtVal->literacy_rate)&&$districtVal->literacy_rate!='')?$districtVal->literacy_rate:'0'}}%</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Child Sex Ratio (0-6 Age)</h3>
                          <p class="total-no">{{(isset($districtVal->child_sex_ratio)&&$districtVal->child_sex_ratio!='')?$districtVal->child_sex_ratio:'0'}} girls per 1000 boys</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Total number of schools in Kadapa district.</h2>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">No. of Schools</h3>
                          <p class="total-no">{{(isset($districtVal->no_of_schools)&&$districtVal->no_of_schools!='')?$districtVal->no_of_schools:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">State Govt Schools</h3>
                          <p class="total-no">{{(isset($districtVal->state_govt_schools)&&$districtVal->state_govt_schools!='')?$districtVal->state_govt_schools:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Govt Aided Schools</h3>
                          <p class="total-no">{{(isset($districtVal->govt_aided_schools)&&$districtVal->govt_aided_schools!='')?$districtVal->govt_aided_schools:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Central Govt Schools</h3>
                          <p class="total-no">{{(isset($districtVal->central_govt_schools)&&$districtVal->central_govt_schools!='')?$districtVal->central_govt_schools:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">
                            Private Un-aided Recognized Schools
                          </h3>
                          <p class="total-no">{{(isset($districtVal->private_unaided_reco_schools)&&$districtVal->private_unaided_reco_schools!='')?$districtVal->private_unaided_reco_schools:'0'}}</p>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Total number of teachers in Kadapa district.</h2>
                      </div>
                      <div class="col-md-4">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Teacher In State Govt Schools</h3>
                          <p class="total-no">{{(isset($districtVal->teacher_state_govt_schools)&&$districtVal->teacher_state_govt_schools!='')?$districtVal->teacher_state_govt_schools:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Teacher In Govt Aided Schools</h3>
                          <p class="total-no">{{(isset($districtVal->teacher_govt_aided_schools)&&$districtVal->teacher_govt_aided_schools!='')?$districtVal->teacher_govt_aided_schools:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Teacher In Central Govt Schools</h3>
                          <p class="total-no">{{(isset($districtVal->teacher_central_govt_schools)&&$districtVal->teacher_central_govt_schools!='')?$districtVal->teacher_central_govt_schools:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">
                            Teacher In Private Unaided Recognized Schools
                          </h3>
                          <p class="total-no">{{(isset($districtVal->teacher_private_unaided_reco_schools)&&$districtVal->teacher_private_unaided_reco_schools!='')?$districtVal->teacher_private_unaided_reco_schools:'0'}}</p>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-12 mb-4">
                          <h2>Total number of schools in {{isset($districtVal->district_name)?$districtVal->district_name:'-'}} district.</h2>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">No. of Schools</h3>
                            <p class="total-no">{{(isset($districtVal->no_of_schools)&&$districtVal->no_of_schools!='')?$districtVal->no_of_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">State Govt. Schools</h3>
                            <p class="total-no">{{(isset($districtVal->state_govt_schools)&&$districtVal->state_govt_schools!='')?$districtVal->state_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">Govt. Aided Schools</h3>
                            <p class="total-no">{{(isset($districtVal->govt_aided_schools)&&$districtVal->govt_aided_schools!='')?$districtVal->govt_aided_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">Central Govt. Schools</h3>
                            <p class="total-no">{{(isset($districtVal->central_govt_schools)&&$districtVal->central_govt_schools!='')?$districtVal->central_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">
                              Private Un-aided Recognized Schools
                            </h3>
                            <p class="total-no">{{(isset($districtVal->private_unaided_reco_schools)&&$districtVal->private_unaided_reco_schools!='')?$districtVal->private_unaided_reco_schools:'0'}}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-12 mb-4">
                          <h2>Total number of teachers in {{isset($districtVal->district_name)?$districtVal->district_name:'-'}} district.</h2>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">No. of Teachers</h3>
                            <p class="total-no">{{(isset($districtVal->teacher_state_govt_schools)&&($districtVal->teacher_state_govt_schools!='' || $districtVal->teacher_govt_aided_schools!='' || $districtVal->teacher_central_govt_schools!='' || $districtVal->teacher_private_unaided_reco_schools!=''))?$districtVal->teacher_state_govt_schools + $districtVal->teacher_govt_aided_schools +  $districtVal->teacher_central_govt_schools + $districtVal->teacher_private_unaided_reco_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">State Govt. Teachers</h3>
                            <p class="total-no">{{(isset($districtVal->teacher_state_govt_schools)&&$districtVal->teacher_state_govt_schools!='')?$districtVal->teacher_state_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">Govt. Aided Teachers</h3>
                            <p class="total-no">{{(isset($districtVal->teacher_govt_aided_schools)&&$districtVal->teacher_govt_aided_schools!='')?$districtVal->teacher_govt_aided_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">
                              Central Govt. Teachers
                            </h3>
                            <p class="total-no">{{(isset($districtVal->teacher_central_govt_schools)&&$districtVal->teacher_central_govt_schools!='')?$districtVal->teacher_central_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content light-blue-bg">
                            <h3 class="title">
                              Teachers In Private Un-aided Recognized Schools
                            </h3>
                            <p class="total-no">{{(isset($districtVal->teacher_private_unaided_reco_schools)&&$districtVal->teacher_private_unaided_reco_schools!='')?$districtVal->teacher_private_unaided_reco_schools:'0'}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <div class="footer dark-blue-bg p-3 m-0 report-footer-wrap"></div> -->
  </div>

  @if(count($districtParticipationData)>0)
  @php $pageNo = 1; @endphp
  @foreach($districtParticipationData as $districtParticipation)

  <!-- Page 2 -->
  <div class="page">
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Report Card ( {{isset($districtVal->state_name)?$districtVal->state_name:'-'}} - {{isset($districtVal->district_name)?$districtVal->district_name:'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg">
                  <div class="row p-4">
                    <div class="col-md-12 light-blue-bg report-card-head">
                      <h2 class="heading-black-bold text-center p-4">
                        TOTAL PARTICIPATION OF CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}
                      </h2>
                      <div class="container white-bg"></div>
                    </div>
                    <div class="container report-card-body">
                      <div class="row align-items-center text-center">
                        <div class="col-md-4">
                          <div class="img-tile dark-blue-bg mb-3">
                            <img class="school-img" src="http://nas21.inroad.in/report-pdf/assets/images/school.jpg" alt="school" />
                          </div>
                          <h4 class="heading-black-bold">Schools</h4>
                          <span>{{isset($districtParticipation->total_school)?$districtParticipation->total_school:'0'}}</span>
                        </div>
                        <div class="col-md-4">
                          <div class="img-tile dark-blue-bg mb-3">
                            <img src="http://nas21.inroad.in/report-pdf/assets/images/teacher.jpg" class="teacher-img" alt="teacher" />
                          </div>
                          <h4 class="heading-black-bold">Teachers</h4>
                          <span>{{isset($districtParticipation->total_teacher)?$districtParticipation->total_teacher:'0'}}</span>
                        </div>
                        <div class="col-md-4">
                          <div class="img-tile dark-blue-bg mb-3">
                            <img src="http://nas21.inroad.in/report-pdf/assets/images/students.jpg" class="student-img" alt="students" />
                          </div>
                          <h4 class="heading-black-bold">Students</h4>
                          <span>{{isset($districtParticipation->total_student)?$districtParticipation->total_student:'0'}}</span>
                        </div>
                      </div>
                    </div>
                    <!-- graph section -->
                    <div class="col-md-12 av-student-graph">
                      <h3 class="text-center heading-38 heading-black-bold mb-5">
                        Average Performance of Students
                      </h3>
                      <div class="d-flex flex-wrap justify-content-center graph-mark">
                        @if(isset($districtParticipation['DistrictPerformance']) && count($districtParticipation['DistrictPerformance'])>0)
                        @foreach($districtParticipation['DistrictPerformance'] as $avgPerformance)
                        @if($districtParticipation->grade==$avgPerformance->grade)
                        @php
                        $dataArr = json_decode($avgPerformance->data,true);
                        if($avgPerformance->grade==3 || $avgPerformance->grade==5)
                        {
                        $fcol = 33.33;
                        }
                        if($avgPerformance->grade==8)
                        {
                        $fcol = 25;
                        }
                        if($avgPerformance->grade==10)
                        {
                        $fcol = 20;
                        }
                        @endphp

                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5 ||$avgPerformance->grade==8)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="language{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-blue p-1">
                                <span class="text-white text-28">Language</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5 || $avgPerformance->grade==8 ||$avgPerformance->grade==10)
                        <!-- added ended -->
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="maths{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-pink p-1">
                                <span class="text-white text-28">Mathematics</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="evs{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-yellow p-1">
                                <span class="text-white text-28">EVS</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        <!-- added -->
                        @if($avgPerformance->grade==8 ||$avgPerformance->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="science{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-sagegreen p-1">
                                <span class="text-white text-28">Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($avgPerformance->grade==8 ||$avgPerformance->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="socialscience{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-green p-1">
                                <span class="text-white text-28">Social Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($avgPerformance->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="mil{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-red p-1">
                                <span class="text-white text-28">MIL</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($avgPerformance->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="english{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-purple p-1">
                                <span class="text-white text-28">English</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @include('pdf.firstgraph')
                        @endif
                        @endforeach
                        @endif
                      </div>
                    </div>
                    <!-- student percentage -->
                    <div class="col-md-12 av-student-percent">
                      <h3 class="text-center heading-black-bold heading-30 mb-5">
                        Percentage of Students in Performance Level
                      </h3>
                      <div class="row mt-5">
                        @if(isset($districtParticipation['DistrictPerformance']) && count($districtParticipation['DistrictPerformance'])>0)
                        @foreach($districtParticipation['DistrictPerformance'] as $avgPerformance)
                        @if($districtParticipation->grade==$avgPerformance->grade)
                        @php
                        $dataArr = json_decode($avgPerformance->data,true);
                        @endphp
                        <!-- row1 -->
                        <div class="col-md-4"></div>
                        <div class="col-md-2 tile-dark-blue">Below Basic</div>
                        <div class="col-md-2 tile-dark-blue">Basic</div>
                        <div class="col-md-2 tile-dark-blue">Proficient</div>
                        <div class="col-md-2 tile-dark-blue">Advanced</div>
                        <!-- row 2 -->
                        @if($districtParticipation->grade==3 || $districtParticipation->grade==5 ||$districtParticipation->grade==8)
                        <div class="col-md-4 tile-left-light-blue card-blue">
                          Language
                        </div>
                        <div class="col-md-2 tile-light-blue card-blue">{{(int)$dataArr['language']['performance_level']['district']['below_basic']}}</div>
                        <div class="col-md-2 tile-light-blue card-blue">{{(int)$dataArr['language']['performance_level']['district']['basic']}}</div>
                        <div class="col-md-2 tile-light-blue card-blue">{{(int)$dataArr['language']['performance_level']['district']['proficient']}}</div>
                        <div class="col-md-2 tile-light-blue card-blue">{{(int)$dataArr['language']['performance_level']['district']['advanced']}}</div>
                        @endif
                        @if($districtParticipation->grade==3 || $districtParticipation->grade==5 || $districtParticipation->grade==8 ||$districtParticipation->grade==10)
                        <!-- row 3 -->
                        <div class="col-md-4 tile-left-pink card-pink">
                          Mathematics
                        </div>
                        <div class="col-md-2 tile-pink card-pink">{{(int)$dataArr['math']['performance_level']['district']['below_basic']}}</div>
                        <div class="col-md-2 tile-pink card-pink">{{(int)$dataArr['math']['performance_level']['district']['basic']}}</div>
                        <div class="col-md-2 tile-pink card-pink">{{(int)$dataArr['math']['performance_level']['district']['proficient']}}</div>
                        <div class="col-md-2 tile-pink card-pink">{{(int)$dataArr['math']['performance_level']['district']['advanced']}}</div>
                        @endif
                        <!-- row 4 -->
                        @if($districtParticipation->grade==3 || $districtParticipation->grade==5)
                        <div class="col-md-4 tile-left-green card-yellow">
                          EVS
                        </div>
                        <div class="col-md-2 tile-green card-yellow">{{(int)$dataArr['evs']['performance_level']['district']['below_basic']}}</div>
                        <div class="col-md-2 tile-green card-yellow">{{(int)$dataArr['evs']['performance_level']['district']['basic']}}</div>
                        <div class="col-md-2 tile-green card-yellow">{{(int)$dataArr['evs']['performance_level']['district']['proficient']}}</div>
                        <div class="col-md-2 tile-green card-yellow">{{(int)$dataArr['evs']['performance_level']['district']['advanced']}}</div>
                        @endif
                        @if($districtParticipation->grade==8 ||$districtParticipation->grade==10)
                        <div class="col-md-4 tile-left-green card-sagegreen">
                          Science
                        </div>
                        <div class="col-md-2 tile-green card-sagegreen">{{(int)$dataArr['sci']['performance_level']['district']['below_basic']}}</div>
                        <div class="col-md-2 tile-green card-sagegreen">{{(int)$dataArr['sci']['performance_level']['district']['basic']}}</div>
                        <div class="col-md-2 tile-green card-sagegreen">{{(int)$dataArr['sci']['performance_level']['district']['proficient']}}</div>
                        <div class="col-md-2 tile-green card-sagegreen">{{(int)$dataArr['sci']['performance_level']['district']['advanced']}}</div>
                        @endif
                        @if($districtParticipation->grade==8 ||$districtParticipation->grade==10)
                        <div class="col-md-4 tile-left-green card-green">
                          Social Science
                        </div>
                        <div class="col-md-2 tile-green card-green">{{(int)$dataArr['sst']['performance_level']['district']['below_basic']}}</div>
                        <div class="col-md-2 tile-green card-green">{{(int)$dataArr['sst']['performance_level']['district']['basic']}}</div>
                        <div class="col-md-2 tile-green card-green">{{(int)$dataArr['sst']['performance_level']['district']['proficient']}}</div>
                        <div class="col-md-2 tile-green card-green">{{(int)$dataArr['sst']['performance_level']['district']['advanced']}}</div>
                        @endif
                        @if($districtParticipation->grade==10)
                        <div class="col-md-4 tile-left-green card-red">
                          MIL
                        </div>
                        <div class="col-md-2 tile-green card-red">{{(int)$dataArr['mil']['performance_level']['district']['below_basic']}}</div>
                        <div class="col-md-2 tile-green card-red">{{(int)$dataArr['mil']['performance_level']['district']['basic']}}</div>
                        <div class="col-md-2 tile-green card-red">{{(int)$dataArr['mil']['performance_level']['district']['proficient']}}</div>
                        <div class="col-md-2 tile-green card-red">{{(int)$dataArr['mil']['performance_level']['district']['advanced']}}</div>
                        @endif
                        @if($districtParticipation->grade==10)
                        <div class="col-md-4 tile-left-green card-purple">
                          English
                        </div>
                        <div class="col-md-2 tile-green card-purple">{{(int)$dataArr['eng']['performance_level']['district']['below_basic']}}</div>
                        <div class="col-md-2 tile-green card-purple">{{(int)$dataArr['eng']['performance_level']['district']['basic']}}</div>
                        <div class="col-md-2 tile-green card-purple">{{(int)$dataArr['eng']['performance_level']['district']['proficient']}}</div>
                        <div class="col-md-2 tile-green card-purple">{{(int)$dataArr['eng']['performance_level']['district']['advanced']}}</div>
                        @endif
                        @endif
                        @endforeach
                        @endif

                      </div>
                    </div>
                  </div>
                </div>
                <div class="report-footer-wrap pg2-cls-{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}">
                  <div class="reportview-footer">
                    <span class="page-no">@php $pageNo = $pageNo+1; echo $pageNo; @endphp</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Page 3 -->
  <div class="page">
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <!-- section  -->
          <div class="col-md-12">
            <div class="reportview-container mb-0">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Report Card ( {{isset($districtVal->state_name)?$districtVal->state_name:'-'}} - {{isset($districtVal->district_name)?$districtVal->district_name:'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg px-4 py-3">
                  <div class="row mt-2">
                    <!-- Gender -->
                    <div class="col-md-9 left mb-2">
                      <h4 class="">Performance by Gender</h4>
                      <div class="d-flex flex-wrap mb-60">
                        <!-- edited -->
                        @if(isset($districtParticipation['DistrictPerformance']) && count($districtParticipation['DistrictPerformance'])>0)
                        @foreach($districtParticipation['DistrictPerformance'] as $performanceByGender)
                        @if($districtParticipation->grade==$performanceByGender->grade)
                        @php
                        $dataGenderArr = json_decode($performanceByGender->data,true);
                        if($performanceByGender->grade==3 || $performanceByGender->grade==5)
                        {
                        $fcol = 33.33;
                        }
                        if($performanceByGender->grade==8)
                        {
                        $fcol = 25;
                        }
                        if($performanceByGender->grade==10)
                        {
                        $fcol = 20;
                        }
                        @endphp
                        @if($performanceByGender->grade==3 || $performanceByGender->grade==5 || $performanceByGender->grade==8 ||$performanceByGender->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-mathBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-pink">
                                <span class="text-white text-17">Mathematics</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByGender->grade==3 || $performanceByGender->grade==5 ||$performanceByGender->grade==8)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-languageBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-blue">
                                <span class="text-white text-17">Language</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByGender->grade==3 || $performanceByGender->grade==5)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level3">
                              <div id="rc3-evsBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-yellow">
                                <span class="text-white text-17">EVS</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByGender->grade==8 ||$performanceByGender->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-scienceBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-sagegreen">
                                <span class="text-white text-17">Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByGender->grade==8 ||$performanceByGender->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-socialscienceBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-green">
                                <span class="text-white text-17">Social Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByGender->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-milBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-red">
                                <span class="text-white text-17">MIL</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByGender->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-englishBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-purple">
                                <span class="text-white text-17">English</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @include('pdf.secondgraph')
                        @endif
                        @endforeach
                        @endif

                        <!-- edited ends -->
                      </div>
                    </div>
                    <div class="col-md-3 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="ps-3">Participation by Gender</h4>
                        <!-- images changed -->
                        @include('pdf.genderparticipation')
                      </div>
                    </div>
                    <!-- Location -->
                    <div class="col-md-9 left mb-2">
                      <h4 class="">Performance by Location</h4>
                      <div class="d-flex flex-wrap mb-60">
                        @if(isset($districtParticipation['DistrictPerformance']) && count($districtParticipation['DistrictPerformance'])>0)
                        @foreach($districtParticipation['DistrictPerformance'] as $performanceByLocation)
                        @if($districtParticipation->grade==$performanceByLocation->grade)
                        @php
                        $dataLocationArr = json_decode($performanceByLocation->data,true);
                        if($performanceByLocation->grade==3 || $performanceByLocation->grade==5)
                        {
                        $fcol = 33.33;
                        }
                        if($performanceByLocation->grade==8)
                        {
                        $fcol = 25;
                        }
                        if($performanceByLocation->grade==10)
                        {
                        $fcol = 20;
                        }
                        @endphp
                        @if($performanceByLocation->grade==3 || $performanceByLocation->grade==5 || $performanceByLocation->grade==8 ||$performanceByLocation->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-mathBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-pink">
                                <span class="text-white text-17">Mathematics</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByLocation->grade==3 || $performanceByLocation->grade==5 || $performanceByLocation->grade==8)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-languageBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-blue">
                                <span class="text-white text-17">Language</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByLocation->grade==3 || $performanceByLocation->grade==5)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level3">
                              <div id="rc3-evsBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-yellow">
                                <span class="text-white text-17">EVS</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByLocation->grade==8 ||$performanceByLocation->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-scienceBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-sagegreen">
                                <span class="text-white text-17">Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByLocation->grade==8 ||$performanceByLocation->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-socialscienceBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-green">
                                <span class="text-white text-17">Social Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByLocation->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-milBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-red">
                                <span class="text-white text-17">MIL</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByLocation->grade==10)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-englishBarGraph2{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-purple">
                                <span class="text-white text-17">English</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @include('pdf.thirdgraph')
                        @endif
                        @endforeach
                        @endif
                      </div>
                    </div>
                    <div class="col-md-3 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="ps-3">Participation by Location</h4>
                        @include('pdf.locationparticipation')
                      </div>
                    </div>
                    <!-- Management -->
                    <div class="col-md-9 left mb-2">
                      <h4 class="">Performance by Management</h4>
                      <div class="d-flex flex-wrap mb-60">
                        @if(isset($districtParticipation['DistrictPerformance']) && count($districtParticipation['DistrictPerformance'])>0)
                        @foreach($districtParticipation['DistrictPerformance'] as $performanceByMgt)
                        @if($districtParticipation->grade==$performanceByMgt->grade)
                        @php
                        $dataMgtArr = json_decode($performanceByMgt->data,true);
                        @endphp

                        @if($performanceByMgt->grade==3 || $performanceByMgt->grade==5 || $performanceByMgt->grade==8 ||$performanceByMgt->grade==10)
                        <div class="p-0" style="width:33.33%;">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-mathBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-pink">
                                <span class="text-white text-17">Mathematics</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByMgt->grade==3 || $performanceByMgt->grade==5 || $performanceByMgt->grade==8)
                        <div class="p-0" style="width:33.33%;">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-languageBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-blue">
                                <span class="text-white text-17">Language</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByMgt->grade==3 || $performanceByMgt->grade==5)
                        <div class="p-0" style="width:33.33%;">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level3">
                              <div id="rc3-evsBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-yellow">
                                <span class="text-white text-17">EVS</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByMgt->grade==8 ||$performanceByMgt->grade==10)
                        <div class="p-0" style="width:33.33%;">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level3">
                              <div id="rc3-scienceBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-sagegreen">
                                <span class="text-white text-17">Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByMgt->grade==10)
                        <div class="p-0" style="width:33.33%;">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level3">
                              <div id="rc3-milBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-red">
                                <span class="text-white text-17">MIL</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByMgt->grade==8 ||$performanceByMgt->grade==10)
                        <div class="p-0" style="width:33.33%;">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level4">
                              <div id="rc3-socialscienceBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-green">
                                <span class="text-white text-17">Social Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceByMgt->grade==10)
                        <div class="p-0" style="width:33.33%;">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-englishBarGraph3{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-purple">
                                <span class="text-white text-17">English</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @include('pdf.fourthgraph')
                        @endif
                        @endforeach
                        @endif
                      </div>
                    </div>
                    <div class="col-md-3 text-center gender-right">
                      <div class="cont-wrap mb-30">
                        <h4 class="mb-1 ps-3">Participation by Management</h4>
                        @include('pdf.managementparticipation')
                      </div>
                    </div>
                    <!-- Social -->
                    <div class="col-md-9 left">
                      <h4 class="">Performance by Social Group</h4>
                      <div class="d-flex flex-wrap mb-60">
                        @if(isset($districtParticipation['DistrictPerformance']) && count($districtParticipation['DistrictPerformance'])>0)
                        @foreach($districtParticipation['DistrictPerformance'] as $performanceBysclgrp)
                        @if($districtParticipation->grade==$performanceBysclgrp->grade)
                        @php
                        $datasclgrpArr = json_decode($performanceBysclgrp->data,true);
                        @endphp

                        @if($performanceBysclgrp->grade==3 || $performanceBysclgrp->grade==5 || $performanceBysclgrp->grade==8 ||$performanceBysclgrp->grade==10)
                        <div class="p-0" style="width: 33.33%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-mathBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-pink">
                                <span class="text-white text-17">Mathematics</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceBysclgrp->grade==3 || $performanceBysclgrp->grade==5 || $performanceBysclgrp->grade==8)
                        <div class="p-0" style="width: 33.33%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-languageBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-blue">
                                <span class="text-white text-17">Language</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceBysclgrp->grade==3 || $performanceBysclgrp->grade==5)
                        <div class="p-0" style="width: 33.33%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level3">
                              <div id="rc3-evsBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-yellow mx-4">
                                <span class="text-white text-17">EVS</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceBysclgrp->grade==8 ||$performanceBysclgrp->grade==10)
                        <div class="p-0" style="width: 33.33%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-scienceBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-sagegreen">
                                <span class="text-white text-17">Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceBysclgrp->grade==10)
                        <div class="p-0" style="width: 33.33%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-milBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-red">
                                <span class="text-white text-17">MIL</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceBysclgrp->grade==8 ||$performanceBysclgrp->grade==10)
                        <div class="p-0" style="width: 33.33%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level4">
                              <div id="rc3-socialscienceBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-green">
                                <span class="text-white text-17">Social Science</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif
                        @if($performanceBysclgrp->grade==10)
                        <div class="p-0" style="width: 33.33%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-englishBarGraph4{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center card-purple">
                                <span class="text-white text-17">English</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif

                        @include('pdf.fifthgraph')
                        @endif
                        @endforeach
                        @endif

                      </div>
                    </div>
                    <div class="col-md-3 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-5 ps-4">Participation by Social Group</h4>
                        @include('pdf.socialgroupparticipation')
                      </div>
                    </div>
                  </div>
                </div>
                <div class="report-footer-wrap pg3-cls-{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}">
                  <div class="reportview-footer">
                    <span class="page-no">@php $pageNo = $pageNo+1; echo $pageNo; @endphp</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Page 4 -->
  <div class="page">
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <!-- distict performance section  -->
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Report Card ( {{isset($districtVal->state_name)?$districtVal->state_name:'-'}} - {{isset($districtVal->district_name)?$districtVal->district_name:'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg">
                  <div class="row pb-100">
                    <div class="col-md-12">
                      <h4 class="performance-heading heading-black-bold text-center p-4">
                        Performance of the District in Learning Outcomes (LOs)
                      </h4>
                    </div>
                    <div class="col-md-12 mb-3 mt-4">
                      <div class="table-responsive">
                        <table class="table table-bordered align-middle text-center performance-table">
                          <thead>
                            <tr class="dark-blue-bg text-white">
                              <th scope="col">LO Code</th>
                              <th scope="col" class="">
                                Learning Outcomes for Class {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}
                              </th>
                              <th scope="col">District Average Performance</th>
                              <th scope="col">State Average Performance</th>
                              <th scope="col">National Average Performance</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(count($districtLOData)>0)
                            @php $m=1;@endphp
                            @foreach($districtLOData as $mathLO)
                            @if($districtParticipation->grade==$mathLO->grade)
                            @if($mathLO->language=='math')
                            @if($m==1)
                            <tr class="card-pink text-white">
                              <td class="text" colspan="5">
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="" />
                                Mathematics
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($m)%2==0)?'"card-light-pink"':''}}>
                              <th scope="row">{{isset($mathLO->subject_code)?$mathLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($mathLO->question!=''&&$mathLO->question!=0)?$mathLO->question:'-'}}
                              </td>
                              <td>{{isset($mathLO->avg)?$mathLO->avg:'-'}}</td>
                              <td>{{isset($mathLO->state_avg)?$mathLO->state_avg:'-'}}</td>
                              <td>{{isset($mathLO->national_avg)?$mathLO->national_avg:'-'}}</td>
                            </tr>
                            @php $m++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif

                            @if(count($districtLOData)>0)
                            @php $l=1;@endphp
                            @foreach($districtLOData as $languageLO)
                            @if($districtParticipation->grade==$languageLO->grade)
                            @if($languageLO->language=='language')
                            @if($l==1)
                            <tr class="card-blue text-white">
                              <td class="text" colspan="5">
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="" style="width: 35px;height: 30px;" />
                                Language
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($l)%2==0)?'"card-light-pink"':''}}>
                              <th scope="row">{{isset($languageLO->subject_code)?$languageLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($languageLO->question!=''&&$languageLO->question!=0)?$languageLO->question:'-'}}
                              </td>
                              <td>{{isset($languageLO->avg)?$languageLO->avg:'-'}}</td>
                              <td>{{isset($languageLO->state_avg)?$languageLO->state_avg:'-'}}</td>
                              <td>{{isset($languageLO->national_avg)?$languageLO->national_avg:'-'}}</td>
                            </tr>
                            @php $l++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif

                            @if(count($districtLOData)>0)
                            @php $e=1;@endphp
                            @foreach($districtLOData as $evsLO)
                            @if($districtParticipation->grade==$evsLO->grade)
                            @if($evsLO->language=='evs')
                            @if($e==1)
                            <tr class="card-yellow text-white">
                              <td class="text" colspan="5">
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="" />
                                EVS
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($e)%2==0)?'"light-yellow-bg"':''}}>
                              <th scope="row">{{isset($evsLO->subject_code)?$evsLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($evsLO->question!=''&&$evsLO->question!=0)?$evsLO->question:'-'}}
                              </td>
                              <td>{{isset($evsLO->avg)?$evsLO->avg:'-'}}</td>
                              <td>{{isset($evsLO->state_avg)?$evsLO->state_avg:'-'}}</td>
                              <td>{{isset($evsLO->national_avg)?$evsLO->national_avg:'-'}}</td>
                            </tr>
                            @php $e++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif
                            @if(count($districtLOData)>0)
                            @php $s=1;@endphp
                            @foreach($districtLOData as $sciLO)
                            @if($districtParticipation->grade==$sciLO->grade)
                            @if($sciLO->language=='sci')
                            @if($s==1)
                            <tr class="card-sagegreen text-white">
                              <td class="text" colspan="5">
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="" />
                                Science
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($s)%2==0)?'"light-yellow-bg"':''}}>
                              <th scope="row">{{isset($sciLO->subject_code)?$sciLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($sciLO->question!=''&&$sciLO->question!=0)?$sciLO->question:'-'}}
                              </td>
                              <td>{{isset($sciLO->avg)?$sciLO->avg:'-'}}</td>
                              <td>{{isset($sciLO->state_avg)?$sciLO->state_avg:'-'}}</td>
                              <td>{{isset($sciLO->national_avg)?$sciLO->national_avg:'-'}}</td>
                            </tr>
                            @php $s++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif
                            @if(count($districtLOData)>0)
                            @php $sst=1;@endphp
                            @foreach($districtLOData as $sstLO)
                            @if($districtParticipation->grade==$sstLO->grade)
                            @if($sstLO->language=='sst')
                            @if($sst==1)
                            <tr class="card-green text-white">
                              <td class="text" colspan="5">
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="" />
                                Social Science
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($sst)%2==0)?'"light-yellow-bg"':''}}>
                              <th scope="row">{{isset($sstLO->subject_code)?$sstLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($sstLO->question!=''&&$sstLO->question!=0)?$sstLO->question:'-'}}
                              </td>
                              <td>{{isset($sstLO->avg)?$sstLO->avg:'-'}}</td>
                              <td>{{isset($sstLO->state_avg)?$sstLO->state_avg:'-'}}</td>
                              <td>{{isset($sstLO->national_avg)?$sstLO->national_avg:'-'}}</td>
                            </tr>
                            @php $sst++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif
                            @if(count($districtLOData)>0)
                            @php $mil=1;@endphp
                            @foreach($districtLOData as $milLO)
                            @if($districtParticipation->grade==$milLO->grade)
                            @if($milLO->language=='mil')
                            @if($mil==1)
                            <tr class="card-red text-white">
                              <td class="text" colspan="5">
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/mil-icon.png" alt="" />
                                MIL
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($mil)%2==0)?'"light-yellow-bg"':''}}>
                              <th scope="row">{{isset($milLO->subject_code)?$milLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($milLO->question!=''&&$milLO->question!=0)?$milLO->question:'-'}}
                              </td>
                              <td>{{isset($milLO->avg)?$milLO->avg:'-'}}</td>
                              <td>{{isset($milLO->state_avg)?$milLO->state_avg:'-'}}</td>
                              <td>{{isset($milLO->national_avg)?$milLO->national_avg:'-'}}</td>
                            </tr>
                            @php $mil++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif
                            @if(count($districtLOData)>0)
                            @php $eng=1;@endphp
                            @foreach($districtLOData as $engLO)
                            @if($districtParticipation->grade==$engLO->grade)
                            @if($engLO->language=='eng')
                            @if($eng==1)
                            <tr class="card-purple text-white">
                              <td class="text" colspan="5">
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/english-icon.png" alt="" />
                                English
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($eng)%2==0)?'"light-yellow-bg"':''}}>
                              <th scope="row">{{isset($engLO->subject_code)?$engLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($engLO->question!=''&&$engLO->question!=0)?$engLO->question:'-'}}
                              </td>
                              <td>{{isset($engLO->avg)?$engLO->avg:'-'}}</td>
                              <td>{{isset($engLO->state_avg)?$engLO->state_avg:'-'}}</td>
                              <td>{{isset($engLO->national_avg)?$engLO->national_avg:'-'}}</td>
                            </tr>
                            @php $eng++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="report-footer-wrap">
                  <div class="reportview-footer">
                    <span class="page-no">@php $pageNo = $pageNo+1; echo $pageNo; @endphp</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Page 5 -->
  <div class="page">
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <!-- children testimony -->
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Report Card ( {{isset($districtVal->state_name)?$districtVal->state_name:'-'}} - {{isset($districtVal->district_name)?$districtVal->district_name:'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:0}}</span>
                </div>
                <div class="reportview-class-content light-blue-bg children-testimony mt-1">
                  <div class="row pt-3 justify-content-center pb-30">
                    <div class="col-md-12">
                      <h4 class="heading-30 heading-black-bold text-center p-5">
                        What children say about schools?
                      </h4>
                    </div>
                    @if(count($districtFeedbackData)>0)
                    @foreach($districtFeedbackData as $pqfeedback)
                    @if($districtParticipation->grade==$pqfeedback->grade)
                    @if($pqfeedback->level=='pq')
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="text-blue pt-2">{{isset($pqfeedback->avg)?$pqfeedback->avg:0}}%</h2>
                        <p class="total-no">{{isset($pqfeedback->question_desc)?$pqfeedback->question_desc:'-'}}</p>
                      </div>
                    </div>
                    @endif
                    @endif
                    @endforeach
                    @endif
                  </div>
                </div>
                <div class="teacher-sec">
                  <div class="row">
                    <!-- left sec -->
                    <div class="col-md-8 light-green-bg teacher-left">
                      <h4 class="heading-black-bold heading-30 text-center p-4">
                        What teachers responded about school?
                      </h4>

                      @if(count($districtFeedbackData)>0)
                      @php $tq=1; $tqArr = array(); $tq3=1;@endphp
                      @foreach($districtFeedbackData as $tqfeedback)
                      @if($districtParticipation->grade==$tqfeedback->grade)
                      @if($tqfeedback->level=='tq')
                      @php
                      if($tq%2==0)
                      {
                      $colorClass = 'o-color-green text-white';
                      }
                      else
                      {
                      $colorClass = 'o-color-white';
                      }
                      @endphp
                      @if(!in_array($tqfeedback->id,$tqArr))
                      <div class="row row-margin justify-content-center">
                        <div class="col-md-6">
                          <div class='octagonWrap'>
                            <div class="octagon-card {{$colorClass}} text-center">
                              <!-- .infotab-content ----class -->
                              <h2 class="text-green">{{isset($tqfeedback->avg)?$tqfeedback->avg:0}}%</h2>
                              <p class="total-no">
                                {{isset($tqfeedback->question_desc)?$tqfeedback->question_desc:'-'}}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      @php array_push($tqArr,$tqfeedback->id);@endphp
                      <!--  Second Loop start here  -->
                      @php $tq2=1;@endphp
                      <div class="row row-margin">
                        @foreach($districtFeedbackData as $tqfeedback2)
                        @if($districtParticipation->grade==$tqfeedback2->grade)
                        @if($tqfeedback2->level=='tq')
                        @if(!in_array($tqfeedback2->id,$tqArr))
                        @php
                        $octoganCardbgColor = array(1=>'o-color-light-green',2=>'o-color-white',3=>'o-color-white',4=>'o-color-dark-green',5=>'o-color-light-green',6=>'o-color-white',7=>'o-color-white',8=>'o-color-dark-green',9=>'o-color-light-green',10=>'o-color-white',11=>'o-color-white',12=>'o-color-dark-green',13=>'o-color-light-green',14=>'o-color-white',15=>'o-color-white',16=>'o-color-dark-green');
                        @endphp
                        <div class="col-md-6">
                          <div class="octagon-card {{isset($octoganCardbgColor[$tq3])?$octoganCardbgColor[$tq3]:''}} {{isset($octoganCardbgColor[$tq3])&& $octoganCardbgColor[$tq3]!='o-color-white'?'text-white':''}} text-center">
                            <h2 class="title">{{isset($tqfeedback2->avg)?$tqfeedback2->avg:0}}%</h2>
                            <p class="total-no">
                              {{isset($tqfeedback2->question_desc)?$tqfeedback2->question_desc:'-'}}
                            </p>
                          </div>
                        </div>
                        @php $tq3++; array_push($tqArr,$tqfeedback2->id); if($tq2==2){break;}$tq2++; @endphp
                        @endif
                        @endif
                        @endif
                        @endforeach
                      </div>
                      <!--  Second Loop end here  -->

                      @endif
                      @php $tq++;@endphp
                      @endif
                      @endif
                      @endforeach
                      @endif
                    </div>
                    <!-- right sec -->
                    <div class="col-md-4 light-pink teacher-right">
                      <h4 class="heading-black-bold heading-30 text-center p-4">
                        What head teachers responded about school?
                      </h4>
                      <div class="container">
                        <div class="row">
                          @if(count($districtFeedbackData)>0)
                          @foreach($districtFeedbackData as $sqfeedback)
                          @if($districtParticipation->grade==$sqfeedback->grade)
                          @if($sqfeedback->level=='sq')
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-pink">{{isset($sqfeedback->avg)?$sqfeedback->avg:0}}%</h2>
                              <p class="total-no">
                                {{isset($sqfeedback->question_desc)?$sqfeedback->question_desc:'-'}}
                              </p>
                            </div>
                          </div>
                          @endif
                          @endif
                          @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="report-footer-wrap">
                  <div class="reportview-footer">
                    <span class="page-no">@php $pageNo = $pageNo+1; echo $pageNo; @endphp</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('pdf.sixthgraph')

  @endforeach
  @endif
</body>

</html>