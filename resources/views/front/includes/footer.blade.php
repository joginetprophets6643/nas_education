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
                    <a href="#">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.National')}}
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.State')}}
                    </a>
                  </li>
                  <li>
                    <a href="#">
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
                  <a href="{{url('/data-share/login')}}">
                    <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                    {{__('lang.Login')}}
                  </a>
                </li>
                <li>
                  <a href="{{url('/data-share/registration')}}">
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
                  <li>
                    <a href="#">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.National')}}
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                      {{__('lang.State')}}
                    </a>
                  </li>
                  <li>
                    <a href="#">
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
                {{__('lang.GALLERY')}}
              </h2>
              <ul>
                <li>
                  <a href="/gallery/image-gallery">
                    <img src="{{asset('assets/front/images/arrow.svg')}}" alt="arrow" />
                    {{__('lang.Photo Gallery')}}
                  </a>
                </li>
                <li>
                  <a href="/gallery/vedio-gallery">
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
                </div>
                <div class="col-md-12 col-lg-8">
                  <div class="footer-bottom-links">
                      <ul>
                        <li>
                          <a href="/terms-conditions">{{__('lang.Terms & Conditions')}}</a>
                        </li>
                        <li>
                          <a href="/privacy-policy">{{__('lang.Privacy Policy')}}</a>
                        </li>
                        <li>
                          <a href="/copyright-policy">{{__('lang.Copyright Policy')}}</a>
                        </li>
                        <li>
                          <a href="/hyper-linking-policy">{{__('lang.Hyper Linking Policy')}}</a>
                        </li>
                        <li>
                          <a href="/accessbility-statement">{{__('lang.Accessibility Statement')}}</a>
                        </li>
                        <li>
                          <a href="/rti">{{__('lang.RTI')}}</a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="container">
        <div class="row align-items-center row-reverse-sm">
          <div class="col-md-6">
              <p class="copyright-text">
              
                © {{__('lang.Copyright')}} <?php echo date("Y"); ?> | {{ __('lang.National Achievement Survey') }} (NAS)
              </p>
          </div>
          <div class="col-md-6">
            <div class="social-links">
            @if($setting)
                <ul>
                  <li>
                    <a href="{{url($setting->fb)}}">
                      <div class="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.43" height="18.5" viewBox="0 0 10.43 18.5">
                          <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M11.356,10.406,11.9,7.058H8.515V4.886c0-.916.472-1.809,1.987-1.809H12.04V.226A19.707,19.707,0,0,0,9.311,0C6.526,0,4.705,1.6,4.705,4.506V7.058h-3.1v3.348h3.1V18.5h3.81V10.406Z" transform="translate(-1.609)" fill="#fff"/>
                        </svg>                        
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{url($setting->twitter)}}">
                      <div class="twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.805" height="14.552" viewBox="0 0 16.805 14.552">
                          <path id="icon-twitter" d="M765.642,22.528a6.541,6.541,0,0,1-1.981.568,3.634,3.634,0,0,0,1.514-2.024,6.526,6.526,0,0,1-2.186.886,3.342,3.342,0,0,0-2.517-1.16,3.563,3.563,0,0,0-3.445,3.673,4.4,4.4,0,0,0,.085.841,9.6,9.6,0,0,1-7.1-3.843,3.834,3.834,0,0,0-.469,1.854,3.738,3.738,0,0,0,1.536,3.058,3.316,3.316,0,0,1-1.557-.466v.045a3.622,3.622,0,0,0,2.762,3.6,3.434,3.434,0,0,1-.907.125,4.151,4.151,0,0,1-.651-.056,3.486,3.486,0,0,0,3.221,2.546,6.632,6.632,0,0,1-4.277,1.569,6.786,6.786,0,0,1-.832-.045,9.3,9.3,0,0,0,5.29,1.648c6.335,0,9.8-5.593,9.8-10.448,0-.158,0-.318-.011-.477a7.645,7.645,0,0,0,1.725-1.9Z" transform="translate(-748.836 -20.799)" fill="#fff"/>
                        </svg>                        
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{url($setting->insta)}}">
                      <div class="insta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.43" height="18.5" viewBox="0 0 10.43 18.5">
                          <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M11.356,10.406,11.9,7.058H8.515V4.886c0-.916.472-1.809,1.987-1.809H12.04V.226A19.707,19.707,0,0,0,9.311,0C6.526,0,4.705,1.6,4.705,4.506V7.058h-3.1v3.348h3.1V18.5h3.81V10.406Z" transform="translate(-1.609)" fill="#fff"/>
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
    <!-- AOS JS -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="{{asset('assets/front/js/aos.js')}}"></script>
    <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/front/js/custom.js')}}"></script>
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

    <script src="{{asset('assets/front/js//highmaps.js')}}"></script>
    <script src="{{asset('assets/front/js//exporting.js')}}"></script>
    <script src="{{asset('assets/front/js//in-all-disputed.js')}}"></script>

    <script>
      let api_url ='http://localhost:8055/items/'
      let backend_api_url = 'http://localhost:8000/api/'
      let base_url = 'http://localhost:8000/'
      AOS.init({
          duration: 1500,
          disable: 'tablet',
          disable: 'mobile'
      });
    </script>
    <script src="{{asset('assets/front/js/district_maps.js')}}"></script>
    <script src="{{asset('assets/front/js/states_static.js')}}"></script>
    <!-- High Charts -->
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <script>
      let c_url=window.location.href;
      let title=c_url.substr(c_url.indexOf('/'));
      console.log(title)

      function setFontSize(size) {
          $('body').css('font-size', '' + size + 'px');
      }
    </script>

  </body>
</html>