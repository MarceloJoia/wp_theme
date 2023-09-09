<?php

/**
 * Fancy Labs functions and definitions
 * 
 * @link https://joiamarketing.com.br/
 * 
 * @package Fancy Lab
 */

function fancy_lab_scripts()
{
    /** Carregar o bootstrap  */
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.3.x', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '/style.css', 'all');

    // wp_register_style('style_reset', get_template_directory_uri() . '/style_reset.css');
    // wp_enqueue_style('fancy_lab_style', get_stylesheet_uri(), array('style_reset'), '1.0', 'all'); //<= USER esse em produção

    ///////// REMOVER ISSO EM PRODUÇÃO ///////////////
    wp_enqueue_style('fancy_lab_style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'fancy_lab_scripts');



function fancy_lab_config()
{
    register_nav_menus(
        array(
            'fancy_lab_main_menu' => 'Fancy Lab Main Menu',
            'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu'
        )
    );
}
// Disppara a function fancy_lab_config(). Zero é a prioridade da execução da function
add_action('after_setup_theme', 'fancy_lab_config', 0);
