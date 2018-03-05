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
		if ($(window).width() < 1090) {
   			$("#menu-test").appendTo("#menuslot");
		}
					
});

function classTog(x) {
x.classList.toggle("change");
document.getElementById("left-sticky").classList.toggle("open");
}

// off canvas menu hours
jQuery(document).ready(function( $ ) {
	// get the current day
	var date_obj = new Date();
	var today = date_obj.getDay();
	// because javascript doesn't have day names in date functions, we make a dictionary object
	day_dict = {
		1: 'monday',
		2: 'tuesday',
		3: 'wednesday',
		4: 'thursday',
		5: 'friday',
		6: 'saturday',
		7: 'sunday'
	};

	// loop through the list, and add the class to make the current day purple
	$('.off-canvas-menu-hours').each(function(elem){
		// check the current day against each of the elements, and... add the class for purple text
		if($(this).data('day') === day_dict[today]){
			$(this).addClass('current-day-hours-warm-purple');
		} else {
		// there's no need to remove a class that isn't there in the first place, but... just in case...
			$(this).removeClass('current-day-hours-warm-purple');
		}

	});
});