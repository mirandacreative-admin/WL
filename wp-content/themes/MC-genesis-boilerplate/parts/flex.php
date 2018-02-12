<h1>hello flex</h1>
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

        elseif (get_row_layout() == 'accordions'):
            get_template_part('parts/flexible/accordions'); 

        elseif (get_row_layout() == 'carousel'):
            get_template_part('parts/flexible/carousel');

        elseif (get_row_layout() == 'search'):
            get_template_part('parts/flexible/search');   
              
        elseif (get_row_layout() == 'director_cards'):
            get_template_part('parts/flexible/director-cards');

        elseif (get_row_layout() == 'child_programs'):
            get_template_part('parts/flexible/child-programs');

        elseif (get_row_layout() == 'three_col_list'):
            get_template_part('parts/flexible/three-col-list');

        elseif (get_row_layout() == 'people_cards'):
            get_template_part('parts/flexible/people-cards');      

        elseif (get_row_layout() == 'gallery'):
            get_template_part('parts/flexible/gallery');   

        elseif (get_row_layout() == 'resource'):
            get_template_part('parts/flexible/resource');                                 

        endif;

    endwhile;

else :
    // no layouts found
 ?>
     <h1><?php the_title() ?></h1>
    <?php
endif;
