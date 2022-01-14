@include('front.includes.header')
@include('front.includes.nav')


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
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                    <p class="desc-black">
                    Data Visualisation is the user-friendly presentation of summarised data in a pictorial or graphical form that enables decision-makers to promptly understand complex analytics through visual representations. The data visualisation tool facilitates the development of an interface to interact between multiple indicators and form a pattern. This also addresses the bottlenecks that could be identified and targeted for effective planning, implementation, monitoring of the progress of key input, output, and outcome level indicators. Data Visualisation is a useful tool for policymakers, senior government officials, academia and researchers and other stakeholders for its easy interactive features and actionable directions.
                    </p>
                    </div>
                <div class="col-md-4">
                    <div class="line-card line-card-pink">
                    <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/national-v.png')}}" alt="national" class="img-fluid" />
                    </div>
                    <div class="btn-wrap">
                        <a href="visualization-national.html" class="line-cardbtn w-100 btn-pink">National Visualization</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="line-card line-card-green">
                    <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/state-v.png')}}" alt="state" class="img-fluid" />
                    </div>
                    <div class="btn-wrap">
                        <a class="line-cardbtn w-100 btn-green" data-bs-toggle="modal" data-bs-target="#stateModal">State Visualization</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="line-card line-card-blue">
                    <div class="line-cardimg">
                        <img src="{{asset('assets/front/images/district-v.png')}}" alt="district" class="img-fluid" />
                    </div>
                    <div class="btn-wrap">
                        <a class="line-cardbtn w-100 btn-blue" data-bs-toggle="modal" data-bs-target="#districtModal">District Visualization</a>
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
                <li onclick="stateV({{$state->state_id}})">{{$state->state_name}}</li>
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
                <li onclick=districtV({{$district->district_id}})>{{$district->district_name}}</li>
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
</script>