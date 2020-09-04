<?php

// Check if admin and add admin scripts
if ( is_admin() ) {
	// Add Admin Scripts
	function yvg_add_admin_scripts(){
	    	wp_enqueue_style('yvg-main-admin-style', plugins_url() . '/youtube-vid-gallery/css/style-admin.css');
	    	wp_enqueue_script('yvg-main-script',plugins_url().'/youtube-vid-gallery/js/main.js', array('jquery'));
	}

	add_action('admin_init','yvg_add_admin_scripts');
}


// Add Scripts
function yvg_add_scripts(){
    wp_enqueue_style('yvg-main-style', plugins_url() . '/youtube-vid-gallery/css/style.css');
    wp_enqueue_script('yvg-main-script',plugins_url().'/youtube-vid-gallery/js/main.js', array('jquery'));
}

add_action('wp_enqueue_scripts','yvg_add_scripts');