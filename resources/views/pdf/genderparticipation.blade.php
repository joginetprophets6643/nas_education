<div class="graph-right-wrap">
  <div class="row dialog-sec px-5" style="width:100%">
    <div class="col-md-6">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/boy-dialog.jpg" alt="dialog_box">
      <h5 class="mb-15 text-white">
        <span class="">{{isset($districtParticipation->male_gender  )?$districtParticipation->male_gender :'0'}}</span>
        <span class="">%</span>
      </h5>
    </div>
    <div class="col-md-6">
      <img src="http://nas21.inroad.in/report-pdf/assets/images/girl-dialog.jpg" alt="dialog_box">
      <h5 class="mb-15 text-white">
        <span class="">{{isset($districtParticipation->female_gender  )?$districtParticipation->female_gender :'0'}}</span>
        <span class="">%</span>
      </h5>
    </div>
  </div>
  <img src="http://nas21.inroad.in/report-pdf/assets/images/c3-gender.jpg" class="gender-img" alt="gender_image">
  <div class="row px-5" style="width:100%">
    <div class="col-md-6 ps-3">
      <p class="gender-txt">Boys</p>
    </div>
    <div class="col-md-6 pe-3">
      <p class="gender-txt">Girls</p>
    </div>
  </div>
</div>