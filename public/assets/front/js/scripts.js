 ! function (e) {
     "use strict";

     function a() {
         w > 767 ? k.off("click") : k.on("click", function () {
             b.collapse("hide"), T.removeClass("opened")
         })
     }

     function t() {
         T.on("click", function () {
             T.toggleClass("opened")
         })
     }

     function o() {
         S.hasClass("transp-nav") && (y.scrollTop() < 130 ? x.addClass("navbar-transparent") : x.removeClass("navbar-transparent")), y.scroll(function () {
             var e = y.scrollTop();
             S.hasClass("transp-nav") && (130 > e ? x.addClass("navbar-transparent") : x.removeClass("navbar-transparent")), S.hasClass("elastic-nav") && (1 > e ? x.addClass("navbar-elastic") : x.removeClass("navbar-elastic"))
         })
     }

     function i() {
         I.length && (O.addClass("sticky-nav-here"), I.hasClass("transp-nav") && O.addClass("sticky-visible-here"), P.affix({
             offset: {
                 top: O.offset().top + 1.2 * z
             }
         }))
     }

     function n() {
         D.length && D.affix({
             offset: {
                 top: D.offset().top - 30
             }
         })
     }

     function s() {
         M.length && (M.animateSlider(8e3), e(".show-indicators .as-indicators").addClass("dotstyle-fall"))
     }

     function l() {
         H.length && e(function () {
             H.YTPlayer()
         })
     }

     function d() {
         _.length && ! function (e) {
             var a;
             a = _.hasClass("masonry") ? "masonry" : "fitRows", e(window).load(function () {
                 _.isotope({
                     itemSelector: ".portfolio-item",
                     layoutMode: a,
                     filter: L
                 })
             }), E.on("click", "a", function () {
                 var t = e(this);
                 q.removeClass("selected"), t.addClass("selected"), L = t.attr("data-filter"), _.isotope({
                     itemSelector: ".portfolio-item",
                     layoutMode: a,
                     filter: L,
                     transitionDuration: ".5s"
                 })
             })
         }(jQuery)
     }

     function p() {
         W.length && W.nivoLightbox({
             effect: "slideUp",
             theme: "default",
             keyboardNav: !0,
             clickOverlayToClose: !0,
             errorMessage: "The requested content cannot be loaded. Please try again later."
         })
     }

     function c() {
         e("#owl-hs-slider-zoom").owlCarousel({
             autoplay: !1,
             animateIn: "zoomOutIn",
             animateOut: "zoomInOut",
             loop: !1,
             margin: 0,
             items: 1,
             rewind: !0,
             dots: !0,
             responsive: {
                 0: {
                     nav: !1
                 },
                 768: {
                     nav: !0
                 }
             }
         }), e("#owl-hs-slider").owlCarousel({
             autoplay: !1,
             loop: !1,
             margin: 0,
             items: 1,
             smartSpeed: 1e3,
             rewind: !0,
             dots: !0,
             responsive: {
                 0: {
                     nav: !1
                 },
                 768: {
                     nav: !0
                 }
             }
         }), e("#owl-hs-slider-text").owlCarousel({
             animateOut: "zoomOut",
             animateIn: "flipInX",
             margin: 0,
             items: 1,
             smartSpeed: 500,
             loop: !0,
             dots: !0,
             responsive: {
                 0: {
                     nav: !1
                 },
                 768: {
                     nav: !0
                 }
             }
         }), e("#owl-hs-slider-zoom-out").owlCarousel({
             autoplay: !0,
             autoplayTimeout: 4e3,
             animateIn: "fadeIn",
             animateOut: "fadeOut",
             loop: !0,
             margin: 0,
             items: 1,
             dots: !0,
             responsive: {
                 0: {
                     nav: !1
                 },
                 768: {
                     nav: !0
                 }
             }
         });
         var a = e("#images-slider-1");
         a.owlCarousel({
             autoplay: !0,
             autoplaySpeed: 1e3,
             autoplayTimeout: 2e3,
             loop: !1,
             margin: 0,
             stagePadding: 0,
             autoplayHoverPause: !1,
             items: 1,
             smartSpeed: 500,
             rewind: !0,
             center: !1,
             dots: !0,
             responsive: {
                 0: {
                     nav: !1
                 },
                 768: {
                     nav: !0
                 }
             }
         });
         var t = e("#images-slider-2");
         t.owlCarousel({
             autoplay: !0,
             autoplaySpeed: 1e3,
             autoplayTimeout: 2e3,
             loop: !0,
             margin: 0,
             stagePadding: 0,
             autoplayHoverPause: !1,
             items: 1,
             smartSpeed: 500,
             rewind: !0,
             center: !1,
             dots: !0,
             responsive: {
                 0: {
                     nav: !1
                 },
                 768: {
                     nav: !0
                 }
             }
         });
         var o = e("#team-carousel");
         o.owlCarousel({
             autoplay: !0,
             autoplaySpeed: 1e3,
             autoplayTimeout: 5e3,
             loop: !1,
             margin: 0,
             nav: !1,
             autoplayHoverPause: !0,
             smartSpeed: 200,
             rewind: !0,
             center: !1,
             dots: !0,
             mouseDrag: !0,
             responsive: {
                 0: {
                     items: 1
                 },
                 667: {
                     items: 2
                 }
             }
         });
         var i = e("#team-carousel-3");
         i.owlCarousel({
             autoplay: !0,
             autoplaySpeed: 1e3,
             autoplayTimeout: 5e3,
             loop: !0,
             margin: 0,
             autoplayHoverPause: !0,
             center: !1,
             dots: !0,
             nav: !1,
             mouseDrag: !0,
             responsive: {
                 0: {
                     items: 1
                 },
                 667: {
                     items: 2
                 },
                 992: {
                     items: 3
                 }
             }
         });
         var n = e("#testimonials");
         n.owlCarousel({
             animateIn: "flipInX",
             animateOut: "zoomOut",
             smartSpeed: 500,
             items: 1,
             loop: !0,
             center: !0,
             mouseDrag: !0,
             margin: 10,
             autoplay: !1,
             autoplayTimeout: 4e3,
             autoplayHoverPause: !0,
             responsive: {
                 0: {
                     nav: !1
                 },
                 768: {
                     nav: !0
                 }
             }
         });
         var s = e("#client-logos");
         s.owlCarousel({
             autoplay: !0,
             autoplaySpeed: 1e3,
             autoplayTimeout: 2e3,
             loop: !1,
             stagePadding: 0,
             autoplayHoverPause: !1,
             smartSpeed: 1200,
             rewind: !0,
             center: !1,
             dots: !1,
             responsive: {
                 0: {
                     items: 2,
                     margin: 20
                 },
                 480: {
                     items: 3,
                     margin: 70
                 },
                 768: {
                     items: 4,
                     margin: 70
                 },
                 992: {
                     items: 4,
                     margin: 100
                 },
                 1200: {
                     items: 4,
                     margin: 120
                 }
             }
         });
         var l = e(".carousel"),
             r = l.find(".owl-dots"),
             d = l.find(".owl-nav:not(.disabled)"),
             p = d.find(".owl-prev"),
             c = d.find(".owl-next");
         r.addClass("dotstyle-fall"), p.addClass("left carousel-control").empty().append("<i class='arrow-left'></i>"), c.addClass("right carousel-control").empty().append("<i class='arrow-right'></i>")
     }

     function u() {
         var a = e("#process");
         a.owlCarousel({
             items: 1,
             smartSpeed: 500,
             nav: !1,
             margin: 10,
             mouseDrag: !0,
             autoplayTimeout: 4e3,
             autoplayHoverPause: !0
         });
         var t = a.find(".owl-dots"),
             o = e("#process-section").find(".process-labels"),
             i = o.find("li"),
             n = t.find(".owl-dot");
         t.addClass("dotstyle-fillup line-process-mood");
         var s = 1;
         n.each(function () {
             e(this).attr("data-que", s), s += 1
         });
         var l = 100 / (s - 2),
             r = 0;
         n.each(function () {
             e(this).css({
                 left: r * l + "%"
             }), r += 1
         });
         var d = 0;
         i.each(function () {
             var a = e(this),
                 t = a.find("span").width();
             a.css({
                 left: d * l + "%",
                 "margin-left": -t / 2
             }), d += 1
         }), n.on("owlDotClassChange", function () {
             var a = e(this).attr("data-que") - 1,
                 o = e(".line-process"),
                 s = t.find(".owl-dot.active");
             o.width(l * a + "%"), n.each(function () {
                 var a = e(this);
                 a.attr("data-que") < s.attr("data-que") ? a.children("span").addClass("process-active-dot") : a.children("span").removeClass("process-active-dot")
             }), i.each(function () {
                 var a = e(this);
                 a.attr("data-que") == s.attr("data-que") ? a.addClass("process-label-active") : a.removeClass("process-label-active")
             })
         });
         var p = e(".carousel"),
             c = p.find(".owl-prev"),
             u = p.find(".owl-next");
         c.addClass("left carousel-control").empty().append("<i class='arrow-left'></i>"), u.addClass("right carousel-control").empty().append("<i class='arrow-right'></i>")
     }

     function f() {
         X.length && (768 > w ? j.each(function () {
             var a = e(this);
             a.width(a.data("percent"))
         }) : X.waypoint(function () {
             Y.each(function () {
                 var a = e(this);
                 a.width(a.data("percent"))
             })
         }, {
             offset: "60%"
         }))
     }



     function g() {
         R.length && R.animsition({
             inDuration: 1200,
             outDuration: 800,
             linkElement: ".animsition-link",
             loading: !0,
             loadingParentElement: "body",
             loadingClass: "animsition-loading",
             unSupportCss: ["animation-duration", "-webkit-animation-duration", "-o-animation-duration"],
             overlay: !1,
             overlayClass: "animsition-overlay-slide",
             overlayParentElement: "body"
         }).one("animsition.start", function () {
             setTimeout(Z, 800)
         }).one("animsition.end", function () {
             f()
         })
     }

     var y = e(window),
         w = y.width(),
         C = e("#page"),
         b = e("#mobile-navbar-collapse"),
         k = b.find("a:not(.dropdown-toggle)"),
         T = e("#animated-navicon"),
         x = e("#nav"),
         S = e("#nav-wrapper"),
         I = e(".sticky-navbar"),
         P = I.find("#nav"),
         O = (e(".sticky-navbar"), e("#about-section")),
         z = P.height(),
         D = e("#portfolio-nav"),
         M = e("#animate-slider"),
         H = e(".player"),
         _ = e("#portfolio-container"),
         E = e("#portfolio-filters"),
         q = E.find("a"),
         L = 0,
         W = C.find(".lightbox"),
         X = e("#skillbars"),
         Y = X.find(".skillbar-bar"),
         j = e(".skillbar-bar"),
         R = e(".animsition"),
         Z = function () {
             e(".init-animation-1").addClass("fadeInDown").css("opacity", 1), e(".init-animation-2").addClass("fadeInUp").css("opacity", 1), e(".init-animation-3").addClass("fadeInRight").css("opacity", 1), e(".init-animation-4").addClass("fadeInLeft").css("opacity", 1), e(".init-animation-5").addClass("fadeIn").css("opacity", 1)
         };
     if (screen.width < 768) o(), i(), n(), s(), l(), p(), a(), t(), c(), C.hasClass("animsition") || f(), d(), u(), g();
    //  else {
    //      var A, B, F, G, U, Q = new WOW({
    //              boxClass: "wow",
    //              animateClass: "animated",
    //              offset: 0,
    //              mobile: !1,
    //              live: !0
    //          }),
    //          J = e(".ripple-group"),
    //          K = e(".ripple-alone"),
    //          N = function () {
    //              J.on("click", function (a) {
    //                  parent = e(this).parents(".ripple-group-parent"), 0 === parent.find(".ink").length && parent.append("<span class='ink'></span>"), B = parent.find(".ink"), B.removeClass("animate"), B.height() || B.width() || (F = Math.max(parent.outerWidth(), parent.outerHeight()), B.css({
    //                      height: F,
    //                      width: F
    //                  })), G = a.pageX - parent.offset().left - B.width() / 2, U = a.pageY - parent.offset().top - B.height() / 2, B.css({
    //                      top: U + "px",
    //                      left: G + "px"
    //                  }).addClass("animate")
    //              }), K.on("click", function (a) {
    //                  A = e(this), 0 === A.find(".ink").length && A.append("<span class='ink'></span>"), B = A.find(".ink"), B.removeClass("animate"), B.height() || B.width() || (F = Math.max(A.outerWidth(), A.outerHeight()), B.css({
    //                      height: F,
    //                      width: F
    //                  })), G = a.pageX - A.offset().left - B.width() / 2, U = a.pageY - A.offset().top - B.height() / 2, B.css({
    //                      top: U + "px",
    //                      left: G + "px"
    //                  }).addClass("animate")
    //              })
    //          },
    //          V = e("html, body"),
    //          $ = e(".in-page-scroll").find("a[href*=#]"),
    //          ea = function () {
    //              $.on("click", function (a) {
    //                  V.animate({
    //                      scrollTop: e(e.attr(this, "href")).offset().top
    //                  }, 2e3, "easeInCubic"), a.preventDefault()
    //              })
    //          },
    //          aa = e("#scroll-progressbar").find("div"),
    //          ta = function () {
    //              y.scroll(function () {
    //                  var a = e(document).scrollTop(),
    //                      t = e(document).height() - y.height();
    //                  aa.width(a / t * 100 + "%")
    //              })
    //          },
    //          oa = e("#blur"),
    //          ia = function () {
    //              if (oa.length) {
    //                  var e = oa.height(),
    //                      a = e + 1,
    //                      t = oa.attr("data-blur"),
    //                      o = {};
    //                  o["data-top"] = "filter: blur(0px); translate3d(0px,0px,0px);", o["data--" + e + "-top"] = "filter: blur(" + t + " ); translate3d(0px,0px,0px);", o["data--" + a + "-top"] = "filter: blur(0px); translate3d(0px,0px,1px);", oa.attr(o)
    //              }
    //          },
    //          sa = e(".counter"),
    //          la = function () {
    //              sa.length && sa.counterUp({
    //                  delay: 10,
    //                  time: 800
    //              })
    //          },

    //          pa = e("#go-top"),
    //          ca = function () {
    //              y.scroll(function () {
    //                  y.scrollTop() + y.height() > e(document).height() - 200 ? pa.addClass("go-top-out") : pa.removeClass("go-top-out")
    //              })
    //          },
    //          ua = function () {
    //              var a = e("#sidebar");
    //              if (a.length) {
    //                  var t = a.offset().top - parseFloat(a.css("margin-top").replace(/auto/, 0)),
    //                      o = a.height(),
    //                      i = e(window).height(),
    //                      n = e(window).width(),
    //                      s = e(".container").width(),
    //                      l = (n - s) / 2,
    //                      r = e("#end-content").offset().top - parseFloat(e("#end-content").css("margin-top").replace(/auto/, 0)) - 180,
    //                      d = 30;
    //                  a.hasClass("col-sm-3") ? a.outerWidth(s / 4) : a.hasClass("col-sm-4") && a.outerWidth(s / 3), e(window).scroll(function () {
    //                      var n = e(this).scrollTop();
    //                      t + o + d > n + i || n + i > r ? n + i > r ? a.addClass("sidebarfixed").css({
    //                          top: r - o - n - d + "px",
    //                          right: l + 7.5
    //                      }) : a.removeClass("sidebarfixed").css({
    //                          top: "0px",
    //                          right: 15
    //                      }) : a.addClass("sidebarfixed").css({
    //                          top: i - o - d + "px",
    //                          right: l + 7.5
    //                      })
    //                  })
    //              }
    //          };
    //      if (ta(), N(), ca(), t(), o(), i(), n(), ua(), Q.init(), la(), s(), l(), p(), c(), d(), ea(), u(), ia(), g(), C.hasClass("animsition") || (f(), v())) {
    //          var fa;
    //      }
    //  }
 }(jQuery);

 $(document).ready(function () {
     if ($("#portfolio-filters").length) {
         $("#portfolio-filters").find('a:first-child').click();
     }

     $(document).on('click', '.open-modal', function () {
         $('#page').css('filter', 'blur(5px)');
         var elem = $(this),
             title = elem.data('title'),
             text = elem.data('content'),
             link = elem.data('link'),
             body = $('body');
         body.addClass('overflow-hidden');
         body.append(`<div class="product-modal fadeIn" id="productModal">
        <div class="product-modal-content">
            <div class="product-modal-header">
                <h3>${title}</h3>
                <button type="button" class="close close-modal" data-target="productModal"><span
                    aria-hidden="true">&times;</span></button>
            </div>
            <div class="product-modal-body">
                <p>${text}</p>
                <a target="_blank" href="${link}" class="btn btn-animated btn-split btn-default ripple-alone animsition-link"
                            data-animsition-out="fade-out-up-sm" data-animsition-out-duration="500"
                            data-text="Download PDF"><span>Download it</span></a>
            </div>
        </div>
    </div>`);

     });

     $(document).on('click', '.close-modal', function () {
         $('#productModal').remove();
         $('#page').css('filter', 'blur(0)');
         $('body').removeClass('overflow-hidden');
     });
 })