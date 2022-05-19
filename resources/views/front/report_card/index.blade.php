@include('front.includes.header')
@include('front.includes.nav')

<div class="sidebaroverlay"></div>
<div class="sidebarmenu" id="statesidebar">
  <a class="closesidebar">
    <svg viewBox="0 0 311 311.07733">
          <path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"></path>
          <path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"></path>
      </svg>
  </a>
  <div class="sidebarwrap scrollbar-y">
      <div class="search-bar">
        <input type="text" class="form-control" id="rc-state-search" placeholder="Search for State" onkeyup='filterList("state")' onkeypress="preventSymbols(event)">
      </div>
      <ul id="rc-state-list">
      @foreach($states as $state)
      <li onclick="stateRC({{$state->state_id}})" class="state-list-custom"><a href="javascript:void(0);">{{$state->state_name}}</a></li>
      @endforeach
      </ul>
  </div>
</div>


<!-- <div class="sidebaroverlay"></div> -->
<div class="sidebarmenu" id="districtsidebar">
  <a class="closesidebar">
    <svg viewBox="0 0 311 311.07733">
          <path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"></path>
          <path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"></path>
      </svg>
  </a>
  <div class="sidebar-select-wrap sidebarwrap scrollbar-y">
    <!-- <div class="search-bar">
      <input type="text" class="form-control" placeholder="Search for District" id="rc-district-search" onkeyup='filterList("district")'>
    </div> -->
    <select class="state-select" name="state">
    <option value="">Select State</option>
    @foreach($states as $state)
    <option value="{{$state->state_id}}">{{$state->state_name}}</option>
    @endforeach
    </select>
      
    <select class="district-select" name="state">
    <option value="">Select District</option>
    </select>

  </div>
</div>

<section class="banner-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-yellow">
                    {{ __('lang.Report Card') }}
                    </h2>
                    <div class="breadcrum-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                              <li class="breadcrumb-item"><a href="{{url('/report-card')}}">{{ __('lang.Report Card') }}</a></li>
                              <li class="breadcrumb-item active" aria-current="page">{{ __('lang.NAS 2021') }}</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section class="rcmain-page-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-white">
                    <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                    <div class="desc-black para-justify">
                      <h2 class="heading-blue">
                          National Achievement Survey(NAS)-2021
                      </h2>
                    @if(!empty($content->page_meta_title))
                       {!!$content->inner_page_content!!}
                    @endif
                        <!-- NCERT, under the aegis of MHRD, conducted the National Achievement Survey (NAS) throughout the country on November 13, 2021, for Classes 3, 5 and 8 in government and government-aided schools. The survey tools used multiple test booklets with 45 questions in Classes 3 and 5 and 60 questions in Class VIII in Mathematics, Language, Sciences and Social Sciences. The competency-based test questions reflect the learning outcomes developed by NCERT which were recently incorporated in the RTE Act by the Government of India. Along with the test items, questionnaires about students, teachers and schools were also used. The learning levels of 2.2 million students from 1,10,000 schools across 701 districts in all 36 states/UTs were assessed. The findings of the survey help guide the education policy, planning and implementation at national, state, district and classroom levels to improve the learning levels of children and bring about qualitative improvements. -->
</div>
                    </div>
                    
                    <div class="col-lg-4 col-xl-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="National Report Card">
                      <a href="javascript:void(0);" onClick="goToNationalReport();">
                        <div class="line-card line-card-pink">
                            <div class="line-cardimg">
                            <img src="{{asset('assets/front/images/national1.jpg')}}" alt="national" class="img-fluid" />
                            </div>
                            <div class="btn-wrap">
                            <a href="javascript:void(0);" onClick="goToNationalReport();"class="line-cardbtn w-100 btn-pink">National Report Card</a>
                            </div>
                        </div>
                      </a>
                    </div>
                    

                    
                    <div class="col-lg-4 col-xl-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="State Report Card">
                      <a href="javascript:void(0);" class="stateopen">
                        <div class="line-card line-card-green">
                            <div class="line-cardimg">
                            <img src="{{asset('assets/front/images/state1.jpg')}}" alt="state" class="img-fluid" />
                            </div>
                            <div class="btn-wrap">
                            <a class="line-cardbtn w-100 btn-green stateopen" href="javascript:void(0);" >State Report Card</a>
                            </div>
                        </div>
                      </a>
                    </div>

                    
                    <div class="col-lg-4 col-xl-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="District Report Card">
                      <a href="javascript:void(0);" class="districtopen">
                        <div class="line-card line-card-blue">
                            <div class="line-cardimg">
                            <img src="{{asset('assets/front/images/district1.jpg')}}" alt="district" class="img-fluid" />
                            </div>
                            <div class="btn-wrap">
                            <a class="line-cardbtn w-100 btn-blue districtopen" href="javascript:void(0);">District Report Card</a>
                            </div>
                        </div>
                    </a>
                    </div>
                    
                    </div>
                
                </div>
            </div>    
        </div>
    </div>
