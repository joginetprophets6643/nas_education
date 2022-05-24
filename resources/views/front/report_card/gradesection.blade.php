<main class="main-content-wrap active-main-content">
                <div class="tabs-layer-wrap">
                     <div class="d-flex align-items-center justify-content-between">
                        <ul class="nav nav-tabs tablayerone" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link ham-icon" id="menu-btn">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="national-tab" onClick="chageDataWithFilter('global_filter','national')">National</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="state-tab"  onClick="chageDataWithFilter('global_filter','state')">State</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="district-tab"  onClick="chageDataWithFilter('global_filter','district')">District</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <strong>
                                <span class="nav-link t" id="navbar-highlighter"></span>
                              </strong>
                            </li>
                            <!-- <li class="nav-item" role="presentation"><button class="nav-link"  onClick="javascript:void(0);" ><b><span id="navbar-highlighter" ></span></b></button></li> -->
                        </ul>
                        <div class="view-wrap">
                          <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Data View
                            </label>
                          </div> -->
                        
                          <!-- <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Report View
                            </label>
                          </div> -->
                          <div class="btn-wrap">
                            <!-- <a href="#" class="btn org-bdr-btn data-btn">Data View</a> -->
                            <a href="javascript:void(0);" class="btn org-bdr-btn data-btn d-none">
                              <span class="btn-text">Report View (2017)</span>
                              &nbsp;<span class="material-icons-round">
                                file_download
                            </span></a>
                            <a href="{{url('/download-pdf')}}" target="_blank" id="report-link" class="btn org-btn report-btn mobile-report-btn">
                              <span class="material-icons-round">
                                file_download
                              </span>
                            </a>
                            
                          </div>
                        </div>
                     </div>
                      <div class="tab-content tablayerone-content">
                        <div class="tab-pane fade" id="national" role="tabpanel" aria-labelledby="national-tab">...</div>
                        <div class="tab-pane fade" id="state" role="tabpanel" aria-labelledby="state-tab">...</div>
                        <div class="tab-pane fade show active" id="district" role="tabpanel" aria-labelledby="district-tab">
                          <div class="d-flex sticky-nav scroll-top align-items-center justify-content-between" id="scrollTab">
                            <ul class="nav nav-tabs tablayertwo mtb-15" role="tablist">
                              <li class="nav-item" role="presentation" onClick="chageDataWithFilter('data_filter','3')">
                                <button class="nav-link active" id="class3-tab" data-bs-toggle="tab" data-bs-target="#classfilter" type="button" role="tab" aria-controls="class3" aria-selected="true">class 3</button>
                              </li>
                              <li class="nav-item" role="presentation" onClick="chageDataWithFilter('data_filter','5')">
                                <button class="nav-link" id="class5-tab" data-bs-toggle="tab" data-bs-target="#classfilter" type="button" role="tab" aria-controls="class5" aria-selected="false">class 5</button>
                              </li>
                              <li class="nav-item" role="presentation" onClick="chageDataWithFilter('data_filter','8')">
                                <button class="nav-link" id="class8-tab" data-bs-toggle="tab" data-bs-target="#classfilter" type="button" role="tab" aria-controls="class8" aria-selected="false">class 8</button>
                              </li>
                              <li class="nav-item" role="presentation" onClick="chageDataWithFilter('data_filter','10')">
                                <button class="nav-link" id="class10-tab" data-bs-toggle="tab" data-bs-target="#classfilter" type="button" role="tab" aria-controls="class10" aria-selected="false">class 10</button>
                              </li>
                              <li class="nav-item" role="presentation" onClick="chageDataWithFilter('data_filter','all')">
                                <button class="nav-link" id="allclasses-tab" data-bs-toggle="tab" data-bs-target="#classfilter" type="button" role="tab" aria-controls="allclasses" aria-selected="false">all classes</button>
                              </li>
                              
                            </ul>
                            <div class="btn-dwn">
                              <a href="{{url('/download-pdf')}}" target="_blank" id="report-link" class="btn org-btn report-btn nrml-report-btn">
                              <!-- <span class="btn-text">Report View (2017)</span> -->
                                Report View 
                                <span class="material-icons-round">
                                  file_download
                                </span>
                              </a>
                            </div>
                          </div>
                         