<?php   
		
		if( have_rows('program') ):
		
			$count = 0; 
	 		echo '<div class="row padfix">';

	 	// loop through the rows of data
	    while ( have_rows('program') ) : the_row();
	    	$count++;
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			$agerange = get_sub_field('age_range');
			$time = get_sub_field('time');
			$dates = get_sub_field('dates');
			$regurl = get_sub_field('registration_url');
			$dow = get_sub_field('day_of_the_week');


			echo '<div class="row childprogram">
				<div class="col-sm-3"><div class="wd">'.$dow.'</div></div>
				<div class="col-sm-9"><div class="rel"><h2>'.$title.'</h2><p>'.$description.'</p><div class="time"><span>Time</span>'.$time.'</div><div class="dates"><span>Dates</span>'.$dates.'</div><a class="regbtn" href="'.$regurl.'">Registration</a><div class="agerange">'.$agerange.'</div></div></div>
			</div>';

			// are the column counts divisible by three? so we can end the row...



		endwhile;

		echo '</div>';

		endif; ?>