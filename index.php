<?php get_header(); ?>
<section class="entry-content">
    <div>
        <?php the_content(); ?>
    </div>
    <div>
      <?php include_once "sidebar.php"?>
    </div>
</section> 
<?php get_footer(); ?>