<div class="img-wrap">
  <div class="row justify-content-between mb-4 px-4" style="width:100%">
    <div class="col-md-6">
      <h3 class="text-blue">{{isset($districtParticipation->rural_location  )?$districtParticipation->rural_location :'0'}}%</h3>
    </div>
    <div class="col-md-6">
      <h3 class="text-pink">{{isset($districtParticipation->urban_location  )?$districtParticipation->urban_location :'0'}}%</h3>
    </div>
  </div>
  <!-- images changed -->
  <img src="http://nas21.inroad.in/report-pdf/assets/images/c3-30-location.jpg" alt="loction_images" class="ml-3">
  <div class="row justify-content-between mt-2 px-4">
    <div class="col-md-6">
      <h5 class="">Rural</h5>
    </div>
    <div class="col-md-6">
      <h5 class="">Urban</h5>
    </div>
  </div>
</div>