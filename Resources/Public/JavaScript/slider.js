$(function () {
    initBxSlider();
});


function initBxSlider() {
	$('.bxslider').each(function () {

		$(this).bxSlider({
			// GENERAL
			mode: 'horizontal',
			slideSelector: '',
			infiniteLoop: false,
			hideControlOnEnd: true,
			speed: 500,
			easing: null,
			slideMargin: 0,
			startSlide: 0,
			randomStart: false,
			captions: false,
			ticker: false,
			tickerHover: false,
			adaptiveHeight: false,
			adaptiveHeightSpeed: 500,
			video: false,
			useCSS: true,
			preloadImages: 'visible',
			responsive: true,
			slideZIndex: 50,
			wrapperClass: 'bx-wrapper',

			// TOUCH
			touchEnabled: true,
			swipeThreshold: 50,
			oneToOneTouch: true,
			preventDefaultSwipeX: true,
			preventDefaultSwipeY: false,

			// ACCESSIBILITY
			ariaLive: true,
			ariaHidden: true,

			// KEYBOARD
			keyboardEnabled: false,

			// PAGER
			pager: true,
			pagerType: 'full',
			pagerShortSeparator: ' / ',
			pagerSelector: null,
			buildPager: null,
			pagerCustom: null,

			// CONTROLS
			controls: true,
			nextText: 'Next',
			prevText: 'Prev',
			nextSelector: null,
			prevSelector: null,
			autoControls: false,
			startText: 'Start',
			stopText: 'Stop',
			autoControlsCombine: false,
			autoControlsSelector: null,

			// AUTO
			auto: false,
			pause: 4000,
			autoStart: true,
			autoDirection: 'next',
			stopAutoOnClick: false,
			autoHover: false,
			autoDelay: 0,
			autoSlideForOnePage: false,

			// CAROUSEL
			minSlides: 1,
			maxSlides: 1,
			moveSlides: 0,
			slideWidth: 0,
			shrinkItems: false,

			// CALLBACKS
			onSliderLoad: function () {
				return true;
			},
			onSlideBefore: function () {
				return true;
			},
			onSlideAfter: function () {
				return true;
			},
			onSlideNext: function () {
				return true;
			},
			onSlidePrev: function () {
				return true;
			},
			onSliderResize: function () {
				return true;
			}
		});
	});
}