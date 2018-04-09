// function ready to reveal our secret iframe
function enlargeiframe() {
    jQuery('#searchresults').css('height', '999px');
}


jQuery(document).ready(function ($) {
    // adding the carrot to the list items whom have children and are not top level
    $('.sub-menu li.menu-item-has-children').append('<i id="submenuarrow" class="material-icons">keyboard_arrow_right</i>');
    // this checks to see if there is any text in the library cat search
    $('#libcatsearch').attr('disabled', 'disabled');
    $('input[type="text"]').keyup(function () {
        if ($(this).val() != '') {
            $('#libcatsearch').removeAttr('disabled');
        }
    });

    // children gallery animation
    setInterval(function () {
        $('#imgtog').toggle();
    }, 5000);


    $('.carousel').carousel();


    // lets hide that alert on the slider shall we, when you hit the X
    $("#hide-alert").click(function () {
        $(".alert").hide();
    });
    // these calls set the offset for the sticky sidebars in pixels
    $("#genesis-sidebar-secondary").stick_in_parent({offset_top: 0});
    $("#genesis-sidebar-primary").stick_in_parent({offset_top: 174});

    $('.squaregrid .col').hover(
        function () {
            $(this).addClass('hover')
        },
        function () {
            $(this).removeClass('hover')
        }
    );
    var audio = document.getElementsByTagName("audio")[0];
    $(".rel img").mouseenter(function () {
        audio.play();

    });
    $(".block").mouseenter(function () {
        $(this).addClass("jello");
    });
    $(".block").mouseleave(function () {
        $(this).removeClass("jello");
    });
    // if ($(window).width() < 1090) {
    //  			$(".main-menu").appendTo("#menuslot");
    // }

    // drop down menu jquery
    $("#menu-test li").mouseenter(function () {
        $(this).children("ul.sub-menu").addClass("reveal");
        $(this).find(".sub-menu ul").addClass("shift");
        //$(this).children("ul.sub-menu").appendTo("<i class="material-icons">keyboard_arrow_right</i>");
    });
    $("#menu-test li").mouseleave(function () {
        $(this).children("ul.sub-menu").removeClass("reveal");
        $(this).find(".sub-menu ul").removeClass("shift");
    });

    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    $('#reveal-archived-minutes').click(function () {
        $('#archived-minutes').toggle('slide');
    });


    setTimeout(function () {
        $('.goog-te-gadget').css('z-index', '999999999999999');
    }, 300);

});

function classTog(x) {
    x.classList.toggle("change");
    document.getElementById("left-sticky").classList.toggle("open");
}

function googleTranslateElementInit() {
    // set the default for desktop
    var google_element = 'google_translate_desktop';
    if (window.innerWidth < 641) {
        // if mobile size
        google_element = 'google_translate_mobile'
    }

    new google.translate.TranslateElement({
        pageLanguage: 'en',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        includedLanguages: 'es,fr,pt,zh-CN,it,ja,ko,nl,el,sq,bs,ur,pl'
    }, google_element);

}

// off canvas menu hours
jQuery(document).ready(function ($) {
    // google translate
    setTimeout(function () {
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