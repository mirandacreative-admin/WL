<?php
/*
Event Blocks
*/
?>
<section class="row eventblocks">
    <div class="col">
        <h2 class="maintitle"><?php the_sub_field('title'); ?></h2>
        <h5><?php the_sub_field('subheader'); ?></h5>
    </div>
</section>
<section class="row eventblocks">
    <?php if (have_rows('event_block')): ?>
    <?php while (have_rows('event_block')) : the_row();
        $date = get_sub_field('date');
        $time = get_sub_field('time');
        $extra_info = get_sub_field('extra_info');
        $weekday = date('l', strtotime($date));
        $month = date('M', strtotime($date));
        $day = date('j', strtotime($date));
        $dayth = ordinal($day);
        ?>
    <div class="col-sm-6">
        <div class="row block">
             <div class="col-sm-4">
                <div class="date">
                    <div> <?= $weekday; ?>,</div>
                    <div><?= $month; ?>&nbsp;<?= $dayth; ?></div>
                </div>
            </div>
            <div class="col-sm-8 extra-hold">
                <div class="extra"> 
                    <span><?= $extra_info; ?></span>
                    <span><?= $time; ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</section>
<section class="eventblocks">
    <div class="details">
        <p><?php the_sub_field('details'); ?></p>
    </div>
</section>

<?php endif; ?>

