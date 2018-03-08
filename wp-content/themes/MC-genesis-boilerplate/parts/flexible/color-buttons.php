<?php
/*
Color-Buttons
*/
?>

<section class="row buttonblocks">
    <div class="col">
        <h2 class="maintitle"><?php the_sub_field('title'); ?></h2>
        <div class="details">
            <p><?php the_sub_field('intro'); ?></p>
        </div>
    </div>
</section>
<section class="row buttonblocks">
    <div class="col">
    <?php if (have_rows('buttons')):
        while (have_rows('buttons')) : the_row();
            $btntext = get_sub_field('button_text');
            $linktype = get_sub_field('link_type');
            $intlink = get_sub_field('internal_link');
            $extlink = get_sub_field('external_link');
            $btncolor = get_sub_field('button_color');
            $fileurl = get_sub_field('file_upload');

            if ($linktype == 'file') {
                $destination = $fileurl;
            }
            if ($linktype == 'internal') {
                $destination = $intlink;
            }
            if ($linktype == 'external') {
                $destination = $extlink;
            }
            ?>
            <div class="button-hold">
                <a class="button" style="background-color: <?= $btncolor; ?>" href="<?= $destination; ?>"target="_blank">
                    <?= $btntext; ?>       
                </a>
            </div>
        <?php endwhile;?>
    <?php endif; ?>
    </div>
</section>
<section class="buttonblocks">
    <div class="details">
        <p><?php the_sub_field('details'); ?></p>
    </div>
</section>