//@prepros-prepend mixitup.min.js
//@prepros-prepend owl.carousel.min.js
//@prepros-prepend jquery.magnific-popup.js

jQuery(document).ready(function($) {
	
	var navHeight = $('nav').height();
	
	$('.hero .container').css('padding-top', navHeight);
	
	$('html').delay(300).queue(function(next) {
		$(this).addClass('loaded');
		next();
	});

	$('.read-more').click(function(e) {
		e.preventDefault();
		$(this).closest('.expanding-text').find('.additional-content').slideDown(300);
		$(this).fadeOut(10);
	});

	$('.read-less').click(function(e) {
		e.preventDefault();
		$(this).closest('.additional-content').slideUp(300);
		$(this).closest('.expanding-text').find('.read-more').fadeIn(10);
	});

	$('.vertical-tabs__tabs').find('.heading').first().addClass('active');
	$('.vertical-tabs__content').find('.item').first().show();
	
	$('.vertical-tabs__tabs .heading').click(function(e) {
		e.preventDefault();	
		$(this).siblings('.heading').removeClass('active');
		$(this).addClass('active');
		var targetContent = '.' + $(this).attr('id');
		$(this).closest('.vertical-tabs__tabs').siblings('.vertical-tabs__content').find('.item').slideUp();
		$(this).closest('.vertical-tabs__tabs').siblings('.vertical-tabs__content').find(targetContent).slideDown();
	});
	
	$('.toggle-contact .item').first().find('.answer').slideDown();
	$('.toggle-contact .item').first().find('.question').addClass('active');
	$('.toggle-contact .item .question').click(function(e) {
		$('.toggle-contact .item .question.active').removeClass('active');
		$(this).addClass('active');
		$('.toggle-contact .item .answer').slideUp();
		$(this).closest('.item').find('.answer').slideDown();
	});	

	$("nav a, footer a, .book-now-cta").on('click', function(e) {
		if (this.hash !== "") {
		  e.preventDefault();
		  var hash = this.hash;
		  if (hash == '#what') {
			  $('.vertical-tabs__tabs .heading').removeClass('active');
			  $('.vertical-tabs__tabs #tab5').addClass('active');
			  $('.vertical-tabs__content .item').slideUp();
			  $('.vertical-tabs__content .tab5').slideDown();
		  } else {
			  //
		  }
		  var desiredHeight = $('.nav-overlay nav').height() + 40;
		  $('html, body').animate({
			scrollTop: $(hash).offset().top - desiredHeight
		  }, 800, function(){
			//window.location.hash = hash;
			$('.nav-overlay').removeClass('active');
		  });
		}
	  });
	  
	$(window).scroll(function(){
		if ($(this).scrollTop() > navHeight) {
		   $('body').addClass('scrolled');
		} else {
		   $('body').removeClass('scrolled');
		}
	});
	
	$(".nav-trigger").on('click', function(e) {
		e.preventDefault();
		$('.nav-overlay').toggleClass('active');
	});
	
	$(".hero h1").after().on('click', function(e) {
		e.preventDefault();
		console.log('ffff');
		var heroHeight = $('.hero').height() - 40;
		$('html, body').animate({
			scrollTop: $('.hero').offset().top + heroHeight
		  }, 800, function(){
		  });
		
	});
	
	$('.wpcf7-form-control').on('input', function() {
		if ($(this).val()) {
			$(this)
				.parents('.form-field')
				.addClass('contains-content');
		} else {
			$(this)
				.parents('.form-field')
				.removeClass('contains-content');
		}
	});
	
	$(".small-map .button").on('click', function(e) {
		$(this).closest('.small-map').addClass('clicked');
	});
	
	$('.tabbed__panel').first().slideDown();
	$('.tabbed__controls p').first().addClass('selected');
	
	$('.tabbed__controls p').on('click', function(e) {
		e.preventDefault();
		var selectedTab = $(this).attr('data-control');
		var targetPanel = '.tabbed__panel.' + selectedTab;
		$('.tabbed__panel').slideUp();
		$(this).closest('.tabbed').find(targetPanel).slideDown();
		$('.tabbed__controls p.selected').removeClass('selected');
		$(this).addClass('selected');
	});	
	
	$('.tabbed__controls p.video').on('click', function(e) {
		e.preventDefault();	
			$('video').trigger('play');
	});	
	
	$('.tabbed__controls p').not('.video').on('click', function(e) {
		e.preventDefault();	
			$('video').trigger('pause');
	});	
	
	$(document).ready(function() {
		$('.gallery-wrapper').magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true,
			},
		});
	});
	
	$(document).ready(function() {
		$('.gallery-tab').magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true,
			},
		});
	});
	
	$(document).ready(function() {
	var url = $(location).attr('href'),
		urlParts = url.split("/");
		lastUrlPart = '.' + urlParts[urlParts.length-2];
		setTimeout(function() {
			$(lastUrlPart).addClass('active');
		}, 1000);
	});

	$('.toggle-carousel').owlCarousel({
		items: 1,
		loop:true,
		margin:20,
		padding: 20,
		nav:true,
		responsive:{
			0:{
				items:1
			}
		}
	});	

	$('.card-carousel').owlCarousel({
		items: 1,
		loop:true,
		margin:20,
		padding: 20,
		nav:true,
		dots: true,
		responsive:{
			0:{
				items:1
			}
		}
	});	
	$(document).ready(function() {
		var narrowWidth = $('.container').width();
		//$('.owl-stage').css('width', narrowWidth + 'px');
		$('.owl-item').css('width', narrowWidth + 'px');
	});
	$('.test-carousel').owlCarousel({
		items: 1,
		loop:false,
		margin:20,
		padding: 20,
		nav:true
	});	
	
	
	
	$(document).ready(function() {
		//Sets width of body as no width present on load due to display:none being set
		$toggleWidth = $('.toggle__item .head').width();
		$('.toggle__item .body').css('width', $toggleWidth);
	});
	
	$(document).on('click', '.toggle__wrapper .head', function(e) {
		e.preventDefault();
		if ($(this).closest('.toggle__wrapper').hasClass('active')) {
			$(this).closest('.toggle__wrapper').removeClass('active');
			$(this).siblings('.body').slideUp();
			$(this).closest('.toggle__item').removeClass('active');
		} else {
			$(this).closest('.toggle__wrapper').addClass('active');
			$(this).siblings('.body').slideDown();
			$(this).closest('.toggle__item').addClass('active');
			var desiredHeight = $('.nav-overlay nav').height() + 40;
			$('html, body').animate({
				scrollTop: $(this).offset().top - desiredHeight
			  }, 800, function(){
				//window.location.hash = hash;
				//$(selectedToggle).addClass('active');
				//$(selectedToggle).find('.body').delay(100).slideDown();
			  });
		}
	});
	
	/*
	$('.toggle__item.active .trigger').on('click', function(e) {
		$(this).closest('.toggle__item').removeClass('active');
		$(this).closest('.head').siblings('.body').slideUp();
	});
	
	$('.toggle__item .trigger').on('click', function(e) {
		e.preventDefault();
		$('.toggle__item.active').removeClass('active');
		$('.toggle__item.active .body').slideUp();
		var selectedToggle = $(this).closest('.toggle__item');
		var desiredHeight = $('.nav-overlay nav').height() + 40;
		//$('.toggle__item .body').slideUp();
		
		
		$('html, body').animate({
			scrollTop: $(selectedToggle).offset().top - desiredHeight
		  }, 800, function(){
			//window.location.hash = hash;
			$(selectedToggle).addClass('active');
			$(selectedToggle).find('.body').delay(100).slideDown();
		  });
	});
	
	*/
	
	/*if ($('.gallery-wrapper').length) {
	var macy = Macy({
		container: '.gallery-wrapper',
		trueOrder: false,
		waitForImages: true,
		margin: 20,
		columns: 3,
		breakAt: {
			1200: 3,
			940: 3,
			520: 2,
			400: 1
		}
	});
	}*/

	/*$('.masonry').each(function(index, value) {
		var galleryClass = `.gallery-wrapper${index}`;
		var macy = Macy({
			container: galleryClass,
			trueOrder: false,
			waitForImages: true,
			margin: 20,
			columns: 3,
			breakAt: {
				1200: 3,
				940: 3,
				520: 2,
				400: 1
			}
		});
	});*/
	
	$(function() {
		$('.gallery-tab').slideUp();
		$('.gallery-tab').first().slideDown();
	});

	$('.gallery-filter p').on('click', function(e) {
		e.preventDefault();
		var selectedCat = $(this).attr('data-cat');
		$('.gallery-filter p.active').removeClass('active');
		$(this).addClass('active');
		$(this).closest('.gallery-filter').siblings('.gallery-tab').slideUp();
		$(this).closest('.gallery-filter').siblings('.gallery-tab.' + selectedCat).slideDown();
	});
	
	var scrolled = $(window).scrollTop();
	$('.parallax').each(function(index) {
		var imageSrc = $(this).data('image-src');
		var imageHeight = $(this).data('height');
		//$(this).css('background-image', 'url(' + imageSrc + ')');
		//$(this).css('height', imageHeight);
		// Adjust the background position.
		var initY = $(this).offset().top;
		var height = $(this).height();
		var diff = scrolled - initY;
		var ratio = Math.round((diff / height) * 100);
	});
	
	$(window).scroll(function() {
		var scrolled = $(window).scrollTop();
		$('.parallax').each(function(index, element) {
			var initY = $(this).offset().top;
			var height = $(this).height();
			var endY = initY + $(this).height();

			// Check if the element is in the viewport.
			var visible = isInViewport(this);
			if (visible) {
				var diff = scrolled - initY;
				var ratio = Math.round((diff / height) * 100);
				$(this).css('background-position', 'center ' + parseInt(-(ratio * -4)) + 'px');
			}
		});
		
	});
	$(window).scroll(function() {
		var windowPosition = $(window).scrollTop();
		var verticalOffset = windowPosition / 4;
		var birdFly = windowPosition * 0.5;
		$('.parallax-down').css('transform', 'translateY( ' + verticalOffset + 'px');
		$('.logo-bird').css({transform: 'translate3d(' + birdFly + 'px, 0px, 0px)'});
		var logoScroll = windowPosition / 1.5;
		$('.logo-wrapper').css({transform: 'translateY( -' + logoScroll + 'px)'});
		var logoOffset = $(window).height() - ($('.logo-wrapper').height() + 48);
		if ($(window).scrollTop() >= logoOffset) {
			$('.logo-wrapper').addClass('atTop');
		} else {
			$('.logo-wrapper').removeClass('atTop');
		}
		if ($('#island-outlines').css('opacity') == 0) {
			$('#path33_1_').addClass('reveal');
			$('#fregate-small text').hide();
		}
		if ($('#island-outlines').css('opacity') > 0.1) {
			$('#path33_1_').removeClass('reveal');
			$('#fregate-small text').show();
		}
	});
	

	// Check if the element is in the viewport.
	// http://www.hnldesign.nl/work/code/check-if-element-is-visible/
	function isInViewport(node) {
		// Am I visible? Height and Width are not explicitly necessary in visibility
		// detection, the bottom, right, top and left are the essential checks. If an
		// image is 0x0, it is technically not visible, so it should not be marked as
		// such. That is why either width or height have to be > 0.
		var rect = node.getBoundingClientRect();
		return (rect.height > 0 || rect.width > 0) && rect.bottom >= 0 && rect.right >= 0 && rect.top <= (window.innerHeight || document.documentElement.clientHeight) && rect.left <= (window.innerWidth || document.documentElement.clientWidth);
	}

	const opacityHeading = 300;
	const opacityMap = 500;
	const sizeMap = 1000;
	window.addEventListener('scroll', () => {
		const currentScroll = window.pageYOffset;
		if (currentScroll <= opacityHeading) {
			removeOpacity = 1 - currentScroll / opacityHeading;
		} else {
			removeOpacity = 0;
		}
		$('.parallax-down').children('.container').css('opacity', removeOpacity);
		$('svg.logo-bird').css('opacity', removeOpacity);
		if (currentScroll <= opacityMap) {
			removeOpacitySlowly = 1 - currentScroll / opacityMap;
		} else {
			removeOpacitySlowly = 0;
		}
		$('#map #island-outlines, #map #island-names').css('opacity', removeOpacitySlowly);
		if (currentScroll <= opacityMap) {
			addOpacity = 0.1 + currentScroll / opacityMap;
		} else {
			addOpacity = 1;
		}
		
		if (currentScroll <= sizeMap) {
			var growMap = 0.5 + currentScroll / sizeMap;
			var birdFly = 1 + currentScroll / sizeMap;
			if (growMap >= 1) {
				growMap = 1;
				$('body').addClass('reveal');
			} else {
				$('body').removeClass('reveal');
			}
		}
		$('#map').css('transform', 'scale(' + growMap + ')');
		
	});
	
	$('.scroll-bottom__trigger').click(function(event) {
		event.preventDefault();
		var scroll_target = $('.scroll-bottom__target');
		$('html, body').animate(
			{
				scrollTop: $(scroll_target).offset().top,
			},
			2500
		);
		setTimeout(function() {
			$('.scroll-bottom__trigger').addClass('at-bottom');
		}, 2000);
	});
	
	//$('.map-item').click(function(event) {
	//	console.log('casting away');
	//});
	
	$(".map-item a").hover(function() {
		$(this).siblings('.map-item__panel').addClass("active");
	}, function() {
		$(this).siblings('.map-item__panel').removeClass("active");
	});
	
	var self = this, container, running=false, currentY = 0, targetY = 0, oldY = 0, maxScrollTop= 0, minScrollTop, direction, onRenderCallback=null,
	fricton = 0.95, // higher value for slower deceleration
	vy = 0,
	stepAmt = 1,
	minMovement= 0.1,
	ts=0.1;

	var updateScrollTarget = function (amt) {
		targetY += amt;
		vy += (targetY - oldY) * stepAmt;
		oldY = targetY;
	}
	var render = function () {
	if (vy < -(minMovement) || vy > minMovement) {
		currentY = (currentY + vy);
		if (currentY > maxScrollTop) {
			currentY = vy = 0;
		} else if (currentY < minScrollTop) {
				vy = 0;
				currentY = minScrollTop;
			}
		container.scrollTop(-currentY);
		vy *= fricton;
	 //   vy += ts * (currentY-targetY);
		// scrollTopTweened += settings.tweenSpeed * (scrollTop - scrollTopTweened);
		// currentY += ts * (targetY - currentY);
	
		if(onRenderCallback){
			onRenderCallback();
		}
	}
}
	var animateLoop = function () {
	if(! running)return;
	requestAnimFrame(animateLoop);
	render();
	//log("45","animateLoop","animateLoop", "",stop);
	}
	var onWheel = function (e) {
	e.preventDefault();
	var evt = e.originalEvent;
	
	var delta = evt.detail ? evt.detail * -1 : evt.wheelDelta / 40;
	var dir = delta < 0 ? -1 : 1;
	if (dir != direction) {
		vy = 0;
		direction = dir;
	}

//reset currentY in case non-wheel scroll has occurred (scrollbar drag, etc.)
currentY = -container.scrollTop();

updateScrollTarget(delta);
}

