<?php
/*
Left Sidebar
*/
?>
<div id="left-sticky" class="slidemenu">
    <a href="<?php echo get_option( "siteurl" ); ?>"><img class="logo"
                                                          src="<?php the_field( 'logo', 'option' ); ?>"></a>
    <a href="<?php echo get_site_url(); ?>/about-portal/"><h2>About The Library</h2></a>
    <div id="menuslot">
		<?php include_once( get_stylesheet_directory() . '/template-parts/mobile-menu.php' ); ?>
    </div>
    <div class="hourblock">
        <h2>Library Hours</h2>
        <div class="row hour-inner">
            <div class="col dow">
                <ul>
                    <li class="off-canvas-menu-hours" data-day="monday">Mon</li>
                    <li class="off-canvas-menu-hours" data-day="tuesday">Tues</li>
                    <li class="off-canvas-menu-hours" data-day="wednesday">Wed</li>
                    <li class="off-canvas-menu-hours" data-day="thursday">Thurs</li>
                    <li class="off-canvas-menu-hours" data-day="friday">Fri</li>
                    <li class="off-canvas-menu-hours" data-day="saturday">Sat</li>
                    <li class="off-canvas-menu-hours" data-day="sunday">Sun</li>
                </ul>
            </div>
            <div class="col-8 hours">
                <ul>
                    <li class="off-canvas-menu-hours" data-day="monday" name="Mon">
						<?php the_field( 'monday_hours', 'option' ); ?>
                    </li>
                    <li class="off-canvas-menu-hours" data-day="tuesday" name="Tue">
						<?php the_field( 'tuesday_hours', 'option' ); ?>
                    </li>
                    <li class="off-canvas-menu-hours" data-day="wednesday"
                        name="Wed"><?php the_field( 'wednesday_hours', 'option' ); ?>
                    </li>
                    <li class="off-canvas-menu-hours" data-day="thursday" name="Thu">
						<?php the_field( 'thursday_hours', 'option' ); ?>
                    </li>
                    <li class="off-canvas-menu-hours" data-day="friday" name="Fri">
						<?php the_field( 'friday_hours', 'option' ); ?>
                    </li>
                    <li class="off-canvas-menu-hours" data-day="saturday" name="Sat">
						<?php the_field( 'saturday_hours', 'option' ); ?>
                    </li>
                    <li class="off-canvas-menu-hours" data-day="sunday" name="Sun">
						<?php the_field( 'sunday_hours', 'option' ); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <h2>Connect</h2>
    <ul class="connect">
		<?php if ( have_rows( 'connect', 'options' ) ): ?>
			<?php while ( have_rows( 'connect', 'options' ) ): the_row();
				$icon          = get_sub_field( 'icon' );
				$link_text     = get_sub_field( 'link_text' );
				$linktype      = get_sub_field( 'link_type' );
				$internal_link = get_sub_field( 'internal_link' );
				$external_link = get_sub_field( 'external_link' );
				if ( $linktype == 'internal' ) {
					$destination = $internal_link;
				}
				if ( $linktype == 'external' ) {
					$destination = $external_link;
				}
				?>
                <li class="connect-link">
                    <a href="<?= $destination; ?>">
                        <i class="material-icons"><?= $icon; ?></i>
                        <span><?= $link_text; ?></span>
                    </a>
                </li>
			<?php endwhile; ?>
		<?php endif; ?>
        <li class="connect-link">
            <a href="https://www.facebook.com/wethersfieldlibrary/">
                <i><img class="social" src="/wp-content/themes/MC-genesis-boilerplate/images/fa-facebook-copy.png"></i>
                <span>Facebook</span>
            </a>
        </li>
        <li class="connect-link">
            <a href="https://twitter.com/WethLibrary">
                <i><img class="social" src="/wp-content/themes/MC-genesis-boilerplate/images/fa-twitter-copy.png"></i>
                <span>Twitter</span>
            </a>
        </li>
    </ul>
    <a class="btn-dark-slate-blue" href="<?php echo get_site_url(); ?>/support-the-library/">
        <button type="button" class="button btn-dark-slate-blue">

            SUPPORT<br/>THE LIBRARY

        </button>
    </a>
    <address>
        <span class="address">
            515 Silas Deane Highway  Wethersfield, CT 06109
        </span>
        <a href="tel:18605292665">(860) 529-2665</a>
    </address>
    <div class="copyright">
		<?php the_field( 'copyright', 'options' ); ?>
    </div>
</div>