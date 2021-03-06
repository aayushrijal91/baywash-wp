<section class="serviceList">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col col-md-auto">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="small-hero-title">Variety Of Services Available</div>
                        <div class="fw-700 pt-3 serviceList_heroHeading">Our Services</div>
                    </div>
                    <div class="col-md-auto pl-lg-5">
                        <div class="row service_categoryFilter">
                            <div class="col-md-6 py-1 py-md-0">
                                <button class="service_categoryBtn" data-value=".residential">
                                    <div class="icon_residential"></div>
                                    <div class="pl-2">Residential</div>
                                </button>
                            </div>
                            <div class="col-md-6 py-1 py-md-0">
                                <button class="service_categoryBtn" data-value=".commercial">
                                    <div class="icon_commercial"></div>
                                    <div class="pl-2">Commercial</div>
                                </button>
                            </div>
                        </div>
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
    <div class="container-fluid pl-3 px-xxl-0">
        <div class="row justify-content-end">
            <div class="col-12 col-xl-11">
                <div class="serviceList_slider">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
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
                            $linkable = get_field('small_description_1');
                            $terms = get_the_terms($post->ID, 'categories');
                            $category = strtolower($terms[0]->name);
                    ?>
                            <a href="<?= $link ?>" class="serviceList_sliderContent <?= $category ?>" style="<?= !$linkable ? 'pointer-events: none': '' ?>">
                                <img src="<?= $featured_img_url ?>" alt="">
                                <div class="fw-800 h19 pt-4 text-complete-black"><?= $title ?></div>
                            </a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>