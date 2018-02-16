<?php
    // check if the flexible content field has rows of data
    if (have_rows('flexible_content')):

        // loop through the rows of data
        while (have_rows('flexible_content')) : the_row();

            if (get_row_layout() == 'tile_cards'):
                get_template_part('template-parts/card-grid');

            elseif (get_row_layout() == 'blurb_rows'):
                get_template_part('template-parts/blurb-row');
            endif;

        endwhile;

    else :
    // no layouts found
 ?>
     <h1><?php the_title() ?></h1>
    <?php
endif;
