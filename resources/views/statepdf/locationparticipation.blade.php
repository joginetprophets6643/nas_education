<div class="img-wrap">
  <div class="row justify-content-between mb-4 px-4">
    <div class="col-md-6">
      <h3 class="text-blue">{{isset($stateParticipationData[0]->rural_location  )?$stateParticipationData[0]->rural_location :'0'}}%</h3>
    </div>
    <div class="col-md-6">
      <h3 class="text-pink">{{isset($stateParticipationData[0]->urban_location  )?$stateParticipationData[0]->urban_location :'0'}}%</h3>
    </div>
  </div>
  @php
    if($stateParticipationData[0]->urban_location>$stateParticipationData[0]->rural_location)
    {
      $locationImg = 'c3-30-location.jpg';
    }
    elseif($stateParticipationData[0]->urban_location==$stateParticipationData[0]->rural_location)
    {
      $locationImg = 'c3-50-location.jpg';
    }
    else
    {
      $locationImg = 'c3-70-location.jpg';
    }
  @endphp

  <!-- images changed -->
  <img
    src="http://nas21.inroad.in/report-pdf/assets/images/{{$locationImg}}"
    alt="loction_images"
    class="ml-3"
  />
  <div class="row justify-content-between mt-2 px-4">
    <div class="col-md-6">
      <h5 class="">Rural</h5>
    </div>
    <div class="col-md-6">
      <h5 class="">Urban</h5>
    </div>
  </div>
</div>