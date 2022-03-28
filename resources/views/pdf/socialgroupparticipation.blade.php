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

      // SC Soical Group
      if($districtParticipation->sc_social_group==0)
      {
        $scImg = 'sg-0.png';
      }
      elseif($districtParticipation->sc_social_group>=1 && $districtParticipation->sc_social_group<=25)
      {
        $scImg = 'sg-'.$scColor.'-1.png';
      }
      elseif($districtParticipation->sc_social_group>=26 && $districtParticipation->sc_social_group<=49)
      {
        $scImg = 'sg-'.$scColor.'-2.png';
      }
      elseif($districtParticipation->sc_social_group==50)
      {
        $scImg = 'sg-'.$scColor.'-3.png';
      }
      elseif($districtParticipation->sc_social_group>=51 && $districtParticipation->sc_social_group<=75) 
      {
        $scImg = 'sg-'.$scColor.'-4.png';
      }
      elseif($districtParticipation->sc_social_group>=76 && $districtParticipation->sc_social_group<=99)
      {
        $scImg = 'sg-'.$scColor.'-5.png';
      }

      elseif($districtParticipation->sc_social_group==100)
      {
         $scImg = 'sg-'.$scColor.'-6.png';
      }

      // OBC Soical Group
      if($districtParticipation->obc_social_group==0)
      {
        $obcImg = 'sg-0.png';
      }
      elseif($districtParticipation->obc_social_group>=1 && $districtParticipation->obc_social_group<=25)
      {
        $obcImg = 'sg-'.$obcColor.'-1.png';
      }
      elseif($districtParticipation->obc_social_group>=26 && $districtParticipation->obc_social_group<=49)
      {
        $obcImg = 'sg-'.$obcColor.'-2.png';
      }
      elseif($districtParticipation->obc_social_group==50)
      {
        $obcImg = 'sg-'.$obcColor.'-3.png';
      }
      elseif($districtParticipation->obc_social_group>=51 && $districtParticipation->obc_social_group<=75) 
      {
        $obcImg = 'sg-'.$obcColor.'-4.png';
      }
      elseif($districtParticipation->obc_social_group>=76 && $districtParticipation->obc_social_group<=99)
      {
        $obcImg = 'sg-'.$obcColor.'-5.png';
      }

      elseif($districtParticipation->obc_social_group==100)
      {
         $obcImg = 'sg-'.$obcColor.'-6.png';
      }

      // ST Soical Group
      if($districtParticipation->st_social_group==0)
      {
        $stImg = 'sg-0.png';
      }
      elseif($districtParticipation->st_social_group>=1 && $districtParticipation->st_social_group<=25)
      {
        $stImg = 'sg-'.$stColor.'-1.png';
      }
      elseif($districtParticipation->st_social_group>=26 && $districtParticipation->st_social_group<=49)
      {
        $stImg = 'sg-'.$stColor.'-2.png';
      }
      elseif($districtParticipation->st_social_group==50)
      {
        $stImg = 'sg-'.$stColor.'-3.png';
      }
      elseif($districtParticipation->st_social_group>=51 && $districtParticipation->st_social_group<=75) 
      {
        $stImg = 'sg-'.$stColor.'-4.png';
      }
      elseif($districtParticipation->st_social_group>=76 && $districtParticipation->st_social_group<=99)
      {
        $stImg = 'sg-'.$stColor.'-5.png';
      }

      elseif($districtParticipation->st_social_group==100)
      {
         $stImg = 'sg-'.$stColor.'-6.png';
      }      

      // General Soical Group
      if($districtParticipation->general_social_group==0)
      {
        $genImg = 'sg-0.png';
      }
      elseif($districtParticipation->general_social_group>=1 && $districtParticipation->general_social_group<=25)
      {
        $genImg = 'sg-'.$genColor.'-1.png';
      }
      elseif($districtParticipation->general_social_group>=26 && $districtParticipation->general_social_group<=49)
      {
        $genImg = 'sg-'.$genColor.'-2.png';
      }
      elseif($districtParticipation->general_social_group==50)
      {
        $genImg = 'sg-'.$genColor.'-3.png';
      }
      elseif($districtParticipation->general_social_group>=51 && $districtParticipation->general_social_group<=75) 
      {
        $genImg = 'sg-'.$genColor.'-4.png';
      }
      elseif($districtParticipation->general_social_group>=76 && $districtParticipation->general_social_group<=99)
      {
        $genImg = 'sg-'.$genColor.'-5.png';
      }

      elseif($districtParticipation->general_social_group==100)
      {
         $genImg = 'sg-'.$genColor.'-6.png';
      }    

      @endphp
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$scImg}}" alt="social_img">
      <h3 class="per-text-1 text-22 text-pink">
        {{isset($districtParticipation->sc_social_group  )?$districtParticipation->sc_social_group :'0'}}%
        <span class="title-text-1 text-20">SC</span>
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
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$obcImg}}" alt="social_img">
      <h3 class="per-text-2 text-22 text-yellow">
        {{isset($districtParticipation->obc_social_group  )?$districtParticipation->obc_social_group :'0'}}%
        <span class="title-text-2 text-20">OBC</span>
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
