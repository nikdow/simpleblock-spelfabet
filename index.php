<?php get_header(); ?>
<section class="entry-content">
    <div class="gc-content">
      <?php 
          global $wp_query;
           
          if ( is_category() || is_archive() || is_home() ){
            
            $posts = new WP_Query( $wp_query->query_vars );
          
            if ( $posts->have_posts() ) {
                while ( $posts->have_posts() ){
                  $posts->the_post(); ?>
                      <div class="post">
                          <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                          <a href="<?php the_permalink(); ?>#comments"><span><?php echo get_comments_number(); ?> Replies</span></a>
                          <?php the_post_thumbnail(); ?>
                          <?php the_content(); ?>
                      </div>
                  <?php                    
                }
            }
          } else {
            the_content(); 
          }
      ?>
    </div>
    <div class="gc-sidebar">
      <?php include_once "sidebar.php"?>
    </div>
</section> 
<?php get_footer(); ?>