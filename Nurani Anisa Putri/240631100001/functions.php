
<?php
/**
 * Fungsi utama tema Ninis.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Mengatur fitur dasar tema.
 */
function ninis_setup() {

    // Membuat judul halaman dikelola oleh WordPress.
    add_theme_support( 'title-tag' );

    // Mengaktifkan gambar unggulan pada artikel.
    add_theme_support( 'post-thumbnails' );

    // Mengaktifkan HTML5 untuk elemen tema.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Mendaftarkan lokasi menu navigasi.
    register_nav_menus(
        array(
            'primary' => 'Menu Utama',
        )
    );
}
add_action( 'after_setup_theme', 'ninis_setup' );

/**
 * Memuat stylesheet tema.
 */
function ninis_enqueue_styles() {
    wp_enqueue_style(
        'ninis-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'ninis_enqueue_styles' );

/**
 * Mendaftarkan sidebar.
 */
function ninis_widgets_init() {
    register_sidebar(
        array(
            'name'          => 'Sidebar Blog',
            'id'            => 'sidebar-1',
            'description'   => 'Area widget di samping konten blog.',
            'before_widget' => '<section class="widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'ninis_widgets_init' );
