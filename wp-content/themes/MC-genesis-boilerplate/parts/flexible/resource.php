<?php
/*
Resource Button Links
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
<?php if (have_rows('single_resource')): ?>
    <section class="row resource padfix">
        <?php while (have_rows('single_resource')): the_row();
            $count++;
            $btntext = get_sub_field('button_text');
            $btncolor = get_sub_field('button_color');
            $descr = get_sub_field('description');
            $linktype = get_sub_field('link_type');
                $intlink = get_sub_field('internal_link');
                $extlink = get_sub_field('external_link');
                $fileurl = get_sub_field('file_upload');
            $btnlink = '';
            if ($linktype == 'internal') {
                $btnlink = get_sub_field('internal_link');
            }
            if ($linktype == 'external') {
                $btnlink = get_sub_field('external_link');
            }
            if ($linktype == 'file') {
                $btnlink = get_sub_field('file_upload');
            }
            ?>
            <div class="col-sm-4">
                <a class="button btn-dark-slate-blue"
                   href="<?php echo $btnlink; ?>"><?php echo $btntext; ?>
                </a>
            </div>
            <div class="col-sm-8">
                <p><?php echo $descr; ?></p>
            </div>
            <div class="w-100"></div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>