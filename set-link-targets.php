<?php
/*
Plugin Name: Set Link Targets
Description: A simple, lightweight JS plugin that opens all external links in new tabs
Author: Chris Liu-Beers | Tomatillo Design
Author URI: http://www.tomatillodesign.com
Version: 1.0
*/


// Activate custom JS
add_action( 'wp_enqueue_scripts', 'clb_add_custom_js' );
function clb_add_custom_js() {

	wp_enqueue_script( 'clb-set-link-targets', plugin_dir_url( __FILE__ ) . '/js/clb-set-link-targets.js', array( 'jquery' ), '1.0.0', true );


}
