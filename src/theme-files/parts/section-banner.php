<?php
$banner_title = get_field('title') != '' ? get_field('title') : get_the_title();
$default_background = get_field('banner_background', 'options');
$feat_image = get_the_post_thumbnail_url(null, 'full');
$banner_bg = $feat_image ? $feat_image : $default_background['url'];
?>

<section class="banner lazyload" data-src="<?= $banner_bg ?>">
    <div class="container">
        <div class="banner-inner d-flex align-items-center">
            <div class="h1 title" data-aos="zoom-in">
                <?= $banner_title ?>
            </div>
        </div>
    </div>
</section>