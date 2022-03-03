<div class="social-right-wrap dist-social-img">
  <!-- images changed -->
  <div class="row">
    <div class="col-md-6 col-xl-6 social-img-wrap">
      @php
		if($districtParticipation->grade==3 || $districtParticipation->grade==5)
		{
			$scColor = 'pink';
			$obcColor = 'yellow';
			$stColor = 'sagegreen';
			$genColor = 'blue';
		}
		elseif($districtParticipation->grade==8)
		{
			$scColor = 'pink';
			$obcColor = 'blue';
			$stColor = 'sagegreen';
			$genColor = 'green';
		}
		elseif($districtParticipation->grade==10)
		{
			$scColor = 'pink';
			$obcColor = 'red';
			$stColor = 'purple';
			$genColor = 'green';
		}

        $scImg = getImgName($districtParticipation->sc_social_group,$scColor);
        $obcImg = getImgName($districtParticipation->obc_social_group,$obcColor);
        $stImg = getImgName($districtParticipation->st_social_group,$stColor);
        $genImg = getImgName($districtParticipation->general_social_group,$genColor);
      @endphp
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$scImg}}" alt="social_img">
      <h3 class="per-text-1 text-22 text-pink">
        {{isset($districtParticipation->sc_social_group  )?$districtParticipation->sc_social_group :'0'}}%
        <span class="title-text-1 text-20">SC</span>
      </h3>
    </div>
    <div class="col-md-6 col-xl-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$obcImg}}" alt="social_img">
      <h3 class="per-text-2 text-22 text-yellow">
        {{isset($districtParticipation->obc_social_group  )?$districtParticipation->obc_social_group :'0'}}%
        <span class="title-text-2 text-20">OBC</span>
      </h3>
    </div>
    <div class="col-md-6 col-xl-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$stImg}}" alt="social_img">
      <h3 class="per-text-3 text-22 text-dark-green">
        {{isset($districtParticipation->st_social_group  )?$districtParticipation->st_social_group :'0'}}%
        <span class="title-text-3 text-20">ST</span>
      </h3>
    </div>
    <div class="col-md-6 col-xl-6 social-img-wrap">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$genImg}}" alt="social_img">
      <h3 class="per-text-4 text-22 text-blue">
        {{isset($districtParticipation->general_social_group  )?$districtParticipation->general_social_group :'0'}}%
        <span class="title-text-4 text-20">General</span>
      </h3>
    </div>
  </div>
</div>
