var $ = jQuery;
const JSCCommon = {
	// часть вызов скриптов здесь, для использования при AJAX
	btnToggleMenuMobile: [].slice.call(document.querySelectorAll(".toggle-menu-mobile--js")),
	menuMobile: document.querySelector(".menu-mobile--js"),
	menuMobileLink: [].slice.call(document.querySelectorAll(".menu-mobile--js ul li a")),
	body: document.querySelector("body"),

	modalCall() {
		$('.link-modal, [href="#modal-call"]').fancybox({
			arrows: false,
			infobar: false,
			touch: false,
			type: 'inline',
			i18n: {
				en: {
					CLOSE: "Закрыть",
					NEXT: "Вперед",
					PREV: "Назад",
					// PLAY_START: "Start slideshow",
					// PLAY_STOP: "Pause slideshow",
					// FULL_SCREEN: "Full screen",
					// THUMBS: "Thumbnails",
					// DOWNLOAD: "Download",
					// SHARE: "Share",
					// ZOOM: "Zoom"
				},
			},
		});

		$(".modal-close-js").click(function () {
			$.fancybox.close();
		})
	},
	// /magnificPopupCall
	toggleMenu() {
		let _this = this;
		_this.btnToggleMenuMobile.forEach(function (element) {
			element.addEventListener('click', function () {

				_this.btnToggleMenuMobile.forEach(function (element) {
					element.classList.toggle("on");
				});
				_this.menuMobile.classList.toggle("active");
				_this.body.classList.toggle("fixed");

				return false;
			});
		});
	},

	closeMenu() {
		let _this = this;
		_this.btnToggleMenuMobile.forEach(function (element) {
			element.classList.remove("on");

		});
		_this.menuMobile.classList.remove("active");
		_this.body.classList.remove("fixed");

	},

	mobileMenu() {
		// закрыть/открыть мобильное меню
		let _this = this;

		_this.toggleMenu();
		_this.menuMobileLink.forEach(function (element) {
			element.addEventListener('click', function (e) {
				console.log(element);
				// _this.closeMenu(); 

			});
		})
		document.addEventListener('mouseup', function (event) {
			let container = event.target.closest(".menu-mobile--js.active"); // (1)
			if (!container) {
				_this.closeMenu();

			}
		});
	},
	// /mobileMenu

	// табы  . 
	tabscostume(tab) {
		$('.' + tab + '__caption').on('click', '.' + tab + '__btn:not(.active)', function (e) {
			$(this)
				.addClass('active').siblings().removeClass('active')
				.closest('.' + tab).find('.' + tab + '__content').hide().removeClass('active')
				.eq($(this).index()).show().addClass('active');

		});
	},
	// /табы  
	inputMask() {
		// mask for input
		$('input[type="tel"]').attr("pattern", "[+][0-9]{1}[(][0-9]{3}[)][0-9]{3}-[0-9]{2}-[0-9]{2}").inputmask("+9(999)999-99-99");
	}
	// /inputMask

};

