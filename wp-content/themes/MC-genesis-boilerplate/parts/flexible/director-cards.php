<?php
/** Director Cards **/
if (have_rows('single_card')):
    $count = 0;
    ?>
    <section class="row padfix">
        <?php
        // loop through the rows of data
        while (have_rows('single_card')) : the_row();
            $count++;
            $image = get_sub_field('image');
            $details = get_sub_field('director_details');
            ?>
            <div class="col-sm-6">
                <div class="row eventblock">
                    <div class="col-sm-4 date">
                        <img src="<?= $image; ?>">
                    </div>
                    <div class="col-sm-8"><?= $details; ?></div>
                </div>
            </div>
            <?php
            if ($count % 2 == 0) { ?>
                <div class="w-100"></div>
            <?php } endwhile; ?>
    </section>
<?php endif; ?>