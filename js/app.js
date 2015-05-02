$(document).ready(function(){
	// smooth scrolling for any link targetting an existing ID
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	
	// set landing page intro to viewport height (or any other element, just use .viewport-height class )
	function setHeight() {
    	windowHeight = $(window).innerHeight();
    	$('.viewport-height').css('min-height', windowHeight);
  	};
  	setHeight();

	$(window).resize(function() {
		setHeight();
  	});
});  // end docready