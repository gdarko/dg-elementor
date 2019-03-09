<?php

/**
 * Theme setup
 */
function dg_elementor_setup_theme() {

	// Text domain
	load_theme_textdomain( 'dg-elementor', get_template_directory() . '/languages' );

	// Register menus
	register_nav_menus( array( 'primary-nav' => __( 'Primary', 'dg-elementor' ) ) );

	// Declare support
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', ) );
	add_theme_support( 'custom-logo', array( 'height' => 100, 'width' => 350, ) );
	add_editor_style( 'editor-style.css' );

	// WooCommerce if any
	if ( class_exists( 'WooCommerce' ) ) {
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
}

add_action( 'after_setup_theme', 'dg_elementor_setup_theme' );


/*
 * Enqueues
 */
function dg_elementor_enqueue_scripts() {

	// Styles
	wp_enqueue_style( 'dg-elementor', get_stylesheet_uri() );

	// Remove gutenberg block library bloat
	wp_dequeue_style( 'wp-block-library' );

	// Scripts
	wp_enqueue_script(
		'dg-elementor',
		get_template_directory_uri() . '/assets/js/theme.js',
		array( 'jquery' ),
		filemtime( get_template_directory() . '/assets/js/theme.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'dg_elementor_enqueue_scripts' );

/**
 * Removes the unnecessary header bloat
 */
function dg_elementor_cleanup() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	// Disable oembed
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}
add_action( 'init', 'dg_elementor_cleanup' );