function eventHandler() {
	// полифил для object-fit
	objectFitImages();
	// Picture element HTML5 shiv
	document.createElement("picture");
	// для свг
	svg4everybody({});

	JSCCommon.modalCall();

	JSCCommon.tabscostume('tabs');

	JSCCommon.mobileMenu();

	// JSCCommon.inputMask();

	// JSCCommon.CustomInputFile();
	// добавляет подложку для pixel perfect
	// $(".main-wrapper").after('<div class="screen" style="background-image: url(screen/main.jpg);"></div>')
	// /добавляет подложку для pixel perfect



	// const url = document.location.href;
	// $.each($(".top-nav__nav a "), function() {

	// 	if (this.href == url) {
	// 		if ($(this).hasClass("top-nav__link") == true) {

	// 			$(this).addClass('top-nav__link-active');
	// 		}
	// 		if ($(this).hasClass("footer__link") == true) {

	// 			$(this).addClass('footer__link-active');
	// 		} 
	// 	}; 
	// }); 

	// /закрыть/открыть мобильное меню

	function heightses() {

		const w = $(window).width();

		// $(".main-wrapper").css("margin-bottom", $('footer').height())
		// $(".otz__item .text-wrap ").height('auto').equalHeights();
		// 
		// скрывает моб меню

		const topH = $(".top-nav").innerHeight();

		$(window).scroll(function () {
			if ($(window).scrollTop() > topH * 2) {
				$('.top-nav  ').addClass('fixed');
				console.log(1)
			} else {
				$('.top-nav  ').removeClass('fixed');
				console.log(2)
			}
		});

		$(window).scroll(function () {
			if ($(this).scrollTop() > topH) {

				$('.btn-top  ').addClass('active');
			}
			else if ($(this).scrollTop() < topH) {

				$('.btn-top ').removeClass('active');
			}
		});
		// конец добавил
		if (window.matchMedia("(min-width: 992px)").matches) {
			// JSCCommon.closeMenu();
		}
	}

	$(window).resize(function () {
		heightses();

	});

	heightses();



	$(" .btn-top").click(function () {
		var elementClick = $('header');
		var destination = $(elementClick).offset().top;

		$('html, body').animate({ scrollTop: 0 }, 1100);

		return false;
	});

	// листалка по стр
	$(" .top-nav li a, .scroll-link").click(function () {
		const elementClick = $(this).attr("href");
		const destination = $(elementClick).offset().top;

		$('html, body').animate({ scrollTop: destination }, 1100);

		return false;
	});


	$(" .menu .menu-item-has-children > a").click(function (e) {
		e.preventDefault();
		$(this).siblings('.sub-menu').toggleClass('submenu-active');
	});

	const icon = '<svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve" ><path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z" ></path>';
	const arrl2 = (' <div class="r">' + icon),
		arrr2 = (' <div class="l">' + icon);
	// // карусель

	const defaultSlide = {
		speed: 600,
		infinite: true,
		arrows: true,
		mobileFirst: true,
		// prevArrow: arrr2,
		// nextArrow: arrl2,
		// autoplay: true,
		autoplaySpeed: 6000,
		lazyLoad: 'progressive',
	};
	$('.header-block__slider--js').slick({
		...defaultSlide,

		arrows: false,
		fade: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		appendDots: $('.header-block__slider-dots')

	});
	$('.s-partners__slider--js').slick({
		...defaultSlide,

		arrows: false,
		rows: 2,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		mobileFirst: true,
		// appendDots: $('.s-partners__slider-dots'),

		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					rows: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			}
		]
	});

	$(document).on('beforeClose.fb', function (e, instance, slide) {
		// Your code goes here
		$("form").trigger("reset");
		$(".wpcf7-not-valid-tip , div.wpcf7-validation-errors, div.wpcf7-acceptance-missing").hide();
	});
	$(".wpcf7").on('wpcf7:mailsent', function (event) {
		// $.magnificPopup.close(); 
		$.fancybox.close();
		$.fancybox.open({
			src: '#modal-thanks',
			type: 'inline'
		});
		$("div.wpcf7-mail-sent-ok").hide();
		// ym(55556008, 'reachGoal', 'order', goalParams); 
		// yaCounter56382826.reachGoal('zakaz');
	});
	$("div.wpcf7-mail-sent-ok").hide(); // yaCounter50059198.reachGoal('done');

	$(document).on('click', '.link-modal', function () {

		var th = $(this);
		var modal = th.attr('href');
		$(modal).find(".order").val(th.data('order'));
		$(modal).find(".form-wrap__title--js").html(th.data('title'));
		// $(modal).find(".form-wrap__text--js").html(th.data('text')); 
		$(modal).find(".form-wrap__btn").val(th.data('title'));

	})
	$('.s-services__block  a[href="#modal-call"]').click(function () {
		$("#modal-call .order").val($(this).text())
		$(modal).find(".form-wrap__title--js").html("Получить консультацию");
		$(modal).find(".form-wrap__btn").val("Получить консультацию");
	})

	var wow = new WOW({
		mobile: false
	});
	wow.init();
};
if (document.readyState !== 'loading') {
	eventHandler();
} else {
	document.addEventListener('DOMContentLoaded', eventHandler);
}