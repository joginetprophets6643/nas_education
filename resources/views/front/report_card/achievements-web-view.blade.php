@include('front.includes.header')
<script>      let token = '{{env("API_TOKEN")}}'  </script>

<body>                  
  <div class="tab-pane fade" id="achievementstate_class3" role="tabpanel" aria-labelledby="achievementstate_class3">
    <div class="container">
      <div class="sc10-achievement-wrap">
        <div class="row">
          <div class="col-md-12">
            <div class="achievement-content">
              <h2 class="heading-grey text-center for_state" style="font-size:200%"></h2>
              <h2 class="heading-grey text-center">
              ACHIEVEMENT IN ASSOCIATION WITH CONTEXTUAL VARIABLE (SOME INDICES)
              </h2> 
              <div class="category-wrap row">
                <div class="category-list col-md-3 mb-3">
                  <ul>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">A</span> Girl - Boys</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">B</span>Rural - Urban</div>
                    </li>
                    
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">C</span>Govt.</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">D</span>Govt. Aided</div>
                    </li>

                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">E</span>Private</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">F</span>Central Govt.</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">G</span>SC</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">H</span>ST</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">I</span>OBC</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="bg-dark text-white text-center">J</span>General</div>
                    </li>
                  </ul>
                </div>
                <div class="category-status col-md-3">
                  <ul>
                    <li>
                      <div class="category-item"><span class="card-positive"></span> Positive Difference</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="card-negative"></span> Negative Difference</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="card-zero"></span> Differance is not Significant</div>
                    </li>
                    <li>
                      <div class="category-item"><span class="card-none"></span> Missing Value</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-md-12 mb-4" id="add_achievementstate"></div>
        </div>
      </div>
    </div>
  </div>
