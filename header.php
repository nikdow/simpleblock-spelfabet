<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
    <section class="gc-page">
    <header>
        <div>
            <h1 class="site-title"><a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <h3 class="site-description"><?php echo get_bloginfo( 'description' ); ?></h3>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        <div>
            <img src="<?php echo wp_get_attachment_image_url( 6423 ); ?>"/>
        </div>
    </header>