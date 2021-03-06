@section('performance')
<div class="tab-pane fade" id="performance_class3" role="tabpanel" aria-labelledby="performance-tab">
                                  <div class="per-card-wrap">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          DISTRICT PERFORMANCE OF STUDENTS VIS-A-VIS STATE AND NATIONAL IN PERCENT CORRECT
                                        </h2>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="per-card card-blue">
                                            <h2>
                                              <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="35"  /> Language
                                            </h2>
                                            <div class="per-card-content dark-blue">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_district_class3">0</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_state_class3">0</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_national_class3">0</span>
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
                                              <span class="total-no"  id="performance_math_district_class3">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc" >
                                              <span class="total-no" id="performance_math_state_class3">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_national_class3">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-yellow">
                                          <h2>
                                            <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" width="35"  /> EVS
                                          </h2>
                                          <div class="per-card-content dark-yellow">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_district_class3">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_state_class3">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_national_class3">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="accordion commonAccordion" id="perAccordion5">
                                          <div class="accordion-item mtb-30" id="gender_section_performance_class3" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                Performance by Gender
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="perAccordionOne" data-bs-parent="#perAccordion5">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseTwo" aria-expanded="false" aria-controls="perAccordioncollapseTwo">
                                                Performance by School Location
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="perAccordionTwo" data-bs-parent="#perAccordion5">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseThree" aria-expanded="false" aria-controls="perAccordioncollapseThree">
                                                Performance by School Management
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="perAccordionThree" data-bs-parent="#perAccordion5">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapsefour" aria-expanded="false" aria-controls="perAccordioncollapsefour">
                                                Performance by Social Group
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="perAccordionfour" data-bs-parent="#perAccordion5">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                          <div id="SocialGroupLanguageBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupEvsBarGraph_class3"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="SocialGroupMathBarGraph_class3"></div>
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
                                          PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
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
                                                <td class="blue-level-2" id="peformance_Language_below_basic_table_class3">0</td>
                                                <td class="pink-level-2" id="peformance_Math_below_basic_table_class3">0</td>
                                                <td class="yellow-level-2" id="peformance_Evs_below_basic_table_class3">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">BASIC</th>
                                                <td class="blue-level-3" id="peformance_Language_basic_table_class3">0</td>
                                                <td class="pink-level-3" id="peformance_Math_basic_table_class3">0</td>
                                                <td class="yellow-level-3" id="peformance_Evs_basic_table_class3">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" class="bg-grey">PROFICIENT</th>
                                                <td class="blue-level-4" id="peformance_Language_proficient_table_class3">0</td>
                                                <td class="pink-level-4" id="peformance_Math_proficient_table_class3">0</td>
                                                <td class="yellow-level-4" id="peformance_Evs_proficient_table_class3">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ADVANCED</th>
                                                <td class="blue-level-5" id="peformance_Language_advanced_table_class3">0</td>
                                                <td class="pink-level-5" id="peformance_Math_advanced_table_class3">0</td>
                                                <td class="yellow-level-5" id="peformance_Evs_advanced_table_class3">0</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
</div>

<div class="tab-pane fade" id="performance_class5" role="tabpanel" aria-labelledby="performance-tab">
                                  <div class="per-card-wrap">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          DISTRICT PERFORMANCE OF STUDENTS VIS-A-VIS STATE AND NATIONAL IN PERCENT CORRECT
                                        </h2>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="per-card card-blue">
                                            <h2>
                                              <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="35"  /> Language
                                            </h2>
                                            <div class="per-card-content dark-blue">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_district_class5">0</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_state_class5">0</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_national_class5">0</span>
                                                <p class="title">National</p>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-pink">
                                          <h2>
                                            <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid"  width="35" /> Mathematics
                                          </h2>
                                          <div class="per-card-content dark-pink">
                                            <div class="per-card-desc">
                                              <span class="total-no"  id="performance_math_district_class5">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc" >
                                              <span class="total-no" id="performance_math_state_class5">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_national_class5">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-yellow">
                                          <h2>
                                            <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid"  width="35" /> EVS
                                          </h2>
                                          <div class="per-card-content dark-yellow">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_district_class5">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_state_class5">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_national_class5">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="accordion commonAccordion" id="perAccordion">
                                          <div class="accordion-item mtb-30" id="gender_section_performance_class5" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                Performance by Gender
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="perAccordionOne" data-bs-parent="#perAccordion">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                          <div id="GenderLanguageBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderEvsBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="GenderMathBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="location_section_performance_class5" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionTwo">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseTwo" aria-expanded="false" aria-controls="perAccordioncollapseTwo">
                                                Performance by School Location
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="perAccordionTwo" data-bs-parent="#perAccordion">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                          <div id="LocationLanguageBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationEvsBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="LocationMathBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="management_section_performance_class5" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionThree">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseThree" aria-expanded="false" aria-controls="perAccordioncollapseThree">
                                                Performance by School Management
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="perAccordionThree" data-bs-parent="#perAccordion">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                          <div id="ManagementLanguageBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementEvsBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="ManagementMathBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="social_section_performance_class5" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionfour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapsefour" aria-expanded="false" aria-controls="perAccordioncollapsefour">
                                                Performance by Social Group
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="perAccordionfour" data-bs-parent="#perAccordion">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                          <div id="SocialGroupLanguageBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupEvsBarGraph_class5"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-yellow indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">EVS</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="SocialGroupMathBarGraph_class5"></div>
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
                                          PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
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
                                                <td class="blue-level-2" id="peformance_Language_below_basic_table_class5">0</td>
                                                <td class="pink-level-2" id="peformance_Math_below_basic_table_class5">0</td>
                                                <td class="yellow-level-2" id="peformance_Evs_below_basic_table_class5">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">BASIC</th>
                                                <td class="blue-level-3" id="peformance_Language_basic_table_class5">0</td>
                                                <td class="pink-level-3" id="peformance_Math_basic_table_class5">0</td>
                                                <td class="yellow-level-3" id="peformance_Evs_basic_table_class5">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" class="bg-grey">PROFICIENT</th>
                                                <td class="blue-level-4" id="peformance_Language_proficient_table_class5">0</td>
                                                <td class="pink-level-4" id="peformance_Math_proficient_table_class5">0</td>
                                                <td class="yellow-level-4" id="peformance_Evs_proficient_table_class5">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ADVANCED</th>
                                                <td class="blue-level-5" id="peformance_Language_advanced_table_class5">0</td>
                                                <td class="pink-level-5" id="peformance_Math_advanced_table_class5">0</td>
                                                <td class="yellow-level-5" id="peformance_Evs_advanced_table_class5">0</td>
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
                                          DISTRICT PERFORMANCE OF STUDENTS VIS-A-VIS STATE AND NATIONAL IN PERCENT CORRECT
                                        </h2>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="per-card card-blue">
                                            <h2>
                                              <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25" /> Language
                                            </h2>
                                            <div class="per-card-content dark-blue">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_district_class8">0</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_state_class8">0</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_national_class8">0</span>
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
                                              <span class="total-no" id="performance_math_district_class8">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_state_class8">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_national_class8">0</span>
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
                                              <span class="total-no" id="performance_sci_district_class8">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sci_state_class8">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no"id="performance_sci_national_class8">0</span>
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
                                              <span class="total-no" id="performance_sst_district_class8">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc" >
                                              <span class="total-no" id="performance_sst_state_class8">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sst_national_class8">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="accordion commonAccordion" id="perAccordion8">
                                          <div class="accordion-item mtb-30" id="gender_section_performance_class8" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                Performance by Gender
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="perAccordionOne" data-bs-parent="#perAccordion8">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderSocialBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
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
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseTwo" aria-expanded="false" aria-controls="perAccordioncollapseTwo">
                                                Performance by School Location
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="perAccordionTwo" data-bs-parent="#perAccordion8">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationSocialBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
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
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseThree" aria-expanded="false" aria-controls="perAccordioncollapseThree">
                                                Performance by School Management
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="perAccordionThree" data-bs-parent="#perAccordion8">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementSocialBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
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
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapsefour" aria-expanded="false" aria-controls="perAccordioncollapsefour">
                                                Performance by Social Group
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="perAccordionfour" data-bs-parent="#perAccordion8">
                                              <div class="accordion-body">
                                                <div class="row">
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
                                                          <div id="SocialGroupLanguageBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupScienceBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-pink indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Mathematics</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupMathBarGraph_class8"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-1 order-md-2">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupSocialBarGraph_class8"></div>
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
                                          PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
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
                                                <td class="blue-level-2"  id="peformance_Language_below_basic_table_class8">0</td>
                                                <td class="sagegreen-level-2"  id="peformance_Science_below_basic_table_class8">0</td>
                                                <td class="pink-level-2"  id="peformance_Math_below_basic_table_class8">0</td>
                                                <td class="green-level-2"  id="peformance_Social_below_basic_table_class8">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">BASIC</th>
                                                <td class="blue-level-3" id="peformance_Language_basic_table_class8">0</td>
                                                <td class="sagegreen-level-3" id="peformance_Science_basic_table_class8">0</td>
                                                <td class="pink-level-3" id="peformance_Math_basic_table_class8">0</td>
                                                <td class="green-level-3" id="peformance_Social_basic_table_class8">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" class="bg-grey">PROFICIENT</th>
                                                <td class="blue-level-4" id="peformance_Language_proficient_table_class8">0</td>
                                                <td class="sagegreen-level-4" id="peformance_Science_proficient_table_class8">0</td>
                                                <td class="pink-level-4" id="peformance_Math_proficient_table_class8">0</td>
                                                <td class="green-level-4" id="peformance_Social_proficient_table_class8">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">ADVANCED</th>
                                                <td class="blue-level-5" id="peformance_Language_advanced_table_class8">0</td>
                                                <td class="sagegreen-level-5" id="peformance_Science_advanced_table_class8">0</td>
                                                <td class="pink-level-5" id="peformance_Math_advanced_table_class8">0</td>
                                                <td class="green-level-5" id="peformance_Social_advanced_table_class8">0</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
</div>

