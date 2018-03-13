<?php
/*
Card Content Grid
*/
?>
<section class="container squaregrid">
    <div class="row equal">
        <?php if (have_rows('cards')): ?>
            <?php while (have_rows('cards')): the_row();
                $title = get_sub_field('title');
                $blurb = get_sub_field('blurb');
                $link_url = get_sub_field('link_url');
                $hover_color = get_sub_field('hover_color');
            ?>
            <div class="hold col-lg-4 col-sm-6">
            <a class="link" onmouseover="this.style.background='<?php echo $hover_color; ?>'"onmouseout="this.style.background='white'" href="<?php echo $link_url; ?>">
                <div>
                    <h2 class="header"><?php echo $title; ?></h2>
                    <div class="blurb"><?php echo $blurb; ?></div>
                </div>
            </a>
        </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>