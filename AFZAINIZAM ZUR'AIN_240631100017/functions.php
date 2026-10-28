<?php
/**
 * Fungsi dan definisi tema Tema Saya.
 *
 * @package Tema_Saya
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Cegah akses langsung.
}

define( 'TEMA_SAYA_VERSION', '1.0.0' );

/**
 * Pengaturan dasar tema.
 */
function tema_saya_setup() {
	// Dukungan terjemahan.
	load_theme_textdomain( 'tema-saya', get_template_directory() . '/languages' );

	// Biarkan WordPress mengelola <title>.
	add_theme_support( 'title-tag' );

	// Gambar unggulan (thumbnail).
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 630, true );

	// RSS feed link di <head>.
	add_theme_support( 'automatic-feed-links' );

	// Markup HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Logo kustom.
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// Dukungan editor blok.
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );

	// Pembaruan widget selektif di Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Lokasi menu navigasi.
	register_nav_menus( array(
		'primary' => __( 'Menu Utama', 'tema-saya' ),
		'footer'  => __( 'Menu Footer', 'tema-saya' ),
	) );
}
add_action( 'after_setup_theme', 'tema_saya_setup' );

/**
 * Lebar konten untuk embed.
 */
function tema_saya_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tema_saya_content_width', 800 );
}
add_action( 'after_setup_theme', 'tema_saya_content_width', 0 );

/**
 * Muat stylesheet dan script.
 */
function tema_saya_scripts() {
	wp_enqueue_style(
		'tema-saya-style',
		get_stylesheet_uri(),
		array(),
		TEMA_SAYA_VERSION
	);

	// Script menu mobile (inline, tanpa file tambahan).
	wp_register_script( 'tema-saya-navigation', '', array(), TEMA_SAYA_VERSION, true );
	wp_enqueue_script( 'tema-saya-navigation' );
	wp_add_inline_script(
		'tema-saya-navigation',
		"(function(){
			var btn = document.querySelector('.menu-toggle');
			var nav = document.querySelector('.main-navigation');
			if (!btn || !nav) { return; }
			btn.addEventListener('click', function(){
				var open = nav.classList.toggle('toggled');
				btn.setAttribute('aria-expanded', open ? 'true' : 'false');
			});
		})();"
	);

	// Script balasan komentar bertingkat.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tema_saya_scripts' );

/**
 * Daftarkan area widget (sidebar).
 */
function tema_saya_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Utama', 'tema-saya' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widget yang tampil di sidebar.', 'tema-saya' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tema_saya_widgets_init' );

/**
 * Ubah teks "[...]" pada excerpt.
 */
function tema_saya_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'tema_saya_excerpt_more' );

/**
 * Panjang excerpt (jumlah kata).
 */
function tema_saya_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'tema_saya_excerpt_length', 999 );

/**
 * Tampilkan metadata post (tanggal, penulis, kategori).
 */
function tema_saya_entry_meta() {
	printf(
		'<span class="posted-on">%1$s</span><span class="byline">%2$s</span><span class="cat-links">%3$s</span>',
		esc_html( get_the_date() ),
		esc_html( get_the_author() ),
		wp_kses_post( get_the_category_list( ', ' ) )
	);
}
