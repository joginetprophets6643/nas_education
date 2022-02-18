<div class="social-right-wrap">
  <!-- images changed -->
  <div class="row">
    <div class="col-md-6 social-img-wrap">
      @php
        function getImgName($value,$color)
        {
          if($value==0)
          {
            return $scImg = 'sg-0.png';
          }
          elseif($value>=1 && $value<=25)
          {
            return $scImg = 'sg-'.$color.'-1.png';
          }
          elseif($value>=26 && $value<=49)
          {
            return $scImg = 'sg-'.$color.'-2.png';
          }
          elseif($value==50)
          {
            return $scImg = 'sg-'.$color.'-3.png';
          }
          elseif($value>=51 && $value<=75) 
          {
            return $scImg = 'sg-'.$color.'-4.png';
          }
          elseif($value>=76 && $value<=99)
          {
            return $scImg = 'sg-'.$color.'-5.png';
          }

          elseif($value==100)
          {
             return $scImg = 'sg-'.$color.'-6.png';
          }
        }
        $scImg = getImgName($stateParticipationData[0]->sc_social_group,'pink');
        $obcImg = getImgName($stateParticipationData[0]->obc_social_group,'yellow');
        $stImg = getImgName($stateParticipationData[0]->st_social_group,'sagegreen');
        $genImg = getImgName($stateParticipationData[0]->general_social_group,'blue');
      @endphp
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$scImg}}" alt="social_img">
      <h3 class="per-text-1 text-18 text-pink">
        {{isset($stateParticipationData[0]->sc_social_group  )?$stateParticipationData[0]->sc_social_group :'0'}}%
        <span class="title-text-1 text-20">SC</span>
      </h3>
    </div>
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$obcImg}}" alt="social_img">
      <h3 class="per-text-2 text-18 text-yellow">
        {{isset($stateParticipationData[0]->obc_social_group  )?$stateParticipationData[0]->obc_social_group :'0'}}%
        <span class="title-text-2 text-20">OBC</span>
      </h3>
    </div>
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$stImg}}" alt="social_img">
      <h3 class="per-text-3 text-18 text-dark-green">
        {{isset($stateParticipationData[0]->st_social_group  )?$stateParticipationData[0]->st_social_group :'0'}}%
        <span class="title-text-3 text-20">ST</span>
      </h3>
    </div>
    <div class="col-md-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$genImg}}" alt="social_img">
      <h3 class="per-text-4 text-18 text-blue">
        {{isset($stateParticipationData[0]->general_social_group  )?$stateParticipationData[0]->general_social_group :'0'}}%
        <span class="title-text-4 text-20">General</span>
      </h3>
    </div>
  </div>
</div>
