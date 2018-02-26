console.log("loaded mccode.js");
jQuery(document).ready(function( $ ) {
	
 	$('.carousel').carousel();	


 	// lets hide that alert on the slider shall we, when you hit the X
	$( "#hide-alert" ).click(function() {
	  $( ".alert" ).hide();
	});
	// these calls set the offset for the sticky sidebars in pixels
	$("#genesis-sidebar-secondary").stick_in_parent({offset_top: 0});
	$("#genesis-sidebar-primary").stick_in_parent({offset_top: 174});

		$('.squaregrid .col').hover(
		       function(){ $(this).addClass('hover') },
		       function(){ $(this).removeClass('hover') }
		)
		var audio = document.getElementsByTagName("audio")[0];
		$(".rel img").mouseenter(function() {
		  audio.play();

		});		
		$(".block").mouseenter(function() {
			$(this).addClass("jello");
		});		
		$(".block").mouseleave(function() {
			$(this).removeClass("jello");
		});				
});

function classTog(x) {
x.classList.toggle("change");
document.getElementById("left-sticky").classList.toggle("open");
}
