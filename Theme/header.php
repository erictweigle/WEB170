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
                