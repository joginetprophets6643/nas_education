<div class="img-wrap">
  <div class="d-flex justify-content-center mb-4" style="width:100%">
    <div class="me-5 pe-4">
      <h3 class="fw-bolder">{{isset($districtParticipation->rural_location  )?round($districtParticipation->rural_location) :'0'}}%</h3>
    </div>
    <div class="ms-4 ps-4">
      <h3 class="fw-bolder">{{isset($districtParticipation->urban_location  )?round($districtParticipation->urban_location) :'0'}}%</h3>
    </div>
  </div>
  @php
  if($districtParticipation->grade==3 || $districtParticipation->grade==5)
  {
    if($districtParticipation->urban_location>$districtParticipation->rural_location)
    {
      $locationImg = 'c3-30-location.jpg';
    }
    elseif($districtParticipation->urban_location==$districtParticipation->rural_location)
    {
      $locationImg = 'c3-50-location.jpg';
    }
    else
    {
      $locationImg = 'c3-70-location.jpg';
    }
  }
  elseif($districtParticipation->grade==8)
  {
    if($districtParticipation->urban_location>$districtParticipation->rural_location)
    {
      $locationImg = 'c3-30-location.jpg';
    }
    elseif($districtParticipation->urban_location==$districtParticipation->rural_location)
    {
      $locationImg = 'c3-50-location.jpg';
    }
    else
    {
      $locationImg = 'c3-70-location.jpg';
    }
  }
  elseif($districtParticipation->grade==10)
  {
    if($districtParticipation->urban_location>$districtParticipation->rural_location)
    {
      $locationImg = 'c3-30-location.jpg';
    }
    elseif($districtParticipation->urban_location==$districtParticipation->rural_location)
    {
      $locationImg = 'c3-50-location.jpg';
    }
    else
    {
      $locationImg = 'c3-70-location.jpg';
    }
  }
  @endphp

  <!-- images changed -->
  <img src="http://nas21.inroad.in/report-pdf/assets/images/{{$locationImg}}" alt="loction_images" class="ml-3">
  <div class="d-flex justify-content-center mt-4">
    <div class="me-5 pe-3">
      <h5 class="text-25">Rural</h5>
    </div>
    <div class="ms-5 ps-3">
      <h5 class="text-25">Urban</h5>
    </div>
  </div>
</div>