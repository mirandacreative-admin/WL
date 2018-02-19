<?php   
		
		if( have_rows('single_blurb_rows') ):
		
			$count = 0; 
	 		echo '<div class="row blurbrow padfix">';

	 	// loop through the rows of data
	    while ( have_rows('single_blurb_rows') ) : the_row();
	    	$count++;
			$amtofcols = get_sub_field('column_count');
			$colone = get_sub_field('text_col_one');
			$coltwo = get_sub_field('text_col_two');

			if ($amtofcols == 1){
				echo '<div class="col">'.$colone.'</div>';
				echo '<div class="w-100"></div>';	
			}	
			if ($amtofcols == 2){
				echo '<div class="col">'.$colone.'</div>';
				echo '<div class="col">'.$coltwo.'</div>';
				echo '<div class="w-100"></div>';				
			}		

			// are the column counts divisible by three? so we can end the row...
			if ( $count % 2 == 0 ){ echo '<div class="w-100"></div>';}


		endwhile;

		echo '</div>';

		endif; ?>