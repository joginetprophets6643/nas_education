@include('front.includes.header')
<script>      let token = '{{env("API_TOKEN")}}'  </script>
<style>
    body{
        padding-top: 0px !important;
    }
</style>
<body>                  
<div class="tab-content tablayerthree-content" id="screen-content">     
    <div class="tab-pane fade" id="glimpsesnational_class3" role="tabpanel" aria-labelledby="nc3-result-tab">
        <div class="nc3-result-wrap">
            <div class="row">
            <div class="col-md-12">
                <h2 class="heading-grey text-center">
                Performance of States/UTs
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
                        Performance of States/UTs by Gender
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
                        Performance of States/UTs by Location
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
                        Performance of States/UTs by School Management
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
                        Performance of States/UTs by Social Group
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
                Performance of States/UTs
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
                    Performance of States/UTs by Gender
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
                    Performance of States/UTs by Location
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
                    Performance of States/UTs by School Management
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
                        Performance of States/UTs by Social Group
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
                    Performance of States/UTs
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
                        Performance of States/UTs by Gender
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
                        Performance of States/UTs by Location
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
                        Performance of States/UTs by School Management
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
                        Performance of States/UTs by Social Group
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
                Performance of States/UTs
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
                    Performance of States/UTs by Gender

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
                    Performance of States/UTs by Location
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
                    Performance of States/UTs by School Management
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
                        Performance of States/UTs by Social Group
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
                Performance of States/UTs
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
                            Performance of States/UTs by Gender
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
                            Performance of States/UTs by Location
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
                            Performance of States/UTs by School Management
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
                            Performance of States/UTs by Social Group
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
                    <div class="glimpse-table glimpse-table-modal table-responsive">
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
                                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M11 18.59V3a1 1 0 0 1 2 0v15.59l5.3-5.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-7-7a1 1 0 0 1 1.4-1.42l5.3 5.3z"/></svg>
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
        </div>
    </div>
</div>
<script src="{{asset('assets/front/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/js//highmaps.js')}}"></script>
<script src="{{asset('assets/front/js//exporting.js')}}"></script>
<script src="{{asset('assets/front/js//in-all-disputed.js')}}"></script>
<script src="{{asset('assets/front/js/custom.js')}}"></script>
<script src="{{asset('assets/front/js/district_maps.js')}}"></script>
<script src="{{asset('assets/front/js/states_static.js')}}"></script>
<script>
    let api_url ='{{env("API_URL")}}'
    let classType = '{{$class}}'
    let class_subjects = {
    class_3:['Language','Evs','Math'],
    class_5:['Language','Evs','Math'],
    class_8:['Language','Science','Math','Social'],
    class_10:['Mil','Social','English','Science','Math'],
    class_all:['Mil','Social','English','Science','Math','Language','Evs']
    }
    let subjects_short_codes ={
  math:"math",
  evs:"evs",
  social:'sst',
  language:'language',
  mil:'mil',
  science:'sci',
  english:'eng'
}

