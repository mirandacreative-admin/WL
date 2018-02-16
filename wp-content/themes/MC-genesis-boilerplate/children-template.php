<?php
/**
* Template Name: children page Template
* Description: Template used for the friends of the library page
*/
//* Add custom body class

add_action('genesis_before_entry','childrenpage');
function childrenpage(){

   get_template_part('template-parts/children');     
}

genesis();