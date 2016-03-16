$(function(){

	$('a[href*="#"]:not([href="#"])').click(function() {
	  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top
	      }, 1000);
	      return false;
	    }
	  }
	});
	
	$('.about-bg').stellar({
				horizontalOffset: 10,
				verticalOffset: 40
			});
	$('.portfolio-bg').stellar({
				horizontalOffset: 10,
				verticalOffset: 40
			});
	


});