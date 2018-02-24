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
	// these calls set the offset for the sticky sidebars in pixels
	$("#genesis-sidebar-secondary").stick_in_parent({offset_top: 0});
	$("#genesis-sidebar-primary").stick_in_parent({offset_top: 174});

		$('.squaregrid .col').hover(
		       function(){ $(this).addClass('hover') },
		       function(){ $(this).removeClass('hover') }
		)


		var grownClip = $("#grown")[0];
		$("#grown-ups")
			.mouseenter(function() {
				console.log('one');
				grownClip.play();
			});




		var grownAudio = document.getElementById("grown"); 

		function playGrown() { 
			console.log('two');
		    grownAudio.play(); 
		} 
		item.addEventListener('mouseover', grownAudio.playGrown, false);		
	
});