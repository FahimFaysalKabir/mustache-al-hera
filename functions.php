<?php

function register_menu() {

    if (function_exists('register_nav_menu')) {

        register_nav_menu( 'main-menu', __( 'Primary menu') );

    }

}
add_action('init', 'register_menu');

































?>
