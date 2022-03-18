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
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-top-bar bg-gray">
            <div class="container">
                <div class="text-right text-primary fw-400 py-3 h23"><?= get_field('hero_slogan', 'options') ?></div>
            </div>
        </div>
        <div class="header-navigation-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    