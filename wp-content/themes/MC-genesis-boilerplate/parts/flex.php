<?php
// check if the flexible content field has rows of data
if (have_rows('main')):

    // loop through the rows of data
    while (have_rows('main')) : the_row();

        if (get_row_layout() == 'blurb_rows'):
            get_template_part('parts/flexible/blurb-row');

        elseif (get_row_layout() == 'tile_cards'):
            get_template_part('parts/flexible/card-grid');

        elseif (get_row_layout() == 'color_buttons'):
            get_template_part('parts/flexible/color-buttons');     
            
        elseif (get_row_layout() == 'event_blocks'):
            get_template_part('parts/flexible/event-blocks');                     

        endif;

    endwhile;

else :
    // no layouts found
 ?>
     <h1><?php the_title() ?></h1>
    <?php
endif;
