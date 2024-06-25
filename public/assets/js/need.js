(function ($) {
	"use strict";

	document.title = 'Cliper - Cliper Photo Studio HTML5 Template';
	$('img').lazy();


   window.onload = function(){
	setInterval(function(){
		$("#loading").fadeOut(1000);	
	}, 1000);
 };

	//file upload js
	$('.gallery').miv({
		image: '.cam',
		video: '.vid'
	});

	//magnifi popup
	$('.popupImage').magnificPopup({ type: 'iframe' });

	// meanmenu
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "992"
	});

	$('#mobile-menu-lg').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "2500"
	});


	//acordion active
	var accordionhead = document.getElementsByClassName('portion');

	for (var x = 0; x < accordionhead.length; x++) {
		accordionhead[x].addEventListener('click', function () {
			this.classList.toggle('jjj');
		});
	}



	// init Isotope
	var $grid = $('.grid').isotope({
		// options
	});
	// filter items on button click
	$('.filter-button-group').on('click', 'button', function () {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});



	$('.open-mobile-menu').on('click', function () {
		$('.side-info').addClass('info-open');
		$('.offcanvas-overlay').addClass('overlay-open');
	})

	$('.side-info-close,.offcanvas-overlay,.mobile_one_page li.menu-item a.nav-link').on('click', function () {
		$('.side-info').removeClass('info-open');
		$('.offcanvas-overlay').removeClass('overlay-open');
	})

	// WOW active
	new WOW().init();


	//blog single active
	var $singleblog = $('.blog_single_active');
	if ($singleblog.length > 0) {
		$singleblog.slick({
			dots: false,
			arrows: true,
			infinite: true,
			prevArrow: '<button class="slide-arrow prev-arrow-single"><i class="far fa-long-arrow-alt-left"></i></button>',
			nextArrow: '<button class="slide-arrow next-arrow-single"><i class="far fa-long-arrow-alt-right"></i></button>',
			speed: 300,
			slidesToShow: 2,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	}


	//single blog activition
	var $blogactiv = $('.blog_details_aactivition');
	if ($blogactiv.length > 0) {
		$('.blog_details_activition').slick({
			dots: false,
			arrows: true,
			infinite: true,
			prevArrow: '<button class="slide-arrow prev-arrow-details"><i class="far fa-long-arrow-alt-left"></i>preveous post</button>',
			nextArrow: '<button class="slide-arrow next-arrow-details"><i class="far fa-long-arrow-alt-right"></i>next post</button>',
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	}


	var $testtwo = $('.testimonial_two_active');
	if ($testtwo.length > 0) {
		$testtwo.slick({
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 900,
					settings: {
						slidesToShow: 1
						,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	}

	//currencey
	$("#showcurrencey").click(function () {
		$(".currencey").slideToggle();
	});

	//project activition homepage two
	var $proj = $('.project_activitionn');
	if ($proj.length > 0) {
		$proj.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 2,
			centerPadding: 10,
			prevArrow: '<button class="slide-arrow prev-burger"><i class="far fa-arrow-left"></i></button>',
			nextArrow: '<button class="slide-arrow next-burger"><i class="far fa-long-arrow-right"></i></button>',
		});

		responsive: [
			{
				breakpoint: 1600,
				settings: {
					centerPadding: '40px',
					slidesToShow: 3,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					centerPadding: '40px',
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerPadding: '40px',
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	}

	//service activition
	var $service_activition = $('.service_activition');
	if ($service_activition.length > 0) {
		$service_activition.slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			centerPadding: 0,
			// dots: true,
			prevArrow: '<button class="slide-arrow prev-arrow iconaddone"><i class="icon-Group-78"></i></button>',
			nextArrow: '<button class="slide-arrow next-arrow iconaddtwo"><i class="far fa-long-arrow"></i></button>',

			responsive: [
				{
					breakpoint: 1600,
					settings: {
						centerPadding: '40px',
						slidesToShow: 3,
						slidesToScroll: 2,
					}
				},
				{
					breakpoint: 1024,
					settings: {
						centerPadding: '40px',
						slidesToShow: 2,
						slidesToScroll: 2,
					}
				},
				{
					breakpoint: 768,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 480,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}
			]

		});

	}

	//service activition
	var $brand = $('.brand_img');
	if ($brand.length > 0) {
		$brand.slick({
			infinite: true,
			slidesToShow: 5,
			slidesToScroll: 2,
			centerPadding: 10,
			arrows: true,
			prevArrow: '<button class="slide-arrow prev-burger brand-prev"><i class="far fa-arrow-left"></i></button>',
			nextArrow: '<button class="slide-arrow next-burger brand-next"><i class="far fa-long-arrow-right"></i></button>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						centerPadding: '40px',
						slidesToShow: 3,
						slidesToScroll: 4,
					}
				},
				{
					breakpoint: 768,
					settings: {
						centerPadding: '40px',
						slidesToShow: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1,
						centerMode: true,
					}
				}
			]
		});
	}

	//service activition
	var $homeoneBlog = $('.blog_activition_home_one');
	if ($homeoneBlog.length > 0) {
		$homeoneBlog.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 2,
			centerPadding: 10,
			prevArrow: '<button class="slide-arrow prev-arrow"><i class="far fa-arrow-"></i></button>',
			nextArrow: '<button class="slide-arrow next-arrow rotatearrow"><i class="far fa-long-right"></i></button>',
			responsive: [
				{
					breakpoint: 1700,
					settings: {
						centerPadding: '40px',
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 1400,
					settings: {
						centerPadding: '40px',
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 1200,
					settings: {
						centerPadding: '40px',
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 1024,
					settings: {
						centerPadding: '40px',
						slidesToShow: 2,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 768,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						centerPadding: '0px',
						slidesToShow: 1,
						centerMode: true,
					}
				}
			]
		});
	}

	// testimonial-active one
	var $activetest = $('.testimonial-active');
	if ($activetest.length > 0) {
		$activetest.slick({
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});

	}

	//project activition homepage two
	var $projectactive = $('.project_activition');
	if ($projectactive.length > 0) {
		$projectactive.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 2,
			centerPadding: 10,
			prevArrow: '<button class="slide-arrow prev-arrow"><i class="far fa-arrow-left"></i></button>',
			nextArrow: '<button class="slide-arrow next-arrow"><i class="far fa-long-arrow-right"></i></button>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				},
				{
					breakpoint: 768,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});

	}

	//testimonial two activition
	var $testi = $('.testimonial_two_activition');
	if ($testi.length > 0) {
		$testi.slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 2,
			centerPadding: 10,
			arrows: false
		});
	}




	//magnifi popup
	$('.portfolio').magnificPopup({ type: 'image' });


	// Sticky Header Js

	$(window).on('scroll', function () {

		var scroll = $(window).scrollTop();

		if (scroll < 245) {

			$("#header-sticky").removeClass("sticky-bar");

		} else {

			$("#header-sticky").addClass("sticky-bar");

		}

	});
	//slider js
	$("#container1").twentytwenty();
	



})(jQuery);