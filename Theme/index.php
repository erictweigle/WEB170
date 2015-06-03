<!DOCTYPE html>
<html>
	<head>
        
		<title><?php bloginfo('description');?> | <?php bloginfo('name'); ?></title>
        
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex, nofollow"/>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?> /js/jquery-1.11.3.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
        <script>
          $(window).load(function() {
            $('.flexslider').flexslider();
          });
        </script>
        
        <?php wp_head(); ?> 
        
	</head>
	<body <?php body_class( $class ); ?>>
        
		<div id="wrapper"> <!-- BEGIN WRAPPER -->
            
			<header> <!-- BEGIN HEADER -->
				<div id="logo">
					<a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
				</div>				
			</header> <!-- END HEADER -->
            
			<nav> <!-- BEGIN NAV -->
				<!-- <ul>
					<li><a href="#">HOME</a></li>
                    <li><a href="#">PORTFOLIO</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">RESUME</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul> -->
                
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu','container' => 'nav',) ); ?>
                
			</nav> <!-- END NAV -->
			<div id="middle"> <!-- BEGIN MIDDLE -->
                
				<div id="content"> <!-- BEGIN CONTENT -->
                    
                    <!-- START THE LOOP -->
                    <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                    <?php the_content(''); ?>
                    <?php endwhile; endif; ?>
                    <!-- END THE LOOP -->
                    
                </div> <!-- END CONTENT -->
                
				<div id="right-sidebar">
                    
                    <!--<div id="sidebar-contact">
                        <h3>Contact</h3>
                        <p>Hi there, you should give me jobs and money. I want all of your money please.</p>
                        <a href="contact.php">Contact Danielle &raquo;</a>
                    </div>
                    <div id="sidebar-resume">
                        <h3>Resume</h3>
                        <p>Hi there, are you wondering if you should give me all your money? Here's my resume!</p>
                        <a href="images/resume.pdf">View Resume &raquo;</a>
                        <br />
                        <a href="images/resume.pdf">Download Resume &raquo;</a>
                    </div>-->
                    
                    <?php if (is_page()) : ?>
                    
                    <h2><?php echo get_the_title($post->post_parent); //get the gateway page title ?></h2>
                    <ul>
                                                
                    <?php

                    if ($post->post_parent) {

                        wp_list_pages( array( 'child_of' => $post->post_parent, 'title_li' => '', ));
                    
                    } else {
                        wp_list_pages( array( 'child_of' => $post->ID, 'title_li' => '', ));

                    }
                        
                    ?>
                    </ul>
                    
                    <?php endif; ?>
                    <?php if (!(is_page())) : ?>
                    
                    <h2>Blog</h2>
                    <ul>                    
                    <?php wp_list_categories( array('title_li' => '')); ?>
                    </ul>
                    
                    <?php endif; ?>
                    
                    
                </div>
				
			</div> <!-- END MIDDLE -->
            
			<footer> <!-- BEGIN FOOTER -->				
				<p>All Works &copy; Danielle Patlak 2015</p>
				
			</footer> <!-- END FOOTER -->
            
		</div> <!-- END WRAPPER -->
        
        <?php wp_footer(); ?>
        
	</body>
</html>