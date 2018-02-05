<?php
/**
* Template Name: Freidns of the library Template
* Description: Template used for the friends of the library page
*/
//* Add custom body class
add_action('genesis_entry_header','fol_blocks');
function fol_blocks(){

   get_template_part('template-parts/color_buttons');     
}


genesis();