<div class="tab-pane fade" id="performance_class10" role="tabpanel" aria-labelledby="performance3-tab">
                                  <div class="per-card-wrap">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          DISTRICT PERFORMANCE OF STUDENTS VIS-A-VIS STATE AND NATIONAL IN PERCENT CORRECT
                                        </h2>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="per-card card-red">
                                            <h2>
                                              <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="img" class="img-fluid" width="35" /> MIL
                                            </h2>
                                            <div class="per-card-content dark-red">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_mil_district_class10">0</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_mil_state_class10">0</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_mil_national_class10">0</span>
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
                                              <span class="total-no" id="performance_math_district_class10">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_state_class10">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_national_class10">0</span>
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
                                              <span class="total-no" id="performance_sci_district_class10">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sci_state_class10">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sci_national_class10">0</span>
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
                                              <span class="total-no" id="performance_sst_district_class10">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sst_state_class10">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sst_national_class10">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-purple">
                                          <h2>
                                            <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="img" class="img-fluid" width="25" /> English
                                          </h2>
                                          <div class="per-card-content dark-purple">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_eng_district_class10">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_eng_state_class10">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_eng_national_class10">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                      
                                      <div class="col-md-12">
                                        <div class="accordion commonAccordion" id="perAccordion10">
                                          <div class="accordion-item mtb-30" id="gender_section_performance_class10" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                Performance by Gender
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="perAccordionOne" data-bs-parent="#perAccordion10">
                                              <div class="accordion-body">
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-red indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">MIL</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-red">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderMilBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderSocialBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-purple indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">English</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-purple">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderEnglishBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderScienceBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="GenderMathBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="location_section_performance_class10" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionTwo">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseTwo" aria-expanded="false" aria-controls="perAccordioncollapseTwo">
                                                Performance by School Location
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="perAccordionTwo" data-bs-parent="#perAccordion10">
                                              <div class="accordion-body">
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-red indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">MIL</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-red">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationMilBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationSocialBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-purple indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">English</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-purple">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationEnglishBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationScienceBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="LocationMathBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="management_section_performance_class10" style="display:none;" >
                                            <h2 class="accordion-header" id="perAccordionThree">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapseThree" aria-expanded="false" aria-controls="perAccordioncollapseThree">
                                                Performance by School Management
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="perAccordionThree" data-bs-parent="#perAccordion10">
                                              <div class="accordion-body">
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-red indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">MIL</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-red">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementMilBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementSocialBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-purple indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">English</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-purple">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementEnglishBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementScienceBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="ManagementMathBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="social_section_performance_class10" style="display:none;">
                                            <h2 class="accordion-header" id="perAccordionfour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#perAccordioncollapsefour" aria-expanded="false" aria-controls="perAccordioncollapsefour">
                                                Performance by Social Group
                                              </button>
                                            </h2>
                                            <div id="perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="perAccordionfour" data-bs-parent="#perAccordion10">
                                              <div class="accordion-body">
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-red indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">MIL</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-red">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupMilBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupSocialBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-green indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Social Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-4 p-0">
                                                    <div class="percategory-wrap card-purple indigate-right">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">English</p>
                                                      </div>
                                                      
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-purple">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupEnglishBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-md-8 p-0 order-2 order-md-1">
                                                      <div class="per-graph-wrap light-sagegreen">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialGroupScienceBarGraph_class10"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4 p-0 order-1 order-md-2">
                                                    <div class="percategory-wrap card-sagegreen indigate-left">
                                                      <div class="percategory-content">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-gluid" />
                                                        <p class="title">Science</p>
                                                      </div>
                                                    </div> 
                                                  </div>
                                                </div>
                                                <div class="row">
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
                                                          <div id="SocialGroupMathBarGraph_class10"></div>
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
                                          PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
                                        </h2>
                                        <div class="per-table">
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="red-level-1">MIL</th>
                                                <th scope="col" class="green-level-1">Social Science</th>
                                                <th scope="col" class="purple-level-1">English</th>
                                                <th scope="col" class="sagegreen-level-1">Science</th>
                                                <th scope="col" class="pink-level-1">Mathematics</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row" class="bg-grey" >BELOW BASIC</th>
                                                <td class="red-level-2"  id="peformance_Mil_below_basic_table_class10">0</td>
                                                <td class="green-level-2" id="peformance_Social_below_basic_table_class10">0</td>
                                                <td class="purple-level-2" id="peformance_English_below_basic_table_class10">0</td>
                                                <td class="sagegreen-level-2" id="peformance_Science_below_basic_table_class10">0</td>
                                                <td class="pink-level-2" id="peformance_Math_below_basic_table_class10">0</td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BASIC</th>
                                                <td class="red-level-3"  id="peformance_Mil_basic_table_class10">0</td>
                                                <td class="green-level-3" id="peformance_Social_basic_table_class10">0</td>
                                                <td class="purple-level-3" id="peformance_English_basic_table_class10">0</td>
                                                <td class="sagegreen-level-3" id="peformance_Science_basic_table_class10">0</td>
                                                <td class="pink-level-3" id="peformance_Math_basic_table_class10">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" class="bg-grey">PROFICIENT</th>
                                                <td class="red-level-4"  id="peformance_Mil_proficient_table_class10">0</td>
                                                <td class="green-level-4"  id="peformance_Social_proficient_table_class10">0</td>
                                                <td class="purple-level-4"  id="peformance_English_proficient_table_class10">0</td>
                                                <td class="sagegreen-level-4"  id="peformance_Science_proficient_table_class10">0</td>
                                                <td class="pink-level-4 " id="peformance_Math_proficient_table_class10">0</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row" >ADVANCED</th>
                                                <td class="red-level-5"  id="peformance_Mil_advanced_table_class10">0</td>
                                                <td class="green-level-5" id="peformance_Social_advanced_table_class10">0</td>
                                                <td class="purple-level-5" id="peformance_English_advanced_table_class10">0</td>
                                                <td class="sagegreen-level-5" id="peformance_Science_advanced_table_class10">0</td>
                                                <td class="pink-level-5" id="peformance_Math_advanced_table_class10">0</td>
                                                
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
</div>    

