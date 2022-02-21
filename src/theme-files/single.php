<?php

get_header();
if(have_posts()) {
    while(have_posts()) {
        the_post();
        ?>
        <section class="bloginner">
            <div class="container">
                test
            </div>
        </section>
        <?php
    }
    wp_reset_postdata();
}

?>
<?php
get_footer();
?>