<?php
// CSS এবং JS লোড করা
function my_blog_theme_scripts() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_blog_theme_scripts' );

// থিম সেটআপ (মেনু, ইমেজ সাপোর্ট)
if ( file_exists( get_template_directory() . '/inc/setup.php' ) ) {
    require get_template_directory() . '/inc/setup.php';
}

function modern_blog_scripts() {
    // Bootstrap CSS (CDN)
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css' );
    // সিএসএস এবং জেএস ফাইল লোড করা

    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    
    // কাস্টম সিএসএস (যদি assets ফোল্ডারে থাকে)
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/main.css' );

    // কাস্টম জেএস
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

    // Bootstrap JS and Bundle (CDN)
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true );
}
add_action( 'wp_enqueue_scripts', 'modern_blog_scripts' );

function modern_blog_setup() {
    // ডাইনামিক টাইটেল ট্যাগ সাপোর্ট
    add_theme_support( 'title-tag' );

    // পোস্টের থাম্বনেইল বা ফিচারড ইমেজ সাপোর্ট
    add_theme_support( 'post-thumbnails' );

    // মেনু রেজিস্ট্রেশন
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'modern-blog' ),
    ) );
}
add_action( 'after_setup_theme', 'modern_blog_setup' );



function modern_blog_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'modern-blog' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'ব্লগের ডান পাশে উইজেট দেখানোর জন্য।', 'modern-blog' ),
        'before_widget' => '<div id="%1$s" class="widget card mb-4 border-0 shadow-sm">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="card-header bg-white border-bottom-0"><h5 class="widget-title mb-0">',
        'after_title'   => '</h5></div><div class="card-body">',
    ) );
}
add_action( 'widgets_init', 'modern_blog_widgets_init' );

function register_custom_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools', // ড্যাশবোর্ড আইকন
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'services'),
    );
    register_post_type('services', $args);
}
add_action('init', 'register_custom_post_type');


function enqueue_swiper_assets() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    
    // আপনার কাস্টম জেএস ফাইল (যদি থাকে) অথবা ফুটারের নিচে স্ক্রিপ্ট লিখতে পারেন
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');
