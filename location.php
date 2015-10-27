<?php

/*
Template Name: Location Template
 */
get_header();
?>

	<div class="wrapper">
		<!-- service content start -->
		<section class="container">
			<!-- left side article start -->
			<article class="sidebar location">
				<div class="gray_bg">Our Location</div>
				<p>Unit S,</p>
				<p>8 Bishop Lenihan Place,</p>
				<p>East Tamaki,</p>
				<p>Auckland 2013</p>
				<p>New Zealand</p>
			</article>
			<!-- left side article end -->

			<!-- right side article start -->
			<article class="main clearfix">
				<div class="green_bg">
					Find Us on Map
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3187.998373028884!2d174.8976443150715!3d-36.962095693561324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4cf793244ff9%3A0x4eedf2adbf118a5c!2s8+Bishop+Lenihan+Pl%2C+East+Tamaki%2C+Auckland+2013!5e0!3m2!1sen!2snz!4v1445459431193" width="680" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</article>
			<!-- right side article end -->
		</section>

		<!-- bottom line start -->
		<div class="bottom_line">
			<img src="<?php echo get_template_directory_uri(); ?>/imgs/down_line.png" height="auto" width="100%" alt="">
		</div>
		<!-- bottom line end -->
	</div>

<?php
	get_footer();
?>