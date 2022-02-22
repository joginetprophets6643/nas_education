<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 8 HTML to PDF Example</title>
    <!-- <link href="http://nas21.inroad.in/assets/front/scss/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Material Icons -->
    <link rel="stylesheet" href="http://nas21.inroad.in/assets/front/scss/material-icons.css">
    <link rel="stylesheet" href="http://nas21.inroad.in/assets/front/scss/style.css"> 
</head>

<body class="antialiased container p-0">

    
    <section class="reportview-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="reportview-container">
  <!--               <div class="btn-wrap justify-content-between ptb-15">
                  <a href="#" class="btn back-btn">
                    <span class="material-icons-round"> arrow_back_ios_new </span>
                    Back
                  </a>
                  <a href="{{route('download')}}" class="btn btn-blue dl-btn">
                    Download Report
                    <span class="material-icons-round"> file_download </span>
                  </a>
                </div> -->
              <div class="reportview-content-wrap">
                <div class="reportview-content dark-blue-bg">
                  
                  <h2 class="heading-white-xl text-center ptb-30">
                    District Report Card
                  </h2>
                </div>
                <div class="reportview-content light-blue-bg">
                  <div class="row align-items-center">
                    <div class="col-md-5">
                      <div class="map-content text-center">
                        <h2 class="heading-black-xl ptb-15">
                          KADAPA
                          <small>(Andhra Pradesh)</small>
                        </h2>
                        <img src="http://nas21.inroad.in/assets/uploads/program/1720459686885264.png" alt=""/>  
                        <div class="rv-ranking-wrap">
                          <h3 class="title-black-xl ptb-15">
                            District Ranking in NAS
                          </h3>
                          <div
                            class="row align-items-center justify-content-center"
                          >
                            <span class="rv-ranking-box col-md-2">6</span>
                            <span class="rv-ranking-box col-md-2">7</span>
                            <span class="rv-ranking-box col-md-2">1</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="reportview-content dark-blue-bg">
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>
                          Kadapa district is one of the thirteen districts in
                          the Indian state of AP. It is also one of the four
                          districts in the Rayalaseema region of the state.
                        </h2>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Total District Area</h3>
                          <p class="total-no">15,359 sq. km.</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Total Population</h3>
                          <p class="total-no">28,82,000</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Rural Population</h3>
                          <p class="total-no">19,03,337</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Urban Population</h3>
                          <p class="total-no">9,78,132</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Density of Population</h3>
                          <p class="total-no">188 per sq. km.</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Literacy Rate</h3>
                          <p class="total-no">67.3%</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Child Sex Ratio (0-6 Age)</h3>
                          <p class="total-no">918 girls per 1000 boys</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Total number of schools in Kadapa district.</h2>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">No. of Schools</h3>
                          <p class="total-no">15000</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">State Govt Schools</h3>
                          <p class="total-no">6000</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Govt Aided Schools</h3>
                          <p class="total-no">4000</p>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Central Govt Schools</h3>
                          <p class="total-no">3500</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">
                            Private Un-aided Recognized Schools
                          </h3>
                          <p class="total-no">1500</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="infotab-content-wrap">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Total number of teachers in Kadapa district.</h2>
                      </div>
                      <div class="col-md-4">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Teacher In State Govt Schools</h3>
                          <p class="total-no">1000</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Teacher In Govt Aided Schools</h3>
                          <p class="total-no">450</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">Teacher In Central Govt Schools</h3>
                          <p class="total-no">250</p>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="infotab-content light-blue-bg">
                          <h3 class="title">
                            Teacher In Private Unaided Recognized Schools
                          </h3>
                          <p class="total-no">300</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- section  -->
          <div class="reportview-class-content white-bg p-4">
                  <div class="row mt-4">
                    <!-- Gender -->
                    <div class="col-md-8 left mb-4">
                      <h4 class="">Performance by Gender</h4>
                      <div class="row mb-60">
                        <div class="col-md-4 p-0">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level1">
                              <div id="rc3-languageBarGraph1" data-highcharts-chart="3" style="overflow: hidden;"><div id="highcharts-2txeq39-18" style="position: relative; overflow: hidden; width: 242px; height: 300px; text-align: left; line-height: normal; z-index: 0; user-select: none; touch-action: manipulation; outline: currentcolor none medium; left: 0px; top: 0.616699px;" dir="ltr" class="highcharts-container "><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="242" height="300" viewBox="0 0 242 300"><desc>Created with Highcharts 9.3.3</desc><defs><clipPath id="highcharts-2txeq39-19-"><rect x="0" y="0" width="202" height="200" fill="none"></rect></clipPath><clipPath id="highcharts-2txeq39-23-"><rect x="0" y="0" width="202" height="200" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="242" height="300" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="40" y="40" width="202" height="200"></rect><g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1"><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 106.5 40 L 106.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 174.5 40 L 174.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 241.5 40 L 241.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 39.5 40 L 39.5 240" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 40 240.5 L 242 240.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 40 190.5 L 242 190.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 40 140.5 L 242 140.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 40 90.5 L 242 90.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 40 39.5 L 242 39.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="40" y="40" width="202" height="200"></rect><g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 40 240.5 L 242 240.5"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 40 40 L 40 240"></path></g><path fill="none" class="highcharts-crosshair highcharts-crosshair-category" data-z-index="2" stroke="rgba(204,214,235,0.25)" stroke-width="67.33333333333333" style="pointer-events:none;" visibility="hidden" d="M 140.5 40 L 140.5 240"></path><g class="highcharts-series-group" data-z-index="3"><g class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(40,40) scale(1 1)" clip-path="url(#highcharts-2txeq39-23-)"><rect x="15" y="37" width="17" height="164" fill="#527698" opacity="1" class="highcharts-point"></rect><rect x="83" y="45" width="17" height="156" fill="rgb(82,118,152)" opacity="1" class="highcharts-point"></rect><rect x="150" y="45" width="17" height="156" fill="rgb(82,118,152)" opacity="1" class="highcharts-point"></rect></g><g class="highcharts-markers highcharts-series-0 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(40,40) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(40,40) scale(1 1)" clip-path="url(#highcharts-2txeq39-23-)"><rect x="36" y="25" width="17" height="176" fill="#75A9D9" opacity="1" class="highcharts-point"></rect><rect x="103" y="63" width="17" height="138" fill="rgb(117,169,217)" opacity="1" class="highcharts-point"></rect><rect x="170" y="63" width="17" height="138" fill="rgb(117,169,217)" opacity="1" class="highcharts-point"></rect></g><g class="highcharts-markers highcharts-series-1 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(40,40) scale(1 1)" clip-path="none"></g></g><text x="121" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text x="121" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="297"></text><g class="highcharts-data-labels highcharts-series-0 highcharts-column-series highcharts-tracker" data-z-index="6" opacity="1" transform="translate(40,40) scale(1 1)"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(12,14)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">82<tspan x="5" y="16">​</tspan></tspan>82</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(80,22)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">78<tspan x="5" y="16">​</tspan></tspan>78</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(147,22)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">78<tspan x="5" y="16">​</tspan></tspan>78</text></g></g><g class="highcharts-data-labels highcharts-series-1 highcharts-column-series highcharts-tracker" data-z-index="6" opacity="1" transform="translate(40,40) scale(1 1)"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(33,2)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">88<tspan x="5" y="16">​</tspan></tspan>88</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(100,40)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">69<tspan x="5" y="16">​</tspan></tspan>69</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(167,40)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">69<tspan x="5" y="16">​</tspan></tspan>69</text></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="77.33333333333002" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 77.33333333333002 250)" y="250" opacity="1">District</text><text x="144.66666666667" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 144.66666666667 250)" y="250" opacity="1">State</text><text x="212" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 212 250)" y="250" opacity="1">National</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="25" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="245" opacity="1">0</text><text x="25" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="195" opacity="1">25</text><text x="25" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="145" opacity="1">50</text><text x="25" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="95" opacity="1">75</text><text x="25" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="45" opacity="1">100</text></g><text x="232" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="295">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="cursor:default;white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(55,-9999)" opacity="0" visibility="hidden"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#527698" stroke-width="1"></path></g></svg><div class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="position: absolute; left: 55px; top: -9999px; opacity: 0; cursor: default; pointer-events: none; visibility: hidden;"><span style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; white-space: nowrap; color: rgb(51, 51, 51); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" data-z-index="1"><span style="font-size:10px">State</span><table><tbody><tr><td style="color:#527698;padding:0">Boys: </td><td style="padding:0"><b>78%</b></td></tr><tr><td style="color:#75A9D9;padding:0">Girls: </td><td style="padding:0"><b>69%</b></td></tr></tbody></table></span></div></div></div>
                              <div class="category text-center card-blue mx-4">
                                <span class="text-white text-17">Language</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <div class="col-md-4 p-0">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level2">
                              <div id="rc3-mathBarGraph1" data-highcharts-chart="4" style="overflow: hidden;"><div id="highcharts-2txeq39-27" style="position: relative; overflow: hidden; width: 242px; height: 300px; text-align: left; line-height: normal; z-index: 0; user-select: none; touch-action: manipulation; outline: currentcolor none medium; left: 0.333313px; top: 0.616699px;" dir="ltr" class="highcharts-container "><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="242" height="300" viewBox="0 0 242 300"><desc>Created with Highcharts 9.3.3</desc><defs><clipPath id="highcharts-2txeq39-28-"><rect x="0" y="0" width="242" height="200" fill="none"></rect></clipPath><clipPath id="highcharts-2txeq39-32-"><rect x="0" y="0" width="242" height="200" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="242" height="300" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="0" y="40" width="242" height="200"></rect><g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1"><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 80.5 40 L 80.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 160.5 40 L 160.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 241.5 40 L 241.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M -0.5 40 L -0.5 240" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 240.5 L 242 240.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 190.5 L 242 190.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 140.5 L 242 140.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 90.5 L 242 90.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 39.5 L 242 39.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="0" y="40" width="242" height="200"></rect><g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 0 240.5 L 242 240.5"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 0 40 L 0 240"></path></g><path fill="none" class="highcharts-crosshair highcharts-crosshair-category" data-z-index="2" stroke="rgba(204,214,235,0.25)" stroke-width="80.66666666666667" style="pointer-events:none;" visibility="hidden" d="M 120.5 40 L 120.5 240"></path><g class="highcharts-series-group" data-z-index="3"><g class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="url(#highcharts-2txeq39-32-)"><rect x="19" y="37" width="20" height="164" fill="#A3536F" opacity="1" class="highcharts-point"></rect><rect x="99" y="45" width="20" height="156" fill="#A3536F" opacity="1" class="highcharts-point"></rect><rect x="180" y="45" width="20" height="156" fill="#A3536F" opacity="1" class="highcharts-point"></rect></g><g class="highcharts-markers highcharts-series-0 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="url(#highcharts-2txeq39-32-)"><rect x="43" y="25" width="20" height="176" fill="#E9769F" opacity="1" class="highcharts-point"></rect><rect x="123" y="63" width="20" height="138" fill="#E9769F" opacity="1" class="highcharts-point"></rect><rect x="204" y="63" width="20" height="138" fill="#E9769F" opacity="1" class="highcharts-point"></rect></g><g class="highcharts-markers highcharts-series-1 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="none"></g></g><text x="121" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text x="121" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="297"></text><g class="highcharts-data-labels highcharts-series-0 highcharts-column-series highcharts-tracker" data-z-index="6" opacity="1" transform="translate(0,40) scale(1 1)"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(18,14)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">82<tspan x="5" y="16">​</tspan></tspan>82</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(98,22)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">78<tspan x="5" y="16">​</tspan></tspan>78</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(179,22)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">78<tspan x="5" y="16">​</tspan></tspan>78</text></g></g><g class="highcharts-data-labels highcharts-series-1 highcharts-column-series highcharts-tracker" data-z-index="6" opacity="1" transform="translate(0,40) scale(1 1)"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(42,2)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">88<tspan x="5" y="16">​</tspan></tspan>88</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(122,40)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">69<tspan x="5" y="16">​</tspan></tspan>69</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(203,40)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">69<tspan x="5" y="16">​</tspan></tspan>69</text></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="44.000000000000334" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 44.000000000000334 250)" y="250" opacity="1">District</text><text x="124.6666666666633" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 124.6666666666633 250)" y="250" opacity="1">State</text><text x="205.33333333333331" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 205.33333333333331 250)" y="250" opacity="1">National</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="251" opacity="1">0</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="201" opacity="1">25</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="151" opacity="1">50</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="101" opacity="1">75</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="51" opacity="1">100</text></g><text x="232" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="295">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="cursor:default;white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(33,-9999)" opacity="0" visibility="hidden"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#A3536F" stroke-width="1"></path></g></svg><div class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="position: absolute; left: 33px; top: -9999px; opacity: 0; cursor: default; pointer-events: none; visibility: hidden;"><span style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; white-space: nowrap; color: rgb(51, 51, 51); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" data-z-index="1"><span style="font-size:10px">State</span><table><tbody><tr><td style="color:#A3536F;padding:0">Boys: </td><td style="padding:0"><b>78%</b></td></tr><tr><td style="color:#E9769F;padding:0">Girls: </td><td style="padding:0"><b>69%</b></td></tr></tbody></table></span></div></div></div>
                              <div class="category text-center card-pink mx-4">
                                <span class="text-white text-17">Mathematics</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <div class="col-md-4 p-0">
                          <div class="graph-wrap">
                            <figure class="highcharts-figure graph-level3">
                              <div id="rc3-evsBarGraph1" data-highcharts-chart="5" style="overflow: hidden;"><div id="highcharts-2txeq39-36" style="position: relative; overflow: hidden; width: 242px; height: 300px; text-align: left; line-height: normal; z-index: 0; user-select: none; touch-action: manipulation; outline: currentcolor none medium; left: 0.666687px; top: 0.616699px;" dir="ltr" class="highcharts-container "><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="242" height="300" viewBox="0 0 242 300"><desc>Created with Highcharts 9.3.3</desc><defs><clipPath id="highcharts-2txeq39-37-"><rect x="0" y="0" width="242" height="200" fill="none"></rect></clipPath><clipPath id="highcharts-2txeq39-41-"><rect x="0" y="0" width="242" height="200" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="242" height="300" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="0" y="40" width="242" height="200"></rect><g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1"><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 80.5 40 L 80.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 160.5 40 L 160.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 241.5 40 L 241.5 240" opacity="1"></path><path fill="none" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M -0.5 40 L -0.5 240" opacity="1"></path></g><g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1"><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 240.5 L 242 240.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 190.5 L 242 190.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 140.5 L 242 140.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 90.5 L 242 90.5" opacity="1"></path><path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none" data-z-index="1" class="highcharts-grid-line" d="M 0 39.5 L 242 39.5" opacity="1"></path></g><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="0" y="40" width="242" height="200"></rect><g class="highcharts-axis highcharts-xaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 0 240.5 L 242 240.5"></path></g><g class="highcharts-axis highcharts-yaxis" data-z-index="2"><path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 0 40 L 0 240"></path></g><path fill="none" class="highcharts-crosshair highcharts-crosshair-category" data-z-index="2" stroke="rgba(204,214,235,0.25)" stroke-width="80.66666666666667" style="pointer-events:none;" visibility="hidden" d="M 39.5 40 L 39.5 240"></path><g class="highcharts-series-group" data-z-index="3"><g class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="url(#highcharts-2txeq39-41-)"><rect x="19" y="37" width="20" height="164" fill="#8D8A43" opacity="1" class="highcharts-point"></rect><rect x="99" y="45" width="20" height="156" fill="#8D8A43" opacity="1" class="highcharts-point"></rect><rect x="180" y="45" width="20" height="156" fill="#8D8A43" opacity="1" class="highcharts-point"></rect></g><g class="highcharts-markers highcharts-series-0 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="url(#highcharts-2txeq39-41-)"><rect x="43" y="25" width="20" height="176" fill="#CAC55F" opacity="1" class="highcharts-point"></rect><rect x="123" y="63" width="20" height="138" fill="#CAC55F" opacity="1" class="highcharts-point"></rect><rect x="204" y="63" width="20" height="138" fill="#CAC55F" opacity="1" class="highcharts-point"></rect></g><g class="highcharts-markers highcharts-series-1 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(0,40) scale(1 1)" clip-path="none"></g></g><text x="121" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text x="121" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="297"></text><g class="highcharts-data-labels highcharts-series-0 highcharts-column-series highcharts-tracker" data-z-index="6" opacity="1" transform="translate(0,40) scale(1 1)"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(18,14)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round" style="">82<tspan x="5" y="16">​</tspan></tspan>82</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(98,22)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">78<tspan x="5" y="16">​</tspan></tspan>78</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(179,22)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">78<tspan x="5" y="16">​</tspan></tspan>78</text></g></g><g class="highcharts-data-labels highcharts-series-1 highcharts-column-series highcharts-tracker" data-z-index="6" opacity="1" transform="translate(0,40) scale(1 1)"><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(42,2)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">88<tspan x="5" y="16">​</tspan></tspan>88</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(122,40)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">69<tspan x="5" y="16">​</tspan></tspan>69</text></g><g class="highcharts-label highcharts-data-label highcharts-data-label-color-undefined" data-z-index="1" transform="translate(203,40)"><text x="5" data-z-index="1" y="16" style="color:#000000;font-size:11px;font-weight:bold;fill:#000000;"><tspan class="highcharts-text-outline" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px" stroke-linejoin="round">69<tspan x="5" y="16">​</tspan></tspan>69</text></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="44.000000000000334" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 44.000000000000334 250)" y="250" opacity="1">District</text><text x="124.6666666666633" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 124.6666666666633 250)" y="250" opacity="1">State</text><text x="205.33333333333331" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0) rotate(-90 205.33333333333331 250)" y="250" opacity="1">National</text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="251" opacity="1">0</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="201" opacity="1">25</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="151" opacity="1">50</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="101" opacity="1">75</text><text x="-15" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="51" opacity="1">100</text></g><text x="232" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="295">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="cursor:default;white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(35,-9999)" opacity="0" visibility="hidden"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 67.5 0.5 C 70.5 0.5 70.5 0.5 70.5 3.5 L 70.5 55.5 C 70.5 58.5 70.5 58.5 67.5 58.5 L 3.5 58.5 C 0.5 58.5 0.5 58.5 0.5 55.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#8D8A43" stroke-width="1"></path></g></svg><div class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="position: absolute; left: 35px; top: -9999px; opacity: 0; cursor: default; pointer-events: none; visibility: hidden;"><span style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; white-space: nowrap; color: rgb(51, 51, 51); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" data-z-index="1"><span style="font-size:10px">District</span><table><tbody><tr><td style="color:#8D8A43;padding:0">Boys: </td><td style="padding:0"><b>82%</b></td></tr><tr><td style="color:#CAC55F;padding:0">Girls: </td><td style="padding:0"><b>88%</b></td></tr></tbody></table></span></div></div></div>
                              <div class="category text-center card-yellow mx-4">
                                <span class="text-white text-17">EVS</span>
                              </div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 text-center gender-right">
                      <div class="cont-wrap mb-60">
                        <h4 class="mb-4">Participation by Gender</h4>
                        <!-- images changed -->
                        <div class="graph-right-wrap">
                          <div class="row dialog-sec px-5">
                            <div class="col-md-6">
                              <img src="http://localhost:8000/assets/front/images/boy-dialog.jpg" alt="dialog_box">
                              <h5 class="mb-15 text-white">
                                <span class="">55</span>
                                <span class="">%</span>
                              </h5>
                            </div>
                            <div class="col-md-6">
                              <img src="http://localhost:8000/assets/front/images/girl-dialog.jpg" alt="dialog_box">
                              <h5 class="mb-15 text-white">
                                <span class="">45</span>
                                <span class="">%</span>
                              </h5>
                            </div>
                          </div>
                          <img src="http://localhost:8000/assets/front/images/c3-gender.jpg" class="gender-img" alt="gender_image">
                          <div class="row px-5">
                            <div class="col-md-6 ps-3">
                              <p class="gender-txt">Boys</p>
                            </div>
                            <div class="col-md-6 pe-3">
                              <p class="gender-txt">Girls</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Location -->
                  
                    <!-- Management -->
                    
                    <!-- Social -->
                    
                    
                  </div>
                </div>
          
          
          <!-- distict performance section  -->
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Kadapa Report Card</h2>
                  <span class="class">CLASS 3</span>
                </div>
                <div class="reportview-class-content white-bg">
                  <div class="row pb-100">
                    <div class="col-md-12">
                      <h4 class="performance-heading heading-black-bold text-center p-4">
                        Performance of the District in Learning Outcomes (LOs)
                      </h4>
                    </div>
                    <div class="col-md-12 mb-3 mt-4">
                      <div class="table-responsive">
                        <table
                          class="table table-bordered align-middle text-center performance-table"
                        >
                          <thead>
                            <tr class="dark-blue-bg text-white">
                              <th scope="col">LO Code</th>
                              <th scope="col" class="">
                                Learning Outcomes for Class 3
                              </th>
                              <th scope="col">District Average Performance</th>
                              <th scope="col">State Average Performance</th>
                              <th scope="col">National Average Performance</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            <tr class="">
                              <th scope="row">L304</th>
                              <td class="text-sm-start">
                                Reads small texts with comprehension i.e.,
                                identifies main ideas, details, sequence and
                                draws conclusions
                              </td>
                              <td>82</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-blue">
                              <th scope="row">L312</th>
                              <td class="text-sm-start">
                                Reads printed scripts on the classroom walls:
                                poems, posters, charts etc
                              </td>
                              <td>83</td>
                              <td></td>
                              <td></td>
                            </tr>
                            
                            <tr class="">
                              <th scope="row">M301</th>
                              <td class="text-sm-start">
                                Reads and writes numbers up to 999 using place
                                value
                              </td>
                              <td>84</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M302</th>
                              <td class="text-sm-start">
                                Compares numbers up to 999 based on their place
                                values
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M303</th>
                              <td class="text-sm-start">
                                Solves simple daily life problems using addition
                                and subtraction of three digit numbers with and
                                without regrouping
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M304</th>
                              <td class="text-sm-start">
                                Constructs and uses the multiplication facts (up
                                till 10) in daily life situations
                              </td>
                              <td>77</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M305</th>
                              <td class="text-sm-start">
                                Analyses and applies an appropriate number
                                operation in the situation/ context
                              </td>
                              <td>84</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M306</th>
                              <td class="text-sm-start">
                                Explains the meaning of division facts by equal
                                grouping/sharing and finds it by repeated
                                subtraction
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M309</th>
                              <td class="text-sm-start">
                                Identifies and makes 2D-shapes by paper folding,
                                paper cutting on the dot grid, using straight
                                lines etc.
                              </td>
                              <td>88</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M311</th>
                              <td class="text-sm-start">
                                Fills a given region leaving no gaps using a
                                tile of a given shape
                              </td>
                              <td>77</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M312</th>
                              <td class="text-sm-start">
                                Estimates and measures length and distance using
                                standard units like centimetres or metres &
                                identifies relationships
                              </td>
                              <td>49</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M317</th>
                              <td class="text-sm-start">
                                Reads the time correctly to the hour using a
                                clock/watch
                              </td>
                              <td>83</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">M318</th>
                              <td class="text-sm-start">
                                Extends patterns in simple shapes and numbers
                              </td>
                              <td>75</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="card-light-pink">
                              <th scope="row">M319</th>
                              <td class="text-sm-start">
                                Records data using tally marks, represents
                                pictorially and draws conclusions
                              </td>
                              <td>89</td>
                              <td></td>
                              <td></td>
                            </tr>
                            
                            <tr class="">
                              <th scope="row">E302</th>
                              <td class="text-sm-start">
                                Identifies simple features (e.g. movement, at
                                places found/ kept, eating habits, sounds) of
                                animals and birds in the immediate surroundings.
                              </td>
                              <td>70</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E303</th>
                              <td class="text-sm-start">
                                Identifies relationships with and among family
                                members
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E304</th>
                              <td class="text-sm-start">
                                Identifies objects, signs (vessels, stoves,
                                transport, means of communication, transport,
                                signboards), places (types of houses/shelters,
                                bus stand, petrol pump) activities (works people
                                do, cooking processes) at
                                home/school/neighbourhood
                              </td>
                              <td>68</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E305</th>
                              <td class="text-sm-start">
                                Describes need of food for people of different
                                age groups, animals/birds, availability of food
                                and water and use of water at home and
                                surroundings
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E307</th>
                              <td class="text-sm-start">
                                Groups objects, birds, animals, features,
                                activities according to differences/similarities
                                using different senses. (e.g. appearance/place
                                of living/ food/ movement/ likes-dislikes/ any
                                other features)
                              </td>
                              <td>85</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E309</th>
                              <td class="text-sm-start">
                                Identifies directions, location of
                                objects/places in simple maps using
                                signs/symbols/verbally
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E310</th>
                              <td class="text-sm-start">
                                Guesses properties, estimates quantities of
                                materials/activities in daily life and verifies
                                using symbols/ non-standard units.
                              </td>
                              <td>85</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E311</th>
                              <td class="text-sm-start">
                                Records observations, experiences, information
                                on objects/activities/places visited in
                                different ways and predicts patterns etc.
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="">
                              <th scope="row">E313</th>
                              <td class="text-sm-start">
                                Observes rules in games (local. indoor, outdoor)
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr class="light-yellow-bg">
                              <th scope="row">E314</th>
                              <td class="text-sm-start">
                                Voices opinion on good/bad touch , stereotypes
                                for tasks/play/food in family w.r.t gender,
                                misuse/ wastage of food and water in family and
                                school.
                              </td>
                              <td>80</td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-footer">
                  <span class="page-no">4</span>
                </div>
              </div>
            </div>
          </div>
          <!-- children testimony -->
          <div class="col-md-12">
            <div class="reportview-container">
              <div class="reportview-class-wrap">
                <div class="reportview-header">
                  <h2>Kadapa Report Card</h2>
                  <span class="class">CLASS 3</span>
                </div>
                <div
                  class="reportview-class-content light-pink children-testimony"
                >
                  <div class="row pt-3 pb-30">
                    <div class="col-md-12">
                      <h4 class="heading-30 heading-black-bold text-center p-5">
                        What children say about schools?
                      </h4>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">97%</h2>
                        <p class="total-no">students like to go to school</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">78%</h2>
                        <p class="total-no">
                          students use same language at home as medium of
                          instruction in the class
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">85%</h2>
                        <p class="total-no">
                          students could understand, what teachers teach in the
                          class
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">89%</h2>
                        <p class="total-no">
                          students go out and play during games period
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">23%</h2>
                        <p class="total-no">
                          students have access to any digital device of class 3,
                          5 and 8 avail computer in the school
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">82%</h2>
                        <p class="total-no">
                          students of class 10 have laboratory facility in
                          school
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">60%</h2>
                        <p class="total-no">
                          students have internet connectivity at home
                        </p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="infotab-content white-bg text-center">
                        <h2 class="title pt-2">20%</h2>
                        <p class="total-no">
                          children get parental support for their educational
                          achievement
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="teacher-sec">
                  <div class="row">
                    <!-- left sec -->
                    <div class="col-md-8 light-green-bg teacher-left px-5 pt-3 pb-5">
                      <h4 class="heading-black-bold heading-30 text-center p-4">
                        What teachers responded about school?
                      </h4>
                      <div class="row justify-content-center pt-5">
                        <div class="col-md-6">
                          <div class='octagonWrap'>
                            <div class="octagon-card o-color-white text-center"> <!-- .infotab-content ----class -->
                              <h2 class="text-green">95%</h2>
                              <p class="total-no">
                                teachers have adequate instructional material and
                                supplies.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row row-margin">
                        <div class="col-md-6">
                          <div
                            class="octagon-card o-color-light-green text-white text-center"
                          >
                            <h2 class="title">90%</h2>
                            <p class="total-no">
                              teachers have adequate work space.
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="octagon-card o-color-white text-center">
                            <h2 class="text-green">17%</h2>
                            <p class="total-no">
                              teachers say that they are overloaded with the
                              work.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center row-margin">
                        <div class="col-md-6">
                          <div
                            class="octagon-card o-color-green text-white text-center"
                          >
                            <h2 class="title">25%</h2>
                            <p class="total-no">
                              teachers have responded that the school building
                              need significant repair.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row row-margin">
                        <div class="col-md-6">
                          <div class="octagon-card o-color-white text-center">
                            <h2 class="text-green">12%</h2>
                            <p class="total-no">
                              teachers have responded that lack of Drinking
                              water facilities in school
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div
                            class="octagon-card o-color-dark-green text-white text-center"
                          >
                            <h2 class="title">22%</h2>
                            <p class="total-no">
                              teachers have responded that inadequate toilet
                              facilities in school.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center row-margin">
                        <div class="col-md-6">
                          <div class="octagon-card o-color-white text-center">
                            <h2 class="text-green">38%</h2>
                            <p class="total-no">
                              teachers participated in professional development
                              program
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- right sec -->
                    <div class="col-md-4 light-blue-bg pt-3 teacher-right">
                      <h4 class="heading-black-bold  heading-30 text-center p-4">
                        What children say about schools?
                      </h4>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">64%</h2>
                              <p class="total-no">
                                of schools have adequate qualified teaching
                                staff
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">54%</h2>
                              <p class="total-no">
                                of schools have adequate supporting staff.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">40%</h2>
                              <p class="total-no">
                                of schools have adequate audio visual resources.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">63%</h2>
                              <p class="total-no">
                                of schools have adequate library resources.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="infotab-content white-bg text-center">
                              <h2 class="text-blue">86%</h2>
                              <p class="total-no">
                                of schools participate in sports activities.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reportview-footer">
                  <span class="page-no">5</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    
    
    
<script src="http://nas21.inroad.in/assets/front/js/jquery-3.6.0.min.js"></script>
<script src="http://nas21.inroad.in/assets/front/js/bootstrap.bundle.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
      // Create the language bar graph
      Highcharts.chart("language", {
        chart: {
          type: "column",
          height: "250",
        },
        title: {
          text: "",
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
        },
        xAxis: {
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 70,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
        },

        series: [
          {
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: 77,
                color: "#527698",
              },
              {
                name: "State",
                y: 72,
                color: "#6997C3",
              },
              {
                name: "National",
                y: 24,
                color: "#91B9E1",
              },
            ],
          },
        ],
      });
      // Create the maths bar graph
      Highcharts.chart("maths", {
        chart: {
          type: "column",
          height: "250",
        },
        title: {
          text: "",
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
        },
        xAxis: {
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 70,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
        },

        series: [
          {
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: 77,
                color: "#A3536F",
              },
              {
                name: "State",
                y: 72,
                color: "#D26A8E",
              },
              {
                name: "National",
                y: 24,
                color: "#ED91B1",
              },
            ],
          },
        ],
      });
      // Create the evs bar graph
      Highcharts.chart("evs", {
        chart: {
          type: "column",
          height: "250",
        },
        title: {
          text: "",
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
        },
        xAxis: {
          type: "category",
        },
        yAxis: {
          title: {
            text: "",
          },
        },
        legend: {
          enabled: false,
        },
        plotOptions: {
          column: {
            pointWidth: 70,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat:
            '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>',
        },

        series: [
          {
            name: "Students",
            colorByPoint: true,
            data: [
              {
                name: "District",
                y: 77,
                color: "#8D8A43",
              },
              {
                name: "State",
                y: 72,
                color: "#B6B156",
              },
              {
                name: "National",
                y: 24,
                color: "#D5D17F",
              },
            ],
          },
        ],
      });
      // GENDER CHart
      // Reportcard-languageBarGraph1
      Highcharts.chart("rc3-languageBarGraph1", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 40],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Boys",
            color: "#527698",
            data: [82, 78, 78],
          },
          {
            name: "Girls",
            color: "#75A9D9",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-mathBarGraph1
      Highcharts.chart("rc3-mathBarGraph1", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Boys",
            color: "#A3536F",
            data: [82, 78, 78],
          },
          {
            name: "Girls",
            color: "#E9769F",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-evsBarGraph1
      Highcharts.chart("rc3-evsBarGraph1", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Boys",
            color: "#8D8A43",
            data: [82, 78, 78],
          },
          {
            name: "Girls",
            color: "#CAC55F",
            data: [88, 69, 69],
          },
        ],
      });
      // Location CHart
      // Reportcard-languageBarGraph2
      Highcharts.chart("rc3-languageBarGraph2", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 40],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#527698",
            data: [82, 78, 78],
          },
          {
            name: "Urban",
            color: "#75A9D9",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-mathBarGraph2
      Highcharts.chart("rc3-mathBarGraph2", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#A3536F",
            data: [82, 78, 78],
          },
          {
            name: "Urban",
            color: "#E9769F",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-evsBarGraph2
      Highcharts.chart("rc3-evsBarGraph2", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Rural",
            color: "#8D8A43",
            data: [82, 78, 78],
          },
          {
            name: "Urban",
            color: "#CAC55F",
            data: [88, 69, 69],
          },
        ],
      });

      // Management CHart
      // Reportcard-languageBarGraph3
      Highcharts.chart("rc3-languageBarGraph3", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 40],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
          
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Govt.",
            color: "#527698",
            data: [82, 78, 78],
          },
          {
            name: "Govt. Aided",
            color: "#6997C3",
            data: [88, 69, 69],
          },
          {
            name: "Private",
            color: "#75A9D9",
            data: [82, 78, 78],
          },
          {
            name: "Central Govt",
            color: "#9EC2E4",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-mathBarGraph3
      Highcharts.chart("rc3-mathBarGraph3", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Govt.",
            color: "#A3536F",
            data: [82, 78, 78],
          },
          {
            name: "Govt. Aided",
            color: "#D26A8E",
            data: [88, 69, 69],
          },
          {
            name: "Private",
            color: "#E9769F",
            data: [82, 78, 78],
          },
          {
            name: "Central Govt",
            color: "#F09FBB",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-evsBarGraph3
      Highcharts.chart("rc3-evsBarGraph3", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Govt.",
            color: "#8D8A43",
            data: [82, 78, 78],
          },
          {
            name: "Govt. Aided",
            color: "#B6B156",
            data: [88, 69, 69],
          },
          {
            name: "Private",
            color: "#CAC55F",
            data: [82, 78, 78],
          },
          {
            name: "Central Govt",
            color: "#DAD68F",
            data: [88, 69, 69],
          },
        ],
      });
      // Social CHart
      // Reportcard-languageBarGraph4
      Highcharts.chart("rc3-languageBarGraph4", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 40],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Govt.",
            color: "#527698",
            data: [82, 78, 78],
          },
          {
            name: "Govt. Aided",
            color: "#6997C3",
            data: [88, 69, 69],
          },
          {
            name: "Private",
            color: "#75A9D9",
            data: [82, 78, 78],
          },
          {
            name: "Central Govt",
            color: "#9EC2E4",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-mathBarGraph4
      Highcharts.chart("rc3-mathBarGraph4", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Govt.",
            color: "#A3536F",
            data: [82, 78, 78],
          },
          {
            name: "Govt. Aided",
            color: "#D26A8E",
            data: [88, 69, 69],
          },
          {
            name: "Private",
            color: "#E9769F",
            data: [82, 78, 78],
          },
          {
            name: "Central Govt",
            color: "#F09FBB",
            data: [88, 69, 69],
          },
        ],
      });

      // Reportcard-evsBarGraph4
      Highcharts.chart("rc3-evsBarGraph4", {
        chart: {
          height: 300,
          type: "column",
          margin: [40, 0, 60, 0],
        },
        title: {
          text: "",
        },
        legend: {
          enabled: false,
        },
        xAxis: {
          categories: ["District", "State", "National"],
          crosshair: true,
          labels: {
            rotation: -90,
            y: 10,
          },
          
        },
        yAxis: {
          min: 0,
          title: false,
        },
        tooltip: {
          headerFormat:
            '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}%</b></td></tr>',
          footerFormat: "</table>",
          shared: true,
          useHTML: true,
        },
        plotOptions: {
          column: {
            pointPadding: 0.1,
            borderWidth: 0,
          },
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: "{point.y}",
            },
          },
        },
        series: [
          {
            name: "Govt.",
            color: "#8D8A43",
            data: [82, 78, 78],
          },
          {
            name: "Govt. Aided",
            color: "#B6B156",
            data: [88, 69, 69],
          },
          {
            name: "Private",
            color: "#CAC55F",
            data: [82, 78, 78],
          },
          {
            name: "Central Govt",
            color: "#DAD68F",
            data: [88, 69, 69],
          },
        ],
      });

      // Donut Chart
      Highcharts.chart("dc3-managementPieGraph", {
        chart: {
          type: "pie",
        },
        title: {
          text: "",
        },
        tooltip: {
          headerFormat: "",
          pointFormat:
            '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            "{point.y}%",
        },
        plotOptions: {
          pie: {
            innerSize: 100,
            depth: 45,
            allowPointSelect: true,
            cursor: "pointer",
            dataLabels: {
              enabled: true,
              format: "{point.percentage} %",
              distance: -50,
              filter: {
                property: "percentage",
                operator: ">",
                value: 4,
              },
            },
            showInLegend: true,
          },
        },
        series: [
          {
            minPointSize: 10,
            innerSize: "40%",
            zMin: 0,
            name: "Management",
            data: [
              {
                name: "Central Govt.",
                y: 20,
                z: 100,
                color: "#75A9D9",
              },
              {
                name: "Govt.",
                y: 30,
                z: 100,
                color: "#E9769F",
              },
              {
                name: "Govt. Aided",
                y: 25,
                z: 100,
                color: "#CAC55F",
              },
              {
                name: "Private",
                y: 25,
                z: 100,
                color: "#4CAF50",
              },
            ],
          },
        ],
      });
    </script>
    


  </body>
</html>