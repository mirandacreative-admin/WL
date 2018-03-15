<?php 
wp_nav_menu(array(  
  'menu' => 'mobile-menu',   // This will be different for you. 
  'container_id' => 'cssmenu', 
  'walker' => new CSS_Menu_Maker_Walker()
)); 
?>