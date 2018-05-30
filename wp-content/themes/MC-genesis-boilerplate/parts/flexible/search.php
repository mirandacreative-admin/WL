<?php
/*
Search Bars
*/
?>
<section>
  <div class="searchwrapper">
    <form method="get" action="https://lci-mt.iii.com/iii/encore/Home,$Search.form.sdirect" name="form" id="catform" target="_blank">
      <input class="" name="target" placeholder="Search Library Catalog" id="libcat" size="" type="text">
      <input type="image" value="" onclick="enlargeiframe()" class="submit imgsubmit" id="libcatsearch" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/ic_search_black_24px.svg">
    </form>
  </div>
  <div class="searchwrapper">
    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
      <label style="width: 100%;">
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input id="wpsearch" type="search" class="search-field"
        placeholder="<?php echo esc_attr_x( 'Search The Website', 'placeholder' ) ?>"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      </label>
      <input type="image" class="imgsubmit" alt="Search" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/ic_search_black_24px.svg" />
    </form>
  </div>
</section>
<!--<div class="catalogframe">-->
<!--   <iframe id="searchresults" src="" name="hidden_iframe" style="width:100%; height: 1px; border: none;"></iframe>-->
<!--</div>-->
