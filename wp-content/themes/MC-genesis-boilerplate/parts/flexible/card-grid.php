<?php
/**
 * Card Content Grid
 */
?>
<?php if (have_rows('cards')): ?>
    <section class="row squaregrid padfix">
        <?php while (have_rows('cards')): the_row();
            $title = get_sub_field('title');
            $blurb = get_sub_field('blurb');
            $link_url = get_sub_field('link_url');
            $hover_color = get_sub_field('hover_color');
            ?>
            <a class="col-link col-xs-12 col-sm-4" onmouseover="this.style.background='<?php echo $hover_color; ?>'"
               onmouseout="this.style.background='white'" href="<?php echo $link_url; ?>">
                <div>
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $blurb; ?></p>
                </div>
            </a>
        <?php endwhile; ?>
    </section>
<?php endif; ?>