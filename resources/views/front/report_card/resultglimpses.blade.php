@section('result-glimpses')
<div class="tab-pane fade" id="glimpsesnational_class3" role="tabpanel" aria-labelledby="glimpses-tab">
                                    <div class="nc8-result-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              PERFORMANCE OF STATES
                                            </h2>
                                            <!-- <div class="glimps-wrap">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue" id="india_map_language_gender">
                                                            
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                      <div class="glimps-graph light-green">
                                                          <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                      <div class="glimps-graph light-sagegreen" id="india_map_sci_gender">
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink" id="india_map_math_gender">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </div> -->
                                          </div>
                                          <div class="col-md-12">
                                            <div class="accordion commonAccordion" id="nc8-perAccordion">
                                              <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionOne">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc8-perAccordioncollapseOne">
                                                    Performance by Gender
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc8-perAccordionOne">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue" id="india_map_language_gender">
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green" id="india_map_sst_gender">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen" id="india_map_sci_gender">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink" >
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionTwo">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseTwo" aria-expanded="true" aria-controls="nc8-perAccordioncollapseTwo">
                                                    Performance by Location
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapseTwo" class="accordion-collapse collapse show" aria-labelledby="nc8-perAccordionTwo">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue">
                                                                <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionThree">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseThree" aria-expanded="true" aria-controls="nc8-perAccordioncollapseThree">
                                                    Performance by Managment
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapseThree" class="accordion-collapse collapse show" aria-labelledby="nc8-perAccordionThree">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue">
                                                                <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionfour">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapsefour" aria-expanded="true" aria-controls="nc8-perAccordioncollapsefour">
                                                    Performance by Social Group
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapsefour" class="accordion-collapse collapse show" aria-labelledby="nc8-perAccordionfour">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue">
                                                                <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink">
                                                              <img src="{{asset('assets/front/images/map-white.svg')}}" alt="img" class="img-fluid" />
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
                                </div>
@endsection