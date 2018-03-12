<?php
/*
Three Column List
*/
?>

<h2 class="threecol"><?php the_sub_field('maintitle'); ?></h2>
<section class="row threelist">
    <?php if (have_rows('three_col')): ?>
    <?php while (have_rows('three_col')): the_row();
        $colone = get_sub_field('col_one');
        $coltwo = get_sub_field('col_two');
        $colthree = get_sub_field('col_three');
        ?>
        <div class="col">
            <?php echo $colone; ?>
        </div>
        <div class="col">
            <?php echo $coltwo; ?>
        </div>
        <div class="col">
            <?php echo $colthree; ?>
        </div>

    <?php endwhile; ?>
</section>
<?php endif; ?>

