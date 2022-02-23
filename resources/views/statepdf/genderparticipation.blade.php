<div class="graph-right-wrap">
  <div class="d-flex dialog-sec justify-content-center w-100">
    <div class="mx-4">
      <img
        src="http://nas21.inroad.in/report-pdf/assets/images/boy-dialog.jpg"
        alt="dialog_box"
      />
      <h5 class="mb-15 text-white">
        <span class="">{{isset($stateParticipationData[0]->male_gender  )?$stateParticipationData[0]->male_gender :'0'}}</span>
        <span class="">%</span>
      </h5>
    </div>
    <div class="mx-4">
      <img
        src="http://nas21.inroad.in/report-pdf/assets/images/girl-dialog.jpg"
        alt="dialog_box"
      />
      <h5 class="mb-15 text-white">
        <span class="">{{isset($stateParticipationData[0]->female_gender  )?$stateParticipationData[0]->female_gender :'0'}}</span>
        <span class="">%</span>
      </h5>
    </div>
  </div>
  <img
    src="http://nas21.inroad.in/report-pdf/assets/images/c3-gender.jpg"
    class="gender-img"
    alt="gender_image"
  />
  <div class="d-flex justify-content-center w-100">
    <div class="mx-4 pe-2">
      <p class="gender-txt">Boys</p>
    </div>
    <div class="mx-4 ps-2">
      <p class="gender-txt">Girls</p>
    </div>
  </div>
</div>