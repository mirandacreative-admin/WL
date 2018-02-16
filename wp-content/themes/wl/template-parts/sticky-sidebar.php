
<?php if (have_rows('color_links', 'options')): ?>
    <?php while (have_rows('color_links', 'options')): the_row(); ?>
        <a class="wgdebtn" style="background-color: <?php the_sub_field('button_color'); ?>;" href="<?php the_sub_field('button_link'); ?>" target="_blank">
    		<?php the_sub_field('button_text'); ?>        		
    	</a>
    	<br/>
    <?php endwhile; ?>
<?php endif; ?>
