<section class="testimonials">
    <div class="container">
        <div class="testimonial_subTitle text-primary text-center h25 fw-500">
            <img src="<?= get_template_directory_uri() ?>/images/testimonial_subHeadingbar.webp" alt="">
            <div>See Our Reviews</div>
        </div>
        <div class="testimonial_heroTitle pt-3">Best Price &amp; Best Service</div>
    </div>
    <div class="container-fluid px-0">
        <div class="testimonial_slider">
            <?php if (have_rows('testimonial_slider', 'option')) : ?>
                <?php while (have_rows('testimonial_slider', 'option')) : the_row();
                    $heroImg = get_sub_field('hero_image');
                    $heroHeading = get_sub_field('hero_heading');
                    $testimonial_description = get_sub_field('testimonial_description');
                    $username = get_sub_field('username');
                    $department = get_sub_field('department');
                ?>
                    <div class="testimonial_cardWrapper">
                        <img src="<?= $heroImg['url'] ?>" alt="<?= $heroImg['alt'] ?>">
                        <div class="testimonial_textWrapper">
                            <div class="fw-600 h18 testimonial_textHeading text-capitalize"><?= $heroHeading ?></div>
                            <div class="h25 fw-400 text-dark-grey testimonial_textContent">
                                <?= $testimonial_description ?>
                            </div>
                            <div class="row no-gutters justify-content-between align-items-center pt-4">
                                <div class="col-auto">
                                    <div class="h25 text-black fw-500"><?= $username ?></div>
                                    <div class="h25 text-dark-grey fw-500 pt-1"><?= $department ?></div>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <img src="<?= get_template_directory_uri() ?>/images/single_star.webp" alt=""><span class="h18 fw-600 pl-3">5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>