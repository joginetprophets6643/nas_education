@include('front.includes.header')
@include('front.includes.nav')

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
                              <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Report Card') }}</li>
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
                    <p class="desc-black">
                        NCERT, under the aegis of MHRD, conducted the National Achievement Survey (NAS) throughout the country on November 13, 2021, for Classes 3, 5 and 8 in government and government-aided schools. The survey tools used multiple test booklets with 45 questions in Classes 3 and 5 and 60 questions in Class VIII in Mathematics, Language, Sciences and Social Sciences. The competency-based test questions reflect the learning outcomes developed by NCERT which were recently incorporated in the RTE Act by the Government of India. Along with the test items, questionnaires about students, teachers and schools were also used. The learning levels of 2.2 million students from 1,10,000 schools across 701 districts in all 36 states/UTs were assessed. The findings of the survey help guide the education policy, planning and implementation at national, state, district and classroom levels to improve the learning levels of children and bring about qualitative improvements.
                    </p>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                    <div class="line-card line-card-pink">
                        <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/national.png')}}" alt="national" class="img-fluid" />
                        </div>
                        <div class="btn-wrap">
                        <a href="report-card-national.html" class="line-cardbtn w-100 btn-pink">National Report Card</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                    <div class="line-card line-card-green">
                        <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/state.png')}}" alt="state" class="img-fluid" />
                        </div>
                        <div class="btn-wrap">
                        <a class="line-cardbtn w-100 btn-green" data-bs-toggle="modal" data-bs-target="#stateModal">State Report Card</a>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                    <div class="line-card line-card-blue">
                        <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/district.png')}}" alt="district" class="img-fluid" />
                        </div>
                        <div class="btn-wrap">
                        <a class="line-cardbtn w-100 btn-blue" data-bs-toggle="modal" data-bs-target="#districtModal">District Report Card</a>
                        </div>
                    </div>
                    </div>
                    </div>
                
                </div>
            </div>    
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="stateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body p-0">
        

      <div class="">
        <div class="card">
          <div class="card-header">Select State
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">

            <div class="mb-3">
                <ul>
                @foreach($states as $state)
                <li onclick="stateRC({{$state->state_id}})">{{$state->state_name}}</li>
                @endforeach
                </ul>
            </div>
            
          </div>
        </div>
    </div>



      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>


<div class="modal fade" id="districtModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body p-0">
        

      <div class="">
        <div class="card">
          <div class="card-header">Select District
          <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="card-body">

            <div class="mb-3">
                <ul>
                @foreach($districts as $district)
                <li onclick=districtRC({{$district->district_id}})>{{$district->district_name}}</li>
                @endforeach
                </ul>
            </div>
            
          </div>
        </div>
    </div>



      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>

@include('front.includes.footer')
<script>
    function stateRC(id){

    let state = states.filter(function(states){
        return states.state_id==id;
    }).pop()

    sessionStorage.setItem('activeState',JSON.stringify(state))
    sessionStorage.removeItem('activeDistrict')
    location.href = base_url + 'report-card/nas-2021'

    }

    function districtRC(id){

    let district = districts.filter(function(districts){
        return districts.district_id==id;
    }).pop()
    let state =states.filter(function(states){
        return states.state_id==district.state_id;
    }).pop()

    sessionStorage.setItem('activeState',JSON.stringify(state))
    sessionStorage.setItem('activeDistrict',JSON.stringify(district))
    location.href = base_url + 'report-card/nas-2021'
    // console.log(district,state);

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
</script>