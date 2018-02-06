<?php   
		
		if( have_rows('row') ):
		
			$count = 0; 
	 		echo '<div class="row threelist padfix">';

	 	// loop through the rows of data
	    while ( have_rows('row') ) : the_row();
	    	$count++;
			$colone = get_sub_field('col_one');
			$coltwo = get_sub_field('col_two');
			$colthree = get_sub_field('col_three');			

			echo '<div class="col">'.$colone.'</div>';

			echo '<div class="col">'.$coltwo.'</div>';
			echo '<div class="col">'.$colthree.'</div>';
			echo '<div class="w-100"></div>';				

		endwhile;

		echo '</div>';

		endif; ?>