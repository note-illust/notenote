<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="<?php echo get_template_directory_uri(); ?>/static/css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/static/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css" rel="stylesheet" type="text/css" />
    <title>
        <?php if(is_front_page()): ?>Note illustration
        <?php else: ?>
        <?php wp_title(''); ?>｜Note illustration
        <?php endif; ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <?php if(is_front_page()): ?>
    <div id="progress">
        <img src="<?php echo get_template_directory_uri(); ?>/static/img/common/logo_top.png" alt="Note Illustration" class="loding_logo">
        <img src="<?php echo get_template_directory_uri(); ?>/static/img/common/gif_animation.gif" alt="Note Illustration" class="loding_img">
        <div id="progress_bar"></div>
    </div>
    <?php endif; ?>
    <header>
        <div class="center logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/common/logo.png" alt="Note Illustration">
            </a>
        </div>
        <div class="navi_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="sp_nav">
            <ul class="header_nav">
                <li><a href="<?php echo home_url(); ?>">Top</a></li>
                <li><a href="<?php echo home_url(); ?>/profile">Profile</a></li>
                <li><a href="<?php echo home_url(); ?>/illustration">Illustration</a></li>
                <li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
