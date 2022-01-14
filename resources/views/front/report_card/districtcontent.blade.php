@include('front.includes.header')
@include('front.includes.nav')
@include('front.report_card.sidebar')
@include('front.report_card.gradesection')
@include('front.report_card.performance')
@include('front.report_card.feedback')
@include('front.report_card.learning')
@include('front.report_card.performance')
@include('front.report_card.participation')
@include('front.report_card.information')
<div class="tab-content tablayertwo-content">
                            <div class="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
                              <ul class="nav nav-tabs tablayerthree" role="tablist" >
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="true" onClick="setScreen('information')">Highlight</button>
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
                            <div class="tab-content tablayerthree-content" id="screen-content">
                                @yield('information')
                                @yield('participation')
                                @yield('performance')
                                @yield('learning')
                                @yield('feedback')
                            </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="class5" role="tabpanel" aria-labelledby="class5-tab">...</div>
                            <div class="tab-pane fade" id="class8" role="tabpanel" aria-labelledby="class8-tab">...</div>
                            <div class="tab-pane fade" id="class10" role="tabpanel" aria-labelledby="class10-tab">...</div>
                            <div class="tab-pane fade" id="allclasses" role="tabpanel" aria-labelledby="allclasses-tab">...</div> -->
                          </div>
                        </div>
                      </div>
                </div>

            </main>
        </div>

    </section>
@include('front.includes.footer')
<script src="{{asset('assets/front/js/reportcard.js')}}"></script>

