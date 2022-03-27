<?php

/**
 * The template for displaying the header
 * 
 */

$logo = get_field('logo', 'options');
$phone_number = get_field('phone_number', 'options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T53GHQN');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T53GHQN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="header-top-bar bg-gray">
            <div class="container">
                <div class="text-right text-primary fw-400 py-3 h23"><?= get_field('hero_slogan', 'options') ?></div>
            </div>
        </div>
        <div class="header-navigation-bar">
            <div class="container">
                <nav class="navbar navbar-expand-xl navbar-light px-0">
                    <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#baywashMainNav" aria-controls="baywashMainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="baywashMainNav">
                        <?php wp_nav_menu(array(
                            'menu' => 'Primary Menu',
                            'menu_class' => 'navbar-nav',
                            'item_class' => 'nav-item',
                            'link_class' => 'nav-link',
                            'container_class' => 'ml-auto mobile-menu',
                            'container_id' => '',
                        )); ?>
                        <a class="btn btn-secondary rounded-pill text-tertiary h21 fw-800 px-4 line-height-1 py-3" href="tel:<?= $phone_number ?>">
                            <?= $phone_number ?>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>