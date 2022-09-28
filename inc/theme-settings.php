<?php

if ( ! defined( 'theme_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'theme_VERSION', '1.0.0' );
}
/**
 * Enqueue scripts and styles.
 */
function my_portfolio_site_scripts_and_styles()
{
    wp_enqueue_style('my-portfolio-site-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', [], theme_VERSION);
}
add_action('wp_enqueue_scripts', 'my_portfolio_site_scripts_and_styles');