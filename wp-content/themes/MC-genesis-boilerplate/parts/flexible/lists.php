<?php
/*
Lists Module
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

<?php if (have_rows('lists')): ?>
    <section class="row">
        <?php while (have_rows('lists')) : the_row();
            $header = get_sub_field('header');
            $title = get_sub_field('title');
            $detail = get_sub_field('detail');
            ?>
            <div class="col-sm-12 col-lg-12 listsection">
                <h3><?= $header; ?></h3>
                <h4><?= $title; ?></h4>
                <span class="descr"><?= $detail; ?></span>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>