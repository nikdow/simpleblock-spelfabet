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
        <div class="gc-main-header">
            <div>
                <h1 class="site-title"><a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <h3 class="site-description"><?php echo get_bloginfo( 'description' ); ?></h3>
            </div>
            <div class="gc-mobile-header">
                <img src="<?php echo wp_get_attachment_image_url( 6423 ); ?>"/>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        <div class="gc-tablet-header">
            <img src="<?php echo wp_get_attachment_image_url( 6423 ); ?>"/>
        </div>
    </header>
      // we use the breadcrumbs to display a red "Go to checkout" button via the customisations plugin
      <br/>
    <?php if (class_exists('WooCommerce') && is_woocommerce()) : ?>
    <?php woocommerce_breadcrumb(); ?>
    <?php endif; ?>