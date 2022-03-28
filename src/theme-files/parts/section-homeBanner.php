<?php
$banner_title = get_field('title') != '' ? get_field('title') : get_the_title();
?>
<section class="homepageBanner">
    <div class="container-fluid px-xxl-0">
        <div class="row no-gutters justify-content-end">
            <div class="col-12 col-xxl-11">
                <div class="row no-gutters align-items-end">
                    <div class="col-12 col-lg-8 col-xl-6 homepage_bannerContentLeft">
                        <div class="row no-gutters">
                            <div class="col-12 col-xxl-11">
                                <h1 class="h1 title fw-800" data-aos="zoom-in">
                                    <?= $banner_title ?>
                                </h1>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="horizontal-divider" data-aos="fade-right"></div>
                            </div>
                            <div class="col-12 col-xxl-11 fw-600 h21" data-aos="fade-right">We provide a fully managed service to include fully trained cleaning operatives.</div>
                            <div class="col-12 col-xl-11 col-xxl-10" data-aos="fade-right">
                                <div class="h21 pt-6">We Work with a Range of Clients:</div>
                                <div class="homepage_bannerClientSlider pt-4">
                                    <?php if (have_rows('clients')) :
                                        while (have_rows('clients')) : the_row();
                                    ?>
                                            <div class="homepage_bannerClientSliderContent"><img src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>"></div>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 homepage_bannerContentRight">
                        <div class="banner_infoSlider">
                            <div class="banner_infoContent">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto pr-3"><img src="<?= get_template_directory_uri() ?>/images/group_photo.webp" alt=""></div>
                                    <div class="col">
                                        <div class="fw-600 h16">Best Service</div>
                                        <div class="h24">High Customer Retention</div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_infoContent">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto pr-3"><img src="<?= get_template_directory_uri() ?>/images/15yearsphoto.webp" alt=""></div>
                                    <div class="col">
                                        <div class="fw-600 h16">15+ Years</div>
                                        <div class="h24">of Experience</div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_infoContent">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto pr-3"><img src="<?= get_template_directory_uri() ?>/images/4kphoto.webp" alt=""></div>
                                    <div class="col">
                                        <div class="fw-600 h16">4K+</div>
                                        <div class="h24">People Looking for New Homes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>