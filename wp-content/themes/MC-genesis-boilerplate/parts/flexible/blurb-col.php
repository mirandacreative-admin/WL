<?php
/**
 * Blurb Section - Two Columns
 */
?>
 <div class="row">
    <div class="col">
    <?php if ( $maintitle = get_sub_field( 'maintitle' ) ): ?>
        <h2 class="maintitle"><?php echo $maintitle; ?></h2>
    <?php endif; ?>
    </div>
</div>
<?php if (have_rows('blurb_col')):?>
    <section class="row blurb">
        <?php while (have_rows('blurb_col')) : the_row();
            $title = get_sub_field('title');
            $header = get_sub_field('header');
            $subheader = get_sub_field('subheader');
            $column = get_sub_field('column');
            ?>
         <div class="col-6">
                <h2><?= $title; ?></h2>
                <h3><?= $header; ?></h3>
                <h4 class="subheader"><?= $subheader; ?></h4>
                <div class="column">
                    <p><?= $column; ?></p>
                </div>
                <?php if (have_rows('link_list')):?>
                    <?php while (have_rows('link_list')) : the_row();
                        $linktext = get_sub_field('linktext');
                        $link = get_sub_field('link');
                        ?>
                    <a href="<?= $link; ?>"><?= $linktext; ?> LinkText</a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>