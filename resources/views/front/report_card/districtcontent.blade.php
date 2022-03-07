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
@include('front.report_card.resultglimpses')
@include('front.report_card.achievement')
<div class="tab-content tablayertwo-content">
                            <div class="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
                              <ul class="nav nav-tabs tablayerthree pb-2" role="tablist" >
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="true" onClick="setScreen('information')">Highlight</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="participation-tab" data-bs-toggle="tab" data-bs-target="#participation" type="button" role="tab" aria-controls="participation" aria-selected="false" onClick="setScreen('participation')">Participation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="performance-tab" data-bs-toggle="tab" data-bs-target="#performance" type="button" role="tab" aria-controls="performance" aria-selected="false"onClick="setScreen('performance')">Performance</button>
                                </li>
                                <li class="nav-item" role="presentation" id="learningoutcome-tab">
                                  <button class="nav-link" id="learning-tab" data-bs-toggle="tab" data-bs-target="#learning" type="button" role="tab" aria-controls="learning" aria-selected="false"onClick="setScreen('learning')">Learning Outcomes</button>
                                </li>
                                <li class="nav-item" role="presentation" id="result-glimpses-tab">
                                  <button class="nav-link" id="glimpses-tab" data-bs-toggle="tab" data-bs-target="#glimpses" type="button" role="tab" aria-controls="glimpses" aria-selected="false" onClick="setScreen('glimpses')">Result Glimpses</button>
                                </li>
                                <li class="nav-item" role="presentation" id="achievementstate-tab">
                                  <button class="nav-link" id="achievement-tab" data-bs-toggle="tab" data-bs-target="#achievement" type="button" role="tab" aria-controls="achievement" aria-selected="false" onClick="setScreen('achievement')">Achievement</button>
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
                                @yield('result-glimpses')
                                @yield('achievement')
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
<script>
  function updateReportCardLink(){

    const state =JSON.parse(sessionStorage.getItem('activeState'))
    const district =JSON.parse(sessionStorage.getItem('activeDistrict'))
    let link = ''
    if(state !== null){
      const encrpt_state_id = "{{Crypt::encrypt("state.state_id")}}"
      if(district !== null){
        console.log('district report')
        const encrpt_district_id = "{{Crypt::encrypt("district.district_id")}}"

        link = '/download-district-report/'+encrpt_state_id+'/'+encrpt_district_id
      }else{
        console.log('state report')

        link = '/download-state-report/'+encrpt_state_id
      }
    }else{
      console.log('national report')
      link = '/download-national-report'
    }
    $('#report-link').attr('href',link)
}
</script>
<script src="{{asset('assets/front/js/reportcard.js')}}"></script>
