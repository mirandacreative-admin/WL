<?php   
		
		if( have_rows('person') ):
		
			$count = 0; 
	 		echo '<div class="row threelist padfix">';

	 	// loop through the rows of data
	    while ( have_rows('person') ) : the_row();
	    	$count++;
			$name = get_sub_field('name');
			$title = get_sub_field('title');
			$detail = get_sub_field('detail');			

			echo '<div class="col peoplecard">';
			echo '<span>'.$name.'</span>';
			echo '<span>'.$title.'</span>';
			echo '<span>'.$detail.'</span>';						
			echo '</div>';
			if ( $count % 2 == 0 ){ echo '<div class="w-100"></div>';}		

		endwhile;

		echo '</div>';

		endif; ?>