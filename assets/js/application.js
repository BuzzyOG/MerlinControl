	$(document).ready(function(){
	     $("#merlinslider").carousel();
	});

	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('nav').addClass('shrink');
			$('ul').addClass('shrink');
		} else {
			$('nav').removeClass('shrink');
			$('ul').removeClass('shrink');
		}
	});
	// Depency on Jquery + http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js [Must Include]

$(document).ready(function(){
	if ($(window).width() > 1300) {

		alert('shit works');

		if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
		window.onmousewheel = document.onmousewheel = wheel;
		 
		function wheel(event) {
		    var delta = 0;
		    if (event.wheelDelta) delta = event.wheelDelta / 120;
		    else if (event.detail) delta = -event.detail / 3;
		 
		    handle(delta);
		    if (event.preventDefault) event.preventDefault();
		    event.returnValue = false;
		}
		 
		function handle(delta) {
		    var time = 120; // delay time
		    var distance = 1200; // delta point 
		    // Dom where it will apply 
		    $('html, body').stop().animate({
		        scrollTop: $(window).scrollTop() - (distance * delta)
		    }, time );
		}


	}
});