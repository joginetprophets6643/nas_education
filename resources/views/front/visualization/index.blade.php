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
        <input type="text" class="form-control" id="rc-state-search" placeholder="Search for State" onkeyup='filterList("state")'>
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
  <div class="sidebarwrap scrollbar-y">
    <div class="search-bar">
      <input type="text" class="form-control" placeholder="Search for District" id="rc-district-search" onkeyup='filterList("district")'>
    </div>
    
      <ul id="rc-district-list">
      @foreach($districts as $district)
      <li onclick="districtRC({{$district->district_id}})" class="district-list-custom"><a href="javascript:void(0);">{{strtoupper($district->state_name)}} > {{$district->district_name}}</a></li>
      @endforeach
      </ul>
  </div>
</div>

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{ __('lang.Visualization') }}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Visualization') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="visualization-wrap bg-grey ptb-60">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card-white">
            <div class="row justify-content-center">
              <div class="col-md-12 mb-4">
                <h2 class="heading-blue">VISUALIZATION</h2>
              </div>
              <div class="col-md-12">
                <p class="fw-bold">Dashboard</p>
                <div class="row">
                  <div class="col-md-6">
                    <p class="desc-black">
                      The NAS dashboard has been divided into two clusters – Class-3, Class-5, Class-8 and Class-10. Subject wise information on following indicators and subgroups has been provided.
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="desc-black">
                    The NAS dashboard has been divided into two clusters – Class-3, Class-5, Class-8 and Class-10. Subject wise information on following indicators and subgroups has been provided.
                    </p>
                  </div>
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="line-card line-card-shadow">
                  <div class="line-cardimg">
                    <img src="{{asset('assets/front/images/visualization_2017.png')}}" alt="visualization" class="img-fluid" />
                  </div>
                  <div class="btn-wrap justify-content-center pt-2 pb-4">
                    <a href="{{ env('NAS2017URL') }}" class="line-cardbtn org-btn" target="_blank">Access Dashboard 2017</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="line-card line-card-shadow">
                  <div class="line-cardimg">
                  
                    <img src="{{asset('assets/front/images/visualization_2021.png')}}" alt="state" class="img-fluid" />
                  </div>
                  <div class="btn-wrap justify-content-center pt-2 pb-4">
                    <a href="{{url('visualization/nas-2021')}}" class="line-cardbtn org-btn" target="_blank">Access Dashboard 2021</a>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="mt-4">
                  <div class="row align-items-center">
                   <div class="col-md-6">
                     <div class="mobileapp-img-wrap">
                         <img src="{{asset('assets/front/images/mobileapp.png')}}" alt="img" class="img-fluid" />
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="mobileapp-content">
                         <h2 class="heading-blue">
                             MOBILE APP
                         </h2>
                         <p class="desc-black">
                             This mobile application provides a quick and an easy access to information on learning outcome. Disaggregated and details learning achievement by management of schools, gender, social groups and location till district level in classes 3, 5 and 8 and detailed achievement by learning outcomes in classes 3, 5 and 8 are provided in the mobile app. After the selection of indicator and subgroup user can visualize information in charts and maps as per his/her choice and easily share through email or social media to any other user.
                         </p>
                         <div class="app-wrap">
                             <h3 class="text-black">
                                 Download the <span class="text-red">FREE</span> App Today!
                             </h3>
                             <div class="btn-wrap">
                                 <a href="#" class="btn app-btn">
                                     <img src="{{asset('assets/front/images/google_play.png')}}" alt="gp" class="img-fluid" />
                                 </a>
                                 <a href="#" class="btn app-btn">
                                     <img src="{{asset('assets/front/images/app_store.png')}}" alt="as" class="img-fluid" />
                                 </a>
                             </div>
                         </div>
                     </div>
                   </div>
                  </div>
                </div>
           </div>  -->
              <!-- <div class="col-md-4">
                      <div class="line-card line-card-blue">
                        <div class="line-cardimg">
                          <img src="assets/images/district-v.png" alt="district" class="img-fluid" />
                        </div>
                        <div class="btn-wrap">
                          <a href="visualization-district.html" class="line-cardbtn w-100 btn-blue">District Visualization</a>
                        </div>
                      </div>
                    </div> -->
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>

@include('front.includes.footer')
<script>

function goToNationalV(){

sessionStorage.removeItem('activeState')
sessionStorage.removeItem('activeDistrict')
location.href = base_url + 'visualization/nas-2021'

}
    function stateV(id){

    let state = states.filter(function(states){
        return states.state_id==id;
    })
    console.log(state);

    }

    function districtV(id){

    let district = districts.filter(function(districts){
        return districts.district_id==id;
    })
    let state =states.filter(function(states){
        return states.state_id==district[0].state_id;
    })
    console.log(district,state);

    }

    let districts='';
    let states='';
    
    $(document).ready(()=> {

        $.ajax({
        type: "GET",
        url: api_url + 'district_masters?limit=-1',
        }).done(response => {
            districts=response.data;
        })

        $.ajax({
        type: "GET",
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
      });
      $(document).on('click','.districtopen', function(e) {
        $('.sidebaroverlay,#districtsidebar').addClass('opened');
      });
      $(document).on('click','.closesidebar', function(e) {
        $('.sidebaroverlay,.sidebarmenu').removeClass('opened');
      }); 
</script>