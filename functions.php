<?php

/**
 * Actions Hooks & Filters
 */
add_action( 'wp_enqueue_scripts', 'redsprout_enqueue_scripts' );

/**
 * Child Theme parent style & custom stylesheet
 */
function redsprout_enqueue_scripts() {
	// styles
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom.css' );
	// scripts
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'redsprout', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), false, true );
}