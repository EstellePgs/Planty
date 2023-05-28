<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles ()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . 'style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(),
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
    
}

// Hook permettant de switcher le menu en fonction que l'on soit connecté ou non

function my_wp_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
        // Logged in menu to display
        $args['menu'] = 2;
     
    } 
    
    else {
        // Non-logged-in menu to display
        $args['menu'] = 3;
    }

    return $args;
}

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

?>