<?php 

        	// check if the nested repeater field has rows of data
        	if( have_rows('cards') ):
				$count = 0; 
			 	echo '<div class="row squaregrid padfix">';

			 	// loop through the rows of data
			    while ( have_rows('cards') ) : the_row();
			    $count++;
		$title = get_sub_field('title');
		$blurb = get_sub_field('blurb');
		$link_text = get_sub_field('link_text');	
		$ext = get_sub_field('ext');
		$link_url = get_sub_field('link_url');	
		$post_link = get_sub_field('post_link');	
		$hover_color = get_sub_field('hover_color');
		$target = '_self';
		if ($ext = 'yes'){
			$target = '_blank';
		}			

					echo '<div onmouseover="this.style.background=\''.$hover_color.'\'" onmouseout="this.style.background=\'white\'" class="col">
					<h2><a target="'.$target.'" href="'.$link_url.'">'.$link_text.'</a></h2>
					<p>'.$blurb.'</p>
					</div>';
					// are the column counts divisible by three so we can end the row
			if ( $count % 3 == 0 ){ echo '<div class="w-100"></div>';}


				endwhile;

				echo '</div>';

			endif; ?>