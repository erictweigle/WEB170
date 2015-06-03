<?php get_header(); ?>

				<div id="content"> <!-- BEGIN CONTENT -->
                    
                    <!-- BEGIN FLEXSLIDER -->
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="http://pootacheeta.com/wordpress/wp-content/themes/web170/images/label-design-slider.png" />
                            </li>
                            <li>
                                <img src="http://pootacheeta.com/wordpress/wp-content/themes/web170/images/logo-design-slider.png" />
                            </li>
                            <li>
                                <img src="http://pootacheeta.com/wordpress/wp-content/themes/web170/images/print-design-slider.png" />
                            </li>
                        </ul>
                    </div>
                    <!-- END FLEXSLIDER -->
                    
                    <!-- BEGIN MINIBIO -->
                    <div id="minibio">
                        <img src="http://pootacheeta.com/wordpress/wp-content/themes/web170/images/danielle.jpg">
                        <h2>Meet Danielle</h2>
                        
                        <!-- START LOOP ONE -->
                        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                        <?php the_content('') ?>
                        <?php endwhile; endif; ?>
                        <!-- END LOOP ONE -->
                        
                        <a href="about.php">Read Full Bio &raquo;</a>
                    </div>
                    <!-- END MINIBIO -->
                    
                    <div id="latest-postings">
                        <h2>Latest Blog Posts</h2>
                        
                        <!-- START LOOP TWO -->
                        <?php rewind_posts(); ?>
                        <?php query_posts('showposts=4'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        <!-- END LOOP TWO -->
                        
                    </div>
                    
                </div> <!-- END CONTENT -->
                
<?php get_sidebar(); ?>				
<?php get_footer(); ?>