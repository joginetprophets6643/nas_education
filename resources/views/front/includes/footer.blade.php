<footer class="site-footer">
      <div class="container">
        <div class="row ptb-60">
          <div class="col-6 col-md-2">
              <div class="footer-links">
                <h2 class="heading-white-xs">
                  {{__('lang.REPORT CARD')}}
                </h2>
                <ul>
                  <li>
                    <a href="{{url('/report-card')}}" target="_blank">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.National')}}
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/report-card')}}" target="_blank">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.State')}}
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/report-card')}}" target="_blank">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.District')}}
                    </a>
                  </li>
                </ul>
              </div>
          </div>
          <div class="col-6 col-md-2">
            <div class="footer-links">
              <h2 class="heading-white-xs">
                {{__('lang.DATA SHARE')}}
              </h2>
              <ul>
                <li>
                  <a href="{{url('/data-share/login')}}" target="_blank">
                    <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                    {{__('lang.Login')}}
                  </a>
                </li>
                <li>
                  <a href="{{url('/data-share/registration')}}" target="_blank">
                    <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                    {{__('lang.Registration')}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-6 col-md-2">
            <div class="footer-links">
              <h2 class="heading-white-xs">
                {{__('lang.VISUALIZATION')}}
              </h2>
              <ul>
                  <!-- <li>
                    <a href="{{url('/visualization')}}">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.National')}}
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/visualization')}}">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.State')}}
                    </a>
                  </li> -->
                  <li>
                    <a href="{{url('/visualization')}}" target="_blank">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.View')}}
                    </a>
                  </li>
              </ul>
            </div>
          </div>
          <div class="col-6 col-md-2">
            <div class="footer-links">
              <h2 class="heading-white-xs">
                {{__('lang.GALLERY')}}
              </h2>
              <ul>
                <li>
                  <a href="{{url('/gallery')}}">
                    <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                    {{__('lang.Photo Gallery')}}
                  </a>
                </li>
                <li>
                  <a href="{{url('/gallery')}}">
                    <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                    {{__('lang.Video Gallery')}}
                  </a>
                </li>
                
              </ul>
            </div>
          </div>

          <div class="col-md-4">
              <div class="footer-links contact-info">
                <h2 class="heading-white-xs">
                  <?php $setting=get_setting();
                  $lang="2";
                  if (Session::has('locale')) {
                      $lang = Session::get('locale');
                      if($lang=="hi")
                      {
                          $lang='1';
                      }
                      else{
                          $lang='2';
                      }
                  }?>
                  @if($setting)
                  {{__('lang.CONTACT US')}}
                </h2>
                <ul>
                  <li>
                    @if($lang==1)
                    <div class="text-white-sm">
                      {!!$setting->contact_us_hindi!!}
                    </div>
                    @else
                    <div class="text-white-sm">
                      {!!$setting->contact_us!!}
                    </div>
                    @endif
                  </li>
                  @endif
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="bg-dark-blue">
          <div class="container">
              <div class="row align-items-center">
                <div class="col-md-12 col-lg-4">
                    <span class="counter">
                      {{__('lang.Website Visit Count')}} : <?php echo visit_count() ?>
                    </span>
                    <div class="date">
                    {{__('lang.Last Modified')}} : 25/11/2021
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                  <div class="footer-bottom-links">
                      <ul>
                        <li>
                          <a href="{{url('/terms-conditions')}}">{{__('lang.Terms & Conditions')}}</a>
                        </li>
                        <li>
                          <a href="{{url('/privacy-policy')}}">{{__('lang.Privacy Policy')}}</a>
                        </li>
                        <li>
                          <a href="{{url('/copyright-policy')}}">{{__('lang.Copyright Policy')}}</a>
                        </li>
                        <li>
                          <a href="{{url('/hyper-linking-policy')}}">{{__('lang.Hyper Linking Policy')}}</a>
                        </li>
                        <li>
                          <a href="{{url('/accessbility-statement')}}">{{__('lang.Accessibility Statement')}}</a>
                        </li>
                        <li>
                          <a href="{{url('/rti')}}">{{__('lang.RTI')}}</a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <!-- <div class="col-md-6">
              <p class="copyright-text">
              
                © {{__('lang.Copyright')}} <?php //echo date("Y"); ?> | {{ __('lang.National Achievement Survey') }} (NAS)
              </p>
          </div> -->
          <div class="col-md-12 col-lg-3">
              <div class="emblem-imgwrap">
                  <img src="{{asset('assets/front/images/emblem-white.svg')}}" alt="img" class="img-fluid">
              </div>
          </div>
          <div class="col-md-12 col-lg-7">
            <div class="nic-foot-wrap">
              <div class="nic-foot-content">
               <div class="nic-foot-imgwrap">
                 <img src="{{asset('assets/front/images/nic-transparent.png')}}" alt="img">
               </div>
               <span class="divider"></span>
               <p class="nic-foot-desc">
                 <!-- This site is designed, developed, maintained and hosted by National Informatics Centre (NIC),
                 Ministry of Electronics Information Technology, Government of India. -->
                 {{__('lang.Footer Content')}}
               </p>
              </div>
              <p class="nic-foot-desc_sm">v2021.11.2600</p> 
            </div>
          </div>
          <div class="col-md-12 col-lg-2">
            <div class="social-links">
            @if($setting)
                <ul>
                  <li>
                    <a href="{{url($setting->fb)}}" target="_blank">
                      <div class="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.43" height="18.5" viewBox="0 0 10.43 18.5">
                          <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M11.356,10.406,11.9,7.058H8.515V4.886c0-.916.472-1.809,1.987-1.809H12.04V.226A19.707,19.707,0,0,0,9.311,0C6.526,0,4.705,1.6,4.705,4.506V7.058h-3.1v3.348h3.1V18.5h3.81V10.406Z" transform="translate(-1.609)" fill="#fff"/>
                        </svg>                        
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{url($setting->twitter)}}" target="_blank">
                      <div class="twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.805" height="14.552" viewBox="0 0 16.805 14.552">
                          <path id="icon-twitter" d="M765.642,22.528a6.541,6.541,0,0,1-1.981.568,3.634,3.634,0,0,0,1.514-2.024,6.526,6.526,0,0,1-2.186.886,3.342,3.342,0,0,0-2.517-1.16,3.563,3.563,0,0,0-3.445,3.673,4.4,4.4,0,0,0,.085.841,9.6,9.6,0,0,1-7.1-3.843,3.834,3.834,0,0,0-.469,1.854,3.738,3.738,0,0,0,1.536,3.058,3.316,3.316,0,0,1-1.557-.466v.045a3.622,3.622,0,0,0,2.762,3.6,3.434,3.434,0,0,1-.907.125,4.151,4.151,0,0,1-.651-.056,3.486,3.486,0,0,0,3.221,2.546,6.632,6.632,0,0,1-4.277,1.569,6.786,6.786,0,0,1-.832-.045,9.3,9.3,0,0,0,5.29,1.648c6.335,0,9.8-5.593,9.8-10.448,0-.158,0-.318-.011-.477a7.645,7.645,0,0,0,1.725-1.9Z" transform="translate(-748.836 -20.799)" fill="#fff"/>
                        </svg>                        
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{url($setting->insta)}}" target="_blank">
                      <div class="insta">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="10.43" height="18.5" viewBox="0 0 10.43 18.5">
                          <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M11.356,10.406,11.9,7.058H8.515V4.886c0-.916.472-1.809,1.987-1.809H12.04V.226A19.707,19.707,0,0,0,9.311,0C6.526,0,4.705,1.6,4.705,4.506V7.058h-3.1v3.348h3.1V18.5h3.81V10.406Z" transform="translate(-1.609)" fill="#fff"/>
                        </svg>                         -->
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="17.132"
                        height="17.128"
                        viewBox="0 0 17.132 17.128"
                      >
                        <path
                          id="Icon_awesome-instagram"
                          data-name="Icon awesome-instagram"
                          d="M8.562,6.41A4.391,4.391,0,1,0,12.954,10.8,4.384,4.384,0,0,0,8.562,6.41Zm0,7.246A2.855,2.855,0,1,1,11.417,10.8a2.86,2.86,0,0,1-2.855,2.855Zm5.6-7.426a1.024,1.024,0,1,1-1.024-1.024A1.022,1.022,0,0,1,14.158,6.231Zm2.908,1.04a5.069,5.069,0,0,0-1.384-3.589A5.1,5.1,0,0,0,12.094,2.3c-1.414-.08-5.653-.08-7.067,0a5.1,5.1,0,0,0-3.589,1.38A5.085,5.085,0,0,0,.055,7.266c-.08,1.414-.08,5.653,0,7.067a5.069,5.069,0,0,0,1.384,3.589,5.109,5.109,0,0,0,3.589,1.384c1.414.08,5.653.08,7.067,0a5.069,5.069,0,0,0,3.589-1.384,5.1,5.1,0,0,0,1.384-3.589c.08-1.414.08-5.649,0-7.063Zm-1.827,8.58a2.89,2.89,0,0,1-1.628,1.628c-1.127.447-3.8.344-5.049.344s-3.925.1-5.049-.344A2.89,2.89,0,0,1,1.886,15.85c-.447-1.127-.344-3.8-.344-5.049s-.1-3.925.344-5.049A2.89,2.89,0,0,1,3.514,4.125c1.127-.447,3.8-.344,5.049-.344s3.925-.1,5.049.344a2.89,2.89,0,0,1,1.628,1.628c.447,1.127.344,3.8.344,5.049S15.686,14.727,15.239,15.85Z"
                          transform="translate(0.005 -2.238)"
                          fill="#fff"
                        />
                      </svg>
                      </div>
                    </a>
                  </li>
                </ul>
                @endif
            </div>
          </div>
        </div>
      </div>
    </footer>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('assets/front/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>
    
    <script type="text/javascript">
    var url = "{{ url('/change') }}";
    $(".Langchange").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
    <script src="{{asset('assets/front/js/aos.js')}}"></script>
    <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/front/js/custom.js')}}"></script>
    <script src="{{asset('assets/front/js/custom (2).js')}}"></script>

    <script src="{{asset('assets/front/js/highmaps.js')}}"></script>
    <script src="{{asset('assets/front/js/exporting.js')}}"></script>
    <script src="{{asset('assets/front/js/in-all-disputed.js')}}"></script>

    <script>
      let token = '{{env("API_TOKEN")}}'  
      let api_url ='{{env("API_URL")}}'
      let d_api_url ='{{env("BACKEND_D_API_URL")}}'
      let backend_api_url = '{{env("BACKEND_API_URL")}}'
      let base_url = '{{env("BASE_URL")}}'+'/'
      AOS.init({
          duration: 1500,
          disable: 'tablet',
          disable: 'mobile'
      });
    </script>
    <script src="{{asset('assets/front/js/district_maps.js')}}"></script>
    <script src="{{asset('assets/front/js/states_static.js')}}"></script>
    <!-- High Charts -->
    <script src="{{asset('assets/front/js/variable-pie.js')}}"></script>
    <script src="{{asset('assets/front/js/axios.min.js')}}"></script>
    <script src="{{asset('assets/front/js/lightbox.min.js')}}"></script>
    <script src="{{asset('assets/front/js/scripts.js')}}"></script>
    <script src="{{asset('assets/front/js/select2.min.js')}}"></script>
    
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <script>
      let c_url=window.location.href;
      title=c_url.split("/");
      if(title[3]==''){
        $("#title").html('NAS');
      }
      else{
      $("#title").html(title[3].toUpperCase());
      }

      var click1=0;
      var click2=0;
      var $affectedElements = $("p,span,h1,h2,h3,h4,h5,h6"); // Can be extended, ex. $("div, p, span.someClass")

      // Storing the original size in a data attribute so size can be reset
      $affectedElements.each( function(){
        var $this = $(this);
        $this.data("orig-size", $this.css("font-size") );
      });

      $("#btn-increase").click(function(){
        
        if(click2<2){
        changeFontSize(+1);
        click1++
        click2++
        console.log(click1,click2)
        }
        
      })

      $("#btn-decrease").click(function(){
        
        if(click1<1){
        changeFontSize(+1);
        click2++
        click1++
        console.log(click1,click2)
        }
        
      })

      $("#btn-orig").click(function(){
        click1=0;
        click2=0;
        $affectedElements.each( function(){
              var $this = $(this);
              $this.css( "font-size" , $this.data("orig-size") );
        });
      })

function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        console.log(parseInt($this.css("font-size")))
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
}
      // function setFontSize(size) {
      //   const fontSize = Number(window.getComputedStyle(document.body).getPropertyValue('font-size').match(/\d+/)[0]);
      //   console.log(fontSize);
      //     $('p').css('font-size', '' + size + 'px');
      //     $('h2').css('font-size', '' + size + 'px');
      //     $('h1').css('font-size', '' + size + 'px');
      //     $('span').css('font-size', '' + size + 'px');
      //     $('a').css('font-size', '' + size + 'px');
      // }


      $('.gallery-anchor').click(()=>{
        $('body').addClass('overflow-hidden');
    });
    $('.lightboxOverlay').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    $('.lightbox').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    $('.lb-close').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    $('.lb-closeContainer').click(()=>{
        $('body').removeClass('overflow-hidden');
    })
    
    </script>
    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sideBar = document.querySelector("#sideBar");
        var main_content = document.querySelector(".main-content-wrap");
        var close_btn = document.querySelector(".close1-btn");
        // console.log(menu_btn)
        if(window.innerWidth > 1024) {
          if(menu_btn !== null){
            menu_btn.addEventListener("click", () => {
              sideBar.classList.toggle("active-sidebar");
              main_content.classList.toggle("active-main-content");
            });
          }
        }
        
        if(window.innerWidth < 1024) {
          if(close_btn !== null){
          sideBar.style.marginLeft = "-250px";
          close_btn.addEventListener("click", () => {
            sideBar.style.marginLeft = "-250px";
            // main_content.classList.toggle("active-main-content");
          })
          menu_btn.addEventListener("click", () => {
            sideBar.style.marginLeft = "0";
            // main_content.classList.toggle("active-main-content");
          })

          }
        }
        

    </script>
    <script>
      if(window.innerWidth > 1024) {
        $(window).scroll(function(){
          if ($(this).scrollTop() > 15) {
            $('#scrollTab').css({"top":"7.9em", "padding": "0.5rem 0"});
          } else {
            $('#scrollTab').css({"top":"70px"});
          }
        });
        $(window).scroll(function(){
          if ($(this).scrollTop() > 15) {
            $('#scrollTab2').css({"top":"10.8em", "padding": "0.5rem 0"});
          } else {
            $('#scrollTab2').css({"top":"70px", "padding": "0"});
          }
        });
      }

    </script>
  </body>
</html>