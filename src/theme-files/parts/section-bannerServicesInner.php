<?php
$default_background = get_field('cover_image');
$feat_image = get_the_post_thumbnail_url(null, 'full');
$banner_bg = $default_background ? $default_background['url'] : $feat_image;
?>

<section class="banner lazyload" data-src="<?= $banner_bg ?>">
    <div class="container">
        <div class="banner-inner d-flex align-items-center">
            <h1 class="h1 title" data-aos="zoom-in">
                <span class="bordered-text">Services</span> <?= the_title() ?>
            </h1>
        </div>
    </div>
</section>