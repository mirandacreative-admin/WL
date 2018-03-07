<?php
/* 
Search Bars
*/
?>
<section class="searchbars">

  <form method="get" action="http://lci-mt.iii.com/iii/encore/Home,$Search.form.sdirect" name="form" id="catform">
    <input class="" name="target" placeholder="Search Library Catalog" id="" size="" type="text">
    <input type="submit" value="" class="submit">
    <i class="material-icons">map</i>
  </form>

  <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Search Widget") ) : ?>
  <?php //endif;?>
  
  <?php get_search_form(); ?>


</section>
