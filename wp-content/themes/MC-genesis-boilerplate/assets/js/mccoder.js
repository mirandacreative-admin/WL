jQuery(document).ready(function( $ ) {
	// $ Works! You can test it with next line if you like
	// console.log($);
	var livedivwidth = $(".entry-content").width();
	// var windowheight = window.innerHeight;
	// var sidemenuheight = windowheight - headerheight;

 	console.log(livedivwidth);

 	// $('#left-sticky').css( "height", sidemenuheight ); 
 	// $('#right-sticky').css( "height", sidemenuheight );  	
 	
 	$('.carousel').carousel();	


 	// lets hide that alert on the slider shall we, when you hit the X
	$( "#hide-alert" ).click(function() {
	  $( ".alert" ).hide();
	});

	$("#stickem").stick_in_parent({offset_top: 32});
	$("#genesis-sidebar-secondary, #genesis-sidebar-primary").stick_in_parent({offset_top: 250});
		$('.squaregrid .col').hover(
		       function(){ $(this).addClass('hover') },
		       function(){ $(this).removeClass('hover') }
		)
	
});