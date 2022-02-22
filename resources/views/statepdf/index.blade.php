<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="http://nas21.inroad.in/report-pdf/assets/scss/bootstrap.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- Material Icons -->
    <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/material-icons.css" />
    <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/style.css" />
    <link rel="stylesheet" href="http://nas21.inroad.in/report-pdf/assets/scss/pdf.css" />
    <title>NAS | State PDF</title>
    <style>
      h4 {
        font-size: 20px;
      }
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
    <!-- Highcharts JS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="http://nas21.inroad.in/report-pdf/assets/js/custom.js"></script>

  </head>
  <body class="p-0">
    <!----------------------------------------- state report card starts ----------------------------------------->
    <section class="reportview-wrap ptb-30 bg-grey">
      <div class="container">
        <div class="row">
          <!------------------------ page 1 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-content-wrap state-heading">
                <img
                  src="http://nas21.inroad.in/report-pdf/assets/images/state-header-img.png"
                  width="1117"
                  alt=""
                />
                <div class="heading-img-wrap text-white fw-bold">
                  <img src="http://nas21.inroad.in/report-pdf/assets/images/ministry-of-education.png" alt="" />
                </div>
                <div class="heading-wrap text-white fw-bold">
                  <h2>STATE REPORT CARD</h2>
                  <h1>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}}</h1>
                </div>
              </div>
            </div>
          </div>
          <!------------------------ page 1 ends ------------------------>
          <!------------------------ page 2 starts ------------------------>
          <div class="col-md-12 highlights">
            <div class="reportview-container">
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
                              src="http://nas21.inroad.in/report-pdf/assets/images/area-icon.png"
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
                              src="http://nas21.inroad.in/report-pdf/assets/images/population-icon.png"
                              alt="population-icon"
                              width="58"
                            />
                            <h5 class="mb-0">
                              <span>{{isset($stateVal->total_population)&&$stateVal->total_population=''?$stateVal->total_population:'0'}}</span>
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
                              <span>{{isset($stateVal->density_of_population)&&$stateVal->density_of_population!=''?$stateVal->density_of_population:'0'}}</span>
                              per km<sup>2</sup>
                            </h5>
                            <p>Density of population</p>
                          </div>
                          <div class="img-wrapper">
                            <img
                              src="http://nas21.inroad.in/report-pdf/assets/images/literacy-icon.png"
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
                              src="http://nas21.inroad.in/report-pdf/assets/images/child-sex-ratio-icon.png"
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
                              src="http://nas21.inroad.in/report-pdf/assets/images/school.png"
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
                              src="http://nas21.inroad.in/report-pdf/assets/images/teacher.png"
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
                              src="http://nas21.inroad.in/report-pdf/assets/images/students.png"
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
                <div class="reportview-footer">
                  <span class="page-no">2</span>
                </div>
              </div>
            </div>
          </div>
          <!------------------------ page 2 ends ------------------------>
          <!------------------------ page 3 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <!-- header -->
                <div class="reportview-header">
                  <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                </div>
                <!-- content -->
                <div
                  class="reportview-class-content performance-graph white-bg"
                >
                  <div class="row p-4">
                    <!-- graph section -->
                    <div class="col-md-12 mt-4">
                      <h3 class="text-center heading-38 fw-bold">
                        Gradewise Performance of Students in the Different
                        Subject Domain
                      </h3>
                      <div class="container d-flex justify-content-center mt-3">
                        <span class="legend-1"></span>
                        <p class="mb-0 me-4">State Average</p>
                        <span class="legend-2"></span>
                        <p class="mb-0 me-4">National Average</p>
                      </div>
                      <div class="d-flex flex-wrap graph-mark">
                        <!-- class 3 -->
                        @if(count($performanceData)>0)
                          @foreach($performanceData as $avgPerformance)
                            @php 
                            $dataArr = json_decode($avgPerformance->data,true);
                            $grade = $avgPerformance->grade;
                            @endphp
                              <div class="p-0 class-{{$grade}}-width">
                                <div class="graph-wrap">
                                  <figure class="highcharts-figure">
                                    <div id="c{{$grade}}-average-graph"></div>
                                    <div class="dark-blue-bg ms-4">
                                      <h6 class="text-center fw-light p-2 text-white">
                                        Class {{$grade}}
                                      </h6>
                                    </div>
                                  </figure>
                                </div>
                              </div>
                              @include('statepdf.firstgraph')
                          @endforeach
                        @endif
                      </div>
                    </div>
                    <!-- graph section -->
                    <div class="col-md-12 mt-5">
                      <h3 class="text-center heading-38 fw-bold">
                        Distribution of Students by Range
                      </h3>
                      <div class="container d-flex justify-content-center mt-3">
                        <span class="legend-1"></span>
                        <p class="mb-0 me-4">Below 30%</p>
                        <span class="legend-2"></span>
                        <p class="mb-0 me-4">30% - 50%</p>
                        <span class="legend-3"></span>
                        <p class="mb-0 me-4">51% - 75%</p>
                        <span class="legend-4"></span>
                        <p class="mb-0">Above 75%</p>
                      </div>
                      <div class="graph-mark d-flex mt-4">
                        <div class="container-wrapper left-sec">

                        @if(count($performanceData)>0)
                          @foreach($performanceData as $rangePerformance)
                            @php 
                            $dataArrRange = json_decode($rangePerformance->data,true);
                            $grade = $rangePerformance->grade;
                            @endphp
                              <div class="container class-{{$grade}}-container d-flex justify-content-between">
                                <div class="dark-blue-bg inner-container">
                                  <h6 class="text-white mb-0">Class {{$grade}}</h6>
                                </div>
                                @if($grade==3 || $grade==5)
                                  <div class="">
                                    <p class="mb-0 fw-bold text-15 text-end">EVS</p>
                                    <p class="mb-0 fw-bold text-15 mt-2 text-end">Language</p>
                                    <p class="mb-0 fw-bold text-15 mt-3 text-end">Mathematics</p>
                                  </div>
                                @endif
                                @if($grade==8)
                                  <div class="">
                                    <p class="mb-0 fw-bold text-15 text-end">Language</p>
                                    <p class="mb-0 fw-bold text-15 mt-1 text-end">Mathematics</p>
                                    <p class="mb-0 fw-bold text-15 mt-2 text-end">Science</p>
                                    <p class="mb-0 fw-bold text-15 mt-1 text-end">Social Science</p>
                                  </div>
                                @endif
                                @if($grade==10)
                                  <div class="">
                                    <p class="mb-0 fw-bold text-15 text-end">MIL</p>
                                    <p class="mb-0 fw-bold text-15 text-end">English</p>
                                    <p class="mb-0 fw-bold text-15 mt-1 text-end">Mathematics</p>
                                    <p class="mb-0 fw-bold text-15 mt-1 text-end">Science</p>
                                    <p class="mb-0 fw-bold text-15 mt-1 text-end">Social Science</p>
                                  </div>
                                @endif
                              </div>
                          @endforeach
                        @endif

                          <!-- <div class="container class-3-container d-flex justify-content-between">
                            <div class="dark-blue-bg inner-container">
                              <h6 class="text-white mb-0">Class 3</h6>
                            </div>
                            <div class="">
                              <p class="mb-0 fw-bold text-15 text-end">EVS</p>
                              <p class="mb-0 fw-bold text-15 mt-2 text-end">Language</p>
                              <p class="mb-0 fw-bold text-15 mt-3 text-end">Mathematics</p>
                            </div>
                          </div>
                          <div class="container class-5-container d-flex justify-content-between">
                            <div class="dark-blue-bg inner-container">
                              <h6 class="text-white mb-0">Class 5</h6>
                            </div>
                            <div class="">
                              <p class="mb-0 fw-bold text-15 text-end">EVS</p>
                              <p class="mb-0 fw-bold text-15 mt-2 text-end">Language</p>
                              <p class="mb-0 fw-bold text-15 mt-3 text-end">Mathematics</p>
                            </div>
                          </div>
                          <div class="container class-8-container d-flex justify-content-between">
                            <div class="dark-blue-bg inner-container">
                              <h6 class="text-white mb-0 mb-0">Class 8</h6>
                            </div>
                            <div class="">
                              <p class="mb-0 fw-bold text-15 text-end">Language</p>
                              <p class="mb-0 fw-bold text-15 mt-1 text-end">Mathematics</p>
                              <p class="mb-0 fw-bold text-15 mt-2 text-end">Science</p>
                              <p class="mb-0 fw-bold text-15 mt-1 text-end">Social Science</p>
                            </div>
                          </div>
                          <div class="container class-10-container d-flex justify-content-between">
                            <div class="dark-blue-bg inner-container">
                              <h6 class="text-white mb-0">Class 10</h6>
                            </div>
                            <div class="">
                              <p class="mb-0 fw-bold text-15 text-end">MIL</p>
                              <p class="mb-0 fw-bold text-15 text-end">English</p>
                              <p class="mb-0 fw-bold text-15 mt-1 text-end">Mathematics</p>
                              <p class="mb-0 fw-bold text-15 mt-1 text-end">Science</p>
                              <p class="mb-0 fw-bold text-15 mt-1 text-end">Social Science</p>
                            </div>
                          </div> -->
                        </div>
                        <div class="p-0 distribution-graph">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure">
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $rangePerformance2)
                                  @php 
                                  $dataArrRange2 = json_decode($rangePerformance2->data,true);
                                  $grade2 = $rangePerformance2->grade;
                                  @endphp
                                  <div id="c{{$grade2}}-range-graph"></div>
                                  @include('statepdf.secondgraph')
                                @endforeach
                              @endif

                            </figure>
                          </div>
                        </div>
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
          <!------------------------ page 3 ends ------------------------>
          <!------------------------ page 4 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <!-- header -->
                <div class="reportview-header">
                  <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                </div>
                <!-- content -->
                <div class="reportview-class-content table-data white-bg p-4">
                  <div class="row mt-4">
                    <!-- Gender -->
                    <div class="col-md-8 left mb-4">
                      <div class="table-responsive">
                        <table
                          class="table table-bordered text-center text-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg">
                              <th
                                class="align-middle bg-orange text-start fw-normal"
                                scope="col"
                                colspan="2"
                                rowspan="2"
                              >
                                PERFORMANCE BY GENDER
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 3
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 5
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 8
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 10
                              </th>
                            </tr>
                            <tr class="dark-blue-bg">
                              <th scope="col" class="fw-normal">Boys</th>
                              <th scope="col" class="fw-normal">Girls</th>
                              <th scope="col" class="fw-normal">Boys</th>
                              <th scope="col" class="fw-normal">Girls</th>
                              <th scope="col" class="fw-normal">Boys</th>
                              <th scope="col" class="fw-normal">Girls</th>
                              <th scope="col" class="fw-normal">Boys</th>
                              <th scope="col" class="fw-normal">Girls</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php 
                            $subjectArr = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                            $subjectColorArr = array('evs'=>'card-yellow','language'=>'card-blue','math'=>'card-pink','sst'=>'card-green','mil'=>'card-red','sci'=>'card-sagegreen','eng'=>'card-purple');
                            @endphp
                            @foreach($subjectArr as $key=>$subjectData)
                            <!-- evs -->
                            <tr class="{{$subjectColorArr[$key]}}">
                              <td scope="row" rowspan="2" class="align-middle">
                                {{$subjectData}}
                              </td>
                              <td>State</td>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $genderPerformance)
                                  @php 
                                  $dataArrGender = json_decode($genderPerformance->data,true);
                                  $grade = $genderPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrGender[$key]['gender']['state']['boys']}}</td>
                                        <td>{{$dataArrGender[$key]['gender']['state']['girls']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrGender[$key]['gender']['state']['boys']}}</td>
                                        <td>{{$dataArrGender[$key]['gender']['state']['girls']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrGender[$key]['gender']['state']['boys']}}</td>
                                        <td>{{$dataArrGender[$key]['gender']['state']['girls']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            <tr class="{{$subjectColorArr[$key]}}">
                              <td>National</td>
                            @if(count($performanceData)>0)
                                @foreach($performanceData as $genderPerformance)
                                  @php 
                                  $dataArrGender = json_decode($genderPerformance->data,true);
                                  $grade = $genderPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrGender[$key]['gender']['national']['boys']}}</td>
                                        <td>{{$dataArrGender[$key]['gender']['national']['girls']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrGender[$key]['gender']['national']['boys']}}</td>
                                        <td>{{$dataArrGender[$key]['gender']['national']['girls']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrGender[$key]['gender']['national']['boys']}}</td>
                                        <td>{{$dataArrGender[$key]['gender']['national']['girls']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-4">Participation by Gender</h4>
                        <!-- images changed -->
                        @include('statepdf.genderparticipation')
                      </div>
                    </div>
                    <!-- Location -->
                    <div class="col-md-8 left mb-4">
                      <div class="table-responsive">
                        <table
                          class="table table-bordered text-center text-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg">
                              <th
                                class="align-middle bg-orange text-start fw-normal"
                                scope="col"
                                colspan="2"
                                rowspan="2"
                              >
                                PERFORMANCE BY LOCATION
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 3
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 5
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 8
                              </th>
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 10
                              </th>
                            </tr>
                            <tr class="dark-blue-bg">
                              <th scope="col" class="fw-normal">Rural</th>
                              <th scope="col" class="fw-normal">Urban</th>
                              <th scope="col" class="fw-normal">Rural</th>
                              <th scope="col" class="fw-normal">Urban</th>
                              <th scope="col" class="fw-normal">Rural</th>
                              <th scope="col" class="fw-normal">Urban</th>
                              <th scope="col" class="fw-normal">Rural</th>
                              <th scope="col" class="fw-normal">Urban</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php 
                            $subjectArrLocation = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                            $subjectColorLocationArr = array('evs'=>'card-yellow','language'=>'card-blue','math'=>'card-pink','sst'=>'card-green','mil'=>'card-red','sci'=>'card-sagegreen','eng'=>'card-purple');
                            @endphp
                            @foreach($subjectArrLocation as $key=>$subjectDataLocation)
                            <!-- evs -->
                            <tr class="{{$subjectColorLocationArr[$key]}}">
                              <td scope="row" rowspan="2" class="align-middle">
                                {{$subjectDataLocation}}
                              </td>
                              <td>State</td>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $locationPerformance)
                                  @php 
                                  $dataArrLocation = json_decode($locationPerformance->data,true);
                                  $grade = $locationPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrLocation[$key]['location']['state']['rural']}}</td>
                                        <td>{{$dataArrLocation[$key]['location']['state']['urban']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrLocation[$key]['location']['state']['rural']}}</td>
                                        <td>{{$dataArrLocation[$key]['location']['state']['urban']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrLocation[$key]['location']['state']['rural']}}</td>
                                        <td>{{$dataArrLocation[$key]['location']['state']['urban']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            <tr class="{{$subjectColorLocationArr[$key]}}">
                              <td>National</td>
                            @if(count($performanceData)>0)
                                @foreach($performanceData as $locationPerformance)
                                  @php 
                                  $dataArrLocation = json_decode($locationPerformance->data,true);
                                  $grade = $locationPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrLocation[$key]['location']['national']['rural']}}</td>
                                        <td>{{$dataArrLocation[$key]['location']['national']['urban']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrLocation[$key]['location']['national']['rural']}}</td>
                                        <td>{{$dataArrLocation[$key]['location']['national']['urban']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrLocation[$key]['location']['national']['rural']}}</td>
                                        <td>{{$dataArrLocation[$key]['location']['national']['urban']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-2">Participation by Location</h4>
                        @include('statepdf.locationparticipation')
                      </div>
                    </div>
                    <!-- Management -->
                    <div class="col-md-8 left mb-4">
                      <div class="table-responsive">
                        <table
                          class="table table-bordered text-center management-table text-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg">
                              <th
                                class="align-middle bg-orange text-start fw-normal"
                                scope="col"
                                colspan="2"
                                rowspan="2"
                              >
                                PERFORMANCE BY MANAGEMENT
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 3
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 5
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 8
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 10
                              </th>
                            </tr>
                            <tr class="dark-blue-bg head-rotate">
                              <th scope="col" class="fw-normal">Govt.</th>
                              <th scope="col" class="fw-normal">Private</th>
                              <th scope="col" class="fw-normal">Aided</th>
                              <th scope="col" class="fw-normal">Central</th>
                              <th scope="col" class="fw-normal">Govt.</th>
                              <th scope="col" class="fw-normal">Private</th>
                              <th scope="col" class="fw-normal">Aided</th>
                              <th scope="col" class="fw-normal">Central</th>
                              <th scope="col" class="fw-normal">Govt.</th>
                              <th scope="col" class="fw-normal">Private</th>
                              <th scope="col" class="fw-normal">Aided</th>
                              <th scope="col" class="fw-normal">Central</th>
                              <th scope="col" class="fw-normal">Govt.</th>
                              <th scope="col" class="fw-normal">Private</th>
                              <th scope="col" class="fw-normal">Aided</th>
                              <th scope="col" class="fw-normal">Central</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php 
                            $subjectArrMangement = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                            $subjectColorMangementArr = array('evs'=>'card-yellow','language'=>'card-blue','math'=>'card-pink','sst'=>'card-green','mil'=>'card-red','sci'=>'card-sagegreen','eng'=>'card-purple');
                            @endphp
                            @foreach($subjectArrMangement as $key=>$subjectDataMangement)
                            <!-- evs -->
                            <tr class="{{$subjectColorMangementArr[$key]}}">
                              <td scope="row" rowspan="2" class="align-middle">
                                {{$subjectDataMangement}}
                              </td>
                              <td>State</td>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $MangementPerformance)
                                  @php 
                                  $dataArrMangement = json_decode($MangementPerformance->data,true);
                                  $grade = $MangementPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrMangement[$key]['management']['state']['govt']}}</td>
                                           <td>{{$dataArrMangement[$key]['management']['state']['private']}}</td>
                                              <td>{{$dataArrMangement[$key]['management']['state']['govt_aided']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['state']['central_govt']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrMangement[$key]['management']['state']['govt']}}</td>
                                           <td>{{$dataArrMangement[$key]['management']['state']['private']}}</td>
                                              <td>{{$dataArrMangement[$key]['management']['state']['govt_aided']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['state']['central_govt']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrMangement[$key]['management']['state']['govt']}}</td>
                                           <td>{{$dataArrMangement[$key]['management']['state']['private']}}</td>
                                              <td>{{$dataArrMangement[$key]['management']['state']['govt_aided']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['state']['central_govt']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            <tr class="{{$subjectColorMangementArr[$key]}}">
                              <td>National</td>
                            @if(count($performanceData)>0)
                                @foreach($performanceData as $MangementPerformance)
                                  @php 
                                  $dataArrMangement = json_decode($MangementPerformance->data,true);
                                  $grade = $MangementPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrMangement[$key]['management']['national']['govt']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['private']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['govt_aided']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['central_govt']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrMangement[$key]['management']['national']['govt']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['private']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['govt_aided']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['central_govt']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrMangement[$key]['management']['national']['govt']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['private']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['govt_aided']}}</td>
                                        <td>{{$dataArrMangement[$key]['management']['national']['central_govt']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-30">
                        <h4 class="mb-3">Participation by Management</h4>
                        @include('statepdf.managementparticipation')
                      </div>
                    </div>
                    <!-- Social -->
                    <div class="col-md-8 left mb-4">
                      <div class="table-responsive">
                        <table
                          class="table table-bordered text-center management-table text-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg">
                              <th
                                class="align-middle bg-orange text-start fw-normal"
                                scope="col"
                                colspan="2"
                                rowspan="2"
                              >
                                PERFORMANCE BY SOCIAL GROUP
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 3
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 5
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 8
                              </th>
                              <th scope="col" colspan="4" class="fw-normal">
                                Class 10
                              </th>
                            </tr>
                            <tr class="dark-blue-bg head-rotate">
                              <th scope="col" class="fw-normal">SC</th>
                              <th scope="col" class="fw-normal">ST</th>
                              <th scope="col" class="fw-normal">OBC</th>
                              <th scope="col" class="fw-normal">Gen.</th>
                              <th scope="col" class="fw-normal">SC</th>
                              <th scope="col" class="fw-normal">ST</th>
                              <th scope="col" class="fw-normal">OBC</th>
                              <th scope="col" class="fw-normal">Gen.</th>
                              <th scope="col" class="fw-normal">SC</th>
                              <th scope="col" class="fw-normal">ST</th>
                              <th scope="col" class="fw-normal">OBC</th>
                              <th scope="col" class="fw-normal">Gen.</th>
                              <th scope="col" class="fw-normal">SC</th>
                              <th scope="col" class="fw-normal">ST</th>
                              <th scope="col" class="fw-normal">OBC</th>
                              <th scope="col" class="fw-normal">Gen.</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php 
                            $subjectArrSocialGroup = array('evs'=>'EVS','language'=>'Language','math'=>'Mathematics','sst'=>'Social Science','mil'=>'MIL','sci'=>'Science','eng'=>'English');
                            $subjectColorSocialGroupArr = array('evs'=>'card-yellow','language'=>'card-blue','math'=>'card-pink','sst'=>'card-green','mil'=>'card-red','sci'=>'card-sagegreen','eng'=>'card-purple');
                            @endphp
                            @foreach($subjectArrSocialGroup as $key=>$subjectDataSocialGroup)
                            <!-- evs -->
                            <tr class="{{$subjectColorSocialGroupArr[$key]}}">
                              <td scope="row" rowspan="2" class="align-middle">
                                {{$subjectDataSocialGroup}}
                              </td>
                              <td>State</td>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $SocialGroupPerformance)
                                  @php 
                                  $dataArrSocialGroup = json_decode($SocialGroupPerformance->data,true);
                                  $grade = $SocialGroupPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['sc']}}</td>
                                           <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['st']}}</td>
                                              <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['obc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['general']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['sc']}}</td>
                                           <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['st']}}</td>
                                              <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['obc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['general']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['sc']}}</td>
                                           <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['st']}}</td>
                                              <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['obc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['state']['general']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            <tr class="{{$subjectColorSocialGroupArr[$key]}}">
                              <td>National</td>
                            @if(count($performanceData)>0)
                                @foreach($performanceData as $SocialGroupPerformance)
                                  @php 
                                  $dataArrSocialGroup = json_decode($SocialGroupPerformance->data,true);
                                  $grade = $SocialGroupPerformance->grade;
                                  @endphp
                                    @if($grade==3 || $grade==5)
                                      @if($key=='evs'||$key=='math' || $key=='language')
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['sc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['st']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['obc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['general']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==8)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='language')
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['sc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['st']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['obc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['general']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif
                                    @if($grade==10)
                                      @if($key=='sst'|| $key=='sci'||$key=='math' || $key=='mil'|| $key=='eng')
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['sc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['st']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['obc']}}</td>
                                        <td>{{$dataArrSocialGroup[$key]['socialgroup']['national']['general']}}</td>
                                      @else
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      @endif
                                    @endif

                                @endforeach
                              @endif
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-5">Participation by Social Group</h4>
                          @include('statepdf.socialgrpgraph')
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-footer">
                  <span class="page-no">4</span>
                </div>
              </div>
            </div>
          </div>
          <!------------------------ page 4 ends ------------------------>
          <!------------------------ page 5 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap state-testimony">
                <!-- header -->
                <div class="reportview-header">
                  <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                </div>
                <!-- content -->
                <!-- children testimony -->
                <div
                  class="reportview-class-content light-pink children-testimony"
                >
                  <div class="row pb-3 justify-content-center">
                    <div class="col-md-12 pb-4">
                      <h4 class="heading-30 fw-bold text-center">
                        What head teachers responded about school?
                      </h4>
                    </div>
                    @if(count($stateFeedbackDatasq)>0)
                      @foreach($stateFeedbackDatasq as $sqfeedback)
                        <div class="col-md-4">
                          <div class="infotab-content white-bg text-center">
                            <h2 class="title text-pink pt-2">{{isset($sqfeedback->avg)?$sqfeedback->avg:0}}%</h2>
                            <p class="total-no">
                              {{isset($sqfeedback->question_desc)?$sqfeedback->question_desc:'-'}}
                            </p>
                          </div>
                        </div>
                      @endforeach
                    @endif
                  </div>
                </div>
                <!-- teacher testimony -->
                <div
                  class="reportview-class-content light-green-bg children-testimony teacher-testimony"
                >
                  <div class="row pb-3 justify-content-center">
                    <div class="col-md-12 pb-4">
                      <h4 class="heading-30 fw-bold text-center">
                        What teachers responded about school?
                      </h4>
                    </div>
                    @if(count($stateFeedbackDatatq)>0)
                      @foreach($stateFeedbackDatatq as $tqfeedback)
                        <div class="col-md-4">
                          <div class="infotab-content white-bg text-center">
                            <h2 class="title pt-2">{{isset($tqfeedback->avg)?$tqfeedback->avg:0}}%</h2>
                            <p class="total-no">
                              {{isset($tqfeedback->question_desc)?$tqfeedback->question_desc:'-'}}
                            </p>
                          </div>
                        </div>
                      @endforeach
                    @endif
                  </div>
                </div>
                <!-- head-teacher testimony -->
                <div
                  class="reportview-class-content light-blue-bg children-testimony head-teacher-testimony mb-60"
                >
                  <div class="row pb-3 justify-content-center">
                    <div class="col-md-12 pb-4">
                      <h4 class="heading-30 fw-bold text-center">
                        What children say about schools?
                      </h4>
                    </div>
                    @if(count($stateFeedbackDatapq)>0)
                      @foreach($stateFeedbackDatapq as $pqfeedback)
                        <div class="col-md-4">
                          <div class="infotab-content white-bg text-center">
                            <h2 class="title pt-2">{{isset($pqfeedback->avg)?$pqfeedback->avg:0}}%</h2>
                            <p class="total-no">
                              {{isset($pqfeedback->question_desc)?$pqfeedback->question_desc:'-'}}
                            </p>
                          </div>
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
          <!------------------------ page 5 ends ------------------------>
          <!------------------------ page 6 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <!-- header -->
                <div class="reportview-header">
                  <h2>Kadapa Report Card</h2>
                </div>
                <!-- content -->
                <div class="reportview-class-content white-bg">
                  <div class="feedback-wrap">
                    <!-- pandemic activities -->
                    <div class="pendamic-wrap my-5">
                      <div class="virus-icon1">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon2">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon4">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <div class="virus-icon5">
                        <img
                          src="http://nas21.inroad.in/report-pdf/assets/images/virus.png"
                          alt="virus"
                          class="img-fluid"
                        />
                      </div>
                      <h2 class="heading-30 fw-bold text-center">
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
                          <div class="col-md-3 mb-4">
                            <div
                              class="progressbar-circle-sm progressbar-blue py-5"
                            >
                              <div class="progress" data-percentage="30">
                                <span class="progress-left">
                                  <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                  <span class="progress-bar"></span>
                                </span>
                                @if(count($stateFeedbackDatapq1)>0)
                                  @foreach($stateFeedbackDatapq1 as $pq1feedback)
                                    <div class="progress-value">{{isset($pq1feedback->avg)?$pq1feedback->avg:0}}%</div>
                                  @endforeach
                                @endif
                              </div>
                            </div>
                          </div>
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
                                  @if(count($stateFeedbackDatapq2)>0)
                                  @php $sum = 0; @endphp
                                    @foreach($stateFeedbackDatapq2 as $pq2feedback)
                                      @php
                                        $sum =(isset($pq2feedback->avg)?$pq2feedback->avg:0)+$sum;
                                      @endphp
                                    @endforeach
                                  @endif

                                <span>{{(count($stateFeedbackDatapq2)>0)?round($sum/count($stateFeedbackDatapq2)):0}}%</span> Learning from pandemic
                              </h3>
                              <div class="pendamic-progressbar-list">
                                <div class="row align-items-center">
                                  @if(count($stateFeedbackDatapq2)>0)
                                    @php
                                      $firstCount = 1;
                                      $arr2 = array('Follow the covid-19 hygiene protocols','No digital device at home','happy to spend time at home with my own self','experience worry anxiety and fearing during pandamic');
                                    @endphp
                                    @foreach($stateFeedbackDatapq2 as $k=>$pq2feedback)
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

                                    <div class="col-md-6 {{$cls}} {{$cls2}}" >
                                      <div
                                        class="pendamic-progrssbar-content ptb-15"
                                      >
                                        <div
                                          class="progressbar-circle-sm progressbar-pink"
                                        >
                                          <div
                                            class="progress"
                                            data-percentage="{{isset($pq2feedback->avg)?$pq2feedback->avg:0}}"
                                          >
                                            <span class="progress-left">
                                              <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                              <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">{{isset($pq2feedback->avg)?$pq2feedback->avg:0}}%</div>
                                          </div>
                                        </div>
                                        <p class="title">
                                          {{$arr2[$k]}}
                                        </p>
                                      </div>
                                    </div>
                                    @php $firstCount++; @endphp
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
                                  @if(count($stateFeedbackDatapq3)>0)
                                  @php $sum3 = 0; @endphp
                                    @foreach($stateFeedbackDatapq3 as $pq3feedback)
                                      @php
                                        $sum3 =(isset($pq3feedback->avg)?$pq3feedback->avg:0)+$sum3;
                                      @endphp
                                    @endforeach
                                  @endif

                                <span>{{(count($stateFeedbackDatapq3)>0)?round($sum3/count($stateFeedbackDatapq3)):0}}%</span> Experienced obstacles to
                                learning in pandemic
                              </h3>
                              <div class="pendamic-progressbar-list">
                                <div class="row align-items-center">
                                  @if(count($stateFeedbackDatapq3)>0)
                                    @php
                                    $secoundCount = 1;
                                      $arr3 = array('Measures to be taken for wellbeing of children and schoo','School reopening guidelines for teacher','Protocal for Covid Symptoms reporting');
                                    @endphp
                                    @foreach($stateFeedbackDatapq3 as $k=>$pq3feedback)
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
                                      <div class="col-md-6 {{$cls}} {{$cls2}}">
                                        <div
                                          class="pendamic-progrssbar-content ptb-15"
                                        >
                                          <div
                                            class="progressbar-circle-sm progressbar-green"
                                          >
                                            <div
                                              class="progress"
                                              data-percentage="{{isset($pq3feedback->avg)?$pq3feedback->avg:0}}"
                                            >
                                              <span class="progress-left">
                                                <span class="progress-bar"></span>
                                              </span>
                                              <span class="progress-right">
                                                <span class="progress-bar"></span>
                                              </span>
                                              <div class="progress-value">{{isset($pq3feedback->avg)?$pq3feedback->avg:0}}%</div>
                                            </div>
                                          </div>
                                          <p class="title">
                                            {{$arr3[$k]}}
                                          </p>
                                        </div>
                                      </div>
                                      @php $secoundCount++; @endphp
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
                <div class="reportview-footer">
                  <span class="page-no">6</span>
                </div>
              </div>
            </div>
          </div>
          <!------------------------ page 6 ends ------------------------>
          <!------------------------ page 7 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <!-- header -->
                <div class="reportview-header">
                  <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                </div>
                <!-- content -->
                <div class="reportview-class-content white-bg">
                  <div class="row pb-100">
                    <div class="col-md-12">
                      <h4
                        class="performance-heading heading-black-bold text-center p-4"
                      >
                        Performance of the District in Learning Outcomes (LOs)
                      </h4>
                    </div>
                    <div class="col-md-12 mb-3 mt-4">
                      @php
                      $gradeVal = [3,5,8,10];
                      @endphp
                      @if(count($gradeVal))
                      @foreach($gradeVal as $grade)
                      <div class="table-responsive">
                        <h4 class="fw-bold text-center">
                          Class {{$grade}}
                        </h4>
                        <table
                          class="table table-bordered align-middle text-center performance-table"
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
                                            src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png"
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
                                            src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png"
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
                                            src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png"
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
                                            src="http://nas21.inroad.in/report-pdf/assets/images/science-icon.png"
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
                                            src="http://nas21.inroad.in/report-pdf/assets/images/social-science-icon.png"
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
                                            src="http://nas21.inroad.in/report-pdf/assets/images/mil-icon.png"
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
                                            src="http://nas21.inroad.in/report-pdf/assets/images/english-icon.png"
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

                          <!-- <tbody>
                            <tr class="card-blue text-white">
                              <td class="text" colspan="5">
                                <img
                                  src="http://nas21.inroad.in/report-pdf/assets/images/language-icon.png"
                                  height="30"
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
                                  src="http://nas21.inroad.in/report-pdf/assets/images/maths-icon.png"
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
                                <img src="http://nas21.inroad.in/report-pdf/assets/images/evs-icon.png" alt="" />
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
                          </tbody> -->
                        </table>
                      </div>
                      @endforeach
                      @endif
                    </div>
                  </div>
                </div>
                <div class="reportview-footer">
                  <span class="page-no">7</span>
                </div>
              </div>
            </div>
          </div>
          <!------------------------ page 7 ends ------------------------>
          <!------------------------ page 8 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <!-- header -->
                <div class="reportview-header">
                  <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                </div>
                <!-- content -->
                <div class="reportview-class-content white-bg">
                  <div class="row pb-100">
                    <div class="col-md-12">
                      <h4
                        class="performance-heading heading-38 fw-bold text-center p-4"
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
                <div class="reportview-footer">
                  <span class="page-no">8</span>
                </div>
              </div>
            </div>
          </div>
          <!------------------------ page 8 ends ------------------------>
          <!------------------------ page 9 starts ------------------------>
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <!-- header -->
                <div class="reportview-header">
                  <h2>{{isset($stateVal->state_name)?$stateVal->state_name:'-'}} Report Card</h2>
                </div>
                <!-- content -->
                <div class="reportview-class-content white-bg">
                  <div class="row pb-100">
                    <div class="col-md-12">
                      <h4 class="performance-heading fw-bold text-center p-4">
                        Average Performance of the Districts
                      </h4>
                    </div>
                    <!-- class 3 table -->
                    <div class="col-md-3">
                      <div class="">
                        <table
                          class="table table-bordered text-center border-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg text-white">
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 3
                              </th>
                            </tr>
                            <tr class="bg-orange text-white">
                              <th scope="col" class="fw-normal">
                                District Name
                              </th>
                              <th scope="col" class="fw-normal">
                                District Mean
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $districtWisePerformance)
                                  @php 
                                  $dataArrDistrict = json_decode($districtWisePerformance->data,true);
                                  $grade = $districtWisePerformance->grade;
                                  @endphp
                                  @if($grade==3)
                                    @foreach($dataArrDistrict['statedistrictlevelperformance'] as $districtVal)
                                    <tr class="bg-grey">
                                      <td>{{$districtVal['district_name']}}</td>
                                      <td>{{$districtVal['percentage']}}</td>
                                    </tr>
                                    @endforeach
                                  @endif
                                @endforeach
                              @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- class 5 table -->
                    <div class="col-md-3">
                      <div class="">
                        <table
                          class="table table-bordered text-center border-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg text-white">
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 5
                              </th>
                            </tr>
                            <tr class="bg-orange text-white">
                              <th scope="col" class="fw-normal">
                                District Name
                              </th>
                              <th scope="col" class="fw-normal">
                                District Mean
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $districtWisePerformance)
                                  @php 
                                  $dataArrDistrict = json_decode($districtWisePerformance->data,true);
                                  $grade = $districtWisePerformance->grade;
                                  @endphp
                                  @if($grade==5)
                                    @foreach($dataArrDistrict['statedistrictlevelperformance'] as $districtVal)
                                    <tr class="bg-grey">
                                      <td>{{$districtVal['district_name']}}</td>
                                      <td>{{$districtVal['percentage']}}</td>
                                    </tr>
                                    @endforeach
                                  @endif
                                @endforeach
                              @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- class 8 table -->
                    <div class="col-md-3">
                      <div class="">
                        <table
                          class="table table-bordered text-center border-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg text-white">
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 8
                              </th>
                            </tr>
                            <tr class="bg-orange text-white">
                              <th scope="col" class="fw-normal">
                                District Name
                              </th>
                              <th scope="col" class="fw-normal">
                                District Mean
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $districtWisePerformance)
                                  @php 
                                  $dataArrDistrict = json_decode($districtWisePerformance->data,true);
                                  $grade = $districtWisePerformance->grade;
                                  @endphp
                                  @if($grade==8)
                                    @foreach($dataArrDistrict['statedistrictlevelperformance'] as $districtVal)
                                    <tr class="bg-grey">
                                      <td>{{$districtVal['district_name']}}</td>
                                      <td>{{$districtVal['percentage']}}</td>
                                    </tr>
                                    @endforeach
                                  @endif
                                @endforeach
                              @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- class 10 table -->
                    <div class="col-md-3">
                      <div class="">
                        <table
                          class="table table-bordered text-center border-white"
                        >
                          <thead>
                            <tr class="dark-blue-bg text-white">
                              <th scope="col" colspan="2" class="fw-normal">
                                Class 10
                              </th>
                            </tr>
                            <tr class="bg-orange text-white">
                              <th scope="col" class="fw-normal">
                                District Name
                              </th>
                              <th scope="col" class="fw-normal">
                                District Mean
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                              @if(count($performanceData)>0)
                                @foreach($performanceData as $districtWisePerformance)
                                  @php 
                                  $dataArrDistrict = json_decode($districtWisePerformance->data,true);
                                  $grade = $districtWisePerformance->grade;
                                  @endphp
                                  @if($grade==10)
                                    @foreach($dataArrDistrict['statedistrictlevelperformance'] as $districtVal)
                                    <tr class="bg-grey">
                                      <td>{{$districtVal['district_name']}}</td>
                                      <td>{{$districtVal['percentage']}}</td>
                                    </tr>
                                    @endforeach
                                  @endif
                                @endforeach
                              @endif
                          </tbody>
                        </table>
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
          <!------------------------ page 9 ends ------------------------>
        </div>
      </div>
    </section>
    <!----------------------------------------- state report card ends ----------------------------------------->



    <script>
      // Donut Chart
      Highcharts.chart("dc3-managementPieGraph", {
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
              format: "{point.percentage} %",
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
                y: {{($stateParticipationData[0]->central_govt_school!=0)?round($stateParticipationData[0]->central_govt_school):0}},
                z: 100,
                color: "#75A9D9",
              },
              {
                name: "Govt.",
                y: {{($stateParticipationData[0]->govt_school!=0)?round($stateParticipationData[0]->govt_school):0}},
                z: 100,
                color: "#E9769F",
              },
              {
                name: "Govt. Aided",
                y: {{($stateParticipationData[0]->govt_aided_school!=0)?round($stateParticipationData[0]->govt_aided_school):0}},
                z: 100,
                color: "#CAC55F",
              },
              {
                name: "Private",
                y: {{($stateParticipationData[0]->private_school!=0)?round($stateParticipationData[0]->private_school):0}},
                z: 100,
                color: "#4CAF50",
              },
            ],
          },
        ],
      });
    </script>
  </body>
</html>
