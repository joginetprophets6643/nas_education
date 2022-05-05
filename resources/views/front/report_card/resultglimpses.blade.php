@section('result-glimpses')
<div class="tab-pane fade" id="glimpsesnational_class3" role="tabpanel" aria-labelledby="nc3-result-tab">
   <div class="nc3-result-wrap">
      <div class="row">
         <div class="col-md-12">
            <h2 class="heading-grey text-center">
               PERFORMANCE OF STATES
            </h2>
            <div class="glimps-wrap">
               <div class="row">
                  <div class="col-md-6">
                     <div class="glimps-card light-blue">
                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                           Language
                        </h2>
                        <div class="glimps-graph-wrap">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="glimps-graph">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','cards')">Data</button>                                                                
                                    <div id="CardsNationalLanguageBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card light-pink">
                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> 
                           Mathematics
                        </h2>
                        <div class="glimps-graph-wrap">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="glimps-graph">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards')">Data</button>
                                    <div id="CardsNationalMathBarGraph_class3"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card light-yellow">
                        <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> 
                           EVS
                        </h2>
                        <div class="glimps-graph-wrap">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="glimps-graph">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','cards')">Data</button>
                                    <div id="CardsNationalEvsBarGraph_class3"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="accordion commonAccordion" id="nc3-perAccordion">
               <div class="accordion-item mtb-30" id="gendernational_section_glimpses_class3">
                  <h2 class="accordion-header" id="nc3-perAccordionOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc3-perAccordioncollapseOne">
                     Performance of States by Gender
                     </button>
                  </h2>
                  <div id="nc3-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc3-perAccordionOne" data-bs-parent="#nc3-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','gender')">Data</button>
                                    <div id="GenderNationalLanguageBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> 
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','gender')">Data</button>
                                    <div id="GenderNationalMathBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','gender')">Data</button>
                                    <div id="GenderNationalEvsBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="locationnational_section_glimpses_class3">
                  <h2 class="accordion-header" id="nc3-perAccordionTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapseTwo" aria-expanded="true" aria-controls="nc3-perAccordioncollapseTwo">
                     Performance of States by Location
                     </button>
                  </h2>
                  <div id="nc3-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc3-perAccordionTwo" data-bs-parent="#nc3-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','location')">Data</button>
                                    <div id="LocationNationalLanguageBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> 
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','location')">Data</button>
                                    <div id="LocationNationalMathBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','location')">Data</button>
                                    <div id="LocationNationalEvsBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="managementnational_section_glimpses_class3">
                  <h2 class="accordion-header" id="nc3-perAccordionThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapseThree" aria-expanded="true" aria-controls="nc3-perAccordioncollapseThree">
                     Performance of States by School Management
                     </button>
                  </h2>
                  <div id="nc3-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc3-perAccordionThree" data-bs-parent="#nc3-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalLanguageBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> 
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalMathBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalEvsBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="socialnational_section_glimpses_class3">
                  <h2 class="accordion-header" id="nc3-perAccordionfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc3-perAccordioncollapsefour" aria-expanded="true" aria-controls="nc3-perAccordioncollapsefour">
                     Performance by Social Group
                     </button>
                  </h2>
                  <div id="nc3-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc3-perAccordionfour" data-bs-parent="#nc3-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <div class="glimpse-table table-responsive" id="SocialNationalLanguageBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> 
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="SocialNationalMathBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <div class="glimpse-table table-responsive" id="SocialNationalEvsBarGraph_class3">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="tab-pane fade" id="glimpsesnational_class5" role="tabpanel" aria-labelledby="nc5-result-tab">
   <div class="nc5-result-wrap">
      <div class="row">
         <div class="col-md-12">
            <h2 class="heading-grey text-center">
               PERFORMANCE OF STATES
            </h2>
            <div class="glimps-wrap">
               <div class="row">
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                           Language
                        </h2>
                        <div class="glimps-graph-wrap light-blue">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','cards')">Data</button>
                           <div id="CardsNationalLanguageBarGraph_class5">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                           Mathematics
                        </h2>
                        <div class="glimps-graph-wrap light-pink">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards')">Data</button>
                           <div id="CardsNationalMathBarGraph_class5"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid">
                           EVS
                        </h2>
                        <div class="glimps-graph-wrap light-yellow">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','cards')">Data</button>
                           <div id="CardsNationalEvsBarGraph_class5"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="accordion commonAccordion" id="nc5-perAccordion">
               <div class="accordion-item mtb-30" id="gendernational_section_glimpses_class5">
                  <h2 class="accordion-header" id="nc5-perAccordionOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc5-perAccordioncollapseOne">
                     Performance of States by Gender
                     </button>
                  </h2>
                  <div id="nc5-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc5-perAccordionOne" data-bs-parent="#nc5-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> 
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','gender')">Data</button>
                                    <div id="GenderNationalLanguageBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','gender')">Data</button>
                                    <div id="GenderNationalMathBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid">
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','gender')">Data</button>
                                    <div id="GenderNationalEvsBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="locationnational_section_glimpses_class5">
                  <h2 class="accordion-header" id="nc5-perAccordionTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapseTwo" aria-expanded="true" aria-controls="nc5-perAccordioncollapseTwo">
                     Performance of States by Location
                     </button>
                  </h2>
                  <div id="nc5-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc5-perAccordionTwo" data-bs-parent="#nc5-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','location')">Data</button>
                                    <div id="LocationNationalLanguageBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','location')">Data</button>
                                    <div id="LocationNationalMathBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid">
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','location')">Data</button>
                                    <div id="LocationNationalEvsBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="managementnational_section_glimpses_class5">
                  <h2 class="accordion-header" id="nc5-perAccordionThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapseThree" aria-expanded="true" aria-controls="nc5-perAccordioncollapseThree">
                     Performance of States by School Management
                     </button>
                  </h2>
                  <div id="nc5-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc5-perAccordionThree" data-bs-parent="#nc5-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalLanguageBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalMathBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid">
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalEvsBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="socialnational_section_glimpses_class5">
                  <h2 class="accordion-header" id="nc5-perAccordionfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc5-perAccordioncollapsefour" aria-expanded="true" aria-controls="nc5-perAccordioncollapsefour">
                     Performance by Social Group
                     </button>
                  </h2>
                  <div id="nc5-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc5-perAccordionfour" data-bs-parent="#nc5-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <div class="glimpse-table table-responsive" id="SocialNationalLanguageBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="SocialNationalMathBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid">
                                    EVS
                                 </h2>
                                 <div class="glimps-graph-wrap light-yellow">
                                    <div class="glimpse-table table-responsive" id="SocialNationalEvsBarGraph_class5">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="tab-pane fade" id="glimpsesnational_class8" role="tabpanel" aria-labelledby="nc8-result-tab">
   <div class="nc8-result-wrap">
      <div class="row">
         <div class="col-md-12">
            <h2 class="heading-grey text-center">
               PERFORMANCE OF STATES
            </h2>
            <div class="glimps-wrap">
               <div class="row">
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                           Language
                        </h2>
                        <div class="glimps-graph-wrap light-blue">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','cards')">Data</button>
                           <div id="CardsNationalLanguageBarGraph_class8">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                           Social Science
                        </h2>
                        <div class="glimps-graph-wrap light-green">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','cards')">Data</button>
                           <div id="CardsNationalSocialBarGraph_class8">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                           Science
                        </h2>
                        <div class="glimps-graph-wrap light-sagegreen">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','cards')">Data</button>
                           <div id="CardsNationalScienceBarGraph_class8">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                           Mathematics
                        </h2>
                        <div class="glimps-graph-wrap light-pink">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards')">Data</button>
                           <div id="CardsNationalMathBarGraph_class8">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="accordion commonAccordion" id="nc8-perAccordion">
               <div class="accordion-item mtb-30" id="gendernational_section_glimpses_class8">
                  <h2 class="accordion-header" id="nc8-perAccordionOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc8-perAccordioncollapseOne">
                     Performance of States by Gender
                     </button>
                  </h2>
                  <div id="nc8-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc8-perAccordionOne" data-bs-parent="#nc8-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','gender')">Data</button>
                                    <div id="GenderNationalLanguageBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','gender')">Data</button>
                                    <div id="GenderNationalSocialBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','gender')">Data</button>
                                    <div id="GenderNationalScienceBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','gender')">Data</button>
                                    <div id="GenderNationalMathBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="locationnational_section_glimpses_class8">
                  <h2 class="accordion-header" id="nc8-perAccordionTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseTwo" aria-expanded="true" aria-controls="nc8-perAccordioncollapseTwo">
                     Performance of States by Location
                     </button>
                  </h2>
                  <div id="nc8-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc8-perAccordionTwo" data-bs-parent="#nc8-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','location')">Data</button>
                                    <div id="LocationNationalLanguageBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','location')">Data</button>
                                    <div id="LocationNationalSocialBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','location')">Data</button>
                                    <div id="LocationNationalScienceBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','location')">Data</button>
                                    <div id="LocationNationalMathBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="managementnational_section_glimpses_class8">
                  <h2 class="accordion-header" id="nc8-perAccordionThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapseThree" aria-expanded="true" aria-controls="nc8-perAccordioncollapseThree">
                     Performance of States by School Management
                     </button>
                  </h2>
                  <div id="nc8-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc8-perAccordionThree" data-bs-parent="#nc8-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalLanguageBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalSocialBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalScienceBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalMathBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30">
                  <h2 class="accordion-header" id="nc8-perAccordionfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc8-perAccordioncollapsefour" aria-expanded="true" aria-controls="nc8-perAccordioncollapsefour">
                     Performance by Social Group
                     </button>
                  </h2>
                  <div id="nc8-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc8-perAccordionfour" data-bs-parent="#nc8-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid">
                                    Language
                                 </h2>
                                 <div class="glimps-graph-wrap light-blue">
                                    <div class="glimpse-table table-responsive" id="SocialNationalLanguageBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <div class="glimpse-table table-responsive" id="SocialNationalSocialBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <div class="glimpse-table table-responsive" id="SocialNationalScienceBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="SocialNationalMathBarGraph_class8">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="tab-pane fade" id="glimpsesnational_class10" role="tabpanel" aria-labelledby="nc10-result-tab">
   <div class="nc10-result-wrap">
      <div class="row">
         <div class="col-md-12">
            <h2 class="heading-grey text-center">
               PERFORMANCE OF STATES
            </h2>
            <div class="glimps-wrap">
               <div class="row">
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid">
                           MIL
                        </h2>
                        <div class="glimps-graph-wrap light-red">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('mil','cards')">Data</button>
                           <div id="CardsNationalMilBarGraph_class10"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                           Social Science
                        </h2>
                        <div class="glimps-graph-wrap light-green">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','cards')">Data</button>
                           <div id="CardsNationalSocialBarGraph_class10"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid">
                           English
                        </h2>
                        <div class="glimps-graph-wrap light-purple">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('eng','cards')">Data</button>
                           <div id="CardsNationalEnglishBarGraph_class10"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                           Science
                        </h2>
                        <div class="glimps-graph-wrap light-sagegreen">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','cards')">Data</button>
                           <div id="CardsNationalScienceBarGraph_class10"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="glimps-card">
                        <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                           Mathematics
                        </h2>
                        <div class="glimps-graph-wrap light-pink">
                           <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards')">Data</button>
                           <div id="CardsNationalMathBarGraph_class10"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="accordion commonAccordion" id="nc10-perAccordion">
               <div class="accordion-item mtb-30" id="gendernational_section_glimpses_class10">
                  <h2 class="accordion-header" id="nc10-perAccordionOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapseOne" aria-expanded="true" aria-controls="nc10-perAccordioncollapseOne">
                     Performance of States by Gender
                     </button>
                  </h2>
                  <div id="nc10-perAccordioncollapseOne" class="accordion-collapse collapse show" aria-labelledby="nc10-perAccordionOne" data-bs-parent="#nc10-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid">
                                    MIL
                                 </h2>
                                 <div class="glimps-graph-wrap light-red">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('mil','gender')">Data</button>
                                    <div id="GenderNationalMilBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','gender')">Data</button>
                                    <div id="GenderNationalSocialBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid">
                                    English
                                 </h2>
                                 <div class="glimps-graph-wrap light-purple">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('eng','gender')">Data</button>
                                    <div id="GenderNationalEnglishBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','gender')">Data</button>
                                    <div id="GenderNationalScienceBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','gender')">Data</button>
                                    <div id="GenderNationalMathBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="locationnational_section_glimpses_class10">
                  <h2 class="accordion-header" id="nc10-perAccordionTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapseTwo" aria-expanded="false" aria-controls="nc10-perAccordioncollapseTwo">
                     Performance of States by Location
                     </button>
                  </h2>
                  <div id="nc10-perAccordioncollapseTwo" class="accordion-collapse collapse" aria-labelledby="nc10-perAccordionTwo" data-bs-parent="#nc10-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid">
                                    MIL
                                 </h2>
                                 <div class="glimps-graph-wrap light-red">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('mil','location')">Data</button>
                                    <div id="LocationNationalMilBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','location')">Data</button>
                                    <div id="LocationNationalSocialBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid">
                                    English
                                 </h2>
                                 <div class="glimps-graph-wrap light-purple">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('eng','location')">Data</button>
                                    <div id="LocationNationalEnglishBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','location')">Data</button>
                                    <div id="LocationNationalScienceBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','location')">Data</button>
                                    <div id="LocationNationalMathBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="managementnational_section_glimpses_class10">
                  <h2 class="accordion-header" id="nc10-perAccordionThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapseThree" aria-expanded="false" aria-controls="nc10-perAccordioncollapseThree">
                     Performance of States by School Management
                     </button>
                  </h2>
                  <div id="nc10-perAccordioncollapseThree" class="accordion-collapse collapse" aria-labelledby="nc10-perAccordionThree" data-bs-parent="#nc10-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid">
                                    MIL
                                 </h2>
                                 <div class="glimps-graph-wrap light-red">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalMilBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalSocialBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid">
                                    English
                                 </h2>
                                 <div class="glimps-graph-wrap light-purple">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalEnglishBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalScienceBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="ManagementNationalMathBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30">
                  <h2 class="accordion-header" id="nc10-perAccordionfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nc10-perAccordioncollapsefour" aria-expanded="false" aria-controls="nc10-perAccordioncollapsefour">
                     Performance by Social Group
                     </button>
                  </h2>
                  <div id="nc10-perAccordioncollapsefour" class="accordion-collapse collapse" aria-labelledby="nc10-perAccordionfour" data-bs-parent="#nc10-perAccordion">
                     <div class="accordion-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid">
                                    MIL
                                 </h2>
                                 <div class="glimps-graph-wrap light-red">
                                    <div class="glimpse-table table-responsive" id="SocialNationalMilBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid">
                                    Social Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-green">
                                    <div class="glimpse-table table-responsive" id="SocialNationalSocialBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid">
                                    English
                                 </h2>
                                 <div class="glimps-graph-wrap light-purple">
                                    <div class="glimpse-table table-responsive" id="SocialNationalEnglishBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid">
                                    Science
                                 </h2>
                                 <div class="glimps-graph-wrap light-sagegreen">
                                    <div class="glimpse-table table-responsive" id="SocialNationalScienceBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="glimps-card">
                                 <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35">
                                    Mathematics
                                 </h2>
                                 <div class="glimps-graph-wrap light-pink">
                                    <div class="glimpse-table table-responsive" id="SocialNationalMathBarGraph_class10">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="tab-pane fade" id="glimpsesnational_classall" role="tabpanel" aria-labelledby="nac-result-tab">
