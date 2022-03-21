<div class="social-right-wrap">
  <!-- images changed -->
  <div class="row">
    <div class="col-md-6 social-img-wrap">

      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$scImg}}" alt="social_img">
      <h3 class="per-text-1 text-18 text-pink">
        {{count($stateParticipationData)>0?$stateParticipationData[0]['sc_social_group'] :'0'}}%
        <span class="title-text-1 text-20">SC</span>
      </h3>
    </div>
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$stImg}}" alt="social_img">
      <h3 class="per-text-3 text-18 text-dark-green">
        {{count($stateParticipationData)>0?$stateParticipationData[0]['st_social_group'] :'0'}}%
        <span class="title-text-3 text-20">ST</span>
      </h3>
    </div>
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$obcImg}}" alt="social_img">
      <h3 class="per-text-2 text-18 text-yellow">
        {{count($stateParticipationData)>0?$stateParticipationData[0]['obc_social_group'] :'0'}}%
        <span class="title-text-2 text-20">OBC</span>
      </h3>
    </div>
    
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$genImg}}" alt="social_img">
      <h3 class="per-text-4 text-18 text-blue">
        {{count($stateParticipationData)>0?$stateParticipationData[0]['general_social_group'] :'0'}}%
        <span class="title-text-4 text-20">General</span>
      </h3>
    </div>
  </div>
</div>
