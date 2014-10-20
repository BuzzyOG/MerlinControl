	// Starts the slider on the homepage
	$(document).ready(function(){
	     $("#merlinslider").carousel();
	});

	// Loads the navbar shrinking
	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('nav').addClass('shrink');
			$('ul').addClass('shrink');
		} else {
			$('nav').removeClass('shrink');
			$('ul').removeClass('shrink');
		}
	});

	// This is meant to set the timer of the slider
	$(document).ready(function(){
		$('#merlinslider').carousel({
			interval: 9000
		})
	});

	// This removes the autocompete on most browsers
	if ($.browser) {
	    $('input[name="password"]').attr('autocomplete', 'off');
	}


	// And this is for the email verifcation code
	$('.verify').keyup(function() {
		var foo = $(this).val().split("-").join(""); // remove hyphens
		if (foo.length > 0) {
			foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
		}
		$(this).val(foo);
	});

	(function($) {
	$.fn.extend( {
		limiter: function(limit, elem) {

			$(this).on("keyup focus", function() {
				setCount(this, elem);
			});

			$(this).on("keydown focus", function() {
				setCount(this, elem);
			});

			function setCount(src, elem) {
				var chars = src.value.length;
				if (chars > limit) {
					src.value = src.value.substr(0, limit);
					chars = limit;
				}
				elem.html( limit - chars );
			}

			setCount($(this)[0], elem);

		}
	});
	})(jQuery);

	var elem = $(".verify");
	$(".verify").limiter(14, elem);