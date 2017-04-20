<?php
/**
 *
 * @package una
 * @since una 1.0.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# WordPress Head Clean-up
#-------------------------------------------------------------

function una_head_cleanup(){

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // New Title support since WP 4.1
    add_theme_support( 'title-tag' );

    // Disable comments feed
    add_filter( 'feed_links_show_comments_feed', '__return_false' ); 

    // Remove Smileys embedded in head
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

    // Remove Smileys embedded in head
    remove_action( 'wp_print_styles', 'print_emoji_styles' );   

    // Remove RSS Feed in header
    remove_action('wp_head', 'feed_links', 2 );

    // Remove REST API
    remove_action( 'wp_head', 'rest_output_link_wp_head' );

    // Remove Windows Live Writer Manifest Link
    remove_action( 'wp_head', 'wlwmanifest_link');

    // Remove Weblog Client Link
    remove_action ('wp_head', 'rsd_link');

    // Remove WordPress Page/Post Shortlinks 
    remove_action( 'wp_head', 'wp_shortlink_wp_head');

    // Remove DNS Pre-fetch  (uncomment below to remove)
    // remove_action( 'wp_head', 'wp_resource_hints', 2 );


}

add_action( 'after_setup_theme', 'una_head_cleanup' );