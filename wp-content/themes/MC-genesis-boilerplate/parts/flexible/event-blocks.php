<?php   
		
		if( have_rows('event_block') ):
		
			$count = 0; 
	 		echo '<div class="row padfix">';

	 	// loop through the rows of data
	    while ( have_rows('event_block') ) : the_row();
	    	$count++;
	    	$count = $amtofcols;
			$date = get_sub_field('date');
			$time = get_sub_field('time');
			$extainfo = get_sub_field('extra_info');

			echo '<div class="row eventblock"><div class="col-sm-4 date">'.$date.'</div><div class="col-sm-8" details>'.$extainfo.'<br/>'.$time.'</div></div>';

			if ($amtofcols == 2){
				echo '<div class="w-100"></div>';	
			}	


		endwhile;

		echo '</div>';

		endif; ?>