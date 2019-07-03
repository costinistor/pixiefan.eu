// JavaScript Document
$(document).ready(function(){
	"use strict";

/* === Navigation scroll === */
	//$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			history.pushState("", document.title, window.location.pathname);
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length && $(window).width() >= 799) {
					$('html,body').animate({
						scrollTop: target.offset().top - 55
					}, 1000);
					return false;
				}else {
					$('html,body').animate({
						scrollTop: target.offset().top - 91
					}, 1000);
					return false;
				}			
			}
		});
	//});

/* === Navigation fixed === */
	var header = $('.header');
	$(window).scroll(function(){
		if($(window).scrollTop() > 140 && $(window).width() >= 799){
			header.css('background', 'rgba(20, 26, 34, 0.9)').addClass('fixed');
			$('.logo').css('width', '130px');
			$('nav').css('margin-top', '20px');
		}else if($(window).scrollTop() == 0 && $(window).width() >= 799){
			header.css('background', 'rgba(20, 26, 34, 0.6)').removeClass('fixed');
			$('.logo').css('width', '180px');
			$('nav').css('margin-top', '26px');
		}else if($(window).scrollTop() > 140 && $(window).width() <= 799){
			header.css('background', 'rgba(20, 26, 34, 0.9)').addClass('fixed');
		}else if($(window).scrollTop() == 0 && $(window).width() <= 799){
			header.css('background', 'rgba(20, 26, 34, 0.6)').removeClass('fixed');
		}
	});

// Remove hash from url
		$('body').click(function(){
			$('.contact-message p').slideUp();
			history.pushState("", document.title, window.location.pathname);
		});

	
});
function myFunc(){
	history.pushState("", document.title, window.location.pathname);
}