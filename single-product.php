<?php 
/* Template Name: Product */
?>

<?php get_header(); ?>
<section class="entry-content">
    <div class="gc-content">
        <?php echo do_shortcode( "[product_page id='". get_the_ID() ."']" ); ?>
    </div>
    <div  class="gc-sidebar">
        <?php include_once "sidebar.php"?>
    </div>
</section> 
<?php get_footer(); ?>