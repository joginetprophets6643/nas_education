<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="http://nas21.inroad.in/report-pdf/assets/scss/bootstrap.min.css" rel="stylesheet" />
    <link  href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"  rel="stylesheet" />
    <link  href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
    <!-- Material Icons -->
    <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/material-icons.css" />
    <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/style.css" />
    <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/pdf.css" />
    <title>NAS| National PDF</title>
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
    <script src="http://nas21.inroad.in/assets/front/js/highmaps.js"></script>
    <script src="http://nas21.inroad.in/assets/front/js/in-all-disputed.js"></script>

        <!-- Highcharts JS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
  </head>
  <body class="p-0">

    <!------------------------ page 1 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container">
                <div class="reportview-content-wrap national-heading">
                  <img src="http://nas21.inroad.in/report-pdf/assets/images/national-header-img.png" alt="img" class="img-fluid" />
                  <div class="heading-img-wrap text-white fw-bold">
                    <img src="http://nas21.inroad.in/report-pdf/assets/images/moe-white.png" alt="img" class="img-fluid" />
                  </div>
                  <div class="heading-wrap text-white fw-bold">
                    <h2>
                      NATIONAL<br />
                      ACHIEVEMENT<br />
                      SURVEY
                    </h2>
                    <p>NATIONAL REPORT NAS 2022-23<br />
                    CLASS III, V, VIII & X</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 1 ends ------------------------>

    <!------------------------ page 2 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container highlights-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
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
                                src="http://nas21.inroad.in/report-pdf/assets/images/area-icon.png"
                                alt="area-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($nationalData->total_district_area)&&$nationalData->total_district_area!=''?$nationalData->total_district_area:'0'}}</span>
                                million km<sup>2</sup>
                              </h5>
                              <p>Area of the Nation</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="http://nas21.inroad.in/report-pdf/assets/images/population-icon.png"
                                alt="population-icon"
                                width="58"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($nationalData->total_population)&&$nationalData->total_population!=''?$nationalData->total_population:'0'}}</span>
                              </h5>
                              <p>Population</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="http://nas21.inroad.in/report-pdf/assets/images/density-icon.png"
                                alt="density-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($nationalData->density_of_population)&&$nationalData->density_of_population!=''?$nationalData->density_of_population:'0'}}</span>
                                per km<sup>2</sup>
                              </h5>
                              <p>Density of population in Nation</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="http://nas21.inroad.in/report-pdf/assets/images/literacy-icon.png"
                                alt="area-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($nationalData->literacy_rate)&&$nationalData->literacy_rate!=''?$nationalData->literacy_rate:'0'}}%</span>
                              </h5>
                              <p>Literacy Rate</p>
                            </div>
                            <div class="img-wrapper">
                              <img
                                src="http://nas21.inroad.in/report-pdf/assets/images/child-sex-ratio-icon.png"
                                alt="area-icon"
                                width="43"
                              />
                              <h5 class="mb-0">
                                <span>{{isset($nationalData->child_sex_ratio)&&$nationalData->child_sex_ratio!=''?$nationalData->child_sex_ratio:'0'}}</span>
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
                                src="http://nas21.inroad.in/report-pdf/assets/images/school.png"
                                alt="school"
                              />
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-4">
                            <h1>1272</h1>
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
                                src="http://nas21.inroad.in/report-pdf/assets/images/teacher.png"
                                alt="school"
                              />
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-4">
                            <h1>5143</h1>
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
                                src="http://nas21.inroad.in/report-pdf/assets/images/students.png"
                                alt="school"
                              />
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <h1>31471</h1>
                          </div>
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
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 2 ends ------------------------>

    <!------------------------ page 3 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container ap-graph-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="ptb-30 white-bg">
                    <div class="row">
                      <div class="col-md-12 mtb-30">
                        <h3 class="text-center heading-black-main">
                          Average Performance of Students
                        </h3>
                      </div>  
                    </div>
                    <div class="row justify-content-center pb-60">
                    @if(count($nationalPerformance)>0)
                      @foreach($nationalPerformance as $avgPerformance)
                        @php 
                          $dataArr = json_decode($avgPerformance->data,true);
                        @endphp
                        <div class="col-md-12 mtb-30">
                            <div class="nac-lo-classtitle-wrap">
                                <h2 class="nac-lo-classtitle title-blue">
                                    CLASS {{$avgPerformance->grade}}
                                </h2>
                            </div>
                        </div>
                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5 ||$avgPerformance->grade==8)
                          <div class="col-md-2 p-0">
                            <div class="graph-wrap">
                              <figure class="highcharts-figure">
                                <div id="nc{{$avgPerformance->grade}}-ap-language"></div>
                                <div class="category text-center card-blue">
                                  <span class="text-white">Language</span>
                                </div>
                              </figure>
                            </div>
                          </div>
                        @endif
                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5 || $avgPerformance->grade==8 ||$avgPerformance->grade==10)
                          <div class="col-md-2 p-0">
                            <div class="graph-wrap">
                              <figure class="highcharts-figure">
                                <div id="nc{{$avgPerformance->grade}}-ap-math"></div>
                                <div class="category text-center card-pink">
                                  <span class="text-white">Mathematics</span>
                                </div>
                              </figure>
                            </div>
                          </div>
                        @endif
                        @if($avgPerformance->grade==3 || $avgPerformance->grade==5)
                          <div class="col-md-2 p-0">
                            <div class="graph-wrap">
                              <figure class="highcharts-figure">
                                <div id="nc{{$avgPerformance->grade}}-ap-evs"></div>
                                <div class="category text-center card-yellow">
                                  <span class="text-white">EVS</span>
                                </div>
                              </figure>
                            </div>
                          </div>
                        @endif
                              <!-- added -->
                        @if($avgPerformance->grade==8 ||$avgPerformance->grade==10)
                          <div class="col-md-2 p-0">
                            <div class="graph-wrap">
                              <figure class="highcharts-figure">
                                <div id="nc{{$avgPerformance->grade}}-ap-sci"></div>
                                <div class="category text-center card-sagegreen">
                                  <span class="text-white">Science</span>
                                </div>
                              </figure>
                            </div>
                          </div>
                        @endif
                        @if($avgPerformance->grade==8 ||$avgPerformance->grade==10)
                          <div class="col-md-2 p-0">
                            <div class="graph-wrap">
                              <figure class="highcharts-figure">
                                <div id="nc{{$avgPerformance->grade}}-ap-socialsci"></div>
                                <div class="category text-center card-green">
                                  <span class="text-white">Social Science</span>
                                </div>
                              </figure>
                            </div>
                          </div>
                        @endif
                        @if($avgPerformance->grade==10)
                          <div class="col-md-2 p-0">
                            <div class="graph-wrap">
                              <figure class="highcharts-figure">
                                <div id="nc{{$avgPerformance->grade}}-ap-mil"></div>
                                <div class="category text-center card-red">
                                  <span class="text-white">MIL</span>
                                </div>
                              </figure>
                            </div>
                          </div>
                        @endif
                        @if($avgPerformance->grade==10)
                          <div class="col-md-2 p-0">
                            <div class="graph-wrap">
                              <figure class="highcharts-figure">
                                <div id="nc{{$avgPerformance->grade}}-ap-english"></div>
                                <div class="category text-center card-purple">
                                  <span class="text-white">English</span>
                                </div>
                              </figure>
                            </div>
                          </div>
                        @endif
                        @include('nationalpdf.firstgraph')
                      @endforeach
                    @endif
                    </div>
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">3</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 3 ends ------------------------>

    <!------------------------ page 4 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container sample-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 white-bg">
                    <div class="row">
                      <div class="col-md-12 mtb-30">
                        <h3 class="text-center heading-black-main">
                          Profile of sampled students at the National level
                        </h3>
                      </div>
                    </div>
                    <div class="row justify-content-center mb-60">
                      <div class="col-md-12 mtb-15">
                        <h2 class="title-black-main">
                          Educational status of mother
                        </h2>
                      </div>
                      @if(count($nationalFeedbackDatasq)>0)
                        @foreach($nationalFeedbackDatasq as $nationalSQ)
                          <div class="col-md-3 mtb-15">
                            <div class="container pink-progress-bar-lg-txt">
                              <div class="progress-percent progress-percent-text" data-percent="{{$nationalSQ->avg}}" data-txt="{{$nationalSQ->question_desc}}">
                                <div class="progress-inner">
                                  <div class="progress-round"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      @endif
                    </div>
                    <div class="row justify-content-center mb-60">
                      <div class="col-md-12 mtb-15">
                        <h2 class="title-black-main">
                          How students commute to school
                        </h2>
                      </div>
                      @if(count($nationalFeedbackDatasqn1)>0)
                        @foreach($nationalFeedbackDatasqn1 as  $nationalsqn1)
                          <div class="col-md-4 mtb-15">
                            <div class="teacher-fbcard light-pink-bg">
                              <div class="progressbar-line progressbar-pink">
                                <!--  -->
                                <div class="progress-container pink-progress-container">
                                  <div
                                    class="line-progress-bar"
                                    data-width="{{$nationalsqn1->avg}}%"
                                  ></div>
                                </div>
                                <!--  -->
                                <p>{{$nationalsqn1->question_desc}}</p>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        @endif
                    </div>
                    <!--  -->
                    <div class="row justify-content-center mb-60">
                      @if(count($nationalFeedbackDatasqn2)>0)
                        @foreach($nationalFeedbackDatasqn2 as $nationalsqn2)
                          <div class="col-lg-3 mtb-15">
                            <div class="student-fbcard light-pink-bg">
                              <div class="container text-center pink-progress-bar-sm">
                                <div class="progress-percent" data-percent="{{$nationalsqn2->avg}}">
                                  <div class="progress-inner">
                                    <div class="progress-round"></div>
                                  </div>
                                </div>
                              </div>
                              <p class="title">{{$nationalsqn2->question_desc}}</p>
                            </div>
                          </div>
                          @endforeach
                        @endif

                    </div>
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">4</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 4 ends ------------------------>

    <!------------------------ page 5 starts ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container sample-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 white-bg">
                    <div class="row">
                      <div class="col-md-12 mtb-30">
                        <h3 class="text-center heading-black-main">
                          Profile of sampled teachers at the National level
                        </h3>
                      </div>
                    </div>
                    <div class="row justify-content-center mb-60">
                      @if(count($nationalFeedbackDatatq)>0)
                        @foreach($nationalFeedbackDatatq as  $nationaltq)
                          <div class="col-md-4 mtb-15">
                            <div class="teacher-fbcard light-green-bg">
                              <div class="progressbar-line progressbar-green">
                                <!--  -->
                                <div class="progress-container green-progress-container">
                                  <div
                                    class="line-progress-bar"
                                    data-width="{{$nationaltq->avg}}%"
                                  ></div>
                                </div>
                                <!--  -->
                                <p>{{$nationaltq->question_desc}}</p>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        @endif
                    </div>
                    <div class="row justify-content-center mb-60">
                      <div class="col-md-12 mtb-15">
                        <h2 class="title-black-main">
                          Percentage of teacher doing the following activities
                          in school
                        </h2>
                      </div>
                      @if(count($nationalFeedbackDatatqn)>0)
                        @foreach($nationalFeedbackDatatqn as $nationalTQN)
                          <div class="col-md-3 mtb-15">
                            <div class="container text-center green-progress-bar-lg-txt">
                                <div class="progress-percent progress-percent-text" data-percent="{{$nationalTQN->avg}}" data-txt="{{$nationalTQN->question_desc}}">
                                  <div class="progress-inner">
                                    <div class="progress-round"></div>
                                  </div>
                                </div>
                              </div>
                            <!-- <p>Student self assessment</p> -->
                          </div>
                        @endforeach
                      @endif

                    </div>
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">5</span>
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
              <div class="reportview-container sample-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 white-bg">
                    <div class="row">
                      <div class="col-md-12 mtb-30">
                        <h3 class="text-center heading-black-main">
                          Profile of sampled schools at the National level
                        </h3>
                      </div>
                    </div>
                    <div class="row justify-content-center mb-60">
                    @if(count($nationalFeedbackDatapq)>0)
                      @foreach($nationalFeedbackDatapq as $nationalPQ)
                        <div class="col-lg-3 mtb-15">
                          <div class="student-fbcard light-blue-bg">
                            <div class="container text-center blue-progress-bar-sm">
                              <div class="progress-percent" data-percent="{{$nationalPQ->avg}}">
                                <div class="progress-inner">
                                  <div class="progress-round"></div>
                                </div>
                              </div>
                            </div>
                            <p class="title">
                              {{$nationalPQ->question_desc}}
                            </p>
                          </div>
                        </div>
                      @endforeach
                    @endif

                    </div>
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">6</span>
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
              <div class="reportview-container nrc-pendamic-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 white-bg">
                    <div class="row">
                      <div class="col-md-12 mtb-30">
                        <div class="virus-icon-top">
                          <div class="virus-icon1">
                            <img
                              src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                              alt="virus"
                              class="img-fluid"
                            />
                          </div>
                          <div class="virus-icon2">
                            <img
                              src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                              alt="virus"
                              class="img-fluid"
                            />
                          </div>
                          <div class="virus-icon3">
                            <img
                              src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                              alt="virus"
                              class="img-fluid"
                            />
                          </div>
                          <div class="virus-icon4">
                            <img
                              src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                              alt="virus"
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <h3 class="text-center heading-black-main">
                          Learning at home during the pandemic
                        </h3>
                      </div>
                    </div>
                    <div class="pendamic-progessbar-wrap mtb-60">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="pendamic-progressbar-card light-pink-bg mtb-60"
                          >
                            <div class="pendamic-progressbar-list">
                              <div class="row align-items-center mtb-60">
                                <div class="col-md-6">
                                  <div class="row align-items-center">
                                    @if(count($nationalFeedbackDatapq2)>0)
                                      @php
                                        $firstCount = 1;
                                      @endphp
                                      @foreach($nationalFeedbackDatapq2 as $nationalpq2)
                                        @php
                                          if($firstCount==4)
                                          {
                                            $cls = "border-left";
                                            $cls2 = "";
                                          }
                                          elseif($firstCount==3)
                                          {
                                            $cls = "";
                                            $cls2 = "";
                                          }
                                          else
                                          {
                                            $cls = "";
                                            $cls2 = "border-bottom";
                                          }
                                        @endphp

                                        <div class="col-md-6 {{$cls}} {{$cls2}}">
                                          <div class="pendamic-progrssbar-content ptb-15"
                                          >
                                            <div class="container text-center pink-progress-bar">
                                              <div class="progress-percent" data-percent="{{$nationalpq2->avg}}">
                                                <div class="progress-inner">
                                                  <div class="progress-round"></div>
                                                </div>
                                              </div>
                                            </div>
                                            <p class="title">
                                              {{$nationalpq2->question_desc}}
                                            </p>
                                          </div>
                                        </div>
                                        @php $firstCount++; @endphp
                                      @endforeach
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="row align-items-center">
                                    @if(count($nationalFeedbackDatapq3)>0)
                                      @php
                                        $firstCount3 = 1;
                                      @endphp
                                      @foreach($nationalFeedbackDatapq3 as $nationalpq3)
                                        @php
                                          if($firstCount3==4)
                                          {
                                            $cls = "border-left";
                                            $cls2 = "";
                                          }
                                          elseif($firstCount3==3)
                                          {
                                            $cls = "border-right";
                                            $cls2 = "";
                                          }
                                          else
                                          {
                                            $cls = "";
                                            $cls2 = "border-bottom";
                                          }
                                        @endphp
                                          <div class="col-md-6  {{$cls}} {{$cls2}}">
                                            <div class="pendamic-progrssbar-content ptb-15"
                                            >
                                              <div class="container text-center pink-progress-bar">
                                                <div class="progress-percent" data-percent="{{$nationalpq3->avg}}">
                                                  <div class="progress-inner">
                                                    <div class="progress-round"></div>
                                                  </div>
                                                </div>
                                              </div>
                                              <p class="title">
                                                {{$nationalpq3->question_desc}}
                                              </p>
                                            </div>
                                          </div>
                                        @php $firstCount3++; @endphp
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
                    <div class="virus-icon-bottom">
                      <div class="virus-icon1">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon2">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon3">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon4">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon5">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon6">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon7">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus-pink.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">7</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 7 ends ------------------------>
    <!------------ Class 3 Performance Subject Wise Start -------------->
    <!------------------ page 8 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12 mtb-30">
                        <h3 class="text-center heading-black-main">
                          GLIMPSES OF NAS RESULTS
                        </h3>
                      </div>  
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational3LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 8 ends ------------------------>

    <!--------------------- page 9 starts (Math)------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-pink">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational3MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/math-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">9</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 9 ends ------------------------>

    <!--------------------- page 10 starts(Evs) -------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-yellow">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="img" class="img-fluid" /> 
                                  EVS
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational3EvsBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 10 ends ------------------------>
    <!------------ Class 3 Performance Subject Wise End -------------->

    <!------------ Class 5 Performance Subject Wise Start -------------->
    <!------------------ page 11 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational5LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 11 ends ------------------------>

    <!--------------------- page 12 starts (Math)------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-pink">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational5MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/math-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">9</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 12 ends ------------------------>

    <!--------------------- page 13 starts(Evs) -------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-yellow">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="img" class="img-fluid" /> 
                                  EVS
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational5EvsBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 13 ends ------------------------>
    <!------------ Class 5 Performance Subject Wise End -------------->
    <!------------ Class 8 Performance Subject Wise Start -------------->
    <!------------------ page 14 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational8LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 14 ends ------------------------>
    <!------------------------ page 15 starts(SST) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-green">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="img" class="img-fluid" /> 
                                  Social Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational8SocialBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 15 ends ------------------------>
    <!------------------------ page 16 starts(SCI) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-sagegreen">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="img" class="img-fluid" /> 
                                  Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational8ScienceBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 16 ends ------------------------>
    <!------------------------ page 17 starts(Math) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational8MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 17 ends ------------------------>    
    <!------------ Class 8 Performance Subject Wise End -------------->
    <!------------ Class 10 Performance Subject Wise Start -------------->
    <!------------------------ page 18 starts (MIL)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-red">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/mil-icon.png" alt="img" class="img-fluid" /> 
                                  MIL
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational10MilBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">11</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 18 ends ------------------------>
    <!------------------------ page 19 starts(SST) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-green">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="img" class="img-fluid" /> 
                                  Social Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational10SocialBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 19 ends ------------------------>
    <!------------------------ page 20 starts (SCI)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-sagegreen">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="img" class="img-fluid" /> 
                                  Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational10ScienceBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 20 ends ------------------------>

    <!------------------------ page 21 starts (ENG)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-purple">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/english-icon.png" alt="img" class="img-fluid" /> 
                                  English
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational10EnglishBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 21 ends ------------------------>
    <!------------------------ page 22 starts(Math) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="CardsNational10MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 22 ends ------------------------>  
    <!------------ Class 10 Performance Subject Wise End -------------->


    <!------------ Class 3 Performance by Gender Subject Wise Start -------------->
    <!------------------ page 23 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational3LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 23 ends ------------------------>

    <!--------------------- page 24 starts (Math)------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-pink">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational3MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/math-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">9</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 24 ends ------------------------>

    <!--------------------- page 25 starts(Evs) -------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-yellow">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="img" class="img-fluid" /> 
                                  EVS
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational3EvsBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 25 ends ------------------------>
    <!------------ Class 3 Performance by Gender Subject Wise End -------------->

    <!------------ Class 5 Performance by Gender Subject Wise Start -------------->
    <!------------------ page 26 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational5LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 26 ends ------------------------>

    <!--------------------- page 27 starts (Math)------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-pink">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational5MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/math-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">9</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 27 ends ------------------------>

    <!--------------------- page 28 starts(Evs) -------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-yellow">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="img" class="img-fluid" /> 
                                  EVS
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational5EvsBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 28 ends ------------------------>
    <!------------ Class 5 Performance by Gender Subject Wise End -------------->
    <!------------ Class 8 Performance by Gender Subject Wise Start -------------->
    <!------------------ page 29 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational8LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 29 ends ------------------------>
    <!------------------------ page 30 starts(SST) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-green">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="img" class="img-fluid" /> 
                                  Social Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational8SocialBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 30 ends ------------------------>
    <!------------------------ page 31 starts(SCI) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-sagegreen">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="img" class="img-fluid" /> 
                                  Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational8ScienceBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 31 ends ------------------------>
    <!------------------------ page 32 starts(Math) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational8MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 32 ends ------------------------>    
    <!------------ Class 8 Performance by Gender Subject Wise End -------------->
    <!------------ Class 10 Performance by Gender Subject Wise Start -------------->
    <!------------------------ page 33 starts (MIL)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-red">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/mil-icon.png" alt="img" class="img-fluid" /> 
                                  MIL
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational10MilBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">11</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 33 ends ------------------------>
    <!------------------------ page 34 starts(SST) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-green">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="img" class="img-fluid" /> 
                                  Social Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational10SocialBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 34 ends ------------------------>
    <!------------------------ page 35 starts (SCI)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-sagegreen">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="img" class="img-fluid" /> 
                                  Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational10ScienceBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 35 ends ------------------------>

    <!------------------------ page 36 starts (ENG)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-purple">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/english-icon.png" alt="img" class="img-fluid" /> 
                                  English
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational10EnglishBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 36 ends ------------------------>
    <!------------------------ page 37 starts(Math) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Gender
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="GenderNational10MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 37 ends ------------------------>  
    <!------------ Class 10 Performance by Gender Subject Wise End -------------->


    <!------------ Class 3 Performance of States by Location Subject Wise Start -------------->
    <!------------------ page 38 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational3LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 38 ends ------------------------>

    <!--------------------- page 39 starts (Math)------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-pink">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational3MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/math-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">9</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 39 ends ------------------------>

    <!--------------------- page 40 starts(Evs) -------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 3</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-yellow">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="img" class="img-fluid" /> 
                                  EVS
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational3EvsBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 40 ends ------------------------>
    <!------------ Class 3 Performance of States by Location Subject Wise End -------------->

    <!------------ Class 5 Performance of States by Location Subject Wise Start -------------->
    <!------------------ page 41 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational5LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 41 ends ------------------------>

    <!--------------------- page 42 starts (Math)------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-pink">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational5MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/math-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">9</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 42 ends ------------------------>

    <!--------------------- page 43 starts(Evs) -------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 5</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-yellow">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="img" class="img-fluid" /> 
                                  EVS
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational5EvsBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 43 ends ------------------------>
    <!------------ Class 5 Performance of States by Location Subject Wise End -------------->
    <!------------ Class 8 Performance of States by Location Subject Wise Start -------------->
    <!------------------ page 44 starts (Language) --------------------->
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-blue">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-blue">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png" alt="img" class="img-fluid" /> 
                                  Language
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational8LanguageBarGraph_classall">
                              <!-- img src="http://nas21.inroad.in/report-pdf/assets/images/language-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>
  
                    
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 44 ends ------------------------>
    <!------------------------ page 45 starts(SST) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-green">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="img" class="img-fluid" /> 
                                  Social Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational8SocialBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 45 ends ------------------------>
    <!------------------------ page 46 starts(SCI) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-sagegreen">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="img" class="img-fluid" /> 
                                  Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational8ScienceBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 46 ends ------------------------>
    <!------------------------ page 47 starts(Math) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 8</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational8MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 47 ends ------------------------>    
    <!------------ Class 8 Performance of States by Location Subject Wise End -------------->
    <!------------ Class 10 Performance of States by Location Subject Wise Start -------------->
    <!------------------------ page 48 starts (MIL)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-red">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/mil-icon.png" alt="img" class="img-fluid" /> 
                                  MIL
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational10MilBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">11</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 48 ends ------------------------>
    <!------------------------ page 49 starts(SST) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-green">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png" alt="img" class="img-fluid" /> 
                                  Social Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational10SocialBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 49 ends ------------------------>
    <!------------------------ page 50 starts (SCI)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-sagegreen">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png" alt="img" class="img-fluid" /> 
                                  Science
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational10ScienceBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 50 ends ------------------------>

    <!------------------------ page 51 starts (ENG)------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-purple">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/english-icon.png" alt="img" class="img-fluid" /> 
                                  English
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational10EnglishBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 51 ends ------------------------>
    <!------------------------ page 52 starts(Math) ------------------------>
    <div class="page">
      <section class="reportview-wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="reportview-container nrc-map-container">
                <div class="reportview-class-wrap">
                  <!-- header -->
                  <div class="reportview-header">
                    <h2>National Report Card</h2>
                    <span class="class">CLASS 10</span>
                  </div>
                  <!-- content -->
                  <div class="p-30-60 light-yellow">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="subject-map-wrap">
                            <h2 class="subject-map-title">
                              Performance of States by Location
                            </h2>
                            <div class="subject-map-iconname">
                                <span class="col-md-4 card-pink">
                                  <img src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png" alt="img" class="img-fluid" /> 
                                  Mathematics
                                </span>
                            </div>
                            <div class="subject-map-graph mtb-30" id="LocationNational10MathBarGraph_classall">
                              <!-- <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-map.png" alt="img" class="img-fluid" /> -->
                            </div>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="reportview-footer">
                    <span class="page-no">10</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!------------------------ page 52 ends ------------------------>  
    <!------------ Class 10 Performance of States by Location Subject Wise End -------------->


    <script type="text/javascript">
      let classType = 'all';
      let class_subjects = {
        class_3:['Language','Evs','Math'],
        class_5:['Language','Evs','Math'],
        class_8:['Language','Science','Math','Social'],
        class_10:['Mil','Social','English','Science','Math'],
        class_all:['Mil','Social','English','Science','Math','Language','Evs']
      }
      let subjects_short_codes ={
        math:"math",
        evs:"evs",
        social:'sst',
        language:'language',
        mil:'mil',
        science:'sci',
        english:'eng'
      }

      let subjects_full_names ={
        math: "Mathematics",
        evs: "EVS",
        sst: "Social Science",
        language: "Language",
        mil: "Mil",
        sci:"Science",
        eng:"English"
      }

      $(document).ready(()=>{
        console.log('ok');
          $.ajax({
            type: "GET",
            url: 'http://nas21.inroad.in:8055/items/state_masters?limit-1&sort[]=state_name',
          }).done((response)=>{
             // createSidebarStates(response.data)
             sessionStorage.setItem('states',JSON.stringify(response.data))
          });

          $.ajax({
            type: "GET",
            url: 'http://nas21.inroad.in:8055/items/national_result_glimpses?limit-1',
          }).done((response)=>{
                response.data.forEach(glimpse=>{
                  createGlimpsesScreen([glimpse])
                })
          });
        });

      function createGlimpsesScreen(data){

        let graphs = []

        // sections for performance screen
        const sections = ['Cards','Location','Gender','Management']


        const data_b = data[0]

        // getting subjects for classes
        if(classType === 'all'){
        graphs = class_subjects['class_'+data_b.grade]
        }else{
        graphs = class_subjects['class_'+classType]
        }
        const category_data = JSON.parse(data_b.data)

        const colorCode = {
        language: ['#BAD4EC','#9EC2E4','#83B1DD','#6997C3'],
        evs: ['#E5E2AF','#DAD68F','#CFCB6F','#B6B156'],
        math: ['#F4BBCF','#F09FBB','#EB84A8','#D26A8E'],
        social:['#C7E1C0','#ABD3A1','#8FC481','#68A358'],
        science:['#B1DEDF','#8ACDCE','#63BDBE','#369B9D'],
        mil:['#F7C4C3','#F3A6A5','#EF8987','#D4605F'],
        english:['#E8C7E6','#DCACD9','#D190CD','#B168AD'],
        }

        const section_legends = {
        cards:["Substantially above National average", "Not substantially different from the National average" , "Substantially below National average"],
        gender:["No significant difference between Boys and Girls","Boys perform significantly better than Girls","Girls perform significantly better than Boys"],
        location:["No significant difference between Rural and Urban","Rural perform significantly better than Urban","Urban perform significantly better than Rural"],
        management:["No significant difference between Govt. and Govt. Aided","Govt. perform significantly better than Govt. Aided","Govt. Aided perform significantly better than Govt"],
        socialgroup:["No significant difference between Govt. and Govt. Aided","Govt. perform significantly better than Govt. Aided","Govt. Aided perform significantly better than Govt"],

        }
        sections.forEach(section=>{
        let where = ''
        graphs.forEach(sub=>{
            if(classType !== 'all'){
            where = section+'National' + sub +'BarGraph_class' +classType  
            }else{
            // if(section === 'Cards'){
            //     where = section+'National' + sub   +'BarGraph_class'+classType
            // }else{
                where = section+'National' + data[0].grade + sub   +'BarGraph_class'+classType
            // }
            }
            const section_data = category_data[subjects_short_codes[sub.toLowerCase()]][section.toLowerCase()]
            const required_colors = colorCode[sub.toLowerCase()]
            generateGlimpsesMap(where,required_colors,section_data,section_legends[section.toLowerCase()])

        })
        })
      }
      // creating glimpses chart
      function generateGlimpsesMap(where,req_colors,section_data,legends){
          let states = JSON.parse(sessionStorage.getItem('states'))
          let category1 = []
          let category2 = []
          let category3 = []
          states.map((state,index) =>{
          const type_of_state = getColourOfState(req_colors,state.state_id,section_data)
          let required_data = []
          if(state.state_name === 'Delhi'){
          required_data = ['nct of delhi',state.state_id]
          }else{
          required_data = [ state.state_name.toLowerCase(),state.state_id]
          }
          if(type_of_state.category === 0){
          category1.push(required_data)
          }
          if(type_of_state.category === 1){
          category2.push(required_data)
          }
          if(type_of_state.category === 2){
          category3.push(required_data)
          }
          return required_data
          })

          try{
              const states_chart = Highcharts.mapChart(where, {
                  chart: {
                      map: 'countries/in/custom/in-all-disputed',
                      backgroundColor: 'transparent',
                      height: "900",
                      // width: "550"
                  },
                  title: {
                      text: ''
                  },

                  subtitle: {
                      text: ''
                  },
                  legend: {
                  enabled: true
                  },
                  tooltip: { enabled: true },
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
                            }
              
                        }
                    }
                  },
                  series: [
                  {
                      name: legends[0],
                      data: category1,
                      allAreas: false,
                      allowPointSelect: true,
                      cursor: 'pointer',
                      color:req_colors[0],
                      borderColor: "#6e6f70",
                      states: {
                          hover: {
                              color:'#f7941c'
                          },
                          select: {
                          color: '#9ec2e4'
                          }
                      },
                      dataLabels: {
                          enabled: false,
                          format: '{point.name}'
                      },
                  },
                  {
                      data: category2,
                      name: legends[1],
                      color:req_colors[1],
                      allowPointSelect: true,
                      allAreas: false,
                      cursor: 'pointer',
                      borderColor: "#6e6f70",
                      states: {
                          hover: {
                              color:'#f7941c'
                          },
                          select: {
                          color: '#9ec2e4'
                          }
                      },
                      dataLabels: {
                          enabled: false,
                          format: '{point.name}'
                      },
                  },
                  {
                      data: category3,
                      name: legends[2],
                      color:req_colors[2],

                      allowPointSelect: true,
                      allAreas: false,
                      cursor: 'pointer',
                      borderColor: "#6e6f70",
                      states: {
                          hover: {
                              color:'#f7941c'
                          },
                          select: {
                          color: '#9ec2e4'
                          }
                      },
                      dataLabels: {
                          enabled: false,
                          format: '{point.name}'
                      },
                  },
                  ]
              });
              if(Object.keys(states_chart).length !== 0){
                  states_chart.series.forEach(series=>{
                  series.data.forEach(el => {
                  const info = getColourOfState(req_colors,el['value'],section_data)
                  el.color = info.color
                  return el
                  })
                  })


                  states_chart.update({
                  series: [{
                  data: states_chart.series[0].data
                  },
                  {
                  data: states_chart.series[1].data
                  },
                  {
                  data: states_chart.series[2].data
                  }]
                  })
              }
          }catch(e){
              console.log(e)
          }
      }


      function getColourOfState(req_colors,state_id,section_data){
       let color = ''
       let category = ''
       section_data.forEach(state=>{
         if(state_id === state.state_id){
           color = req_colors[state.category]
           category = state.category
         }
       })
       return {color:color,category: parseInt(category)}
      }
    </script>

    <script type="text/javascript">
      // progress bar
      $(".progress-percent").each(function () {
        var $this = $(this),
          $dataV = $this.data("percent"),
          $dataDeg = $dataV * 3.6,
          $round = $this.find(".progress-round");
        $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
        $this.append(
          '<div class="progress-inbox"><span class="percent_text"></span></div>'
        );
        $this.prop("Counter", 0).animate(
          { Counter: $dataV },
          {
            duration: 2000,
            easing: "swing",
            step: function (now) {
              $this.find(".percent_text").text(Math.ceil(now) + "%");
            },
          }
        );
        if ($dataV >= 51) {
          $round.css("transform", "rotate(" + 360 + "deg)");
          setTimeout(function () {
            $this.addClass("percent_more");
          }, 1000);
          setTimeout(function () {
            $round.css(
              "transform",
              "rotate(" + parseInt($dataDeg + 180) + "deg)"
            );
          }, 1000);
        }
      });
      
      // progress bar with content
      $(".progress-percent-text").each(function () {
        var $this = $(this),
          $dataV = $this.data("percent"),
          $dataTxt = $this.data("txt"),
          $dataDeg = $dataV * 3.6,
          $round = $this.find(".progress-round");
        $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
        $this.append(
          '<div class="progress-inbox"><span class="percent_text"></span><span class="bottom-txt">'+$dataTxt+'</span></div>'
        );
        $this.prop("Counter", 0).animate(
          { Counter: $dataV },
          {
            duration: 2000,
            easing: "swing",
            step: function (now) {
              $this.find(".percent_text").text(Math.ceil(now) + "%");
            },
          }
        );
        if ($dataV >= 51) {
          $round.css("transform", "rotate(" + 360 + "deg)");
          setTimeout(function () {
            $this.addClass("percent_more");
          }, 1000);
          setTimeout(function () {
            $round.css(
              "transform",
              "rotate(" + parseInt($dataDeg + 180) + "deg)"
            );
          }, 1000);
        }
      });

    </script>

    <script type="text/javascript">
      $(".progress-container > div").each(function () {
        var width = $(this).data("width");
        $(this).animate({ width: width }, 2500);
        $(this).after('<span class="perc">' + width + "</span>");
        // $('.perc').delay(3000).fadeIn(1000);
      });
    </script>
  </body>
</html>