<div class="tab-pane fade" id="performance_classall" role="tabpanel" aria-labelledby="performance-tab">
                                  <div class="per-card-wrap">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          DISTRICT PERFORMANCE OF STUDENTS VIS-A-VIS STATE AND NATIONAL IN PERCENT CORRECT
                                        </h2>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-blue">
                                          <h2>
                                            <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25" /> Language
                                          </h2>
                                          <div class="per-card-content dark-blue">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_district_classall">0</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_state_classall">0</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_language_national_classall">0</span>
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
                                              <span class="total-no"  id="performance_math_district_classall">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc" >
                                              <span class="total-no" id="performance_math_state_classall">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_math_national_classall">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-yellow">
                                          <h2>
                                            <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" width="35" /> EVS
                                          </h2>
                                          <div class="per-card-content dark-yellow">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_district_classall">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_state_classall">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_evs_national_classall">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="per-card card-red">
                                            <h2>
                                              <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="img" class="img-fluid" width="35" /> MIL
                                            </h2>
                                            <div class="per-card-content dark-red">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_mil_district_classall">0</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_mil_state_classall">0</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performance_mil_national_classall">0</span>
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
                                              <span class="total-no" id="performance_sci_district_classall">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sci_state_classall">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no"id="performance_sci_national_classall">0</span>
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
                                              <span class="total-no" id="performance_sst_district_classall">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc" >
                                              <span class="total-no" id="performance_sst_state_classall">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_sst_national_classall">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="per-card card-purple">
                                          <h2>
                                            <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="img" class="img-fluid" width="25" /> English
                                          </h2>
                                          <div class="per-card-content dark-purple">
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_eng_district_classall">0</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_eng_state_classall">0</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no" id="performance_eng_national_classall">0</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                      
                                      <div class="col-md-12">
                                        <div class="accordion commonAccordion" id="dac-perAccordion">
                                          <div class="accordion-item mtb-30" id="gender_section_performance_classall" style="display:none;">
                                            <h2 class="accordion-header" id="dac-perAccordionOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dac-perAccordioncollapseOne" aria-expanded="true" aria-controls="dac-perAccordioncollapseOne">
                                                Performance by Gender
                                              </button>
                                            </h2>
                                            <div id="dac-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="dac-perAccordionOne" data-bs-parent="#dac-perAccordion">
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
                                                                <h2 class="sac-lo-classtitle title-blue">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderLanguage3BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-blue">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderLanguage5BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr />
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-blue">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderLanguage8BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderMath3BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderMath5BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderMath8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderMath10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderEvs3BarGraph_classall"></div>
                                                                  </figure>
                                                                </div> 
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderEvs5BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderScience8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderScience10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderSocial8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderSocial10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-red">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderMil10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-purple">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="GenderEnglish10BarGraph_classall"></div>
                                                                  </figure>
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
                                          <div class="accordion-item mtb-30" id="location_section_performance_classall" style="display:none;">
                                            <h2 class="accordion-header" id="dac-perAccordionTwo">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-perAccordioncollapseTwo" aria-expanded="false" aria-controls="dac-perAccordioncollapseTwo">
                                                Performance by School Location
                                              </button>
                                              
                                            </h2>
                                            <div id="dac-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="dac-perAccordionTwo" data-bs-parent="#dac-perAccordion">
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
                                                                <h2 class="sac-lo-classtitle title-blue">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationLanguage3BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-blue">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationLanguage5BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr />
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-blue">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationLanguage8BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationMath3BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationMath5BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationMath8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationMath10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationEvs3BarGraph_classall"></div>
                                                                  </figure>
                                                                </div> 
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationEvs5BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationScience8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationScience10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationSocial8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationSocial10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-red">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationMil10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-purple">
                                                                  CLASS 10 
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="LocationEnglish10BarGraph_classall"></div>
                                                                  </figure>
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
                                          <div class="accordion-item mtb-30" id="management_section_performance_classall" style="display:none;">
                                            <h2 class="accordion-header" id="dac-perAccordionThree">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-perAccordioncollapseThree" aria-expanded="false" aria-controls="dac-perAccordioncollapseThree">
                                                Performance by School Management
                                              </button>
                                            </h2>
                                            <div id="dac-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="dac-perAccordionThree" data-bs-parent="#dac-perAccordion">
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
                                                                  <h2 class="sac-lo-classtitle title-blue">
                                                                      CLASS 3
                                                                  </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementLanguage3BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                  <h2 class="sac-lo-classtitle title-blue">
                                                                      CLASS 5
                                                                  </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementLanguage5BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr />
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                  <h2 class="sac-lo-classtitle title-blue">
                                                                      CLASS 8
                                                                  </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementLanguage8BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementMath3BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementMath5BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementMath8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementMath10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 3
                                                                </h2>
                                                              </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementEvs3BarGraph_classall"></div>
                                                                  </figure>
                                                                </div> 
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 5
                                                                </h2>
                                                              </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementEvs5BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementScience8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementScience10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 8
                                                                </h2>
                                                              </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementSocial8BarGraph_classall"></div>
                                                                  </figure>
                                                                </div>  
                                                              </div>
                                                              <div class="col-md-6">
                                                              <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 10
                                                                </h2>
                                                              </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementSocial10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-red">
                                                                  CLASS 10
                                                                </h2>
                                                              </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementMil10BarGraph_classall"></div>
                                                                  </figure>
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
                                                                <h2 class="sac-lo-classtitle title-purple">
                                                                  CLASS 10
                                                                </h2>
                                                              </div>
                                                                <div class="bargraph-wrap">
                                                                  <figure class="highcharts-figure">
                                                                    <div id="ManagementEnglish10BarGraph_classall"></div>
                                                                  </figure>
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
                                          <div class="accordion-item mtb-30" id="social_section_performance_classall" style="display:none;">
                                            <h2 class="accordion-header" id="dac-perAccordionfour">
                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-perAccordioncollapsefour" aria-expanded="false" aria-controls="dac-perAccordioncollapsefour">
                                                Performance by Social Group
                                              </button>
                                            </h2>
                                            <div id="dac-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="dac-perAccordionfour" data-bs-parent="#dac-perAccordion">
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
                                                                      <h2 class="sac-lo-classtitle title-blue">
                                                                          CLASS 3
                                                                      </h2>
                                                                    </div>
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="SocialGroupLanguage3BarGraph_classall"></div>
                                                                      </figure>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                  <h2 class="sac-lo-classtitle title-blue">
                                                                      CLASS 5
                                                                  </h2>
                                                                </div>
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="SocialGroupLanguage5BarGraph_classall"></div>
                                                                      </figure>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <hr />
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                  <h2 class="sac-lo-classtitle title-blue">
                                                                      CLASS 8
                                                                  </h2>
                                                                </div>
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="SocialGroupLanguage8BarGraph_classall"></div>
                                                                      </figure>
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
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath3BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath5BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <hr />
                                                              <div class="row">
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath8BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-pink">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath10BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 3
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupEvs3BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-yellow">
                                                                  CLASS 5
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupEvs5BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupScience8BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-sagegreen">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupScience10BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 8
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupSocial8BarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                <div class="sac-lo-classtitle-wrap">
                                                                <h2 class="sac-lo-classtitle title-green">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupSocial10BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-red">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMil10BarGraph_classall"></div>
                                                                    </figure>
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
                                                                <h2 class="sac-lo-classtitle title-purple">
                                                                  CLASS 10
                                                                </h2>
                                                                </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupEnglish10BarGraph_classall"></div>
                                                                    </figure>
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
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
                                        </h2>
                                        <div class="per-table">
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col"></th>
                                                <th scope="col" class="red-level-1">MIL</th>
                                                <th scope="col" class="green-level-1">Social Science</th>
                                                <th scope="col" class="yellow-level-1">EVS</th>
                                                <th scope="col" class="purple-level-1">English</th>
                                                <th scope="col" class="sagegreen-level-1">Science</th>
                                                <th scope="col" class="blue-level-1">Language</th>
                                                <th scope="col" class="pink-level-1">Mathematics</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row" class="bg-grey">BELOW BASIC</th>
                                                <td class="red-level-2" id="peformance_Mil_below_basic_table_classall">0</td>
                                                <td class="green-level-2" id="peformance_Social_below_basic_table_classall">0</td>
                                                <td class="yellow-level-2" id="peformance_Evs_below_basic_table_classall">0</td>
                                                <td class="purple-level-2" id="peformance_English_below_basic_table_classall">0</td>
                                                <td class="sagegreen-level-2" id="peformance_Science_below_basic_table_classall">0</td>
                                                <td class="blue-level-2" id="peformance_Language_below_basic_table_classall">0</td>
                                                <td class="pink-level-2" id="peformance_Math_below_basic_table_classall">0</td>

                                              </tr>
                                              <tr>
                                                <th scope="row">BASIC</th>
                                                <td class="red-level-3" id="peformance_Mil_basic_table_classall">0</td>
                                                <td class="green-level-3"  id="peformance_Social_basic_table_classall">0</td>
                                                <td class="yellow-level-3" id="peformance_Evs_basic_table_classall">0</td>
                                                <td class="purple-level-3" id="peformance_English_basic_table_classall">0</td>
                                                <td class="sagegreen-level-3" id="peformance_Science_basic_table_classall">0</td>
                                                <td class="blue-level-3" id="peformance_Language_basic_table_classall">0</td>
                                                <td class="pink-level-3" id="peformance_Math_basic_table_classall">0</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" class="bg-grey">PROFICIENT</th>
                                                <td class="red-level-4" id="peformance_Mil_proficient_table_classall">0</td>
                                                <td class="green-level-4"  id="peformance_Social_proficient_table_classall">0</td>
                                                <td class="yellow-level-4" id="peformance_Evs_proficient_table_classall">0</td>
                                                <td class="purple-level-4" id="peformance_English_proficient_table_classall">0</td>
                                                <td class="sagegreen-level-4" id="peformance_Science_proficient_table_classall">0</td>
                                                <td class="blue-level-4" id="peformance_Language_proficient_table_classall">0</td>
                                                <td class="pink-level-4" id="peformance_Math_proficient_table_classall">0</td>
                                                
                                              </tr>
                                              <tr>
                                                <th scope="row">ADVANCED</th>
                                                <td class="red-level-5" id="peformance_Mil_advanced_table_classall">0</td>
                                                <td class="green-level-5"  id="peformance_Social_advanced_table_classall">0</td>
                                                <td class="yellow-level-5" id="peformance_Evs_advanced_table_classall">0</td>
                                                <td class="purple-level-5" id="peformance_English_advanced_table_classall">0</td>
                                                <td class="sagegreen-level-5" id="peformance_Science_advanced_table_classall">0</td>
                                                <td class="blue-level-5" id="peformance_Language_advanced_table_classall">0</td>
                                                <td class="pink-level-5" id="peformance_Math_advanced_table_classall">0</td>
                                                
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
</div>

                                <!-- state screens -->
                                <div class="tab-pane fade" id="performancestate_class3" role="tabpanel" aria-labelledby="sc3-performance-tab">
                                    <div class="sc3-per-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              PERFORMANCE OF STUDENTS IN DIFFERENT SUBJECTS (in percentages)
                                            </h2>
                                            <div class="grade-wrap">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                        <div class="grade-graph-wrap light-blue">
                                                          <figure class="highcharts-figure">
                                                            <div id="performancestate_language_class3"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                      <div class="grade-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_math_class3"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS</h2>
                                                      <div class="grade-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_evs_class3"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          <!-- <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              DISTRIBUTION OF STUDENTS BY RANGE
                                            </h2>
                                            <div class="range-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="range-graph-wrap">
                                                      <figure class="highcharts-figure">
                                                        <div id="doghnut_below_basicstate_class3"></div>
                                                      </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="range-graph-wrap">
                                                    <figure class="highcharts-figure">
                                                      <div id="doghnut_basicstate_class3"></div>
                                                    </figure>
                                                  </div>
                                                </div>
                                              </div>
                                              <hr />
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <div class="range-graph-wrap">
                                                    <figure class="highcharts-figure">
                                                      <div id="doghnut_proficientstate_class3"></div>
                                                    </figure>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="range-graph-wrap">
                                                    <figure class="highcharts-figure">
                                                      <div id="doghnut_advancedstate_class3"></div>
                                                    </figure>
                                                  </div>
                                                </div>
                                              </div>  
                                            </div>
                                          </div> -->
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              AVERAGE PERFORMANCE
                                            </h2>
                                            <div class="accordion commonAccordion" id="sc3-perAccordion">
                                              <div class="accordion-item mtb-30" id="genderstate_section_performance_class3" style="display:none;">
                                                <h2 class="accordion-header" id="sc3-perAccordionOne">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sc3-perAccordioncollapseOne" aria-expanded="true" aria-controls="sc3-perAccordioncollapseOne">
                                                    Performance by Gender
                                                  </button>
                                                </h2>
                                                <div id="sc3-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="sc3-perAccordionOne" data-bs-parent="#sc3-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="GenderLanguagestateBarGraph_class3"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="GenderMathstateBarGraph_class3"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="GenderEvsstateBarGraph_class3"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30" id="locationstate_section_performance_class3" style="display:none;">
                                                <h2 class="accordion-header" id="sc3-perAccordionTwo">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc3-perAccordioncollapseTwo" aria-expanded="false" aria-controls="sc3-perAccordioncollapseTwo">
                                                    Performance by School Location
                                                  </button>
                                                </h2>
                                                <div id="sc3-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="sc3-perAccordionTwo" data-bs-parent="#sc3-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="LocationLanguagestateBarGraph_class3"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="LocationMathstateBarGraph_class3"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="LocationEvsstateBarGraph_class3"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30" id="managementstate_section_performance_class3" style="display:none;">
                                                <h2 class="accordion-header" id="sc3-perAccordionThree">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc3-perAccordioncollapseThree" aria-expanded="true" aria-controls="sc3-perAccordioncollapseThree">
                                                    Performance by School Management
                                                  </button>
                                                </h2>
                                                <div id="sc3-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="sc3-perAccordionThree" data-bs-parent="#sc3-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="ManagementLanguagestateBarGraph_class3"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="ManagementMathstateBarGraph_class3"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="ManagementEvsstateBarGraph_class3"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30" id="socialstate_section_performance_class3" style="display:none;">
                                                <h2 class="accordion-header" id="sc3-perAccordionfour">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc3-perAccordioncollapsefour" aria-expanded="false" aria-controls="sc3-perAccordioncollapsefour">
                                                    Performance by Social Group
                                                  </button>
                                                </h2>
                                                <div id="sc3-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="sc3-perAccordionfour" data-bs-parent="#sc3-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="SocialGroupLanguagestateBarGraph_class3"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="SocialGroupMathstateBarGraph_class3"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="SocialGroupEvsstateBarGraph_class3"></div>
                                                            </figure>
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
                                              PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
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
                                                    <td class="blue-level-2" id="peformance_Language_below_basic_table_class3_state">0</td>
                                                    <td class="pink-level-2" id="peformance_Math_below_basic_table_class3_state">0</td>
                                                    <td class="yellow-level-2" id="peformance_Evs_below_basic_table_class3_state">0</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">BASIC</th>
                                                    <td class="blue-level-3" id="peformance_Language_basic_table_class3_state">0</td>
                                                    <td class="pink-level-3" id="peformance_Math_basic_table_class3_state">0</td>
                                                    <td class="yellow-level-3" id="peformance_Evs_basic_table_class3_state">0</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row" class="bg-grey">PROFICIENT</th>
                                                    <td class="blue-level-4" id="peformance_Language_proficient_table_class3_state">0</td>
                                                    <td class="pink-level-4" id="peformance_Math_proficient_table_class3_state">0</td>
                                                    <td class="yellow-level-4" id="peformance_Evs_proficient_table_class3_state">0</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">ADVANCED</th>
                                                    <td class="blue-level-5" id="peformance_Language_advanced_table_class3_state">0</td>
                                                    <td class="pink-level-5" id="peformance_Math_advanced_table_class3_state">0</td>
                                                    <td class="yellow-level-5" id="peformance_Evs_advanced_table_class3_state">0</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                          <!-- <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              AVERAGE PERFORMANCE OF THE DISTRICTS
                                            </h2>
                                            <div class="district-table table-responsive mtb-30">
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" class="card-purple">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-purple-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                     
                                                    </th>
                                                    <th scope="col" class="card-purple">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-purple-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                    <th scope="col" class="card-purple">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-purple-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                  </tr>
                                                </thead>
                                                <tbody id="state_district_table_class3">
                                                </tbody>
                                              </table>
                                            </div>
                                          </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="performancestate_class5" role="tabpanel" aria-labelledby="sc5-performance-tab">
                                    <div class="sc3-per-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              PERFORMANCE OF STUDENTS IN DIFFERENT SUBJECTS (in percentages)
                                            </h2>
                                            <div class="grade-wrap">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                        <div class="grade-graph-wrap light-blue">
                                                          <figure class="highcharts-figure">
                                                            <div id="performancestate_language_class5"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                      <div class="grade-graph-wrap light-pink">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_math_class5"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS</h2>
                                                      <div class="grade-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_evs_class5"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          <!-- <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              DISTRIBUTION OF STUDENTS BY RANGE
                                            </h2>
                                            <div class="range-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="range-graph-wrap">
                                                      <figure class="highcharts-figure">
                                                        <div id="doghnut_below_basicstate_class5"></div>
                                                      </figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="range-graph-wrap">
                                                    <figure class="highcharts-figure">
                                                      <div id="doghnut_basicstate_class5"></div>
                                                    </figure>
                                                  </div>
                                                </div>
                                              </div>
                                              <hr />
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <div class="range-graph-wrap">
                                                    <figure class="highcharts-figure">
                                                      <div id="doghnut_proficientstate_class5"></div>
                                                    </figure>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="range-graph-wrap">
                                                    <figure class="highcharts-figure">
                                                      <div id="doghnut_advancedstate_class5"></div>
                                                    </figure>
                                                  </div>
                                                </div>
                                              </div>  
                                            </div>
                                          </div> -->
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              AVERAGE PERFORMANCE
                                            </h2>
                                            <div class="accordion commonAccordion" id="sc5-perAccordion">
                                              <div class="accordion-item mtb-30" id="genderstate_section_performance_class5" style="display:none;">
                                                <h2 class="accordion-header" id="sc5-perAccordionOne">
                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sc5-perAccordioncollapseOne" aria-expanded="true" aria-controls="sc5-perAccordioncollapseOne">
                                                    Performance by Gender
                                                  </button>
                                                </h2>
                                                <div id="sc5-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="sc5-perAccordionOne" data-bs-parent="#sc5-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="GenderLanguagestateBarGraph_class5"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="GenderMathstateBarGraph_class5"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="GenderEvsstateBarGraph_class5"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30" id="locationstate_section_performance_class5" style="display:none;">
                                                <h2 class="accordion-header" id="sc5-perAccordionTwo">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc5-perAccordioncollapseTwo" aria-expanded="false" aria-controls="sc5-perAccordioncollapseTwo">
                                                    Performance by School Location
                                                  </button>
                                                </h2>
                                                <div id="sc5-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="sc5-perAccordionTwo" data-bs-parent="#sc5-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="LocationLanguagestateBarGraph_class5"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="LocationMathstateBarGraph_class5"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="LocationEvsstateBarGraph_class5"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30" id="managementstate_section_performance_class5" style="display:none;">
                                                <h2 class="accordion-header" id="sc5-perAccordionThree">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc5-perAccordioncollapseThree" aria-expanded="true" aria-controls="sc5-perAccordioncollapseThree">
                                                    Performance by School Management
                                                  </button>
                                                </h2>
                                                <div id="sc5-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="sc5-perAccordionThree" data-bs-parent="#sc5-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="ManagementLanguagestateBarGraph_class5"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="ManagementMathstateBarGraph_class5"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="ManagementEvsstateBarGraph_class5"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="accordion-item mtb-30" id="socialstate_section_performance_class5" style="display:none;">
                                                <h2 class="accordion-header" id="sc5-perAccordionfour">
                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc5-perAccordioncollapsefour" aria-expanded="false" aria-controls="sc5-perAccordioncollapsefour">
                                                    Performance by Social Group
                                                  </button>
                                                </h2>
                                                <div id="sc5-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="sc5-perAccordionfour" data-bs-parent="#sc5-perAccordion">
                                                  <div class="accordion-body">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="grade-card">
                                                            <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                            <div class="grade-graph-wrap light-blue">
                                                              <figure class="highcharts-figure">
                                                                <div id="SocialGroupLanguagestateBarGraph_class5"></div>
                                                              </figure>
                                                            </div>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                          <div class="grade-graph-wrap light-pink">
                                                            <figure class="highcharts-figure">
                                                              <div id="SocialGroupMathstateBarGraph_class5"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> EVS</h2>
                                                          <div class="grade-graph-wrap light-yellow">
                                                            <figure class="highcharts-figure">
                                                              <div id="SocialGroupEvsstateBarGraph_class5"></div>
                                                            </figure>
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
                                              PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
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
                                                    <td class="blue-level-2" id="peformance_Language_below_basic_table_class5_state">0</td>
                                                    <td class="pink-level-2" id="peformance_Math_below_basic_table_class5_state">0</td>
                                                    <td class="yellow-level-2" id="peformance_Evs_below_basic_table_class5_state">0</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">BASIC</th>
                                                    <td class="blue-level-3" id="peformance_Language_basic_table_class5_state">0</td>
                                                    <td class="pink-level-3" id="peformance_Math_basic_table_class5_state">0</td>
                                                    <td class="yellow-level-3" id="peformance_Evs_basic_table_class5_state">0</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row" class="bg-grey">PROFICIENT</th>
                                                    <td class="blue-level-4" id="peformance_Language_proficient_table_class5_state">0</td>
                                                    <td class="pink-level-4" id="peformance_Math_proficient_table_class5_state">0</td>
                                                    <td class="yellow-level-4" id="peformance_Evs_proficient_table_class5_state">0</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">ADVANCED</th>
                                                    <td class="blue-level-5" id="peformance_Language_advanced_table_class5_state">0</td>
                                                    <td class="pink-level-5" id="peformance_Math_advanced_table_class5_state">0</td>
                                                    <td class="yellow-level-5" id="peformance_Evs_advanced_table_class5_state">0</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                          <!-- <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              AVERAGE PERFORMANCE OF THE DISTRICTS
                                            </h2>
                                            <div class="district-table table-responsive mtb-30">
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" class="card-purple">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-purple-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                     
                                                    </th>
                                                    <th scope="col" class="card-purple">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-purple-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                    <th scope="col" class="card-purple">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-purple-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                  </tr>
                                                </thead>
                                                <tbody id="state_district_table_class5">
                                                </tbody>
                                              </table>
                                            </div>
                                          </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="performancestate_class8" role="tabpanel" aria-labelledby="sc8-performance-tab">
                                  <div class="sc8-per-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            PERFORMANCE OF STUDENTS IN DIFFERENT SUBJECTS (in percentages)
                                          </h2>
                                          <div class="grade-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                      <div class="grade-graph-wrap light-blue">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_language_class8"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="grade-card">
                                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                    <div class="grade-graph-wrap light-sagegreen">
                                                      <figure class="highcharts-figure">
                                                        <div id="performancestate_sci_class8"></div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="grade-card">
                                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                    <div class="grade-graph-wrap light-pink">
                                                      <figure class="highcharts-figure">
                                                        <div id="performancestate_math_class8"></div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                      <div class="grade-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_sst_class8"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            DISTRIBUTION OF STUDENTS BY RANGE
                                          </h2>
                                          <div class="range-wrap">
                                            <div class="row">
                                              <div class="col-md-6">
                                                  <div class="range-graph-wrap">
                                                    <figure class="highcharts-figure">
                                                      <div id="doghnut_below_basicstate_class8"></div>
                                                    </figure>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="range-graph-wrap">
                                                  <figure class="highcharts-figure">
                                                    <div id="doghnut_basicstate_class8"></div>
                                                  </figure>
                                                </div>
                                              </div>
                                            </div>
                                            <hr />
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="range-graph-wrap">
                                                  <figure class="highcharts-figure">
                                                    <div id="doghnut_proficientstate_class8"></div>
                                                  </figure>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="range-graph-wrap">
                                                  <figure class="highcharts-figure">
                                                    <div id="doghnut_advancedstate_class8"></div>
                                                  </figure>
                                                </div>
                                              </div>
                                            </div>  
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE
                                          </h2>
                                          <div class="accordion commonAccordion" id="sc8-perAccordion">
                                            <div class="accordion-item mtb-30" id="genderstate_section_performance_class8" style="display:none;">
                                              <h2 class="accordion-header" id="sc8-perAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sc8-perAccordioncollapseOne" aria-expanded="true" aria-controls="sc8-perAccordioncollapseOne">
                                                  Performance by Gender
                                                </button>
                                              </h2>
                                              <div id="sc8-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="sc8-perAccordionOne" data-bs-parent="#sc8-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                          <div class="grade-graph-wrap light-blue">
                                                            <figure class="highcharts-figure">
                                                              <div id="GenderLanguagestateBarGraph_class8"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                        <div class="grade-graph-wrap light-sagegreen">
                                                          <figure class="highcharts-figure">
                                                            <div id="GenderSciencestateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                        <div class="grade-graph-wrap light-pink">
                                                          <figure class="highcharts-figure">
                                                            <div id="GenderMathstateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                        <div class="grade-graph-wrap light-green">
                                                          <figure class="highcharts-figure">
                                                            <div id="GenderSocialstateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30" id="locationstate_section_performance_class8" style="display:none;">
                                              <h2 class="accordion-header" id="sc8-perAccordionTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc8-perAccordioncollapseTwo" aria-expanded="false" aria-controls="sc8-perAccordioncollapseTwo">
                                                  Performance by School Location
                                                </button>
                                              </h2>
                                              <div id="sc8-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="sc8-perAccordionTwo" data-bs-parent="#sc8-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                          <div class="grade-graph-wrap light-blue">
                                                            <figure class="highcharts-figure">
                                                              <div id="LocationLanguagestateBarGraph_class8"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                        <div class="grade-graph-wrap light-sagegreen">
                                                          <figure class="highcharts-figure">
                                                            <div id="LocationSciencestateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                        <div class="grade-graph-wrap light-pink">
                                                          <figure class="highcharts-figure">
                                                            <div id="LocationMathstateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                        <div class="grade-graph-wrap light-green">
                                                          <figure class="highcharts-figure">
                                                            <div id="LocationSocialstateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30" id="managementstate_section_performance_class8" style="display:none;">
                                              <h2 class="accordion-header" id="sc8-perAccordionThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc8-perAccordioncollapseThree" aria-expanded="false" aria-controls="sc8-perAccordioncollapseThree">
                                                  Performance by School Management
                                                </button>
                                              </h2>
                                              <div id="sc8-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="sc8-perAccordionThree" data-bs-parent="#sc8-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                          <div class="grade-graph-wrap light-blue">
                                                            <figure class="highcharts-figure">
                                                              <div id="ManagementLanguagestateBarGraph_class8"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                        <div class="grade-graph-wrap light-sagegreen">
                                                          <figure class="highcharts-figure">
                                                            <div id="ManagementSciencestateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                        <div class="grade-graph-wrap light-pink">
                                                          <figure class="highcharts-figure">
                                                            <div id="ManagementMathstateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                        <div class="grade-graph-wrap light-green">
                                                          <figure class="highcharts-figure">
                                                            <div id="ManagementSocialstateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30" id="socialstate_section_performance_class8" style="display:none;">
                                              <h2 class="accordion-header" id="sc8-perAccordionfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc8-perAccordioncollapsefour" aria-expanded="true" aria-controls="sc8-perAccordioncollapsefour">
                                                  Performance by Social Group
                                                </button>
                                              </h2>
                                              <div id="sc8-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="sc8-perAccordionfour" data-bs-parent="#sc8-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="grade-card">
                                                          <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                          <div class="grade-graph-wrap light-blue">
                                                            <figure class="highcharts-figure">
                                                              <div id="SocialGroupLanguagestateBarGraph_class8"></div>
                                                            </figure>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                        <div class="grade-graph-wrap light-sagegreen">
                                                          <figure class="highcharts-figure">
                                                            <div id="SocialGroupSciencestateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                        <div class="grade-graph-wrap light-pink">
                                                          <figure class="highcharts-figure">
                                                            <div id="SocialGroupMathstateBarGraph_class8"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="grade-card">
                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                        <div class="grade-graph-wrap light-green">
                                                          <figure class="highcharts-figure">
                                                            <div id="SocialGroupSocialstateBarGraph_class8"></div>
                                                          </figure>
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
                                            PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
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
                                                  <td class="blue-level-2"  id="peformance_Language_below_basic_table_class8_state">0</td>
                                                  <td class="sagegreen-level-2"  id="peformance_Science_below_basic_table_class8_state">0</td>
                                                  <td class="pink-level-2"  id="peformance_Math_below_basic_table_class8_state">0</td>
                                                  <td class="green-level-2"  id="peformance_Social_below_basic_table_class8_state">0</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">BASIC</th>
                                                  <td class="blue-level-3" id="peformance_Language_basic_table_class8_state">0</td>
                                                  <td class="sagegreen-level-3" id="peformance_Science_basic_table_class8_state">0</td>
                                                  <td class="pink-level-3" id="peformance_Math_basic_table_class8_state">0</td>
                                                  <td class="green-level-3" id="peformance_Social_basic_table_class8_state">0</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row" class="bg-grey">PROFICIENT</th>
                                                  <td class="blue-level-4" id="peformance_Language_proficient_table_class8_state">0</td>
                                                  <td class="sagegreen-level-4" id="peformance_Science_proficient_table_class8_state">0</td>
                                                  <td class="pink-level-4" id="peformance_Math_proficient_table_class8_state">0</td>
                                                  <td class="green-level-4" id="peformance_Social_proficient_table_class8_state">0</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">ADVANCED</th>
                                                  <td class="blue-level-5" id="peformance_Language_advanced_table_class8_state">0</td>
                                                  <td class="sagegreen-level-5" id="peformance_Science_advanced_table_class8_state">0</td>
                                                  <td class="pink-level-5" id="peformance_Math_advanced_table_class8_state">0</td>
                                                  <td class="green-level-5" id="peformance_Social_advanced_table_class8_state">0</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE OF THE DISTRICTS
                                          </h2>
                                          <div class="district-table table-responsive mtb-30">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col" class="card-purple">
                                                    <div class="thead-content">
                                                      District Name
                                                      <span class="percentage percentage-purple-bg">
                                                        %
                                                      </span>
                                                    </div>
                                                   
                                                  </th>
                                                  <th scope="col" class="card-purple">
                                                    <div class="thead-content">
                                                      District Name
                                                      <span class="percentage percentage-purple-bg">
                                                        %
                                                      </span>
                                                    </div>
                                                  </th>
                                                  <th scope="col" class="card-purple">
                                                    <div class="thead-content">
                                                      District Name
                                                      <span class="percentage percentage-purple-bg">
                                                        %
                                                      </span>
                                                    </div>
                                                  </th>
                                                </tr>
                                              </thead>
                                              <tbody id="state_district_table_class8">
                                              </tbody>
                                            </table>
                                          </div>
                                        </div> -->
                                      </div>
                                  </div>
                              </div>
                                <div class="tab-pane fade" id="performancestate_class10" role="tabpanel" aria-labelledby="sc10-performance-tab">
                                                                    <div class="sc10-per-wrap">
                                                                        <div class="row">
                                                                          <div class="col-md-12">
                                                                            <h2 class="heading-grey text-center">
                                                                              PERFORMANCE OF STUDENTS IN DIFFERENT SUBJECTS (in percentages)
                                                                            </h2>
                                                                            <div class="grade-wrap">
                                                                                <div class="row">
                                                                                  <div class="col-md-6">
                                                                                      <div class="grade-card">
                                                                                        <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL</h2>
                                                                                        <div class="grade-graph-wrap light-red">
                                                                                          <figure class="highcharts-figure">
                                                                                            <div id="performancestate_mil_class10"></div>
                                                                                          </figure>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-6">
                                                                                      <div class="grade-card">
                                                                                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                                                        <div class="grade-graph-wrap light-green">
                                                                                          <figure class="highcharts-figure">
                                                                                            <div id="performancestate_sst_class10"></div>
                                                                                          </figure>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-6">
                                                                                    <div class="grade-card">
                                                                                      <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                                                      <div class="grade-graph-wrap light-sagegreen">
                                                                                        <figure class="highcharts-figure">
                                                                                          <div id="performancestate_sci_class10"></div>
                                                                                        </figure>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                  <div class="col-md-6">
                                                                                    <div class="grade-card">
                                                                                      <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English</h2>
                                                                                      <div class="grade-graph-wrap light-purple">
                                                                                        <figure class="highcharts-figure">
                                                                                          <div id="performancestate_eng_class10"></div>
                                                                                        </figure>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                  <div class="col-md-6">
                                                                                    <div class="grade-card">
                                                                                      <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                                                      <div class="grade-graph-wrap light-pink">
                                                                                        <figure class="highcharts-figure">
                                                                                          <div id="performancestate_math_class10"></div>
                                                                                        </figure>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                            </div>
                                                                          </div>
                                                                          <!-- <div class="col-md-12">
                                                                            <h2 class="heading-grey text-center">
                                                                              DISTRIBUTION OF STUDENTS BY RANGE
                                                                            </h2>
                                                                            <div class="range-wrap">
                                                                              <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="range-graph-wrap">
                                                                                      <figure class="highcharts-figure">
                                                                                        <div id="doghnut_below_basicstate_class10"></div>
                                                                                      </figure>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                  <div class="range-graph-wrap">
                                                                                    <figure class="highcharts-figure">
                                                                                      <div id="doghnut_basicstate_class10"></div>
                                                                                    </figure>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <hr />
                                                                              <div class="row">
                                                                                <div class="col-md-6">
                                                                                  <div class="range-graph-wrap">
                                                                                    <figure class="highcharts-figure">
                                                                                      <div id="doghnut_proficientstate_class10"></div>
                                                                                    </figure>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                  <div class="range-graph-wrap">
                                                                                    <figure class="highcharts-figure">
                                                                                      <div id="doghnut_advancedstate_class10"></div>
                                                                                    </figure>
                                                                                  </div>
                                                                                </div>
                                                                              </div>  
                                                                            </div>
                                                                          </div> -->
                                                                          <div class="col-md-12">
                                                                            <h2 class="heading-grey text-center">
                                                                              AVERAGE PERFORMANCE
                                                                            </h2>
                                                                            <div class="accordion commonAccordion" id="sc10-perAccordion">
                                                                              <div class="accordion-item mtb-30" id="genderstate_section_performance_class10" style="display:none;">
                                                                                <h2 class="accordion-header" id="sc10-perAccordionOne">
                                                                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sc10-perAccordioncollapseOne" aria-expanded="true" aria-controls="sc10-perAccordioncollapseOne">
                                                                                    Performance by Gender
                                                                                  </button>
                                                                                </h2>
                                                                                <div id="sc10-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="sc10-perAccordionOne" data-bs-parent="#sc10-perAccordion">
                                                                                  <div class="accordion-body">
                                                                                    <div class="row">
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL</h2>
                                                                                            <div class="grade-graph-wrap light-red">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="GenderMilstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                                                            <div class="grade-graph-wrap light-green">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="GenderSocialstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                                                          <div class="grade-graph-wrap light-sagegreen">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="GenderSciencestateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English</h2>
                                                                                          <div class="grade-graph-wrap light-purple">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="GenderEnglishstateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                                                          <div class="grade-graph-wrap light-pink">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="GenderMathstateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <div class="accordion-item mtb-30" id="locationstate_section_performance_class10" style="display:none;">
                                                                                <h2 class="accordion-header" id="sc10-perAccordionTwo">
                                                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc10-perAccordioncollapseTwo" aria-expanded="false" aria-controls="sc10-perAccordioncollapseTwo">
                                                                                    Performance by School Location
                                                                                  </button>
                                                                                </h2>
                                                                                <div id="sc10-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="sc10-perAccordionTwo" data-bs-parent="#sc10-perAccordion">
                                                                                  <div class="accordion-body">
                                                                                    <div class="row">
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL</h2>
                                                                                            <div class="grade-graph-wrap light-red">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="LocationMilstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                                                            <div class="grade-graph-wrap light-green">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="LocationSocialstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                                                          <div class="grade-graph-wrap light-sagegreen">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="LocationSciencestateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English</h2>
                                                                                          <div class="grade-graph-wrap light-purple">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="LocationEnglishstateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                                                          <div class="grade-graph-wrap light-pink">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="LocationMathstateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                    
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <div class="accordion-item mtb-30" id="managementstate_section_performance_class10" style="display:none;">
                                                                                <h2 class="accordion-header" id="sc10-perAccordionThree">
                                                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc10-perAccordioncollapseThree" aria-expanded="false" aria-controls="sc10-perAccordioncollapseThree">
                                                                                    Performance by School Management
                                                                                  </button>
                                                                                </h2>
                                                                                <div id="sc10-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="sc10-perAccordionThree" data-bs-parent="#sc10-perAccordion">
                                                                                  <div class="accordion-body">
                                                                                    <div class="row">
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL</h2>
                                                                                            <div class="grade-graph-wrap light-red">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="ManagementMilstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                                                            <div class="grade-graph-wrap light-green">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="ManagementSocialstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-sagegreen">Science</h2>
                                                                                          <div class="grade-graph-wrap light-sagegreen">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="ManagementSciencestateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English</h2>
                                                                                          <div class="grade-graph-wrap light-purple">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="ManagementEnglishstateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                                                          <div class="grade-graph-wrap light-pink">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="ManagementMathstateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              <div class="accordion-item mtb-30" id="socialstate_section_performance_class10" style="display:none;">
                                                                                <h2 class="accordion-header" id="sc10-perAccordionfour">
                                                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sc10-perAccordioncollapsefour" aria-expanded="false" aria-controls="sc10-perAccordioncollapsefour">
                                                                                    Performance by Social Group
                                                                                  </button>
                                                                                </h2>
                                                                                <div id="sc10-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="sc10-perAccordionfour" data-bs-parent="#sc10-perAccordion">
                                                                                  <div class="accordion-body">
                                                                                    <div class="row">
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL</h2>
                                                                                            <div class="grade-graph-wrap light-red">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="SocialGroupMilstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                          <div class="grade-card">
                                                                                            <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                                                            <div class="grade-graph-wrap light-green">
                                                                                              <figure class="highcharts-figure">
                                                                                                <div id="SocialGroupSocialstateBarGraph_class10"></div>
                                                                                              </figure>
                                                                                            </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                                                          <div class="grade-graph-wrap light-sagegreen">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="SocialGroupSciencestateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English</h2>
                                                                                          <div class="grade-graph-wrap light-purple">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="SocialGroupEnglishstateBarGraph_class10"></div>
                                                                                            </figure>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                        <div class="grade-card">
                                                                                          <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                                                          <div class="grade-graph-wrap light-pink">
                                                                                            <figure class="highcharts-figure">
                                                                                              <div id="SocialGroupMathstateBarGraph_class10"></div>
                                                                                            </figure>
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
                                                                              PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
                                                                            </h2>
                                                                            <div class="per-table">
                                                                              <table class="table">
                                                                                <thead>
                                                                                  <tr>
                                                                                    <th scope="col"></th>
                                                                                    <th scope="col" class="red-level-1">MIL</th>
                                                                                    <th scope="col" class="green-level-1">Social Science</th>
                                                                                    <th scope="col" class="purple-level-1">English</th>
                                                                                    <th scope="col" class="sagegreen-level-1">Science</th>
                                                                                    <th scope="col" class="pink-level-1">Mathematics</th>
                                                                                  </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                  <tr>
                                                                                    <th scope="row" class="bg-grey" >BELOW BASIC</th>
                                                                                    <td class="red-level-2"  id="peformance_Mil_below_basic_table_class10_state">0</td>
                                                                                    <td class="green-level-2" id="peformance_Social_below_basic_table_class10_state">0</td>
                                                                                    <td class="purple-level-2" id="peformance_English_below_basic_table_class10_state">0</td>
                                                                                    <td class="sagegreen-level-2" id="peformance_Science_below_basic_table_class10_state">0</td>
                                                                                    <td class="pink-level-2" id="peformance_Math_below_basic_table_class10_state">0</td>

                                                                                  </tr>
                                                                                  <tr>
                                                                                    <th scope="row">BASIC</th>
                                                                                    <td class="red-level-3"  id="peformance_Mil_basic_table_class10_state">0</td>
                                                                                    <td class="green-level-3" id="peformance_Social_basic_table_class10_state">0</td>
                                                                                    <td class="purple-level-3" id="peformance_English_basic_table_class10_state">0</td>
                                                                                    <td class="sagegreen-level-3" id="peformance_Science_basic_table_class10_state">0</td>
                                                                                    <td class="pink-level-3" id="peformance_Math_basic_table_class10_state">0</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <th scope="row" class="bg-grey">PROFICIENT</th>
                                                                                    <td class="red-level-4"  id="peformance_Mil_proficient_table_class10_state">0</td>
                                                                                    <td class="green-level-4"  id="peformance_Social_proficient_table_class10_state">0</td>
                                                                                    <td class="purple-level-4"  id="peformance_English_proficient_table_class10_state">0</td>
                                                                                    <td class="sagegreen-level-4"  id="peformance_Science_proficient_table_class10_state">0</td>
                                                                                    <td class="pink-level-4 " id="peformance_Math_proficient_table_class10_state">0</td>
                                                                                    
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <th scope="row" >ADVANCED</th>
                                                                                    <td class="red-level-5"  id="peformance_Mil_advanced_table_class10_state">0</td>
                                                                                    <td class="green-level-5" id="peformance_Social_advanced_table_class10_state">0</td>
                                                                                    <td class="purple-level-5" id="peformance_English_advanced_table_class10_state">0</td>
                                                                                    <td class="sagegreen-level-5" id="peformance_Science_advanced_table_class10_state">0</td>
                                                                                    <td class="pink-level-5" id="peformance_Math_advanced_table_class10_state">0</td>
                                                                                    
                                                                                  </tr>
                                                                                </tbody>
                                                                              </table>
                                                                            </div>
                                                                          </div>
                                                                          <!-- <div class="col-md-12">
                                                                            <h2 class="heading-grey text-center">
                                                                              AVERAGE PERFORMANCE OF THE DISTRICTS
                                                                            </h2>
                                                                            <div class="district-table table-responsive mtb-30">
                                                                              <table class="table">
                                                                                <thead>
                                                                                  <tr>
                                                                                    <th scope="col" class="card-purple">
                                                                                      <div class="thead-content">
                                                                                        District Name
                                                                                        <span class="percentage percentage-purple-bg">
                                                                                          %
                                                                                        </span>
                                                                                      </div>
                                                                                    
                                                                                    </th>
                                                                                    <th scope="col" class="card-purple">
                                                                                      <div class="thead-content">
                                                                                        District Name
                                                                                        <span class="percentage percentage-purple-bg">
                                                                                          %
                                                                                        </span>
                                                                                      </div>
                                                                                    </th>
                                                                                    <th scope="col" class="card-purple">
                                                                                      <div class="thead-content">
                                                                                        District Name
                                                                                        <span class="percentage percentage-purple-bg">
                                                                                          %
                                                                                        </span>
                                                                                      </div>
                                                                                    </th>
                                                                                  </tr>
                                                                                </thead>
                                                                                <tbody id="state_district_table_class10">
                                                                                </tbody>
                                                                              </table>
                                                                            </div>
                                                                          </div> -->
                                                                        </div>
                                                                    </div>
                                </div>
                                <div class="tab-pane fade" id="performancestate_classall" role="tabpanel" aria-labelledby="sac-performance-tab">
                                  <div class="sac-per-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            PERFORMANCE OF STUDENTS IN DIFFERENT SUBJECTS (in percentages)
                                          </h2>
                                          <div class="grade-wrap">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <div class="grade-card">
                                                    <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language</h2>
                                                    <div class="grade-graph-wrap light-blue">
                                                      <figure class="highcharts-figure">
                                                        <div id="performancestate_language_classall"></div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="grade-card">
                                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics</h2>
                                                    <div class="grade-graph-wrap light-pink">
                                                      <figure class="highcharts-figure">
                                                        <div id="performancestate_math_classall"></div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="grade-card">
                                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> EVS</h2>
                                                    <div class="grade-graph-wrap light-yellow">
                                                      <figure class="highcharts-figure">
                                                        <div id="performancestate_evs_classall"></div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL</h2>
                                                      <div class="grade-graph-wrap light-red">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_mil_classall"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="grade-card">
                                                      <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science</h2>
                                                      <div class="grade-graph-wrap light-green">
                                                        <figure class="highcharts-figure">
                                                          <div id="performancestate_sst_classall"></div>
                                                        </figure>
                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="grade-card">
                                                    <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English</h2>
                                                    <div class="grade-graph-wrap light-purple">
                                                      <figure class="highcharts-figure">
                                                        <div id="performancestate_eng_classall"></div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="grade-card">
                                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science</h2>
                                                    <div class="grade-graph-wrap light-sagegreen">
                                                      <figure class="highcharts-figure">
                                                        <div id="performancestate_sci_classall"></div>
                                                      </figure>
                                                    </div>
                                                  </div>
                                                </div>  
                                              </div>
                                          </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            DISTRIBUTION OF STUDENTS BY RANGE
                                          </h2>
                                          <div class="accordion commonAccordion" id="sac-rg-perAccordion">
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-rg-perAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sac-rg-perAccordioncollapseOne" aria-expanded="true" aria-controls="sac-rg-perAccordioncollapseOne">
                                                  Class 3
                                                </button>
                                              </h2>
                                              <div id="sac-rg-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="sac-rg-perAccordionOne" data-bs-parent="#sac-rg-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="range-wrap">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="range-graph-wrap">
                                                            <figure class="highcharts-figure">
                                                              <div id="doghnut_below_basic3state_classall"></div>
                                                            </figure>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_basic3state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_proficient3state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_advanced3state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-rg-perAccordionTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sac-rg-perAccordioncollapseTwo" aria-expanded="false" aria-controls="sac-rg-perAccordioncollapseTwo">
                                                  Class 5
                                                </button>
                                              </h2>
                                              <div id="sac-rg-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="sac-rg-perAccordionTwo" data-bs-parent="#sac-rg-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="range-wrap">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="range-graph-wrap">
                                                            <figure class="highcharts-figure">
                                                              <div id="doghnut_below_basic5state_classall"></div>
                                                            </figure>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_basic5state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_proficient5state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_advanced5state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-rg-perAccordionThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sac-rg-perAccordioncollapseThree" aria-expanded="false" aria-controls="sac-rg-perAccordioncollapseThree">
                                                  Class 8
                                                </button>
                                              </h2>
                                              <div id="sac-rg-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="sac-rg-perAccordionThree" data-bs-parent="#sac-rg-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="range-wrap">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="range-graph-wrap">
                                                            <figure class="highcharts-figure">
                                                              <div id="doghnut_below_basic8state_classall"></div>
                                                            </figure>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_basic8state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_proficient8state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_advanced8state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-rg-perAccordionfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sac-rg-perAccordioncollapsefour" aria-expanded="false" aria-controls="sac-rg-perAccordioncollapsefour">
                                                  Class 10
                                                </button>
                                              </h2>
                                              <div id="sac-rg-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="sac-rg-perAccordionfour" data-bs-parent="#sac-rg-perAccordion">
                                                <div class="accordion-body">
                                                  <div class="range-wrap">
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="range-graph-wrap">
                                                            <figure class="highcharts-figure">
                                                              <div id="doghnut_below_basic10state_classall"></div>
                                                            </figure>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_basic10state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_proficient10state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="range-graph-wrap">
                                                          <figure class="highcharts-figure">
                                                            <div id="doghnut_advanced10state_classall"></div>
                                                          </figure>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div> -->
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE
                                          </h2>
                                          <div class="accordion commonAccordion" id="sac-perAccordion">
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="sac-perAccordionOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sac-perAccordioncollapseOne" aria-expanded="true" aria-controls="sac-perAccordioncollapseOne">
                                                  Performance by Gender
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="sac-perAccordionOne" data-bs-parent="#sac-perAccordion">
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="GenderLanguage3stateBarGraph_classall"></div>
                                                                      </figure>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="GenderLanguage5stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="GenderLanguage8stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderMath3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderMath5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderMath8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderMath10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderEvs3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderEvs5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderScience8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderScience10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderSocial8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderSocial10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderMil10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="GenderEnglish10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                  Performance by School Location
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="sac-perAccordionTwo" data-bs-parent="#sac-perAccordion">
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="LocationLanguage3stateBarGraph_classall"></div>
                                                                      </figure>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="LocationLanguage5stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="LocationLanguage8stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationMath3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationMath5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationMath8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationMath10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationEvs3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationEvs5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationScience8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationScience10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationSocial8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationSocial10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationMil10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="LocationEnglish10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                  Performance by School Management
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="sac-perAccordionThree" data-bs-parent="#sac-perAccordion">
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="ManagementLanguage3stateBarGraph_classall"></div>
                                                                      </figure>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="ManagementLanguage5stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="ManagementLanguage8stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementMath3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementMath5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementMath8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementMath10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementEvs3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementEvs5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementScience8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementScience10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementSocial8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementSocial10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementMil10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="ManagementEnglish10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                              <h2 class="accordion-header" id="sac-perAccordionfour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sac-perAccordioncollapsefour" aria-expanded="false" aria-controls="sac-perAccordioncollapsefour">
                                                  Performance by Social Group
                                                </button>
                                              </h2>
                                              <div id="sac-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="sac-perAccordionfour" data-bs-parent="#sac-perAccordion">
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="SocialGroupLanguage3stateBarGraph_classall"></div>
                                                                      </figure>
                                                                    </div>  
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                    <div class="sac-lo-classtitle-wrap">
                                                                      <h3 class="sac-lo-classtitle title-blue">
                                                                        CLASS 5
                                                                      </h3>
                                                                    </div>
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="SocialGroupLanguage5stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                    <div class="bargraph-wrap">
                                                                      <figure class="highcharts-figure">
                                                                        <div id="SocialGroupLanguage8stateBarGraph_classall"></div>
                                                                      </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-pink">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMath10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupEvs3stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div> 
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-yellow">
                                                                      CLASS 5
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupEvs5stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupScience8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-sagegreen">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupScience10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupSocial8stateBarGraph_classall"></div>
                                                                    </figure>
                                                                  </div>  
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="sac-lo-classtitle-wrap">
                                                                    <h3 class="sac-lo-classtitle title-green">
                                                                      CLASS 10
                                                                    </h3>
                                                                  </div>
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupSocial10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupMil10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                                                  <div class="bargraph-wrap">
                                                                    <figure class="highcharts-figure">
                                                                      <div id="SocialGroupEnglish10stateBarGraph_classall"></div>
                                                                    </figure>
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
                                        </div>
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            PERCENTAGE OF STUDENTS BY PERFORMANCE LEVELS
                                          </h2>
                                          <div class="per-table">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col"></th>
                                                  <th scope="col" class="red-level-1">MIL</th>
                                                  <th scope="col" class="green-level-1">Social Science</th>
                                                  <th scope="col" class="yellow-level-1">EVS</th>
                                                  <th scope="col" class="purple-level-1">English</th>
                                                  <th scope="col" class="sagegreen-level-1">Science</th>
                                                  <th scope="col" class="blue-level-1">Language</th>
                                                  <th scope="col" class="pink-level-1">Mathematics</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row" class="bg-grey">BELOW BASIC</th>
                                                  <td class="red-level-2" id="peformance_Mil_below_basic_table_classall_state">0</td>
                                                  <td class="green-level-2" id="peformance_Social_below_basic_table_classall_state">0</td>
                                                  <td class="yellow-level-2" id="peformance_Evs_below_basic_table_classall_state">0</td>
                                                  <td class="purple-level-2" id="peformance_English_below_basic_table_classall_state">0</td>
                                                  <td class="sagegreen-level-2" id="peformance_Science_below_basic_table_classall_state">0</td>
                                                  <td class="blue-level-2" id="peformance_Language_below_basic_table_classall_state">0</td>
                                                  <td class="pink-level-2" id="peformance_Math_below_basic_table_classall_state">0</td>

                                                </tr>
                                                <tr>
                                                  <th scope="row">BASIC</th>
                                                  <td class="red-level-3" id="peformance_Mil_basic_table_classall_state">0</td>
                                                  <td class="green-level-3"  id="peformance_Social_basic_table_classall_state">0</td>
                                                  <td class="yellow-level-3" id="peformance_Evs_basic_table_classall_state">0</td>
                                                  <td class="purple-level-3" id="peformance_English_basic_table_classall_state">0</td>
                                                  <td class="sagegreen-level-3" id="peformance_Science_basic_table_classall_state">0</td>
                                                  <td class="blue-level-3" id="peformance_Language_basic_table_classall_state">0</td>
                                                  <td class="pink-level-3" id="peformance_Math_basic_table_classall_state">0</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row" class="bg-grey">PROFICIENT</th>
                                                  <td class="red-level-4" id="peformance_Mil_proficient_table_classall_state">0</td>
                                                  <td class="green-level-4"  id="peformance_Social_proficient_table_classall_state">0</td>
                                                  <td class="yellow-level-4" id="peformance_Evs_proficient_table_classall_state">0</td>
                                                  <td class="purple-level-4" id="peformance_English_proficient_table_classall_state">0</td>
                                                  <td class="sagegreen-level-4" id="peformance_Science_proficient_table_classall_state">0</td>
                                                  <td class="blue-level-4" id="peformance_Language_proficient_table_classall_state">0</td>
                                                  <td class="pink-level-4" id="peformance_Math_proficient_table_classall_state">0</td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">ADVANCED</th>
                                                  <td class="red-level-5" id="peformance_Mil_advanced_table_classall_state">0</td>
                                                  <td class="green-level-5"  id="peformance_Social_advanced_table_classall_state">0</td>
                                                  <td class="yellow-level-5" id="peformance_Evs_advanced_table_classall_state">0</td>
                                                  <td class="purple-level-5" id="peformance_English_advanced_table_classall_state">0</td>
                                                  <td class="sagegreen-level-5" id="peformance_Science_advanced_table_classall_state">0</td>
                                                  <td class="blue-level-5" id="peformance_Language_advanced_table_classall_state">0</td>
                                                  <td class="pink-level-5" id="peformance_Math_advanced_table_classall_state">0</td>
                                                  
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE OF THE DISTRICTS
                                          </h2>

                                          <div class="table-main-wrap ptb-30">
                                            <div class="sac-lo-classtitle-wrap mtb-30">
                                              <h3 class="sac-lo-classtitle title-blue">
                                                CLASS 3
                                              </h3>
                                            </div>
                                            <div class="district-table table-responsive table-responsive">  
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" class="card-blue">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-blue-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                     
                                                    </th>
                                                    <th scope="col" class="card-blue">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-blue-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                    <th scope="col" class="card-blue">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-blue-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                  </tr>
                                                </thead>
                                                <tbody id="state_district_table3_classall">
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                          
                                          <div class="table-main-wrap ptb-30">
                                            <div class="sac-lo-classtitle-wrap mtb-30">
                                              <h3 class="sac-lo-classtitle title-pink">
                                                CLASS 5
                                              </h3>
                                            </div>
                                            <div class="district-table table-responsive">  
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" class="card-pink">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-pink-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                     
                                                    </th>
                                                    <th scope="col" class="card-pink">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-pink-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                    <th scope="col" class="card-pink">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-pink-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                  </tr>
                                                </thead>
                                                <tbody id="state_district_table5_classall">
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>

                                          <div class="table-main-wrap ptb-30">
                                            <div class="sac-lo-classtitle-wrap mtb-30">
                                              <h3 class="sac-lo-classtitle title-sagegreen">
                                                CLASS 8
                                              </h3>
                                            </div>
                                            <div class="district-table table-responsive">  
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col" class="card-sagegreen">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-sagegreen-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                     
                                                    </th>
                                                    <th scope="col" class="card-sagegreen">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-sagegreen-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                    <th scope="col" class="card-sagegreen">
                                                      <div class="thead-content">
                                                        District Name
                                                        <span class="percentage percentage-sagegreen-bg">
                                                          %
                                                        </span>
                                                      </div>
                                                    </th>
                                                  </tr>
                                                </thead>
                                                <tbody id="state_district_table8_classall">
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                          

                                          <div class="table-main-wrap ptb-30">
                                          <div class="sac-lo-classtitle-wrap mtb-30">
                                            <h3 class="sac-lo-classtitle title-purple">
                                              CLASS 10
                                            </h3>
                                          </div>
                                          <div class="district-table table-responsive">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col" class="card-purple">
                                                    <div class="thead-content">
                                                      District Name
                                                      <span class="percentage percentage-purple-bg">
                                                        %
                                                      </span>
                                                    </div>
                                                   
                                                  </th>
                                                  <th scope="col" class="card-purple">
                                                    <div class="thead-content">
                                                      District Name
                                                      <span class="percentage percentage-purple-bg">
                                                        %
                                                      </span>
                                                    </div>
                                                  </th>
                                                  <th scope="col" class="card-purple">
                                                    <div class="thead-content">
                                                      District Name
                                                      <span class="percentage percentage-purple-bg">
                                                        %
                                                      </span>
                                                    </div>
                                                  </th>
                                                </tr>
                                              </thead>
                                              <tbody id="state_district_table10_classall">
                                              </tbody>
                                            </table>
                                          </div>
                                          </div>

                                          
                                        </div> -->
                                      </div>
                                  </div>
                                </div>
                              <!--national screens  -->


                            <div class="tab-pane fade" id="performancenational_class3" role="tabpanel" aria-labelledby="national-performance-tab">
                                    <div class="nc8-per-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE OF STUDENTS AT THE NATIONAL LEVEL (in scaled scores out of 500)
                                          </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="per-card card-blue">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25"> Language
                                              </h2>
                                              <div class="per-card-content dark-blue">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_language_national_class3">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="per-card card-pink">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="35"> Mathematics
                                            </h2>
                                            <div class="per-card-content dark-pink">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_math_national_class3">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                                        <div class="col-md-4">
                                          <div class="per-card card-yellow">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" width="20"> EVS
                                            </h2>
                                            <div class="per-card-content dark-yellow">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_evs_national_class3">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </div>

                            <div class="tab-pane fade" id="performancenational_class5" role="tabpanel" aria-labelledby="national-performance-tab">
                                    <div class="nc8-per-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE OF STUDENTS AT THE NATIONAL LEVEL (in scaled scores out of 500)
                                          </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="per-card card-blue">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25"> Language
                                              </h2>
                                              <div class="per-card-content dark-blue">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_language_national_class5">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="per-card card-pink">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="35"> Mathematics
                                            </h2>
                                            <div class="per-card-content dark-pink">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_math_national_class5">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                                        <div class="col-md-4">
                                          <div class="per-card card-yellow">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" width="20"> EVS
                                            </h2>
                                            <div class="per-card-content dark-yellow">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_evs_national_class5">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </div>

                            <div class="tab-pane fade" id="performancenational_class8" role="tabpanel" aria-labelledby="national-performance-tab">
                                    <div class="nc8-per-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE OF STUDENTS AT THE NATIONAL LEVEL (in scaled scores out of 500)
                                          </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="per-card card-blue">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25"> Language
                                              </h2>
                                              <div class="per-card-content dark-blue">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_language_national_class8">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="per-card card-pink">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="35"> Mathematics
                                            </h2>
                                            <div class="per-card-content dark-pink">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_math_national_class8">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="per-card card-sagegreen">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/science.svg')}}" alt="img" class="img-fluid" width="20"> Science
                                            </h2>
                                            <div class="per-card-content dark-sagegreen">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_sci_national_class8">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                         
                                      </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <div class="per-card card-green">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="img" class="img-fluid" width="20"> Social Science
                                            </h2>
                                            <div class="per-card-content dark-green">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_sst_national_class8">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </div>

                            <div class="tab-pane fade" id="performancenational_class10" role="tabpanel" aria-labelledby="national-performance-tab">
                                    <div class="nc8-per-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE OF STUDENTS AT THE NATIONAL LEVEL (in scaled scores out of 500)
                                          </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="per-card card-red">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="img" class="img-fluid" width="25"> MIL
                                              </h2>
                                              <div class="per-card-content dark-red">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_mil_national_class10">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="per-card card-pink">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="35"> Mathematics
                                              </h2>
                                              <div class="per-card-content dark-pink">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_math_national_class10">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-4">
                                          <div class="per-card card-sagegreen">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/science.svg')}}" alt="img" class="img-fluid" width="20">Science
                                            </h2>
                                            <div class="per-card-content dark-sagegreen">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_sci_national_class10">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="per-card card-green">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="img" class="img-fluid" width="20">Social Science
                                            </h2>
                                            <div class="per-card-content dark-green">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_sst_national_class10">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="per-card card-purple">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="img" class="img-fluid" width="20"> English
                                              </h2>
                                              <div class="per-card-content dark-purple">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_eng_national_class10">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        
                                      </div>
                                      <div class="row">
                                        
                                        
                                        
                                      </div>
                                    </div>
                            </div>

                            <div class="tab-pane fade" id="performancenational_classall" role="tabpanel" aria-labelledby="national-performance-tab">
                                    <div class="nc8-per-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <h2 class="heading-grey text-center">
                                            AVERAGE PERFORMANCE OF STUDENTS AT THE NATIONAL LEVEL (in scaled scores out of 500)
                                          </h2>
                                        </div>
                                          <div class="col-md-4">
                                              <div class="per-card card-blue">
                                                <h2 class="justify-content-center">
                                                  <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25"> Language
                                                </h2>
                                                <div class="per-card-content dark-blue">
                                                  <div class="per-card-desc">
                                                    <span class="total-no" id="performancenational_language_national_classall">0</span>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="per-card card-pink">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="35"> Mathematics
                                              </h2>
                                              <div class="per-card-content dark-pink">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_math_national_classall">0</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div> 
                                          <div class="col-md-4">
                                          <div class="per-card card-yellow">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" width="20"> EVS
                                            </h2>
                                            <div class="per-card-content dark-yellow">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_evs_national_classall">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="per-card card-red">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="img" class="img-fluid" width="25"> MIL
                                              </h2>
                                              <div class="per-card-content dark-red">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_mil_national_classall">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="per-card card-sagegreen">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/science.svg')}}" alt="img" class="img-fluid" width="20">Science
                                            </h2>
                                            <div class="per-card-content dark-sagegreen">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_sci_national_classall">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="per-card card-green">
                                            <h2 class="justify-content-center">
                                              <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="img" class="img-fluid" width="20">Social Science
                                            </h2>
                                            <div class="per-card-content dark-green">
                                              <div class="per-card-desc">
                                                <span class="total-no" id="performancenational_sst_national_classall">0</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="per-card card-purple">
                                              <h2 class="justify-content-center">
                                                <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="img" class="img-fluid" width="20"> English
                                              </h2>
                                              <div class="per-card-content dark-purple">
                                                <div class="per-card-desc">
                                                  <span class="total-no" id="performancenational_eng_national_classall">0</span>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                            </div>
@endsection