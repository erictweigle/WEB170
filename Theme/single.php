<?php get_header(); ?>

				<div id="content"> <!-- BEGIN CONTENT -->
                    
                    <!-- START THE LOOP -->
                    <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" class="post">
                        
                        <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                        <small>Posted <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
                        <?php the_post_thumbnail( 'large' ); ?>
                        <?php the_content(''); ?>
                        <?php endwhile; endif; ?>
                        <!-- END THE LOOP -->
                        
                        <small>single.php</small>   
                        
                    </article>
                </div> <!-- END CONTENT -->
                
<?php get_sidebar(); ?>				
<?php get_footer(); ?>