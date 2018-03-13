<?php
/*
Gallery
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

<?php if (have_rows('image')): ?>
    <section class="row padfix">
        <div class="card-columns">
            <?php while (have_rows('image')) : the_row();
                $count++;
                $img = get_sub_field('img');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $alt_tag = get_sub_field('alt_tag');
                ?>
               <div class="card">
                    <a href="<?= $img; ?>" data-toggle="lightbox">
                        <img class="img-fluid" src="<?= $img; ?>" alt="<?= $alt_tag; ?>">
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>



