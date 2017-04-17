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

    // Remove p tags from category description
    remove_filter('term_description','wpautop');  

    // There is no Post Thumbnail support, uncomment to enable
    // add_theme_support( "post-thumbnails" );
}

add_action( 'after_setup_theme', 'una_head_cleanup' );