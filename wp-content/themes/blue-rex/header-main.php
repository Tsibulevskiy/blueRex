<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .preloader {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            background-color: #fefefe;
        }
    </style>
    <?php wp_head() ?>
</head>
<body>
<div class="preloader d-flex justify-content-center align-items-center">
  <div class="spinner-grow text-danger" style="width: 10rem; height: 10rem;" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<button class="scrollToTop"><i class="fas fa-angle-up"></i></button>
<header class="mainHeader" <?php echo blueRex_get_background('Header_bg')
?>>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?php echo home_url('/') ?>">
            <?php $custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'));
            if ($custom_logo): ?>
                <img src="<?php echo $custom_logo[0] ?>" alt="<?php bloginfo('name') ?>">
            <?php endif; ?>
            <?php bloginfo('name') ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header_menu',
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto'
            ))
            ?>
        </div>
    </nav>
    <div class="mainHeaderText">
        <?php if (get_field('Header1')): ?>
            <h3><?php the_field('Header1') ?></h3>
        <?php endif; ?>
        <?php if (get_field('Header2')): ?>
            <h4 class="text-uppercase"><?php the_field('Header2') ?></h4>
        <?php endif; ?>
        <?php if (get_field('Header_text')): ?>
            <p><?php the_field('Header_text') ?></p>
        <?php endif; ?>
        <div class="mainHeaderButtons">
            <?php
            if (get_field('Header_btn_1')):
                $link = get_field('Header_btn_1');
                ?>
                <a href="<?php echo esc_url($link['url']) ?>"
                   class="btn btn-pink rounded-pill"><?php echo esc_html($link['title']) ?></a>
            <?php endif; ?>
            <?php
            if (get_field('Header_btn_2')):
                $link = get_field('Header_btn_2');
                ?>
                <a href="<?php echo esc_url($link['url']) ?>"
                   class="btn btn-violet rounded-pill"><?php echo esc_html($link['title']) ?></a>
            <?php endif; ?>
        </div>
    </div>
</header>
