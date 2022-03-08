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
                    $(".testimonial_slider").slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        centerMode: true,
                        infiniteScroll: true,
                        centerPadding: "542px",
                        autoplay: true,
                        dots: true,
                    });

                    $(".serviceList_slider").slick({
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        prevArrow: $('#serviceList_arrowLeft'),
                        nextArrow: $('#serviceList_arrowRight'),
                        infiniteScroll: true,
                        autoplay: true,
                    });

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

                    $(".areas_loadMoreBtn").click(function () {
                        $(".arealist").show();
                        $(".areas_loadMoreWrap").remove();
                        AOS.refresh();

                    });
                    $(".areas_alphabet").click(function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").hide();
                        $(".arealist").show();
                        var chr = $(this).text();
                        $(".arealist").hide();
                        $(".char" + chr).show();
                        AOS.refresh();
                        $(".areas_loadMoreWrap").remove();
                        if ($(".arealist:visible").length)
                            $(".noresult").hide();
                        else
                            $(".noresult").show();
                    });
                    $(".areas_allSearch").click(function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").show();
                        $(".arealist").show();
                        AOS.refresh();
                        $(".noresult").hide();
                    });
                    AOS.refresh();


                    $('.arealist ul').each(function () {
                        var max = 19
                        if ($(this).find("li").length > max) {
                            $(this)
                                .find('li:gt(19)')
                                .hide()
                                .end()
                                .append(
                                    $('<li class="show-more mt-3">Show More</li>').click(function () {
                                        $(this).siblings(':hidden').show().end().remove();
                                    })
                                );
                        }
                    });

                    $('.areas_droplist > .caption').on('click', function () {
                        $(this).parent().toggleClass('open');
                    });

                    $('.areas_droplist > .list > .item').on('click', function () {
                        $('.areas_droplist > .list > .item').removeClass('active selected');
                        $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
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

