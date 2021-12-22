@include('front.includes.header')
@include('front.includes.nav')
@include('front.report_card.sidebar')
@include('front.report_card.gradesection')

<div class="tab-content tablayertwo-content">
                            <div class="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
                              <ul class="nav nav-tabs tablayerthree" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="true">Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="participation-tab" data-bs-toggle="tab" data-bs-target="#participation" type="button" role="tab" aria-controls="participation" aria-selected="false">Participation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="performance-tab" data-bs-toggle="tab" data-bs-target="#performance" type="button" role="tab" aria-controls="performance" aria-selected="false">Performance</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="learning-tab" data-bs-toggle="tab" data-bs-target="#learning" type="button" role="tab" aria-controls="learning" aria-selected="false">Learning Outcomes</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="feedback-tab" data-bs-toggle="tab" data-bs-target="#feedback" type="button" role="tab" aria-controls="feedback" aria-selected="false">Feedback</button>
                                </li>
                              </ul>

<div class="tab-content tablayerthree-content">
                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">...</div>
                                <div class="tab-pane fade show active" id="participation" role="tabpanel" aria-labelledby="participation-tab">
                                    <div class="card-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              TOTAL PARTICIPATION OF CLASS 3
                                            </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-content card-blue">
                                                <div class="card-icon">
                                                  <img src="{{asset('assets/front/images/school-icon.svg')}}" alt="img" class="img-fluid" />
                                                </div>
                                                <div class="card-desc">
                                                    <span class="total-no">59</span>
                                                    <p class="title">Schools</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-pink">
                                            <div class="card-icon">
                                              <img src="{{asset('assets/front/images/teacher-icon.svg')}}" alt="img" class="img-fluid" />
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no">183</span>
                                                <p class="title">Teachers</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-yellow">
                                            <div class="card-icon">
                                              <img src="{{asset('assets/front/images/student-icon.svg')}}" alt="img" class="img-fluid" />
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no">738</span>
                                                <p class="title">Students</p>
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6 border-ryt">
                                          <div class="participation-wrap ptb-30" id="gender_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY GENDER
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                                <div class="category-wrap">
                                                  <div class="card-blue">
                                                    <span class="percentage">30%</span>
                                                    <small class="title">Boys</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <img src="{{asset('assets/front/images/boy-icon.svg')}}" alt="img" class="img-fluid" />
                                                  </div>
                                                  
                                                </div>
                                                <div class="category-wrap">
                                                  <div class="card-pink">
                                                    <span class="percentage">70%</span>
                                                    <small class="title">Girls</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <img src="{{asset('assets/front/images/girl-icon.svg')}}" alt="img" class="img-fluid" />
                                                  </div>
                                                  
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                          <div class="part-wrap ptb-30" id="location_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY LOCATION
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                              <div class="category-wrap">
                                                <div class="card-blue">
                                                  <span class="percentage">30%</span>
                                                  <small class="title">Rural</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <img src="{{asset('assets/front/images/rural-icon.svg')}}" alt="img" class="img-fluid" />
                                                </div>
                                                
                                              </div>
                                              <div class="category-wrap">
                                                <div class="card-pink">
                                                  <span class="percentage">70%</span>
                                                  <small class="title">Urban</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <img src="{{asset('assets/front/images/urban-icon.svg')}}" alt="img" class="img-fluid" />
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="col-md-6 border-ryt">
                                          <div class="participation-wrap ptb-30" id="management_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY MANAGEMENT
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="managementPieGraph"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                          <div class="part-wrap ptb-30" id="social_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY SOCIAL GROUP
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="socialBarGraph"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="performance" role="tabpanel" aria-labelledby="performance-tab">...</div>
                                <div class="tab-pane fade" id="learning" role="tabpanel" aria-labelledby="learning-tab">...</div>
                                <div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">...</div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="class5" role="tabpanel" aria-labelledby="class5-tab">...</div>
                            <div class="tab-pane fade" id="class8" role="tabpanel" aria-labelledby="class8-tab">...</div>
                            <div class="tab-pane fade" id="class10" role="tabpanel" aria-labelledby="class10-tab">...</div>
                            <div class="tab-pane fade" id="allclasses" role="tabpanel" aria-labelledby="allclasses-tab">...</div>
                          </div>
                        </div>
                      </div>
                </div>

            </main>
        </div>

    </section>

    <!-- Highcharts JS -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>

    <script>
      // Create the chart
      Highcharts.chart('socialBarGraph', {
        chart: {
          type: 'column'
        },
        title: {
          text: ''
        },
        accessibility: {
          announceNewData: {
            enabled: true
          }
        },
        xAxis: {
          type: 'category'
        },
        yAxis: {
          title: {
            text: ''
          }

        },
        legend: {
          enabled: false
        },
        plotOptions: {
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: '{point.y:.1f}%'
            }
          }
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [
          {
            name: "Groups",
            colorByPoint: true,
            data: [
              {
                name: "SC",
                y: 38,
                color: '#75A9D9'
              },
              {
                name: "OBC",
                y: 72,
                color: '#E9769F'
              },
              {
                name: "ST",
                y: 59,
                color: '#CAC55F'
              },
              {
                name: "General",
                y: 51,
                color: '#4CAF50'
              }
            ]
          }
        ],
      });
    </script>
    <script>
    Highcharts.chart('managementPieGraph', {
      chart: {
        type: 'variablepie'
      },
      title: {
        text: ''
      },
      tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
          '{point.y}%'
      },
      
      plotOptions: {
        variablepie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: true,
                format: '{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            },
            showInLegend: true
        }
      },
      series: [{
        minPointSize: 10,
        innerSize: '40%',
        zMin: 0,
        name: 'Management',
        data: [{
          name: 'Govt.',
          y: 40,
          z: 100,
          color: '#75A9D9'
        }, {
          name: 'Govt. Aided',
          y: 30,
          z: 100,
          color: '#E9769F'
        }, {
          name: 'Private',
          y: 20,
          z: 100,
          color: '#CAC55F'
        }, {
          name: 'Central Govt.',
          y: 10,
          z: 100,
          color: '#4CAF50'
        }]
      }]
    });
    </script>




@include('front.includes.footer')