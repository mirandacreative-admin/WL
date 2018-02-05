jQuery(document).ready(function( $ ) {
	
	// $ Works! You can test it with next line if you like
	// console.log($);
	var headerheight = $(".float-header").height();
	var windowheight = window.innerHeight;
	var sidemenuheight = windowheight - headerheight;

 	console.log(sidemenuheight);

 	$('#left-sticky').css( "height", sidemenuheight ); 
 	$('#right-sticky').css( "height", sidemenuheight );  	
 	$('.carousel').carousel();

 	// lets hide that alert on the slider shall we, when you hit the X
	$( "#hide-alert" ).click(function() {
	  $( ".alert" ).hide();
	});
	
});