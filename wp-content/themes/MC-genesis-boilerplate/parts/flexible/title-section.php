<?php
/*
Title and Blurb
*/
?>
<?php if (have_rows('titleblurb')):?>
    <section class="row title">
        <?php while (have_rows('titleblurb')) : the_row();
            $maintitle = get_sub_field('maintitle');
            $blurb = get_sub_field('blurb');
            ?>
            <div class="col-sm-12">
                <h1 class="titleheader"><?php echo $maintitle; ?></h1>
                <div class="excerpt"> <?php echo $blurb; ?> </div>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>