<?php
/**    Event Blocks **/
if (have_rows('event_block')):
    $count = 0; ?>
    <section class="row padfix">
        <?php
        // loop through the rows of data
        while (have_rows('event_block')) : the_row();
            $count++;
            $date = get_sub_field('date');
            $time = get_sub_field('time');
            $extainfo = get_sub_field('extra_info');
            $weekday = date('l', strtotime($date)); // note: first arg to date() is lower-case L
            $month = date('M', strtotime($date));
            $day = date('j', strtotime($date));
            // see functions file for this function that gets 1st 3rd and 2nd type days with ordinal
            $dayth = ordinal($day);
            ?>
            <div class="col-sm-6">
                <div class="row eventblock">
                    <div class="col-sm-4 date">
                        <?= $weekday; ?>,<br><?= $month; ?>&nbsp;<?= $dayth; ?>
                    </div>
                    <div class="col-sm-8" ><?= $extainfo; ?><br/><?= $time; ?></div>
                </div>
            </div>
            <?php
            if ($count % 2 == 0) { // if this is an even row...
                ?>
                <div class="w-100"></div>
            <?php } endwhile; ?>

    </section>

<?php endif; ?>