<?php

/**
 * Actions Hooks & Filters
 */
add_action( 'wp_enqueue_scripts', 'kiddo_enqueue_scripts' );

/**
 * Child Theme parent style & custom stylesheet
 */
function kiddo_enqueue_scripts() {
	// styles
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'kiddo-style', get_stylesheet_directory_uri() . '/css/custom.css' );
	// scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'kiddo-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), false, true );
}