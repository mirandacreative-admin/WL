<?php
/**
 * Blurb Section 2 Columns
 */
?>
 <div class="row blurbrow padfix">
    <div class="col">
    <?php if ( $maintitle = get_sub_field( 'maintitle' ) ): ?>
        <h1><?php echo $maintitle; ?></h1>
    <?php endif; ?>
    </div>
</div>
<?php if (have_rows('blurb_col')):?>
    <section class="row blurbrow padfix">
        <?php while (have_rows('blurb_col')) : the_row();
            $title = get_sub_field('title');
            $header = get_sub_field('header');
            $subheader = get_sub_field('subheader');
            $column = get_sub_field('column');
            $linktext = get_sub_field('linktext');
            $link = get_sub_field('link');
            ?>
            <div class="col-6">
                <h1><?= $title; ?></h1>
                <h2 class="contact-us"><?= $header; ?> </h2>
                <h4 class="wethersfield-library"><?= $subheader; ?></h4>
                <p><?= $column; ?></p>
                <a href="<?= $link; ?>"><?= $linktext; ?></a>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>