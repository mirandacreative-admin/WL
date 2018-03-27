<?php
/**
 * Top Navigation Sticky
 */
?>

<div id="stickem" class="float-header container">

    <div class="row">
        <div class="col-md-2" style="cursor: pointer;" onclick="location.href = '<?php echo site_url(); ?>'; ">
            <a href="<?php echo get_option( "siteurl" ); ?>">
                <img class="homelink"
                     src="<?php echo get_home_url(); ?>/wp-content/themes/MC-genesis-boilerplate/images/spacer.png">
            </a>
        </div>
        <div class="col-md-10 navpanel">
            <div class="wrapper">
                <div class="logogroup">
                    <a href="<?php echo get_option( "siteurl" ); ?>"><img class="mediumlogo"
                                                                          src="<?php the_field( 'logo', 'option' ); ?>"></a>
                    <h1 class="tk-museo"><?php bloginfo( 'name' ); ?></h1>
                </div>
                <!-- Main Menu-->
				<?php
				wp_nav_menu(
					array(
						'menu'            => 'main-menu',
						'container_class' => 'main-menu',
						'menu_class'      => 'nav',
					)
				);
				?>
            </div>
        </div>
    </div>
</div>