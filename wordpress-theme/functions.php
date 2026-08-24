<?php
function thrive_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', [ 'script', 'style', 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
}
add_action( 'after_setup_theme', 'thrive_setup' );

function thrive_scripts() {
    $uri = get_template_directory_uri();
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&display=swap', [], null );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', [], '6.5.1' );
    wp_enqueue_style( 'thrive-style', $uri . '/css/style.css', [ 'google-fonts', 'font-awesome' ], '2.0' );
    wp_enqueue_script( 'thrive-main', $uri . '/js/main.js', [], '2.0', true );
}
add_action( 'wp_enqueue_scripts', 'thrive_scripts' );

function thrive_favicon() {
    $uri = get_template_directory_uri();
    echo '<link rel="icon" href="' . esc_url( $uri . '/images/thrive-logo.jpg' ) . '" type="image/jpeg" />' . "\n";
}
add_action( 'wp_head', 'thrive_favicon' );
