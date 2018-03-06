<?php
/** 
* Carousel Module 
*/
?>
<section id="carouselHome" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <?php
        $alert = get_field('slider_alert', 'option');
        if ($alert) {
            ?>
            <div class="alert"><?= $alert; ?><span id="hide-alert" class="close">x</span></div>
            <?php
        }
        // do something with $variable
        ?>
        <?php if (have_rows('slider')):
            $count = 0;
            while (have_rows('slider')) : the_row();
                $count++;
                $image = get_sub_field('image');
                $headline = get_sub_field('image_headline');
                $status = '';
                if ($count == 1) {
                    $status = ' active';
                };
                ?>
                <div class="carousel-item <?= $status; ?>">
                    <img class="d-block img-fluid" src="<?= $image; ?>" alt="first slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?= $headline; ?></h3>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
        <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</section>