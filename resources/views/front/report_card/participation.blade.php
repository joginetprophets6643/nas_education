@section('participation')

                                  <div class="tab-pane fade" id="participation_class3" role="tabpanel" aria-labelledby="participation-3-tab">
                                    <div class="card-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              TOTAL PARTICIPATION OF CLASS <span id="current_class"></span>
                                            </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-content card-blue">
                                                <div class="card-icon">
                                                  <img src="{{asset('assets/front/images/school-icon.svg')}}" alt="img" class="img-fluid" />
                                                </div>
                                                <div class="card-desc">
                                                    <span class="total-no" id="participation_school_class3">0</span>
                                                    <p class="title">Schools</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-pink">
                                            <div class="card-icon">
                                              <img src="{{asset('assets/front/images/teacher-icon.svg')}}" alt="img" class="img-fluid" />
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no" id="participation_teachers_class3">0</span>
                                                <p class="title" >Teachers</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-yellow">
                                            <div class="card-icon">
                                              <img src="{{asset('assets/front/images/student-icon.svg')}}" alt="img" class="img-fluid" />
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no" id="participation_students_class3">0</span>
                                                <p class="title">Students</p>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- <div class="lds-roller" style="display:none" id="section_loader"></div> -->
                                      </div>
                                    </div>
                                    <div class="categorypart-card-wrap">
                                      <hr>
                                      <div class="row justify-content-center">
                                          <div class="col-md-6" id="gender_section_participation_class3" style="display:none;">
                                            <div class="part-wrap ptb-30" id="gender_participation">
                                              <h2 class="heading-grey text-center">
                                                PARTICIPATION BY GENDER
                                              </h2>
                                              <div class="d-flex justify-content-evenly align-items-end">
                                                  <div class="category-wrap">
                                                    <div class="card-round card-blue">
                                                      <span class="percentage" id="paricipation_gender_male_class3">0%</span>
                                                      <small class="title">Boys</small>
                                                    </div>
                                                    <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M955,10H675c-19.3,0-35,15.7-35,35s15.7,35,35,35h197.7L642.5,310.2C575.5,254,489.3,220,395,220C182.3,220,10,392.3,10,605c0,212.6,172.3,385,385,385c212.6,0,385-172.4,385-385c0-93.2-33.1-178.6-88.2-245.1L920,131.7V325c0,19.3,15.7,35,35,35s35-15.7,35-35V45C990,25.7,974.3,10,955,10z M395,920C221.3,920,80,778.7,80,605s141.3-315,315-315c173.7,0,315,141.3,315,315S568.7,920,395,920z" fill="#75a9d9" /></g>
                                                      </svg>
                                                    </div>
                                                    
                                                  </div>
                                                  <div class="category-wrap">
                                                    <div class="card-round card-pink">
                                                      <span class="percentage" id="paricipation_gender_female_class3">0%</span>
                                                      <small class="title">Girls</small>
                                                    </div>
                                                    <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M462.6,858.6H330.4v-74.9h132.1V667c-82.2-8.8-151.5-44.4-207.8-106.8c-56.3-62.4-84.4-136-84.4-220.6c0-90.5,32.1-168.1,96.5-232.7C331.2,42.3,409,10,500,10c90.5,0,168.1,32.3,232.7,96.9c64.6,64.6,96.9,142.2,96.9,232.7c0,84.7-28.3,158.2-84.8,220.6c-56.5,62.4-125.6,98-207.3,106.8v116.7h132.1v74.9H537.4V990h-74.9V858.6L462.6,858.6z M500,85.6c-70,0-129.9,24.9-179.5,74.9C270.8,210.4,246,270.1,246,339.6c0,70.5,24.8,130.4,74.5,179.9c49.7,49.4,109.5,74.1,179.5,74.1c70,0,129.8-24.7,179.4-74.1C729.1,470,754,410.1,754,339.6c0-69.5-24.9-129.2-74.5-179.1C629.8,110.6,570,85.6,500,85.6z" fill="#e9769f"/></g>
                                                      </svg>
                                                    </div>
                                                    
                                                  </div>
                                                  <div class="category-wrap">
                                                    <div class="card-round card-blue-gradient">
                                                      <span class="percentage" id="paricipation_gender_trans_class3">0%</span>
                                                      <small class="title">Transgender</small>
                                                    </div>
                                                    <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <linearGradient id="grad-blue" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" style="stop-color:rgb(117 169 217);stop-opacity:1" />
                                                        <stop offset="100%" style="stop-color:rgb(233 118 159);stop-opacity:1" />
                                                      </linearGradient>
                                                      <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M1972.3,4960.8c-786.3-58.8-881.9-73.5-951.7-139.6c-69.8-69.8-80.8-169-143.3-970.1c-69.8-962.7-62.5-1050.9,102.9-1128c132.3-58.8,183.7-51.4,294,47.8c99.2,84.5,102.9,102.9,139.6,643l40.4,554.8l385.8-385.8l382.1-385.8l-374.8-378.5c-316-323.4-374.8-400.5-374.8-499.7c0-154.3,113.9-260.9,279.2-260.9c121.3,0,172.7,36.7,507.1,367.4l374.8,367.4l136-139.6l139.6-139.6l-73.5-91.9c-136-172.7-330.7-569.5-415.2-841.4c-66.1-224.2-84.5-360.1-80.8-734.9c0-525.4,55.1-779,264.6-1201.6c382.2-779,1058.2-1271.3,2002.6-1462.4l99.2-18.4v-661.4v-661.4h-525.4c-569.5,0-657.7-25.8-701.8-202.1c-25.7-106.6,55.1-290.3,143.3-327c33-11.1,290.3-22,573.2-22h510.8v-437.3c0-407.9,7.4-448.3,84.5-540.1c110.2-128.6,290.3-136,404.2-18.4c73.5,69.8,80.8,124.9,91.9,536.5l14.7,459.3h507.1c279.2,0,536.4,11,569.5,22c88.2,36.8,169,220.5,143.3,327c-44.1,176.3-132.3,202.1-701.8,202.1H5294v661.4v661.4l102.9,18.4c547.5,113.9,944.3,290.3,1308.1,591.6c1039.9,859.8,1278.7,2414.1,536.5,3523.8l-147,220.5l727.5,727.5l723.9,723.9l36.7-554.8c36.7-540.1,44.1-558.5,139.6-643c113.9-99.2,165.3-106.6,297.6-47.8c165.4,77.2,172.7,165.4,102.9,1128c-58.8,801-73.5,900.2-143.3,966.4c-66.1,66.1-158,80.8-779,124.9c-1109.6,80.8-1168.5,80.8-1253,0c-128.6-132.3-132.3-260.9-11-382.1c102.9-102.9,124.9-106.6,547.5-128.6c745.9-40.4,753.3,33.1-73.5-790l-712.8-712.8l-238.8,150.6c-323.4,205.8-646.7,330.7-1014.2,393.2c-385.8,69.8-503.4,69.8-900.2,0c-385.8-66.1-690.8-187.4-1006.8-393.2l-231.5-150.6l-135.9,132.3l-132.3,132.3l374.8,385.8c418.9,429.9,459.3,529.1,282.9,701.8c-161.7,165.3-246.2,128.6-676.1-294l-393.2-385.8l-378.5,382.1c-440.9,444.6-466.7,404.2,264.6,448.3c378.5,22.1,448.3,36.7,532.8,106.6c165.3,143.3,95.5,418.9-121.3,470.3C2883.5,5015.9,2457.3,4993.9,1972.3,4960.8z M5529.1,2884.8c687.1-180,1245.7-705.5,1477.1-1396.3c128.6-382.1,136-900.2,18.4-1267.7c-235.1-734.9-841.4-1282.4-1609.4-1455.1C4386.4-1462.1,3306.1-819.1,2975.4,220.8c-117.6,367.4-110.2,885.5,18.4,1267.7c231.5,679.8,753.3,1186.8,1436.7,1381.6C4713.4,2950.9,5246.2,2958.3,5529.1,2884.8z" fill="url(#grad-blue)" /></g></g>
                                                      </svg>
                                                    </div>
                                                    
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-6" id="location_section_participation_class3" style="display:none;">
                                            <div class="part-wrap ptb-30" id="location_participation">
                                              <h2 class="heading-grey text-center">
                                                PARTICIPATION BY LOCATION
                                              </h2>
                                              <div class="d-flex justify-content-evenly align-items-end">
                                                <div class="category-wrap">
                                                  <div class="card-round card-blue">
                                                    <span class="percentage" id="participation_rural_class3">0%</span>
                                                    <small class="title">Rural</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <img src="{{asset('assets/front/images/rural-icon.svg')}}" alt="img" class="img-fluid" />
                                                  </div>
                                                  
                                                </div>
                                                <div class="category-wrap">
                                                  <div class="card-round card-pink">
                                                    <span class="percentage" id="participation_urban_class3">0%</span>
                                                    <small class="title">Urban</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <img src="{{asset('assets/front/images/urban-icon.svg')}}" alt="img" class="img-fluid" />
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        
                                      </div>
                                      <hr>
                                      <div class="row justify-content-center">
                                          <div class="col-md-6" id="management_section_participation_class3" style="display:none;">
                                            <div class="part-wrap ptb-30" id="management_participation">
                                              <h2 class="heading-grey text-center">
                                                PARTICIPATION BY MANAGEMENT
                                              </h2>
                                              <div class="graph-wrap">
                                                <figure class="highcharts-figure">
                                                  <div id="managementPieGraph_class3"></div>
                                                </figure>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="col-md-6" id="social_section_participation_class3" style="display:none;">
                                            <div class="part-wrap ptb-30" id="social_participation">
                                              <h2 class="heading-grey text-center">
                                                PARTICIPATION BY SOCIAL GROUP
                                              </h2>
                                              <div class="graph-wrap">
                                                <figure class="highcharts-figure">
                                                  <div id="socialBarGraph_class3"></div>
                                                </figure>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <hr>
                                    </div>
                                  </div>

                                  <div class="tab-pane fade" id="participation_class5" role="tabpanel" aria-labelledby="participation-5-tab">
                                    <div class="totalpart-card-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              TOTAL PARTICIPATION OF CLASS 5
                                            </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-content card-blue">
                                                <div class="card-icon">
                                                  <svg id="Group_1556" data-name="Group 1556" xmlns="http://www.w3.org/2000/svg" width="81.815" height="72.217" viewBox="0 0 81.815 72.217">
                                                    <path id="Path_31" data-name="Path 31" d="M50.309-437.694v5.827l-4.789,4.79-4.789,4.789v5.088H15.189v38.313H12.594v2.595H40.731v2.2H10v2.793H91.815V-374.1H61.084v-2.2H89.22v-2.595H86.625V-417.2H61.084v-5.088l-4.789-4.79-4.789-4.789v-5.487l2.833-1.417,2.853-1.437L53.9-441.865c-1.816-.9-3.353-1.656-3.432-1.656A50.338,50.338,0,0,0,50.309-437.694ZM53.4-421.61a5.153,5.153,0,0,1,2.494,5.328,4.855,4.855,0,0,1-4.989,4.071,4.581,4.581,0,0,1-3.572-1.417,5.127,5.127,0,0,1,2.434-8.581A5.54,5.54,0,0,1,53.4-421.61ZM25.365-404.529v5.088H20.177v-4.949a47.9,47.9,0,0,1,.139-5.088,12.985,12.985,0,0,1,2.594-.139h2.454v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.742.04.04,5.048H76.45v-10.2l2.554.06,2.535.06ZM49.91-389.064v7.583H45.7l.06-5.747c.06-6.206.04-6.106,1.3-7.782a5.922,5.922,0,0,1,2.614-1.636C49.85-396.647,49.91-395.011,49.91-389.064Zm3.591-6.924a5.271,5.271,0,0,1,2.474,3.652c.06.518.119,3.172.119,5.886v4.969H51.9v-7.583c0-6.066.06-7.583.26-7.583A5.715,5.715,0,0,1,53.5-395.989Zm-28.136,6.825v5.088H20.177v-10.177h5.188v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.782,0v5.088H76.45v-10.177h5.188Z" transform="translate(-10 443.521)" fill="#4f83b2"/>
                                                    <path id="Path_32" data-name="Path 32" d="M459.893-170.95a1.964,1.964,0,0,0-.319,1.3v.978H458.6c-1.058,0-1.616.339-1.616.978,0,.738.639,1.018,2.354,1.018,2.116,0,2.235-.119,2.235-2.295,0-1.756-.24-2.295-1-2.295A1.08,1.08,0,0,0,459.893-170.95Z" transform="translate(-419.664 193.999)" fill="#4f83b2"/>
                                                  </svg>

                                                </div>
                                                <div class="card-desc">
                                                    <span class="total-no count" id="participation_school_class5">0</span>
                                                    <p class="title">Schools</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-pink">
                                            <div class="card-icon">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="71.689" height="53.928" viewBox="0 0 71.689 53.928">
                                                <g id="fc32e74db624eb16eecc4e3b0a763aea" transform="translate(-10 -131.4)">
                                                  <path id="Path_38" data-name="Path 38" d="M395.5,131.4v24.221l2.765-1.156.015-20.292h37.93v25.011H416.831l-7.286,2.772h29.444V131.4Z" transform="translate(-357.3 0)" fill="#be4e76"/>
                                                  <path id="Path_39" data-name="Path 39" d="M471.545,242.14a14.311,14.311,0,0,1,.41,1.712c.3,1.536.614,3.124,1.778,3.877a2.423,2.423,0,0,0,1.917.307c2.056-.475,2.685-2.97,3.292-5.391a12,12,0,0,1,1.039-3.087c.461.285,1.229,2.319,1.492,3.014.761,2.012,1.544,4.1,3.168,4.616a2.481,2.481,0,0,0,2.165,0c1.288-.644,1.661-2.253,2.019-3.8.051-.219.117-.5.19-.783.029.132.051.256.073.373.329,1.77.819,4.448,3.431,5.208a5.682,5.682,0,0,0,2.575.088c.315-.044.636-.088.666-.088a2.855,2.855,0,0,1,.819.468,3.812,3.812,0,0,0,2.3.863,3.914,3.914,0,0,0,.4-.022l-.322-2.875c-.161.022-.241,0-.717-.337a5.558,5.558,0,0,0-1.763-.892,5.123,5.123,0,0,0-1.778.029,3.1,3.1,0,0,1-1.346.007c-.856-.249-1.119-1.339-1.419-2.963-.271-1.47-.68-3.694-2.816-3.738-2.114-.051-2.692,2.3-3.087,4.016a13.622,13.622,0,0,1-.461,1.675,10.7,10.7,0,0,1-1.375-2.868c-.849-2.246-1.807-4.791-4.133-4.916-2.524-.139-3.255,2.758-3.9,5.3a17.082,17.082,0,0,1-.951,3.036,15.81,15.81,0,0,1-.4-1.69c-.344-1.763-.819-4.184-3.014-4.184-2.641,0-4.1,3.555-5.384,6.693-.263.636-.5,1.214-.71,1.668l2.6,1.236c.234-.49.49-1.127.783-1.814C469.54,245.739,470.733,242.828,471.545,242.14Z" transform="translate(-422.364 -97.536)" fill="#be4e76"/>
                                                  <path id="Path_40" data-name="Path 40" d="M50,167.2a11.8,11.8,0,1,0,11.8-11.8A11.8,11.8,0,0,0,50,167.2Z" transform="translate(-37.074 -22.244)" fill="#be4e76"/>
                                                  <path id="Path_41" data-name="Path 41" d="M55.837,415.2l-19.246,6.372H29.02l-4.5,5.216-4.353-5.216-9.51,1.441L10,444.549h4.053l.19,3.819h21.28l1.061-20.673,21.075-6.979Z" transform="translate(0 -263.039)" fill="#be4e76"/>
                                                </g>
                                              </svg>
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_teachers_class5">0</span>
                                                <p class="title">Teachers</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-yellow">
                                            <div class="card-icon">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="87.571" height="75" viewBox="0 0 87.571 75">
                                                <g id="_2c122acb93a7d68f5c536e26787d82a0" data-name="2c122acb93a7d68f5c536e26787d82a0" transform="translate(-10 -80.335)">
                                                  <g id="Group_1557" data-name="Group 1557" transform="translate(10 80.335)">
                                                    <path id="Path_33" data-name="Path 33" d="M632.572-430.463a6.962,6.962,0,0,0-4.972,6.431,6.7,6.7,0,0,0,6.5,6.5,6.09,6.09,0,0,0,4.813-1.938,5.884,5.884,0,0,0,1.87-5.108,5.865,5.865,0,0,0-1.938-4.173A6.741,6.741,0,0,0,632.572-430.463Z" transform="translate(-572.412 430.665)" fill="#9a975e"/>
                                                    <path id="Path_34" data-name="Path 34" d="M206.948-424.949a5.069,5.069,0,0,0-3.923,2.189,9.578,9.578,0,0,0-2.759,5.837,29.391,29.391,0,0,1-.661,3.581c-.548,1.938-.594,3.078-.16,3.854l.3.547.889-.8a7.034,7.034,0,0,1,3.193-2.007,3.569,3.569,0,0,1,1.55.776c2.029,1.55,3.238,1.55,5.45,0a4.152,4.152,0,0,1,1.483-.776,8.027,8.027,0,0,1,3.078,2.029c.707.685.889.752,1.072.479.547-.843.525-1.961-.091-4.309a22.286,22.286,0,0,1-.593-3.284,5.125,5.125,0,0,0-.365-1.71,35.027,35.027,0,0,0-3.375-5.245C211.053-424.9,209.456-425.268,206.948-424.949Zm.639,6.431a9.761,9.761,0,0,0,4.264,1.072,5.467,5.467,0,0,1,.958.045c0,.046-.16.616-.319,1.277a8.071,8.071,0,0,1-2.3,3.877,2.851,2.851,0,0,1-2.759.867c-1.574-.319-3.672-3.169-3.809-5.245-.046-.8,0-.867.844-1.164a4.388,4.388,0,0,0,1.459-.889C206.514-419.271,206.583-419.271,207.586-418.518Z" transform="translate(-182.25 425.561)" fill="#9a975e"/>
                                                    <path id="Path_35" data-name="Path 35" d="M560.921-264.476c-6,1.368-10.012,7.252-10.491,15.439l-.16,2.486h2.987c2.646,0,2.987-.045,3.078-.41.068-.206.3-1.779.5-3.49.41-3.284.57-3.785,1.025-3.512.228.137.274,1,.16,3.809l-.137,3.6h11.836v-.524c0-.273-.115-1.779-.229-3.306a10.055,10.055,0,0,1,.023-3.261c.57-1.095.867-.251,1.459,4.127.206,1.551.388,2.874.434,2.9.045.045,1.368.137,2.987.228l2.919.137-.114-3.17a15.52,15.52,0,0,0-.707-4.994A14.687,14.687,0,0,0,567.281-264,12.5,12.5,0,0,0,560.921-264.476Z" transform="translate(-501.993 279.524)" fill="#9a975e"/>
                                                    <path id="Path_36" data-name="Path 36" d="M157.372-260.467a22.192,22.192,0,0,0-4.151,4.242c-1.459,2.189-2.508,5.406-4.036,12.178-.091.365.16.41,2.6.41,2.007,0,2.783-.091,3.011-.319a11.933,11.933,0,0,0,.73-3.466c.433-3.261.661-4.082,1.095-3.831.182.114.205,1.277.114,3.763l-.114,3.626,2.645.023c3.421.045,9.031-.046,9.122-.137a31.087,31.087,0,0,0-.16-3.307,26.365,26.365,0,0,1-.091-3.558.5.5,0,0,1,.844-.137c.046.091.342,1.8.616,3.763l.5,3.581h5.816l-.319-1.437c-1.231-5.4-3.421-10.536-5.656-13.25a12.358,12.358,0,0,0-2.029-1.824l-1.231-.844-1.186.8c-1.6,1.094-2.805,1.391-3.991,1.049a7.327,7.327,0,0,1-2.759-1.6C158.535-261.082,158.124-261.013,157.372-260.467Z" transform="translate(-136.733 276.152)" fill="#9a975e"/>
                                                    <path id="Path_37" data-name="Path 37" d="M26.305-49.884l-5.473.137-.069,1.984c-.069,1.847-.091,1.984-.57,2.053a.51.51,0,0,0-.5.525c0,.639.752.685,6.408.228l4.789-.365,1.368.525,1.346.525-11.788.068L10-44.16v2.942l.98.137a10.631,10.631,0,0,0,1.642.069l.684-.069.069,16.009.046,16.032h3.192V-40.968l.525-.114c.273-.046,1.893-.068,3.581-.046l3.078.046.069.844.069.867H19.578v22.122h2.965l.046-9.533.069-9.51h4.561l.114,7.982c.114,7.914.114,7.982.639,8.734a3.3,3.3,0,0,0,2.942,1.414,3.434,3.434,0,0,0,3.033-1.642c.433-.707.456-1.163.456-8.552v-7.8l.776-.137a4.3,4.3,0,0,1,1.3-.068l.548.068.114,7.982c.114,7.206.16,8.073.525,8.62a3.609,3.609,0,0,0,6.112-.3c.388-.73.433-1.437.433-8.6v-7.823h3.875V-17.48H51.05V-39.6H46.694l.069-.73.069-.752,7.138-.046,7.116-.022v1.778H56.069V-17.25h3.193v-9.578c0-10.81-.228-9.715,1.893-9.442l1.049.16.068,6.865.069,6.865.616,1.026a4.314,4.314,0,0,0,7.48-.046c.57-.98.57-1,.638-7.822.046-4.971.137-6.887.342-7a4.467,4.467,0,0,1,1.459-.182h1.186l.069,7c.069,7,.069,7.024.638,8a4.328,4.328,0,0,0,7.526,0c.57-.98.57-1,.638-8l.069-7h1.574v18.928h3.192l-.046-11.014-.07-10.992-1.756-.069-1.779-.069v-.661c0-.639.046-.661,1.437-.776a31.726,31.726,0,0,1,3.4-.069l2.007.046V-9.27h.752a14.241,14.241,0,0,1,1.6.137l.844.16V-24.96c0-14.345.046-15.964.365-16.1a8.287,8.287,0,0,1,1.71-.137h1.347v-2.965l-11.79-.046-11.813-.068,1.368-.525,1.368-.548L82-44.869a52.121,52.121,0,0,0,5.633.342.592.592,0,0,0-.091-1.117c-.41-.137-.456-.342-.456-1.779a6.367,6.367,0,0,0-.206-1.961c-.16-.251-1.734-.342-8.027-.433-8.438-.137-21.642-.069-21.916.114a5.845,5.845,0,0,0-.182,2.029c0,1.734-.046,1.916-.433,1.916-.5,0-.821.661-.5.98.159.16,1.71.137,4.743-.091,6.02-.433,7.047-.41,8.165.206l.912.479H53.786c-13.934,0-15.781-.022-15.279-.319,1.368-.8,2.12-.821,7.5-.342a54.979,54.979,0,0,0,5.61.319c.5-.206.342-.844-.3-1.117-.456-.206-.5-.365-.5-2.075v-1.846l-3.968-.16c-2.189-.091-5.747-.16-7.936-.16-2.166,0-4.652-.023-5.542-.046C32.509-49.976,29.316-49.952,26.305-49.884Z" transform="translate(-10 83.973)" fill="#9a975e"/>
                                                  </g>
                                                </g>
                                              </svg>
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_students_class5">0</span>
                                                <p class="title">Students</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="categorypart-card-wrap">
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="gender_section_participation_class5" style="display:none;">
                                          <div class="part-wrap ptb-30" id="gender_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY GENDER
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                                <div class="category-wrap">
                                                  <div class="card-round card-blue">
                                                    <span class="percentage" id="paricipation_gender_male_class5">0%</span>
                                                    <small class="title">Boys</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M955,10H675c-19.3,0-35,15.7-35,35s15.7,35,35,35h197.7L642.5,310.2C575.5,254,489.3,220,395,220C182.3,220,10,392.3,10,605c0,212.6,172.3,385,385,385c212.6,0,385-172.4,385-385c0-93.2-33.1-178.6-88.2-245.1L920,131.7V325c0,19.3,15.7,35,35,35s35-15.7,35-35V45C990,25.7,974.3,10,955,10z M395,920C221.3,920,80,778.7,80,605s141.3-315,315-315c173.7,0,315,141.3,315,315S568.7,920,395,920z" fill="#75a9d9" /></g>
                                                      </svg>
                                                  </div>
                                                  
                                                </div>
                                                <div class="category-wrap">
                                                  <div class="card-round card-pink">
                                                    <span class="percentage" id="paricipation_gender_female_class5">0%</span>
                                                    <small class="title">Girls</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                    <g><path d="M462.6,858.6H330.4v-74.9h132.1V667c-82.2-8.8-151.5-44.4-207.8-106.8c-56.3-62.4-84.4-136-84.4-220.6c0-90.5,32.1-168.1,96.5-232.7C331.2,42.3,409,10,500,10c90.5,0,168.1,32.3,232.7,96.9c64.6,64.6,96.9,142.2,96.9,232.7c0,84.7-28.3,158.2-84.8,220.6c-56.5,62.4-125.6,98-207.3,106.8v116.7h132.1v74.9H537.4V990h-74.9V858.6L462.6,858.6z M500,85.6c-70,0-129.9,24.9-179.5,74.9C270.8,210.4,246,270.1,246,339.6c0,70.5,24.8,130.4,74.5,179.9c49.7,49.4,109.5,74.1,179.5,74.1c70,0,129.8-24.7,179.4-74.1C729.1,470,754,410.1,754,339.6c0-69.5-24.9-129.2-74.5-179.1C629.8,110.6,570,85.6,500,85.6z" fill="#e9769f"/></g>
                                                    </svg>
                                                  </div>
                                                </div>
                                                <div class="category-wrap">
                                                    <div class="card-round card-blue-gradient">
                                                      <span class="percentage" id="paricipation_gender_trans_class5">0%</span>
                                                      <small class="title">Transgender</small>
                                                    </div>
                                                    <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <linearGradient id="grad-pink" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" style="stop-color:rgb(117 169 217);stop-opacity:1" />
                                                        <stop offset="100%" style="stop-color:rgb(233 118 159);stop-opacity:1" />
                                                      </linearGradient>
                                                      <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M1972.3,4960.8c-786.3-58.8-881.9-73.5-951.7-139.6c-69.8-69.8-80.8-169-143.3-970.1c-69.8-962.7-62.5-1050.9,102.9-1128c132.3-58.8,183.7-51.4,294,47.8c99.2,84.5,102.9,102.9,139.6,643l40.4,554.8l385.8-385.8l382.1-385.8l-374.8-378.5c-316-323.4-374.8-400.5-374.8-499.7c0-154.3,113.9-260.9,279.2-260.9c121.3,0,172.7,36.7,507.1,367.4l374.8,367.4l136-139.6l139.6-139.6l-73.5-91.9c-136-172.7-330.7-569.5-415.2-841.4c-66.1-224.2-84.5-360.1-80.8-734.9c0-525.4,55.1-779,264.6-1201.6c382.2-779,1058.2-1271.3,2002.6-1462.4l99.2-18.4v-661.4v-661.4h-525.4c-569.5,0-657.7-25.8-701.8-202.1c-25.7-106.6,55.1-290.3,143.3-327c33-11.1,290.3-22,573.2-22h510.8v-437.3c0-407.9,7.4-448.3,84.5-540.1c110.2-128.6,290.3-136,404.2-18.4c73.5,69.8,80.8,124.9,91.9,536.5l14.7,459.3h507.1c279.2,0,536.4,11,569.5,22c88.2,36.8,169,220.5,143.3,327c-44.1,176.3-132.3,202.1-701.8,202.1H5294v661.4v661.4l102.9,18.4c547.5,113.9,944.3,290.3,1308.1,591.6c1039.9,859.8,1278.7,2414.1,536.5,3523.8l-147,220.5l727.5,727.5l723.9,723.9l36.7-554.8c36.7-540.1,44.1-558.5,139.6-643c113.9-99.2,165.3-106.6,297.6-47.8c165.4,77.2,172.7,165.4,102.9,1128c-58.8,801-73.5,900.2-143.3,966.4c-66.1,66.1-158,80.8-779,124.9c-1109.6,80.8-1168.5,80.8-1253,0c-128.6-132.3-132.3-260.9-11-382.1c102.9-102.9,124.9-106.6,547.5-128.6c745.9-40.4,753.3,33.1-73.5-790l-712.8-712.8l-238.8,150.6c-323.4,205.8-646.7,330.7-1014.2,393.2c-385.8,69.8-503.4,69.8-900.2,0c-385.8-66.1-690.8-187.4-1006.8-393.2l-231.5-150.6l-135.9,132.3l-132.3,132.3l374.8,385.8c418.9,429.9,459.3,529.1,282.9,701.8c-161.7,165.3-246.2,128.6-676.1-294l-393.2-385.8l-378.5,382.1c-440.9,444.6-466.7,404.2,264.6,448.3c378.5,22.1,448.3,36.7,532.8,106.6c165.3,143.3,95.5,418.9-121.3,470.3C2883.5,5015.9,2457.3,4993.9,1972.3,4960.8z M5529.1,2884.8c687.1-180,1245.7-705.5,1477.1-1396.3c128.6-382.1,136-900.2,18.4-1267.7c-235.1-734.9-841.4-1282.4-1609.4-1455.1C4386.4-1462.1,3306.1-819.1,2975.4,220.8c-117.6,367.4-110.2,885.5,18.4,1267.7c231.5,679.8,753.3,1186.8,1436.7,1381.6C4713.4,2950.9,5246.2,2958.3,5529.1,2884.8z" fill="url(#grad-pink)" /></g></g>
                                                      </svg>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="location_section_participation_class5" style="display:none;">
                                          <div class="part-wrap ptb-30" id="location_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY LOCATION
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                              <div class="category-wrap">
                                                <div class="card-round card-blue">
                                                  <span class="percentage" id="participation_rural_class5">0%</span>
                                                  <small class="title">Rural</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="102.651" viewBox="0 0 97 102.651">
                                                    <g id="d3b9d9cfc8e7f5b9a26cd45c246e7077" transform="translate(-36.992 -10.006)">
                                                      <g id="Group_2117" data-name="Group 2117" transform="translate(36.992 10.006)">
                                                        <path id="Path_6913" data-name="Path 6913" d="M97.725,410.157a3.26,3.26,0,1,0,3.938-5.2l-28.91-21.913a3.268,3.268,0,0,0-3.928-.01L38.3,405.842a3.263,3.263,0,0,0,1.959,5.876,3.227,3.227,0,0,0,1.948-.649l28.564-21.337Z" transform="translate(-36.992 -343.382)" fill="#75a9d9"/>
                                                        <path id="Path_6914" data-name="Path 6914" d="M738.014,400.364,735.794,351.5H733.28l-1.917,48.864-.063,18.016h6.8Z" transform="translate(-658.573 -315.73)" fill="#75a9d9"/>
                                                        <path id="Path_6915" data-name="Path 6915" d="M806.1,318.857l-12.894-14.4a1.9,1.9,0,0,0-2.629-.01l-1.466,1.571a1.9,1.9,0,0,0,.178,2.619l15.23,11.91c.723.681,1.236,1.152,1.917.43l.168-.178C807.269,320.072,806.819,319.527,806.1,318.857Z" transform="translate(-709.927 -273.136)" fill="#75a9d9"/>
                                                        <path id="Path_6916" data-name="Path 6916" d="M513.1,274.116l-.524-2.084a2.018,2.018,0,0,0-2.42-1.236l-18.687,6.557c-.964.241-2.095.534-1.854,1.5l.063.23c.241.964,1.4.754,2.367.513l19.535-3.237A2.036,2.036,0,0,0,513.1,274.116Z" transform="translate(-442.179 -243.426)" fill="#75a9d9"/>
                                                        <path id="Path_6917" data-name="Path 6917" d="M748.164,32.086l1.99-19.692c.178-.974.314-2.147-.66-2.325l-.23-.042c-.974-.189-1.194.974-1.372,1.948l-5.363,19.064a2.019,2.019,0,0,0,1.383,2.336l2.116.4A2.042,2.042,0,0,0,748.164,32.086Z" transform="translate(-668.598 -10.006)" fill="#75a9d9"/>
                                                        <circle id="Ellipse_39" data-name="Ellipse 39" cx="2.702" cy="2.702" r="2.702" transform="translate(73.114 25.997)" fill="#75a9d9"/>
                                                        <path id="Path_6918" data-name="Path 6918" d="M140.361,520.356h13.051V538.3h8.16V507.42L136.82,489.1,111,507.42v30.89h29.361Zm-9.794,3.268H117.526V512.207h13.051v11.417Z" transform="translate(-103.248 -438.917)" fill="#75a9d9"/>
                                                      </g>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                              <div class="category-wrap">
                                                <div class="card-round card-pink">
                                                  <span class="percentage" id="participation_urban_class5">0%</span>
                                                  <small class="title">Urban</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="84.177" height="77.168" viewBox="0 0 84.177 77.168">
                                                    <g id="c1e57e2e30878df24f323d167f002daf" transform="translate(-10 -50.8)">
                                                      <path id="Path_6912" data-name="Path 6912" d="M90.673,54.313V50.8H73.133v3.5h-3.5v35.08H62.611V71.844H48.584v3.5h-3.5v7.018H55.6v3.5H45.071v7.018H55.593v3.5H45.071v3.5H38.053V75.357H31.044V64.835L10,57.818v70.151H94.177V54.313ZM17.018,71.844h7.018v3.5H17.018Zm14.027,45.6H17.018v-3.5H31.044Zm0-10.522H17.018v-3.5H31.044Zm0-10.522H17.018V92.9H31.044Zm0-10.522H17.018v-3.5H31.044Zm24.549,31.567H45.071v-3.5H55.593Zm0-10.522H45.071v-3.5H55.593ZM87.16,117.446H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638V92.9H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Z" transform="translate(0 0)" fill="#e9769f"/>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="management_section_participation_class5" style="display:none;">
                                          <div class="part-wrap ptb-30" id="management_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY MANAGEMENT
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="managementPieGraph_class5"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="social_section_participation_class5" style="display:none;">
                                          <div class="part-wrap ptb-30" id="social_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY SOCIAL GROUP
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="socialBarGraph_class5"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                    </div>
                                  </div>

                                  <div class="tab-pane fade" id="participation_class8" role="tabpanel" aria-labelledby="participation-8-tab">
                                    <div class="totalpart-card-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              TOTAL PARTICIPATION OF CLASS 8
                                            </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-content card-green">
                                                <div class="card-icon">
                                                  <svg id="Group_1556" data-name="Group 1556" xmlns="http://www.w3.org/2000/svg" width="81.815" height="72.217" viewBox="0 0 81.815 72.217">
                                                    <path id="Path_31" data-name="Path 31" d="M50.309-437.694v5.827l-4.789,4.79-4.789,4.789v5.088H15.189v38.313H12.594v2.595H40.731v2.2H10v2.793H91.815V-374.1H61.084v-2.2H89.22v-2.595H86.625V-417.2H61.084v-5.088l-4.789-4.79-4.789-4.789v-5.487l2.833-1.417,2.853-1.437L53.9-441.865c-1.816-.9-3.353-1.656-3.432-1.656A50.338,50.338,0,0,0,50.309-437.694ZM53.4-421.61a5.153,5.153,0,0,1,2.494,5.328,4.855,4.855,0,0,1-4.989,4.071,4.581,4.581,0,0,1-3.572-1.417,5.127,5.127,0,0,1,2.434-8.581A5.54,5.54,0,0,1,53.4-421.61ZM25.365-404.529v5.088H20.177v-4.949a47.9,47.9,0,0,1,.139-5.088,12.985,12.985,0,0,1,2.594-.139h2.454v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.742.04.04,5.048H76.45v-10.2l2.554.06,2.535.06ZM49.91-389.064v7.583H45.7l.06-5.747c.06-6.206.04-6.106,1.3-7.782a5.922,5.922,0,0,1,2.614-1.636C49.85-396.647,49.91-395.011,49.91-389.064Zm3.591-6.924a5.271,5.271,0,0,1,2.474,3.652c.06.518.119,3.172.119,5.886v4.969H51.9v-7.583c0-6.066.06-7.583.26-7.583A5.715,5.715,0,0,1,53.5-395.989Zm-28.136,6.825v5.088H20.177v-10.177h5.188v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.782,0v5.088H76.45v-10.177h5.188Z" transform="translate(-10 443.521)" fill="#5C914E"/>
                                                    <path id="Path_32" data-name="Path 32" d="M459.893-170.95a1.964,1.964,0,0,0-.319,1.3v.978H458.6c-1.058,0-1.616.339-1.616.978,0,.738.639,1.018,2.354,1.018,2.116,0,2.235-.119,2.235-2.295,0-1.756-.24-2.295-1-2.295A1.08,1.08,0,0,0,459.893-170.95Z" transform="translate(-419.664 193.999)" fill="#5C914E"/>
                                                  </svg>

                                                </div>
                                                <div class="card-desc">
                                                    <span class="total-no count" id="participation_school_class8">0</span>
                                                    <p class="title">Schools</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-pink">
                                            <div class="card-icon">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="71.689" height="53.928" viewBox="0 0 71.689 53.928">
                                                <g id="fc32e74db624eb16eecc4e3b0a763aea" transform="translate(-10 -131.4)">
                                                  <path id="Path_38" data-name="Path 38" d="M395.5,131.4v24.221l2.765-1.156.015-20.292h37.93v25.011H416.831l-7.286,2.772h29.444V131.4Z" transform="translate(-357.3 0)" fill="#be4e76"/>
                                                  <path id="Path_39" data-name="Path 39" d="M471.545,242.14a14.311,14.311,0,0,1,.41,1.712c.3,1.536.614,3.124,1.778,3.877a2.423,2.423,0,0,0,1.917.307c2.056-.475,2.685-2.97,3.292-5.391a12,12,0,0,1,1.039-3.087c.461.285,1.229,2.319,1.492,3.014.761,2.012,1.544,4.1,3.168,4.616a2.481,2.481,0,0,0,2.165,0c1.288-.644,1.661-2.253,2.019-3.8.051-.219.117-.5.19-.783.029.132.051.256.073.373.329,1.77.819,4.448,3.431,5.208a5.682,5.682,0,0,0,2.575.088c.315-.044.636-.088.666-.088a2.855,2.855,0,0,1,.819.468,3.812,3.812,0,0,0,2.3.863,3.914,3.914,0,0,0,.4-.022l-.322-2.875c-.161.022-.241,0-.717-.337a5.558,5.558,0,0,0-1.763-.892,5.123,5.123,0,0,0-1.778.029,3.1,3.1,0,0,1-1.346.007c-.856-.249-1.119-1.339-1.419-2.963-.271-1.47-.68-3.694-2.816-3.738-2.114-.051-2.692,2.3-3.087,4.016a13.622,13.622,0,0,1-.461,1.675,10.7,10.7,0,0,1-1.375-2.868c-.849-2.246-1.807-4.791-4.133-4.916-2.524-.139-3.255,2.758-3.9,5.3a17.082,17.082,0,0,1-.951,3.036,15.81,15.81,0,0,1-.4-1.69c-.344-1.763-.819-4.184-3.014-4.184-2.641,0-4.1,3.555-5.384,6.693-.263.636-.5,1.214-.71,1.668l2.6,1.236c.234-.49.49-1.127.783-1.814C469.54,245.739,470.733,242.828,471.545,242.14Z" transform="translate(-422.364 -97.536)" fill="#be4e76"/>
                                                  <path id="Path_40" data-name="Path 40" d="M50,167.2a11.8,11.8,0,1,0,11.8-11.8A11.8,11.8,0,0,0,50,167.2Z" transform="translate(-37.074 -22.244)" fill="#be4e76"/>
                                                  <path id="Path_41" data-name="Path 41" d="M55.837,415.2l-19.246,6.372H29.02l-4.5,5.216-4.353-5.216-9.51,1.441L10,444.549h4.053l.19,3.819h21.28l1.061-20.673,21.075-6.979Z" transform="translate(0 -263.039)" fill="#be4e76"/>
                                                </g>
                                              </svg>
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_teachers_class8">0</span>
                                                <p class="title">Teachers</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-sagegreen">
                                            <div class="card-icon">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="87.571" height="75" viewBox="0 0 87.571 75">
                                                <g id="_2c122acb93a7d68f5c536e26787d82a0" data-name="2c122acb93a7d68f5c536e26787d82a0" transform="translate(-10 -80.335)">
                                                  <g id="Group_1557" data-name="Group 1557" transform="translate(10 80.335)">
                                                    <path id="Path_33" data-name="Path 33" d="M632.572-430.463a6.962,6.962,0,0,0-4.972,6.431,6.7,6.7,0,0,0,6.5,6.5,6.09,6.09,0,0,0,4.813-1.938,5.884,5.884,0,0,0,1.87-5.108,5.865,5.865,0,0,0-1.938-4.173A6.741,6.741,0,0,0,632.572-430.463Z" transform="translate(-572.412 430.665)" fill="#2A787A"/>
                                                    <path id="Path_34" data-name="Path 34" d="M206.948-424.949a5.069,5.069,0,0,0-3.923,2.189,9.578,9.578,0,0,0-2.759,5.837,29.391,29.391,0,0,1-.661,3.581c-.548,1.938-.594,3.078-.16,3.854l.3.547.889-.8a7.034,7.034,0,0,1,3.193-2.007,3.569,3.569,0,0,1,1.55.776c2.029,1.55,3.238,1.55,5.45,0a4.152,4.152,0,0,1,1.483-.776,8.027,8.027,0,0,1,3.078,2.029c.707.685.889.752,1.072.479.547-.843.525-1.961-.091-4.309a22.286,22.286,0,0,1-.593-3.284,5.125,5.125,0,0,0-.365-1.71,35.027,35.027,0,0,0-3.375-5.245C211.053-424.9,209.456-425.268,206.948-424.949Zm.639,6.431a9.761,9.761,0,0,0,4.264,1.072,5.467,5.467,0,0,1,.958.045c0,.046-.16.616-.319,1.277a8.071,8.071,0,0,1-2.3,3.877,2.851,2.851,0,0,1-2.759.867c-1.574-.319-3.672-3.169-3.809-5.245-.046-.8,0-.867.844-1.164a4.388,4.388,0,0,0,1.459-.889C206.514-419.271,206.583-419.271,207.586-418.518Z" transform="translate(-182.25 425.561)" fill="#2A787A"/>
                                                    <path id="Path_35" data-name="Path 35" d="M560.921-264.476c-6,1.368-10.012,7.252-10.491,15.439l-.16,2.486h2.987c2.646,0,2.987-.045,3.078-.41.068-.206.3-1.779.5-3.49.41-3.284.57-3.785,1.025-3.512.228.137.274,1,.16,3.809l-.137,3.6h11.836v-.524c0-.273-.115-1.779-.229-3.306a10.055,10.055,0,0,1,.023-3.261c.57-1.095.867-.251,1.459,4.127.206,1.551.388,2.874.434,2.9.045.045,1.368.137,2.987.228l2.919.137-.114-3.17a15.52,15.52,0,0,0-.707-4.994A14.687,14.687,0,0,0,567.281-264,12.5,12.5,0,0,0,560.921-264.476Z" transform="translate(-501.993 279.524)" fill="#2A787A"/>
                                                    <path id="Path_36" data-name="Path 36" d="M157.372-260.467a22.192,22.192,0,0,0-4.151,4.242c-1.459,2.189-2.508,5.406-4.036,12.178-.091.365.16.41,2.6.41,2.007,0,2.783-.091,3.011-.319a11.933,11.933,0,0,0,.73-3.466c.433-3.261.661-4.082,1.095-3.831.182.114.205,1.277.114,3.763l-.114,3.626,2.645.023c3.421.045,9.031-.046,9.122-.137a31.087,31.087,0,0,0-.16-3.307,26.365,26.365,0,0,1-.091-3.558.5.5,0,0,1,.844-.137c.046.091.342,1.8.616,3.763l.5,3.581h5.816l-.319-1.437c-1.231-5.4-3.421-10.536-5.656-13.25a12.358,12.358,0,0,0-2.029-1.824l-1.231-.844-1.186.8c-1.6,1.094-2.805,1.391-3.991,1.049a7.327,7.327,0,0,1-2.759-1.6C158.535-261.082,158.124-261.013,157.372-260.467Z" transform="translate(-136.733 276.152)" fill="#2A787A"/>
                                                    <path id="Path_37" data-name="Path 37" d="M26.305-49.884l-5.473.137-.069,1.984c-.069,1.847-.091,1.984-.57,2.053a.51.51,0,0,0-.5.525c0,.639.752.685,6.408.228l4.789-.365,1.368.525,1.346.525-11.788.068L10-44.16v2.942l.98.137a10.631,10.631,0,0,0,1.642.069l.684-.069.069,16.009.046,16.032h3.192V-40.968l.525-.114c.273-.046,1.893-.068,3.581-.046l3.078.046.069.844.069.867H19.578v22.122h2.965l.046-9.533.069-9.51h4.561l.114,7.982c.114,7.914.114,7.982.639,8.734a3.3,3.3,0,0,0,2.942,1.414,3.434,3.434,0,0,0,3.033-1.642c.433-.707.456-1.163.456-8.552v-7.8l.776-.137a4.3,4.3,0,0,1,1.3-.068l.548.068.114,7.982c.114,7.206.16,8.073.525,8.62a3.609,3.609,0,0,0,6.112-.3c.388-.73.433-1.437.433-8.6v-7.823h3.875V-17.48H51.05V-39.6H46.694l.069-.73.069-.752,7.138-.046,7.116-.022v1.778H56.069V-17.25h3.193v-9.578c0-10.81-.228-9.715,1.893-9.442l1.049.16.068,6.865.069,6.865.616,1.026a4.314,4.314,0,0,0,7.48-.046c.57-.98.57-1,.638-7.822.046-4.971.137-6.887.342-7a4.467,4.467,0,0,1,1.459-.182h1.186l.069,7c.069,7,.069,7.024.638,8a4.328,4.328,0,0,0,7.526,0c.57-.98.57-1,.638-8l.069-7h1.574v18.928h3.192l-.046-11.014-.07-10.992-1.756-.069-1.779-.069v-.661c0-.639.046-.661,1.437-.776a31.726,31.726,0,0,1,3.4-.069l2.007.046V-9.27h.752a14.241,14.241,0,0,1,1.6.137l.844.16V-24.96c0-14.345.046-15.964.365-16.1a8.287,8.287,0,0,1,1.71-.137h1.347v-2.965l-11.79-.046-11.813-.068,1.368-.525,1.368-.548L82-44.869a52.121,52.121,0,0,0,5.633.342.592.592,0,0,0-.091-1.117c-.41-.137-.456-.342-.456-1.779a6.367,6.367,0,0,0-.206-1.961c-.16-.251-1.734-.342-8.027-.433-8.438-.137-21.642-.069-21.916.114a5.845,5.845,0,0,0-.182,2.029c0,1.734-.046,1.916-.433,1.916-.5,0-.821.661-.5.98.159.16,1.71.137,4.743-.091,6.02-.433,7.047-.41,8.165.206l.912.479H53.786c-13.934,0-15.781-.022-15.279-.319,1.368-.8,2.12-.821,7.5-.342a54.979,54.979,0,0,0,5.61.319c.5-.206.342-.844-.3-1.117-.456-.206-.5-.365-.5-2.075v-1.846l-3.968-.16c-2.189-.091-5.747-.16-7.936-.16-2.166,0-4.652-.023-5.542-.046C32.509-49.976,29.316-49.952,26.305-49.884Z" transform="translate(-10 83.973)" fill="#2A787A"/>
                                                  </g>
                                                </g>
                                              </svg>
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_students_class8">0</span>
                                                <p class="title">Students</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="categorypart-card-wrap">
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="gender_section_participation_class8" style="display:none;">
                                          <div class="part-wrap ptb-30" id="gender_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY GENDER
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                                <div class="category-wrap">
                                                  <div class="card-round card-green">
                                                    <span class="percentage" id="paricipation_gender_male_class8">0%</span>
                                                    <small class="title">Boys</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M955,10H675c-19.3,0-35,15.7-35,35s15.7,35,35,35h197.7L642.5,310.2C575.5,254,489.3,220,395,220C182.3,220,10,392.3,10,605c0,212.6,172.3,385,385,385c212.6,0,385-172.4,385-385c0-93.2-33.1-178.6-88.2-245.1L920,131.7V325c0,19.3,15.7,35,35,35s35-15.7,35-35V45C990,25.7,974.3,10,955,10z M395,920C221.3,920,80,778.7,80,605s141.3-315,315-315c173.7,0,315,141.3,315,315S568.7,920,395,920z" fill="#72b562" /></g>
                                                      </svg>
                                                  </div>
                                                  
                                                </div>
                                                <div class="category-wrap">
                                                  <div class="card-round card-pink">
                                                    <span class="percentage" id="paricipation_gender_female_class8">0%</span>
                                                    <small class="title">Girls</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M462.6,858.6H330.4v-74.9h132.1V667c-82.2-8.8-151.5-44.4-207.8-106.8c-56.3-62.4-84.4-136-84.4-220.6c0-90.5,32.1-168.1,96.5-232.7C331.2,42.3,409,10,500,10c90.5,0,168.1,32.3,232.7,96.9c64.6,64.6,96.9,142.2,96.9,232.7c0,84.7-28.3,158.2-84.8,220.6c-56.5,62.4-125.6,98-207.3,106.8v116.7h132.1v74.9H537.4V990h-74.9V858.6L462.6,858.6z M500,85.6c-70,0-129.9,24.9-179.5,74.9C270.8,210.4,246,270.1,246,339.6c0,70.5,24.8,130.4,74.5,179.9c49.7,49.4,109.5,74.1,179.5,74.1c70,0,129.8-24.7,179.4-74.1C729.1,470,754,410.1,754,339.6c0-69.5-24.9-129.2-74.5-179.1C629.8,110.6,570,85.6,500,85.6z" fill="#e9769f"/></g>
                                                      </svg>
                                                  </div>
                                                </div>
                                                <div class="category-wrap">
                                                    <div class="card-round card-green-gradient">
                                                      <span class="percentage" id="paricipation_gender_trans_class8">0%</span>
                                                      <small class="title">Transgender</small>
                                                    </div>
                                                    <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <linearGradient id="grad-green" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" style="stop-color:rgb(114 181 98);stop-opacity:1" />
                                                        <stop offset="100%" style="stop-color:rgb(233 118 159);stop-opacity:1" />
                                                      </linearGradient>
                                                      <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M1972.3,4960.8c-786.3-58.8-881.9-73.5-951.7-139.6c-69.8-69.8-80.8-169-143.3-970.1c-69.8-962.7-62.5-1050.9,102.9-1128c132.3-58.8,183.7-51.4,294,47.8c99.2,84.5,102.9,102.9,139.6,643l40.4,554.8l385.8-385.8l382.1-385.8l-374.8-378.5c-316-323.4-374.8-400.5-374.8-499.7c0-154.3,113.9-260.9,279.2-260.9c121.3,0,172.7,36.7,507.1,367.4l374.8,367.4l136-139.6l139.6-139.6l-73.5-91.9c-136-172.7-330.7-569.5-415.2-841.4c-66.1-224.2-84.5-360.1-80.8-734.9c0-525.4,55.1-779,264.6-1201.6c382.2-779,1058.2-1271.3,2002.6-1462.4l99.2-18.4v-661.4v-661.4h-525.4c-569.5,0-657.7-25.8-701.8-202.1c-25.7-106.6,55.1-290.3,143.3-327c33-11.1,290.3-22,573.2-22h510.8v-437.3c0-407.9,7.4-448.3,84.5-540.1c110.2-128.6,290.3-136,404.2-18.4c73.5,69.8,80.8,124.9,91.9,536.5l14.7,459.3h507.1c279.2,0,536.4,11,569.5,22c88.2,36.8,169,220.5,143.3,327c-44.1,176.3-132.3,202.1-701.8,202.1H5294v661.4v661.4l102.9,18.4c547.5,113.9,944.3,290.3,1308.1,591.6c1039.9,859.8,1278.7,2414.1,536.5,3523.8l-147,220.5l727.5,727.5l723.9,723.9l36.7-554.8c36.7-540.1,44.1-558.5,139.6-643c113.9-99.2,165.3-106.6,297.6-47.8c165.4,77.2,172.7,165.4,102.9,1128c-58.8,801-73.5,900.2-143.3,966.4c-66.1,66.1-158,80.8-779,124.9c-1109.6,80.8-1168.5,80.8-1253,0c-128.6-132.3-132.3-260.9-11-382.1c102.9-102.9,124.9-106.6,547.5-128.6c745.9-40.4,753.3,33.1-73.5-790l-712.8-712.8l-238.8,150.6c-323.4,205.8-646.7,330.7-1014.2,393.2c-385.8,69.8-503.4,69.8-900.2,0c-385.8-66.1-690.8-187.4-1006.8-393.2l-231.5-150.6l-135.9,132.3l-132.3,132.3l374.8,385.8c418.9,429.9,459.3,529.1,282.9,701.8c-161.7,165.3-246.2,128.6-676.1-294l-393.2-385.8l-378.5,382.1c-440.9,444.6-466.7,404.2,264.6,448.3c378.5,22.1,448.3,36.7,532.8,106.6c165.3,143.3,95.5,418.9-121.3,470.3C2883.5,5015.9,2457.3,4993.9,1972.3,4960.8z M5529.1,2884.8c687.1-180,1245.7-705.5,1477.1-1396.3c128.6-382.1,136-900.2,18.4-1267.7c-235.1-734.9-841.4-1282.4-1609.4-1455.1C4386.4-1462.1,3306.1-819.1,2975.4,220.8c-117.6,367.4-110.2,885.5,18.4,1267.7c231.5,679.8,753.3,1186.8,1436.7,1381.6C4713.4,2950.9,5246.2,2958.3,5529.1,2884.8z" fill="url(#grad-green)" /></g></g>
                                                      </svg>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="location_section_participation_class8" style="display:none;">
                                          <div class="part-wrap ptb-30" id="location_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY LOCATION
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                              <div class="category-wrap">
                                                <div class="card-round card-green">
                                                  <span class="percentage" id="participation_rural_class8">0%</span>
                                                  <small class="title">Rural</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="102.651" viewBox="0 0 97 102.651">
                                                    <g id="d3b9d9cfc8e7f5b9a26cd45c246e7077" transform="translate(-36.992 -10.006)">
                                                      <g id="Group_2117" data-name="Group 2117" transform="translate(36.992 10.006)">
                                                        <path id="Path_6913" data-name="Path 6913" d="M97.725,410.157a3.26,3.26,0,1,0,3.938-5.2l-28.91-21.913a3.268,3.268,0,0,0-3.928-.01L38.3,405.842a3.263,3.263,0,0,0,1.959,5.876,3.227,3.227,0,0,0,1.948-.649l28.564-21.337Z" transform="translate(-36.992 -343.382)" fill="#72B562"/>
                                                        <path id="Path_6914" data-name="Path 6914" d="M738.014,400.364,735.794,351.5H733.28l-1.917,48.864-.063,18.016h6.8Z" transform="translate(-658.573 -315.73)" fill="#72B562"/>
                                                        <path id="Path_6915" data-name="Path 6915" d="M806.1,318.857l-12.894-14.4a1.9,1.9,0,0,0-2.629-.01l-1.466,1.571a1.9,1.9,0,0,0,.178,2.619l15.23,11.91c.723.681,1.236,1.152,1.917.43l.168-.178C807.269,320.072,806.819,319.527,806.1,318.857Z" transform="translate(-709.927 -273.136)" fill="#72B562"/>
                                                        <path id="Path_6916" data-name="Path 6916" d="M513.1,274.116l-.524-2.084a2.018,2.018,0,0,0-2.42-1.236l-18.687,6.557c-.964.241-2.095.534-1.854,1.5l.063.23c.241.964,1.4.754,2.367.513l19.535-3.237A2.036,2.036,0,0,0,513.1,274.116Z" transform="translate(-442.179 -243.426)" fill="#72B562"/>
                                                        <path id="Path_6917" data-name="Path 6917" d="M748.164,32.086l1.99-19.692c.178-.974.314-2.147-.66-2.325l-.23-.042c-.974-.189-1.194.974-1.372,1.948l-5.363,19.064a2.019,2.019,0,0,0,1.383,2.336l2.116.4A2.042,2.042,0,0,0,748.164,32.086Z" transform="translate(-668.598 -10.006)" fill="#72B562"/>
                                                        <circle id="Ellipse_39" data-name="Ellipse 39" cx="2.702" cy="2.702" r="2.702" transform="translate(73.114 25.997)" fill="#72B562"/>
                                                        <path id="Path_6918" data-name="Path 6918" d="M140.361,520.356h13.051V538.3h8.16V507.42L136.82,489.1,111,507.42v30.89h29.361Zm-9.794,3.268H117.526V512.207h13.051v11.417Z" transform="translate(-103.248 -438.917)" fill="#72B562"/>
                                                      </g>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                              <div class="category-wrap">
                                                <div class="card-round card-pink">
                                                  <span class="percentage" id="participation_urban_class8">0%</span>
                                                  <small class="title">Urban</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="84.177" height="77.168" viewBox="0 0 84.177 77.168">
                                                    <g id="c1e57e2e30878df24f323d167f002daf" transform="translate(-10 -50.8)">
                                                      <path id="Path_6912" data-name="Path 6912" d="M90.673,54.313V50.8H73.133v3.5h-3.5v35.08H62.611V71.844H48.584v3.5h-3.5v7.018H55.6v3.5H45.071v7.018H55.593v3.5H45.071v3.5H38.053V75.357H31.044V64.835L10,57.818v70.151H94.177V54.313ZM17.018,71.844h7.018v3.5H17.018Zm14.027,45.6H17.018v-3.5H31.044Zm0-10.522H17.018v-3.5H31.044Zm0-10.522H17.018V92.9H31.044Zm0-10.522H17.018v-3.5H31.044Zm24.549,31.567H45.071v-3.5H55.593Zm0-10.522H45.071v-3.5H55.593ZM87.16,117.446H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638V92.9H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Z" transform="translate(0 0)" fill="#e9769f"/>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="management_section_participation_class8" style="display:none;">
                                          <div class="part-wrap ptb-30" id="management_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY MANAGEMENT
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="managementPieGraph_class8"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="social_section_participation_class8" style="display:none;">
                                          <div class="part-wrap ptb-30" id="social_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY SOCIAL GROUP
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="socialBarGraph_class8"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                    </div>
                                  </div>

                                  <div class="tab-pane fade" id="participation_class10" role="tabpanel" aria-labelledby="participation-10-tab">
                                    <div class="totalpart-card-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              TOTAL PARTICIPATION OF CLASS 10
                                            </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-content card-sagegreen">
                                                <div class="card-icon">
                                                  <svg id="Group_1556" data-name="Group 1556" xmlns="http://www.w3.org/2000/svg" width="81.815" height="72.217" viewBox="0 0 81.815 72.217">
                                                    <path id="Path_31" data-name="Path 31" d="M50.309-437.694v5.827l-4.789,4.79-4.789,4.789v5.088H15.189v38.313H12.594v2.595H40.731v2.2H10v2.793H91.815V-374.1H61.084v-2.2H89.22v-2.595H86.625V-417.2H61.084v-5.088l-4.789-4.79-4.789-4.789v-5.487l2.833-1.417,2.853-1.437L53.9-441.865c-1.816-.9-3.353-1.656-3.432-1.656A50.338,50.338,0,0,0,50.309-437.694ZM53.4-421.61a5.153,5.153,0,0,1,2.494,5.328,4.855,4.855,0,0,1-4.989,4.071,4.581,4.581,0,0,1-3.572-1.417,5.127,5.127,0,0,1,2.434-8.581A5.54,5.54,0,0,1,53.4-421.61ZM25.365-404.529v5.088H20.177v-4.949a47.9,47.9,0,0,1,.139-5.088,12.985,12.985,0,0,1,2.594-.139h2.454v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.742.04.04,5.048H76.45v-10.2l2.554.06,2.535.06ZM49.91-389.064v7.583H45.7l.06-5.747c.06-6.206.04-6.106,1.3-7.782a5.922,5.922,0,0,1,2.614-1.636C49.85-396.647,49.91-395.011,49.91-389.064Zm3.591-6.924a5.271,5.271,0,0,1,2.474,3.652c.06.518.119,3.172.119,5.886v4.969H51.9v-7.583c0-6.066.06-7.583.26-7.583A5.715,5.715,0,0,1,53.5-395.989Zm-28.136,6.825v5.088H20.177v-10.177h5.188v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.782,0v5.088H76.45v-10.177h5.188Z" transform="translate(-10 443.521)" fill="#2A787A"/>
                                                    <path id="Path_32" data-name="Path 32" d="M459.893-170.95a1.964,1.964,0,0,0-.319,1.3v.978H458.6c-1.058,0-1.616.339-1.616.978,0,.738.639,1.018,2.354,1.018,2.116,0,2.235-.119,2.235-2.295,0-1.756-.24-2.295-1-2.295A1.08,1.08,0,0,0,459.893-170.95Z" transform="translate(-419.664 193.999)" fill="#2A787A"/>
                                                  </svg>

                                                </div>
                                                <div class="card-desc">
                                                    <span class="total-no count" id="participation_school_class10">0</span>
                                                    <p class="title">Schools</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-red">
                                            <div class="card-icon">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="71.689" height="53.928" viewBox="0 0 71.689 53.928">
                                                <g id="fc32e74db624eb16eecc4e3b0a763aea" transform="translate(-10 -131.4)">
                                                  <path id="Path_38" data-name="Path 38" d="M395.5,131.4v24.221l2.765-1.156.015-20.292h37.93v25.011H416.831l-7.286,2.772h29.444V131.4Z" transform="translate(-357.3 0)" fill="#BC5654"/>
                                                  <path id="Path_39" data-name="Path 39" d="M471.545,242.14a14.311,14.311,0,0,1,.41,1.712c.3,1.536.614,3.124,1.778,3.877a2.423,2.423,0,0,0,1.917.307c2.056-.475,2.685-2.97,3.292-5.391a12,12,0,0,1,1.039-3.087c.461.285,1.229,2.319,1.492,3.014.761,2.012,1.544,4.1,3.168,4.616a2.481,2.481,0,0,0,2.165,0c1.288-.644,1.661-2.253,2.019-3.8.051-.219.117-.5.19-.783.029.132.051.256.073.373.329,1.77.819,4.448,3.431,5.208a5.682,5.682,0,0,0,2.575.088c.315-.044.636-.088.666-.088a2.855,2.855,0,0,1,.819.468,3.812,3.812,0,0,0,2.3.863,3.914,3.914,0,0,0,.4-.022l-.322-2.875c-.161.022-.241,0-.717-.337a5.558,5.558,0,0,0-1.763-.892,5.123,5.123,0,0,0-1.778.029,3.1,3.1,0,0,1-1.346.007c-.856-.249-1.119-1.339-1.419-2.963-.271-1.47-.68-3.694-2.816-3.738-2.114-.051-2.692,2.3-3.087,4.016a13.622,13.622,0,0,1-.461,1.675,10.7,10.7,0,0,1-1.375-2.868c-.849-2.246-1.807-4.791-4.133-4.916-2.524-.139-3.255,2.758-3.9,5.3a17.082,17.082,0,0,1-.951,3.036,15.81,15.81,0,0,1-.4-1.69c-.344-1.763-.819-4.184-3.014-4.184-2.641,0-4.1,3.555-5.384,6.693-.263.636-.5,1.214-.71,1.668l2.6,1.236c.234-.49.49-1.127.783-1.814C469.54,245.739,470.733,242.828,471.545,242.14Z" transform="translate(-422.364 -97.536)" fill="#BC5654"/>
                                                  <path id="Path_40" data-name="Path 40" d="M50,167.2a11.8,11.8,0,1,0,11.8-11.8A11.8,11.8,0,0,0,50,167.2Z" transform="translate(-37.074 -22.244)" fill="#BC5654"/>
                                                  <path id="Path_41" data-name="Path 41" d="M55.837,415.2l-19.246,6.372H29.02l-4.5,5.216-4.353-5.216-9.51,1.441L10,444.549h4.053l.19,3.819h21.28l1.061-20.673,21.075-6.979Z" transform="translate(0 -263.039)" fill="#BC5654"/>
                                                </g>
                                              </svg>
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_teachers_class10">0</span>
                                                <p class="title">Teachers</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-green">
                                            <div class="card-icon">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="87.571" height="75" viewBox="0 0 87.571 75">
                                                <g id="_2c122acb93a7d68f5c536e26787d82a0" data-name="2c122acb93a7d68f5c536e26787d82a0" transform="translate(-10 -80.335)">
                                                  <g id="Group_1557" data-name="Group 1557" transform="translate(10 80.335)">
                                                    <path id="Path_33" data-name="Path 33" d="M632.572-430.463a6.962,6.962,0,0,0-4.972,6.431,6.7,6.7,0,0,0,6.5,6.5,6.09,6.09,0,0,0,4.813-1.938,5.884,5.884,0,0,0,1.87-5.108,5.865,5.865,0,0,0-1.938-4.173A6.741,6.741,0,0,0,632.572-430.463Z" transform="translate(-572.412 430.665)" fill="#5C914E"/>
                                                    <path id="Path_34" data-name="Path 34" d="M206.948-424.949a5.069,5.069,0,0,0-3.923,2.189,9.578,9.578,0,0,0-2.759,5.837,29.391,29.391,0,0,1-.661,3.581c-.548,1.938-.594,3.078-.16,3.854l.3.547.889-.8a7.034,7.034,0,0,1,3.193-2.007,3.569,3.569,0,0,1,1.55.776c2.029,1.55,3.238,1.55,5.45,0a4.152,4.152,0,0,1,1.483-.776,8.027,8.027,0,0,1,3.078,2.029c.707.685.889.752,1.072.479.547-.843.525-1.961-.091-4.309a22.286,22.286,0,0,1-.593-3.284,5.125,5.125,0,0,0-.365-1.71,35.027,35.027,0,0,0-3.375-5.245C211.053-424.9,209.456-425.268,206.948-424.949Zm.639,6.431a9.761,9.761,0,0,0,4.264,1.072,5.467,5.467,0,0,1,.958.045c0,.046-.16.616-.319,1.277a8.071,8.071,0,0,1-2.3,3.877,2.851,2.851,0,0,1-2.759.867c-1.574-.319-3.672-3.169-3.809-5.245-.046-.8,0-.867.844-1.164a4.388,4.388,0,0,0,1.459-.889C206.514-419.271,206.583-419.271,207.586-418.518Z" transform="translate(-182.25 425.561)" fill="#5C914E"/>
                                                    <path id="Path_35" data-name="Path 35" d="M560.921-264.476c-6,1.368-10.012,7.252-10.491,15.439l-.16,2.486h2.987c2.646,0,2.987-.045,3.078-.41.068-.206.3-1.779.5-3.49.41-3.284.57-3.785,1.025-3.512.228.137.274,1,.16,3.809l-.137,3.6h11.836v-.524c0-.273-.115-1.779-.229-3.306a10.055,10.055,0,0,1,.023-3.261c.57-1.095.867-.251,1.459,4.127.206,1.551.388,2.874.434,2.9.045.045,1.368.137,2.987.228l2.919.137-.114-3.17a15.52,15.52,0,0,0-.707-4.994A14.687,14.687,0,0,0,567.281-264,12.5,12.5,0,0,0,560.921-264.476Z" transform="translate(-501.993 279.524)" fill="#5C914E"/>
                                                    <path id="Path_36" data-name="Path 36" d="M157.372-260.467a22.192,22.192,0,0,0-4.151,4.242c-1.459,2.189-2.508,5.406-4.036,12.178-.091.365.16.41,2.6.41,2.007,0,2.783-.091,3.011-.319a11.933,11.933,0,0,0,.73-3.466c.433-3.261.661-4.082,1.095-3.831.182.114.205,1.277.114,3.763l-.114,3.626,2.645.023c3.421.045,9.031-.046,9.122-.137a31.087,31.087,0,0,0-.16-3.307,26.365,26.365,0,0,1-.091-3.558.5.5,0,0,1,.844-.137c.046.091.342,1.8.616,3.763l.5,3.581h5.816l-.319-1.437c-1.231-5.4-3.421-10.536-5.656-13.25a12.358,12.358,0,0,0-2.029-1.824l-1.231-.844-1.186.8c-1.6,1.094-2.805,1.391-3.991,1.049a7.327,7.327,0,0,1-2.759-1.6C158.535-261.082,158.124-261.013,157.372-260.467Z" transform="translate(-136.733 276.152)" fill="#5C914E"/>
                                                    <path id="Path_37" data-name="Path 37" d="M26.305-49.884l-5.473.137-.069,1.984c-.069,1.847-.091,1.984-.57,2.053a.51.51,0,0,0-.5.525c0,.639.752.685,6.408.228l4.789-.365,1.368.525,1.346.525-11.788.068L10-44.16v2.942l.98.137a10.631,10.631,0,0,0,1.642.069l.684-.069.069,16.009.046,16.032h3.192V-40.968l.525-.114c.273-.046,1.893-.068,3.581-.046l3.078.046.069.844.069.867H19.578v22.122h2.965l.046-9.533.069-9.51h4.561l.114,7.982c.114,7.914.114,7.982.639,8.734a3.3,3.3,0,0,0,2.942,1.414,3.434,3.434,0,0,0,3.033-1.642c.433-.707.456-1.163.456-8.552v-7.8l.776-.137a4.3,4.3,0,0,1,1.3-.068l.548.068.114,7.982c.114,7.206.16,8.073.525,8.62a3.609,3.609,0,0,0,6.112-.3c.388-.73.433-1.437.433-8.6v-7.823h3.875V-17.48H51.05V-39.6H46.694l.069-.73.069-.752,7.138-.046,7.116-.022v1.778H56.069V-17.25h3.193v-9.578c0-10.81-.228-9.715,1.893-9.442l1.049.16.068,6.865.069,6.865.616,1.026a4.314,4.314,0,0,0,7.48-.046c.57-.98.57-1,.638-7.822.046-4.971.137-6.887.342-7a4.467,4.467,0,0,1,1.459-.182h1.186l.069,7c.069,7,.069,7.024.638,8a4.328,4.328,0,0,0,7.526,0c.57-.98.57-1,.638-8l.069-7h1.574v18.928h3.192l-.046-11.014-.07-10.992-1.756-.069-1.779-.069v-.661c0-.639.046-.661,1.437-.776a31.726,31.726,0,0,1,3.4-.069l2.007.046V-9.27h.752a14.241,14.241,0,0,1,1.6.137l.844.16V-24.96c0-14.345.046-15.964.365-16.1a8.287,8.287,0,0,1,1.71-.137h1.347v-2.965l-11.79-.046-11.813-.068,1.368-.525,1.368-.548L82-44.869a52.121,52.121,0,0,0,5.633.342.592.592,0,0,0-.091-1.117c-.41-.137-.456-.342-.456-1.779a6.367,6.367,0,0,0-.206-1.961c-.16-.251-1.734-.342-8.027-.433-8.438-.137-21.642-.069-21.916.114a5.845,5.845,0,0,0-.182,2.029c0,1.734-.046,1.916-.433,1.916-.5,0-.821.661-.5.98.159.16,1.71.137,4.743-.091,6.02-.433,7.047-.41,8.165.206l.912.479H53.786c-13.934,0-15.781-.022-15.279-.319,1.368-.8,2.12-.821,7.5-.342a54.979,54.979,0,0,0,5.61.319c.5-.206.342-.844-.3-1.117-.456-.206-.5-.365-.5-2.075v-1.846l-3.968-.16c-2.189-.091-5.747-.16-7.936-.16-2.166,0-4.652-.023-5.542-.046C32.509-49.976,29.316-49.952,26.305-49.884Z" transform="translate(-10 83.973)" fill="#5C914E"/>
                                                  </g>
                                                </g>
                                              </svg>
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_students_class10">0</span>
                                                <p class="title">Students</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="categorypart-card-wrap">
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="gender_section_participation_class10" style="display:none;">
                                          <div class="part-wrap ptb-30" id="gender_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY GENDER
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                                <div class="category-wrap">
                                                  <div class="card-round card-sagegreen">
                                                    <span class="percentage" id="paricipation_gender_male_class10">0%</span>
                                                    <small class="title">Boys</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M955,10H675c-19.3,0-35,15.7-35,35s15.7,35,35,35h197.7L642.5,310.2C575.5,254,489.3,220,395,220C182.3,220,10,392.3,10,605c0,212.6,172.3,385,385,385c212.6,0,385-172.4,385-385c0-93.2-33.1-178.6-88.2-245.1L920,131.7V325c0,19.3,15.7,35,35,35s35-15.7,35-35V45C990,25.7,974.3,10,955,10z M395,920C221.3,920,80,778.7,80,605s141.3-315,315-315c173.7,0,315,141.3,315,315S568.7,920,395,920z" fill="#3cacae" /></g>
                                                      </svg>
                                                  </div>
                                                  
                                                </div>
                                                <div class="category-wrap">
                                                  <div class="card-round card-red">
                                                    <span class="percentage" id="paricipation_gender_female_class10">0%</span>
                                                    <small class="title">Girls</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M462.6,858.6H330.4v-74.9h132.1V667c-82.2-8.8-151.5-44.4-207.8-106.8c-56.3-62.4-84.4-136-84.4-220.6c0-90.5,32.1-168.1,96.5-232.7C331.2,42.3,409,10,500,10c90.5,0,168.1,32.3,232.7,96.9c64.6,64.6,96.9,142.2,96.9,232.7c0,84.7-28.3,158.2-84.8,220.6c-56.5,62.4-125.6,98-207.3,106.8v116.7h132.1v74.9H537.4V990h-74.9V858.6L462.6,858.6z M500,85.6c-70,0-129.9,24.9-179.5,74.9C270.8,210.4,246,270.1,246,339.6c0,70.5,24.8,130.4,74.5,179.9c49.7,49.4,109.5,74.1,179.5,74.1c70,0,129.8-24.7,179.4-74.1C729.1,470,754,410.1,754,339.6c0-69.5-24.9-129.2-74.5-179.1C629.8,110.6,570,85.6,500,85.6z" fill="#eb6c69"/></g>
                                                      </svg>
                                                  </div>
                                                </div>
                                                <div class="category-wrap">
                                                    <div class="card-round card-red-gradient">
                                                      <span class="percentage" id="paricipation_gender_trans_class10">0%</span>
                                                      <small class="title">Transgender</small>
                                                    </div>
                                                    <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <linearGradient id="grad-red" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" style="stop-color:rgb(60 172 174);stop-opacity:1" />
                                                        <stop offset="100%" style="stop-color:rgb(235 108 105);stop-opacity:1" />
                                                      </linearGradient>
                                                      <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M1972.3,4960.8c-786.3-58.8-881.9-73.5-951.7-139.6c-69.8-69.8-80.8-169-143.3-970.1c-69.8-962.7-62.5-1050.9,102.9-1128c132.3-58.8,183.7-51.4,294,47.8c99.2,84.5,102.9,102.9,139.6,643l40.4,554.8l385.8-385.8l382.1-385.8l-374.8-378.5c-316-323.4-374.8-400.5-374.8-499.7c0-154.3,113.9-260.9,279.2-260.9c121.3,0,172.7,36.7,507.1,367.4l374.8,367.4l136-139.6l139.6-139.6l-73.5-91.9c-136-172.7-330.7-569.5-415.2-841.4c-66.1-224.2-84.5-360.1-80.8-734.9c0-525.4,55.1-779,264.6-1201.6c382.2-779,1058.2-1271.3,2002.6-1462.4l99.2-18.4v-661.4v-661.4h-525.4c-569.5,0-657.7-25.8-701.8-202.1c-25.7-106.6,55.1-290.3,143.3-327c33-11.1,290.3-22,573.2-22h510.8v-437.3c0-407.9,7.4-448.3,84.5-540.1c110.2-128.6,290.3-136,404.2-18.4c73.5,69.8,80.8,124.9,91.9,536.5l14.7,459.3h507.1c279.2,0,536.4,11,569.5,22c88.2,36.8,169,220.5,143.3,327c-44.1,176.3-132.3,202.1-701.8,202.1H5294v661.4v661.4l102.9,18.4c547.5,113.9,944.3,290.3,1308.1,591.6c1039.9,859.8,1278.7,2414.1,536.5,3523.8l-147,220.5l727.5,727.5l723.9,723.9l36.7-554.8c36.7-540.1,44.1-558.5,139.6-643c113.9-99.2,165.3-106.6,297.6-47.8c165.4,77.2,172.7,165.4,102.9,1128c-58.8,801-73.5,900.2-143.3,966.4c-66.1,66.1-158,80.8-779,124.9c-1109.6,80.8-1168.5,80.8-1253,0c-128.6-132.3-132.3-260.9-11-382.1c102.9-102.9,124.9-106.6,547.5-128.6c745.9-40.4,753.3,33.1-73.5-790l-712.8-712.8l-238.8,150.6c-323.4,205.8-646.7,330.7-1014.2,393.2c-385.8,69.8-503.4,69.8-900.2,0c-385.8-66.1-690.8-187.4-1006.8-393.2l-231.5-150.6l-135.9,132.3l-132.3,132.3l374.8,385.8c418.9,429.9,459.3,529.1,282.9,701.8c-161.7,165.3-246.2,128.6-676.1-294l-393.2-385.8l-378.5,382.1c-440.9,444.6-466.7,404.2,264.6,448.3c378.5,22.1,448.3,36.7,532.8,106.6c165.3,143.3,95.5,418.9-121.3,470.3C2883.5,5015.9,2457.3,4993.9,1972.3,4960.8z M5529.1,2884.8c687.1-180,1245.7-705.5,1477.1-1396.3c128.6-382.1,136-900.2,18.4-1267.7c-235.1-734.9-841.4-1282.4-1609.4-1455.1C4386.4-1462.1,3306.1-819.1,2975.4,220.8c-117.6,367.4-110.2,885.5,18.4,1267.7c231.5,679.8,753.3,1186.8,1436.7,1381.6C4713.4,2950.9,5246.2,2958.3,5529.1,2884.8z" fill="url(#grad-red)" /></g></g>
                                                      </svg>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="location_section_participation_class10" style="display:none;">
                                          <div class="part-wrap ptb-30" id="location_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY LOCATION
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                              <div class="category-wrap">
                                                <div class="card-round card-sagegreen">
                                                  <span class="percentage" id="participation_rural_class10">0%</span>
                                                  <small class="title">Rural</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="102.651" viewBox="0 0 97 102.651">
                                                    <g id="d3b9d9cfc8e7f5b9a26cd45c246e7077" transform="translate(-36.992 -10.006)">
                                                      <g id="Group_2117" data-name="Group 2117" transform="translate(36.992 10.006)">
                                                        <path id="Path_6913" data-name="Path 6913" d="M97.725,410.157a3.26,3.26,0,1,0,3.938-5.2l-28.91-21.913a3.268,3.268,0,0,0-3.928-.01L38.3,405.842a3.263,3.263,0,0,0,1.959,5.876,3.227,3.227,0,0,0,1.948-.649l28.564-21.337Z" transform="translate(-36.992 -343.382)" fill="#3CACAE"/>
                                                        <path id="Path_6914" data-name="Path 6914" d="M738.014,400.364,735.794,351.5H733.28l-1.917,48.864-.063,18.016h6.8Z" transform="translate(-658.573 -315.73)" fill="#3CACAE"/>
                                                        <path id="Path_6915" data-name="Path 6915" d="M806.1,318.857l-12.894-14.4a1.9,1.9,0,0,0-2.629-.01l-1.466,1.571a1.9,1.9,0,0,0,.178,2.619l15.23,11.91c.723.681,1.236,1.152,1.917.43l.168-.178C807.269,320.072,806.819,319.527,806.1,318.857Z" transform="translate(-709.927 -273.136)" fill="#3CACAE"/>
                                                        <path id="Path_6916" data-name="Path 6916" d="M513.1,274.116l-.524-2.084a2.018,2.018,0,0,0-2.42-1.236l-18.687,6.557c-.964.241-2.095.534-1.854,1.5l.063.23c.241.964,1.4.754,2.367.513l19.535-3.237A2.036,2.036,0,0,0,513.1,274.116Z" transform="translate(-442.179 -243.426)" fill="#3CACAE"/>
                                                        <path id="Path_6917" data-name="Path 6917" d="M748.164,32.086l1.99-19.692c.178-.974.314-2.147-.66-2.325l-.23-.042c-.974-.189-1.194.974-1.372,1.948l-5.363,19.064a2.019,2.019,0,0,0,1.383,2.336l2.116.4A2.042,2.042,0,0,0,748.164,32.086Z" transform="translate(-668.598 -10.006)" fill="#3CACAE"/>
                                                        <circle id="Ellipse_39" data-name="Ellipse 39" cx="2.702" cy="2.702" r="2.702" transform="translate(73.114 25.997)" fill="#3CACAE"/>
                                                        <path id="Path_6918" data-name="Path 6918" d="M140.361,520.356h13.051V538.3h8.16V507.42L136.82,489.1,111,507.42v30.89h29.361Zm-9.794,3.268H117.526V512.207h13.051v11.417Z" transform="translate(-103.248 -438.917)" fill="#3CACAE"/>
                                                      </g>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                              <div class="category-wrap">
                                                <div class="card-round card-red">
                                                  <span class="percentage" id="participation_urban_class10">0%</span>
                                                  <small class="title">Urban</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="84.177" height="77.168" viewBox="0 0 84.177 77.168">
                                                    <g id="c1e57e2e30878df24f323d167f002daf" transform="translate(-10 -50.8)">
                                                      <path id="Path_6912" data-name="Path 6912" d="M90.673,54.313V50.8H73.133v3.5h-3.5v35.08H62.611V71.844H48.584v3.5h-3.5v7.018H55.6v3.5H45.071v7.018H55.593v3.5H45.071v3.5H38.053V75.357H31.044V64.835L10,57.818v70.151H94.177V54.313ZM17.018,71.844h7.018v3.5H17.018Zm14.027,45.6H17.018v-3.5H31.044Zm0-10.522H17.018v-3.5H31.044Zm0-10.522H17.018V92.9H31.044Zm0-10.522H17.018v-3.5H31.044Zm24.549,31.567H45.071v-3.5H55.593Zm0-10.522H45.071v-3.5H55.593ZM87.16,117.446H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638V92.9H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Z" transform="translate(0 0)" fill="#EB6C69"/>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="management_section_participation_class10" style="display:none;">
                                          <div class="part-wrap ptb-30" id="management_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY MANAGEMENT
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="managementPieGraph_class10"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="social_section_participation_class10" style="display:none;">
                                          <div class="part-wrap ptb-30" id="social_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY SOCIAL GROUP
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="socialBarGraph_class10"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                    </div>
                                  </div>

                                  <div class="tab-pane fade" id="participation_classall" role="tabpanel" aria-labelledby="participation-all-tab">
                                    <div class="totalpart-card-wrap">
                                      <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              TOTAL PARTICIPATION OF All Classes
                                            </h2>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-content card-blue">
                                                <div class="card-icon">
                                                  <img src="{{asset('assets/front/images/school-icon.svg')}}" alt="img" class="img-fluid" />  
                                                </div>
                                                <div class="card-desc">
                                                    <span class="total-no count" id="participation_school_classall">0</span>
                                                    <p class="title">Schools</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-pink">
                                            <div class="card-icon">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="71.689" height="53.928" viewBox="0 0 71.689 53.928">
                                                <g id="fc32e74db624eb16eecc4e3b0a763aea" transform="translate(-10 -131.4)">
                                                  <path id="Path_38" data-name="Path 38" d="M395.5,131.4v24.221l2.765-1.156.015-20.292h37.93v25.011H416.831l-7.286,2.772h29.444V131.4Z" transform="translate(-357.3 0)" fill="#be4e76"/>
                                                  <path id="Path_39" data-name="Path 39" d="M471.545,242.14a14.311,14.311,0,0,1,.41,1.712c.3,1.536.614,3.124,1.778,3.877a2.423,2.423,0,0,0,1.917.307c2.056-.475,2.685-2.97,3.292-5.391a12,12,0,0,1,1.039-3.087c.461.285,1.229,2.319,1.492,3.014.761,2.012,1.544,4.1,3.168,4.616a2.481,2.481,0,0,0,2.165,0c1.288-.644,1.661-2.253,2.019-3.8.051-.219.117-.5.19-.783.029.132.051.256.073.373.329,1.77.819,4.448,3.431,5.208a5.682,5.682,0,0,0,2.575.088c.315-.044.636-.088.666-.088a2.855,2.855,0,0,1,.819.468,3.812,3.812,0,0,0,2.3.863,3.914,3.914,0,0,0,.4-.022l-.322-2.875c-.161.022-.241,0-.717-.337a5.558,5.558,0,0,0-1.763-.892,5.123,5.123,0,0,0-1.778.029,3.1,3.1,0,0,1-1.346.007c-.856-.249-1.119-1.339-1.419-2.963-.271-1.47-.68-3.694-2.816-3.738-2.114-.051-2.692,2.3-3.087,4.016a13.622,13.622,0,0,1-.461,1.675,10.7,10.7,0,0,1-1.375-2.868c-.849-2.246-1.807-4.791-4.133-4.916-2.524-.139-3.255,2.758-3.9,5.3a17.082,17.082,0,0,1-.951,3.036,15.81,15.81,0,0,1-.4-1.69c-.344-1.763-.819-4.184-3.014-4.184-2.641,0-4.1,3.555-5.384,6.693-.263.636-.5,1.214-.71,1.668l2.6,1.236c.234-.49.49-1.127.783-1.814C469.54,245.739,470.733,242.828,471.545,242.14Z" transform="translate(-422.364 -97.536)" fill="#be4e76"/>
                                                  <path id="Path_40" data-name="Path 40" d="M50,167.2a11.8,11.8,0,1,0,11.8-11.8A11.8,11.8,0,0,0,50,167.2Z" transform="translate(-37.074 -22.244)" fill="#be4e76"/>
                                                  <path id="Path_41" data-name="Path 41" d="M55.837,415.2l-19.246,6.372H29.02l-4.5,5.216-4.353-5.216-9.51,1.441L10,444.549h4.053l.19,3.819h21.28l1.061-20.673,21.075-6.979Z" transform="translate(0 -263.039)" fill="#be4e76"/>
                                                </g>
                                              </svg>
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_teachers_classall">0</span>
                                                <p class="title">Teachers</p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card-content card-yellow">
                                            <div class="card-icon">
                                              <img src="{{asset('assets/front/images/student-icon.svg')}}" alt="img" class="img-fluid" />
                                            </div>
                                            <div class="card-desc">
                                                <span class="total-no count" id="participation_students_classall">0</span>
                                                <p class="title">Students</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="categorypart-card-wrap">
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="gender_section_participation_classall" style="display:none;">
                                          <div class="part-wrap ptb-30" id="gender_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY GENDER
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                                <div class="category-wrap">
                                                  <div class="card-round card-sagegreen">
                                                    <span class="percentage" id="paricipation_gender_male_classall">0%</span>
                                                    <small class="title">Boys</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M955,10H675c-19.3,0-35,15.7-35,35s15.7,35,35,35h197.7L642.5,310.2C575.5,254,489.3,220,395,220C182.3,220,10,392.3,10,605c0,212.6,172.3,385,385,385c212.6,0,385-172.4,385-385c0-93.2-33.1-178.6-88.2-245.1L920,131.7V325c0,19.3,15.7,35,35,35s35-15.7,35-35V45C990,25.7,974.3,10,955,10z M395,920C221.3,920,80,778.7,80,605s141.3-315,315-315c173.7,0,315,141.3,315,315S568.7,920,395,920z" fill="#3cacae" /></g>
                                                      </svg>
                                                  </div>
                                                  
                                                </div>
                                                <div class="category-wrap">
                                                  <div class="card-round card-red">
                                                    <span class="percentage" id="paricipation_gender_female_classall">0%</span>
                                                    <small class="title">Girls</small>
                                                  </div>
                                                  <div class="img-wrap">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <g><path d="M462.6,858.6H330.4v-74.9h132.1V667c-82.2-8.8-151.5-44.4-207.8-106.8c-56.3-62.4-84.4-136-84.4-220.6c0-90.5,32.1-168.1,96.5-232.7C331.2,42.3,409,10,500,10c90.5,0,168.1,32.3,232.7,96.9c64.6,64.6,96.9,142.2,96.9,232.7c0,84.7-28.3,158.2-84.8,220.6c-56.5,62.4-125.6,98-207.3,106.8v116.7h132.1v74.9H537.4V990h-74.9V858.6L462.6,858.6z M500,85.6c-70,0-129.9,24.9-179.5,74.9C270.8,210.4,246,270.1,246,339.6c0,70.5,24.8,130.4,74.5,179.9c49.7,49.4,109.5,74.1,179.5,74.1c70,0,129.8-24.7,179.4-74.1C729.1,470,754,410.1,754,339.6c0-69.5-24.9-129.2-74.5-179.1C629.8,110.6,570,85.6,500,85.6z" fill="#eb6c69"/></g>
                                                    </svg>
                                                  </div>
                                                </div>
                                                <div class="category-wrap">
                                                    <div class="card-round card-red-gradient">
                                                      <span class="percentage" id="paricipation_gender_trans_classall">0%</span>
                                                      <small class="title">Transgender</small>
                                                    </div>
                                                    <div class="img-wrap">
                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                      <linearGradient id="grad-all" x1="0%" y1="0%" x2="100%" y2="0%">
                                                        <stop offset="0%" style="stop-color:rgb(60 172 174);stop-opacity:1" />
                                                        <stop offset="100%" style="stop-color:rgb(235 108 105);stop-opacity:1" />
                                                      </linearGradient>
                                                      <g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M1972.3,4960.8c-786.3-58.8-881.9-73.5-951.7-139.6c-69.8-69.8-80.8-169-143.3-970.1c-69.8-962.7-62.5-1050.9,102.9-1128c132.3-58.8,183.7-51.4,294,47.8c99.2,84.5,102.9,102.9,139.6,643l40.4,554.8l385.8-385.8l382.1-385.8l-374.8-378.5c-316-323.4-374.8-400.5-374.8-499.7c0-154.3,113.9-260.9,279.2-260.9c121.3,0,172.7,36.7,507.1,367.4l374.8,367.4l136-139.6l139.6-139.6l-73.5-91.9c-136-172.7-330.7-569.5-415.2-841.4c-66.1-224.2-84.5-360.1-80.8-734.9c0-525.4,55.1-779,264.6-1201.6c382.2-779,1058.2-1271.3,2002.6-1462.4l99.2-18.4v-661.4v-661.4h-525.4c-569.5,0-657.7-25.8-701.8-202.1c-25.7-106.6,55.1-290.3,143.3-327c33-11.1,290.3-22,573.2-22h510.8v-437.3c0-407.9,7.4-448.3,84.5-540.1c110.2-128.6,290.3-136,404.2-18.4c73.5,69.8,80.8,124.9,91.9,536.5l14.7,459.3h507.1c279.2,0,536.4,11,569.5,22c88.2,36.8,169,220.5,143.3,327c-44.1,176.3-132.3,202.1-701.8,202.1H5294v661.4v661.4l102.9,18.4c547.5,113.9,944.3,290.3,1308.1,591.6c1039.9,859.8,1278.7,2414.1,536.5,3523.8l-147,220.5l727.5,727.5l723.9,723.9l36.7-554.8c36.7-540.1,44.1-558.5,139.6-643c113.9-99.2,165.3-106.6,297.6-47.8c165.4,77.2,172.7,165.4,102.9,1128c-58.8,801-73.5,900.2-143.3,966.4c-66.1,66.1-158,80.8-779,124.9c-1109.6,80.8-1168.5,80.8-1253,0c-128.6-132.3-132.3-260.9-11-382.1c102.9-102.9,124.9-106.6,547.5-128.6c745.9-40.4,753.3,33.1-73.5-790l-712.8-712.8l-238.8,150.6c-323.4,205.8-646.7,330.7-1014.2,393.2c-385.8,69.8-503.4,69.8-900.2,0c-385.8-66.1-690.8-187.4-1006.8-393.2l-231.5-150.6l-135.9,132.3l-132.3,132.3l374.8,385.8c418.9,429.9,459.3,529.1,282.9,701.8c-161.7,165.3-246.2,128.6-676.1-294l-393.2-385.8l-378.5,382.1c-440.9,444.6-466.7,404.2,264.6,448.3c378.5,22.1,448.3,36.7,532.8,106.6c165.3,143.3,95.5,418.9-121.3,470.3C2883.5,5015.9,2457.3,4993.9,1972.3,4960.8z M5529.1,2884.8c687.1-180,1245.7-705.5,1477.1-1396.3c128.6-382.1,136-900.2,18.4-1267.7c-235.1-734.9-841.4-1282.4-1609.4-1455.1C4386.4-1462.1,3306.1-819.1,2975.4,220.8c-117.6,367.4-110.2,885.5,18.4,1267.7c231.5,679.8,753.3,1186.8,1436.7,1381.6C4713.4,2950.9,5246.2,2958.3,5529.1,2884.8z" fill="url(#grad-all)" /></g></g>
                                                      </svg>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="location_section_participation_classall" style="display:none;">
                                          <div class="part-wrap ptb-30" id="location_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY LOCATION
                                            </h2>
                                            <div class="d-flex justify-content-evenly align-items-end">
                                              <div class="category-wrap">
                                                <div class="card-round card-sagegreen">
                                                  <span class="percentage" id="participation_rural_classall">0%</span>
                                                  <small class="title">Rural</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="97" height="102.651" viewBox="0 0 97 102.651">
                                                    <g id="d3b9d9cfc8e7f5b9a26cd45c246e7077" transform="translate(-36.992 -10.006)">
                                                      <g id="Group_2117" data-name="Group 2117" transform="translate(36.992 10.006)">
                                                        <path id="Path_6913" data-name="Path 6913" d="M97.725,410.157a3.26,3.26,0,1,0,3.938-5.2l-28.91-21.913a3.268,3.268,0,0,0-3.928-.01L38.3,405.842a3.263,3.263,0,0,0,1.959,5.876,3.227,3.227,0,0,0,1.948-.649l28.564-21.337Z" transform="translate(-36.992 -343.382)" fill="#3CACAE"/>
                                                        <path id="Path_6914" data-name="Path 6914" d="M738.014,400.364,735.794,351.5H733.28l-1.917,48.864-.063,18.016h6.8Z" transform="translate(-658.573 -315.73)" fill="#3CACAE"/>
                                                        <path id="Path_6915" data-name="Path 6915" d="M806.1,318.857l-12.894-14.4a1.9,1.9,0,0,0-2.629-.01l-1.466,1.571a1.9,1.9,0,0,0,.178,2.619l15.23,11.91c.723.681,1.236,1.152,1.917.43l.168-.178C807.269,320.072,806.819,319.527,806.1,318.857Z" transform="translate(-709.927 -273.136)" fill="#3CACAE"/>
                                                        <path id="Path_6916" data-name="Path 6916" d="M513.1,274.116l-.524-2.084a2.018,2.018,0,0,0-2.42-1.236l-18.687,6.557c-.964.241-2.095.534-1.854,1.5l.063.23c.241.964,1.4.754,2.367.513l19.535-3.237A2.036,2.036,0,0,0,513.1,274.116Z" transform="translate(-442.179 -243.426)" fill="#3CACAE"/>
                                                        <path id="Path_6917" data-name="Path 6917" d="M748.164,32.086l1.99-19.692c.178-.974.314-2.147-.66-2.325l-.23-.042c-.974-.189-1.194.974-1.372,1.948l-5.363,19.064a2.019,2.019,0,0,0,1.383,2.336l2.116.4A2.042,2.042,0,0,0,748.164,32.086Z" transform="translate(-668.598 -10.006)" fill="#3CACAE"/>
                                                        <circle id="Ellipse_39" data-name="Ellipse 39" cx="2.702" cy="2.702" r="2.702" transform="translate(73.114 25.997)" fill="#3CACAE"/>
                                                        <path id="Path_6918" data-name="Path 6918" d="M140.361,520.356h13.051V538.3h8.16V507.42L136.82,489.1,111,507.42v30.89h29.361Zm-9.794,3.268H117.526V512.207h13.051v11.417Z" transform="translate(-103.248 -438.917)" fill="#3CACAE"/>
                                                      </g>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                              <div class="category-wrap">
                                                <div class="card-round card-red">
                                                  <span class="percentage" id="participation_urban_classall">0%</span>
                                                  <small class="title">Urban</small>
                                                </div>
                                                <div class="img-wrap">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="84.177" height="77.168" viewBox="0 0 84.177 77.168">
                                                    <g id="c1e57e2e30878df24f323d167f002daf" transform="translate(-10 -50.8)">
                                                      <path id="Path_6912" data-name="Path 6912" d="M90.673,54.313V50.8H73.133v3.5h-3.5v35.08H62.611V71.844H48.584v3.5h-3.5v7.018H55.6v3.5H45.071v7.018H55.593v3.5H45.071v3.5H38.053V75.357H31.044V64.835L10,57.818v70.151H94.177V54.313ZM17.018,71.844h7.018v3.5H17.018Zm14.027,45.6H17.018v-3.5H31.044Zm0-10.522H17.018v-3.5H31.044Zm0-10.522H17.018V92.9H31.044Zm0-10.522H17.018v-3.5H31.044Zm24.549,31.567H45.071v-3.5H55.593Zm0-10.522H45.071v-3.5H55.593ZM87.16,117.446H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638V92.9H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Zm0-10.522H76.638v-3.5H87.16Z" transform="translate(0 0)" fill="#EB6C69"/>
                                                    </g>
                                                  </svg>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row justify-content-center">
                                        <div class="col-md-6" id="management_section_participation_classall" style="display:none;">
                                          <div class="part-wrap ptb-30" id="management_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY MANAGEMENT
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="managementPieGraph_classall"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6" id="social_section_participation_classall" style="display:none;">
                                          <div class="part-wrap ptb-30" id="social_participation">
                                            <h2 class="heading-grey text-center">
                                              PARTICIPATION BY SOCIAL GROUP
                                            </h2>
                                            <div class="graph-wrap">
                                              <figure class="highcharts-figure">
                                                <div id="socialBarGraph_classall"></div>
                                              </figure>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr />
                                    </div>
                                  </div>



@endsection