<div class="graph-right-wrap">
  <div class="d-flex dialog-sec justify-content-center w-100">
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
    <div class="mx-4">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$boyDialog}}" alt="dialog_box">
      <h5 class="mb-15 text-white">
        <span class="">{{isset($districtParticipation->male_gender  )?$districtParticipation->male_gender :'0'}}</span>
        <span class="">%</span>
      </h5>
    </div>
    <div class="mx-4">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$girlDialog}}" alt="dialog_box">
      <h5 class="mb-15 text-white">
        <span class="">{{isset($districtParticipation->female_gender  )?$districtParticipation->female_gender :'0'}}</span>
        <span class="">%</span>
      </h5>
    </div>
  </div>
  <div class="gender-img">
    <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$genderImg}}" class="mb-1" alt="gender_image">
  </div>
  <div class="d-flex justify-content-center w-100">
    <div class="mx-4 pe-2">
      <p class="gender-txt">Boys</p>
    </div>
    <div class="mx-4 ps-2">
      <p class="gender-txt">Girls</p>
    </div>
  </div>
</div>