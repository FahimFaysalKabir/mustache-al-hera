<?php

/*menu register */
function register_menu() {

    if (function_exists('register_nav_menu')) {

        register_nav_menu( 'main-menu', __( 'Primary menu') );

    }

}
add_action('init', 'register_menu');

/* This code for readmore add to functions*/

function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore."'>READ THIS</a>";
echo $excerpt;
}

// This code for add Thumblain Image To Blog Page
add_theme_support( 'post-thumbnails', array( 'post' ));
set_post_thumbnail_size( 200, 200, true);
add_image_size( 'post-image', 150, 150, true);

/*theme option*/
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
include_once( 'option-tree/ot-loader.php' );
include_once( 'includes/theme-options.php' );




































?>