<script src="{{asset('assets/front/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/js/aos.js')}}"></script>
<script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/front/js//highmaps.js')}}"></script>
<script src="{{asset('assets/front/js//exporting.js')}}"></script>
<script src="{{asset('assets/front/js//in-all-disputed.js')}}"></script>
<script src="{{asset('assets/front/js/custom.js')}}"></script>
<script src="{{asset('assets/front/js/district_maps.js')}}"></script>
<script src="{{asset('assets/front/js/states_static.js')}}"></script>
<script>
    let api_url ='{{env("API_URL")}}'
    let classType = '{{$class}}'
    let state = '{{$state}}'
    let global_filters = {}
    let global_filters_state = {}
    limit = -1
    table = 'achievement_src'

    function setFilters() {
      global_filters = {}
      global_filters_state = {}
        if (state !== '' && state !== null) {
          global_filters = { ...global_filters, state_id: { _eq: state } }
          global_filters_state = { ...global_filters_state, udise_state_code: { _eq: state } }
        }
        
        if (classType !== '') {
          if (classType !== 'all') {
              global_filters = { ...global_filters, grade: { _eq: classType } }
          } else {
              delete global_filters["grade"]
          }
        }

    }

    
    $(document).ready(async ()=>{
        $('#achievementstate_class3').addClass('active show')
        setFilters()
        await $.ajax({
        type: "GET",
        headers: {
            "Authorization": "Bearer " + token
        },
        url: api_url + 'state_masters' + '?limit=' + limit + '&filter=' + JSON.stringify(global_filters_state),
        }).done((response)=>{
        sessionStorage.setItem('states',JSON.stringify(response.data))
        });
        
        const state_data = await JSON.parse(sessionStorage.getItem('states'))
        const state_name = state_data[0].state_name
        $('.for_state').html(state_name)
        
        await $.ajax({
        type: "GET",
        headers: {
            "Authorization": "Bearer " + token
        },
        
        url: api_url + table + '?limit=' + limit + '&filter=' + JSON.stringify(global_filters),
        }).done((response)=>{
            const data =  response.data
            sessionStorage.setItem('achievement_data',JSON.stringify(data))
            
        });
        
        
      data = await JSON.parse(sessionStorage.getItem('achievement_data'))
      if(classType=="3"){
        classforphp = "<?php $classid="3"; ?>";
      }
      if(classType=="5"){
        classforphp = "<?php $classid="5"; ?>";
      }
      if(classType=="8"){
        classforphp = "<?php $classid="8"; ?>";
      }
      if(classType=="10"){
        classforphp = "<?php $classid="10"; ?>";
      }
      if(classType=="all"){
        classforphp = "<?php $classid="all"; ?>";
      }

      
      
      //console.log(classforphp);
      achievement_data = '';
      current_grade = ''
      // direction_gender_header = ``
      data.forEach((ach, index) => {
        if (index % 6 === 0) {
          
            achievement_data += '</tbody></table></div></div><br><h5 id="clsheading'+ach.grade+'" style="text-align: center;"><b>Grade ' + ach.grade + '</b></h5><div class="ach-card"><div class="btn-wrap justify-content-end"><button id="slideBack'+ach.grade+'"  class="org-btn btn btn-sm mb-2" type="button"><span class="material-icons-round">chevron_left</span></button><button id="slideNext'+ach.grade+'" class="org-btn btn btn-sm mb-2" type="button"><span class="material-icons-round">navigate_next</span></button></div><div class="ach-table table-responsive" id="achTable'+ach.grade+'"><table class="table table-bordered" id="achTableContent"><thead><tr><th>Factors</th><th class="bg-dark text-white text-center"><span class="category-item">A</span></th><th class="bg-dark text-white text-center"><span class="category-item">B</span></th><th class="bg-dark text-white text-center"><span class="category-item">C</span></th><th class="bg-dark text-white text-center"><span class="category-item">D</span></th><th class="bg-dark text-white text-center"><span class="category-item">E</span></th><th class="bg-dark text-white text-center"><span class="category-item">F</span></th><th class="bg-dark text-white text-center"><span class="category-item">G</span></th><th class="bg-dark text-white text-center"><span class="category-item">H</span></th><th class="bg-dark text-white text-center"><span class="category-item">I</span></th><th class="bg-dark text-white text-center"><span class="category-item">J</span></th></tr></thead><tbody id="add_achievementstate">'
          
        } else {
          if (index === 0) {
            achievement_data += '<div class="ach-card"><div class="btn-wrap justify-content-end"><button id="slideBack"  class="org-btn btn btn-sm mb-2" type="button"><span class="material-icons-round">chevron_left</span></button><button id="slideNext" class="org-btn btn btn-sm mb-2" type="button"><span class="material-icons-round">navigate_next</span></button></div><div class="ach-table table-responsive" id="achTable-1"><table class="table table-bordered" id="achTableContent"><thead><tr><th>Factors</th><th class="bg-dark text-white text-center"><span class="category-item">A</span></th><th class="bg-dark text-white text-center"><span class="category-item">B</span></th><th class="bg-dark text-white text-center"><span class="category-item">C</span></th><th class="bg-dark text-white text-center"><span class="category-item">D</span></th><th class="bg-dark text-white text-center"><span class="category-item">E</span></th><th class="bg-dark text-white text-center"><span class="category-item">F</span></th><th class="bg-dark text-white text-center"><span class="category-item">G</span></th><th class="bg-dark text-white text-center"><span class="category-item">H</span></th><th class="bg-dark text-white text-center"><span class="category-item">I</span></th><th class="bg-dark text-white text-center"><span class="category-item">J</span></th></tr></thead><tbody id="add_achievementstate">'
          }
        }

        
          if (ach.direction_gender == 0) {
            direction_gender = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_gender == 1) {
            direction_gender = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_gender == -1) {
            direction_gender = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_gender == 2) {
            direction_gender = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_location == 0) {
            direction_location = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_location == 1) {
            direction_location = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_location == -1) {
            direction_location = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_location == 2) {
            direction_location = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_gov == 0) {
            direction_sch_mgmt_gov = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_gov == 1) {
            direction_sch_mgmt_gov = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_gov == -1) {
            direction_sch_mgmt_gov = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_gov == 2) {
            direction_sch_mgmt_gov = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_govaid == 0) {
            direction_sch_mgmt_govaid = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_govaid == 1) {
            direction_sch_mgmt_govaid = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_govaid == -1) {
            direction_sch_mgmt_govaid = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_govaid == 2) {
            direction_sch_mgmt_govaid = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_priv == 0) {
            direction_sch_mgmt_priv = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_priv == 1) {
            direction_sch_mgmt_priv = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_priv == -1) {
            direction_sch_mgmt_priv = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_priv == 2) {
            direction_sch_mgmt_priv = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_centgov == 0) {
            direction_sch_mgmt_centgov = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_centgov == 1) {
            direction_sch_mgmt_centgov = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_centgov == -1) {
            direction_sch_mgmt_centgov = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_centgov == 2) {
            direction_sch_mgmt_centgov = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_sc == 0) {
            direction_category_sc = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_sc == 1) {
            direction_category_sc = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_sc == -1) {
            direction_category_sc = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_sc == 2) {
            direction_category_sc = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_st == 0) {
            direction_category_st = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_st == 1) {
            direction_category_st = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_st == -1) {
            direction_category_st = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_st == 2) {
            direction_category_st = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_obc == 0) {
            direction_category_obc = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_obc == 1) {
            direction_category_obc = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_obc == -1) {
            direction_category_obc = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_obc == 2) {
            direction_category_obc = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_gen == 0) {
            direction_category_gen = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_gen == 1) {
            direction_category_gen = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_gen == -1) {
            direction_category_gen = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_gen == 2) {
            direction_category_gen = '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_ews == 0) {
            direction_category_ews = '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_ews == 1) {
            direction_category_ews = '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_ews == -1) {
            direction_category_ews = '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_ews == 2) {
            direction_category_ews = '<td class="card-status card-none"></td>';
          }

          // if(classType == 'all'){
          //   if(index % 6 === 0){
          // achievement_data += '<h5 style="text-align: center;"><b>Grade' +ach.grade+'</b></h5>'

          //   }
          // }


          achievement_data += '<tr><td>' + ach.factor + '</td>' + direction_gender + direction_location + direction_sch_mgmt_gov + direction_sch_mgmt_govaid + direction_sch_mgmt_priv + direction_sch_mgmt_centgov + direction_category_sc + direction_category_st + direction_category_obc + direction_category_gen + '</tr>'





        

        $('#add_achievementstate').html(achievement_data);

      })


      // achievement table slider starts
      // For Class 3
      $('#slideNext3').click(()=>{
          var achTable = document.getElementById('achTable3');
          sideScroll(achTable,'right',25,100,10);
      });

      $('#slideBack3').click(()=>{
          var achTable = document.getElementById('achTable3');
          sideScroll(achTable,'left',25,100,10);
      });
      // For Class 5
      $('#slideNext5').click(()=>{
          var achTable = document.getElementById('achTable5');
          sideScroll(achTable,'right',25,100,10);
      });

      $('#slideBack5').click(()=>{
          var achTable = document.getElementById('achTable5');
          sideScroll(achTable,'left',25,100,10);
      });
      // For Class 8
      $('#slideNext8').click(()=>{
          var achTable = document.getElementById('achTable8');
          sideScroll(achTable,'right',25,100,10);
      });

      $('#slideBack8').click(()=>{
          var achTable = document.getElementById('achTable8');
          sideScroll(achTable,'left',25,100,10);
      });
      // For Class 10
      $('#slideNext10').click(()=>{
          var achTable = document.getElementById('achTable10');
          sideScroll(achTable,'right',25,100,10);
      });

      $('#slideBack10').click(()=>{
          var achTable = document.getElementById('achTable10');
          sideScroll(achTable,'left',25,100,10);
      });


      function sideScroll(element,direction,speed,distance,step){
          scrollAmount = 0;
          var slideTimer = setInterval(function(){
              if(direction == 'left'){
                  element.scrollLeft -= step;
              } else {
                  element.scrollLeft += step;
              }
              scrollAmount += step;
              if(scrollAmount >= distance){
                  window.clearInterval(slideTimer);
              }
          }, speed);
      }
      // achievement table slider ends
    });

    
</script>