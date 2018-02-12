  <div class="wsmenucontainer clearfix">
    <div id="overlapblackbg"></div>
    <div class="header">
      <div class="wrapper clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a> 
      </div>

      <!--Main Menu HTML Code-->
      <nav class="wsmenu clearfix">
        <ul class="mobile-sub wsmenu-list clearfix">
          <li>
            <img class="sublogo tkmuseo" src="<?php echo get_home_url(); ?>/wp-content/uploads/2018/01/logo.png"> 
            <span class="subtag">Wethersfield Library</span>
          </li>
          <?php wp_nav_menu(array(
               'menu' => 'main-menu', 
               'items_wrap'=>'%3$s', 
               'container' => false
            )); ?>   
        <?php get_template_part('template-parts/sticky-sidebar-menu');?>                   
        </ul>
      </nav>          
 
      <!--Menu HTML Code-->

    </div>
    <div class="wrapper"> <br>        