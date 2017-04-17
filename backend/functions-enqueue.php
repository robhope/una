<?php
/**
 *
 * @package una
 * @since una 1.0.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# Enqueue Styles
#-------------------------------------------------------------

function una_enqueue_styles() {             

	# Main stylesheet
  	wp_register_style( 'una-main-styles' , get_template_directory_uri(). "/style.css" , array(), una_theme_version, 'screen' );  	
  	wp_enqueue_style( 'una-main-styles' );           

}

add_action( 'wp_enqueue_scripts' , 'una_enqueue_styles' );