<div class="nac-result-wrap">
   <div class="row">
      <div class="col-md-12">
         <h2 class="heading-grey text-center">
            PERFORMANCE OF STATES
         </h2>
         <div class="graph-card-container graph-linecard-container mtb-30">
            <div class="row">
               <div class="col-md-12 p-0">
                  <div class="graph-card">
                     <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid"> Language</h2>
                     <div class="graph-card-content light-blue">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-blue">
                                    CLASS 3
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','cards',3)">Data</button>                                                                      </h3>
                                    <div id="CardsNational3LanguageBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-blue">
                                    CLASS 5
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','cards',5)">Data</button>
                                    <div id="CardsNational5LanguageBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-blue">
                                    CLASS 8
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-blue">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('language','cards',8)">Data</button>
                                    <div id="CardsNational8LanguageBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 p-0">
                  <div class="graph-card">
                     <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                     <div class="graph-card-content light-pink">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-pink">
                                    CLASS 3
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards',3)">Data</button>
                                    <div id="CardsNational3MathBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-pink">
                                    CLASS 5
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards',5)">Data</button>
                                    <div id="CardsNational5MathBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-pink">
                                    CLASS 8
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards',8)">Data</button>
                                    <div id="CardsNational8MathBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-pink">
                                    CLASS 10
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-pink">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('math','cards',10)">Data</button>
                                    <div id="CardsNational10MathBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 p-0">
                  <div class="graph-card">
                     <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid"> EVS</h2>
                     <div class="graph-card-content light-yellow">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-yellow">
                                    CLASS 3
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-yellow">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','cards',3)">Data</button>
                                    <div id="CardsNational3EvsBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-yellow">
                                    CLASS 5
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-yellow">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('evs','cards',5)">Data</button>
                                    <div id="CardsNational5EvsBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 p-0">
                  <div class="graph-card">
                     <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}" alt="icon" class="img-fluid"> Science</h2>
                     <div class="graph-card-content light-sagegreen">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-sagegreen">
                                    CLASS 8
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-sagegreen">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','cards',8)">Data</button>
                                    <div id="CardsNational8ScienceBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-sagegreen">
                                    CLASS 10
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-sagegreen">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sci','cards',10)">Data</button>
                                    <div id="CardsNational10ScienceBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 p-0">
                  <div class="graph-card">
                     <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}" alt="icon" class="img-fluid"> Social Science</h2>
                     <div class="graph-card-content light-green">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-green">
                                    CLASS 8
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-green">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','cards',8)">Data</button>
                                    <div id="CardsNational8SocialBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-green">
                                    CLASS 10
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-green">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('sst','cards',10)">Data</button>
                                    <div id="CardsNational10SocialBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 p-0">
                  <div class="graph-card">
                     <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon" class="img-fluid"> MIL</h2>
                     <div class="graph-card-content light-red">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-red">
                                    CLASS 10
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-red">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('mil','cards',10)">Data</button>
                                    <div id="CardsNational10MilBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 p-0">
                  <div class="graph-card">
                     <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}" alt="icon" class="img-fluid"> English</h2>
                     <div class="graph-card-content light-purple">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="sac-lo-classtitle-wrap">
                                 <h3 class="sac-lo-classtitle title-purple">
                                    CLASS 10
                                 </h3>
                              </div>
                              <div class="glimps-card">
                                 <div class="glimps-graph light-purple">
                                    <button class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="getGlimpsesData('eng','cards',10)">Data</button>
                                    <div id="CardsNational10EnglishBarGraph_classall"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <h2 class="heading-grey text-center">
               AVERAGE PERFORMANCE
            </h2>
            <div class="accordion commonAccordion" id="test">
               <div class="accordion-item mtb-30" id="gendernational_section_glimpses_classall">
                  <h2 class="accordion-header" id="One">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetestOne"
                        aria-expanded="true" aria-controls="collapsetestOne">
                     Performance of States by Gender
                     </button>
                  </h2>
                  <div id="collapsetestOne" class="accordion-collapse collapse show" aria-labelledby="One" data-bs-parent="#test">
                     <div class="accordion-body">
                        <div class="graph-card-container graph-linecard-container">
                           <div class="row">
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}"
                                       alt="icon" class="img-fluid"> Language</h2>
                                    <div class="graph-card-content light-blue">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15"
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('language','gender',3)">Data</button>
                                                   </h3>
                                                   <div id="GenderNational3LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('language','gender',5)">Data</button>
                                                   <div id="GenderNational5LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('language','gender',8)">Data</button>
                                                   <div id="GenderNational8LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}"
                                       alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                    <div class="graph-card-content light-pink">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','gender',3)">Data</button>
                                                   <div id="GenderNational3MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','gender',5)">Data</button>
                                                   <div id="GenderNational5MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','gender',8)">Data</button>
                                                   <div id="GenderNational8MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','gender',10)">Data</button>
                                                   <div id="GenderNational10MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}"
                                       alt="icon" class="img-fluid"> EVS</h2>
                                    <div class="graph-card-content light-yellow">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('evs','gender',3)">Data</button>
                                                   <div id="GenderNational3EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('evs','gender',5)">Data</button>
                                                   <div id="GenderNational5EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}"
                                       alt="icon" class="img-fluid"> Science</h2>
                                    <div class="graph-card-content light-sagegreen">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sci','gender',8)">Data</button>
                                                   <div id="GenderNational8ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sci','gender',10)">Data</button>
                                                   <div id="GenderNational10ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}"
                                       alt="icon" class="img-fluid"> Social Science</h2>
                                    <div class="graph-card-content light-green">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sst','gender',8)">Data</button>
                                                   <div id="GenderNational8SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sst','gender',10)">Data</button>
                                                   <div id="GenderNational10SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon"
                                       class="img-fluid"> MIL</h2>
                                    <div class="graph-card-content light-red">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-red">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-red">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('mil','gender',10)">Data</button>
                                                   <div id="GenderNational10MilBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}"
                                       alt="icon" class="img-fluid"> English</h2>
                                    <div class="graph-card-content light-purple">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-purple">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-purple">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('eng','gender',10)">Data</button>
                                                   <div id="GenderNational10EnglishBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="locationnational_section_glimpses_classall">
                  <h2 class="accordion-header" id="Two">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsetestTwo" aria-expanded="false" aria-controls="collapsetestTwo">
                     Performance of States by Location
                     </button>
                  </h2>
                  <div id="collapsetestTwo" class="accordion-collapse collapse" aria-labelledby="Two" data-bs-parent="#test">
                     <div class="accordion-body">
                        <div class="graph-card-container graph-linecard-container">
                           <div class="row">
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}"
                                       alt="icon" class="img-fluid"> Language</h2>
                                    <div class="graph-card-content light-blue">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('language','location',3)">Data</button>
                                                   <div id="LocationNational3LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('language','location',5)">Data</button>
                                                   <div id="LocationNational5LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('language','location',8)">Data</button>
                                                   <div id="LocationNational8LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}"
                                       alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                    <div class="graph-card-content light-pink">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','location',3)">Data</button>
                                                   <div id="LocationNational3MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','location',5)">Data</button>
                                                   <div id="LocationNational5MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','location',8)">Data</button>
                                                   <div id="LocationNational8MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('math','location',10)">Data</button>
                                                   <div id="LocationNational10MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}"
                                       alt="icon" class="img-fluid"> EVS</h2>
                                    <div class="graph-card-content light-yellow">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('evs','location',3)">Data</button>
                                                   <div id="LocationNational3EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('evs','location',5)">Data</button>
                                                   <div id="LocationNational5EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}"
                                       alt="icon" class="img-fluid"> Science</h2>
                                    <div class="graph-card-content light-sagegreen">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sci','location',8)">Data</button>
                                                   <div id="LocationNational8ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sci','location',10)">Data</button>
                                                   <div id="LocationNational10ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}"
                                       alt="icon" class="img-fluid"> Social Science</h2>
                                    <div class="graph-card-content light-green">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sst','location',8)">Data</button>
                                                   <div id="LocationNational8SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('sst','location',10)">Data</button>
                                                   <div id="LocationNational10SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon"
                                       class="img-fluid"> MIL</h2>
                                    <div class="graph-card-content light-red">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-red">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-red">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('mil','location',10)">Data</button>
                                                   <div id="LocationNational10MilBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}"
                                       alt="icon" class="img-fluid"> English</h2>
                                    <div class="graph-card-content light-purple">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-purple">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-purple">
                                                   <button
                                                      class="btn btn-sm org-btn float-end m-auto overflow-hidden p-5-15 "
                                                      data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                      onclick="getGlimpsesData('eng','location',10)">Data</button>
                                                   <div id="LocationNational10EnglishBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30" id="managementnational_section_glimpses_classall">
                  <h2 class="accordion-header" id="Three">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsetestThree" aria-expanded="false" aria-controls="collapsetestThree">
                     Performance of States by School Management
                     </button>
                  </h2>
                  <div id="collapsetestThree" class="accordion-collapse collapse" aria-labelledby="Three" data-bs-parent="#test">
                     <div class="accordion-body">
                        <div class="graph-card-container graph-linecard-container">
                           <div class="row">
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}"
                                       alt="icon" class="img-fluid"> Language</h2>
                                    <div class="graph-card-content light-blue">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational3LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational5LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational8LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}"
                                       alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                    <div class="graph-card-content light-pink">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational3MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational5MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational8MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational10MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}"
                                       alt="icon" class="img-fluid"> EVS</h2>
                                    <div class="graph-card-content light-yellow">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational3EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational5EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}"
                                       alt="icon" class="img-fluid"> Science</h2>
                                    <div class="graph-card-content light-sagegreen">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational8ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational10ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}"
                                       alt="icon" class="img-fluid"> Social Science</h2>
                                    <div class="graph-card-content light-green">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational8SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational10SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon"
                                       class="img-fluid"> MIL</h2>
                                    <div class="graph-card-content light-red">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-red">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-red">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational10MilBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}"
                                       alt="icon" class="img-fluid"> English</h2>
                                    <div class="graph-card-content light-purple">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-purple">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-purple">
                                                   <div class="glimpse-table table-responsive"
                                                      id="ManagementNational10EnglishBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item mtb-30">
                  <h2 class="accordion-header" id="four">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsetestfour" aria-expanded="false" aria-controls="collapsetestfour">
                     Performance by Social Group
                     </button>
                  </h2>
                  <div id="collapsetestfour" class="accordion-collapse collapse" aria-labelledby="four" data-bs-parent="#test">
                     <div class="accordion-body">
                        <div class="graph-card-container graph-linecard-container">
                           <div class="row">
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-blue"><img src="{{asset('assets/front/images/globe-icon.svg')}}"
                                       alt="icon" class="img-fluid"> Language</h2>
                                    <div class="graph-card-content light-blue">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational3LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational5LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-blue">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-blue">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational8LanguageBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-pink"><img src="{{asset('assets/front/images/math-icon.svg')}}"
                                       alt="icon" class="img-fluid" width="35"> Mathematics</h2>
                                    <div class="graph-card-content light-pink">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational3MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational5MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational8MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-pink">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-pink">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational10MathBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-yellow"><img src="{{asset('assets/front/images/evs-icon.svg')}}"
                                       alt="icon" class="img-fluid"> EVS</h2>
                                    <div class="graph-card-content light-yellow">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 3
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational3EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-yellow">
                                                   CLASS 5
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-yellow">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational5EvsBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-sagegreen"><img src="{{asset('assets/front/images/science.svg')}}"
                                       alt="icon" class="img-fluid"> Science</h2>
                                    <div class="graph-card-content light-sagegreen">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational8ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-sagegreen">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-sagegreen">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational10ScienceBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-green"><img src="{{asset('assets/front/images/social-sci.svg')}}"
                                       alt="icon" class="img-fluid"> Social Science</h2>
                                    <div class="graph-card-content light-green">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 8
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational8SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-green">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-green">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational10SocialBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-red"><img src="{{asset('assets/front/images/mil-icon.svg')}}" alt="icon"
                                       class="img-fluid"> MIL</h2>
                                    <div class="graph-card-content light-red">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-red">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-red">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational10MilBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 p-0">
                                 <div class="graph-card">
                                    <h2 class="card-purple"><img src="{{asset('assets/front/images/english-icon.svg')}}"
                                       alt="icon" class="img-fluid"> English</h2>
                                    <div class="graph-card-content light-purple">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="sac-lo-classtitle-wrap">
                                                <h3 class="sac-lo-classtitle title-purple">
                                                   CLASS 10
                                                </h3>
                                             </div>
                                             <div class="glimps-card">
                                                <div class="glimps-graph light-purple">
                                                   <div class="glimpse-table table-responsive"
                                                      id="SocialNational10EnglishBarGraph_classall"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
<div class="modal fade" id="staticBackdrop">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body p-0">
            <div class="">
               <div class="card">
                  <div class="card-header glimpse-header d-flex justify-content-between">
                     <div id="data-header">Display Data</div>
                     <span class="material-icons-round glimpses-close-btn" data-bs-dismiss="modal">
                     close
                     </span>
                  </div>
                  <div class="card-body glimpse-body">
                     <div class="glimpse-table table-responsive">
                        <table class="table" id="display_data">
                           <thead>
                              <tr>
                                 <th scope="col">State/Union Territory</th>
                                 <th scope="col">Mean</th>
                                 <th scope="col">SE</th>
                                 <th scope="col"></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Andhra Pradesh</td>
                                 <td>238</td>
                                 <td>1</td>
                                 <td>
                                    <div class="icon-status icon-color-red">
                                       <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                          <path class="heroicon-ui" d="M11 18.59V3a1 1 0 0 1 2 0v15.59l5.3-5.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-7-7a1 1 0 0 1 1.4-1.42l5.3 5.3z"/>
                                       </svg>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div> -->
      </div>
   </div>
</div>