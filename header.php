<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('description'); ?></title>

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header" id="hero">
        <div class="header-slider">
            <div class="header-slider__wrapper">
                <div class="header-slider__item">
                    <?php if (get_field('header-slider__image')) : ?>
                        <img src="<?php the_field('header-slider__image'); ?>" alt="slide" class="header-slider__image">
                    <?php endif; ?>
                    <?php if (get_field('main-logo')) : ?>
                        <a href="index.php" id="main-logo">
                            <img src="<?php the_field('main-logo'); ?>" alt="Logo: Inspiratie by Stephanie" class="header-slider__logo">
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('header-slider__description')) : ?>
                        <p class="header-slider__description">
                            <?php the_field('header-slider__description'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <!-- /.header-slider__item -->
                <div class="header-slider__item">
                    <?php if (get_field('header-slider__image-2')) : ?>
                        <img src=" <?php the_field('header-slider__image-2'); ?>" alt="slide" class="header-slider__image">
                    <?php endif; ?>
                    <?php if (get_field('main-logo')) : ?>
                        <a href="index.php" id="main-logo"><img src="<?php the_field('main-logo'); ?>" alt="Logo: Inspiratie by Stephanie" class="header-slider__logo"></a>
                    <?php endif; ?>
                    <?php if (get_field('header-slider__description_2')) : ?>
                        <p class="header-slider__description"><?php the_field('header-slider__description_2'); ?></p>
                    <?php endif; ?>
                </div>
                <!-- /.header-slider__item -->
            </div>
            <!-- /.header-slider__wrapper -->
            <a href="#scrollTo" class="header__button scrollto">
                <img src="<?php bloginfo('template_url'); ?>/img/arrow-down.png" alt="Arrow down" class="header__button-img">
            </a>
        </div>
        <!-- /.header__slider -->

        <nav class="header-navbar navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="header-logo">
                    <?php if (get_field('small_logo_header')) : ?>
                        <img src="<?php the_field('small_logo_header'); ?>" alt="Logo: Inspiratie by Stephanie">
                    <?php endif; ?>
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(array(
                    'menu' => 'main',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarSupportedContent',
                    'menu_class' => 'navbar-menu navbar-nav mb-2 mb-lg-0',
                    'theme_location' => 'top',
                ));
                ?>
            </div>
        </nav>

    </header>
    <!-- /.header -->