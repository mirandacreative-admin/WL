<?php   
		
		if( have_rows('single_card') ):
		
			$count = 0; 
	 		echo '<div class="row padfix">';

	 	// loop through the rows of data
	    while ( have_rows('single_card') ) : the_row();
	    	$count++;
			$image = get_sub_field('image');	    	
			$details = get_sub_field('director_details');




			echo '<div class="col-sm-6"><div class="row eventblock"><div class="col-sm-4 date"><img src="'.$image.'"></div><div class="col-sm-8" details>'.$details.'</div></div></div>';

			if ($count % 2 == 0){
				echo '<div class="w-100"></div>';	
			}	


		endwhile;

		echo '</div>';

		endif; ?>