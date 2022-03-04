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
</section>

<?php
get_footer();
?>