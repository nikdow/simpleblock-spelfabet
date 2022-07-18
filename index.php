<?php get_header(); ?>
<section class="entry-content">
    <div class="gc-content">
        <?php the_content(); ?>
    </div>
    <div class="gc-sidebar">
      <?php include_once "sidebar.php"?>
    </div>
</section> 
<?php get_footer(); ?>