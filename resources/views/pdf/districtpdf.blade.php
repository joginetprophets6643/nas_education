<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://nas21.inroad.in/report-pdf/assets/scss/bootstrap.min.css" rel="stylesheet">
  <link href="https://nas21.inroad.in/assets/front/scss/font-css2.css" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://nas21.inroad.in/report-pdf/assets/scss/material-icons.css">
  <link rel="stylesheet" href="https://nas21.inroad.in/report-pdf/assets/scss/style.css">
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
  <script src="https://nas21.inroad.in/report-pdf/assets/js/jquery-3.6.0.min.js"></script>
  <script src="https://nas21.inroad.in/report-pdf/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Show District Map according to state start --->
    <script src="https://nas21.inroad.in/assets/front/js//highmaps.js"></script>
    <script src="https://nas21.inroad.in/assets/front/js/district_maps.js"></script>
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
          // dd($stateName);
        ?>
        const selectedMapData = DISTRICT_MAPS.find(data=> data.name === '<?php echo $stateName ?>')
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
         height: "550",
         backgroundColor: "#00517e"
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
  <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
  <script src="https://nas21.inroad.in/report-pdf/assets/js/highcharts.js"></script>

</head>

<body class="p-0">
  <!-- Page 1 -->
  <div class="page">
    <section class="reportview-wrap drc-front">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reportview-container mb-0 p-0">
              <div class="reportview-content-wrap">
                <div class="reportview-content bg-white">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="imgwrap text-start">
                        <img src="https://nas21.inroad.in/report-pdf/assets/images/ncert-view.png" alt="img" class="drc-logo" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="imgwrap text-center">
                        <img src="https://nas21.inroad.in/report-pdf/assets/images/ministry-view.png" alt="img" class="img-fluid" />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="imgwrap text-end">
                        <img src="https://nas21.inroad.in/report-pdf/assets/images/cbse-view.png" alt="img" class="drc-logo" />
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- added -->
                <div class="reportview-content nas-heading p-2 text-center">
                  <h1 class="text-white fw-bold">National Achievement Survey (NAS)</h1>
                  <h6 class="fw-bold">2021</h6>
                </div>
                <!--  -->
                <div class="reportview-content dark-blue-bg">
                  <div class="row align-items-center">
                    <div class="col-md-12">
                      <h2 class="heading-blue-xl text-center ptb-30">
                        District Report Card
                      </h2>
                    </div>
                    <div class="col-md-5">
                      <div class="map-content text-center">
                        <h2 class="heading-black-xl text-white ptb-15">
                          {{isset($districtVal->district_name)?$districtVal->district_name:'-'}}
                          <small class="text-white">({{isset($districtVal->state_name)?$districtVal->state_name:'-'}})</small>
                        </h2>
                        <div class="rv-ranking-wrap" style="display: none;">
                            <h3 class="title-black-xl text-white ptb-15">
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
                        <!-- <img src="https://nas21.inroad.in/report-pdf/assets/images/district-map.jpg" alt="img" class="img-fluid white-bg" /> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-content light-blue-bg">
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="drc-front-h2">
                          Demographic and educational profile of the district:
                        </h2>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content dark-blue-bg">
                          <h3 class="title text-white">Total District Area</h3>
                          <p class="total-no text-white">{{isset($districtVal->total_district_area)&&$districtVal->total_district_area!=''?$districtVal->total_district_area:'0'}} sq. km.</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content dark-blue-bg">
                          <h3 class="title text-white">Total Population</h3>
                          <p class="total-no text-white">{{(isset($districtVal->total_population)&&$districtVal->total_population!='')?$districtVal->total_population:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content dark-blue-bg">
                          <h3 class="title text-white">Rural Population</h3>
                          <p class="total-no text-white">{{(isset($districtVal->rural_population)&&$districtVal->rural_population!='')?$districtVal->rural_population:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content dark-blue-bg">
                          <h3 class="title text-white">Urban Population</h3>
                          <p class="total-no text-white">{{(isset($districtVal->urban_population)&&$districtVal->urban_population!='')?$districtVal->urban_population:'0'}}</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content dark-blue-bg">
                          <h3 class="title text-white">Density of Population</h3>
                          <p class="total-no text-white">{{(isset($districtVal->density_of_population)&&$districtVal->density_of_population!='')?$districtVal->density_of_population:'0'}} per sq. km.</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content dark-blue-bg">
                          <h3 class="title text-white">Literacy Rate</h3>
                          <p class="total-no text-white">{{(isset($districtVal->literacy_rate)&&$districtVal->literacy_rate!='')?$districtVal->literacy_rate:'0'}}%</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="infotab-content dark-blue-bg">
                          <h3 class="title text-white">Child Sex Ratio (0-6 Age)</h3>
                          <p class="total-no text-white">{{(isset($districtVal->child_sex_ratio)&&$districtVal->child_sex_ratio!='')?$districtVal->child_sex_ratio:'0'}} girls per 1000 boys</p>
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
                  
                  <div class="infotab-content-wrap fixed">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">Total Number of Schools</h3>
                            <p class="total-no text-white">{{(isset($districtVal->no_of_schools)&&$districtVal->no_of_schools!='')?$districtVal->no_of_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">State Govt. Schools</h3>
                            <p class="total-no text-white">{{(isset($districtVal->state_govt_schools)&&$districtVal->state_govt_schools!='')?$districtVal->state_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">Govt. Aided Schools</h3>
                            <p class="total-no text-white">{{(isset($districtVal->govt_aided_schools)&&$districtVal->govt_aided_schools!='')?$districtVal->govt_aided_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">Central Govt. Schools</h3>
                            <p class="total-no text-white">{{(isset($districtVal->central_govt_schools)&&$districtVal->central_govt_schools!='')?$districtVal->central_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">
                              Private Un-aided Recognized Schools
                            </h3>
                            <p class="total-no text-white">{{(isset($districtVal->private_unaided_reco_schools)&&$districtVal->private_unaided_reco_schools!='')?$districtVal->private_unaided_reco_schools:'0'}}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">Total Number of Teachers</h3>
                            <p class="total-no text-white">{{(isset($districtVal->teacher_state_govt_schools)&&($districtVal->teacher_state_govt_schools!='' || $districtVal->teacher_govt_aided_schools!='' || $districtVal->teacher_central_govt_schools!='' || $districtVal->teacher_private_unaided_reco_schools!=''))?$districtVal->teacher_state_govt_schools + $districtVal->teacher_govt_aided_schools +  $districtVal->teacher_central_govt_schools + $districtVal->teacher_private_unaided_reco_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">State Govt. Teachers</h3>
                            <p class="total-no text-white">{{(isset($districtVal->teacher_state_govt_schools)&&$districtVal->teacher_state_govt_schools!='')?$districtVal->teacher_state_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">Govt. Aided Teachers</h3>
                            <p class="total-no text-white">{{(isset($districtVal->teacher_govt_aided_schools)&&$districtVal->teacher_govt_aided_schools!='')?$districtVal->teacher_govt_aided_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">
                              Central Govt. Teachers
                            </h3>
                            <p class="total-no text-white">{{(isset($districtVal->teacher_central_govt_schools)&&$districtVal->teacher_central_govt_schools!='')?$districtVal->teacher_central_govt_schools:'0'}}</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4">
                          <div class="infotab-content dark-blue-bg">
                            <h3 class="title text-white">
                              Teachers In Private Un-aided Recognized Schools
                            </h3>
                            <p class="total-no text-white">{{(isset($districtVal->teacher_private_unaided_reco_schools)&&$districtVal->teacher_private_unaided_reco_schools!='')?$districtVal->teacher_private_unaided_reco_schools:'0'}}</p>
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
  
  <!-- page-2 new/ about nas starts -->
  <div class="page">
      <section class="reportview-wrap about-nas-drc">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0 highlights-container">
                <div class="reportview-class-wrap">
                  
                  <div class="reportview-class-content white-bg m-5">
                    <!-- content -->
                    <div class="row justify-content-center">
                      <div class="col-md-12">
                        <h1 class="text-center fw-bold">About NAS</h1>
                      </div>
                      <div class="col-md-7 top-card">
                        <div class="bg-sky-blue text-white text-center">
                          <h4 class="fw-light">
                            The NAS is a system level assessment i.e. it summarizes students achievement at National, State/UT and District levels. NAS does not provide scores for individual student/school.
                          </h4>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="about-sec-card">
                          <div class="row">
                            <div class="col-md-6 pe-4">
                              <p>
                                NAS is a national-level large scale assessment study conducted to provide information about the learning achievement of students studying in government, government-aided and private unaided schools. NAS is a standardized method to tests students of Classes III, V, VIII and X. 
                                NAS has contributed several new elements and given remarkable momentum to the development of competency based assessment. One of the main virtues of NAS is that it is embedded in an extremely rich system of background variables. The results help to accurately discover the students’ performance in different learning outcomes vis-à-vis the contextual variables. The very aim of this national assessment is to compare the performance across spectrum and across population in order to find the desirable direction for the changes and provide a basis for the necessary decisions. The synthesis of the results of the national level provides a rich  repository of evidences 
                              </p>
                            </div>
                            <div class="col-md-6 ps-4">
                              <p>for developing and designing the future course of action for the Indian education system.</p>
                              <p>
                                This NAS report presents the findings of National Achievement Survey conducted on students studying in Class III, V, VIII and X. Selecting a representative sample in India is a challenging and arduous task.
                                 For selecting the representative sample of NAS, government, government aided, and private unaided schools were included in the sample frame.  School level samples from each district were drawn for NAS conducted in November 2021 which was administered in 720 Districts of 36 States and UTs. Nearly 3.4 million students were tested in the learning outcomes developed by the NCERT. 
                                 NAS is led by the NAS Cell, National Council of Educational Research and Training (NCERT) and Central Board of Secondary Education (CBSE), under the aegis of Department of School Education and Literacy (DoSEL), Ministry of Education (MoE).
                              </p>
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
    </div>
  <!-- page-2 new/ about nas ends -->

  @if(count($districtParticipationData)>0)
  @php $pageNo = 3; @endphp
  @foreach($districtParticipationData as $districtParticipation)

  <!-- new-page 3 class start -->
  <div class="page">
      <section class="reportview-wrap drc-class-name">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0 highlights-container">
                <div class="reportview-class-wrap">
                  <div class="reportview-class-content bg-sky-blue">
                    <div class="row align-items-center">
                      <div class="col-md-12">
                          <div class="text-white class-card pt-5 pb-4 text-center">
                            <h2 class="mb-0 fw-bold">NAS 2021</h2>
                            <h3 class="mb-0 fw-bold">RESULTS FOR</h3>
                            <h1 class="mb-0 fw-bold">Class {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</h1>
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
    </div>
  <!-- new-page 3 class start -->

  <!-- Page 2 -->
  <div class="page">
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>District Report Card ( {{isset($districtVal->state_name)?ucfirst(strtolower($districtVal->state_name)):'-'}} - {{isset($districtVal->district_name)?ucfirst(strtolower($districtVal->district_name)):'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg">
                  <div class="row px-4">
                    <div class="col-md-12 report-card-head1">
                      <h2 class="heading-black-bold mb-3 p-3">
                        Total Participation 
                      </h2>
                    </div>
                    <div class="col-md-12 report-card-head">
                      <div class="container"></div>
                    </div>
                    <div class="container report-card-body">
                      <div class="tile-row d-flex align-items-center justify-content-around text-center">
                        <div class="tile-1">
                          <div class="d-flex">
                            <div class="tile-text me-4">
                              <span class="text-pink">{{isset($districtParticipation->total_school)?$districtParticipation->total_school:'0'}}</span>
                              <h4 class="heading-black-bold">Schools</h4>
                            </div>
                            <div class="img-tile tile-pink mb-3">
                              <img class="school-img" src="https://nas21.inroad.in/report-pdf/assets/images/school.png" alt="school" />
                              
                            </div>
                          </div>
                        </div>
                        <div class="tile-2">
                          <div class="d-flex">
                            <div class="tile-text me-4">
                              <span class="text-skyblue">{{isset($districtParticipation->total_teacher)?$districtParticipation->total_teacher:'0'}}</span>
                              <h4 class="heading-black-bold">Teachers</h4>
                            </div>
                            <div class="img-tile tile-skyblue mb-3">
                              <img src="https://nas21.inroad.in/report-pdf/assets/images/teacher.png" class="teacher-img" alt="teacher" />
                            </div>
                          </div>
                        </div>
                        <div class="tile-3">
                          <div class="d-flex">
                            <div class="tile-text me-4">
                              <span class="text-green">{{isset($districtParticipation->total_student)?$districtParticipation->total_student:'0'}}</span>
                              <h4 class="heading-black-bold">Students</h4>
                            </div>
                            <div class="img-tile tile-green mb-3">
                              <img src="https://nas21.inroad.in/report-pdf/assets/images/students.png" class="student-img" alt="students" />
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- graph section -->
                    <div class="col-md-12 av-student-graph py-0">
                      <h3 class="heading-38 heading-black-bold mb-3">
                        District Performance of Students vis-a-vis State and National <span class="fw-light">(in percent correct)</span>
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

                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5 || $avgPerformance->grade==8 ||$avgPerformance->grade==10)
                        <!-- added ended -->
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="maths{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center dark-blue-bg p-1">
                                <span class="text-white text-28">Mathematics</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        @endif

                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5 ||$avgPerformance->grade==8)
                        <div class="p-0" style="width: {{$fcol}}%">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              <div id="language{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center dark-blue-bg p-1">
                                <span class="text-white text-28">Language</span>
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
                              <div class="category text-center dark-blue-bg p-1">
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
                              <div class="category text-center dark-blue-bg p-1">
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
                              <div class="category text-center dark-blue-bg p-1">
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
                              <div class="category text-center dark-blue-bg p-1">
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
                              <div class="category text-center dark-blue-bg p-1">
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
                    <div class="col-md-12 av-student-percent my-0 py-0">
                      <h3 class="heading-black-bold heading-30 mt-5 mb-4">
                        Percentage of Students by Performance Level
                      </h3>
                      
                      <div class="light-orange px-3 py-2 mt-3">
                        @if(isset($districtParticipation['DistrictPerformance']) && count($districtParticipation['DistrictPerformance'])>0)
                        @foreach($districtParticipation['DistrictPerformance'] as $avgPerformance)
                        @if($districtParticipation->grade==$avgPerformance->grade)
                        @php
                        $dataArr = json_decode($avgPerformance->data,true);
                        @endphp

                        <div class="arrow-table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col" class="arrow-head arrow-color-pink">Below basic</th>
                                <th scope="col" class="arrow-head arrow-color-orange">Basic</th>
                                <th scope="col" class="arrow-head arrow-color-green">Proficient</th>
                                <th scope="col" class="arrow-head arrow-color-blue">Advanced</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($districtParticipation->grade==3 || $districtParticipation->grade==5 ||$districtParticipation->grade==8)
                              <tr>
                                <th scope="row">Language</th>
                                <td>{{(int)$dataArr['language']['performance_level']['district']['below_basic']}}</td>
                                <td>{{(int)$dataArr['language']['performance_level']['district']['basic']}}</td>
                                <td>{{(int)$dataArr['language']['performance_level']['district']['proficient']}}</td>
                                <td>{{(int)$dataArr['language']['performance_level']['district']['advanced']}}</td>
                              </tr>
                              @endif
                              @if($districtParticipation->grade==3 || $districtParticipation->grade==5 || $districtParticipation->grade==8 ||$districtParticipation->grade==10)
                              <tr>
                                <th scope="row">Mathematics</th>
                                <td>{{(int)$dataArr['math']['performance_level']['district']['below_basic']}}</td>
                                <td>{{(int)$dataArr['math']['performance_level']['district']['basic']}}</td>
                                <td>{{(int)$dataArr['math']['performance_level']['district']['proficient']}}</td>
                                <td>{{(int)$dataArr['math']['performance_level']['district']['advanced']}}</td>
                              </tr>
                              @endif
                              @if($districtParticipation->grade==3 || $districtParticipation->grade==5)
                              <tr>
                                <th>
                                  EVS
                                </th>
                                <td>{{(int)$dataArr['evs']['performance_level']['district']['below_basic']}}</td>
                                <td>{{(int)$dataArr['evs']['performance_level']['district']['basic']}}</td>
                                <td>{{(int)$dataArr['evs']['performance_level']['district']['proficient']}}</td>
                                <td>{{(int)$dataArr['evs']['performance_level']['district']['advanced']}}</td>
                              </tr>
                              @endif
                              @if($districtParticipation->grade==8 ||$districtParticipation->grade==10)
                              <tr>
                                <th>
                                  Science
                                </th>
                                <td>{{(int)$dataArr['sci']['performance_level']['district']['below_basic']}}</td>
                                <td>{{(int)$dataArr['sci']['performance_level']['district']['basic']}}</td>
                                <td>{{(int)$dataArr['sci']['performance_level']['district']['proficient']}}</td>
                                <td>{{(int)$dataArr['sci']['performance_level']['district']['advanced']}}</td>
                              </tr>
                              @endif
                              @if($districtParticipation->grade==8 ||$districtParticipation->grade==10)
                              <tr>
                                <th>
                                  Social Science
                                </th>
                                <td>{{(int)$dataArr['sst']['performance_level']['district']['below_basic']}}</td>
                                <td>{{(int)$dataArr['sst']['performance_level']['district']['basic']}}</td>
                                <td>{{(int)$dataArr['sst']['performance_level']['district']['proficient']}}</td>
                                <td>{{(int)$dataArr['sst']['performance_level']['district']['advanced']}}</td>
                              </tr>
                              @endif
                              @if($districtParticipation->grade==10)
                              <tr>
                                <th>
                                  MIL
                                </th>
                                <td>{{(int)$dataArr['mil']['performance_level']['district']['below_basic']}}</td>
                                <td>{{(int)$dataArr['mil']['performance_level']['district']['basic']}}</td>
                                <td>{{(int)$dataArr['mil']['performance_level']['district']['proficient']}}</td>
                                <td>{{(int)$dataArr['mil']['performance_level']['district']['advanced']}}</td>
                              </tr>
                              @endif
                              @if($districtParticipation->grade==10)
                              <tr>
                                <th>
                                  English
                                </th>
                                <td>{{(int)$dataArr['eng']['performance_level']['district']['below_basic']}}</td>
                                <td>{{(int)$dataArr['eng']['performance_level']['district']['basic']}}</td>
                                <td>{{(int)$dataArr['eng']['performance_level']['district']['proficient']}}</td>
                                <td>{{(int)$dataArr['eng']['performance_level']['district']['advanced']}}</td>
                              </tr>
                              @endif
                              @endif
                              @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>

                        <!--  -->
                        <div class="row px-4">
                          <div class="col-md-12 per-sec my-2 light-blue">
                            <div class="row px-1 align-items-center">
                              <div class="col-md-2 left-per-sec p-4 my-1 bg-pink text-center">
                                <h4 class="fw-bold my-3 text-white">
                                  Below Basic
                                </h4>
                              </div>
                              <div class="col-md-10 my-3">
                                <p class="mb-0">Learners at this level are at the early stages of development regarding the curriculum standards. They have not achieved sufficient knowledge and skills to be considered minimally successful regarding curriculum demands. They need guidance at every stage of learning. They can make little judgment and need a lot of encouragement and guidance.</p>
                              </div>
                              <hr>
                              <div class="col-md-2 left-per-sec p-4 my-1 bg-orange text-center">
                                <h4 class="fw-bold my-3 text-white">
                                  Basic
                                </h4>
                              </div>
                              <div class="col-md-10 my-3">
                                <p class="mb-0">Learners at this level demonstrate a minimum level of skills related to the curriculum learning outcomes. They can follow simple instructions and apply simple rules to achieve expected performance. They have some good ideas which often lack coherence. They need guidance at many stages of learning. They can solve problems using simple logic, and can also express themselves using simple language.</p>
                              </div>
                              <hr>
                              <div class="col-md-2 left-per-sec p-4 my-1 bg-green text-center">
                                <h4 class="fw-bold my-3 text-white">
                                  Proficient
                                </h4>
                              </div>
                              <div class="col-md-10 my-3">
                                <p class="mb-0">Learners at this level have acquired most of the learning outcomes and skills required by the curriculum. They can work independently with minimum supervision. They have a systematic methodology to solve problems. They can communicate their ideas clearly. They can also connect different ideas and create meaning with minimum guidance and supervision. They can analyze situations and interpret information for application to new situations.</p>
                              </div>
                              <hr>
                              <div class="col-md-2 left-per-sec p-4 my-1 bg-skyblue text-center">
                                <h4 class="fw-bold my-3 text-white">
                                  Advanced
                                </h4>
                              </div>
                              <div class="col-md-10 my-3">
                                <p class="mb-0">Learners at this level display exceptional mastery of the learning content as prescribed by the curriculum and beyond. They are independent with high analytical, reflective and critical thinking. They can connect and integrate concepts and ideas to create new knowledge/meaning and solve complex problems. They communicate information with the highest level of creativity and coherence as well as make sound judgements.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="report-footer-wrap nw-pg2-cls-{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}">
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
                  <h2>District Report Card ( {{isset($districtVal->state_name)?ucfirst(strtolower($districtVal->state_name)):'-'}} - {{isset($districtVal->district_name)?ucfirst(strtolower($districtVal->district_name)):'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg px-4 py-2">
                  <div class="row mt-2">
                    <!-- Gender -->
                    <div class="col-md-9 left mb-2">
                      <div class="d-flex justify-content-between">
                        <h4 class="">Performance by Gender <span class="fw-light">(in percent correct)</span></h4>
                        <div class="graph-label-list">
                            <ul>
                              <li>
                                <div class="graph-label">
                                    <span class="graph-label-box legend-color-sagegreen"></span>
                                    <p class="graph-label-text">Boys</p>
                                </div>
                              </li>
                              <li>
                                <div class="graph-label">
                                    <span class="graph-label-box legend-color-cream"></span>
                                    <p class="graph-label-text">Girls</p>
                                </div>
                              </li>
                              <li>
                                <div class="graph-label">
                                    <span class="graph-label-box legend-color-purple"></span>
                                    <p class="graph-label-text">Transgender</p>
                                </div>
                              </li>
                              
                            </ul>
                        </div>

                      </div>
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
                            <figure class="highcharts-figure graph-level">
                              <div id="rc3-mathBarGraph1{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}"></div>
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                      <div class="d-flex justify-content-between">
                        <h4 class="">Performance by Location <span class="fw-light">(in percent correct)</span></h4>
                        <div class="graph-label-list">
                            <ul>
                              <li>
                                <div class="graph-label">
                                    <span class="graph-label-box legend-color-orange"></span>
                                    <p class="graph-label-text">Rural</p>
                                </div>
                              </li>
                              <li>
                                <div class="graph-label">
                                    <span class="graph-label-box legend-color-yellow"></span>
                                    <p class="graph-label-text">Urban</p>
                                </div>
                              </li>
                            </ul>
                        </div>

                      </div>
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                      <div class="d-flex justify-content-between">
                            <h4 class="">Performance by Management <span class="fw-light">(in percent correct)</span></h4>
                            <div class="graph-label-list">
                                <ul>
                                  <li>
                                    <div class="graph-label">
                                        <span class="graph-label-box legend-color-blue1"></span>
                                        <p class="graph-label-text">Govt.</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="graph-label">
                                        <span class="graph-label-box legend-color-blue2"></span>
                                        <p class="graph-label-text">Govt. Aided</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="graph-label">
                                        <span class="graph-label-box legend-color-blue3"></span>
                                        <p class="graph-label-text">Private</p>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="graph-label">
                                        <span class="graph-label-box legend-color-blue4"></span>
                                        <p class="graph-label-text">Central Govt.</p>
                                    </div>
                                  </li>
                                </ul>
                            </div>

                          </div>
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
                                <div class="category text-center dark-blue-bg">
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
                                <div class="category text-center dark-blue-bg">
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
                                <div class="category text-center dark-blue-bg">
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
                                <div class="category text-center dark-blue-bg">
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
                                <div class="category text-center dark-blue-bg">
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
                                <div class="category text-center dark-blue-bg">
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
                                <div class="category text-center dark-blue-bg">
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
                        <h4 class="manage-head ps-3">Participation by Management</h4>
                        @include('pdf.managementparticipation')
                      </div>
                    </div>
                    <!-- Social -->
                    <div class="col-md-9 left">
                    <div class="d-flex justify-content-between">
                          <h4 class="">Performance by Management <span class="fw-light">(in percent correct)</span></h4>
                          <div class="graph-label-list">
                              <ul>
                                <li>
                                  <div class="graph-label">
                                      <span class="graph-label-box legend-color-math"></span>
                                      <p class="graph-label-text">SC</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="graph-label">
                                      <span class="graph-label-box legend-color-sci"></span>
                                      <p class="graph-label-text">ST</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="graph-label">
                                      <span class="graph-label-box legend-color-evs"></span>
                                      <p class="graph-label-text">OBC</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="graph-label">
                                      <span class="graph-label-box legend-color-lang"></span>
                                      <p class="graph-label-text">General</p>
                                  </div>
                                </li>
                              </ul>
                          </div>

                        </div>
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg mx-4">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
                              <div class="category text-center dark-blue-bg">
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
            <div class="reportview-container mb-0">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>District Report Card ( {{isset($districtVal->state_name)?ucfirst(strtolower($districtVal->state_name)):'-'}} - {{isset($districtVal->district_name)?ucfirst(strtolower($districtVal->district_name)):'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg pb-0">
                  <div class="row pb-100">
                    <div class="col-md-12">
                      <h4 class="performance-heading heading-black-bold">
                        Performance of the District in Learning Outcomes (LOs)
                      </h4>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div class="table-responsive">
                        <table class="table table-bordered align-middle text-center performance-table mb-0">
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
                            @php $l=1;@endphp
                            @foreach($districtLOData as $languageLO)
                            @if($districtParticipation->grade==$languageLO->grade)
                            @if($languageLO->language=='language')
                            @if($l==1)
                            <tr class="bg-bluegreen text-white">
                              <td class="text" colspan="5">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="" style="width: 35px;height: 30px;" />
                                Language
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($l)%2==0)?'"card-light-pink"':''}}>
                              <th class="bg-bluegreen" scope="row">{{isset($languageLO->subject_code)?$languageLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($languageLO->question!=''&&$languageLO->question!=0)?$languageLO->question:'-'}}
                              </td>
                              <td>
                              @if(isset($languageLO->avg) && $languageLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($languageLO->avg)?round($languageLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($languageLO->avg)?round($languageLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($languageLO->state_avg) && $languageLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($languageLO->state_avg)?round($languageLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($languageLO->state_avg)?round($languageLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($languageLO->national_avg) && $languageLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($languageLO->national_avg)?round($languageLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($languageLO->national_avg)?round($languageLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $l++;@endphp
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
                            <tr class="bg-bluegreen text-white">
                              <td class="text" colspan="5">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/mil-icon.png" alt="" />
                                MIL
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($mil)%2==0)?'"light-yellow-bg"':''}}>
                              <th class="bg-bluegreen" scope="row">{{isset($milLO->subject_code)?$milLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/mil1011.png" alt="" class="" style="width: 48rem;">
                              </td>
                              <td>
                              @if(isset($milLO->avg) && $milLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($milLO->avg)?round($milLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($milLO->avg)?round($milLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($milLO->state_avg) && $milLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($milLO->state_avg)?round($milLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($milLO->state_avg)?round($milLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($milLO->national_avg) && $milLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($milLO->national_avg)?round($milLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($milLO->national_avg)?round($milLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $mil++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif

                            @if(count($districtLOData)>0)
                            @php $m=1;@endphp
                            @foreach($districtLOData as $mathLO)
                            @if($districtParticipation->grade==$mathLO->grade)
                            @if($mathLO->language=='math')
                            @if($m==1)
                            <tr class="bg-bluegreen text-white">
                              <td class="text" colspan="5">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="" />
                                Mathematics
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($m)%2==0)?'"card-light-pink"':''}}>
                              <th class="bg-bluegreen" scope="row">{{isset($mathLO->subject_code)?$mathLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($mathLO->question!=''&&$mathLO->question!=0)?$mathLO->question:'-'}}
                              </td>
                              <td>
                              @if(isset($mathLO->avg) && $mathLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($mathLO->avg)?round($mathLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($mathLO->avg)?round($mathLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($mathLO->state_avg) && $mathLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($mathLO->state_avg)?round($mathLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($mathLO->state_avg)?round($mathLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($mathLO->national_avg) && $mathLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($mathLO->national_avg)?round($mathLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($mathLO->national_avg)?round($mathLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $m++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif

                            @if(count($districtLOData)>0)
                            @php $e=1; $evsArr = array();@endphp
                            @if($districtParticipation->grade==5)
                              @php
                                $evsArr = array();
                              @endphp
                            @endif
                            @foreach($districtLOData as $evsLO)
                            @if($districtParticipation->grade==$evsLO->grade)
                            @if($evsLO->language=='evs')
                            @if($e==9 && $districtParticipation->grade==5)
                              @php
                                  break;
                              @endphp
                            @endif
                            @if($districtParticipation->grade==5)
                              @php
                                array_push($evsArr,$evsLO->subject_code);
                              @endphp
                            @endif
                            @if($e==1)
                            <tr class="bg-bluegreen text-white">
                              <td class="text" colspan="5">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="" />
                                EVS
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($e)%2==0)?'"light-yellow-bg"':''}}>
                              <th class="bg-bluegreen" scope="row">{{isset($evsLO->subject_code)?$evsLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($evsLO->question!=''&&$evsLO->question!=0)?$evsLO->question:'-'}}
                              </td>
                              <td>
                              @if(isset($evsLO->avg) && $evsLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($evsLO->avg)?round($evsLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($evsLO->avg)?round($evsLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($evsLO->state_avg) && $evsLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($evsLO->state_avg)?round($evsLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($evsLO->state_avg)?round($evsLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($evsLO->national_avg) && $evsLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($evsLO->national_avg)?round($evsLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($evsLO->national_avg)?round($evsLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $e++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif
                            @if(count($districtLOData)>0)
                            @php $s=1; $sciArr = array();@endphp
                            @if($districtParticipation->grade==8)
                              @php
                                $sciArr = array();
                              @endphp
                            @endif
                            @foreach($districtLOData as $sciLO)
                            @if($districtParticipation->grade==$sciLO->grade)
                            @if($sciLO->language=='sci')
                            @if($s==9 && $districtParticipation->grade==8)
                              @php
                                  break;
                              @endphp
                            @endif
                            @if($districtParticipation->grade==8)
                              @php
                                array_push($sciArr,$sciLO->subject_code);
                              @endphp
                            @endif
                            @if($s==1)
                            <tr class="bg-bluegreen text-white">
                              <td class="text" colspan="5">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="" />
                                Science
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($s)%2==0)?'"light-yellow-bg"':''}}>
                                <th class="bg-bluegreen" scope="row">{{isset($sciLO->subject_code)?$sciLO->subject_code:'-'}}</th>
                                <td class="text-sm-start">
                                  {{($sciLO->question!=''&&$sciLO->question!=0)?$sciLO->question:'-'}}
                                </td>
                                <td>
                              @if(isset($sciLO->avg) && $sciLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sciLO->avg)?round($sciLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sciLO->avg)?round($sciLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($sciLO->state_avg) && $sciLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sciLO->state_avg)?round($sciLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sciLO->state_avg)?round($sciLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($sciLO->national_avg) && $sciLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sciLO->national_avg)?round($sciLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sciLO->national_avg)?round($sciLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $s++;@endphp
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
                            <tr class="bg-bluegreen text-white">
                              <td class="text" colspan="5">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/english-icon.png" alt="" />
                                English
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($eng)%2==0)?'"light-yellow-bg"':''}}>
                              <th class="bg-bluegreen" scope="row">{{isset($engLO->subject_code)?$engLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($engLO->question!=''&&$engLO->question!=0)?$engLO->question:'-'}}
                              </td>
                              <td>
                              @if(isset($engLO->avg) && $engLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($engLO->avg)?round($engLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($engLO->avg)?round($engLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($engLO->state_avg) && $engLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($engLO->state_avg)?round($engLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($engLO->state_avg)?round($engLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($engLO->national_avg) && $engLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($engLO->national_avg)?round($engLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($engLO->national_avg)?round($engLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $eng++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif
                          </tbody>
                        </table>

                      </div>
                      <div class="warn-txt d-flex align-items-center">
                        <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="50" height="50">
                        <h1 class="warn-txt">Average performance less than 50 percent</h1>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="report-footer-wrap pg4-cls-{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}">
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
  <!-- temporary -->
  @if($districtParticipation->grade==8 || $districtParticipation->grade==10 || (count($evsArr)>0 &&  $districtParticipation->grade==5)|| (count($sciArr)>0 &&  $districtParticipation->grade==8))
  <div class="page">
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <!-- distict performance section  -->
          <div class="col-md-12">
            <div class="reportview-container mb-0">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>District Report Card ( {{isset($districtVal->state_name)?ucfirst(strtolower($districtVal->state_name)):'-'}} - {{isset($districtVal->district_name)?ucfirst(strtolower($districtVal->district_name)):'-'}} )</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg pb-0">
                  <div class="row pb-100">
                    <div class="col-md-12">
                      <h4 class="performance-heading heading-black-bold">
                        Performance of the District in Learning Outcomes (LOs)
                      </h4>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div class="table-responsive">
                        @if($districtParticipation->grade==8 || $districtParticipation->grade==10 || (count($evsArr)>0 &&  $districtParticipation->grade==5) || (count($sciArr)>0 &&  $districtParticipation->grade==8))
                        <!-- <div class="page-mid-break"></div> -->
                        <table class="table table-bordered align-middle text-center performance-table mb-0">
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
                            @php $e=1; @endphp
                            @foreach($districtLOData as $evsLO)
                            @if($districtParticipation->grade==$evsLO->grade && !in_array($evsLO->subject_code,$evsArr))
                            @if($evsLO->language=='evs')
                            <tr class={{(($e)%2==0)?'"light-yellow-bg"':''}}>
                              <th class="bg-bluegreen" scope="row">{{isset($evsLO->subject_code)?$evsLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($evsLO->question!=''&&$evsLO->question!=0)?$evsLO->question:'-'}}
                              </td>
                              <td>
                              @if(isset($evsLO->avg) && $evsLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($evsLO->avg)?round($evsLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($evsLO->avg)?round($evsLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($evsLO->state_avg) && $evsLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($evsLO->state_avg)?round($evsLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($evsLO->state_avg)?round($evsLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($evsLO->national_avg) && $evsLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($evsLO->national_avg)?round($evsLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($evsLO->national_avg)?round($evsLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $e++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif

                            @if(count($districtLOData)>0)
                            @php $s=1;@endphp
                            @foreach($districtLOData as $sciLO)
                            @if(in_array($sciLO->subject_code,$sciArr))
                            @else
                            @if($districtParticipation->grade==8 && $districtParticipation->grade==$sciLO->grade)
                            
                            @if($sciLO->language=='sci')
                            <tr class={{(($s)%2==0)?'"light-yellow-bg"':''}}>
                                <th class="bg-bluegreen" scope="row">{{isset($sciLO->subject_code)?$sciLO->subject_code:'-'}}</th>
                                <td class="text-sm-start">
                                  {{($sciLO->question!=''&&$sciLO->question!=0)?$sciLO->question:'-'}}
                                </td>
                                <td>
                              @if(isset($sciLO->avg) && $sciLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sciLO->avg)?round($sciLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sciLO->avg)?round($sciLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($sciLO->state_avg) && $sciLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sciLO->state_avg)?round($sciLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sciLO->state_avg)?round($sciLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($sciLO->national_avg) && $sciLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sciLO->national_avg)?round($sciLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sciLO->national_avg)?round($sciLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $s++;@endphp
                            @endif
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
                            <tr class="bg-bluegreen text-white">
                              <td class="text" colspan="5">
                                <img src="https://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="" />
                                Social Science
                              </td>
                            </tr>
                            @endif
                            <tr class={{(($sst)%2==0)?'"light-yellow-bg"':''}}>
                              <th class="bg-bluegreen" scope="row">{{isset($sstLO->subject_code)?$sstLO->subject_code:'-'}}</th>
                              <td class="text-sm-start">
                                {{($sstLO->question!=''&&$sstLO->question!=0)?$sstLO->question:'-'}}
                              </td>
                              <td>
                              @if(isset($sstLO->avg) && $sstLO->avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sstLO->avg)?round($sstLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sstLO->avg)?round($sstLO->avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                              @if(isset($sstLO->state_avg) && $sstLO->state_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sstLO->state_avg)?round($sstLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sstLO->state_avg)?round($sstLO->state_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                              <td>
                                @if(isset($sstLO->national_avg) && $sstLO->national_avg<50)
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no fw-bold">{{isset($sstLO->national_avg)?round($sstLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                    <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="25" height="25">
                                  </div>
                                </div>
                                @else
                                <div class="d-flex warning-table justify-content-center">
                                  <div class="no">{{isset($sstLO->national_avg)?round($sstLO->national_avg):'-'}}</div>
                                  <div class="warn-img">
                                  </div>
                                </div>
                                @endif
                              </td>
                            </tr>
                            @php $sst++;@endphp
                            @endif
                            @endif
                            @endforeach
                            @endif
                          </tbody>
                        </table>
                        @endif
                      </div>
                      <div class="warn-txt d-flex align-items-center">
                        <img src="https://nas21.inroad.in/report-pdf/assets/images/warning-icon.png" alt="warning" width="50" height="50">
                        <h1 class="warn-txt">Average performance less than 50 percent</h1>
                      </div>
                    </div>
                  </div>
                </div>
                @if($districtParticipation->grade==8 || $districtParticipation->grade==10 || (count($evsArr)>0 &&  $districtParticipation->grade==5)|| (count($sciArr)>0 &&  $districtParticipation->grade==8))
                <div class="report-footer-wrap pg4-1-cls-{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}">
                  <div class="reportview-footer">
                    <span class="page-no">@php $pageNo = $pageNo+1; echo $pageNo; @endphp</span>
                  </div>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endif
  <!-- Page 5 -->
  <div class="page">
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <!-- children testimony -->
          <div class="col-md-12">
            <div class="reportview-container mb-0">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>District Report Card ( {{isset($districtVal->state_name)?ucfirst(strtolower($districtVal->state_name)):'-'}} - {{isset($districtVal->district_name)?ucfirst(strtolower($districtVal->district_name)):'-'}} )</h2>
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
                        <h2 class="text-dark-blue pt-2">{{isset($pqfeedback->avg)?round($pqfeedback->avg):0}}%</h2>
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
                              <h2 class="text-green">{{isset($tqfeedback->avg)?round($tqfeedback->avg):0}}%</h2>
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
                            <h2 class="title">{{isset($tqfeedback2->avg)?round($tqfeedback2->avg):0}}%</h2>
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
                              <h2 class="text-dark-pink">{{isset($sqfeedback->avg)?round($sqfeedback->avg):0}}%</h2>
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
                <div class="report-footer-wrap pg5-cls-10">
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