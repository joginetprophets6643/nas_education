@section('performance')
<div class="tab-pane fade" id="performance" role="tabpanel" aria-labelledby="performance-tab">
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
                                                <span class="total-no">77</span>
                                                <p class="title">District</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no">68</span>
                                                <p class="title">State</p>
                                              </div>
                                              <div class="per-card-desc">
                                                <span class="total-no">32</span>
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
                                              <span class="total-no">77</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no">68</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
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
                                              <span class="total-no">77</span>
                                              <p class="title">District</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no">68</span>
                                              <p class="title">State</p>
                                            </div>
                                            <div class="per-card-desc">
                                              <span class="total-no">32</span>
                                              <p class="title">National</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="accordion" id="perAccordion">
                                          <div class="accordion-item mtb-30" id="gender_section_performance" style="display:none;">
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
                                                          <div id="GenderLanguageBarGraph"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="GenderEvsBarGraph"></div>
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
                                                          <div id="GenderMathBarGraph"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="location_section_performance" style="display:none;">
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
                                                          <div id="LocationLanguageBarGraph"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="LocationEvsBarGraph"></div>
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
                                                          <div id="LocationMathBarGraph"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="management_section_performance" style="display:none;">
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
                                                          <div id="ManagementLanguageBarGraph"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="ManagementEvsBarGraph"></div>
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
                                                          <div id="ManagementMathBarGraph"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="accordion-item mtb-30" id="social_section_performance" style="display:none;">
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
                                                          <div id="SocialLanguageBarGraph"></div>
                                                        </figure>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="d-flex">
                                                  <div class="col-md-8 p-0">
                                                      <div class="per-graph-wrap light-yellow">
                                                        <figure class="highcharts-figure">
                                                          <div id="SocialEvsBarGraph"></div>
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
                                                          <div id="SocialMathBarGraph"></div>
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
@endsection