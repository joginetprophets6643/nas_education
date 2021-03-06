@include('front.includes.header')
@include('front.includes.nav')

  <body>
    <section class="report-card-wrap bg-grey pb-60">
        <div class="top-content">
            <h2 class="heading-black">
            {{ __('lang.Visualization') }}
            </h2>
            <div class="breadcrum-wrap breadcrum-grey">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Visualization') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="sidebar-wrap d-md-block collapse" id="sideBar"> 
                <div class="ranking-wrap">
                    <ul>
                        <li>
                            <a href="#">Andhra Pradesh</a>
                        </li>
                        <li>
                            <a href="#">Kadapa</a>
                        </li>
                    </ul>
                    <div class="counter">
                        <span class="count">22</span>
                        <p class="text-grey">District Ranking in NAS</p>
                    </div>
                </div> 
                <div  class="sidebar-accordion">
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-header" id="accordionOne">
                                <a href="#">
                                    State
                                </a>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="material-icons-round minus">
                                        remove_circle_outline
                                    </span>
                                    <span class="material-icons-round plus">
                                        add_circle_outline
                                    </span>
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="accordionOne">
                            <div class="accordion-body">
                                <div class="state-list">
                                    <ul>
                                    <li>
                                        <a href='#' class="active" id="showDistrict">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Andhra Pradesh
                                        </a>
                                        <div class="district-list">
                                            <div class="d-flex align-items-center justify-content-between pb-15">
                                            <h2>
                                                Andhra Pradesh
                                            </h2>
                                            <button class="close-btn" id="close_btn">
                                                <span class="material-icons-round">
                                                highlight_off
                                                </span>
                                            </button>
                                            </div>
                                            
                                            <ul>
                                            <li>
                                                <a href="#">Anantapur</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active">Kadapa</a>
                                            </li>
                                            <li>
                                                <a href="#">East Godavari</a>
                                            </li>
                                            <li>
                                                <a href="#">Guntur</a>
                                            </li>
                                            <li>
                                                <a href="#">Krishna</a>
                                            </li>
                                            <li>
                                                <a href="#">Kurnool</a>
                                            </li>
                                            <li>
                                                <a href="#">Prakasam</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Arunachal Pradesh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Assam
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Bihar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Chhattisgarh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Goa
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Gujarat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Haryana
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Himachal Pradesh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Jharkhand
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Karnataka
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Kerala
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Madhya Pradesh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Maharashtra
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Manipur
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <span class="material-icons-round radio_checked">
                                            radio_button_checked
                                        </span>
                                        <span class="material-icons-round radio_unchecked">
                                            radio_button_unchecked
                                        </span>
                                        Meghalaya
                                        </a>
                                    </li>
                                    </ul>
                                </div> 
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                          <div class="accordion-header" id="accordionTwo">
                            <a href="#">
                                Subjects
                            </a>
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <span class="material-icons-round minus">
                                    remove_circle_outline
                                </span>
                                <span class="material-icons-round plus">
                                    add_circle_outline
                                </span>
                            </button>
                          </div>
                          <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="accordionTwo">
                            <div class="accordion-body">
                                <div class="side-navlist">
                                    <ul>
                                        <li>
                                            <a href="#" class="active">
                                               <span class="icon-wrap">
                                                    <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="20" /> 
                                               </span>
                                               Language
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                               <span class="icon-wrap">
                                                    <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="25" /> 
                                               </span>
                                               Mathematics   
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                               <span class="icon-wrap">
                                                    <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" width="25" /> 
                                               </span>
                                               EVS
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <main class="main-content-wrap">
                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sideBar" aria-controls="sideBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="tabs-layer-wrap">
                     <div class="d-flex align-items-center justify-content-between">
                        <ul class="nav nav-tabs tablayerone" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="national-tab" data-bs-toggle="tab" data-bs-target="#national" type="button" role="tab" aria-controls="national" aria-selected="true">National</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="state-tab" data-bs-toggle="tab" data-bs-target="#state" type="button" role="tab" aria-controls="state" aria-selected="false">State</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="district-tab" data-bs-toggle="tab" data-bs-target="#district" type="button" role="tab" aria-controls="district" aria-selected="false">District</button>
                            </li>
                        </ul>
                        <div class="view-wrap">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                              Data View
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Report View
                            </label>
                          </div>
                        </div>
                     </div>
                      <div class="tab-content tablayerone-content">
                        <div class="tab-pane fade" id="national" role="tabpanel" aria-labelledby="national-tab">...</div>
                        <div class="tab-pane fade" id="state" role="tabpanel" aria-labelledby="state-tab">...</div>
                        <div class="tab-pane fade show active" id="district" role="tabpanel" aria-labelledby="district-tab">
                          <ul class="nav nav-tabs tablayertwo mtb-20" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="class3-tab" data-bs-toggle="tab" data-bs-target="#class3" type="button" role="tab" aria-controls="class3" aria-selected="true">class 3</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="class5-tab" data-bs-toggle="tab" data-bs-target="#class5" type="button" role="tab" aria-controls="class5" aria-selected="false">class 5</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="class8-tab" data-bs-toggle="tab" data-bs-target="#class8" type="button" role="tab" aria-controls="class8" aria-selected="false">class 8</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="class10-tab" data-bs-toggle="tab" data-bs-target="#class10" type="button" role="tab" aria-controls="class10" aria-selected="false">class 10</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="allclasses-tab" data-bs-toggle="tab" data-bs-target="#allclasses" type="button" role="tab" aria-controls="allclasses" aria-selected="false">all classes</button>
                            </li>
                          </ul>
                          <div class="tab-content tablayertwo-content">
                            <div class="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
                                <div class="class-content-wrap">
                                    <div class="class-content mb-4">
                                        <div class="row">
                                          <div class="col-md-12">
                                              <h2 class="heading-grey text-center">
                                                Sampling
                                              </h2>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="card-content card-blue">
                                                  <div class="card-icon">
                                                    <svg id="Group_1556" data-name="Group 1556" xmlns="http://www.w3.org/2000/svg" width="81.815" height="72.217" viewBox="0 0 81.815 72.217">
                                                      <path id="Path_31" data-name="Path 31" d="M50.309-437.694v5.827l-4.789,4.79-4.789,4.789v5.088H15.189v38.313H12.594v2.595H40.731v2.2H10v2.793H91.815V-374.1H61.084v-2.2H89.22v-2.595H86.625V-417.2H61.084v-5.088l-4.789-4.79-4.789-4.789v-5.487l2.833-1.417,2.853-1.437L53.9-441.865c-1.816-.9-3.353-1.656-3.432-1.656A50.338,50.338,0,0,0,50.309-437.694ZM53.4-421.61a5.153,5.153,0,0,1,2.494,5.328,4.855,4.855,0,0,1-4.989,4.071,4.581,4.581,0,0,1-3.572-1.417,5.127,5.127,0,0,1,2.434-8.581A5.54,5.54,0,0,1,53.4-421.61ZM25.365-404.529v5.088H20.177v-4.949a47.9,47.9,0,0,1,.139-5.088,12.985,12.985,0,0,1,2.594-.139h2.454v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.742.04.04,5.048H76.45v-10.2l2.554.06,2.535.06ZM49.91-389.064v7.583H45.7l.06-5.747c.06-6.206.04-6.106,1.3-7.782a5.922,5.922,0,0,1,2.614-1.636C49.85-396.647,49.91-395.011,49.91-389.064Zm3.591-6.924a5.271,5.271,0,0,1,2.474,3.652c.06.518.119,3.172.119,5.886v4.969H51.9v-7.583c0-6.066.06-7.583.26-7.583A5.715,5.715,0,0,1,53.5-395.989Zm-28.136,6.825v5.088H20.177v-10.177h5.188v5.088Zm7.583,0v5.088H27.959v-10.177h4.989Zm7.782,0v5.088H35.543v-10.177h5.188Zm25.542,0v5.088H61.084v-10.177h5.188v5.088Zm7.583,0v5.088H68.866v-10.177h4.989Zm7.782,0v5.088H76.45v-10.177h5.188Z" transform="translate(-10 443.521)" fill="#4f83b2"></path>
                                                      <path id="Path_32" data-name="Path 32" d="M459.893-170.95a1.964,1.964,0,0,0-.319,1.3v.978H458.6c-1.058,0-1.616.339-1.616.978,0,.738.639,1.018,2.354,1.018,2.116,0,2.235-.119,2.235-2.295,0-1.756-.24-2.295-1-2.295A1.08,1.08,0,0,0,459.893-170.95Z" transform="translate(-419.664 193.999)" fill="#4f83b2"></path>
                                                    </svg>
  
                                                  </div>
                                                  <div class="card-desc">
                                                      <span class="total-no count">59</span>
                                                      <p class="title">Schools</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="card-content card-pink">
                                              <div class="card-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="71.689" height="53.928" viewBox="0 0 71.689 53.928">
                                                  <g id="fc32e74db624eb16eecc4e3b0a763aea" transform="translate(-10 -131.4)">
                                                    <path id="Path_38" data-name="Path 38" d="M395.5,131.4v24.221l2.765-1.156.015-20.292h37.93v25.011H416.831l-7.286,2.772h29.444V131.4Z" transform="translate(-357.3 0)" fill="#be4e76"></path>
                                                    <path id="Path_39" data-name="Path 39" d="M471.545,242.14a14.311,14.311,0,0,1,.41,1.712c.3,1.536.614,3.124,1.778,3.877a2.423,2.423,0,0,0,1.917.307c2.056-.475,2.685-2.97,3.292-5.391a12,12,0,0,1,1.039-3.087c.461.285,1.229,2.319,1.492,3.014.761,2.012,1.544,4.1,3.168,4.616a2.481,2.481,0,0,0,2.165,0c1.288-.644,1.661-2.253,2.019-3.8.051-.219.117-.5.19-.783.029.132.051.256.073.373.329,1.77.819,4.448,3.431,5.208a5.682,5.682,0,0,0,2.575.088c.315-.044.636-.088.666-.088a2.855,2.855,0,0,1,.819.468,3.812,3.812,0,0,0,2.3.863,3.914,3.914,0,0,0,.4-.022l-.322-2.875c-.161.022-.241,0-.717-.337a5.558,5.558,0,0,0-1.763-.892,5.123,5.123,0,0,0-1.778.029,3.1,3.1,0,0,1-1.346.007c-.856-.249-1.119-1.339-1.419-2.963-.271-1.47-.68-3.694-2.816-3.738-2.114-.051-2.692,2.3-3.087,4.016a13.622,13.622,0,0,1-.461,1.675,10.7,10.7,0,0,1-1.375-2.868c-.849-2.246-1.807-4.791-4.133-4.916-2.524-.139-3.255,2.758-3.9,5.3a17.082,17.082,0,0,1-.951,3.036,15.81,15.81,0,0,1-.4-1.69c-.344-1.763-.819-4.184-3.014-4.184-2.641,0-4.1,3.555-5.384,6.693-.263.636-.5,1.214-.71,1.668l2.6,1.236c.234-.49.49-1.127.783-1.814C469.54,245.739,470.733,242.828,471.545,242.14Z" transform="translate(-422.364 -97.536)" fill="#be4e76"></path>
                                                    <path id="Path_40" data-name="Path 40" d="M50,167.2a11.8,11.8,0,1,0,11.8-11.8A11.8,11.8,0,0,0,50,167.2Z" transform="translate(-37.074 -22.244)" fill="#be4e76"></path>
                                                    <path id="Path_41" data-name="Path 41" d="M55.837,415.2l-19.246,6.372H29.02l-4.5,5.216-4.353-5.216-9.51,1.441L10,444.549h4.053l.19,3.819h21.28l1.061-20.673,21.075-6.979Z" transform="translate(0 -263.039)" fill="#be4e76"></path>
                                                  </g>
                                                </svg>
                                              </div>
                                              <div class="card-desc">
                                                  <span class="total-no count">183</span>
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
                                                      <path id="Path_33" data-name="Path 33" d="M632.572-430.463a6.962,6.962,0,0,0-4.972,6.431,6.7,6.7,0,0,0,6.5,6.5,6.09,6.09,0,0,0,4.813-1.938,5.884,5.884,0,0,0,1.87-5.108,5.865,5.865,0,0,0-1.938-4.173A6.741,6.741,0,0,0,632.572-430.463Z" transform="translate(-572.412 430.665)" fill="#9a975e"></path>
                                                      <path id="Path_34" data-name="Path 34" d="M206.948-424.949a5.069,5.069,0,0,0-3.923,2.189,9.578,9.578,0,0,0-2.759,5.837,29.391,29.391,0,0,1-.661,3.581c-.548,1.938-.594,3.078-.16,3.854l.3.547.889-.8a7.034,7.034,0,0,1,3.193-2.007,3.569,3.569,0,0,1,1.55.776c2.029,1.55,3.238,1.55,5.45,0a4.152,4.152,0,0,1,1.483-.776,8.027,8.027,0,0,1,3.078,2.029c.707.685.889.752,1.072.479.547-.843.525-1.961-.091-4.309a22.286,22.286,0,0,1-.593-3.284,5.125,5.125,0,0,0-.365-1.71,35.027,35.027,0,0,0-3.375-5.245C211.053-424.9,209.456-425.268,206.948-424.949Zm.639,6.431a9.761,9.761,0,0,0,4.264,1.072,5.467,5.467,0,0,1,.958.045c0,.046-.16.616-.319,1.277a8.071,8.071,0,0,1-2.3,3.877,2.851,2.851,0,0,1-2.759.867c-1.574-.319-3.672-3.169-3.809-5.245-.046-.8,0-.867.844-1.164a4.388,4.388,0,0,0,1.459-.889C206.514-419.271,206.583-419.271,207.586-418.518Z" transform="translate(-182.25 425.561)" fill="#9a975e"></path>
                                                      <path id="Path_35" data-name="Path 35" d="M560.921-264.476c-6,1.368-10.012,7.252-10.491,15.439l-.16,2.486h2.987c2.646,0,2.987-.045,3.078-.41.068-.206.3-1.779.5-3.49.41-3.284.57-3.785,1.025-3.512.228.137.274,1,.16,3.809l-.137,3.6h11.836v-.524c0-.273-.115-1.779-.229-3.306a10.055,10.055,0,0,1,.023-3.261c.57-1.095.867-.251,1.459,4.127.206,1.551.388,2.874.434,2.9.045.045,1.368.137,2.987.228l2.919.137-.114-3.17a15.52,15.52,0,0,0-.707-4.994A14.687,14.687,0,0,0,567.281-264,12.5,12.5,0,0,0,560.921-264.476Z" transform="translate(-501.993 279.524)" fill="#9a975e"></path>
                                                      <path id="Path_36" data-name="Path 36" d="M157.372-260.467a22.192,22.192,0,0,0-4.151,4.242c-1.459,2.189-2.508,5.406-4.036,12.178-.091.365.16.41,2.6.41,2.007,0,2.783-.091,3.011-.319a11.933,11.933,0,0,0,.73-3.466c.433-3.261.661-4.082,1.095-3.831.182.114.205,1.277.114,3.763l-.114,3.626,2.645.023c3.421.045,9.031-.046,9.122-.137a31.087,31.087,0,0,0-.16-3.307,26.365,26.365,0,0,1-.091-3.558.5.5,0,0,1,.844-.137c.046.091.342,1.8.616,3.763l.5,3.581h5.816l-.319-1.437c-1.231-5.4-3.421-10.536-5.656-13.25a12.358,12.358,0,0,0-2.029-1.824l-1.231-.844-1.186.8c-1.6,1.094-2.805,1.391-3.991,1.049a7.327,7.327,0,0,1-2.759-1.6C158.535-261.082,158.124-261.013,157.372-260.467Z" transform="translate(-136.733 276.152)" fill="#9a975e"></path>
                                                      <path id="Path_37" data-name="Path 37" d="M26.305-49.884l-5.473.137-.069,1.984c-.069,1.847-.091,1.984-.57,2.053a.51.51,0,0,0-.5.525c0,.639.752.685,6.408.228l4.789-.365,1.368.525,1.346.525-11.788.068L10-44.16v2.942l.98.137a10.631,10.631,0,0,0,1.642.069l.684-.069.069,16.009.046,16.032h3.192V-40.968l.525-.114c.273-.046,1.893-.068,3.581-.046l3.078.046.069.844.069.867H19.578v22.122h2.965l.046-9.533.069-9.51h4.561l.114,7.982c.114,7.914.114,7.982.639,8.734a3.3,3.3,0,0,0,2.942,1.414,3.434,3.434,0,0,0,3.033-1.642c.433-.707.456-1.163.456-8.552v-7.8l.776-.137a4.3,4.3,0,0,1,1.3-.068l.548.068.114,7.982c.114,7.206.16,8.073.525,8.62a3.609,3.609,0,0,0,6.112-.3c.388-.73.433-1.437.433-8.6v-7.823h3.875V-17.48H51.05V-39.6H46.694l.069-.73.069-.752,7.138-.046,7.116-.022v1.778H56.069V-17.25h3.193v-9.578c0-10.81-.228-9.715,1.893-9.442l1.049.16.068,6.865.069,6.865.616,1.026a4.314,4.314,0,0,0,7.48-.046c.57-.98.57-1,.638-7.822.046-4.971.137-6.887.342-7a4.467,4.467,0,0,1,1.459-.182h1.186l.069,7c.069,7,.069,7.024.638,8a4.328,4.328,0,0,0,7.526,0c.57-.98.57-1,.638-8l.069-7h1.574v18.928h3.192l-.046-11.014-.07-10.992-1.756-.069-1.779-.069v-.661c0-.639.046-.661,1.437-.776a31.726,31.726,0,0,1,3.4-.069l2.007.046V-9.27h.752a14.241,14.241,0,0,1,1.6.137l.844.16V-24.96c0-14.345.046-15.964.365-16.1a8.287,8.287,0,0,1,1.71-.137h1.347v-2.965l-11.79-.046-11.813-.068,1.368-.525,1.368-.548L82-44.869a52.121,52.121,0,0,0,5.633.342.592.592,0,0,0-.091-1.117c-.41-.137-.456-.342-.456-1.779a6.367,6.367,0,0,0-.206-1.961c-.16-.251-1.734-.342-8.027-.433-8.438-.137-21.642-.069-21.916.114a5.845,5.845,0,0,0-.182,2.029c0,1.734-.046,1.916-.433,1.916-.5,0-.821.661-.5.98.159.16,1.71.137,4.743-.091,6.02-.433,7.047-.41,8.165.206l.912.479H53.786c-13.934,0-15.781-.022-15.279-.319,1.368-.8,2.12-.821,7.5-.342a54.979,54.979,0,0,0,5.61.319c.5-.206.342-.844-.3-1.117-.456-.206-.5-.365-.5-2.075v-1.846l-3.968-.16c-2.189-.091-5.747-.16-7.936-.16-2.166,0-4.652-.023-5.542-.046C32.509-49.976,29.316-49.952,26.305-49.884Z" transform="translate(-10 83.973)" fill="#9a975e"></path>
                                                    </g>
                                                  </g>
                                                </svg>
  
                                              </div>
                                              <div class="card-desc">
                                                  <span class="total-no count">738</span>
                                                  <p class="title">Students</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="class-content mb-4">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              AVERAGE PERFORMANCE OF STUDENTS
                                            </h2>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="per-card card-blue">
                                                <h2 class="text-center">
                                                  <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="img" class="img-fluid" width="25"> Language
                                                </h2>
                                                <div class="per-card-content dark-blue">
                                                  <div class="per-card-desc">
                                                    <span class="total-no">79%</span>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="per-card card-pink">
                                              <h2 class="text-center">
                                                <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="img" class="img-fluid" width="35"> Mathematics
                                              </h2>
                                              <div class="per-card-content dark-pink">
                                                <div class="per-card-desc">
                                                  <span class="total-no">75%</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="per-card card-yellow">
                                              <h2 class="text-center">
                                                <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="img" class="img-fluid" width="35"> EVS
                                              </h2>
                                              <div class="per-card-content dark-yellow">
                                                <div class="per-card-desc">
                                                  <span class="total-no">85%</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="class5" role="tabpanel" aria-labelledby="class5-tab">...</div>
                            <div class="tab-pane fade" id="class8" role="tabpanel" aria-labelledby="class8-tab">...</div>
                            <div class="tab-pane fade" id="class10" role="tabpanel" aria-labelledby="class10-tab">...</div>
                            <div class="tab-pane fade" id="allclasses" role="tabpanel" aria-labelledby="allclasses-tab">...</div>
                          </div>
                        </div>
                      </div>
                </div>
            </main>
        </div>
    </section>

@include('front.includes.footer')
