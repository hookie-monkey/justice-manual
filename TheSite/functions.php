<?php

//load stylesheet
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');

//load js
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');

// theme options

add_theme_support('menus');
add_theme_support('post-thumbnails');

// my menus

register_nav_menus(
    array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    )
    
    );

    //Customimage sizes

    add_image_size ('blog-large', 800, 400, true);
    add_image_size ('blog-small', 300, 200, true);

    //widgets


    //news

    function my_first_post_type()

        {
            $args = array(

                'labels' => array('name' => "News"),
                'hierarchical'=>true, 
                'public'=> true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-media-text',
                'suports' => array ('title', 'editor', 'thumbnail'),

            );

            register_post_type('news', $args);


        }
    add_action('init', 'my_first_post_type');


    // taxonomy new

    function my_first_taxonomy()
    {

        $args = array(

            'labels' => array(
                'name' =>'Types',
                'singular_name' => 'Type',
            ),


        );


    }