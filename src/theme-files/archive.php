<?php
get_header();
?> 
<div class="blog-page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php
            $blog_info = '';
            if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) : the_post();
                    $blog_list = get_field('blog_list', get_the_ID());

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    //get_template_part('parts/blog', 'item');
                    $blog_info .= '<div class="col-md-6">
                                        <div class="blog-detail">
                                            <div class="bd-tag">';
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach ($posttags as $tag) {
                            $blog_info .= '<span><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
                        }
                    }
                    $blog_info .= '</div>
                                            <h6><a href="' . get_the_permalink() . '" title="">' . get_the_title() . '</a></h6>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <div class="date">' . get_the_date() .'</div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="author">by ' . get_the_author() .'</div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="' . get_the_permalink() . '" class="btn-read-more">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-img">
                                            <a href="' . get_the_permalink() . '"><img data-src="' . $blog_list['image']['url'] . '" class="img-fluid lazyload" alt="' . $blog_list['image']['alt'] . '"/></a>
                                        </div>
                                    </div>';
                endwhile;
            else :
                get_template_part('parts/content', 'none');
            endif;
            ?>
            <?= $blog_info ?>
        </div>
        <div class="text-center">
            <?php numeric_posts_nav(); ?>
        </div>
    </div>
</div>
<?php get_template_part('parts/section', 'faq'); ?>
<?php get_footer(); ?>