let subjects_full_names ={
  math: "Mathematics",
  evs: "EVS",
  sst: "Social Science",
  language: "Language",
  mil: "Mil",
  sci:"Science",
  eng:"English"
}
    $(document).ready(async ()=>{
        $('#glimpsesnational_class'+'{{$class}}').addClass('active show')
        await $.ajax({
        type: "GET",
        headers: {
            "Authorization": "Bearer " + token
        },
        url: api_url + 'state_masters?limit-1&sort[]=state_name',
        }).done((response)=>{
        sessionStorage.setItem('states',JSON.stringify(response.data))
        });
        let filters={}
        if('{{$class}}' != 'all'){
            filters={
                'grade':{
                    '_eq':{{$class}}
                }
            }
        }


        await $.ajax({
        type: "GET",
        headers: {
            "Authorization": "Bearer " + token
        },
        url: api_url + 'national_result_glimpses?filter='+JSON.stringify(filters),
        }).done((response)=>{
            const data =  response.data
            sessionStorage.setItem('glimpses_data', JSON.stringify(data))
            if ('{{$class}}' == 'all') {
                data.forEach(glimpse => {
                createGlimpsesScreen([glimpse])
                })
            } else {
                createGlimpsesScreen(data)
            }
        });

    });

    function createGlimpsesScreen(data){

        let graphs = []

        // sections for performance screen
        const sections = ['Cards','Location','Gender','Management','Social']
        const table_sections = ['Management', 'Social']

        const data_b = data[0]
        // getting subjects for classes
        if(classType === 'all'){
        graphs = class_subjects['class_'+data_b.grade]
        }else{
        graphs = class_subjects['class_'+classType]
        }
        const category_data = JSON.parse(data_b.data)
        
        const colorCode = {
        language: ['#BAD4EC', '#9EC2E4', '#83B1DD', '#6997C3'],
        evs: ['#E5E2AF', '#DAD68F', '#CFCB6F', '#B6B156'],
        math: ['#F4BBCF', '#F09FBB', '#EB84A8', '#D26A8E'],
        social: ['#C7E1C0', '#ABD3A1', '#8FC481', '#68A358'],
        science: ['#B1DEDF', '#8ACDCE', '#63BDBE', '#369B9D'],
        mil: ['#F7C4C3', '#F3A6A5', '#EF8987', '#D4605F'],
        english: ['#E8C7E6', '#DCACD9', '#D190CD', '#B168AD'],
        }

        const section_legends = {
        cards:["Substantially above national average", "Not substantially different from the national average" , "Substantially below national average"],
        gender:["No significant difference between Boys and Girls","Boys perform significantly better than Girls","Girls perform significantly better than Boys"],
        location:["No significant difference between Rural and Urban","Rural perform significantly better than Urban","Urban perform significantly better than Rural"],
        management:["No significant difference between Govt. and Govt. Aided","Govt. perform significantly better than Govt. Aided","Govt. Aided perform significantly better than Govt."],
        socialgroup:["No significant difference between Govt. and Govt. Aided","Govt. perform significantly better than Govt. Aided","Govt. Aided perform significantly better than Govt."],

        }
        sections.forEach(section=>{
        let where = ''
        graphs.forEach(sub=>{
            if(classType !== 'all'){
            where = section+'National' + sub +'BarGraph_class' +classType  
            }else{
            if(section === 'Cards'){
                where = section + 'National' + data_b.grade + sub + 'BarGraph_class' + classType
            }else{
                where = section + 'National' + data[0].grade + sub + 'BarGraph_class' + classType
            }
            }
            const section_data = category_data[subjects_short_codes[sub.toLowerCase()]][section.toLowerCase()]
            const required_colors = colorCode[sub.toLowerCase()]
            if (table_sections.includes(section)) {
                if (classType !== 'all') {
                getGlimpsesData(subjects_short_codes[sub.toLowerCase()], section.toLowerCase(), 'type', where)
                }
                else {
                getGlimpsesData(subjects_short_codes[sub.toLowerCase()], section.toLowerCase(), data_b.grade, where)
                }
            } else {
                generateGlimpsesMap(where, required_colors, section_data, section_legends[section.toLowerCase()])
            }

        })
        })
    }

    // creating glimpses chart
    async function generateGlimpsesMap(where,req_colors,section_data,legends){
        let states = await JSON.parse(sessionStorage.getItem('states'))
        let category1 = []
        let category2 = []
        let category3 = []
        let category4 = []
        await states.map((state,index) =>{
        const type_of_state = getColourOfState(req_colors,state.udise_state_code,section_data)
        let required_data = []
        if(state.state_name === 'Delhi'){
        required_data = ['nct of delhi',state.udise_state_code]
        }else{
        required_data = [ state.state_name.toLowerCase(),state.udise_state_code]
        }
        if(type_of_state.category === 0){
        category1.push(required_data)
        }
        else if(type_of_state.category === 1){
        category2.push(required_data)
        }
        else if(type_of_state.category === 2){
        category3.push(required_data)
        }
        else{
        category4.push(required_data)
        }
        return required_data
        })

        try{
            const states_chart = await Highcharts.mapChart(where, {
                chart: {
                    map: 'countries/in/custom/in-all-disputed',
                    backgroundColor: 'transparent',
                },
                title: {
                    text: ''
                },

                subtitle: {
                    text: ''
                },
                legend: {
                enabled: true,
                },
                tooltip: { 
                enabled: true,
                pointFormat: '{point.name}'
                },
                navigation: {
                    buttonOptions: {
                        enabled: false
                    }
                },
                credits: {
                enabled: false
                },
                plotOptions: {
                series: {
                }
                },
                series: [
                {
                    name: legends[0],
                    data: category1,
                    allAreas: false,
                    allowPointSelect: true,
                    cursor: 'pointer',
                    color:req_colors[0],
                    borderColor: "#6e6f70",
                    states: {
                        hover: {
                            color:'#f7941c'
                        },
                        select: {
                        color: '#9ec2e4'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    },
                },
                {
                    data: category2,
                    name: legends[1],
                    color:req_colors[1],
                    allowPointSelect: true,
                    allAreas: false,
                    cursor: 'pointer',
                    borderColor: "#6e6f70",
                    states: {
                        hover: {
                            color:'#f7941c'
                        },
                        select: {
                        color: '#9ec2e4'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    },
                },
                {
                    data: category3,
                    name: legends[2],
                    color:req_colors[2],

                    allowPointSelect: true,
                    allAreas: false,
                    cursor: 'pointer',
                    borderColor: "#6e6f70",
                    states: {
                        hover: {
                            color:'#f7941c'
                        },
                        select: {
                        color: '#9ec2e4'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    },
                },
                {
                    data: category4,
                    name: legends[3],
                    color:req_colors[3],
                    showInLegend:false,
                    allowPointSelect: true,
                    allAreas: false,
                    cursor: 'pointer',
                    borderColor: "#6e6f70",
                    states: {
                        hover: {
                            color:'#f7941c'
                        },
                        select: {
                        color: '#9ec2e4'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    },
                }
                ]
            });
            if(Object.keys(states_chart).length !== 0){
                states_chart.series.forEach(series=>{
                series.data.forEach(el => {
                const info = getColourOfState(req_colors,el['value'],section_data)
                el.color = info.color
                return el
                })
                })

                states_chart.update({
                series: [{
                data: states_chart.series[0].data
                },
                {
                data: states_chart.series[1].data
                },
                {
                data: states_chart.series[2].data
                },
                {
                data: states_chart.series[3].data
                }]
                })
            }
        }catch(e){
            console.log(e)
        }


    }

    function getColourOfState(req_colors,state_id,section_data){
        let color = ''
        let category = ''
        section_data.forEach(state=>{
        if(state_id === state.state_id){
        color = req_colors[state.category]
        category = state.category
        }
        })
        return {color:color,category: parserInt(category)}
    }

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function setColorCode(sub) {
  const codes = {
    'language': ['#75a9d9', '#e8f0f9'],
    'math': ['#e9769f', '#fee5ee'],
    'evs': ['#cac55f', '#f4f3df'],
    'sci': ['#3cacae', '#d8eeef'],
    'sst': ['#72b562', '#e3f0e0'],
    'eng': ['#c574bf', '#f3e3f2'],
    'mil': ['#eb6c69', '#fbe1e1']
  }

  $('.glimpse-header').css('background-color', codes[sub][0])
  $('.glimpse-body').css('background-color', codes[sub][1])
  $('.glimpse-header').css('color', '#fff')
  $('.glimpse-table .table').css('color', '#5e5e5e')
}

function setModalHeader(data, sub, legend) {
  const subject = {
    'language': 'Language',
    'math': 'Mathematics',
    'evs': 'Evs',
    'sci': 'Science',
    'sst': 'Social Science',
    'eng': 'English',
    'mil': 'Mil'
  }
  if (data.grade == 3) {
    if (legend == 'cards') {
      $('#data-header').html('Performance of States/UTs in Class III : ' + subject[sub].toUpperCase())
    }
    else {
      $('#data-header').html('Performance of States/UTs by ' + capitalizeFirstLetter(legend) + ' in Class III : ' + subject[sub].toUpperCase())
    }

  }
  else if (data.grade == 5) {
    if (legend == 'cards') {
      $('#data-header').html('Performance of States/UTs in Class V : ' + subject[sub].toUpperCase())
    }
    else {
      $('#data-header').html('Performance of States/UTs by ' + capitalizeFirstLetter(legend) + ' in Class V : ' + subject[sub].toUpperCase())
    }

  }
  else if (data.grade == 8) {
    if (legend == 'cards') {
      $('#data-header').html('Performance of States/UTs in Class VIII : ' + subject[sub].toUpperCase())
    }
    else {
      $('#data-header').html('Performance of States/UTs by ' + capitalizeFirstLetter(legend) + ' in Class VIII : ' + subject[sub].toUpperCase())
    }

  }
  else {
    if (legend == 'cards') {
      $('#data-header').html('Performance of States/UTs in Class X : ' + subject[sub].toUpperCase())
    }
    else {
      $('#data-header').html('Performance of States/UTs by ' + capitalizeFirstLetter(legend) + ' in Class X : ' + subject[sub].toUpperCase())
    }

  }
}

function getGlimpsesData(subject, legend, clas = 'type', where) {
  glimpses_data = JSON.parse(sessionStorage.getItem('glimpses_data'))
  
  if ('{{$class}}' == "all" && clas!='type') {
    glimpses_data = glimpses_data.filter((data) => {
      return data.grade == clas
    })
  }
  setModalHeader(glimpses_data[0], subject, legend)
  setColorCode(subject)
  getGlimpsesSubjectData(JSON.parse(glimpses_data[0].data), subject, legend, where)

}

function getGlimpsesSubjectData(data, subject, legend, where) {
  Object.keys(data).forEach((sub) => {
    if (sub == subject) {
      getGlimpsesLegendData(data[sub], legend, where)
    }
  })
}

function getGlimpsesLegendData(data, legend, where) {
  Object.keys(data).forEach((legends) => {
    if (legends == legend) {
      generateGlimpsesTable(data[legend], legend, where)
    }
  })
}

function generateGlimpsesTable(data, legend, where) {
  innerHtml = ''
  let states = JSON.parse(sessionStorage.getItem('states'))
  let current_state = ''
  let exceptions = ['management', 'social']
  innerHtml = setTableHead(legend)
  data.forEach((actual_data) => {
    current_state = states.filter((state) => {
      if (state.udise_state_code == actual_data.state_id) {
        return state.state_name
      }
    })
    state_name = current_state.length != 0 ? current_state[0].state_name : 'National'
    if (legend == 'cards') {
      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data['ss'] != 0 ? Math.round(actual_data['ss']) : '-'}</td>
                  <td>${actual_data['se'] != 0 ? (Math.round(parseFloat(actual_data['se']) * 100) / 100).toFixed(1) : '-'}</td>`
      innerHtml += generateIndictor(actual_data.category)
      innerHtml += '</tr>'

    }
    else if (legend == 'gender') {

      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data['girls_ss'] != 0 ? Math.round(actual_data['girls_ss']) : '-'}</td>
                  <td>${actual_data['boys_ss'] != 0 ? Math.round(actual_data['boys_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.category)
      innerHtml += '</tr>'

    }
    else if (legend == 'location') {

      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data['rural_ss'] != 0 ? Math.round(actual_data['rural_ss']) : '-'}</td>
                  <td>${actual_data['urban_ss'] != 0 ? Math.round(actual_data['urban_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.category)
      innerHtml += '</tr>'

    }
    else if (legend == 'management') {

      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data['govt_ss'] != 0 ? Math.round(actual_data['govt_ss']) : '-'}</td>
                  <td>${actual_data['govt_aided_ss'] != 0 ? Math.round(actual_data['govt_aided_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.category)

      innerHtml += `<td>${actual_data['pvt_ss'] != 0 ? Math.round(actual_data['pvt_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.pvt_category)

      innerHtml += `<td>${actual_data['central_govt_ss'] != 0 ? Math.round(actual_data['central_govt_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.central_govt_category)
      innerHtml += '</tr>'

    }
    else {
      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data['gen_ss'] != 0 ? Math.round(actual_data['gen_ss']) : '-'}</td>
                  <td>${actual_data['sc_ss'] != 0 ? Math.round(actual_data['sc_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.gen_category)

      innerHtml += `<td>${actual_data['st_ss'] != 0 ? Math.round(actual_data['st_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.st_category)

      innerHtml += `<td>${actual_data['obc_ss'] != 0 ? Math.round(actual_data['obc_ss']) : '-'}</td>`

      innerHtml += generateIndictor(actual_data.obc_category)
      innerHtml += '</tr>'

    }

  })

  innerHtml += `</tbody>`
  if (exceptions.includes(legend)) {
    innerHtml += `</table>`
    $('#' + where).html(innerHtml)

  } else {
    $('#display_data').html(innerHtml)
  }
}

function setTableHead(legend) {
  if (legend == 'cards') {

    return `<thead>
              <tr>
                <th scope="col">State/Union Territory</th>
                <th scope="col">Mean</th>
                <th scope="col">SE</th>
                <th scope="col">Significance</th>
              </tr>
            </thead>
            <tbody>`

  }
  else if (legend == 'gender') {

    return `<thead>
              <tr>
                <th scope="col">State/Union Territory</th>
                <th scope="col">Girls</th>
                <th scope="col">Boys</th>
                <th scope="col">Significance</th>
              </tr>
            </thead>
            <tbody>`

  }
  else if (legend == 'location') {

    return `<thead>
              <tr>
                <th scope="col">State/Union Territory</th>
                <th scope="col">Rural</th>
                <th scope="col">Urban</th>
                <th scope="col">Significance</th>
              </tr>
            </thead>
            <tbody>`

  }
  else if (legend == 'management') {

    return `<table class="ms_table table"><thead>
                  <tr>
                    <th scope="col">State/Union Territory</th>
                    <th scope="col">State Govt.</th>
                    <th scope="col">Govt. Aided</th>
                    <th scope="col">Significance</th>
                    <th scope="col">Private Rec.</th>
                    <th scope="col">Significance</th>
                    <th scope="col">Central Govt.</th>
                    <th scope="col">Significance</th>
                  </tr>
                </thead>
                <tbody>`
  }
  else {

    return `<table class="ms_table table"><thead>
                  <tr>
                    <th scope="col">State/Union Territory</th>
                    <th scope="col">General</th>
                    <th scope="col">SC</th>
                    <th scope="col">Significance</th>
                    <th scope="col">ST</th>
                    <th scope="col">Significance</th>
                    <th scope="col">OBC</th>
                    <th scope="col">Significance</th>
                  </tr>
                </thead>
                <tbody>`

  }

}

function generateIndictor(category) {

  innerHtml = ''
  if (category == 0) {
    innerHtml = `<td>
                  <div class="icon-status icon-color-red">
                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M11 18.59V3a1 1 0 0 1 2 0v15.59l5.3-5.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-7-7a1 1 0 0 1 1.4-1.42l5.3 5.3z"/></svg>
                  </div>
                </td>`
  }
  else if (category == 1) {
    innerHtml = `<td>
                  <div class="icon-status icon-color-blue">
                  <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 16" width="32" height="16">
                    <path id="Arrows_Left_x2F_Right" class="s0" d="m0.3 8.7c-0.4-0.4-0.4-1 0-1.4l6.9-7c0.4-0.4 1-0.4 1.4 0 0.4 0.4 0.4 1 0 1.4l-5.2 5.3h25.2l-5.2-5.3c-0.4-0.4-0.4-1 0-1.4 0.4-0.4 1-0.4 1.4 0l6.9 7c0.4 0.4 0.4 1 0 1.4l-6.9 7c-0.4 0.4-1 0.4-1.4 0-0.4-0.4-0.4-1 0-1.4l5.2-5.3h-25.2l5.2 5.3c0.4 0.4 0.4 1 0 1.4-0.4 0.4-1 0.4-1.4 0z"/>
                  </svg>
                  </div>
                </td>`
  }
  else if (category == 2) {
    innerHtml = `<td>
                  <div class="icon-status icon-color-green">
                  <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path id="Layer" class="s0" d="m5.7 10.7q-0.3 0.3-0.7 0.2-0.4 0-0.7-0.3-0.2-0.2-0.2-0.6-0.1-0.4 0.2-0.7l7-7q0.1-0.1 0.3-0.2 0.2-0.1 0.4-0.1 0.2 0 0.4 0.1 0.2 0.1 0.3 0.2l7 7q0.3 0.3 0.2 0.7 0 0.4-0.2 0.6-0.3 0.3-0.7 0.3-0.4 0.1-0.7-0.2l-5.3-5.3v15.6q0 0.4-0.3 0.7-0.3 0.3-0.7 0.3-0.4 0-0.7-0.3-0.3-0.3-0.3-0.7v-15.6z"/>
                  </svg>
                  </div>
                </td>`
  }
  else {
    innerHtml = `<td>
                  -
                </td>`
  }

  return innerHtml;

}

</script>