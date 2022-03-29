<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://nas21.inroad.in/report-pdf/assets/scss/bootstrap.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- Material Icons -->
    <link rel="stylesheet" href="https://nas21.inroad.in/report-pdf/assets/scss/material-icons.css" />
    <link rel="stylesheet" href="https://nas21.inroad.in/report-pdf/assets/scss/style.css" />
    <link rel="stylesheet" href="https://nas21.inroad.in/report-pdf/assets/scss/pdf.css" />
    <title>NAS | State PDF</title>
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
    <!-- Highcharts JS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://nas21.inroad.in/report-pdf/assets/js/custom.js"></script>
    <!-- <style type="text/css">
      .progress-percent {
        font-size: 120px;
        width:1em;
        height:1em;
        position: relative;
        background: #eee;
        border-radius:50%;
        overflow:hidden;
        display:inline-block;
        margin:20px;
      }
      .progress-inner {
        position: absolute;
        left: 0;
        top: 0;
        width: 1em;
        height: 1em;
        clip:rect(0 1em 1em .5em);
      }
      .progress-round {
        position: absolute;
        left: 0;
        top: 0;
        width: 1em;
        height: 1em;
        background: #4527A0;
        clip:rect(0 1em 1em .5em);
        transform:rotate(180deg);
        transition:1.05s;
      }
      .percent_more .progress-inner {
        clip:rect(0 .5em 1em 0em);
      }
      .percent_more:after {
        position: absolute;
        left: .5em;
        top:0em;
        right: 0;
        bottom: 0;
        background: #4527A0;
        content:'';
      }
      .progress-inbox {
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        bottom: 10px;
        background: #fff;
        z-index:3;
        border-radius: 50%;
      }
      .percent_text {
        position: absolute;
        font-size: 30px;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        z-index: 3;
      }
    </style> -->
  </head>
  <body class="p-0 state-pdf">
    <!----------------------------------------- state report card starts ----------------------------------------->
    <!------------------------ page 1 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0">
                <div class="reportview-content-wrap state-heading">
                  <img
                    src="https://nas21.inroad.in/report-pdf/assets/images/state-header-img.png"
                    width="100%"
                    alt="cover-img"
                  />
                  <div class="heading-img-wrap text-white fw-bold">
                    <img src="https://nas21.inroad.in/report-pdf/assets/images/ministry-of-education.png" alt="" />
                  </div>
                  <div class="heading-wrap text-white fw-bold">
                    <h2>STATE REPORT CARD</h2>
                    <h1>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}}</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 1 ends ------------------------>
    <!------------------------ page 2-new starts ------------------------>
    <div class="page">
      <section class="reportview-wrap about-nas">
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
                      <div class="col-md-6 top-card">
                        <div class="bg-orange text-white text-center p-5">
                          <h4 class="fw-lighter">
                            The NAS is a system level assessment i.e. it summarizes students achievement at National, State/UT and District levels. NAS does not provide scores for individual student/school.
                          </h4>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="about-sec-card">
                          <div class="row">
                            <div class="col-md-6">
                              <p>
                                The National Achievement Survey (NAS) is a large scale survey of students’ learning, administered periodically, since 2001, at the elementary level and from 2015 at the secondary level, to monitor the health of the country’s education system. NAS is led by the NAS Cell, National Council of Educational Research and Training (NCERT), under the aegis of Department of School Education and Literacy (DoSEL), Ministry of Education (MoE). NAS conducted in November 2021 was administered in ….. Districts of ….. States and UTs.
                              </p>
                            </div>
                            <div class="col-md-6">
                              <p>
                                 Nearly 2.2 million students studying in 1,10,000 (approx) Government and Government aided schools were tested in the learning outcomes developed by the Council. To understand the contextual variables three questionnaires were developed; Pupil Questionnaire (PQ), School Questionnaire (SQ) and Teacher Questionnaire (TQ). The Teacher Questionnaire was administered on ….. teachers. This document reflects the findings of NAS 2021.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg2">
                    <div class="reportview-footer">
                      <span class="page-no">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 2-new ends ------------------------>

    <!------------------------ page 2 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0 highlights-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                  </div>
                  <div class="reportview-class-content white-bg">
                    <!-- content -->
                    <div class="row">
                      <!-- left sec -->
                      <div class="col-md-5 left-sec dark-blue-bg px-0">
                        <div class="white-bg pad-4">
                          <h2 class="text-center fw-bold mb-0">Highlights</h2>
                        </div>
                        <div class="text-white justify-content-center pad-4">
                          <h2 class="text-start fw-bold mb-30">
                            CERTAIN PARAMETERS OF THE NATION
                          </h2>
                          <div class="wrap">
                            <div class="img-wrapper">
                              <img
                                src="https://nas21.inroad.in/report-pdf/assets/images/area-icon.png"
                                alt="area-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($stateVal->total_district_area)&&$stateVal->total_district_area!=''?$stateVal->total_district_area:'0'}}</span>
                                km<sup>2</sup>
                              </h5>
                              <p>Area of the {{isset($stateVal->state_name)&&$stateVal->state_name!=''?$stateVal->state_name:'-'}}</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="https://nas21.inroad.in/report-pdf/assets/images/population-icon.png"
                                alt="population-icon"
                                width="58"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($stateVal->total_population)&&$stateVal->total_population!=''?$stateVal->total_population:'0'}}</span>
                              </h5>
                              <p>Population</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="https://nas21.inroad.in/report-pdf/assets/images/density-icon.png"
                                alt="density-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($stateVal->density_of_population)&&$stateVal->density_of_population!=''?$stateVal->density_of_population:'0'}}</span>
                                per km<sup>2</sup>
                              </h5>
                              <p>Density of population</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="https://nas21.inroad.in/report-pdf/assets/images/literacy-icon.png"
                                alt="area-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($stateVal->literacy_rate)&&$stateVal->literacy_rate!=''?$stateVal->literacy_rate:'0'}}%</span>
                              </h5>
                              <p>Literacy Rate</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="https://nas21.inroad.in/report-pdf/assets/images/child-sex-ratio-icon.png"
                                alt="area-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($stateVal->child_sex_ratio)&&$stateVal->child_sex_ratio!=''?$stateVal->child_sex_ratio:'0'}}</span>
                                girls per 1000 boys
                              </h5>
                              <p>Child sex ration (0-6 age)</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- right sec -->
                      <div class="col-md-7 right-sec p-5 bg-orange">
                        <div class="row text-white text-center pad-4">
                          <div class="col-md-12 mb-60 px-4">
                            <h2 class="fw-bold">
                              PARTICIPATION OF CLASS 3, 5, 8 AND 10
                            </h2>
                          </div>
                          <!-- schools -->
                          <div class="col-md-12 light-blue-bg report-card-head">
                            <h3 class="text-dark fw-bold text-center p-4">
                              NUMBER OF SCHOOLS
                            </h3>
                            <div class="container white-bg"></div>
                            <div class="img-tile dark-blue-bg align-items-center">
                              <img
                                class="school-img"
                                src="https://nas21.inroad.in/report-pdf/assets/images/school.png"
                                alt="school"
                              />
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-4">
                            <h1>{{(isset($stateVal->no_of_schools)&&$stateVal->no_of_schools!='')?$stateVal->no_of_schools:'0'}}</h1>
                          </div>
                          <!-- teachers -->
                          <div class="col-md-12 light-blue-bg report-card-head">
                            <h3 class="text-dark fw-bold text-center p-4">
                              NUMBER OF TEACHERS
                            </h3>
                            <div class="container white-bg"></div>
                            <div class="img-tile dark-blue-bg align-items-center">
                              <img
                                class="teacher-img"
                                src="https://nas21.inroad.in/report-pdf/assets/images/teacher.png"
                                alt="school"
                              />
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-4">
                            <h1>0</h1>
                          </div>
                          <!-- students -->
                          <div class="col-md-12 light-blue-bg report-card-head">
                            <h3 class="text-dark fw-bold text-center p-4">
                              NUMBER OF STUDENTS
                            </h3>
                            <div class="container white-bg"></div>
                            <div class="img-tile dark-blue-bg align-items-center">
                              <img
                                class="student-img"
                                src="https://nas21.inroad.in/report-pdf/assets/images/students.png"
                                alt="school"
                              />
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <h1>0</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg2">
                    <div class="reportview-footer">
                      <span class="page-no">2</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 2 ends ------------------------>

    @if(count($stateParticipationDataAll)>0)
    @php $pageNo = 1; @endphp
    @foreach($stateParticipationDataAll as $stateParticipationFinal)
    <!------------------------ class name starts ------------------------>
    <div class="page">
      <section class="reportview-wrap class-name">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0 highlights-container">
                <div class="reportview-class-wrap">
                  <div class="reportview-class-content bg-orange">
                    <div class="row align-items-center">
                      <div class="col-md-12">
                          <div class="text-white class-card pt-3 pb-2 text-center">
                            <h2 class="mb-0 fw-bold">NAS 2021</h2>
                            <h3 class="mb-0 fw-bold">RESULTS FOR</h3>
                            <h1 class="mb-0 fw-bold">Class {{isset($stateParticipationFinal->grade)?$stateParticipationFinal->grade:'0'}}</h1>
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
    <!------------------------ class name ends ------------------------>
    <!------------------------ page 3-new starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                    <!-- needed to be changed -->
                    <span class="class">CLASS {{isset($stateParticipationFinal->grade)?$stateParticipationFinal->grade:'0'}}</span>
                  </div>
                  <!-- content -->
                  <div
                    class="reportview-class-content p-0 performance-graph white-bg"
                  >
                    <div class="row">
                      <!-- graph section -->
                      <div class="col-md-12 mt-4 w-100">
                        <h3 class="text-center text-28 fw-bold">
                          Performance of Students in the Different Subject (in percent correct)
                        </h3>
                        <div class="container d-flex justify-content-center my-3">
                          <span class="legend-1"></span>
                          <p class="mb-0 me-4 text-15">State Average</p>
                          <span class="legend-2"></span>
                          <p class="mb-0 me-4 text-15">National Average</p>
                        </div>
                        <div class="graph-mark row justify-content-center">
                          <!-- class 3 -->
                          @if(isset($stateParticipationFinal['StatePerformance']) && count($stateParticipationFinal['StatePerformance'])>0)
                            @foreach($stateParticipationFinal['StatePerformance'] as $avgPerformance)
                              @if($avgPerformance['grade']==$stateParticipationFinal->grade)                            
                              @php 
                              $dataArr = json_decode($avgPerformance->data,true);
                              $grade = $avgPerformance->grade;
                              @endphp
                                  <div class="col-md-6 class-3-width">
                                    <div class="graph-wrap">
                                      <figure class="highcharts-figure">
                                        <div id="c{{$grade}}-average-graph"></div>
                                      </figure>
                                    </div>
                                  </div>
                                @include('statepdf.new_firstgraph')
                              @endif
                            @endforeach
                          @endif
                        </div>
                      </div>
                      <!-- table section -->
                      <div class="col-md-12 mt-5 mb-30">
                        <h3 class="text-center text-28 fw-bold">
                          Percentage of Students by Performance Level
                        </h3>
                        <table class="table table-bordered text-center text-white">
                          <thead>
                            <tr class="">
                              <th
                                class="light-grey"
                                scope="col"
                              >
                                
                              </th>
                              <th scope="col" class="card-red fw-normal">
                                BELOW BASIC
                              </th>
                              <th scope="col" class="bg-orange fw-normal">
                                BASIC
                              </th>
                              <th scope="col" class="card-green fw-normal">
                                PROFICIENT
                              </th>
                              <th scope="col" class="card-blue fw-normal">
                                ADVANCED
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(count($stateParticipationFinal['StatePerformance'])>0)
                              @foreach($stateParticipationFinal['StatePerformance'] as $statePerformanceLevel)
                                @if($statePerformanceLevel['grade']==$stateParticipationFinal->grade)
                                  @php 
                                    $dataArrLevel = json_decode($statePerformanceLevel->data,true);
                                    $grade = $statePerformanceLevel['grade'];
                                  @endphp
                                  @if(count($dataArrLevel)>0)
                                    @foreach($dataArrLevel as $performance_levelKey=>$performance_levelA)                            
                                      @if($grade==3 || $grade==5)
                                        @if($performance_levelKey=='evs'||$performance_levelKey=='math' || $performance_levelKey=='language')
                                        @php
                                          $subjectArrMangement = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                                        @endphp
                                          <tr class="light-orange">
                                            <th scope="row" class="dark-blue-bg fw-normal text-start">{{$subjectArrMangement[$performance_levelKey]}}
                                            </th>
                                            <td class="light-red text-dark">{{$performance_levelA['performance_level']['state']['below_basic']?round($performance_levelA['performance_level']['state']['below_basic']):'0'}}</td>
                                            <td class="light-orange text-dark">{{$performance_levelA['performance_level']['state']['basic']?round($performance_levelA['performance_level']['state']['basic']):'0'}}</td>
                                            <td class="light-green text-dark">{{$performance_levelA['performance_level']['state']['proficient']?round($performance_levelA['performance_level']['state']['proficient']):'0'}}</td>
                                            <td class="light-blue text-dark">{{$performance_levelA['performance_level']['state']['advanced']?round($performance_levelA['performance_level']['state']['advanced']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==8)
                                        @if($performance_levelKey=='sst'|| $performance_levelKey=='sci'||$performance_levelKey=='math' || $performance_levelKey=='language')
                                          <tr class="light-orange">
                                            <th scope="row" class="dark-blue-bg fw-normal text-start">{{$subjectArrMangement[$performance_levelKey]}}
                                            </th>
                                            <td class="light-red text-dark">{{$performance_levelA['performance_level']['state']['below_basic']?round($performance_levelA['performance_level']['state']['below_basic']):'0'}}</td>
                                            <td class="light-orange text-dark">{{$performance_levelA['performance_level']['state']['basic']?round($performance_levelA['performance_level']['state']['basic']):'0'}}</td>
                                            <td class="light-green text-dark">{{$performance_levelA['performance_level']['state']['proficient']?round($performance_levelA['performance_level']['state']['proficient']):'0'}}</td>
                                            <td class="light-blue text-dark">{{$performance_levelA['performance_level']['state']['advanced']?round($performance_levelA['performance_level']['state']['advanced']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==10)
                                        @if($performance_levelKey=='sst'||$performance_levelKey=='sci'||$performance_levelKey=='math' || $performance_levelKey=='mil'|| $performance_levelKey=='eng')
                                          <tr class="light-orange">
                                            <th scope="row" class="dark-blue-bg fw-normal text-start">{{$subjectArrMangement[$performance_levelKey]}}
                                            </th>
                                            <td class="light-red text-dark">{{$performance_levelA['performance_level']['state']['below_basic']?round($performance_levelA['performance_level']['state']['below_basic']):'0'}}</td>
                                            <td class="light-orange text-dark">{{$performance_levelA['performance_level']['state']['basic']?round($performance_levelA['performance_level']['state']['basic']):'0'}}</td>
                                            <td class="light-green text-dark">{{$performance_levelA['performance_level']['state']['proficient']?round($performance_levelA['performance_level']['state']['proficient']):'0'}}</td>
                                            <td class="light-blue text-dark">{{$performance_levelA['performance_level']['state']['advanced']?round($performance_levelA['performance_level']['state']['advanced']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                    @endforeach
                                  @endif
                                @endif
                              @endforeach
                            @endif                            
                            <tr>
                              <th scope="row" class="light-grey fw-normal text-start"></th>
                              <td class="light-red text-dark text-start">Learners at this level are at the early stages of development regarding the curriculum standards. They have not achieved sufficient knowledge and skills to be considered minimally successful regarding curriculum demands. They need guidance at every stage of learning. They can make little judgment and need a lot of encouragement and guidance.</td>
                              <td class="light-orange text-dark text-start">Learners at this level demonstrate a minimum level of skills related to the curriculum learning outcomes. They can follow simple instructions and apply simple rules to achieve expected performance. They have some good ideas which often lack coherence. They need guidance at many stages of learning. They can solve problems using simple logic, and can also express themselves using simple language.</td>
                              <td class="light-green text-dark text-start">Learners at this level have acquired most of the learning outcomes and skills required by the curriculum. They can work independently with minimum supervision. They have a systematic methodology to solve problems. They can communicate their ideas clearly. They can also connect different ideas and create meaning with minimum guidance and supervision. They can analyze situations and interpret information for application to new situations.</td>
                              <td class="light-blue text-dark text-start">Learners at this level display exceptional mastery of the learning content as prescribed by the curriculum and beyond. They are independent with high analytical, reflective and critical thinking. They can connect and integrate concepts and ideas to create new knowledge/ meaning and solve complex problems. They communicate information with the highest level of creativity and coherence as well as make sound judgements.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- comparision graph section -->
                      <div class="col-md-12 mt-4 w-100">
                        <h3 class="text-center text-28 fw-bold">
                          Performance of Students in NAS 2017 and NAS 2021 
                        </h3>
                        <div class="container d-flex justify-content-center my-3">
                          <span class="legend-1"></span>
                          <p class="mb-0 me-4 text-15">NAS 2017</p>
                          <span class="legend-2"></span>
                          <p class="mb-0 me-4 text-15">NAS 2021</p>
                        </div>
                        <div class="graph-mark row justify-content-center">
                          <!-- class 3 -->
                          @if(isset($stateParticipationFinal['StatePerformance']) && count($stateParticipationFinal['StatePerformance'])>0)
                            @foreach($stateParticipationFinal['StatePerformance'] as $avgPerformance)
                              @if($avgPerformance['grade']==$stateParticipationFinal->grade)                            
                              @php 
                              $dataArr = json_decode($avgPerformance->data,true);
                              $grade = $avgPerformance->grade;
                              @endphp
                                  <div class="col-md-6 class-3-width">
                                    <div class="graph-wrap">
                                      <figure class="highcharts-figure">
                                        <div id="c{{$grade}}-compare-graph"></div>
                                      </figure>
                                    </div>
                                  </div>
                                @include('statepdf.comparisiongraph')
                              @endif
                            @endforeach
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg3">
                    <div class="reportview-footer">
                      <span class="page-no">3</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 3-new ends ------------------------>

    <!------------------------ page 4 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="reportview-class-content table-data white-bg py-4 px-0">
                    <div class="row mt-4">
                      <!-- Gender -->
                      <div class="col-md-9 left mb-60">
                        <h4 class="">Participation by Gender</h4>
                        <table class="table table-bordered text-center text-white">
                          <thead>
                            <tr class="bg-orange text-dark align-middle">
                              <th
                                class="align-middle dark-blue-bg text-white text-start"
                                scope="col"
                                colspan="2"
                                rowspan="3"
                              >
                                SUBJECT
                              </th>
                              <th scope="col" colspan="2" rowspan="2" class="">
                                Percentage correct answer
                              </th>
                              <th scope="col" colspan="4" class="">
                                Percentage of children
                              </th>
                            </tr>
                            <tr class="bg-orange text-dark">
                              <th scope="col" colspan="2" class="">
                               At basic and below basic level
                              </th>
                              <th scope="col" colspan="2" class="">
                               At proficient and advance level
                              </th>
                            </tr>
                            <tr class="dark-blue-bg">
                              <th scope="col" class="">Boys</th>
                              <th scope="col" class="">Girls</th>
                              <th scope="col" class="">Boys</th>
                              <th scope="col" class="">Girls</th>
                              <th scope="col" class="">Boys</th>
                              <th scope="col" class="">Girls</th>
                            </tr>
                          </thead>
                          <tbody class="text-dark">
                            <!-- sub 1 -->
                            @if(count($stateParticipationFinal['StatePerformance'])>0)
                              @foreach($stateParticipationFinal['StatePerformance'] as $stateGender)
                                @if($stateGender['grade']==$stateParticipationFinal->grade)
                                  @php 
                                    $dataArrGender = json_decode($stateGender->data,true);
                                    $grade = $stateGender['grade'];
                                  @endphp
                                  @if(count($dataArrGender)>0)
                                    @foreach($dataArrGender as $genderKey=>$genderA)                            
                                      @if($grade==3 || $grade==5)
                                        @if($genderKey=='evs'||$genderKey=='math' || $genderKey=='language')
                                        @php
                                          $subjectArrMangement = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                                        @endphp
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$genderKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$genderA['gender']['state']['boys']?round($genderA['gender']['state']['boys']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls']?round($genderA['gender']['state']['girls']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['boys_basic_and_below_basic']?round($genderA['gender']['state']['boys_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls_basic_and_below_basic']?round($genderA['gender']['state']['girls_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['boys_proficient_and_advance']?round($genderA['gender']['state']['boys_proficient_and_advance']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls_proficient_and_advance']?round($genderA['gender']['state']['girls_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$genderA['gender']['national']['boys']?round($genderA['gender']['national']['boys']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls']?round($genderA['gender']['national']['girls']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['boys_basic_and_below_basic']?round($genderA['gender']['national']['boys_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls_basic_and_below_basic']?round($genderA['gender']['national']['girls_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['boys_proficient_and_advance']?round($genderA['gender']['national']['boys_proficient_and_advance']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls_proficient_and_advance']?round($genderA['gender']['national']['girls_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==8)
                                        @if($genderKey=='sst'|| $genderKey=='sci'||$genderKey=='math' || $genderKey=='language')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$genderKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$genderA['gender']['state']['boys']?round($genderA['gender']['state']['boys']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls']?round($genderA['gender']['state']['girls']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['boys_basic_and_below_basic']?round($genderA['gender']['state']['boys_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls_basic_and_below_basic']?round($genderA['gender']['state']['girls_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['boys_proficient_and_advance']?round($genderA['gender']['state']['boys_proficient_and_advance']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls_proficient_and_advance']?round($genderA['gender']['state']['girls_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$genderA['gender']['national']['boys']?round($genderA['gender']['national']['boys']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls']?round($genderA['gender']['national']['girls']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['boys_basic_and_below_basic']?round($genderA['gender']['national']['boys_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls_basic_and_below_basic']?round($genderA['gender']['national']['girls_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['boys_proficient_and_advance']?round($genderA['gender']['national']['boys_proficient_and_advance']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls_proficient_and_advance']?round($genderA['gender']['national']['girls_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==10)
                                        @if($genderKey=='sst'||$genderKey=='sci'||$genderKey=='math' || $genderKey=='mil'|| $genderKey=='eng')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$genderKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$genderA['gender']['state']['boys']?round($genderA['gender']['state']['boys']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls']?round($genderA['gender']['state']['girls']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['boys_basic_and_below_basic']?round($genderA['gender']['state']['boys_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls_basic_and_below_basic']?round($genderA['gender']['state']['girls_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['boys_proficient_and_advance']?round($genderA['gender']['state']['boys_proficient_and_advance']):'0'}}</td>
                                            <td>{{$genderA['gender']['state']['girls_proficient_and_advance']?round($genderA['gender']['state']['girls_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$genderA['gender']['national']['boys']?round($genderA['gender']['national']['boys']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls']?round($genderA['gender']['national']['girls']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['boys_basic_and_below_basic']?round($genderA['gender']['national']['boys_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls_basic_and_below_basic']?round($genderA['gender']['national']['girls_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['boys_proficient_and_advance']?round($genderA['gender']['national']['boys_proficient_and_advance']):'0'}}</td>
                                            <td>{{$genderA['gender']['national']['girls_proficient_and_advance']?round($genderA['gender']['national']['girls_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                    @endforeach
                                  @endif
                                @endif
                              @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-3 text-center gender-right">
                        <div class="cont-wrap mb-60">
                          <h4 class="ps-3">Participation by Gender</h4>
                          <!-- images changed -->
                          @include('statepdf.genderparticipation')
                        </div>
                      </div>
                      <!-- Location -->
                      <div class="col-md-9 left mb-60">
                        <h4 class="">Participation by Location</h4>
                        <table class="table table-bordered text-center text-white">
                          <thead>
                            <tr class="bg-orange text-dark align-middle">
                              <th
                                class="align-middle dark-blue-bg text-white text-start"
                                scope="col"
                                colspan="2"
                                rowspan="3"
                              >
                                SUBJECT
                              </th>
                              <th scope="col" colspan="2" rowspan="2" class="">
                              Performance of students <br> (percentage correct answer)
                              </th>
                              <th scope="col" colspan="4" class="">
                                Percentage of children
                              </th>
                            </tr>
                            <tr class="bg-orange text-dark">
                              <th scope="col" colspan="2" class="">
                               At basic and below basic level
                              </th>
                              <th scope="col" colspan="2" class="">
                               At proficient and advance level
                              </th>
                            </tr>
                            <tr class="dark-blue-bg">
                              <th scope="col" class="">Rural</th>
                              <th scope="col" class="">Urban</th>
                              <th scope="col" class="">Rural</th>
                              <th scope="col" class="">Urban</th>
                              <th scope="col" class="">Rural</th>
                              <th scope="col" class="">Urban</th>
                            </tr>
                          </thead>
                          <tbody class="text-dark">
                            <!-- sub 1 -->
                            @if(count($stateParticipationFinal['StatePerformance'])>0)
                              @foreach($stateParticipationFinal['StatePerformance'] as $statelocation)
                                @if($statelocation['grade']==$stateParticipationFinal->grade)
                                  @php 
                                    $dataArrlocation = json_decode($statelocation->data,true);
                                    $grade = $statelocation['grade'];
                                  @endphp
                                  @if(count($dataArrlocation)>0)
                                    @foreach($dataArrlocation as $locationKey=>$locationA)                            
                                      @if($grade==3 || $grade==5)
                                        @if($locationKey=='evs'||$locationKey=='math' || $locationKey=='language')
                                        @php
                                          $subjectArrMangement = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                                        @endphp
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$locationKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$locationA['location']['state']['rural']?round($locationA['location']['state']['rural']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban']?round($locationA['location']['state']['urban']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['rural_basic_and_below_basic']?round($locationA['location']['state']['rural_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban_basic_and_below_basic']?round($locationA['location']['state']['urban_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['rural_proficient_and_advance']?round($locationA['location']['state']['rural_proficient_and_advance']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban_proficient_and_advance']?round($locationA['location']['state']['urban_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$locationA['location']['national']['rural']?round($locationA['location']['national']['rural']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban']?round($locationA['location']['national']['urban']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['rural_basic_and_below_basic']?round($locationA['location']['national']['rural_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban_basic_and_below_basic']?round($locationA['location']['national']['urban_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['rural_proficient_and_advance']?round($locationA['location']['national']['rural_proficient_and_advance']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban_proficient_and_advance']?round($locationA['location']['national']['urban_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==8)
                                        @if($locationKey=='sst'|| $locationKey=='sci'||$locationKey=='math' || $locationKey=='language')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$locationKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$locationA['location']['state']['rural']?round($locationA['location']['state']['rural']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban']?round($locationA['location']['state']['urban']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['rural_basic_and_below_basic']?round($locationA['location']['state']['rural_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban_basic_and_below_basic']?round($locationA['location']['state']['urban_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['rural_proficient_and_advance']?round($locationA['location']['state']['rural_proficient_and_advance']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban_proficient_and_advance']?round($locationA['location']['state']['urban_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$locationA['location']['national']['rural']?round($locationA['location']['national']['rural']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban']?round($locationA['location']['national']['urban']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['rural_basic_and_below_basic']?round($locationA['location']['national']['rural_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban_basic_and_below_basic']?round($locationA['location']['national']['urban_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['rural_proficient_and_advance']?round($locationA['location']['national']['rural_proficient_and_advance']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban_proficient_and_advance']?round($locationA['location']['national']['urban_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==10)
                                        @if($locationKey=='sst'||$locationKey=='sci'||$locationKey=='math' || $locationKey=='mil'|| $locationKey=='eng')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$locationKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$locationA['location']['state']['rural']?round($locationA['location']['state']['rural']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban']?round($locationA['location']['state']['urban']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['rural_basic_and_below_basic']?round($locationA['location']['state']['rural_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban_basic_and_below_basic']?round($locationA['location']['state']['urban_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['rural_proficient_and_advance']?round($locationA['location']['state']['rural_proficient_and_advance']):'0'}}</td>
                                            <td>{{$locationA['location']['state']['urban_proficient_and_advance']?round($locationA['location']['state']['urban_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$locationA['location']['national']['rural']?round($locationA['location']['national']['rural']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban']?round($locationA['location']['national']['urban']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['rural_basic_and_below_basic']?round($locationA['location']['national']['rural_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban_basic_and_below_basic']?round($locationA['location']['national']['urban_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['rural_proficient_and_advance']?round($locationA['location']['national']['rural_proficient_and_advance']):'0'}}</td>
                                            <td>{{$locationA['location']['national']['urban_proficient_and_advance']?round($locationA['location']['national']['urban_proficient_and_advance']):'0'}}</td>
                                          </tr>
                                        @endif
                                      @endif
                                    @endforeach
                                  @endif
                                @endif
                              @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-3 text-center gender-right">
                        <div class="cont-wrap mb-60">
                          <h4 class="ps-3">Participation by Location</h4>
                          @include('statepdf.locationparticipation')
                        </div>
                      </div>
                      <!-- Management -->
                      <div class="col-md-9 left mb-60">
                        <h4 class="">Participation by Management</h4>
                        <table class="table table-bordered text-center  management-table text-white">
                          <thead>
                            <tr class="bg-orange text-dark align-middle">
                              <th
                                class="align-middle dark-blue-bg text-white text-start"
                                scope="col"
                                colspan="2"
                                rowspan="3"
                              >
                                SUBJECT
                              </th>
                              <th scope="col" colspan="4" rowspan="2" class="">
                                Percentage correct answer
                              </th>
                              <th scope="col" colspan="8" class="">
                                Percentage of children
                              </th>
                            </tr>
                            <tr class="bg-orange text-dark">
                              <th scope="col" colspan="4" class="">
                               At basic and below basic level
                              </th>
                              <th scope="col" colspan="4" class="">
                               At proficient and advance level
                              </th>
                            </tr>
                            <tr class="dark-blue-bg head-rotate">
                              <th scope="col" class="">Govt.</th>
                              <th scope="col" class="">Private</th>
                              <th scope="col" class="">Aided</th>
                              <th scope="col" class="">Central</th>
                              <th scope="col" class="">Govt.</th>
                              <th scope="col" class="">Private</th>
                              <th scope="col" class="">Aided</th>
                              <th scope="col" class="">Central</th>
                              <th scope="col" class="">Govt.</th>
                              <th scope="col" class="">Private</th>
                              <th scope="col" class="">Aided</th>
                              <th scope="col" class="">Central</th>
                            </tr>
                          </thead>
                          <tbody class="text-dark">
                            <!-- sub 1 -->
                            @if(count($stateParticipationFinal['StatePerformance'])>0)
                              @foreach($stateParticipationFinal['StatePerformance'] as $statemanagement)
                                @if($statemanagement['grade']==$stateParticipationFinal->grade)
                                  @php 
                                    $dataArrmanagement = json_decode($statemanagement->data,true);
                                    $grade = $statemanagement['grade'];
                                  @endphp
                                  @if(count($dataArrmanagement)>0)
                                    @foreach($dataArrmanagement as $managementKey=>$managementA)                            
                                      @if($grade==3 || $grade==5)
                                        @if($managementKey=='evs'||$managementKey=='math' || $managementKey=='language')
                                        @php
                                          $subjectArrMangement = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                                        @endphp
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$managementKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$managementA['management']['state']['govt']?round($managementA['management']['state']['govt']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private']?round($managementA['management']['state']['private']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided']?round($managementA['management']['state']['govt_aided']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt']?round($managementA['management']['state']['central_govt']):'0'}}</td>

                                            <td>{{$managementA['management']['state']['govt_basic_and_below_basic']?round($managementA['management']['state']['govt_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private_basic_and_below_basic']?round($managementA['management']['state']['private_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided_basic_and_below_basic']?round($managementA['management']['state']['govt_aided_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt_basic_and_below_basic']?round($managementA['management']['state']['central_govt_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$managementA['management']['state']['govt_proficient_and_advance']?round($managementA['management']['state']['govt_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private_proficient_and_advance']?round($managementA['management']['state']['private_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided_proficient_and_advance']?round($managementA['management']['state']['govt_aided_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt_proficient_and_advance']?round($managementA['management']['state']['central_govt_proficient_and_advance']):'0'}}</td>                                            
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$managementA['management']['national']['govt']?round($managementA['management']['national']['govt']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private']?round($managementA['management']['national']['private']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided']?round($managementA['management']['national']['govt_aided']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt']?round($managementA['management']['national']['central_govt']):'0'}}</td>

                                            <td>{{$managementA['management']['national']['govt_basic_and_below_basic']?round($managementA['management']['national']['govt_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private_basic_and_below_basic']?round($managementA['management']['national']['private_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided_basic_and_below_basic']?round($managementA['management']['national']['govt_aided_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt_basic_and_below_basic']?round($managementA['management']['national']['central_govt_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$managementA['management']['national']['govt_proficient_and_advance']?round($managementA['management']['national']['govt_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private_proficient_and_advance']?round($managementA['management']['national']['private_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided_proficient_and_advance']?round($managementA['management']['national']['govt_aided_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt_proficient_and_advance']?round($managementA['management']['national']['central_govt_proficient_and_advance']):'0'}}</td>    
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==8)
                                        @if($managementKey=='sst'|| $managementKey=='sci'||$managementKey=='math' || $managementKey=='language')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$managementKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$managementA['management']['state']['govt']?round($managementA['management']['state']['govt']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private']?round($managementA['management']['state']['private']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided']?round($managementA['management']['state']['govt_aided']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt']?round($managementA['management']['state']['central_govt']):'0'}}</td>

                                            <td>{{$managementA['management']['state']['govt_basic_and_below_basic']?round($managementA['management']['state']['govt_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private_basic_and_below_basic']?round($managementA['management']['state']['private_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided_basic_and_below_basic']?round($managementA['management']['state']['govt_aided_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt_basic_and_below_basic']?round($managementA['management']['state']['central_govt_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$managementA['management']['state']['govt_proficient_and_advance']?round($managementA['management']['state']['govt_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private_proficient_and_advance']?round($managementA['management']['state']['private_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided_proficient_and_advance']?round($managementA['management']['state']['govt_aided_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt_proficient_and_advance']?round($managementA['management']['state']['central_govt_proficient_and_advance']):'0'}}</td>                                            
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$managementA['management']['national']['govt']?round($managementA['management']['national']['govt']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private']?round($managementA['management']['national']['private']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided']?round($managementA['management']['national']['govt_aided']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt']?round($managementA['management']['national']['central_govt']):'0'}}</td>

                                            <td>{{$managementA['management']['national']['govt_basic_and_below_basic']?round($managementA['management']['national']['govt_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private_basic_and_below_basic']?round($managementA['management']['national']['private_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided_basic_and_below_basic']?round($managementA['management']['national']['govt_aided_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt_basic_and_below_basic']?round($managementA['management']['national']['central_govt_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$managementA['management']['national']['govt_proficient_and_advance']?round($managementA['management']['national']['govt_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private_proficient_and_advance']?round($managementA['management']['national']['private_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided_proficient_and_advance']?round($managementA['management']['national']['govt_aided_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt_proficient_and_advance']?round($managementA['management']['national']['central_govt_proficient_and_advance']):'0'}}</td>    
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==10)
                                        @if($managementKey=='sst'||$managementKey=='sci'||$managementKey=='math' || $managementKey=='mil'|| $managementKey=='eng')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$managementKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$managementA['management']['state']['govt']?round($managementA['management']['state']['govt']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private']?round($managementA['management']['state']['private']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided']?round($managementA['management']['state']['govt_aided']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt']?round($managementA['management']['state']['central_govt']):'0'}}</td>

                                            <td>{{$managementA['management']['state']['govt_basic_and_below_basic']?round($managementA['management']['state']['govt_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private_basic_and_below_basic']?round($managementA['management']['state']['private_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided_basic_and_below_basic']?round($managementA['management']['state']['govt_aided_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt_basic_and_below_basic']?round($managementA['management']['state']['central_govt_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$managementA['management']['state']['govt_proficient_and_advance']?round($managementA['management']['state']['govt_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['private_proficient_and_advance']?round($managementA['management']['state']['private_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['govt_aided_proficient_and_advance']?round($managementA['management']['state']['govt_aided_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['state']['central_govt_proficient_and_advance']?round($managementA['management']['state']['central_govt_proficient_and_advance']):'0'}}</td>                                            
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$managementA['management']['national']['govt']?round($managementA['management']['national']['govt']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private']?round($managementA['management']['national']['private']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided']?round($managementA['management']['national']['govt_aided']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt']?round($managementA['management']['national']['central_govt']):'0'}}</td>

                                            <td>{{$managementA['management']['national']['govt_basic_and_below_basic']?round($managementA['management']['national']['govt_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private_basic_and_below_basic']?round($managementA['management']['national']['private_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided_basic_and_below_basic']?round($managementA['management']['national']['govt_aided_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt_basic_and_below_basic']?round($managementA['management']['national']['central_govt_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$managementA['management']['national']['govt_proficient_and_advance']?round($managementA['management']['national']['govt_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['private_proficient_and_advance']?round($managementA['management']['national']['private_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['govt_aided_proficient_and_advance']?round($managementA['management']['national']['govt_aided_proficient_and_advance']):'0'}}</td>
                                            <td>{{$managementA['management']['national']['central_govt_proficient_and_advance']?round($managementA['management']['national']['central_govt_proficient_and_advance']):'0'}}</td>    
                                          </tr>
                                        @endif
                                      @endif
                                    @endforeach
                                  @endif
                                @endif
                              @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-3 text-center gender-right">
                        <div class="cont-wrap mb-30">
                          <h4 class="ps-3">Participation by Management</h4>
                          @include('statepdf.managementparticipation')
                        </div>
                      </div>
                      <!-- Social -->
                      <div class="col-md-9 left mb-60">
                        <h4 class="">Participation by Social Group</h4>
                        <table class="table table-bordered text-center  management-table text-white">
                          <thead>
                            <tr class="bg-orange text-dark align-middle">
                              <th
                                class="align-middle dark-blue-bg text-white text-start"
                                scope="col"
                                colspan="2"
                                rowspan="3"
                              >
                                SUBJECT
                              </th>
                              <th scope="col" colspan="4" rowspan="2" class="">
                                Percentage correct answer
                              </th>
                              <th scope="col" colspan="8" class="">
                                Percentage of children
                              </th>
                            </tr>
                            <tr class="bg-orange text-dark">
                              <th scope="col" colspan="4" class="">
                               At basic and below basic level
                              </th>
                              <th scope="col" colspan="4" class="">
                               At proficient and advance level
                              </th>
                            </tr>
                            <tr class="dark-blue-bg head-rotate">
                              <th scope="col" class="">SC</th>
                              <th scope="col" class="">ST</th>
                              <th scope="col" class="">OBC</th>
                              <th scope="col" class="">Others</th>
                              <th scope="col" class="">SC</th>
                              <th scope="col" class="">ST</th>
                              <th scope="col" class="">OBC</th>
                              <th scope="col" class="">Others</th>
                              <th scope="col" class="">SC</th>
                              <th scope="col" class="">ST</th>
                              <th scope="col" class="">OBC</th>
                              <th scope="col" class="">Others</th>
                            </tr>
                          </thead>
                          <tbody class="text-dark">
                            <!-- sub 1 -->
                            @if(count($stateParticipationFinal['StatePerformance'])>0)
                              @foreach($stateParticipationFinal['StatePerformance'] as $statesocialgroup)
                                @if($statesocialgroup['grade']==$stateParticipationFinal->grade)
                                  @php 
                                    $dataArrsocialgroup = json_decode($statesocialgroup->data,true);
                                    $grade = $statesocialgroup['grade'];
                                  @endphp
                                  @if(count($dataArrsocialgroup)>0)
                                    @foreach($dataArrsocialgroup as $socialgroupKey=>$socialgroupA)                            
                                      @if($grade==3 || $grade==5)
                                        @if($socialgroupKey=='evs'||$socialgroupKey=='math' || $socialgroupKey=='language')
                                        @php
                                          $subjectArrMangement = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                                        @endphp
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$socialgroupKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['sc']?round($socialgroupA['socialgroup']['state']['sc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st']?round($socialgroupA['socialgroup']['state']['st']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc']?round($socialgroupA['socialgroup']['state']['obc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general']?round($socialgroupA['socialgroup']['state']['general']):'0'}}</td>

                                            <td>{{$socialgroupA['socialgroup']['state']['sc_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['sc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['st_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['obc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['general_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$socialgroupA['socialgroup']['state']['sc_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['sc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['st_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['obc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['general_proficient_and_advance']):'0'}}</td>                                            
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['sc']?round($socialgroupA['socialgroup']['national']['sc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st']?round($socialgroupA['socialgroup']['national']['st']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc']?round($socialgroupA['socialgroup']['national']['obc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general']?round($socialgroupA['socialgroup']['national']['general']):'0'}}</td>

                                            <td>{{$socialgroupA['socialgroup']['national']['sc_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['sc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['st_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['obc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['general_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$socialgroupA['socialgroup']['national']['sc_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['sc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['st_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['obc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['general_proficient_and_advance']):'0'}}</td>    
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==8)
                                        @if($socialgroupKey=='sst'|| $socialgroupKey=='sci'||$socialgroupKey=='math' || $socialgroupKey=='language')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$socialgroupKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['sc']?round($socialgroupA['socialgroup']['state']['sc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st']?round($socialgroupA['socialgroup']['state']['st']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc']?round($socialgroupA['socialgroup']['state']['obc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general']?round($socialgroupA['socialgroup']['state']['general']):'0'}}</td>

                                            <td>{{$socialgroupA['socialgroup']['state']['sc_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['sc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['st_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['obc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['general_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$socialgroupA['socialgroup']['state']['sc_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['sc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['st_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['obc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['general_proficient_and_advance']):'0'}}</td>                                            
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['sc']?round($socialgroupA['socialgroup']['national']['sc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st']?round($socialgroupA['socialgroup']['national']['st']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc']?round($socialgroupA['socialgroup']['national']['obc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general']?round($socialgroupA['socialgroup']['national']['general']):'0'}}</td>

                                            <td>{{$socialgroupA['socialgroup']['national']['sc_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['sc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['st_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['obc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['general_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$socialgroupA['socialgroup']['national']['sc_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['sc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['st_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['obc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['general_proficient_and_advance']):'0'}}</td>    
                                          </tr>
                                        @endif
                                      @endif
                                      @if($grade==10)
                                        @if($socialgroupKey=='sst'||$socialgroupKey=='sci'||$socialgroupKey=='math' || $socialgroupKey=='mil'|| $socialgroupKey=='eng')
                                          <tr class="light-orange">
                                            <td scope="row" rowspan="2" class="align-middle dark-blue text-white">{{$subjectArrMangement[$socialgroupKey]}}
                                            </td>
                                            <td>State</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['sc']?round($socialgroupA['socialgroup']['state']['sc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st']?round($socialgroupA['socialgroup']['state']['st']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc']?round($socialgroupA['socialgroup']['state']['obc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general']?round($socialgroupA['socialgroup']['state']['general']):'0'}}</td>

                                            <td>{{$socialgroupA['socialgroup']['state']['sc_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['sc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['st_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['obc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general_basic_and_below_basic']?round($socialgroupA['socialgroup']['state']['general_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$socialgroupA['socialgroup']['state']['sc_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['sc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['st_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['st_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['obc_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['obc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['state']['general_proficient_and_advance']?round($socialgroupA['socialgroup']['state']['general_proficient_and_advance']):'0'}}</td>                                            
                                          </tr>
                                          <tr class="light-orange">
                                            <td>National</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['sc']?round($socialgroupA['socialgroup']['national']['sc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st']?round($socialgroupA['socialgroup']['national']['st']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc']?round($socialgroupA['socialgroup']['national']['obc']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general']?round($socialgroupA['socialgroup']['national']['general']):'0'}}</td>

                                            <td>{{$socialgroupA['socialgroup']['national']['sc_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['sc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['st_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['obc_basic_and_below_basic']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general_basic_and_below_basic']?round($socialgroupA['socialgroup']['national']['general_basic_and_below_basic']):'0'}}</td> 
                                            <td>{{$socialgroupA['socialgroup']['national']['sc_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['sc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['st_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['st_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['obc_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['obc_proficient_and_advance']):'0'}}</td>
                                            <td>{{$socialgroupA['socialgroup']['national']['general_proficient_and_advance']?round($socialgroupA['socialgroup']['national']['general_proficient_and_advance']):'0'}}</td>    
                                          </tr>
                                        @endif
                                      @endif
                                    @endforeach
                                  @endif
                                @endif
                              @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-3 text-center gender-right">
                        <div class="cont-wrap mb-60">
                          <h4 class="ps-3">Participation by Social Group</h4>
                            @include('statepdf.socialgrpgraph')
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg4">
                    <div class="reportview-footer">
                      <span class="page-no">4</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 4 ends ------------------------>
    <!------------------------ page 4-1 new Start ------------------------>

    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="reportview-class-content p-3 white-bg">
                    <div class="row pb-100">
                      <div class="col-md-12">
                        <h4 class="performance-heading heading-black-bold text-28 text-center p-4">
                          Overall Achievement Score
                        </h4>
                      </div>
                      <div class="col-md-12 mb-3 mt-4 mx-2">
                        <div class="row align-items-center overall-box">
                          <div class="col-md-6 text-center">
                            <p class="fw-bold">National Average</p>
                            <h2 class="blue-txt">250</h2>
                          </div>
                          <div class="col-md-2 text-center light-green">
                            <h3>14</h3>
                            <div><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></div>
                            <p class="mb-0 fw-bold text-center">performed significantly higher than National average</p>
                          </div>
                          <div class="col-md-2 text-center bg-orange">
                            <h3>14</h3>
                            <div><img src="https://nas21.inroad.in/report-pdf/assets/images/double-arrow.png" alt="double-arrow"></div>
                            <p class="mb-0 fw-bold text-center">performed significantly higher than National average</p>
                          </div>
                          <div class="col-md-2 text-center light-red">
                            <h3>14</h3>
                            <div><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></div>
                            <p class="mb-0 fw-bold text-center">performed significantly higher than National average</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <table class="table table-bordered align-middle text-center">
                          <thead>
                            <tr class="bg-secondary text-white">
                              <th scope="col">District Name</th>
                              <th scope="col" class="">
                                Mean
                              </th>
                              <th scope="col">SE</th>
                              <th scope="col">Significant difference with State Mean</th>
                              <th scope="col">At proficient and advance level</th>
                            </tr>
                          </thead>
                          <tbody>
                                <!-- light-green sec -->
                                <tr class="light-green fw-bold">
                                  <td>Moga</td>
                                  <td>267</td>
                                  <td>3</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>45</td>
                                  <td>55</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Fatehgarh Sahib</td>
                                  <td>263</td>
                                  <td>1</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>40</td>
                                  <td>60</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Jalandhar</td>
                                  <td>262</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>30</td>
                                  <td>70</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Faridkot</td>
                                  <td>259</td>
                                  <td>3</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>35</td>
                                  <td>65</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Pathankot</td>
                                  <td>259</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>55</td>
                                  <td>45</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Muktsar</td>
                                  <td>258</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>60</td>
                                  <td>40</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Fazilka</td>
                                  <td>253</td>
                                  <td>3</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>51</td>
                                  <td>49</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Barnala</td>
                                  <td>251</td>
                                  <td>3</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>57</td>
                                  <td>43</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Sangrur</td>
                                  <td>248</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>62</td>
                                  <td>38</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Mohali</td>
                                  <td>248</td>
                                  <td>1</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>59</td>
                                  <td>41</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Kapurthala</td>
                                  <td>245</td>
                                  <td>1</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>64</td>
                                  <td>36</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Ludhiana</td>
                                  <td>245</td>
                                  <td>1</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>66</td>
                                  <td>34</td>
                                </tr>
                                <tr class="light-green fw-bold">
                                  <td>Firozpur</td>
                                  <td>245</td>
                                  <td>1</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/up-arrow.png" alt="up-arrow"></td>
                                  <td>53</td>
                                  <td>47</td>
                                </tr>
                                <!-- bg-orange sec -->
                                <tr class="bg-orange fw-bold">
                                  <td>Bathinda</td>
                                  <td>244</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/double-arrow.png" alt="double-arrow"></td>
                                  <td>50</td>
                                  <td>50</td>
                                </tr>
                                <!-- light-red sec -->
                                <tr class="light-red fw-bold">
                                  <td>Taran Taran</td>
                                  <td>241</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>41</td>
                                  <td>59</td>
                                </tr>
                                <tr class="light-red fw-bold">
                                  <td>Hoshiarpur</td>
                                  <td>236</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>40</td>
                                  <td>60</td>
                                </tr>
                                <tr class="light-red fw-bold">
                                  <td>Mansa</td>
                                  <td>234</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>45</td>
                                  <td>55</td>
                                </tr>
                                <tr class="light-red fw-bold">
                                  <td>Nawanshahr</td>
                                  <td>231</td>
                                  <td>3</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>49</td>
                                  <td>51</td>
                                </tr>
                                <tr class="light-red fw-bold">
                                  <td>Gurdaspur</td>
                                  <td>223</td>
                                  <td>2</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>59</td>
                                  <td>41</td>
                                </tr>
                                <tr class="light-red fw-bold">
                                  <td>Amritsar</td>
                                  <td>221</td>
                                  <td>1</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>53</td>
                                  <td>47</td>
                                </tr>
                                <tr class="light-red fw-bold">
                                  <td>Rupnagar</td>
                                  <td>218</td>
                                  <td>5</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>50</td>
                                  <td>50</td>
                                </tr>
                                <tr class="light-red fw-bold">
                                  <td>Patiala</td>
                                  <td>217</td>
                                  <td>3</td>
                                  <td><img src="https://nas21.inroad.in/report-pdf/assets/images/down-arrow.png" alt="down-arrow"></td>
                                  <td>38</td>
                                  <td>62</td>
                                </tr>
                                <!-- green sec -->
                                <tr class="card-green fw-bold">
                                  <td>State Average</td>
                                  <td>244</td>
                                  <td></td>
                                  <td></td>
                                  <td>55</td>
                                  <td>45</td>
                                </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg4">
                    <div class="reportview-footer">
                      <span class="page-no">4</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 4-1 new End ------------------------>
    <!------------------------ page 5 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container">
                <div class="reportview-class-wrap state-testimony">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                  </div>
                  <!-- content -->
                  <!-- head teacher testimony -->
                  <div
                    class="reportview-class-content light-pink children-testimony"
                  >
                    <div class="row pb-3 justify-content-center">
                      <div class="col-md-12 pb-4">
                        <h4 class="text-28 fw-bold text-center">
                          What head teachers responded about school?
                        </h4>
                      </div>
                      @if(count($stateFeedbackData)>0)
                        @foreach($stateFeedbackData as $sqfeedback)
                          @if($stateParticipationFinal->grade==$sqfeedback->grade)
                            @if($sqfeedback->level=='sq')
                              <div class="col-md-4">
                                <div class="infotab-content white-bg text-center">
                                  <h2 class="title text-pink pt-2">{{isset($sqfeedback->avg)?$sqfeedback->avg:0}}%</h2>
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
                  <!-- teacher testimony -->
                  <div
                    class="reportview-class-content page-mid-break light-green-bg children-testimony teacher-testimony"
                  >
                    <div class="row pb-3 justify-content-center">
                      <div class="col-md-12 pb-4">
                        <h4 class="text-28 fw-bold text-center">
                          What teachers responded about school?
                        </h4>
                      </div>
                      @if(count($stateFeedbackData)>0)
                        @foreach($stateFeedbackData as $tqfeedback)
                          @if($stateParticipationFinal->grade==$tqfeedback->grade)
                            @if($tqfeedback->level=='tq')                        
                              <div class="col-md-4">
                                <div class="infotab-content white-bg text-center">
                                  <h2 class="title pt-2">{{isset($tqfeedback->avg)?$tqfeedback->avg:0}}%</h2>
                                  <p class="total-no">
                                    {{isset($tqfeedback->question_desc)?$tqfeedback->question_desc:'-'}}
                                  </p>
                                </div>
                              </div>
                            @endif
                          @endif
                        @endforeach
                      @endif
                    </div>
                  </div>
                  <!-- children testimony -->
                  <div
                    class="reportview-class-content light-blue-bg children-testimony head-teacher-testimony mb-60"
                  >
                    <div class="row pb-3 justify-content-center">
                      <div class="col-md-12 pb-4">
                        <h4 class="text-28 fw-bold text-center">
                          What children say about schools ?
                        </h4>
                      </div>
                      @if(count($stateFeedbackData)>0)
                        @foreach($stateFeedbackData as $pqfeedback)
                          @if($stateParticipationFinal->grade==$pqfeedback->grade)
                            @if($pqfeedback->level=='pq')  
                              <div class="col-md-4">
                                <div class="infotab-content white-bg text-center">
                                  <h2 class="title pt-2">{{isset($pqfeedback->avg)?$pqfeedback->avg:0}}%</h2>
                                  <p class="total-no">
                                    {{isset($pqfeedback->question_desc)?$pqfeedback->question_desc:'-'}}
                                  </p>
                                </div>
                              </div>
                            @endif
                          @endif
                        @endforeach
                      @endif
                    </div>
                  </div>
                  <div class="report-footer-wrap pg5">
                    <div class="reportview-footer">
                      <span class="page-no">5</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 5 ends ------------------------>
    <!------------------------ page 6 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="reportview-class-content white-bg">
                    <div class="feedback-wrap">
                      <!-- pandemic activities -->
                      <div class="pendamic-wrap my-5">
                        <div class="virus-icon2">
                          <img
                            src="https://nas21.inroad.in/report-pdf/assets/images/virus.png"
                            alt="virus"
                            class="img-fluid"
                          />
                        </div>
                        <div class="virus-icon4">
                          <img
                            src="https://nas21.inroad.in/report-pdf/assets/images/virus.png"
                            alt="virus"
                            class="img-fluid"
                          />
                        </div>
                        <h2 class="text-28 virus-text fw-bold text-center">
                          Learning at home during the pandemic
                        </h2>
                        <!-- activity wrap -->
                        <div class="activity-wrap light-blue-bg my-5">
                          <h2 class="heading-black text-left my-4">
                            I learn many things during the pandemic like
                          </h2>
                          <div class="row">
                            <div class="col-md-9 mb-4">
                              <div class="activity-list">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="activity-list-content">
                                      <h2 class="title">Painting</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="activity-list-content">
                                      <h2 class="title">Singing</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="activity-list-content">
                                      <h2 class="title">Cooking</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="activity-list-content">
                                      <h2 class="title">Indoor Game</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="activity-list-content">
                                      <h2 class="title">Yoga</h2>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="activity-list-content">
                                      <h2 class="title">
                                        Playing Musical Instrument
                                      </h2>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="activity-list-content">
                                      <h2 class="title">
                                        Spend time with my parents / siblings
                                      </h2>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @if(count($stateFeedbackData)>0)
                              @foreach($stateFeedbackData as $pq1feedback)
                                @if($stateParticipationFinal->grade==$pq1feedback->grade)
                                  @if($pq1feedback->level=='pq1')  
                                    <div class="col-md-3 mb-4">
                                      <div class="container blue-progress-bar py-5">
                                        <div class="progress-percent" data-percent="{{isset($pq1feedback->avg)?$pq1feedback->avg:0}}">
                                            <div class="progress-inner">
                                                <div class="progress-round"></div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                  @endif
                                @endif
                            @endforeach
                          @endif
                          </div>
                        </div>
                        <!-- progress bar -->
                        <div class="pendamic-progessbar-wrap mtb-30">
                          <div class="row">
                            <div class="col-md-6">
                              <div
                                class="pendamic-progressbar-card light-pink-bg"
                              >
                                <h3 class="heading card-pink">
                                    @if(count($stateFeedbackData)>0)
                                    @php $sum = 0; $pq2count = 0;@endphp
                                      @foreach($stateFeedbackData as $pq2feedback)
                                        @if($stateParticipationFinal->grade==$pq2feedback->grade)
                                          @if($pq2feedback->level=='pq2')  
                                                @php
                                                  $sum =(isset($pq2feedback->avg)?$pq2feedback->avg:0)+$sum;
                                                  $pq2count++;
                                                @endphp
                                          @endif
                                        @endif
                                      @endforeach
                                    @endif

                                  <span>{{(count($stateFeedbackData)>0)?round($sum/$pq2count):0}}%</span> Learning from pandemic
                                </h3>
                                <div class="pendamic-progressbar-list">
                                  <div class="row">
                                    @if(count($stateFeedbackData)>0)
                                      @php
                                        $firstCount = 1;
                                        $arr2 = array('Follow the covid-19 hygiene protocols','No digital device at home','happy to spend time at home with my own self','experience worry anxiety and fearing during pandamic');
                                      @endphp
                                      @foreach($stateFeedbackData as $k=>$pq2feedback)
                                      @php
                                          if($firstCount==4)
                                          {
                                            $cls = "border-left";
                                            $cls2 = "border-top";
                                          }
                                          elseif($firstCount==3)
                                          {
                                            $cls = "";
                                            $cls2 = "border-top";
                                          }
                                          else
                                          {
                                            $cls = "";
                                            $cls2 = "";
                                          }
                                        @endphp
                                        @if($stateParticipationFinal->grade==$pq2feedback->grade)
                                          @if($pq2feedback->level=='pq2')  
                                          <div class="col-md-6 {{$cls}} {{$cls2}}" >
                                            <div
                                              class="pendamic-progrssbar-content ptb-15"
                                            >
                                              <div class="container pink-progress-bar">
                                                <div class="progress-percent" data-percent="{{isset($pq2feedback->avg)?$pq2feedback->avg:0}}">
                                                  <div class="progress-inner">
                                                    <div class="progress-round"></div>
                                                  </div>
                                                </div>
                                              </div>
                                              <p class="title">
                                                {{isset($pq2feedback->question_desc)?$pq2feedback->question_desc:0}}
                                              </p>
                                            </div>
                                          </div>
                                          @php $firstCount++; @endphp
                                          @endif
                                        @endif
                                      @endforeach
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div
                                class="pendamic-progressbar-card light-green-bg"
                              >
                                <h3 class="heading card-green">
                                    @if(count($stateFeedbackData)>0)
                                    @php $sum3 = 0; $pq3count=0;@endphp
                                      @foreach($stateFeedbackData as $pq3feedback)
                                        @if($stateParticipationFinal->grade==$pq3feedback->grade)
                                          @if($pq3feedback->level=='pq3') 
                                            @php
                                              $sum3 =(isset($pq3feedback->avg)?$pq3feedback->avg:0)+$sum3;
                                              $pq3count++;
                                            @endphp
                                          @endif
                                        @endif
                                      @endforeach
                                    @endif

                                  <span>{{(count($stateFeedbackData)>0)?round($sum3/$pq3count):0}}%</span> Experienced obstacles to
                                  learning in pandemic
                                </h3>
                                <div class="pendamic-progressbar-list">
                                  <div class="row">
                                    @if(count($stateFeedbackData)>0)
                                      @php
                                      $secoundCount = 1;
                                        $arr3 = array('Measures to be taken for wellbeing of children and schoo','School reopening guidelines for teacher','Protocal for Covid Symptoms reporting');
                                      @endphp
                                      @foreach($stateFeedbackData as $k=>$pq3feedback)
                                        @php
                                          if($secoundCount==4)
                                          {
                                            $cls = "border-left";
                                            $cls2 = "border-top";
                                          }
                                          elseif($secoundCount==3)
                                          {
                                            $cls = "border-right";
                                            $cls2 = "border-top";
                                          }
                                          else
                                          {
                                            $cls = "";
                                            $cls2 = "";
                                          }
                                        @endphp
                                        @if($stateParticipationFinal->grade==$pq3feedback->grade)
                                          @if($pq3feedback->level=='pq3') 
                                            <div class="col-md-6 {{$cls}} {{$cls2}}">
                                              <div
                                                class="pendamic-progrssbar-content ptb-15"
                                              >
                                                <div class="container green-progress-bar">
                                                  <div class="progress-percent" data-percent="{{isset($pq3feedback->avg)?$pq3feedback->avg:0}}">
                                                    <div class="progress-inner">
                                                      <div class="progress-round"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <p class="title">
                                                  {{isset($pq3feedback->question_desc)?$pq3feedback->question_desc:0}}
                                                </p>
                                              </div>
                                            </div>
                                            @php $secoundCount++; @endphp
                                          @endif
                                        @endif
                                      @endforeach
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg6">
                    <div class="reportview-footer">
                      <span class="page-no">6</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 6 ends ------------------------>
    <!------------------------ page 7 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="reportview-class-content p-3 white-bg">
                    <div class="row pb-100">
                      <div class="col-md-12">
                        <h4
                          class="performance-heading heading-black-bold text-28 text-center p-4"
                        >
                          Performance of the District in Learning Outcomes (LOs)
                        </h4>
                      </div>
                      <div class="col-md-12 mb-3 mt-4">
                        @php
                        $gradeVal = [$stateParticipationFinal->grade];
                        @endphp
                        @if(count($gradeVal))
                        @foreach($gradeVal as $grade)
                        <div class="state-performance-table">
                          <h4 class="fw-bold text-center">
                            Class {{$grade}}
                          </h4>
                          <table
                            class="table table-bordered align-middle text-center"
                          >
                            <thead>
                              <tr class="dark-blue-bg text-white">
                                <th scope="col">LO Code</th>
                                <th scope="col" class="">
                                  Learning Outcomes for Class {{$grade}}
                                </th>
                                <th scope="col">State Average Performance</th>
                                <th scope="col">National Average Performance</th>
                              </tr>
                            </thead>
                              <tbody>
                                @if(count($stateLOData)>0)
                                @php $m=1;@endphp
                                  @foreach($stateLOData as $mathLO)
                                    @if($grade==$mathLO->grade)
                                      @if($mathLO->language=='math')
                                      @if($m==1)
                                        <tr class="card-pink text-white">
                                          <td class="text" colspan="5">
                                            <img
                                              src="https://nas21.inroad.in/report-pdf/assets/images/maths-icon.png"
                                              alt=""
                                            />
                                            Mathematics
                                          </td>
                                        </tr>
                                      @endif
                                      <tr class={{(($m)%2==0)?'"card-light-pink"':''}}>
                                        <th scope="row">{{isset($mathLO->subject_code)?$mathLO->subject_code:'-'}}</th>
                                        <td class="text-sm-start">
                                          {{($mathLO->question!=''&&$mathLO->question!=0)?$mathLO->question:'-'}}
                                        </td>
                                        <td>{{isset($mathLO->state_avg)?$mathLO->state_avg:'-'}}</td>
                                        <td>{{isset($mathLO->national_avg)?$mathLO->national_avg:'-'}}</td>
                                      </tr>
                                      @php $m++;@endphp
                                      @endif
                                    @endif
                                  @endforeach
                                @endif

                                @if(count($stateLOData)>0)
                                @php $l=1;@endphp
                                  @foreach($stateLOData as $languageLO)
                                    @if($grade==$languageLO->grade)
                                      @if($languageLO->language=='language')
                                      @if($l==1)
                                        <tr class="card-blue text-white">
                                          <td class="text" colspan="5">
                                            <img
                                              src="https://nas21.inroad.in/report-pdf/assets/images/language-icon.png"
                                              alt="" style="width: 35px;height: 30px;"
                                            />
                                            Language
                                          </td>
                                        </tr>
                                      @endif
                                      <tr class={{(($l)%2==0)?'"card-light-pink"':''}}>
                                        <th scope="row">{{isset($languageLO->subject_code)?$languageLO->subject_code:'-'}}</th>
                                        <td class="text-sm-start">
                                          {{($languageLO->question!=''&&$languageLO->question!=0)?$languageLO->question:'-'}}
                                        </td>
                                        <td>{{isset($languageLO->state_avg)?$languageLO->state_avg:'-'}}</td>
                                        <td>{{isset($languageLO->national_avg)?$languageLO->national_avg:'-'}}</td>
                                      </tr>
                                      @php $l++;@endphp
                                      @endif
                                    @endif
                                  @endforeach
                                @endif

                                @if(count($stateLOData)>0)
                                @php $e=1;@endphp
                                  @foreach($stateLOData as $evsLO)
                                    @if($grade==$evsLO->grade)
                                      @if($evsLO->language=='evs')
                                      @if($e==1)
                                        <tr class="card-yellow text-white">
                                          <td class="text" colspan="5">
                                            <img
                                              src="https://nas21.inroad.in/report-pdf/assets/images/evs-icon.png"
                                              alt=""
                                            />
                                            EVS
                                          </td>
                                        </tr>
                                      @endif
                                      <tr class={{(($e)%2==0)?'"light-yellow-bg"':''}}>
                                        <th scope="row">{{isset($evsLO->subject_code)?$evsLO->subject_code:'-'}}</th>
                                        <td class="text-sm-start">
                                          {{($evsLO->question!=''&&$evsLO->question!=0)?$evsLO->question:'-'}}
                                        </td>
                                        <td>{{isset($evsLO->state_avg)?$evsLO->state_avg:'-'}}</td>
                                        <td>{{isset($evsLO->national_avg)?$evsLO->national_avg:'-'}}</td>
                                      </tr>
                                      @php $e++;@endphp
                                      @endif
                                    @endif
                                  @endforeach
                                @endif
                                @if(count($stateLOData)>0)
                                @php $s=1;@endphp
                                  @foreach($stateLOData as $sciLO)
                                    @if($grade==$sciLO->grade)
                                      @if($sciLO->language=='sci')
                                      @if($s==1)
                                        <tr class="card-sagegreen text-white">
                                          <td class="text" colspan="5">
                                            <img
                                              src="https://nas21.inroad.in/report-pdf/assets/images/science-icon.png"
                                              alt=""
                                            />
                                            Science
                                          </td>
                                        </tr>
                                      @endif
                                      <tr class={{(($s)%2==0)?'"light-yellow-bg"':''}}>
                                        <th scope="row">{{isset($sciLO->subject_code)?$sciLO->subject_code:'-'}}</th>
                                        <td class="text-sm-start">
                                          {{($sciLO->question!=''&&$sciLO->question!=0)?$sciLO->question:'-'}}
                                        </td>
                                        <td>{{isset($sciLO->state_avg)?$sciLO->state_avg:'-'}}</td>
                                        <td>{{isset($sciLO->national_avg)?$sciLO->national_avg:'-'}}</td>
                                      </tr>
                                      @php $s++;@endphp
                                      @endif
                                    @endif
                                  @endforeach
                                @endif
                                @if(count($stateLOData)>0)
                                @php $sst=1;@endphp
                                  @foreach($stateLOData as $sstLO)
                                    @if($grade==$sstLO->grade)
                                      @if($sstLO->language=='sst')
                                      @if($sst==1)
                                        <tr class="card-green text-white">
                                          <td class="text" colspan="5">
                                            <img
                                              src="https://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png"
                                              alt=""
                                            />
                                            Social Science
                                          </td>
                                        </tr>
                                      @endif
                                      <tr class={{(($sst)%2==0)?'"light-yellow-bg"':''}}>
                                        <th scope="row">{{isset($sstLO->subject_code)?$sstLO->subject_code:'-'}}</th>
                                        <td class="text-sm-start">
                                          {{($sstLO->question!=''&&$sstLO->question!=0)?$sstLO->question:'-'}}
                                        </td>
                                        <td>{{isset($sstLO->state_avg)?$sstLO->state_avg:'-'}}</td>
                                        <td>{{isset($sstLO->national_avg)?$sstLO->national_avg:'-'}}</td>
                                      </tr>
                                      @php $sst++;@endphp
                                      @endif
                                    @endif
                                  @endforeach
                                @endif
                                @if(count($stateLOData)>0)
                                @php $mil=1;@endphp
                                  @foreach($stateLOData as $milLO)
                                    @if($grade==$milLO->grade)
                                      @if($milLO->language=='mil')
                                      @if($mil==1)
                                        <tr class="card-red text-white">
                                          <td class="text" colspan="5">
                                            <img
                                              src="https://nas21.inroad.in/report-pdf/assets/images/mil-icon.png"
                                              alt=""
                                            />
                                            MIL
                                          </td>
                                        </tr>
                                      @endif
                                      <tr class={{(($mil)%2==0)?'"light-yellow-bg"':''}}>
                                        <th scope="row">{{isset($milLO->subject_code)?$milLO->subject_code:'-'}}</th>
                                        <td class="text-sm-start">
                                          {{($milLO->question!=''&&$milLO->question!=0)?$milLO->question:'-'}}
                                        </td>
                                        <td>{{isset($milLO->state_avg)?$milLO->state_avg:'-'}}</td>
                                        <td>{{isset($milLO->national_avg)?$milLO->national_avg:'-'}}</td>
                                      </tr>
                                      @php $mil++;@endphp
                                      @endif
                                    @endif
                                  @endforeach
                                @endif
                                @if(count($stateLOData)>0)
                                @php $eng=1;@endphp
                                  @foreach($stateLOData as $engLO)
                                    @if($grade==$engLO->grade)
                                      @if($engLO->language=='eng')
                                      @if($eng==1)
                                        <tr class="card-purple text-white">
                                          <td class="text" colspan="5">
                                            <img
                                              src="https://nas21.inroad.in/report-pdf/assets/images/english-icon.png"
                                              alt=""
                                            />
                                            English
                                          </td>
                                        </tr>
                                      @endif
                                      <tr class={{(($eng)%2==0)?'"light-yellow-bg"':''}}>
                                        <th scope="row">{{isset($engLO->subject_code)?$engLO->subject_code:'-'}}</th>
                                        <td class="text-sm-start">
                                          {{($engLO->question!=''&&$engLO->question!=0)?$engLO->question:'-'}}
                                        </td>
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
                        @endforeach
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg7">
                    <div class="reportview-footer">
                      <span class="page-no">7</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 7 ends ------------------------>
    @include('statepdf.sixthgraph')
    @endforeach
    @endif

    <!------------------------ page 8 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container mb-0">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="reportview-class-content p-0 white-bg">
                    <div class="row">
                      <div class="col-md-12">
                        <h4
                          class="performance-heading text-28 fw-bold text-center px-4 pt-3"
                        >
                          Average Performance of the Districts
                        </h4>
                      </div>
                      <div class="col-md-12">
                        <div class="sc10-achievement-wrap">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="achievement-content">
                                <div class="category-wrap">
                                  <div class="category-list col-md-3">
                                    <ul>
                                      <li>
                                        <div class="category-item">
                                          <span class="dark-blue">A</span> Rural -
                                          Urban
                                        </div>
                                      </li>
                                      <li>
                                        <div class="category-item">
                                          <span class="dark-blue">B</span>Govt. -
                                          Govt. Aided
                                        </div>
                                      </li>
                                      <li>
                                        <div class="category-item">
                                          <span class="dark-blue">C</span>Govt. -
                                          Private
                                        </div>
                                      </li>
                                      <li>
                                        <div class="category-item">
                                          <span class="dark-blue">D</span>Govt. -
                                          Central Govt.
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="category-status col-md-3">
                                    <ul>
                                      <li>
                                        <div class="category-item">
                                          <span class="card-green"></span>
                                          Positive Difference
                                        </div>
                                      </li>
                                      <li>
                                        <div class="category-item">
                                          <span class="card-red"></span>
                                          Negative Difference
                                        </div>
                                      </li>
                                      <li>
                                        <div class="category-item">
                                          <span class="card-grey"></span>
                                          Differance is not Significant
                                        </div>
                                      </li>
                                      <li>
                                        <div class="category-item">
                                          <span class="card-sagegreen"></span>
                                          Missing Value
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12 mb-4 state-table">
                              <!-- table 1 -->
                              <div class="card ach-card border-0 mb-2">
                                <div class="ach-table">
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th class="bg-white" colspan="2"></th>
                                        <th class="dark-blue">
                                          <span class="category-item">A</span>
                                        </th>
                                        <th class="dark-blue">
                                          <span class="category-item">B</span>
                                        </th>
                                        <th class="dark-blue">
                                          <span class="category-item">C</span>
                                        </th>
                                        <th class="dark-blue">
                                          <span class="category-item">D</span>
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th
                                          class="dark-blue text-white align-middle"
                                          colspan="1"
                                          rowspan="4"
                                        >
                                          Socio-Economic Status
                                        </th>
                                        <td class="border-class">
                                          Parents Occupational Status
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td class="card-status card-green"></td>
                                      </tr>
                                      <tr>
                                        <td>Number of Siblings</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>How to comute school</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-grey"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Digital Devices</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- table 2 -->
                              <div class="card ach-card border-0 mb-2">
                                <div class="ach-table">
                                  <table class="table">
                                    <thead></thead>
                                    <tbody>
                                      <tr>
                                        <th
                                          class="dark-blue text-white align-middle"
                                          colspan="1"
                                          rowspan="6"
                                        >
                                          School Activities
                                        </th>
                                        <td class="border-class">
                                          Science Exibhition
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td class="card-status card-green"></td>
                                      </tr>
                                      <tr>
                                        <td>Art Clubs / Art activities</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Sports Activities</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-grey"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Cultural Activities</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Cultural Activities School Fair
                                          Activities
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>Literacy / Reading Activities</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- table 3 -->
                              <div class="card ach-card border-0 mb-2">
                                <div class="ach-table">
                                  <table class="table">
                                    <thead></thead>
                                    <tbody>
                                      <tr>
                                        <th
                                          class="dark-blue text-white align-middle"
                                          colspan="1"
                                          rowspan="6"
                                        >
                                          School Infrastructure
                                        </th>
                                        <td class="border-class">
                                          Library resources relevant to subject
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td class="card-status card-green"></td>
                                      </tr>
                                      <tr>
                                        <td>Internet Connectivity</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Electricity</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-grey"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Toilet Facility</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>Drinking Water Facility</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>Hand wash Facilities</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- table 4 -->
                              <div class="card ach-card border-0 mb-2">
                                <div class="ach-table">
                                  <table class="table">
                                    <thead></thead>
                                    <tbody>
                                      <tr>
                                        <th
                                          class="dark-blue text-white align-middle"
                                          colspan="1"
                                          rowspan="6"
                                        >
                                          Avalibility of School Resources
                                        </th>
                                        <td class="border-class">
                                          Qualified Teaching Staff
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td class="card-status card-green"></td>
                                      </tr>
                                      <tr>
                                        <td>Qualified Supporting Staff</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Instructional Material</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-grey"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Audio-visual Resources</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>Learning Outcome Resources</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>Laboratory Resourcesy</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- table 5 -->
                              <div class="card ach-card border-0 mb-2">
                                <div class="ach-table">
                                  <table class="table">
                                    <thead></thead>
                                    <tbody>
                                      <tr>
                                        <th
                                          class="dark-blue text-white align-middle"
                                          colspan="1"
                                          rowspan="6"
                                        >
                                          Padagogical Practices
                                        </th>
                                        <td class="border-class">
                                          Students engagement in a discussion
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td class="card-status card-green"></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Students practicing reading individually
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Student’s asking questions during
                                          lessons
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-grey"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                      </tr>
                                      <tr>
                                        <td>Peer interactions</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>ICT supported activities</td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Reading other material addition to
                                          textbooksy
                                        </td>
                                        <td class="card-status card-green"></td>
                                        <td class="card-status card-red"></td>
                                        <td
                                          class="card-status card-sagegreen"
                                        ></td>
                                        <td class="card-status card-grey"></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="report-footer-wrap pg8">
                    <div class="reportview-footer">
                      <span class="page-no">8</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 8 ends ------------------------>
    
    <!----------------------------------------- state report card ends ----------------------------------------->




  <script type="text/javascript">
  $(".progress-percent").each(function() {
    var $this = $(this),
    $dataV = $this.data("percent"),
    $dataDeg = $dataV * 3.6,
    $round = $this.find(".progress-round");
    $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)"); 
    $this.append('<div class="progress-inbox"><span class="percent_text"></span></div>');
    $this.prop('Counter', 0).animate({Counter: $dataV},
    {
      duration: 2000, 
      easing: 'swing', 
      step: function (now) {
        $this.find(".percent_text").text(Math.ceil(now)+"%");
        }
      });
    if($dataV >= 51){
      $round.css("transform", "rotate(" + 360 + "deg)");
      setTimeout(function(){
        $this.addClass("percent_more");
      },1000);
      setTimeout(function(){
        $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
      },1000);
    } 
  });
  </script>
  </body>
</html>
