<?php
/*
Gallery
*/
?>

<?php if (have_rows('image')):

    $count = 0; ?>
    <section class="row padfix">
        <div class="card-columns">
            <?php
            // loop through the rows of data
            while (have_rows('image')) : the_row();
                $count++;
                $img = get_sub_field('img');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $alt_tag = get_sub_field('alt_tag');
                ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?= $img; ?>" alt="<?= $alt_tag; ?>">
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>