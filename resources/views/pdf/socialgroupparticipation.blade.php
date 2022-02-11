<div class="social-right-wrap">
  <!-- images changed -->
  <img src="http://nas21.inroad.in/report-pdf/assets/images/c3-50-social.jpg" alt="social" class="social-group"> 
  <h3 class="text-1 heading-30 text-pink">{{isset($districtParticipation->sc_social_group  )?$districtParticipation->sc_social_group :'0'}}%</h3>
  <h3 class="text-2 heading-30 text-yellow">{{isset($districtParticipation->obc_social_group  )?$districtParticipation->obc_social_group :'0'}}%</h3>
  <h3 class="text-3 heading-30 text-dark-green">{{isset($districtParticipation->st_social_group  )?$districtParticipation->st_social_group :'0'}}%</h3>
  <h3 class="text-4 heading-30 text-blue">{{isset($districtParticipation->general_social_group  )?$districtParticipation->general_social_group :'0'}}%</h3>
</div>