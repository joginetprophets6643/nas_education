@include('front.includes.header')
@include('front.includes.nav')
@include('front.report_card.sidebar')
@include('front.report_card.gradesection')

<div class="tab-content tablayertwo-content">
                            <div class="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
                              <ul class="nav nav-tabs tablayerthree" role="tablist" >
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="true" onClick="setScreen('information')">Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="participation-tab" data-bs-toggle="tab" data-bs-target="#participation" type="button" role="tab" aria-controls="participation" aria-selected="false" onClick="setScreen('participation')">Participation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="performance-tab" data-bs-toggle="tab" data-bs-target="#performance" type="button" role="tab" aria-controls="performance" aria-selected="false"onClick="setScreen('performance')">Performance</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="learning-tab" data-bs-toggle="tab" data-bs-target="#learning" type="button" role="tab" aria-controls="learning" aria-selected="false"onClick="setScreen('learning')">Learning Outcomes</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="feedback-tab" data-bs-toggle="tab" data-bs-target="#feedback" type="button" role="tab" aria-controls="feedback" aria-selected="false"onClick="setScreen('feedback')">Feedback</button>
                                </li>
                              </ul>

<div class="tab-content tablayerthree-content">
                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">...</div>
                                <div class="tab-pane fade" id="participation" role="tabpanel" aria-labelledby="participation-tab">
                                    <div class="card-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              TOTAL PARTICIPATION OF CLASS <span id="current_class"></span>
                                            </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-content card-blue">
                                                <div class="card-icon">
                                                  <img src="{{asset('assets/front/images/school-icon.svg')}}" alt="img" class="img-fluid" />
                                                </div>
                                                <div class="card-desc">
                                                    <span class="total-no" id="participation_school">59</span>
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
                                                <span class="total-no" id="participation_teachers">183</span>
                                                <p class="title" >Teachers</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-yellow">
                                            <div class="card-icon">
                                              <img src="{{asset('assets/front/images/student-icon.svg')}}" alt="img" class="img-fluid" />
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no" id="participation_students">738</span>
                                                <p class="title">Students</p>
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                        <!-- <div class="lds-roller" style="display:none" id="section_loader"></div> -->
                                        <div class="col-md-6 border-ryt" id="gender_section_participation" style="display:none;">
                                          <div class="participation-wrap ptb-30" id="gender_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY GENDER
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                                <div class="category-wrap">
                                                  <div class="card-blue">
                                                    <span class="percentage" id="paricipation_gender_male">30%</span>
                                                    <small class="title">Boys</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <img src="{{asset('assets/front/images/boy-icon.svg')}}" alt="img" class="img-fluid" />
                                                  </div>
                                                  
                                                </div>
                                                <div class="category-wrap">
                                                  <div class="card-pink">
                                                    <span class="percentage" id="paricipation_gender_female">70%</span>
                                                    <small class="title">Girls</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <img src="{{asset('assets/front/images/girl-icon.svg')}}" alt="img" class="img-fluid" />
                                                  </div>
                                                  
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <div class="col-md-6" id="location_section_participation" style="display:none;">
                                          <div class="part-wrap ptb-30" id="location_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY LOCATION
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                              <div class="category-wrap">
                                                <div class="card-blue">
                                                  <span class="percentage" id="participation_rural">30%</span>
                                                  <small class="title">Rural</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <img src="{{asset('assets/front/images/rural-icon.svg')}}" alt="img" class="img-fluid" />
                                                </div>
                                                
                                              </div>
                                              <div class="category-wrap">
                                                <div class="card-pink">
                                                  <span class="percentage" id="participation_urban">70%</span>
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
                                        <div class="col-md-6 border-ryt" id="management_section_participation" style="display:none;">
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
                                        
                                        <div class="col-md-6" id="social_section_participation" style="display:none;">
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
@include('front.includes.footer')
<script src="{{asset('assets/front/js/participation/participation.js')}}"></script>

