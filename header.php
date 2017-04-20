<?php
/**
 * Default theme header
 *
 * Displays the <head> section as well as the opening tag for the body
 * 
 * @package una
 * @since una 1.0.0
 * @license GPL 2.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Responsive stylesheet -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<?php indented_wp_head(); ?>

</head>

<body <?php body_class(); ?> >
