<?php get_header(); ?>

				<div id="content"> <!-- BEGIN CONTENT -->
                    
                    <!-- START THE LOOP -->
                    <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <article class="post-excerpt">
                        <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                        <small>Posted <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
                        <?php the_excerpt(); ?>
                        <p class="read-more"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></p>
                    </article>
                    
                    <?php endwhile; endif; ?>
                    <!-- END THE LOOP -->
                    
                    <small>index.php</small>
                    
                </div> <!-- END CONTENT -->
                
<?php get_sidebar(); ?>				
<?php get_footer(); ?>