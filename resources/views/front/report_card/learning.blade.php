@section('learning')
                                  <div class="tab-pane fade" id="learning_class3" role="tabpanel" aria-labelledby="learning-tab">
                                    <div class="learning-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              Performance in Learning Outcomes (LOs)
                                            </h2>
                                            <div class="learning-tabs mtb-30">
                                              <ul class="nav nav-tabs" id="learningTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link active" id="all-lo-tab" data-bs-toggle="tab" data-bs-target="#all_lo " type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="language-lo-tab" data-bs-toggle="tab" data-bs-target="#language_lo" type="button" role="tab" aria-controls="language" aria-selected="false">language</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="math-lo-tab" data-bs-toggle="tab" data-bs-target="#math_lo" type="button" role="tab" aria-controls="math" aria-selected="false">Mathematics</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="evs-lo-tab" data-bs-toggle="tab" data-bs-target="#evs_lo" type="button" role="tab" aria-controls="evs" aria-selected="false">EVS</button>
                                                </li>
                                              </ul>
                                              <div class="tab-content" id="learningTabContent">
                                                <div class="tab-pane fade show active" id="all_lo" role="tabpanel" aria-labelledby="all-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-blue">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo_class3">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class3">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-yellow">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="evs_lo_class3">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="language_lo" role="tabpanel" aria-labelledby="language-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-blue">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo_class3">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="math_lo" role="tabpanel" aria-labelledby="math-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class3">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="evs_lo" role="tabpanel" aria-labelledby="evs-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-yellow">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="evs_lo_class3">
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
                                  </div>  

                                  <div class="tab-pane fade" id="learning_class5" role="tabpanel" aria-labelledby="learning-tab">
                                    <div class="learning-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              Performance in Learning Outcomes (LOs)
                                            </h2>
                                            <div class="learning-tabs mtb-30">
                                              <ul class="nav nav-tabs" id="learningTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link active" id="all-lo-tab" data-bs-toggle="tab" data-bs-target="#all-class5 " type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="language-lo-tab" data-bs-toggle="tab" data-bs-target="#language-class5" type="button" role="tab" aria-controls="language" aria-selected="false">language</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="math-lo-tab" data-bs-toggle="tab" data-bs-target="#math-class5" type="button" role="tab" aria-controls="math" aria-selected="false">Mathematics</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="evs-lo-tab" data-bs-toggle="tab" data-bs-target="#evs-class5" type="button" role="tab" aria-controls="evs" aria-selected="false">EVS</button>
                                                </li>
                                              </ul>
                                              <div class="tab-content" id="learningTabContent">
                                                <div class="tab-pane fade show active" id="all-class5" role="tabpanel" aria-labelledby="all-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-blue">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 5</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo_class5">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 5</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class5">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-yellow">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 5</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="evs_lo_class5">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="language-class5" role="tabpanel" aria-labelledby="language-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-blue">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 5</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo_class5">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="math-class5" role="tabpanel" aria-labelledby="math-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 5</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class5">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="evs-class5" role="tabpanel" aria-labelledby="evs-lo-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-yellow">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 5</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="evs_lo_class5">
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
                                  </div>  

                                  <div class="tab-pane fade" id="learning_class8" role="tabpanel" aria-labelledby="state-learning-tab">
                                    <div class="learning-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              Performance in Learning Outcomes (LOs)
                                            </h2>
                                            <div class="learning-tabs mtb-30">
                                              <ul class="nav nav-tabs" id="learningTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link active" id="c8-all-tab" data-bs-toggle="tab" data-bs-target="#c8-all" type="button" role="tab" aria-controls="c8-all" aria-selected="true">All</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c8-language-tab" data-bs-toggle="tab" data-bs-target="#c8-language" type="button" role="tab" aria-controls="language" aria-selected="false">language</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c8-science-tab" data-bs-toggle="tab" data-bs-target="#c8-science" type="button" role="tab" aria-controls="c8-science" aria-selected="false">Science</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c8-math-tab" data-bs-toggle="tab" data-bs-target="#c8-math" type="button" role="tab" aria-controls="c8-math" aria-selected="false">Mathematics</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c8-socialsci-tab" data-bs-toggle="tab" data-bs-target="#c8-socialsci" type="button" role="tab" aria-controls="c8-socialsci" aria-selected="false">Social Science</button>
                                                </li>

                                              </ul>
                                              <div class="tab-content" id="learningTabContent">
                                                <div class="tab-pane fade show active" id="c8-all" role="tabpanel" aria-labelledby="c8-all-tab">
                                                      
                                                  <div class="learning-table-wrap">
                                                      <h2 class="table-title card-blue">
                                                          <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                      </h2>
                                                      <div class="learning-table">
                                                        <table class="table">
                                                          <thead class="thead-blue">
                                                            <tr>
                                                              <th scope="col">LO Code</th>
                                                              <th scope="col">Learning Outcome for Class 8</th>
                                                              <th scope="col" class="district-header">District</th>
                                                              <th scope="col" class="state-header">State</th>
                                                              <th scope="col" class="national-header">National</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody class="language_lo_class8">
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    
                                                  </div>

                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-sagegreen">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-sagegreen">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 8</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="science_lo_class8">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 8</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class8">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-green">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-green">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 8</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="social_lo_class8">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c8-socialsci" role="tabpanel" aria-labelledby="c8-socialsci-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-green">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-green">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 8</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="social_lo_class8">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c8-science" role="tabpanel" aria-labelledby="c8-science-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-sagegreen">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-sagegreen">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 8</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="science_lo_class8">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c8-math" role="tabpanel" aria-labelledby="c8-math-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 8</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class8">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c8-language" role="tabpanel" aria-labelledby="c8-language-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-blue">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 8</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo_class8">
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
                                  </div>

                                  <div class="tab-pane fade" id="learning_class10" role="tabpanel" aria-labelledby="state-learning-tab">
                                    <div class="learning-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              Performance in Learning Outcomes (LOs)
                                            </h2>
                                            <div class="learning-tabs mtb-30">
                                              <ul class="nav nav-tabs" id="learningTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link active" id="c10-all-tab" data-bs-toggle="tab" data-bs-target="#c10-all" type="button" role="tab" aria-controls="c10-all" aria-selected="true">All</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c10-mil-tab" data-bs-toggle="tab" data-bs-target="#c10-mil" type="button" role="tab" aria-controls="c10-mil" aria-selected="false">MIL</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c10-socialsci-tab" data-bs-toggle="tab" data-bs-target="#c10-socialsci" type="button" role="tab" aria-controls="c10-socialsci" aria-selected="false">Social Science</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c10-eng-tab" data-bs-toggle="tab" data-bs-target="#c10-eng" type="button" role="tab" aria-controls="c10-eng" aria-selected="false">English</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c10-science-tab" data-bs-toggle="tab" data-bs-target="#c10-science" type="button" role="tab" aria-controls="c10-science" aria-selected="false">Science</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="c10-math-tab" data-bs-toggle="tab" data-bs-target="#c10-math" type="button" role="tab" aria-controls="c10-math" aria-selected="false">Mathematics</button>
                                                </li>

                                              </ul>
                                              <div class="tab-content" id="learningTabContent">
                                                <div class="tab-pane fade show active" id="c10-all" role="tabpanel" aria-labelledby="c10-all-tab">

                                                  <div class="learning-table-wrap">
                                                      <h2 class="table-title card-red">
                                                          <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL
                                                      </h2>
                                                      <div class="learning-table">
                                                        <table class="table">
                                                          <thead class="thead-red">
                                                            <tr>
                                                              <th scope="col">LO Code</th>
                                                              <th scope="col">Learning Outcome for Class 10</th>
                                                              <th scope="col" class="district-header">District</th>
                                                              <th scope="col" class="state-header">State</th>
                                                              <th scope="col" class="national-header">National</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody class="mil_lo_class10">
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-green">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-green">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="social_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-purple">
                                                        <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-purple">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="english_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-sagegreen">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-sagegreen">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="science_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>                                              
                                                </div>
                                                <div class="tab-pane fade" id="c10-mil" role="tabpanel" aria-labelledby="c10-mil-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-red">
                                                        <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-red">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="mil_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c10-socialsci" role="tabpanel" aria-labelledby="c10-socialsci-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-green">
                                                        <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-green">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="social_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c10-eng" role="tabpanel" aria-labelledby="c10-eng-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-purple">
                                                        <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-purple">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="english_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c10-science" role="tabpanel" aria-labelledby="c10-science-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-sagegreen">
                                                        <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-sagegreen">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="science_lo_class10">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="c10-math" role="tabpanel" aria-labelledby="c10-math-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 10</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo_class10">
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
                                  </div>
                                  <div class="tab-pane fade" id="learning_classall" role="tabpanel" aria-labelledby="dac-learning-tab">
                                  <div class="learning-wrap">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2 class="heading-grey text-center">
                                          Performance in Learning Outcomes (LOs)
                                        </h2>
                                        <div class="dac-lo-accordion-wrap mtb-20">
                                          <div class="accordion dac-lo-accordion" id="dac-loAccordion">
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="dac-loAccordionOne">
                                                <button class="accordion-button card-blue" type="button" data-bs-toggle="collapse" data-bs-target="#dac-loAccordioncollapseOne" aria-expanded="true" aria-controls="dac-loAccordioncollapseOne">
                                                  <div class="accordion-btn-content">
                                                    <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                  </div>  
                                                  
                                                </button>
                                              </h2>
                                              <div id="dac-loAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="dac-loAccordionOne">
                                                <div class="accordion-body">
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-blue">
                                                        CLASS 3
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo3_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-blue">
                                                        CLASS 5
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo5_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-blue">
                                                        CLASS 8
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="language_lo8_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="dac-loAccordionTwo">
                                                <button class="accordion-button card-pink collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-loAccordioncollapseTwo" aria-expanded="true" aria-controls="dac-loAccordioncollapseTwo">
                                                  <div class="accordion-btn-content">
                                                    <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35" /> Mathematics
                                                  </div>
                                                </button>
                                              </h2>
                                              <div id="dac-loAccordioncollapseTwo" class="accordion-collapse collapse show" aria-labelledby="dac-loAccordionTwo">
                                                <div class="accordion-body">
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-pink">
                                                        CLASS 3
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo3_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-pink">
                                                        CLASS 5
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo5_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-pink">
                                                        CLASS 8
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo8_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-pink">
                                                        CLASS 10
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="math_lo10_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="dac-loAccordionThree">
                                                <button class="accordion-button card-yellow collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-loAccordioncollapseThree" aria-expanded="true" aria-controls="dac-loAccordioncollapseThree">
                                                  <div class="accordion-btn-content">
                                                    <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS
                                                  </div>
                                                </button>
                                              </h2>
                                              <div id="dac-loAccordioncollapseThree" class="accordion-collapse collapse show" aria-labelledby="dac-loAccordionThree">
                                                <div class="accordion-body">
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-yellow">
                                                        CLASS 3
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="evs_lo3_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-yellow">
                                                        CLASS 5
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="evs_lo5_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="dac-loAccordionfour">
                                                <button class="accordion-button card-red collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-loAccordioncollapsefour" aria-expanded="true" aria-controls="dac-loAccordioncollapsefour">
                                                  <div class="accordion-btn-content">
                                                    <img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid" /> MIL
                                                  </div>
                                                </button>
                                              </h2>
                                              <div id="dac-loAccordioncollapsefour" class="accordion-collapse collapse show" aria-labelledby="dac-loAccordionfour">
                                                <div class="accordion-body">
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-red">
                                                        CLASS 10
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-red">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="mil_lo10_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="dac-loAccordionfive">
                                                <button class="accordion-button card-green collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-loAccordioncollapsefive" aria-expanded="true" aria-controls="dac-loAccordioncollapsefive">
                                                  <div class="accordion-btn-content">
                                                    <img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid" /> Social Science
                                                  </div>
                                                </button>
                                              </h2>
                                              <div id="dac-loAccordioncollapsefive" class="accordion-collapse collapse show" aria-labelledby="dac-loAccordionfive">
                                                <div class="accordion-body">
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-green">
                                                        CLASS 8
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-green">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="social_lo8_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-green">
                                                        CLASS 10
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-green">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="social_lo10_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="dac-loAccordionsix">
                                                <button class="accordion-button card-purple collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-loAccordioncollapsesix" aria-expanded="true" aria-controls="dac-loAccordioncollapsesix">
                                                  <div class="accordion-btn-content">
                                                    <img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid" /> English
                                                  </div>
                                                </button>
                                              </h2>
                                              <div id="dac-loAccordioncollapsesix" class="accordion-collapse collapse show" aria-labelledby="dac-loAccordionsix">
                                                <div class="accordion-body">
                                                  
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-purple">
                                                        CLASS 10
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-purple">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="english_lo10_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item mtb-30">
                                              <h2 class="accordion-header" id="dac-loAccordionseven">
                                                <button class="accordion-button card-sagegreen collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dac-loAccordioncollapseseven" aria-expanded="true" aria-controls="dac-loAccordioncollapseseven">
                                                  <div class="accordion-btn-content">
                                                    <img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid" /> Science
                                                  </div>
                                                </button>
                                              </h2>
                                              <div id="dac-loAccordioncollapseseven" class="accordion-collapse collapse show" aria-labelledby="dac-loAccordionseven">
                                                <div class="accordion-body">
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-sagegreen">
                                                        CLASS 8
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-sagegreen">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="science_lo8_classall">
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <div class="dac-lo-classtitle-wrap">
                                                      <h2 class="dac-lo-classtitle title-sagegreen">
                                                        CLASS 10
                                                      </h2>
                                                    </div>
                                                    
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-sagegreen">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome</th>
                                                            <th scope="col" class="district-header">District</th>
                                                            <th scope="col" class="state-header">State</th>
                                                            <th scope="col" class="national-header">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody class="social_lo10_classall">
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
                                    </div>
                                </div>
                                </div>


@endsection