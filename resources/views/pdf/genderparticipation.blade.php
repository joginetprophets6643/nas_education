<div class="graph-right-wrap">
  <div class="row">
    @php
    if($districtParticipation->grade==3 || $districtParticipation->grade==5)
    {
      $genderImg = 'c3-gender.jpg';
      $boyDialog = 'c3-boy-dialog.jpg';
      $girlDialog = 'c3-girl-dialog.jpg';
    }
    elseif($districtParticipation->grade==8)
    {
      $genderImg = 'c8-gender.jpg';
      $boyDialog = 'c8-boy-dialog.jpg';
      $girlDialog = 'c8-girl-dialog.jpg';
      
    }
    elseif($districtParticipation->grade==10)
    {
      $genderImg = 'c10-gender.jpg';
      $boyDialog = 'c10-boy-dialog.jpg';
      $girlDialog = 'c10-girl-dialog.jpg';
    }
    @endphp
    
    <div class="col-md-4">
      <div class="gender-img-wrap mt-5">
        <span class="gender-percent male-percent">{{isset($districtParticipation->male_gender  )?round($districtParticipation->male_gender, 1) :'0'}}%</span>
        <img src="http://nas21.inroad.in/report-pdf/assets/images/male-icon.png" alt="male-icon" class="img-fluid male-img" />
        <p class="gender-txt">Boys</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="gender-img-wrap mt-5">
        <span class="gender-percent female-percent">{{isset($districtParticipation->female_gender  )?round($districtParticipation->female_gender, 1) :'0'}}%</span>
        <img src="http://nas21.inroad.in/report-pdf/assets/images/female-icon.png" alt="female-icon" class="img-fluid female-img" />
        <p class="gender-txt">Girls</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="gender-img-wrap mt-5">
        <span class="gender-percent trans-percent">{{isset($districtParticipation->trans_gender  )?round($districtParticipation->trans_gender, 1) :'0'}}%</span>
        <img src="http://nas21.inroad.in/report-pdf/assets/images/trans-icon.png" alt="trans-icon" class="img-fluid trans-img" />
        <p class="gender-txt">Transgender</p>
      </div>
    </div>
    
  </div>
</div>