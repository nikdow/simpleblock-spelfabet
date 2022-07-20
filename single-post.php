<?php get_header(); ?>
<section class="entry-content">
    <div class="gc-content">
        <div class="post">
            <h2><?php echo get_the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>#comments"><span><?php echo get_comments_number(); ?> Replies</span></a>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
        </div>     

        <?php previous_post_link();  ?>

        <?php if ( get_comments_number() > 0 ): ?>
            <?php comments_template(); ?>
        <?php endif; ?>
    </div>
    <div class="gc-sidebar">
      <?php include_once "sidebar.php"?>
    </div>
</section> 
<?php get_footer(); ?>