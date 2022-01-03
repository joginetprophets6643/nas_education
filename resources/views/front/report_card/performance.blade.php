@section('performance')
<div class="tab-pane fade" id="performance_class3" role="tabpanel" aria-labelledby="performance-tab">
                                  <div class="per-card-wrap">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          AVERAGE PERFORMANCE OF STUDENTS
                                        </h2>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="per-card card-blue">
                                            <h2>
                                              <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" /> Language
                                            </h2>
                                            <div class="per-card-content dark-blue">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_lang_district_class3">77</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_lang_satate_class3">68</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_lang_national_class3">32</span>
                                                <p class="title">National</p>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-pink">
                                          <h2>
                                            <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" /> Mathematics
                                          </h2>
                                          <div class="per-card-content dark-pink">
                                            <div class="per-card-desc">
                                              <span class="total-no"  id="performance_math_district_class3">77</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc" >
                                              <span class="total-no" id="performance_math_state_class3">68</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc" id="performance_math_national_class3">
                                              <span class="total-no">32</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-yellow">
                                          <h2>
                                            <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" /> EVS
                                          </h2>
                                          <div class="per-card-content dark-yellow">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_district_class3">77</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_state_class3">68</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_national_class3">32</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="accordion" id="perAccordion">
                                          <div class="accordion-item mtb-30" id="gender_section_performance_class3" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                Performance by Gender
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="perAccordionOne">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderLanguageBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderMathBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="location_section_performance_class3" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionTwo">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseTwo" aria-expanded="true" aria-controls="perAccordioncollapseTwo">
                                                Performance by Location
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseTwo" class="accordion-collapse collapse show" aria-labelledby="perAccordionTwo">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationLanguageBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationMathBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="management_section_performance_class3" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionThree">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseThree" aria-expanded="true" aria-controls="perAccordioncollapseThree">
                                                Performance by Managment
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseThree" class="accordion-collapse collapse show" aria-labelledby="perAccordionThree">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementLanguageBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementMathBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="social_section_performance_class3" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionfour">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapsefour" aria-expanded="true" aria-controls="perAccordioncollapsefour">
                                                Performance by Social Group
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapsefour" class="accordion-collapse collapse show" aria-labelledby="perAccordionfour">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialLanguageBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialMathBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          PERCENTAGE OF STUDENTS IN PERFORMANCE LEVELS
                                        </h2>
                                        <div class="per-table">
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="blue-level-1">Language</th>
                                                <th scope="col" class="pink-level-1">Mathematics</th>
                                                <th scope="col" class="yellow-level-1">EVS</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row" class="bg-grey">BELOW BASIC</th>
                                                <td class="blue-level-2">2</td>
                                                <td class="pink-level-2">10</td>
                                                <td class="yellow-level-2">2</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">BASIC</th>
                                                <td class="blue-level-3">18</td>
                                                <td class="pink-level-3">19</td>
                                                <td class="yellow-level-3">18</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" class="bg-grey">PROFICIENT</th>
                                                <td class="blue-level-4">58</td>
                                                <td class="pink-level-4">25</td>
                                                <td class="yellow-level-4">58</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ADVANCED</th>
                                                <td class="blue-level-5">22</td>
                                                <td class="pink-level-5">50</td>
                                                <td class="yellow-level-5">22</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
</div>
<div class="tab-pane fade" id="performance_class8" role="tabpanel" aria-labelledby="performance3-tab">
                                  <div class="per-card-wrap">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          AVERAGE PERFORMANCE OF STUDENTS
                                        </h2>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="per-card card-blue">
                                            <h2>
                                              <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25" /> Language
                                            </h2>
                                            <div class="per-card-content dark-blue">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_lang_district_class8">77</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_lang_state_class8">68</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_lang_state_class8">32</span>
                                                <p class="title">National</p>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-sagegreen">
                                          <h2>
                                            <img src="{{asset('assets/front/images/science.svg')}}" alt="img" class="img-fluid" width="20" /> Science
                                          </h2>
                                          <div class="per-card-content dark-sagegreen">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_science_district_class8">77</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_science_state_class8">68</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no"id="performance_science_national_class8">32</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-pink">
                                          <h2>
                                            <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="35" /> Mathematics
                                          </h2>
                                          <div class="per-card-content dark-pink">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_district_class8">77</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_state_class8">68</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_national_class8">32</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-green">
                                          <h2>
                                            <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="img" class="img-fluid" width="20" /> Social Science
                                          </h2>
                                          <div class="per-card-content dark-green">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_social_district_class8">77</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc" >
                                              <span class="total-no" id="performance_social_state_class8">68</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_social_national_class8">32</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="accordion" id="perAccordion">
                                          <div class="accordion-item mtb-30" id="gender_section_performance_class8" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                Performance by Gender
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="perAccordionOne">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderLanguageBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderMathBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderSocialBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="location_section_performance_class8" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionTwo">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseTwo" aria-expanded="true" aria-controls="perAccordioncollapseTwo">
                                                Performance by Location
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseTwo" class="accordion-collapse collapse show" aria-labelledby="perAccordionTwo">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationLanguageBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationMathBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationSocialBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="management_section_performance_class8" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionThree">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseThree" aria-expanded="true" aria-controls="perAccordioncollapseThree">
                                                Performance by Managment
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseThree" class="accordion-collapse collapse show" aria-labelledby="perAccordionThree">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementLanguageBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementMathBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementSocialBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="social_section_performance_class8" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionfour">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapsefour" aria-expanded="true" aria-controls="perAccordioncollapsefour">
                                                Performance by Social Group
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapsefour" class="accordion-collapse collapse show" aria-labelledby="perAccordionfour">
                                              <div class="accordion-body">
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-blue indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Language</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialLanguageBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialMathBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialSocialBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          PERCENTAGE OF STUDENTS IN PERFORMANCE LEVELS
                                        </h2>
                                        <div class="per-table">
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="blue-level-1">Language</th>
                                                <th scope="col" class="sagegreen-level-1">Science</th>
                                                <th scope="col" class="pink-level-1">Mathematics</th>
                                                <th scope="col" class="green-level-1">Social Science</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row" class="bg-grey">BELOW BASIC</th>
                                                <td class="blue-level-2">2</td>
                                                <td class="sagegreen-level-2">2</td>
                                                <td class="pink-level-2">10</td>
                                                <td class="green-level-2">2</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">BASIC</th>
                                                <td class="blue-level-3">18</td>
                                                <td class="sagegreen-level-3">2</td>
                                                <td class="pink-level-3">19</td>
                                                <td class="green-level-3">18</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" class="bg-grey">PROFICIENT</th>
                                                <td class="blue-level-4">58</td>
                                                <td class="sagegreen-level-4">2</td>
                                                <td class="pink-level-4">25</td>
                                                <td class="green-level-4">58</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ADVANCED</th>
                                                <td class="blue-level-5">22</td>
                                                <td class="sagegreen-level-5">2</td>
                                                <td class="pink-level-5">50</td>
                                                <td class="green-level-5">22</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>                           
@endsection