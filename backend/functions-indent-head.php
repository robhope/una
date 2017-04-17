<?php
/**
 *
 * @package una
 * @since una 1.0.0
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# Ultra geeky wp_head indentation
#-------------------------------------------------------------

function indented_wp_head(){
    ob_start();
    wp_head();
    $header = ob_get_contents();
    ob_end_clean();
    echo preg_replace("/\n/", "\n\t", substr($header, 0, -1));
    echo "\n";
}