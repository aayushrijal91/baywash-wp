// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({
                    duration: 1500,
                });
                $(() => {
                    console.log($('.team_memberBio p').html());
                    console.log('test');
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 1000) {
                            $('#return-to-top').fadeIn();
                            $("#return-to-top").addClass('active');
                        } else {
                            $('#return-to-top').fadeOut();
                            $("#return-to-top").removeClass('active');
                        }
                    });
                    $('#return-to-top').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 1000);
                        return false;
                    });
                });

            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

