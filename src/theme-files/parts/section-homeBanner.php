<?php
$banner_title = get_field('title') != '' ? get_field('title') : get_the_title();
?>
<section class="homepageBanner">
    <div class="container-fluid px-xl-0">
        <div class="row no-gutters justify-content-end">
            <div class="col-12 col-xl-11">
                <div class="row no-gutters align-items-end">
                    <div class="col-12 col-lg-8 col-xl-6 homepage_bannerContentLeft">
                        <div class="row no-gutters">
                            <div class="col-12 col-xl-11">
                                <h1 class="h1 title fw-800" data-aos="zoom-in">
                                    <?= $banner_title ?>
                                </h1>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="horizontal-divider" data-aos="fade-right"></div>
                            </div>
                            <div class="col-12 col-xl-11 fw-600 h21" data-aos="fade-right">We provide a fully managed service to include fully trained cleaning operatives.</div>
                            <div class="col-12 col-xl-10" data-aos="fade-right">
                                <div class="h21 pt-6">We Work with a Range of Clients:</div>
                                <div class="homepage_bannerClientSlider pt-4">
                                    <?php if (have_rows('clients')) :
                                        while (have_rows('clients')) : the_row();
                                    ?>
                                            <div class="homepage_bannerClientSliderContent"><img src="<?= get_sub_field('image')['url'] ?>" alt="JRFS"></div>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 d-none d-lg-block homepage_bannerContentRight">
                        <div class="banner_infoSlider">
                            <div class="banner_infoContent">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto"><img src="<?= get_template_directory_uri() ?>/images/group_photo.webp" alt=""></div>
                                    <div class="col">
                                        <div>Best Service</div>
                                        <div>High Customer Retention</div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_infoContent">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto"><img src="<?= get_template_directory_uri() ?>/images/group_photo.webp" alt=""></div>
                                    <div class="col">
                                        <div>Best Service</div>
                                        <div>High Customer</div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_infoContent">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto"><img src="<?= get_template_directory_uri() ?>/images/group_photo.webp" alt=""></div>
                                    <div class="col">
                                        <div>Best Service</div>
                                        <div>High Customer Retention</div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="banner_infoContent"><img src="images/lib/5k-landscapes-card.png" alt=""></div>
                            <div class="banner_infoContent"><img src="images/lib/4k-card.png" alt=""></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-cta d-lg-none mt-md-5 py-md-4">
        <div class="container">
            <div class="row no-gutters justify-content-md-center py-2 info-slider-mobile">
                <div class="col-12 col-md-6 my-2 px-md-2">
                    <div class="row no-gutters align-items-center mobile-cta-card">
                        <div class="col-4 col-md-auto"><img src="images/icons/1kbuilders.png" alt=""></div>
                        <div class="col pl-3">
                            <div class="fw-600">Net Profit up $150K</div>
                            <div class="h18 text-lightblue">in under 12 months</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 my-2 px-md-2">
                    <div class="row no-gutters align-items-center mobile-cta-card">
                        <div class="col-auto"><img src="images/icons/56landscapes.png" alt=""></div>
                        <div class="col pl-3">
                            <div class="fw-600">More Time, More Money, Less Stress</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 my-2 px-md-2">
                    <div class="row no-gutters align-items-center mobile-cta-card">
                        <div class="col-auto"><img src="images/icons/4k.png" alt=""></div>
                        <div class="col pl-3">
                            <div class="fw-600">One Client Grew Net</div>
                            <div class="h18 text-lightblue">Profits $200K in 15 months</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>