<?php

function spelfabet_enqueue_styles() {
    
    $parent_style = 'main';
    
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ),
        wp_get_theme()->get('Version') 
    );

}

add_action( 'wp_enqueue_scripts', 'spelfabet_enqueue_styles' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function spelfabet_widgets_init() {

  register_sidebar( array(
      'name'          => 'Home right sidebar',
      'id'            => 'home_right_1',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="rounded">',
      'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'spelfabet_widgets_init' );
