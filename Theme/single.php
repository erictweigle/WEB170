<?php get_header(); ?>

				<div id="content"> <!-- BEGIN CONTENT -->
                    
                    <!-- START THE LOOP -->
                    <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                    <?php the_content(''); ?>
                    <?php endwhile; endif; ?>
                    <!-- END THE LOOP -->
                    <small>single.php</small>
                    
                </div> <!-- END CONTENT -->
                
<?php get_sidebar(); ?>				
<?php get_footer(); ?>