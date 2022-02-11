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
  </head>
  <body class="p-0">


    <section class="reportview-wrap ptb-30 bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-content-wrap">
                <div class="reportview-content dark-blue-bg">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="imgwrap text-start">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/ncert-view.jpg"
                          alt="img"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="imgwrap text-center">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/ministry-view.jpg"
                          alt="img"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="imgwrap text-end">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/cbsc-view.png"
                          alt="img"
                          class="img-fluid"
                        />
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
                        <div class="rv-ranking-wrap">
                          <h3 class="title-black-xl ptb-15">
                            District Ranking in NAS
                          </h3>
                          <div
                            class="row align-items-center justify-content-center"
                          >
                            <span class="rv-ranking-box col-md-2">6</span>
                            <span class="rv-ranking-box col-md-2">7</span>
                            <span class="rv-ranking-box col-md-2">1</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="imgwrap text-center">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/district-map.jpg"
                          alt="img"
                          class="img-fluid white-bg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-content dark-blue-bg">
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>
                          Kadapa district is one of the thirteen districts in
                          the Indian state of AP. It is also one of the four
                          districts in the Rayalaseema region of the state.
                        </h2>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Total District Area</h3>
                          <p class="total-no">{{isset($districtVal->total_district_area)?$districtVal->total_district_area:'0'}} sq. km.</p>
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
                  <div class="infotab-content-wrap">
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
                  </div>
                  <div class="infotab-content-wrap">
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
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="http://nas21.inroad.in/report-pdf/assets/js/jquery-3.6.0.min.js"></script>
        <script src="http://nas21.inroad.in/report-pdf/assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>

          @if(count($districtParticipationData)>0)
          @foreach($districtParticipationData as $districtParticipation)
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>{{isset($districtVal->district_name)?$districtVal->district_name:'-'}} Report Card</h2>
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
                            <img
                              src="http://nas21.inroad.in/report-pdf/assets/images/teacher.jpg"
                              class="teacher-img"
                              alt="teacher"
                            />
                          </div>
                          <h4 class="heading-black-bold">Teachers</h4>
                          <span>{{isset($districtParticipation->total_teacher)?$districtParticipation->total_teacher:'0'}}</span>
                        </div>
                        <div class="col-md-4">
                          <div class="img-tile dark-blue-bg mb-3">
                            <img
                              src="http://nas21.inroad.in/report-pdf/assets/images/students.jpg"
                              class="student-img"
                              alt="students"
                            />
                          </div>
                          <h4 class="heading-black-bold">Students</h4>
                          <span>{{isset($districtParticipation->total_student)?$districtParticipation->total_student:'0'}}</span>
                        </div>
                      </div>
                    </div>
                    <!-- graph section -->
                    <div class="col-md-12 mt-5">
                      <h3 class="text-center heading-38 heading-black-bold mt-4">
                        Average Performance of Students
                      </h3>
                      <div class="row graph-mark">
                        @if(count($districtParticipation['DistrictPerformance'])>0)
                          @foreach($districtParticipation['DistrictPerformance'] as $avgPerformance)
                            @if($districtParticipation->grade==$avgPerformance->grade)
                            @php 
                              $dataArr = json_decode($avgPerformance->data,true);
                              if($avgPerformance->grade==3 || $avgPerformance->grade==5)
                              {
                                $fcol = 3;
                                $lcol = 2;
                              }
                              if($avgPerformance->grade==8)
                              {
                                $fcol = 2;
                                $lcol = 2;
                              }
                              if($avgPerformance->grade==10)
                              {
                                $fcol = 1;
                                $lcol = 2;
                              }
                            @endphp
                            <div class="col-md-{{$fcol}}"></div>
                            @if($avgPerformance->grade==3 || $avgPerformance->grade==5 ||$avgPerformance->grade==8)
                            <div class="col-md-{{$lcol}}">
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
                            <div class="col-md-{{$lcol}}">
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
                            <div class="col-md-{{$lcol}}">
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
                            <div class="col-md-{{$lcol}}">
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
                            <div class="col-md-{{$lcol}}">
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
                            <div class="col-md-{{$lcol}}">
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
                            <div class="col-md-2">
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
                            <div class="col-md-{{$fcol}}"></div>
                            @include('pdf.firstgraph')
                            @endif
                          @endforeach
                        @endif
                      </div>
                    </div>
                    <!-- student percentage -->
                    <div class="col-md-12 my-5">
                      <h3 class="text-center heading-black-bold heading-30 mt-4">
                        Percentage of Students in Performance Level
                      </h3>
                      <div class="row mt-4">
                        @if(count($districtParticipation['DistrictPerformance'])>0)
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
                <div class="reportview-footer">
                  <span class="page-no">2</span>
                </div>
              </div>
            </div>
          </div>
          <!-- section  -->
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>{{isset($districtVal->district_name)?$districtVal->district_name:'-'}} Report Card</h2>
                  <span class="class">CLASS {{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}</span>
                </div>
                <div class="reportview-class-content white-bg p-4">
                  <div class="row mt-4">
                    <!-- Gender -->
                    <div class="col-md-8 left mb-4">
                      <h4 class="">Performance by Gender</h4>
                      <div class="d-flex flex-wrap mb-60">
                        <!-- edited -->
                        @if(count($districtParticipation['DistrictPerformance'])>0)
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
                                      <div class="category text-center card-pink mx-4">
                                        <span class="text-white text-17"
                                          >Mathematics</span
                                        >
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
                                      <div class="category text-center card-blue mx-4">
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
                                      <div
                                        class="category text-center card-yellow mx-4"
                                      >
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
                                      <div class="category text-center card-sagegreen mx-4">
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
                                      <div class="category text-center card-green mx-4">
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
                                      <div class="category text-center card-red mx-4">
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
                                      <div class="category text-center card-purple mx-4">
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
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-4">Participation by Gender</h4>
                        <!-- images changed -->
                        @include('pdf.genderparticipation')
                      </div>
                    </div>
                    <!-- Location -->
                    <div class="col-md-8 left mb-4">
                      <h4 class="">Performance by Location</h4>
                      <div class="d-flex flex-wrap mb-60">
                        @if(count($districtParticipation['DistrictPerformance'])>0)
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
                                      <div class="category text-center card-pink mx-4">
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
                                      <div class="category text-center card-blue mx-4">
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
                                      <div
                                        class="category text-center card-yellow mx-4"
                                      >
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
                                      <div class="category text-center card-sagegreen mx-4">
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
                                      <div class="category text-center card-green mx-4">
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
                                      <div class="category text-center card-red mx-4">
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
                                      <div class="category text-center card-purple mx-4">
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
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-5">Participation by Location</h4>
                        @include('pdf.locationparticipation')
                      </div>
                    </div>
                    <!-- Management -->
                    <div class="col-md-8 left mb-4">
                      
                      <h4 class="">Performance by Management</h4>
                      <div class="d-flex flex-wrap mb-60">
                        @if(count($districtParticipation['DistrictPerformance'])>0)
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
                                      <div class="category text-center card-pink mx-4">
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
                                      <div class="category text-center card-blue mx-4">
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
                                      <div
                                        class="category text-center card-yellow mx-4"
                                      >
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
                                      <div
                                        class="category text-center card-sagegreen mx-4"
                                      >
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
                                      <div class="category text-center card-red mx-4">
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
                                      <div
                                        class="category text-center card-green mx-4"
                                      >
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
                                      <div class="category text-center card-purple mx-4">
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
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-30" >
                        <h4 class="mb-3">Participation by Management</h4>
                        @include('pdf.managementparticipation')
                      </div>
                    </div>
                    <!-- Social -->
                    <div class="col-md-8 left mb-4">
                      <h4 class="">Performance by Social Group</h4>
                      <div class="d-flex flex-wrap mb-60">
                        @if(count($districtParticipation['DistrictPerformance'])>0)
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
                                      <div class="category text-center card-pink mx-4">
                                        <span class="text-white text-17"
                                          >Mathematics</span
                                        >
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
                                      <div class="category text-center card-blue mx-4">
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
                                      <div
                                        class="category text-center card-yellow mx-4"
                                      >
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
                                      <div class="category text-center card-sagegreen mx-4">
                                        <span class="text-white text-17"
                                          >Science</span
                                        >
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
                                      <div class="category text-center card-red mx-4">
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
                                      <div class="category text-center card-green mx-4">
                                        <span class="text-white text-17"
                                          >Social Science</span
                                        >
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
                                    <div class="category text-center card-purple mx-4">
                                      <span class="text-white text-17"
                                        >English</span
                                      >
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
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-5">Participation by Social Group</h4>
                        @include('pdf.socialgroupparticipation')
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-footer">
                  <span class="page-no">3</span>
                </div>
              </div>
            </div>
          </div>
          <!-- distict performance section  -->
         <!--  <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Kadapa Report Card</h2>
                  <span class="class">CLASS 3</span>
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
                        <table
                          class="table table-bordered align-middle text-center performance-table"
                        >
                          <thead>
                            <tr class="dark-blue-bg text-white">
                              <th scope="col">LO Code</th>
                              <th scope="col" class="">
                                Learning Outcomes for Class 3
                              </th>
                              <th scope="col">District Average Performance</th>
                              <th scope="col">State Average Performance</th>
                              <th scope="col">National Average Performance</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="card-blue text-white">
                              <td class="text" colspan="5">
                                <img
                                  src="http://nas21.inroad.in/report-pdf/assets/images/Icon-awesome-globe.svg"
                                  alt=""
                                />
                                Language
                              </td>
                            </tr>
                            <tr class="">
                              <th scope="row">L304</th>
                              <td class="text-sm-start">
                                Reads small texts with comprehension i.e.,
                                identifies main ideas, details, sequence and
                                draws conclusions
                              </td>
                              <td>82</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-blue">
                              <th scope="row">L312</th>
                              <td class="text-sm-start">
                                Reads printed scripts on the classroom walls:
                                poems, posters, charts etc
                              </td>
                              <td>83</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-pink text-white">
                              <td class="text" colspan="5">
                                <img
                                  src="http://nas21.inroad.in/report-pdf/assets/images/operataion-icon.svg"
                                  alt=""
                                />
                                Mathematics
                              </td>
                            </tr>
                            <tr class="">
                              <th scope="row">M301</th>
                              <td class="text-sm-start">
                                Reads and writes numbers up to 999 using place
                                value
                              </td>
                              <td>84</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M302</th>
                              <td class="text-sm-start">
                                Compares numbers up to 999 based on their place
                                values
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M303</th>
                              <td class="text-sm-start">
                                Solves simple daily life problems using addition
                                and subtraction of three digit numbers with and
                                without regrouping
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M304</th>
                              <td class="text-sm-start">
                                Constructs and uses the multiplication facts (up
                                till 10) in daily life situations
                              </td>
                              <td>77</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M305</th>
                              <td class="text-sm-start">
                                Analyses and applies an appropriate number
                                operation in the situation/ context
                              </td>
                              <td>84</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M306</th>
                              <td class="text-sm-start">
                                Explains the meaning of division facts by equal
                                grouping/sharing and finds it by repeated
                                subtraction
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M309</th>
                              <td class="text-sm-start">
                                Identifies and makes 2D-shapes by paper folding,
                                paper cutting on the dot grid, using straight
                                lines etc.
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M311</th>
                              <td class="text-sm-start">
                                Fills a given region leaving no gaps using a
                                tile of a given shape
                              </td>
                              <td>77</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M312</th>
                              <td class="text-sm-start">
                                Estimates and measures length and distance using
                                standard units like centimetres or metres &
                                identifies relationships
                              </td>
                              <td>49</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M317</th>
                              <td class="text-sm-start">
                                Reads the time correctly to the hour using a
                                clock/watch
                              </td>
                              <td>83</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M318</th>
                              <td class="text-sm-start">
                                Extends patterns in simple shapes and numbers
                              </td>
                              <td>75</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M319</th>
                              <td class="text-sm-start">
                                Records data using tally marks, represents
                                pictorially and draws conclusions
                              </td>
                              <td>89</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-yellow text-white">
                              <td class="text" colspan="5">
                                <img
                                  src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon-small.svg"
                                  alt=""
                                />
                                EVS
                              </td>
                            </tr>
                            <tr class="">
                              <th scope="row">E302</th>
                              <td class="text-sm-start">
                                Identifies simple features (e.g. movement, at
                                places found/ kept, eating habits, sounds) of
                                animals and birds in the immediate surroundings.
                              </td>
                              <td>70</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E303</th>
                              <td class="text-sm-start">
                                Identifies relationships with and among family
                                members
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E304</th>
                              <td class="text-sm-start">
                                Identifies objects, signs (vessels, stoves,
                                transport, means of communication, transport,
                                signboards), places (types of houses/shelters,
                                bus stand, petrol pump) activities (works people
                                do, cooking processes) at
                                home/school/neighbourhood
                              </td>
                              <td>68</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E305</th>
                              <td class="text-sm-start">
                                Describes need of food for people of different
                                age groups, animals/birds, availability of food
                                and water and use of water at home and
                                surroundings
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E307</th>
                              <td class="text-sm-start">
                                Groups objects, birds, animals, features,
                                activities according to differences/similarities
                                using different senses. (e.g. appearance/place
                                of living/ food/ movement/ likes-dislikes/ any
                                other features)
                              </td>
                              <td>85</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E309</th>
                              <td class="text-sm-start">
                                Identifies directions, location of
                                objects/places in simple maps using
                                signs/symbols/verbally
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E310</th>
                              <td class="text-sm-start">
                                Guesses properties, estimates quantities of
                                materials/activities in daily life and verifies
                                using symbols/ non-standard units.
                              </td>
                              <td>85</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E311</th>
                              <td class="text-sm-start">
                                Records observations, experiences, information
                                on objects/activities/places visited in
                                different ways and predicts patterns etc.
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E313</th>
                              <td class="text-sm-start">
                                Observes rules in games (local. indoor, outdoor)
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E314</th>
                              <td class="text-sm-start">
                                Voices opinion on good/bad touch , stereotypes
                                for tasks/play/food in family w.r.t gender,
                                misuse/ wastage of food and water in family and
                                school.
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-footer">
                  <span class="page-no">4</span>
                </div>
              </div>
            </div>
          </div> -->
          <!-- children testimony -->
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Kadapa Report Card</h2>
                  <span class="class">CLASS 3</span>
                </div>
                <div
                  class="reportview-class-content light-pink children-testimony"
                >
                  <div class="row pt-3 pb-30">
                    <div class="col-md-12">
                      <h4 class="heading-30 heading-black-bold text-center p-5">
                        What children say about schools?
                      </h4>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">97%</h2>
                        <p class="total-no">students like to go to school</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">78%</h2>
                        <p class="total-no">
                          students use same language at home as medium of
                          instruction in the class
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">85%</h2>
                        <p class="total-no">
                          students could understand, what teachers teach in the
                          class
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">89%</h2>
                        <p class="total-no">
                          students go out and play during games period
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">23%</h2>
                        <p class="total-no">
                          students have access to any digital device of class 3,
                          5 and 8 avail computer in the school
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">82%</h2>
                        <p class="total-no">
                          students of class 10 have laboratory facility in
                          school
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">60%</h2>
                        <p class="total-no">
                          students have internet connectivity at home
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">20%</h2>
                        <p class="total-no">
                          children get parental support for their educational
                          achievement
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="teacher-sec">
                  <div class="row">
                    <!-- left sec -->
                    <div class="col-md-8 light-green-bg teacher-left px-5 pt-3 pb-5">
                      <h4 class="heading-black-bold heading-30 text-center p-4">
                        What teachers responded about school?
                      </h4>
                      <div class="row justify-content-center pt-5">
                        <div class="col-md-6">
                          <div class='octagonWrap'>
                            <div class="octagon-card o-color-white text-center"> <!-- .infotab-content ----class -->
                              <h2 class="text-green">95%</h2>
                              <p class="total-no">
                                teachers have adequate instructional material and
                                supplies.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row row-margin">
                        <div class="col-md-6">
                          <div
                            class="octagon-card o-color-light-green text-white text-center"
                          >
                            <h2 class="title">90%</h2>
                            <p class="total-no">
                              teachers have adequate work space.
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="octagon-card o-color-white text-center">
                            <h2 class="text-green">17%</h2>
                            <p class="total-no">
                              teachers say that they are overloaded with the
                              work.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center row-margin">
                        <div class="col-md-6">
                          <div
                            class="octagon-card o-color-green text-white text-center"
                          >
                            <h2 class="title">25%</h2>
                            <p class="total-no">
                              teachers have responded that the school building
                              need significant repair.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row row-margin">
                        <div class="col-md-6">
                          <div class="octagon-card o-color-white text-center">
                            <h2 class="text-green">12%</h2>
                            <p class="total-no">
                              teachers have responded that lack of Drinking
                              water facilities in school
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div
                            class="octagon-card o-color-dark-green text-white text-center"
                          >
                            <h2 class="title">22%</h2>
                            <p class="total-no">
                              teachers have responded that inadequate toilet
                              facilities in school.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center row-margin">
                        <div class="col-md-6">
                          <div class="octagon-card o-color-white text-center">
                            <h2 class="text-green">38%</h2>
                            <p class="total-no">
                              teachers participated in professional development
                              program
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- right sec -->
                    <div class="col-md-4 light-blue-bg pt-3 teacher-right">
                      <h4 class="heading-black-bold  heading-30 text-center p-4">
                        What children say about schools?
                      </h4>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">64%</h2>
                              <p class="total-no">
                                of schools have adequate qualified teaching
                                staff
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">54%</h2>
                              <p class="total-no">
                                of schools have adequate supporting staff.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">40%</h2>
                              <p class="total-no">
                                of schools have adequate audio visual resources.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">63%</h2>
                              <p class="total-no">
                                of schools have adequate library resources.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">86%</h2>
                              <p class="total-no">
                                of schools participate in sports activities.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-footer">
                  <span class="page-no">5</span>
                </div>
              </div>
            </div>
          </div>

    <script>
      // Donut Chart
      Highcharts.chart("dc3-managementPieGraph{{isset($districtParticipation->grade)?$districtParticipation->grade:'0'}}", {
        chart: {
          type: "pie",
        },
        title: {
          text: "",
        },
        tooltip: {
          headerFormat: "",
          pointFormat:
            '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            "{point.y}%",
        },
        plotOptions: {
          pie: {
            innerSize: 100,
            depth: 45,
            allowPointSelect: true,
            cursor: "pointer",
            dataLabels: {
              enabled: true,
              format: "{point.percentage:.0f} %",
              distance: -50,
              filter: {
                property: "percentage",
                operator: ">",
                value: 4,
              },
            },
            showInLegend: true,
          },
        },
        series: [
          {
            minPointSize: 10,
            innerSize: "40%",
            zMin: 0,
            name: "Management",
            data: [
              {
                name: "Central Govt.",
                y: {{($districtParticipation->central_govt_school!=0)?round($districtParticipation->central_govt_school):0}},
                z: 100,
                color: "#75A9D9",
              },
              {
                name: "Govt.",
                y: {{($districtParticipation->govt_school!=0)?round($districtParticipation->govt_school):0}},
                z: 100,
                color: "#E9769F",
              },
              {
                name: "Govt. Aided",
                y: {{($districtParticipation->govt_aided_school!=0)?round($districtParticipation->govt_aided_school):0}},
                z: 100,
                color: "#CAC55F",
              },
              {
                name: "Private",
                y: {{($districtParticipation->private_school!=0)?round($districtParticipation->private_school):0}},
                z: 100,
                color: "#4CAF50",
              },
            ],
          },
        ],
      });
    </script>

          @endforeach
          @endif
        </div>
      </div>
    </section>
  </body>
</html>