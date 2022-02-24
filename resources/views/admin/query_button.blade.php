@include('admin.includes.header')
@include('admin.includes.nav')
<style>
    .sz{
        width:32%;
        height:60px;
    }
</style>
  

<div class="main-panel">
  <div class="content-wrapper">
      <div class="container" style="margin:100px">
          
        <div class="row">
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">Upload Query</div>
          <div class="card-body">
          @if(session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="mb-3 text-center">
                  <a class="btn btn-primary Data_add sz" href="{{url('/visualization_performance_graph')}}">Visualization Performance Graph</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/visualization_participation')}}">Visualization Participation</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/visualization_performance')}}">Visualization Performance</a>
                </div>
                <div class="mb-3 text-center">
                  <a class="btn btn-primary Data_add sz" href="{{url('/learningoutcome_calculation')}}">Learning Outcome Calculation</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/genrate_key')}}">Genrate Key</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/view_parti_g3_school')}}">View Parti G3 School</a>
                </div>
                <div class="mb-3 text-center">
                  <a class="btn btn-primary Data_add sz" href="{{url('/questionnaire_calculation')}}">Questionnaire Calculation</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/performance_state_calculation')}}">Performance State Calculation</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/generateAt3SetForLanguage')}}">At3 Set For Language</a>
                </div>
                <div class="mb-3 text-center">
                  <a class="btn btn-primary Data_add sz" href="{{url('/get_feedback')}}">Feedback Pq</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/generateFeedbackanswerkey')}}">Pq Answer Key</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/pqQuestionMaster')}}">Pq Question Master</a>
                </div>
                <div class="mb-3 text-center">
                  <a class="btn btn-primary Data_add sz" href="{{url('/get_feedback_tq')}}">Feedback Tq</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/generateFeedbackanswerkeyTq')}}">Tq Answer Key</a>
                  <a class="btn btn-primary Data_add sz" href="{{url('/get_feedback_sq')}}">Feedback Sq</a>
                </div>
                <div class="mb-3 text-center">
                  <a class="btn btn-primary Data_add sz" href="{{url('/generateFeedbackanswerkeySq')}}">Sq Answer Key</a>
                  
                </div>
                
          </div>
        </div>
    </div>
    </div>
  </div>
</div>

@include('admin.includes.footer')


    
