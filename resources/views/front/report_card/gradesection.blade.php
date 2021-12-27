<main class="main-content-wrap">
                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sideBar" aria-controls="sideBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="tabs-layer-wrap">
                     <div class="d-flex align-items-center justify-content-between">
                        <ul class="nav nav-tabs tablayerone" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="national-tab" data-bs-toggle="tab" data-bs-target="#national" type="button" role="tab" aria-controls="national" aria-selected="true">National</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="state-tab" data-bs-toggle="tab" data-bs-target="#state" type="button" role="tab" aria-controls="state" aria-selected="false">State</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="district-tab" data-bs-toggle="tab" data-bs-target="#district" type="button" role="tab" aria-controls="district" aria-selected="false">District</button>
                            </li>
                        </ul>
                        <div class="view-wrap">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Data View
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Report View
                            </label>
                          </div>
                        </div>
                     </div>
                      <div class="tab-content tablayerone-content">
                        <div class="tab-pane fade" id="national" role="tabpanel" aria-labelledby="national-tab">...</div>
                        <div class="tab-pane fade" id="state" role="tabpanel" aria-labelledby="state-tab">...</div>
                        <div class="tab-pane fade show active" id="district" role="tabpanel" aria-labelledby="district-tab">
                          <ul class="nav nav-tabs tablayertwo mtb-20" role="tablist">
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
                            <li class="nav-item" role="presentation" onClick="chageDataWithFilter('data_filter','')">
                              <button class="nav-link" id="allclasses-tab" data-bs-toggle="tab" data-bs-target="#classfilter" type="button" role="tab" aria-controls="allclasses" aria-selected="false">all classes</button>
                            </li>
                          </ul>
                         