<?php
/*
Director Cards
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

<?php if (have_rows('single_card')): ?>
    <section class="row threelist">
        <?php while (have_rows('single_card')) : the_row();
            $image = get_sub_field('image');
            $name = get_sub_field('name');
            $title = get_sub_field('title');
            $detail = get_sub_field('detail');
            ?>
            <div class="col-sm-6 peoplecard">
                <div class="media">
                  <img class="mr-3" src="<?= $image; ?>">
                  <div class="media-body">
                    <span><?= $name; ?></span>
                    <span><?= $title; ?></span>
                    <span><?= $detail; ?></span>
                  </div>
                </div>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>