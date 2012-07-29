<?php
/**
 * Functions File
 *
 * This is your child theme's functions.php file.  It is here for adding custom functions and
 * setting up default functionality for this child theme.  You are free to modify this file in
 * any way you like.
 *
 * @package Hybrid
 * @subpackage Functions
 */

function github_ribbon() {
	if(!is_admin()) {
		wp_enqueue_script("github-ribbon",get_bloginfo('stylesheet_directory') . '/github-ribbon.js', array('jquery'), 1.0, true);
	}
}
add_action('wp_enqueue_scripts', 'github_ribbon');
?>