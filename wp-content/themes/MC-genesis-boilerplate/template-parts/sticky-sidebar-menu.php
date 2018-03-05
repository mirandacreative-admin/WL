<?php
/**
 * Left Sidebar
 */
?>

<div id="left-sticky" class="slidemenu">
	<a href="<?php echo get_option("siteurl"); ?>"><img class="logo" src="<?php the_field('logo', 'option'); ?>"></a>
	<a href="<?php echo get_option("siteurl"); ?>/about"><h2>About Library</h2></a>
	<div id="menuslot"></div>
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
					<li class="off-canvas-menu-hours" data-day="monday"
                                    name="Mon"><?php the_field('monday_hours', 'option'); ?></li>
					<li class="off-canvas-menu-hours" data-day="tuesday"
                                    name="Tue"><?php the_field('tuesday_hours', 'option'); ?></li>
					<li class="off-canvas-menu-hours" data-day="wednesday"
                                    name="Wed"><?php the_field('wednesday_hours', 'option'); ?></li>
					<li class="off-canvas-menu-hours" data-day="thursday"
                                    name="Thu"><?php the_field('thursday_hours', 'option'); ?></li>
					<li class="off-canvas-menu-hours" data-day="friday"
                                    name="Fri"><?php the_field('friday_hours', 'option'); ?></li>
					<li class="off-canvas-menu-hours" data-day="saturday"
                                    name="Sat"><?php the_field('saturday_hours', 'option'); ?></li>
					<li class="off-canvas-menu-hours" data-day="sunday"
                                    name="Sun"><?php the_field('sunday_hours', 'option'); ?></li>
				</ul>
			</div>
		</div>
	</div>
	<h2>Connect</h2>
	<ul class="quicklinks">
		<li class="friends"><a href="<?php echo get_option("siteurl"); ?>/friends-of-the-library-inc">Friends of the Library</a></li>
		<li class="contact"><a href="<?php echo get_option("siteurl"); ?>/contact-us">Contact Us</a></li>
		<li class="enews"><a href="#">Sign Up For ENews</a></li>
		<li class="directions"><a href="https://www.google.com/maps/dir/My+location/Wethersfield+Public+Library,+515+Silas+Deane+Hwy,+Wethersfield,+CT+06109/data=!4m6!4m5!1m0!1m2!1m1!1s0x89e6528abc5d30f7:0x31aaaae265f17a27!3e0?sa=X&ved=0ahUKEwjR24yb6sbZAhUM5YMKHbaOCR0Qox0INDAA">Directions</a></li>
		<li class="facebook"><a href="https://www.facebook.com/wethersfieldlibrary/twitter">Facebook</a></li>
		<li class="twitter"><a href="https://twitter.com/WethLibrary?lang=en">Twitter</a></li>
	</ul>
	<button type="button" class="button">
		SUPPORT<br/>THE LIBRARY
	</button>
	<address>
		<span class="address">
		515 Silas Deane Highway  Wethersfield, CT 06109
		</span>
		<a href="+18605292665">(860) 529-2665</a>
	</address>
</div>