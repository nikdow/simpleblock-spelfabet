<?php 
/* Template Name: Blogs */
?>

<?php get_header(); ?>
<section class="entry-content">
    <div>
        <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1 ;
            $posts = new WP_Query( array(
                'post_type'   => "post",
                'posts_per_page' => 10,
                'orderby' => "date",
                'order' => "DESC",
                'paged' => $paged
            ) );
            
            if ( $posts->have_posts() ) {
                while ( $posts->have_posts() ){
                    $posts->the_post();
                    ?>
                        <div class="post">
                            <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                            <a href="<?php the_permalink(); ?>#comments"><span><?php echo get_comments_number(); ?> Replies</span></a>
                            <?php the_post_thumbnail(); ?>
                            <?php the_content(); ?>
                        </div>
                    <?php                    
                }
            }

        ?>
        <div>
            <?php next_posts_link( 'Older Posts', $posts->max_num_pages ); ?>
            <?php previous_posts_link('Newer Posts', $posts->max_num_pages); ?>
        </div>
    </div>
    <div>
        <?php include_once "sidebar.php"?>
    </div>
</section> 
<?php get_footer(); ?>