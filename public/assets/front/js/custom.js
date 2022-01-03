$(window).scroll(function(){
    if ($(this).scrollTop() > 15) {
       $('.site-header').css({"top":"0"});
    } else {
       $('.site-header').css({"top":"35px"});
    }
});

// AOS JS
AOS.init({
    duration: 1500,
    disable: 'tablet',
    disable: 'mobile'
});

// Sidebar-JS
$(document).ready(function(){
    $("#showDistrict").click(function(event){
      event.preventDefault();
      $(".district-list").addClass("active");
    });
    $("#close_btn").click(function(){
      $(".district-list").removeClass("active");
    });
});


// Testimonial Slider JS
$('#bannerSlider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
});


// Gallery Slider JS
$('#photoSlider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});

$('#videoSlider').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
});


$('#clientSlider').owlCarousel({
    loop:true,
    margin:15,
    
    nav:false,
    dots: false,
    responsive:{
        0:{
            autoplay:true,
            autoplayTimeout:3000,
            items:1
        },
        600:{
            autoplay:true,
            autoplayTimeout:3000,
            items:3
        },
        1000:{
            items:6
        }
    }
})
// alert("hi");
var fontSize = parseInt($('body').css("font-size"));
	$( ".navbar-nav li:nth-child(2) > ul" ).addClass('research');
	
	$( ".navbar-nav > li:nth-child(1) > a, .navbar-nav > li:nth-child(2) > a, .navbar-nav > li:nth-child(3) > a, .navbar-nav > li:nth-child(5) > a" ).append( '<span class="caret"></span>' );
	
	    $('.panel-title a').click(function(e) {
           $(this).find('span').toggleClass('plus');
        });
	
	
	$('.fontI').click(function(e) {
		if((fontSize >= 12) && (fontSize < 20)){
			fontSize = fontSize + 2;
			$('body').css({'font-size':fontSize});
		}
	});
	
	
	$('.fontD').click(function(e) {
		if((fontSize > 12) && (fontSize <= 20)){
			fontSize = fontSize - 2;
			$('body').css({'font-size':fontSize});
		}
	});

	$('.fontN').click(function(e) {
		fontSize = 16;
		$('body').css({'font-size':fontSize});
	});
	
  function parserInt(value){
    if(typeof value === 'undefined' || value === null || value === 'null' || value === ''){
      return 0
    }else{
        return parseInt(value)
    }
  }