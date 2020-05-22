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
add_theme_support('widgets');

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

    //sidebars
    function sidebars_hero(){

        register_sidebar(

            array(

                'name'=> 'Page Sidebar',
                'id' => 'page-sidebar',
                'before-title'=> '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )


            );

        register_sidebar(

                array(
    
                    'name'=> 'Blog Sidebar',
                    'id' => 'blog-sidebar',
                    'before-title'=> '<h4 class="widget-title">',
                    'after_title' => '</h4>'
                )
    
    
                );
    



    }
    add_action('widgets_init' , 'sidebars_hero');


    //news

    function my_first_post_type()

        {
            $args = array(

                'labels' => array('name' => "News",
                                  'singular_name'=> 'new',
                ),
                'hierarchical'=> true, 
                'public'=> true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-media-text',
                'supports' => array ('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),

            );

            register_post_type('news', $args);


        }
    add_action('init', 'my_first_post_type');


    // taxonomy new
    function my_first_taxonomy()
        {
    
            $args = array(

            'labels' => array('name' =>'Articles',
                              'singular_name' => 'Article',
                            ),
            'public' => true,
            'hierarchical' =>true,


    );

    register_taxonomy('articles', array('news'), $args);


}
add_action('init', 'my_first_taxonomy');

// masonry init


function masonry_script() {
 
wp_register_script('my_masonry', get_stylesheet_uri(), '/js/custom.js', array('jquery'),'1.1', true);
 
wp_enqueue_script('my_masonry');
}
  
add_action( 'wp_enqueue_scripts', 'masonry_script' );  

// include custom jQuery
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