</section>



@include('front.includes.footer')
<script>
    function goToNationalReport(){

      sessionStorage.removeItem('activeState')
      sessionStorage.removeItem('activeDistrict')
      location.href = base_url + 'report-card/nas-2021'

    }
    function stateRC(id){

    let state = states.filter(function(states){
        return states.state_id==id;
    }).pop()

    sessionStorage.setItem('activeState',JSON.stringify(state))
    sessionStorage.removeItem('activeDistrict')
    location.href = base_url + 'report-card/nas-2021'

    }

    $('.state-select').change((e)=>{

      $('.district-select').empty();
      $('.district-select').append('<option value="">Select District</option>')
      let id = e.target.value;

      let dis = districts.filter(function(districts){
          return districts.state_id==id;
      })
      dis=dis.sort((a, b) => a.district_name.localeCompare(b.district_name))
      dis.forEach((item)=>{
          $('.district-select').append(`<option value="${item.district_id}">
              ${item.district_name}
          </option>`);
      })

    })

    $('.district-select').change((e)=>{

    let district = districts.filter(function(districts){
        return districts.district_id==e.target.value;
    }).pop()

    let state =states.filter(function(states){
        return states.state_id==$('.state-select').val();
    }).pop()
    
    sessionStorage.setItem('activeState',JSON.stringify(state))
    sessionStorage.setItem('activeDistrict',JSON.stringify(district))
    location.href = base_url + 'report-card/nas-2021'
    // console.log(district,state);

    })

    let districts='';
    let states='';
    
    $(document).ready(()=> {

        $.ajax({
        type: "GET",
        headers: {
            "Authorization": "Bearer " + token
        },
        url: api_url + 'district_masters?limit=-1',
        }).done(response => {
            districts=response.data;
        })

        $.ajax({
        type: "GET",
        headers: {
            "Authorization": "Bearer " + token
        },
        url: api_url + 'state_masters?limit=-1',
        }).done(response => {
            states=response.data;
        })

    })

    function filterList(type){
    let ul = []
    let li = []
    let filter = ''

    if(type === "district"){
      filter = $('#rc-district-search').val().toLowerCase()
      ul = document.getElementById('rc-district-list')
      li = ul.getElementsByClassName('district-list-custom')
    }
    else{
      filter = $('#rc-state-search').val().toLowerCase()
      ul = document.getElementById('rc-state-list')
      li = ul.getElementsByClassName('state-list-custom')
    }
    for (i = 0; i < li.length; i++) {
      let txtValue = ''
      const a = li[i].getElementsByTagName("a")[0]
      txtValue = a.textContent || a.innerText;

      if (txtValue.toLowerCase().indexOf(filter) > -1) {
          li[i].style.display = "";
      } else {
          li[i].style.display = "none";
      }
    } 

  }
</script>

<script>
      $(document).on('click','.stateopen', function(e) {
        $('.sidebaroverlay,#statesidebar').addClass('opened');
        $('#rc-state-search').focus()
      });
      $(document).on('click','.districtopen', function(e) {
        $('.sidebaroverlay,#districtsidebar').addClass('opened');
      });
      $(document).on('click','.closesidebar', function(e) {
        $('.sidebaroverlay,.sidebarmenu').removeClass('opened');
      }); 
      $(document).ready(function() {
          $('.state-select').select2();
          $('.district-select').select2();
      });

      $(document).on('select2:open', () => {
          document.querySelector('.select2-search__field').focus();
      });
      
    function preventSymbols(e) {
      var key = e.keyCode;
      var regex = /^[A-Za-z]+$/;

      //Validate TextBox value against the Regex.
      var isValid = regex.test(String.fromCharCode(key))
      if (!isValid) {
        e.preventDefault();
      }
    }
</script>