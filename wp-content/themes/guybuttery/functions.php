<?php

/**
 * Theme for the Guy Buttery CMS
 *
 * 
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// Add featured images to pages
add_theme_support( 'post-thumbnails' );

