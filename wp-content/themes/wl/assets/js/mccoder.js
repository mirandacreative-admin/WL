jQuery(document).ready(function( $ ) { 	
 	
 	$('.carousel').carousel();	


 	// lets hide that alert on the slider shall we, when you hit the X
	$( "#hide-alert" ).click(function() {
	  $( ".alert" ).hide();
	});



	$("#genesis-sidebar-secondary, #genesis-sidebar-primary").stick_in_parent({offset_top: 176});
		$('.squaregrid .col').hover(
		       function(){ $(this).addClass('hover') },
		       function(){ $(this).removeClass('hover') }
		)
	
});