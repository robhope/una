<?php
/**
 *
 * @package una
 * @since una 1.0.2
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

#-------------------------------------------------------------
# Enqueue Scripts 
#-------------------------------------------------------------

# False = Header
# True = Footer

function una_enqueue_scripts() {

	# Custom Scripts 
	wp_register_script  ( 'una-custom-code' , get_template_directory_uri().'/frontend/js/custom-code.js' , array(), una_theme_version, true );
	wp_enqueue_script ( 'una-custom-code' );  

}

add_action( 'wp_enqueue_scripts' , 'una_enqueue_scripts'   );