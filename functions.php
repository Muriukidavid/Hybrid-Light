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
/*
function thematic_enqueue_scripts(){
	if (!is_admin() && is_single()) {
		// script to enable x-axis expansion of large code blocks on hover
		wp_enqueue_script('expanding_code_blocks', get_bloginfo('stylesheet_directory') . '/expanding_code_blocks.js', array('jquery'), 1.0, true);
	}
	if (!is_admin() && !is_single()) {
		// script to enable x-axis expansion of large code blocks on hover
		wp_enqueue_script('expanding_code_blocks', get_bloginfo('stylesheet_directory') . '/expanding_code_blocks2.js', array('jquery'), 1.0, true);
	}
}
add_action('wp_enqueue_scripts', 'thematic_enqueue_scripts');
*/
//add a github ribbon on the blog
function github_ribbon() {
	if(!is_admin()) {
		wp_enqueue_script("github-ribbon",get_bloginfo('stylesheet_directory') . '/github-ribbon.js', array('jquery'), 1.0, true);
	}
}
add_action('wp_enqueue_scripts', 'github_ribbon');

//Disable comments on media
function filter_media_comment_status( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'attachment' ) {
		return false;
	}
	return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

//Remove version number for header generator meta, security reasons
function devmnd_tweak_generator( $generator ) {
        return str_replace( ' ' . get_bloginfo( 'version' ), '', $generator );
}
add_filter( 'the_generator', 'devmnd_tweak_generator' );

//disable all widgets on sidebars for singular posts
function disable_all_widgets( $sidebars_widgets ) {

	if ( is_single() )
		$sidebars_widgets = array( false );

	return $sidebars_widgets;
}
add_filter( 'sidebars_widgets', 'disable_all_widgets' );
?>