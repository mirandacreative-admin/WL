<?php
/** Blurb Row **/
if (have_rows('single_blurb_rows')):
    $count = 0;
    ?>
    <section class="row blurbrow padfix">
        <?php
        // loop through the rows of data
        while (have_rows('single_blurb_rows')) : the_row();
            $count++;
            $amtofcols = get_sub_field('column_count');
            $colone = get_sub_field('text_col_one');
            $coltwo = get_sub_field('text_col_two');

            if ($amtofcols == 1) { ?>
                <div class="col"><?= $colone; ?></div>
                <div class="w-100"></div>
            <?php }
            if ($amtofcols == 2) { ?>
                <div class="col"><?= $colone; ?></div>
                <div class="col"><?= $coltwo; ?></div>
                <div class="w-100"></div>
            <?php }
            if ($count % 2 == 0) { // if column is divisible by 2...?>
                <div class="w-100"></div>
            <?php }
            
        endwhile;
        ?>
    </section>
<?php endif; ?>