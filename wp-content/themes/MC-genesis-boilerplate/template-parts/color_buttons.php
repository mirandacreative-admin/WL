<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ):

 	// loop through the rows of data
    while ( have_rows('flexible_content') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'color_buttons' ):

        	// check if the nested repeater field has rows of data
        	if( have_rows('buttons') ):

			 	// loop through the rows of data
			    while ( have_rows('buttons') ) : the_row();
				$btntext = get_sub_field('button_text');
				$linktype = get_sub_field('link_type');
				$intlink = get_sub_field('internal_link');
				$extlink = get_sub_field('external_link');
				$btncolor = get_sub_field('button_color');
				$fileurl = get_sub_field('file_upload');
				
				if ($linktype == 'file' ){
				$destination = $fileurl;
				}
				if ($linktype == 'internal' ){
				$destination = $intlink;
				}
				if ($linktype == 'external' ){
				$destination = $extlink;			
				}					
				echo 'w<a class="wgdebtn" style="background-color: '.$btncolor.';" href="'.$destination.'" target="_blank">'.$btntext.'</a>';

				endwhile;



			endif;

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>