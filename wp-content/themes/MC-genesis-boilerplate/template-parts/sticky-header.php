<div id="stickem" class="float-header">
	<div class="row">
		<div class="col-lg-2 col-md-12">
			<img class="logo" src="<?php the_field('logo', 'option'); ?>">
		</div>
		<div class="col-lg-10 col-md-12">
						<h1 class="tk-museo"><?php bloginfo( 'name' ); ?></h1>
					<!-- our main menu -->
					<?php wp_nav_menu(
							  array(
							    'menu' => 'main-menu',
							    'container_class' => 'main-menu'
							  )
							);
					?>	
		</div>
	</div>	


</div>