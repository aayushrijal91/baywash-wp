// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({ duration: 500 });
                AOS.refresh();
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
                        responsive: [
                            {
                                breakpoint: 1550,
                                settings: {
                                    centerPadding: "350px"
                                }
                            },
                            {
                                breakpoint: 1200,
                                settings: {
                                    centerPadding: "150px"
                                }
                            },
                            {
                                breakpoint: 900,
                                settings: {
                                    centerPadding: "0px"
                                }
                            },
                            {
                                breakpoint: 540,
                                settings: {
                                    centerPadding: "0px"
                                }
                            }
                        ]
                    });

                    $(".serviceList_slider").slick({
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        prevArrow: $('#serviceList_arrowLeft'),
                        nextArrow: $('#serviceList_arrowRight'),
                        infiniteScroll: true,
                        autoplay: true,
                        responsive: [
                            {
                                breakpoint: 1600,
                                settings: {
                                    slidesToShow: 4,
                                }
                            },
                            {
                                breakpoint: 1200,
                                settings: {
                                    slidesToShow: 3,
                                }
                            },
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 540,
                                settings: {
                                    slidesToShow: 1,
                                }
                            }
                        ]
                    });

                    $('.service_categoryFilter .service_categoryBtn').on('click', function () {
                        var filterClass = $(this).data('value');
                        $('.serviceList_slider').slick('slickUnfilter');
                        $('.serviceList_slider').slick('slickFilter', filterClass);
                        $('.service_categoryFilter .service_categoryBtn').removeClass('active');
                        $(this).toggleClass('active');
                    });
                    
                    AOS.refresh();

                    $(".homepage_bannerClientSlider").slick({
                        slidesToShow: 6,
                        slidesToScroll: 1,
                        infiniteScroll: true,
                        arrows: false,
                        autoplay: true,
                        responsive: [
                            {
                                breakpoint: 540,
                                settings: {
                                    slidesToShow: 2,
                                }
                            }
                        ]
                    });

                    $(".banner_infoSlider").slick({
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infiniteScroll: true,
                        autoplay: true,
                        arrows: false,
                        responsive: [
                            {
                                breakpoint: 1550,
                                settings: {
                                    slidesToShow: 1,
                                }
                            },
                            {
                                breakpoint: 1200,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 1,
                                }
                            }
                        ]
                    });

                    $(".gallery_slider").slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infiniteScroll: true,
                        // autoplay: true,
                        arrows: false,
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

                    $('#return-to-top').on('click', function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 1000);
                        return false;
                    });

                    if ($(".arealist:visible").length)
                        $(".noresult").hide();
                    else
                        $(".noresult").show();

                    $(".areas_loadMoreBtn").on('click', function () {
                        $(".arealist").show();
                        $(".areas_loadMoreWrap").remove();
                    });

                    $(".areas_alphabet").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").hide();
                        $(".arealist").show();
                        let chr = $(this).text();
                        $(".arealist").hide();
                        $(".char" + chr).show();
                        $(".areas_loadMoreWrap").remove();

                        if ($(".arealist:visible").length)
                            $(".noresult").hide();
                        else
                            $(".noresult").show();
                    });
                    $(".areas_allSearch").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").show();
                        $(".arealist").show();
                        $(".noresult").hide();
                    });


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

                    $(".nav-item.menu-item-has-children").find("> .nav-link").addClass('dropdown-toggle');

                    if($(window).width() < 1500) {
                        $(".nav-item.menu-item-has-children .nav-link.dropdown-toggle").on('click', function(e){
                            e.preventDefault();
                            $('.dropdown > .dropdown-menu').slideToggle();
                        })
                    }
                });

            }, // end misc
        },
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

document.querySelectorAll('a[href="#quote_form"], a[href="#previous-jobs"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});