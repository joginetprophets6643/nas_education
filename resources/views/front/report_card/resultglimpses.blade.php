@section('result-glimpses')
                                <div class="tab-pane fade" id="glimpsesnational_class3" role="tabpanel" aria-labelledby="nc3-result-tab">
                                  <div class="nc3-result-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            PERFORMANCE OF STATES
                                          </h2>
                                          <div class="glimps-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                      <div class="glimps-graph light-blue">
                                                          <div id="CardsNationalLanguageBarGraph_class3">

                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                    <div class="glimps-graph light-pink">
                                                        <div id="CardsNationalMathBarGraph_class3"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                    <div class="glimps-graph light-yellow">
                                                        <div id="CardsNationalEvsBarGraph_class3"></div>
                                                    </div> 
                                                  </div>
                                                </div>
                                              </div>  
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="accordion commonAccordion" id="nc3-perAccordion">
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc3-perAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc3-perAccordioncollapseOne">
                                                  Performance of States by Gender
                                                </button>
                                              </h2>
                                              <div id="nc3-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc3-perAccordionOne">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="GenderNationalLanguageBarGraph_class3">

                                                          </div>  
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                        <div id="GenderNationalMathBarGraph_class3">

                                                        </div>  
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                        <div id="GenderNationalEvsBarGraph_class3">

                                                        </div>  
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                 
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc3-perAccordionTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapseTwo" aria-expanded="true" aria-controls="nc3-perAccordioncollapseTwo">
                                                  Performance of States by Location
                                                </button>
                                              </h2>
                                              <div id="nc3-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc3-perAccordionTwo">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="LocationNationalLanguageBarGraph_class3">

                                                          </div>  
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                      <div id="LocationNationalMathBarGraph_class3">

                                                      </div>        
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                        <div id="LocationNationalEvsBarGraph_class3">

                                                        </div>    
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc3-perAccordionThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapseThree" aria-expanded="true" aria-controls="nc3-perAccordioncollapseThree">
                                                  Performance of States by School Management
                                                </button>
                                              </h2>
                                              <div id="nc3-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc3-perAccordionThree">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="ManagementNationalLanguageBarGraph_class3">

                                                          </div>    
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                          <div id="ManagementNationalMathBarGraph_class3">

                                                          </div>     
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                        <div id="ManagementNationalEvsBarGraph_class3">

                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <!-- <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc3-perAccordionfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapsefour" aria-expanded="true" aria-controls="nc3-perAccordioncollapsefour">
                                                  Performance by Social Group
                                                </button>
                                              </h2>
                                              <div id="nc3-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc3-perAccordionfour">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="SocialGroupNationalLanguageBarGraph_class3">

                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                        <div id="SocialGroupNationalMathBarGraph_class3">

                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                      <div id="SocialGroupNationalEvsBarGraph_class3">

                                                      </div>   
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                </div>
                                              </div>
                                            </div> -->
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="tab-pane fade" id="glimpsesnational_class5" role="tabpanel" aria-labelledby="nc5-result-tab">
                                  <div class="nc5-result-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            PERFORMANCE OF STATES
                                          </h2>
                                          <div class="glimps-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                      <div class="glimps-graph light-blue">
                                                          <div id="CardsNationalLanguageBarGraph_class5">

                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                    <div class="glimps-graph light-pink">
                                                        <div id="CardsNationalMathBarGraph_class5"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                    <div class="glimps-graph light-yellow">
                                                        <div id="CardsNationalEvsBarGraph_class5"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>  
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="accordion commonAccordion" id="nc5-perAccordion">
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc5-perAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc5-perAccordioncollapseOne">
                                                Performance of States by Gender
                                                </button>
                                              </h2>
                                              <div id="nc5-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc5-perAccordionOne">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="GenderNationalLanguageBarGraph_class5">

                                                          </div>  
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                        <div id="GenderNationalMathBarGraph_class5">

                                                        </div>  
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                        <div id="GenderNationalEvsBarGraph_class5">

                                                        </div>  
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                 
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc5-perAccordionTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapseTwo" aria-expanded="true" aria-controls="nc5-perAccordioncollapseTwo">
                                                Performance of States by Location
                                                </button>
                                              </h2>
                                              <div id="nc5-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc5-perAccordionTwo">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="LocationNationalLanguageBarGraph_class5">

                                                          </div>  
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                      <div id="LocationNationalMathBarGraph_class5">

                                                      </div>        
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                        <div id="LocationNationalEvsBarGraph_class5">

                                                        </div>    
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc5-perAccordionThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapseThree" aria-expanded="true" aria-controls="nc5-perAccordioncollapseThree">
                                                Performance of States by School Management
                                                </button>
                                              </h2>
                                              <div id="nc5-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc5-perAccordionThree">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="ManagementNationalLanguageBarGraph_class5">

                                                          </div>    
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                          <div id="ManagementNationalMathBarGraph_class5">

                                                          </div>     
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                        <div id="ManagementNationalEvsBarGraph_class5">

                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <!-- <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc5-perAccordionfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapsefour" aria-expanded="true" aria-controls="nc5-perAccordioncollapsefour">
                                                  Performance by Social Group
                                                </button>
                                              </h2>
                                              <div id="nc5-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc5-perAccordionfour">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="SocialGroupNationalLanguageBarGraph_class5">

                                                          </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                        <div id="SocialGroupNationalMathBarGraph_class5">

                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                      <div class="glimps-graph light-yellow">
                                                      <div id="SocialGroupNationalEvsBarGraph_class5">

                                                      </div>   
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div> 
                                                </div>
                                              </div>
                                            </div> -->
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>



                                <div class="tab-pane fade" id="glimpsesnational_class8" role="tabpanel" aria-labelledby="nc8-result-tab">
                                    <div class="nc8-result-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              PERFORMANCE OF STATES
                                            </h2>
                                            <div class="glimps-wrap">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                        <div class="glimps-graph light-blue">
                                                          <div id="CardsNationalLanguageBarGraph_class8">

                                                          </div>  
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                      <div class="glimps-graph light-green">
                                                        <div id="CardsNationalSocialBarGraph_class8">

                                                        </div>                                                            
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                      <div class="glimps-graph light-sagegreen">
                                                        <div id="CardsNationalScienceBarGraph_class8">

                                                        </div>  
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                      <div class="glimps-graph light-pink">
                                                        <div id="CardsNationalMathBarGraph_class8">

                                                        </div>  
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>  
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="accordion commonAccordion" id="nc8-perAccordion">
                                              <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionOne">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc8-perAccordioncollapseOne">
                                                  Performance of States by Gender
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc8-perAccordionOne">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue">
                                                              <div id="GenderNationalLanguageBarGraph_class8">

                                                              </div>                                                                  
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green">
                                                            <div id="GenderNationalSocialBarGraph_class8">

                                                            </div>        
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen">
                                                            <div id="GenderNationalScienceBarGraph_class8">

                                                            </div>      
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink">
                                                            <div id="GenderNationalMathBarGraph_class8">

                                                            </div>  
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionTwo">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseTwo" aria-expanded="true" aria-controls="nc8-perAccordioncollapseTwo">
                                                  Performance of States by Location
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc8-perAccordionTwo">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue">
                                                              <div id="LocationNationalLanguageBarGraph_class8">

                                                              </div> 
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green">
                                                            <div id="LocationNationalSocialBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen">
                                                            <div id="LocationNationalScienceBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink">
                                                            <div id="LocationNationalMathBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionThree">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseThree" aria-expanded="true" aria-controls="nc8-perAccordioncollapseThree">
                                                  Performance of States by School Management
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc8-perAccordionThree">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue">
                                                              <div id="ManagementNationalLanguageBarGraph_class8">

                                                              </div> 
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green">
                                                            <div id="ManagementNationalSocialBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen">
                                                            <div id="ManagementNationalScienceBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink">
                                                            <div id="ManagementNationalMathBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <!-- <div class="accordion-item mtb-30">
                                                <h2 class="accordion-header" id="nc8-perAccordionfour">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapsefour" aria-expanded="true" aria-controls="nc8-perAccordioncollapsefour">
                                                    Performance by Social Group
                                                  </button>
                                                </h2>
                                                <div id="nc8-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc8-perAccordionfour">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="glimps-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="glimps-graph light-blue">
                                                              <div id="SocialGroupNationalLanguageBarGraph_class8">

                                                              </div> 
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="glimps-graph light-green">
                                                            <div id="SocialGroupNationalSocialBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="glimps-graph light-sagegreen">
                                                            <div id="SocialGroupNationalScienceBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="glimps-graph light-pink">
                                                            <div id="SocialGroupNationalMathBarGraph_class8">

                                                            </div> 
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                              </div> -->
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="glimpsesnational_class10" role="tabpanel" aria-labelledby="nc10-result-tab">
                                  <div class="nc10-result-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            PERFORMANCE OF STATES
                                          </h2>
                                          <div class="glimps-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                      <div class="glimps-graph light-red">
                                                          <div id="CardsNationalMilBarGraph_class10"></div>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                    <div class="glimps-graph light-green">
                                                        <div id="CardsNationalSocialBarGraph_class10"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                    <div class="glimps-graph light-purple">
                                                    <div id="CardsNationalEnglishBarGraph_class10"></div>

                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                    <div class="glimps-graph light-sagegreen">
                                                        <div id="CardsNationalScienceBarGraph_class10"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                    <div class="glimps-graph light-pink">
                                                      <div id="CardsNationalMathBarGraph_class10"></div>

                                                    </div>
                                                  </div>
                                                </div>
                                              </div>  
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="accordion commonAccordion" id="nc10-perAccordion">
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc10-perAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc10-perAccordioncollapseOne">
                                                Performance of States by Gender

                                                </button>
                                              </h2>
                                              <div id="nc10-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc10-perAccordionOne">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="glimps-graph light-red">
                                                              <div id="GenderNationalMilBarGraph_class10">
                                                                
                                                              </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                        <div class="glimps-graph light-green">
                                                          <div id="GenderNationalSocialBarGraph_class10">
                                                                
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                        <div class="glimps-graph light-purple">
                                                          <div id="GenderNationalEnglishBarGraph_class10">
                                                                  
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                        <div class="glimps-graph light-sagegreen">
                                                          <div id="GenderNationalScienceBarGraph_class10">
                                                                  
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                        <div class="glimps-graph light-pink">
                                                          <div id="GenderNationalMathBarGraph_class10">
                                                                  
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                 
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc10-perAccordionTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapseTwo" aria-expanded="false" aria-controls="nc10-perAccordioncollapseTwo">
                                                Performance of States by Location
                                                </button>
                                              </h2>
                                              <div id="nc10-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc10-perAccordionTwo">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="glimps-graph light-red">
                                                          <div id="LocationNationalMilBarGraph_class10">
                                                                
                                                          </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                        <div class="glimps-graph light-green">
                                                        <div id="LocationNationalSocialBarGraph_class10">
                                                                
                                                        </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                        <div class="glimps-graph light-purple">
                                                        <div id="LocationNationalEnglishBarGraph_class10">
                                                                
                                                        </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                        <div class="glimps-graph light-sagegreen">
                                                          <div id="LocationNationalScienceBarGraph_class10">
                                                                  
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                        <div class="glimps-graph light-pink">
                                                          <div id="LocationNationalMathBarGraph_class10">
                                                                  
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc10-perAccordionThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapseThree" aria-expanded="false" aria-controls="nc10-perAccordioncollapseThree">
                                                Performance of States by School Management
                                                </button>
                                              </h2>
                                              <div id="nc10-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc10-perAccordionThree">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="glimps-graph light-red">
                                                            <div id="ManagementNationalMilBarGraph_class10">
                                                                  
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                        <div class="glimps-graph light-green">
                                                          <div id="ManagementNationalSocialBarGraph_class10">
                                                                    
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                        <div class="glimps-graph light-purple">
                                                          <div id="ManagementNationalEnglishBarGraph_class10">
                                                                    
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                        <div class="glimps-graph light-sagegreen">
                                                          <div id="ManagementNationalScienceBarGraph_class10">
                                                                    
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                        <div class="glimps-graph light-pink">
                                                          <div id="ManagementNationalMathBarGraph_class10">
                                                                    
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div> 
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <!-- <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="nc10-perAccordionfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapsefour" aria-expanded="false" aria-controls="nc10-perAccordioncollapsefour">
                                                  Performance by Social Group
                                                </button>
                                              </h2>
                                              <div id="nc10-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc10-perAccordionfour">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="glimps-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="glimps-graph light-red">
                                                          <div id="SocialGroupNationalMilBarGraph_class10">
                                                                  
                                                          </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                        <div class="glimps-graph light-green">
                                                        <div id="SocialGroupNationalSocialBarGraph_class10">
                                                                  
                                                        </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                        <div class="glimps-graph light-purple">
                                                        <div id="SocialGroupNationalEnglishBarGraph_class10">
                                                                  
                                                        </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                        <div class="glimps-graph light-sagegreen">
                                                          <div id="SocialGroupNationalScienceBarGraph_class10">
                                                                    
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="glimps-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                        <div class="glimps-graph light-pink">
                                                          <div id="SocialGroupNationalMathBarGraph_class10">
                                                                    
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> -->
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="tab-pane fade" id="glimpsesnational_classall" role="tabpanel" aria-labelledby="nac-result-tab">
                                  <div class="nac-result-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            PERFORMANCE OF STATES
                                          </h2>
                                          <div class="glimps-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                    <div class="glimps-graph light-blue">
                                                        <div id="CardsNationalLanguageBarGraph_classall"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                    <div class="glimps-graph light-pink">
                                                      <div id="CardsNationalMathBarGraph_classall"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                    <div class="glimps-graph light-yellow">
                                                      <div id="CardsNationalEvsBarGraph_classall"></div>

                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="glimps-card">
                                                      <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                      <div class="glimps-graph light-red">
                                                      <div id="CardsNationalMilBarGraph_classall"></div>

                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card"> 
                                                    <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                    <div class="glimps-graph light-green">
                                                    <div id="CardsNationalSocialBarGraph_classall"></div>

                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                    <div class="glimps-graph light-purple">
                                                    <div id="CardsNationalEnglishBarGraph_classall"></div>

                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="glimps-card">
                                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                    <div class="glimps-graph light-sagegreen">
                                                    <div id="CardsNationalScienceBarGraph_classall"></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>  
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE
                                          </h2>
                                          <div class="accordion commonAccordion" id="sac-perAccordion">
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-perAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sac-perAccordioncollapseOne" aria-expanded="true" aria-controls="sac-perAccordioncollapseOne">
                                                Performance of States by Gender
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="sac-perAccordionOne">
                                                <div class="accordion-body">
                                                  <div class="graph-card-container graph-linecard-container">
                                                    <div class="row">
                                                      <div class="col-md-12 p-0">
                                                          <div class="graph-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="graph-card-content light-blue">
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 3
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                          <div id="GenderNational3LanguageBarGraph_classall"></div>
                                                                      </div>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                          <div id="GenderNational5LanguageBarGraph_classall"></div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 8
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                          <div id="GenderNational8LanguageBarGraph_classall"></div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div> 
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="graph-card-content light-pink">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="GenderNational3MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="GenderNational5MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr>
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="GenderNational8MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="GenderNational10MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                          <div class="graph-card-content light-yellow">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="GenderNational3EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="GenderNational5EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="graph-card-content light-sagegreen">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="GenderNational8ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="GenderNational10ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="graph-card-content light-green">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="GenderNational8SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="GenderNational10SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="graph-card-content light-red">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-red">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-red">
                                                                    <div id="GenderNational10MilBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                          <div class="graph-card-content light-purple">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-purple">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-purple">
                                                                    <div id="GenderNational10EnglishBarGraph_classall"></div>

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
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-perAccordionTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sac-perAccordioncollapseTwo" aria-expanded="false" aria-controls="sac-perAccordioncollapseTwo">
                                                Performance of States by Location
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="sac-perAccordionTwo">
                                                <div class="accordion-body">
                                                  <div class="graph-card-container graph-linecard-container">
                                                    <div class="row">
                                                      <div class="col-md-12 p-0">
                                                          <div class="graph-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="graph-card-content light-blue">
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 3
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="LocationNational3LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="LocationNational5LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 8
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="LocationNational8LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div> 
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="graph-card-content light-pink">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="LocationNational3MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="LocationNational5MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr>
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="LocationNational8MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="LocationNational10MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                          <div class="graph-card-content light-yellow">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="LocationNational3EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="LocationNational5EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="graph-card-content light-sagegreen">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="LocationNational8ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="LocationNational10ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="graph-card-content light-green">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="LocationNational8SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="LocationNational10SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="graph-card-content light-red">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-red">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-red">
                                                                    <div id="LocationNational10MilBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                          <div class="graph-card-content light-purple">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-purple">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-purple">
                                                                    <div id="LocationNational10EnglishBarGraph_classall"></div>

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
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-perAccordionThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sac-perAccordioncollapseThree" aria-expanded="false" aria-controls="sac-perAccordioncollapseThree">
                                                Performance of States by School Management
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="sac-perAccordionThree">
                                                <div class="accordion-body">
                                                  <div class="graph-card-container graph-linecard-container">
                                                    <div class="row">
                                                      <div class="col-md-12 p-0">
                                                          <div class="graph-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="graph-card-content light-blue">
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 3
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="ManagementNational3LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="ManagementNational5LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 8
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="ManagementNational8LanguageBarGraph_classall"></div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div> 
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="graph-card-content light-pink">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                      <div id="ManagementNational3MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="ManagementNational5MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr>
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="ManagementNational8MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="ManagementNational10MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                          <div class="graph-card-content light-yellow">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="ManagementNational3EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="ManagementNational5EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="graph-card-content light-sagegreen">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="ManagementNational8ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="ManagementNational10ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="graph-card-content light-green">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="ManagementNational8SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="ManagementNational10SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="graph-card-content light-red">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-red">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-red">
                                                                    <div id="ManagementNational10MilBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                          <div class="graph-card-content light-purple">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-purple">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-purple">
                                                                    <div id="ManagementNational10EnglishBarGraph_classall"></div>

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
                                            <!-- <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-perAccordionfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sac-perAccordioncollapsefour" aria-expanded="false" aria-controls="sac-perAccordioncollapsefour">
                                                  Performance by Social Group
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="sac-perAccordionfour">
                                                <div class="accordion-body">
                                                  <div class="graph-card-container graph-linecard-container">
                                                    <div class="row">
                                                      <div class="col-md-12 p-0">
                                                          <div class="graph-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                                                            <div class="graph-card-content light-blue">
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 3
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="SocialGroupNational3LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="SocialGroupNational5LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 8
                                                                      </h3>
                                                                    </div>
                                                                    <div class="glimps-card">
                                                                      <div class="glimps-graph light-blue">
                                                                      <div id="SocialGroupNational8LanguageBarGraph_classall"></div>

                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div> 
                                                          </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                                          <div class="graph-card-content light-pink">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="SocialGroupNational3MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="SocialGroupNational5MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr>
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="SocialGroupNational8MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-pink">
                                                                    <div id="SocialGroupNational10MathBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                                                          <div class="graph-card-content light-yellow">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 3
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="SocialGroupNational3EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-yellow">
                                                                    <div id="SocialGroupNational5EvsBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                                                          <div class="graph-card-content light-sagegreen">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="SocialGroupNational8ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-sagegreen">
                                                                    <div id="SocialGroupNational10ScienceBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                                                          <div class="graph-card-content light-green">
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 8
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="SocialGroupNational8SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-green">
                                                                    <div id="SocialGroupNational10SocialBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                                                          <div class="graph-card-content light-red">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-red">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-red">
                                                                    <div id="SocialGroupNational10MilBarGraph_classall"></div>

                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 p-0">
                                                        <div class="graph-card">
                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                                                          <div class="graph-card-content light-purple">
                                                              <div class="row">
                                                                <div class="col-md-12">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-purple">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="glimps-card">
                                                                    <div class="glimps-graph light-purple">
                                                                    <div id="SocialGroupNational10EnglishBarGraph_classall"></div>

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
                                            </div> -->
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
@endsection