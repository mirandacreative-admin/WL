<?php
/* 
Search Bars
*/
?>
<section class="searchbars">
<div class="searchwrapper">
  <form method="get" action="http://lci-mt.iii.com/iii/encore/Home,$Search.form.sdirect" name="form" id="catform">
    <input class="" name="target"  onkeydown="alert('shweet')" placeholder="Search Library Catalog" id="libcat" size="" type="text">
    <input type="image" value="" class="submit imgsubmit" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/search-icon.png">
  </form>
</div>
  <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Search Widget") ) : ?>
  <?php //endif;?>
<div class="searchwrapper">  
	<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	    <label style="width: 100%;">
	        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
	        <input id="wpsearch"  onkeydown="alert('shweet')" type="search" class="search-field"
	            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
	            value="<?php echo get_search_query() ?>" name="s"
	            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	    </label>
	        <input type="image" class="imgsubmit" alt="Search" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/search-icon.png" />
	</form>
</div>

</section>
