<?php
/**
* Resource Button Links
*/
?>


<?php if (have_rows('single_resource')): ?>
<section class="row resource padfix">
	<?php while(have_rows('single_resource')): the_row();
	$count++;
  	$btntext = get_sub_field('button_text');
		$linktype = get_sub_field('link_type');
		$intlink = get_sub_field('internal_link');
		$extlink = get_sub_field('external_link');
		$btncolor = get_sub_field('button_color');
		$fileurl = get_sub_field('file_upload');
		$descr = get_sub_field('description');
		$btnlink = '';
		if($linktype == 'internal'){
			$btnlink = get_sub_field('internal_link');
		}
		if($linktype == 'external'){
			$btnlink = get_sub_field('external_link');
		}
		if($linktype == 'file'){
			$btnlink = get_sub_field('file_upload');
		}
  ?>
	<div class="col-sm-5">
		<a class="button btn-dark-slate-blue btn-long" href="<?php echo $btnlink; ?>"><?php echo $btntext; ?></a>
	</div>
	<div class="col-sm-7">
		<p><?php echo $descr; ?></p>
	</div>
	<div class="w-100"></div>


  <?php endwhile; ?>
</section>
<?php endif; ?>




<!--  Previous Code  -->

<!-- <?php   
		
		if( have_rows('single_resource') ):
		
			$count = 0; 
	 		echo '<div class="row resource padfix">';

	 	// loop through the rows of data
	    while ( have_rows('single_resource') ) : the_row();
	    	$count++;
			$btntext = get_sub_field('button_text');
			$linktype = get_sub_field('link_type');
			$intlink = get_sub_field('internal_link');
			$extlink = get_sub_field('external_link');
			$btncolor = get_sub_field('button_color');
			$fileurl = get_sub_field('file_upload');
			$descr = get_sub_field('description');
			$btnlink = '';
			if($linktype == 'internal'){
				$btnlink = get_sub_field('internal_link');
			}
			if($linktype == 'external'){
				$btnlink = get_sub_field('external_link');
			}
			if($linktype == 'file'){
				$btnlink = get_sub_field('file_upload');
			}


				echo '<div class="col-sm-4"><a href="'.$btnlink.'">'.$btntext.'</a></div>';
				echo '<div class="col-sm-8"><p>'.$descr.'</p></div>';
				echo '<div class="w-100"></div>';				



		endwhile;

		echo '</div>';

		endif; ?> -->