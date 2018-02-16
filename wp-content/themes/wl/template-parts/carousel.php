<div id="carouselHome" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
                <?php

                $alert = get_field('slider_alert', 'option');
                if($alert){
                  echo '<div class="alert">'.$alert.'<span id="hide-alert" class="close">x</span></div>';
                }
                // do something with $variable
                ?>


                <?php if (have_rows('slide', 'option')): ?>
                        <?php $count = 0; ?>
                        <?php while (have_rows('slide', 'option')): the_row(); ?>
                          <?php $count++; ?>
                          <div class="carousel-item <?php if( $count == 1){echo ' active';} ?>"><img class="d-block img-fluid" src="<?php the_sub_field('image'); ?>" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                                <h3><?php the_sub_field('image_headline'); ?></h3>
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
</div>