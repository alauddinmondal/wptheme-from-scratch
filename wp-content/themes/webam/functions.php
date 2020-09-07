<?php
//Load css
function load_css(){
    wp_register_style('webambootstrap', get_template_directory_uri() . '/css/webambootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('webambootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts','load_css');

//Load js
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('webambootstrapjs', get_template_directory_uri() . '/js/webambootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('webambootstrapjs');
}

add_action('wp_enqueue_scripts','load_js');

//Add theme supprts

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top menu location',
        'mobile-menu' => 'Mobile menu location',
        'footer-menu' => 'Footer menu location'
    )
);


//add image sizes

add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

//Register sidebar

function mysidebars() {
    register_sidebar( 
        array(
        'name'          => __( 'Page Sidebar', 'textdomain' ),
        'id'            => 'page-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    ) 
);

    register_sidebar( 
        array(
        'name'          => __( 'Blog Sidebar', 'textdomain' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all blogs.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    ) 
);
}
add_action( 'widgets_init', 'mysidebars' );


//Custom post creation
function my_first_post_type(){

$args = array(
'labels' => array('name' => 'Cars', 'singular_name' => 'Car'),
'hierarchical' => false,
'public' => true,
'has_archive' => true,
'menu_icon' => 'dashicons-car',
'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
// 'rewrite' => array('slug' => 'cars')
);

register_post_type('cars', $args);


}

add_action('init','my_first_post_type');


//my first taxonomy

function my_first_taxonomy(){

$args = array(
    'labels' => array('name' => 'Brands', 'singular_name' => 'Brand'),
    'public' => true,
    'hierarchical' => true,

);

register_taxonomy('brands', array('cars'), $args);

}

add_action('init','my_first_taxonomy');

