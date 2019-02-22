<?php
/*
Plugin Name: WP cleaner
Plugin URI: Your website/blog address goes here.
Description: Remove unused tags from wp_head().
Version: 1.0.0
Author: Nykoliuk
Author URI: 
*/

if ( ! defined( 'ABSPATH' ) ) {
    die( 'No direct access allowed!' );
}

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links', 2); 
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_resource_hints', 2);

/*Removes prev and next article links*/
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');