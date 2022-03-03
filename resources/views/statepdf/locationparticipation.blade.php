<div class="img-wrap mt-4">
  <div class="d-flex justify-content-center mb-4 w-100">
    <div class="me-5 pe-3">
      <h3 class="text-blue">{{count($stateParticipationData)>0?$stateParticipationData[0]['rural_location'] :'0'}}%</h3>
    </div>
    <div class="ms-4 ps-3">
      <h3 class="text-pink">{{count($stateParticipationData)>0?$stateParticipationData[0]['urban_location'] :'0'}}%</h3>
    </div>
  </div>
  @php
    if(count($stateParticipationData)>0 && ($stateParticipationData[0]['urban_location']>$stateParticipationData[0]['rural_location']))
    {
      $locationImg = 'c3-30-location.jpg';
    }
    elseif(count($stateParticipationData)>0 && ($stateParticipationData[0]['urban_location']==$stateParticipationData[0]['rural_location']))
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
    class=""
    width="210"
  />
  <div class="d-flex justify-content-center mt-5">
    <div class="me-5">
      <h6 class="">Rural</h6>
    </div>
    <div class="ms-5">
      <h6 class="">Urban</h6>
    </div>
  </div>
</div>