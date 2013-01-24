!function ($) {

	$(function(){
		$('#clientesCarousel').carousel();
		$('#headerCarousel').carousel();
		/*$('ul.roundabout-holder li')
			.bind({
			"reposition": function() {
			  var degrees = $(this).data('roundabout').degrees,
			      roundaboutBearing = $(this).parent().data('roundabout').bearing,
			      rotateY = Math.round(roundaboutBearing - degrees);
			  
			  $(this).css({
			    "-webkit-transform": "perspective(2000) rotateY(" + rotateY + "deg)",
			    "-moz-transform": "perspective(2000) rotateY(" + rotateY + "deg)",
			    "transform": "perspective(2000) rotateY(" + rotateY + "deg)"
			  });
			}
	    	});*/
	    
	    $('ul.roundabout-holder').roundabout({
			minScale: 0.9,
			easing: 'easeOutCubic',
			duration: 1900,
			autoplay: true
	    });

		//simple error-handling manually :P
		$('.error-message')
			.addClass('alert')
			.addClass('alert-error');
	})

}(window.jQuery);