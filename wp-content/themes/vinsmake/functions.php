<?php 

function vinsmake_scripts_styles()
{
    /* css */
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('vinsmake', get_template_directory_uri() . '/css/vinsmake.css', array('normalize'), '1.0.0');

    /* js */
    /* hamburguer menu */
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/vinsmake_hamburger_menu.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'vinsmake_scripts_styles');

?>