<div class="social-right-wrap">
  <!-- images changed -->
  <div class="row">
    <div class="col-md-6 social-img-wrap">
      @php
          if(isset($stateParticipationFinal))
          {
            $sc_social_group = $stateParticipationFinal->sc_social_group;
          }
          else
          {
            $sc_social_group = 0;
          }
          if(isset($stateParticipationFinal))
          {
            $obc_social_group = $stateParticipationFinal->obc_social_group;
          }
          else
          {
            $obc_social_group = 0;
          }
          if(isset($stateParticipationFinal))
          {
            $st_social_group = $stateParticipationFinal->st_social_group;
          }
          else
          {
            $st_social_group = 0;
          }
          if(isset($stateParticipationFinal))
          {
            $general_social_group = $stateParticipationFinal->general_social_group;
          }
          else
          {
            $general_social_group = 0;
          }        
          $scImg = App\Http\Controllers\PdfGenerateController::getImgName($sc_social_group,'pink');
          $obcImg = App\Http\Controllers\PdfGenerateController::getImgName($obc_social_group,'yellow');
          $stImg = App\Http\Controllers\PdfGenerateController::getImgName($st_social_group,'sagegreen');
          $genImg = App\Http\Controllers\PdfGenerateController::getImgName($general_social_group,'blue');
      @endphp
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$scImg}}" alt="social_img">
      <h3 class="per-text-1 text-18 text-pink">
        {{isset($stateParticipationFinal)>0?$stateParticipationFinal->sc_social_group :'0'}}%
        <span class="title-text-1 text-20">SC</span>
      </h3>
    </div>
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$stImg}}" alt="social_img">
      <h3 class="per-text-3 text-18 text-dark-green">
        {{isset($stateParticipationFinal)>0?$stateParticipationFinal->st_social_group :'0'}}%
        <span class="title-text-3 text-20">ST</span>
      </h3>
    </div>
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$obcImg}}" alt="social_img">
      <h3 class="per-text-2 text-18 text-yellow">
        {{isset($stateParticipationFinal)>0?$stateParticipationFinal->obc_social_group :'0'}}%
        <span class="title-text-2 text-20">OBC</span>
      </h3>
    </div>
    
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$genImg}}" alt="social_img">
      <h3 class="per-text-4 text-18 text-blue">
        {{isset($stateParticipationFinal)>0?$stateParticipationFinal->general_social_group :'0'}}%
        <span class="title-text-4 text-20">General</span>
      </h3>
    </div>
  </div>
</div>
