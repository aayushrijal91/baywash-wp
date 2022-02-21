<?php
    get_header();
    if(have_posts()) {
        while(have_posts()) {
            the_post();
                ?>
                    <div class="content-section py-4">
                        <div class="container container-large">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php
        }
        wp_reset_postdata();
    }
    get_footer();
?>