<?php if ( is_active_sidebar( 'home_right_1' ) && ! is_page_template( 'full-width.php' )  ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'home_right_1' ); ?>
    </div><!-- #primary-sidebar -->
<?php endif; ?> 