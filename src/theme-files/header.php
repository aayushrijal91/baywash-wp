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
                <div class="text-right text-primary fw-400 py-3"><?= get_field('hero_slogan', 'options') ?></div>
            </div>
        </div>
        <div class="header-navigation-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Areas We Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                        <a class="btn btn-secondary rounded-pill text-tertiary h21 fw-800 px-4 line-height-1 py-3" href="tel:<?= $phone_number ?>">
                            <?= $phone_number ?>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>