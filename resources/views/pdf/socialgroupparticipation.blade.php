<div class="social-right-wrap dist-social-img">
  <!-- images changed -->
  <div class="row">
    <div class="col-md-6 col-xl-6 social-img-wrap">
      @php
          if(isset($districtParticipation))
          {
            $sc_social_group = $districtParticipation->sc_social_group;
          }
          else
          {
            $sc_social_group = 0;
          }
          if(isset($districtParticipation))
          {
            $obc_social_group = $districtParticipation->obc_social_group;
          }
          else
          {
            $obc_social_group = 0;
          }
          if(isset($districtParticipation))
          {
            $st_social_group = $districtParticipation->st_social_group;
          }
          else
          {
            $st_social_group = 0;
          }
          if(isset($districtParticipation))
          {
            $general_social_group = $districtParticipation->general_social_group;
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
      <h3 class="per-text-1 text-22 fw-bolder">
        {{isset($districtParticipation->sc_social_group  )?round($districtParticipation->sc_social_group, 1) :'0'}}%
        <span class="title-text-1 text-25">SC</span>
      </h3>
    </div>
    <div class="col-md-6 col-xl-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$stImg}}" alt="social_img">
      <h3 class="per-text-3 text-22 fw-bolder">
        {{isset($districtParticipation->st_social_group  )?round($districtParticipation->st_social_group, 1) :'0'}}%
        <span class="title-text-3 text-25">ST</span>
      </h3>
    </div>
    <div class="col-md-6 col-xl-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$obcImg}}" alt="social_img">
      <h3 class="per-text-2 text-22 fw-bolder">
        {{isset($districtParticipation->obc_social_group  )?round($districtParticipation->obc_social_group, 1) :'0'}}%
        <span class="title-text-2 text-25">OBC</span>
      </h3>
    </div>
    
    <div class="col-md-6 col-xl-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$genImg}}" alt="social_img">
      <h3 class="per-text-4 text-22 fw-bolder">
        {{isset($districtParticipation->general_social_group  )?round($districtParticipation->general_social_group, 1) :'0'}}%
        <span class="title-text-4 text-25">General</span>
      </h3>
    </div>
  </div>
</div>
