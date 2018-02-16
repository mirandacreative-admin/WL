<?php
/**
 * Top Navigation Sticky
 */
?>

<div id="stickem" class="float-header container">
	<div class="row">
		<div class="col-md-2">
			<img class="logo" src="<?php the_field('logo', 'option'); ?>">
		</div>
		<div class="col-md-10">
			<div class="logogroup">
				<img class="mediumlogo" src="<?php the_field('logo', 'option'); ?>">
				<h1 class="tk-museo"><?php bloginfo( 'name' ); ?></h1>
			</div>
			<!-- Main Menu-->
			<?php 
				wp_nav_menu(
					array(
						'menu' => 'main-menu',
						'container_class' => 'main-menu'
					)
				);
			?>
		</div>
	</div>
</div>