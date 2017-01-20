<?php

function mrvinceotheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );

    $dependencies = array('bootstrap');
    wp_enqueue_style( 'mrvinceotheme-style', get_stylesheet_uri(), $dependencies ); 
}

function mrvinceotheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
    wp_enqueue_script( 'masonryJs', get_template_directory_uri().'/js/masonry.pkgd.min.js', $dependencies, '', true );
    wp_enqueue_script( 'masonryCodeJs', get_template_directory_uri().'/js/masonryCode.js', $dependencies, '', true ); 
    wp_enqueue_script( 'parallaxBg', get_template_directory_uri().'/js/parallaxbg.js', $dependencies, '', true );   
    wp_enqueue_script( 'scrollJs', get_template_directory_uri().'/inc/scroll.js', $dependencies, '', true);
}

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Bootstrap navigation
function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}


add_action( 'wp_enqueue_scripts', 'mrvinceotheme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'mrvinceotheme_enqueue_scripts' );

function mrvinceotheme_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'mrvinceotheme_wp_setup' );

function mrvinceotheme_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'mrvinceotheme_register_menu' );


function mrvinceotheme_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer_copyright_text',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
        register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'mrvinceotheme_widgets_init' );

// Custom Logo support:
function mrvinceotheme_setup() {
 add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'mrvinceotheme_setup');

?>