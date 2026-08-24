<?php
defined( 'ABSPATH' ) || exit;

define( 'THRIVE_VERSION', '2.0' );
define( 'THRIVE_DIR',     get_template_directory() );
define( 'THRIVE_URI',     get_template_directory_uri() );

/* ── Theme setup ── */
function thrive_setup() {
    load_theme_textdomain( 'thrive-therapy', THRIVE_DIR . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', [ 'script', 'style', 'search-form', 'comment-form',
                                   'comment-list', 'gallery', 'caption' ] );
    add_image_size( 'thrive-blog-card', 600, 400, true );
    add_image_size( 'thrive-team',      400, 500, true );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'thrive-therapy' ),
        'footer'  => __( 'Footer Navigation',  'thrive-therapy' ),
    ] );
}
add_action( 'after_setup_theme', 'thrive_setup' );

/* ── Enqueue assets ── */
function thrive_scripts() {
    $uri = THRIVE_URI;
    $ver = THRIVE_VERSION;

    wp_enqueue_style( 'google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap',
        [], null );
    wp_enqueue_style( 'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        [], '6.5.1' );
    wp_enqueue_style( 'thrive-main',
        $uri . '/css/style.css',
        [ 'google-fonts', 'font-awesome' ], $ver );

    wp_enqueue_script( 'thrive-main',
        $uri . '/js/main.js',
        [], $ver, true );
}
add_action( 'wp_enqueue_scripts', 'thrive_scripts' );

/* ── Favicon ── */
function thrive_favicon() {
    echo '<link rel="icon" href="' . esc_url( THRIVE_URI . '/images/thrive-logo.jpg' ) . '" type="image/jpeg">' . "\n";
}
add_action( 'wp_head', 'thrive_favicon' );

/* ── WhatsApp booking URL helper ── */
function thrive_wa_url() {
    return 'https://wa.me/256775939636?text=Hello%20Thrive%20Therapy%20%26%20Wellness%2C%0A%0AI%27d%20like%20to%20book%20a%20session.%20Please%20advise%20on%20available%20times.%0A%0AThank%20you.';
}

/* ── Custom post types ── */
function thrive_register_cpts() {
    register_post_type( 'thrive_testimonial', [
        'labels'      => [ 'name' => 'Testimonials', 'singular_name' => 'Testimonial' ],
        'public'      => false,
        'show_ui'     => true,
        'show_in_menu'=> true,
        'supports'    => [ 'title' ],
        'menu_icon'   => 'dashicons-format-quote',
    ] );

    register_post_type( 'thrive_team', [
        'labels'      => [ 'name' => 'Team Members', 'singular_name' => 'Team Member' ],
        'public'      => false,
        'show_ui'     => true,
        'show_in_menu'=> true,
        'supports'    => [ 'title', 'editor', 'thumbnail' ],
        'menu_icon'   => 'dashicons-groups',
    ] );
}
add_action( 'init', 'thrive_register_cpts' );

/* ── Excerpt length ── */
add_filter( 'excerpt_length', fn() => 22 );
add_filter( 'excerpt_more',   fn() => '…' );

/* ── Remove admin bar padding on frontend ── */
add_action( 'get_header', function() {
    remove_action( 'wp_head', '_admin_bar_bump_cb' );
} );