/*
* http://paulirish.com/2011/requestanimationframe-for-smart-animating/
*/
window.requestAnimFrame = (function () {
return  window.requestAnimationFrame ||
		window.webkitRequestAnimationFrame ||
		window.mozRequestAnimationFrame ||
		window.oRequestAnimationFrame ||
		window.msRequestAnimationFrame ||
		function (callback) {
			window.setTimeout(callback, 1000 / 60);
		}; 
	  
		
})();

/*
* http://jsbin.com/iqafek/2/edit
*/
var normalizeWheelDelta = function () {
// Keep a distribution of observed values, and scale by the
// 33rd percentile.
var distribution = [], done = null, scale = 30;
return function (n) {
	// Zeroes don't count.
	if (n == 0) return n;
	// After 500 samples, we stop sampling and keep current factor.
	if (done != null) return n * done;
	var abs = Math.abs(n);
	// Insert value (sorted in ascending order).
	outer: do { // Just used for break goto
		for (var i = 0; i < distribution.length; ++i) {
			if (abs <= distribution[i]) {
				distribution.splice(i, 0, abs);
				break outer;
			}
		}
		distribution.push(abs);
	} while (false);
	// Factor is scale divided by 33rd percentile.
	var factor = scale / distribution[Math.floor(distribution.length / 3)];
	if (distribution.length == 500) done = factor;
	return n * factor;
};
}();


	
	
}); //Don't remove ---- end of jQuery wrapper

