<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container container-padded py-5">
            <div class="error-404 not-found">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'twentynineteen'); ?></h1>
                        <div class="page-content pt-5">
                            <p><?php _e('It looks like nothing was found at this location.', 'twentynineteen'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-auto">
                    <img id="serviceList_arrowLeft" class="serviceList_arrows" src="<?= get_template_directory_uri() ?>/images/404-error.png" alt="Page not found">
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>

<?php
get_footer();
