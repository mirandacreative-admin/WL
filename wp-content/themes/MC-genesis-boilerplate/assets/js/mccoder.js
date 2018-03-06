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

function googleTranslateElementInit() {
	// set the default for desktop
	var google_element = 'google_translate_desktop';
	if(window.innerWidth < 641){
		// if mobile size
		google_element = 'google_translate_mobile'
	}

    new google.translate.TranslateElement({pageLanguage: 'en',
		layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
		includedLanguages: 'es,fr,pt,zh-CN,it,ja,ko,nl,el'
	}, google_element);
}

// off canvas menu hours
jQuery(document).ready(function( $ ) {
	// google translate
	setTimeout(function(){
        googleTranslateElementInit();
	}, 250);
});

// configures the userway javascript plugin location
var _userway_config = {
// uncomment the following line to override default position
 position: 1,
// uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)
// language: null,
// uncomment the following line to override color set via widget
// color: '#2b2767',
    account: 'v4en4jJDsL'
};