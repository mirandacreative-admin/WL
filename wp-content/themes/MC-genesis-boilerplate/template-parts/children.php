   <audio id="grownups" style="display:none;" controls="controls" preload="auto">
            <source src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/childrens-page-audio/bloop.mp3"></source>
            <source src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/childrens-page-audio/bloop_01.ogg"></source>
            Your browser isn't invited for super fun time.
   </audio>

<div class="children-box" style="width: 100%; min-height: 888px;">
   <div class="row">
      <div class="col-md-3">
         <div id="rumble" class="block animated">
             <a href="<?php the_field('grownlink'); ?>">
                <img id="grown" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/grown-ups.svg">
             </a>          
             <div class="rel">
            </div>
         </div>
         <div class="block animated">
           
            <div class="rel">
              <a href="<?php echo get_home_url(); ?>/childrens-gallery/">
                 <img class="margblock" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/picture-shelf1.png">
                <img id="imgtog" class="margblock" style="position: absolute; top: 0px;" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/picture-shelf2.png">
              </a>
             </div>

         </div>
         <div class="block animated">
             <a href="<?php the_field('programlink'); ?>">
                <img id="programs" class="easle" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/programs.png">
             </a>          
            <div class="rel">
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="block">
            <div class="rel">          
            <img src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/todays-message.png">          
              <div id="todaysmsg" class="abs">
                    <?php 
                        query_posts(array( 
                            'post_type' => 'todays_msg',
                            'showposts' => 3 
                        ) );  
                    ?> 
                       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                         <div class="carousel-inner" style="height: 222px;" role="listbox">                
                          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <?php $i++; ?>
                             <?php if($i == 1){$class = "active";}else{ $class = "";};?>

                                <div class="carousel-item <?=$class ?>">
                                      <?php the_content();?>
                                </div>
              	            
                             <?php endwhile; endif; ?>  
                             <?php wp_reset_query(); ?>
                         </div>
                         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                         </a>
                       </div>                      
              </div>
            </div>
         </div>
         <div class="block">
            <div class="rel">          
              <img class="rug" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/carpetwl.svg">          

            	<img class="abs girlone" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/girl1wl.svg">
               <a href="<?php the_field('appmonthlink'); ?>"> 
            	  <img id="appmonth" class="abs twokids" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/kids.svg">
               </a>           	            	           	
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="block animated">
             <a href="<?php the_field('gamelink'); ?>">
              <img id="games" class="games" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/games.svg">  
             </a>          
            <div class="rel">
            </div>
         </div>
         <div class="block animated">
               <a href="<?php the_field('booksbeforeklink'); ?>">
                <img id="thoubooks" class="thoubooks" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/books-before-kinder.svg">  
               </a>          
            <div class="rel">
            </div>
         </div>
         <div class="block">  
            <div class="rel">          
              <img class="teddyshelf" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/shelfwl.svg">            

           		<img class="abs teddy block animated" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/bearwl.svg">           		
            </div>
         </div>
         <div class="block animated">
             <a href="<?php the_field('greatreadslink'); ?>">
              <img id="greatreads" class="greatread" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/great-reads.svg">  
             </a>          
            <div class="rel">
            </div>
         </div>
         <div class="block">
              <img class="toys" src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/toyswl.svg">            
            <div class="rel">
            </div>
         </div>
      </div>
   </div>
</div>