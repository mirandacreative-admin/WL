<?php
/**
* Card Content Grid
*/
?>
<?php if (have_rows('cards')): ?>
<section class="row squaregrid padfix">
	<?php while(have_rows('cards')): the_row();
		$title = get_sub_field('title');
		$blurb = get_sub_field('blurb');
		$link_text = get_sub_field('link_text');  
		$ext = get_sub_field('ext');
		$link_url = get_sub_field('link_url');  
		$post_link = get_sub_field('post_link');  
		$hover_color = get_sub_field('hover_color');
	?>

<div onmouseover="this.style.background=\''.<?php echo $hover_color; ?>.'\'" onmouseout="this.style.background=\'white\'" class="col">
	<a href="<?php echo $link_url; ?>">
	<h2><?php echo $title; ?></h2>
	<p><?php echo $blurb; ?></p>
	</a>
</div>

	<?php endwhile; ?>
</section>
<?php endif; ?>