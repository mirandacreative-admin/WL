<?php
/*
Child Programs
*/
?>
<section class="row contentblocks">
    <div class="col-sm-12">
        <h2 class="maintitle"><?php the_sub_field('title'); ?></h2>
        <div class="details">
            <p><?php the_sub_field('intro'); ?></p>
        </div>
    </div>
</section>
<section class="row">
    <?php if (have_rows('program')):?>
    <?php while (have_rows('program')) : the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $agerange = get_sub_field('age_range');
        $time = get_sub_field('time');
        $dates = get_sub_field('dates');
        $registration_url = get_sub_field('registration_url');
        $dow = get_sub_field('day_of_the_week');
    ?>
    <div class="row program">
     <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-2">
            <div class="date"><?= $dow; ?></div>
          </div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-6">
                 <h2><?= $title; ?></h2>
              </div>
              <div class="col-sm-6">
                 <div class="agerange"><?= $agerange; ?></div>
              </div>
               <div class="col-sm-12 descr">
                <?= $description; ?>
                <div class="time">
                    <span>Time</span> <?= $time; ?>
                </div>
                <div class="dates">
                    <span>Dates</span> <?= $dates; ?>
                </div>
                <a class="button btn-greyblue btn-short" href="<?= $registration_url; ?>">Registration</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</section>