<?php
/*
PDF
*/
?>
<section class="row contentblocks">
    <div class="col">
        <h2 class="maintitle"><?php the_sub_field('title'); ?></h2>
        <div class="details">
            <p><?php the_sub_field('intro'); ?></p>
        </div>
    </div>
</section>
<div class="row contentblocks">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-8 col-sm-6">
                <h3><?php the_sub_field('lefttitle'); ?></h3>
                <?php if (have_rows('pdf_post')): ?>
                <?php while (have_rows('pdf_post')): the_row();
                $text = get_sub_field('text');
                $description = get_sub_field('description');
                $linktype = get_sub_field('link_type');
                    $internal_link = get_sub_field('internal_link');
                    $external_link = get_sub_field('external_link');
                    $fileurl = get_sub_field('file_upload');
                    $link = '';
                    if ($linktype == 'internal') {
                    $link = get_sub_field('internal_link');
                    }
                    if ($linktype == 'external') {
                    $link = get_sub_field('external_link');
                    }
                    if ($linktype == 'file') {
                    $link = get_sub_field('file_upload');
                    }
                ?>
                <div class="col-sm-12">
                    <a class="pdflink" href="<?php echo $link; ?>">
                        <?php echo $text; ?>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-4 col-sm-6">
                <h3><?php the_sub_field('righttitle'); ?></h3>
                <p><?php the_sub_field('intro'); ?></p>
                <?php if (have_rows('pdf_post_right')): ?>
                <?php while (have_rows('pdf_post_right')): the_row();
                $text = get_sub_field('text');
                $description = get_sub_field('description');
                $linktype = get_sub_field('link_type');
                    $internal_link = get_sub_field('internal_link');
                    $external_link = get_sub_field('external_link');
                    $fileurl = get_sub_field('file_upload');
                    $link = '';
                    if ($linktype == 'internal') {
                    $link = get_sub_field('internal_link');
                    }
                    if ($linktype == 'external') {
                    $link = get_sub_field('external_link');
                    }
                    if ($linktype == 'file') {
                    $link = get_sub_field('file_upload');
                    }
                ?>
                <div class="col-sm-12">
                    <a class="pdflink" href="<?php echo $link; ?>">
                        <?php echo $text; ?>
                    </a>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>