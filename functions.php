<?php
add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_styles' );

function theme_slug_enqueue_styles() {
	wp_enqueue_style( 
		'theme-slug-style', 
		get_stylesheet_uri()
	);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts() {
    wp_enqueue_script (
        'Loading-Script',
        get_parent_theme_file_uri('assets/js/loading.js'),
    );
};