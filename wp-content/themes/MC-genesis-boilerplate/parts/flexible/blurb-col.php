<?php
/*
Blurb Section - Two Columns
 */
?>
 <div class="row">
    <div class="col-sm-12">
    <?php if ( $maintitle = get_sub_field( 'maintitle' ) ): ?>
        <h2 class="maintitle"><?php echo $maintitle; ?></h2>
    <?php endif; ?>
    </div>
</div>
<section class="blurb-hold card-columns">
    <div clas="row">
        <?php $i = 0; ?>
    <?php if (have_rows('blurb_col')):?>
        <?php while (have_rows('blurb_col')) : the_row();
            $i++;
            $title = get_sub_field('title');
            $header = get_sub_field('header');
            $subheader = get_sub_field('subheader');
            $column = get_sub_field('column');
            ?>
         <div class="blurb col">
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
                    <a href="<?= $link; ?>"><?= $linktext; ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('buttons')):?>
                    <?php while (have_rows('buttons')) : the_row();
                        $linktext = get_sub_field('linktext');
                        $link = get_sub_field('link');
                        ?>
                     <a class="button" href="<?= $link; ?>"><?= $linktext; ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        <?php if($i % 2 == 0): ?>
            <div class="w-100"></div>
        <?php endif;?>
    </div>
    </section>
<?php endif; ?>