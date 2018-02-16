<?php   
		
		if( have_rows('image') ):
		
			$count = 0; 
	 		echo '<div class="row padfix"><div class="card-columns">';

	 	// loop through the rows of data
	    while ( have_rows('image') ) : the_row();
	    	$count++;
			$img = get_sub_field('img');
			$title = get_sub_field('title');
			$description = get_sub_field('description');			

			echo '<div class="card">';
			echo '<img class="card-img-top img-fluid" src="'.$img.'" alt="Card image cap">';						
			echo '</div>';	

		endwhile;

		echo '</div></div>';

		endif; ?>