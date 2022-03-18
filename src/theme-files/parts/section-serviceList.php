<section class="serviceList">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col col-md-auto">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="small-hero-title">Variety Of Services Available</div>
                        <div class="fw-700 pt-3 serviceList_heroHeading">Our Services</div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="row no-gutters">
                    <div class="col-auto pr-2">
                        <img id="serviceList_arrowLeft" class="serviceList_arrows" src="<?= get_template_directory_uri() ?>/images/arrow_left.webp" alt="Left">
                    </div>
                    <div class="col-auto pl-2">
                        <img id="serviceList_arrowRight" class="serviceList_arrows" src="<?= get_template_directory_uri() ?>/images/arrow_right.webp" alt="Right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pl-3 px-md-0">
        <div class="row justify-content-end">
            <div class="col-12 col-xl-11">
                <div class="serviceList_slider">
                    <?php
                    $args = array(
                        'posts_per_page' => 50,
                        'post_type' => 'services',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) {

                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                            $title = get_the_title();
                            $link = get_the_permalink();
                    ?>
                            <a href="<?= $link ?>" class="serviceList_sliderContent">
                                <img src="<?= $featured_img_url ?>" alt="">
                                <div class="fw-800 h19 pt-4 text-complete-black"><?= $title ?></div>
                            </a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>