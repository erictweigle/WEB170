<?php

/* 
Theme Name: WEB170 Project Site
Author: Eric Weigle
Author URI : http://www.pootacheeta.com/wordpress
Descript: This the the theme for the WEB170 class
Version : 1.0
*/

// Register Sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

// Register My Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));

//Post Thumbnails
add_theme_support( 'post-thumbnails' );

//Post Excerpts
add_post_type_support( 'page', 'excerpt' );

//SEO Optimized Title
function get_custom_title_tag(){
    
    global $post;
    if ( is_front_page() ){
        bloginfo('description');
    } 
    elseif ( is_page() || is_single() ){
        the_title();
    } 
    elseif ( is_home() ){
    	echo 'Blog';
    }
    else { 
        bloginfo('description');
    }
    if ( $post->post_parent ){
        echo ' | ';
        echo get_the_title($post->post_parent);
    }

    echo ' | ';
    bloginfo('name');
    echo ' | ';
    echo 'Seattle, WA.';
    
}


?>







