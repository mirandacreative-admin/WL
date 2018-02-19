<div id="left-sticky">
	<img class="logo" src="<?php the_field('logo', 'option'); ?>">
	<a href="#"><h2>About Library</h2></a>

	<div class="hourblock">
		<h2>Library Hours</h2>
		<div class="row hour-inner">
			<div class="col dow">
				<ul>
					<li>Mon</li>
					<li>Tues</li>
					<li>Wed</li>
					<li>Thurs</li>
					<li>Fri</li>
					<li>Sat</li>
					<li>Sun</li>
				</ul>
			</div>
			<div class="col-8 hours">
				<ul>
					<li name="Mon"><?php the_field('monday_hours', 'option'); ?></li>
					<li name="Tue"><?php the_field('tuesday_hours', 'option'); ?></li>
					<li name="Wed"><?php the_field('wednesday_hours', 'option'); ?></li>
					<li name="Thu"><?php the_field('thursday_hours', 'option'); ?></li>
					<li name="Fri"><?php the_field('friday_hours', 'option'); ?></li>
					<li name="Sat"><?php the_field('saturday_hours', 'option'); ?></li>
					<li name="Sun"><?php the_field('sunday_hours', 'option'); ?></li>
				</ul>
			</div>
		</div>
	</div>

	<h2>Connect</h2>
	<ul class="quicklinks">
		<li class="contactus"><a href="#">Contact Us</a></li>
		<li class="enews"><a href="#">Sign Up For ENews</a></li>
		<li class="directions"><a href="#">Directions</a></li>
		<li class="fb"><a href="#">Facebook</a></li>
		<li class="tw"><a href="#">Twitter</a></li>
	</ul>
	<div class="librarysupportbox">
		<span>SUPPORT<br/>THE LIBRARY</span>
	</div>
	<p class="address">
		515 Silas Deane Highway  Wethersfield, CT 06109
	</p>
	<p class="phonenumber">
		(860) 529-2665
	</p>
</div>