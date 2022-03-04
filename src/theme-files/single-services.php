<?php
get_header();
get_template_part('parts/section', 'bannerServicesInner');

$hero_image_1 = get_field('hero_image_1');
$hero_title_1 = get_field('hero_title_1');
$small_description_1 = get_field('small_description_1');
?>

<section class="services_inner">
    <div class="section__1">
        <div class="container-fluid px-0">
            <div class="row no-gutters align-items-center">
                <div class="col-12 col-lg-6" data-aos="fade-right">
                    <img class="hero-image-1" src="<?= $hero_image_1['url'] ?>" alt="<?= $hero_image_1['alt'] ?>">
                </div>
                <div class="col services_innerText" data-aos="fade-left">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-11 col-xxl-10 pr-5">
                            <div class="small-hero-title">
                                <?= the_title() ?> Services
                            </div>
                            <div class="services_innerHeroTitle">
                                <?= $hero_title_1 ?>
                            </div>
                            <div class="services_innerSmDescription">
                                <?= $small_description_1 ?>
                            </div>
                            <div class="row no-gutters services_innerButtons pt-4 pt-lg-5">
                                <div class="col-auto pr-3 pr-lg-5">
                                    <a href="<?= get_site_url() ?>/service" class="btn btn-primary rounded-pill text-black fw-600 h25 px-4">
                                        See Our Services
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-black rounded-pill text-white fw-600 h25 px-4">
                                        <img class="pr-3" src="<?= get_template_directory_uri() ?>/images/phone_icon.webp"> Call for a FREE Quote Today
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section__2" data-src="<?= get_template_directory_uri() ?>/images/service_innerTestimonialBg.webp">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-7">
                    <div class="services_innerTestimonialWrapper">
                        <div class="h18 fw-600 main_title pb-3">We Have No Hesitation Recommending Baywash!</div>
                        <p>Baywash cleaning services have been contracted to Sans Souci Leisure centre for 3.5 years now and in which we have been very happy with their services which includes a vast area(s) throughout the building.</p>
                        <p>Sans Souci Leisure centre has a high foot traffic business which includes pools, gym, patron bathroom facilities, café, office and admin areas which are thoroughly kept neat and tidy throughout.</p>
                        <p>Baywash Staff have always been polite to our staff and our patrons which is very important to us. We have no hesitation in recommending or using Baywash Cleaning services no matter how big or small your enterprise may be.</p>
                        <div class="row no-gutters justify-content-between align-items-center pt-4">
                            <div class="col-auto">
                                <div class="h25 text-black fw-500">Sheryl Fenn</div>
                                <div class="h25 text-dark-grey fw-500 pt-1">Sans Souci Leisure Center</div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="<?= get_template_directory_uri() ?>/images/single_star.webp" alt=""><span class="h18 fw-600 pl-3">5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>