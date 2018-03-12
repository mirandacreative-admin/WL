<?php
/*
People Cards
*/
?>
<section class="row contentblocks">
    <div class="col">
        <h2 class="maintitle"><?php the_sub_field('title'); ?></h2>
        <div class="details">
            <p><?php the_sub_field('intro'); ?></p>
        </div>
    </div>
</section>

<?php if (have_rows('person')):
    $count = 0;
    ?>
    <section class="row threelist padfix">
        <?php while (have_rows('person')) : the_row();
            $count++;
            $name = get_sub_field('name');
            $title = get_sub_field('title');
            $detail = get_sub_field('detail');
            ?>
            <div class="col peoplecard">
                <span><?= $name; ?></span>
                <span><?= $title; ?></span>
                <span><?= $detail; ?></span>
            </div>

            <?php
            if ($count % 2 == 0) { ?>
                <div class="w-100"></div>
            <?php }
        endwhile; ?>
    </section>
<?php endif; ?>