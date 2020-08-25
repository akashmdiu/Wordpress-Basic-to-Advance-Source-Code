(function(jQuery){
    jQuery.fn.scrollingTo = function( opts ) {
        var defaults = {
            animationTime : 1000,
            easing : '',
            callbackBeforeTransition : function(){},
            callbackAfterTransition : function(){}
        };

        var config = jQuery.extend( {}, defaults, opts );

        jQuery(this).click(function(e){
            var eventVal = e;
            e.preventDefault();

            var jQuerysection = jQuery(document).find( jQuery(this).data('section') );
            if ( jQuerysection.length < 1 ) {
                return false;
            };

            if ( jQuery('html, body').is(':animated') ) {
                jQuery('html, body').stop( true, true );
            };

            var scrollPos = jQuerysection.offset().top;

            if ( jQuery(window).scrollTop() == scrollPos ) {
                return false;
            };

            config.callbackBeforeTransition(eventVal, jQuerysection);

            jQuery('html, body').animate({
                'scrollTop' : (scrollPos+'px' )
            }, config.animationTime, config.easing, function(){
                config.callbackAfterTransition(eventVal, jQuerysection);
            });
        });
    };

    /* ========================================================================= */
    /*   Contact Form Validating
    /* ========================================================================= */

    jQuery('#contact-form').validate({
        rules: {
            name: {
                required: true, minlength: 4
            }
            , email: {
                required: true, email: true
            }
            , subject: {
                required: false,
            }
            , message: {
                required: true,
            }
            ,
        }
        , messages: {
            user_name: {
                required: "Come on, you have a name don't you?", minlength: "Your name must consist of at least 2 characters"
            }
            , email: {
                required: "Please put your email address",
            }
            , message: {
                required: "Put some messages here?", minlength: "Your name must consist of at least 2 characters"
            }
            ,
        }
        , submitHandler: function(form) {
            jQuery(form).ajaxSubmit( {
                type:"POST", data: jQuery(form).serialize(), url:"sendmail.php", success: function() {
                    jQuery('#contact-form #success').fadeIn();
                }
                , error: function() {
                    jQuery('#contact-form #error').fadeIn();
                }
            }
            );
        }
    });

});



jQuery(document).ready(function(){
	"use strict";
	new WOW().init();


(function(){
 jQuery('.smooth-scroll').scrollingTo();
}());

});




jQuery(document).ready(function(){

    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 50) {
            jQuery(".navbar-brand a").css("color","#fff");
            jQuery("#top-bar").removeClass("animated-header");
        } else {
            jQuery(".navbar-brand a").css("color","inherit");
            jQuery("#top-bar").addClass("animated-header");
        }
    });

    jQuery("#clients-logo").owlCarousel({
 
        itemsCustom : false,
        pagination : false,
        items : 5,
        autoplay: true,

    });


}(jQuery));
jQuery(document)


// fancybox
jQuery(".fancybox").fancybox({
    padding: 0,

    openEffect : 'elastic',
    openSpeed  : 450,

    closeEffect : 'elastic',
    closeSpeed  : 350,

    closeClick : true,
    helpers : {
        title : { 
            type: 'inside' 
        },
        overlay : {
            css : {
                'background' : 'rgba(0,0,0,0.8)'
            }
        }
    }
}(jQuery));





 




