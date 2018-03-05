<?php
/** Three Column List */
?>

<h2><?php the_field('maintitle'); ?></h2>

<?php if (have_rows('three_col')): ?>
    <section class="row threelist">
        <?php while (have_rows('three_col')): the_row();
            $count++;
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

