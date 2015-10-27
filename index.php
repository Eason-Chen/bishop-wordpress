<?php
	get_header();
?>

	<!-- top banner start -->
	<div class="banner">
		<div class="slide">
			<div class="container">
				<span class="slide_texttop">Beautiful Smiles<br />For a Brighter Future</span>
				<span class="slide_textbottom">Make an appointment for<br />your smile makeover</span>
				<a href="<?php echo home_url(); ?>/contact" class="slide_button">Request Appointment</a>
			</div>
			<?php
				if (have_posts()) :
				while (have_posts()) : the_post();
					$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
					echo '<img class="slide_img" src="'.$full_image_url[0].'" height="auto" width="100%" alt="">';
			?>
			<div class="top_line">
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/top_line.png" height="auto" width="100%" alt="">
			</div>
		</div>
	</div>
	<!-- top banner end -->

	<div class="wrapper">
		<!-- content start -->
		<section class="container">
			<article>
				<?php
						the_content();
					endwhile;
					else :
						echo '<p>No content found</p>';
					endif;
				?>
				<?php
				$homePost = new WP_Query('cat=1');

				if ($homePost->have_posts()) :
					while ($homePost->have_posts()) : $homePost->the_post();
				?>
				<div class="gray_bg"><?php echo get_post_meta($post->ID, "notice_value", true); ?></div>
				<div class="green_bg"><?php echo get_post_meta($post->ID, "content_value", true); ?></div>
				<?php
						the_content();
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
				<div class="links"><a href="<?php echo home_url(); ?>/contact">Make<br>Appointment</a></div>
				<div class="links"><a href="<?php echo home_url(); ?>/service">Special<br>Offers</a></div>
				<div class="links"><a href="<?php echo home_url(); ?>/contact">Contact<br>Us</a></div>
			</article>
		</section>
		<!-- content end -->

		<!-- bottom line start -->
		<div class="bottom_line">
			<img src="<?php echo get_template_directory_uri(); ?>/imgs/down_line.png" height="auto" width="100%" alt="">
		</div>
		<!-- bottom line end -->
	</div>

<?php
	get_footer();
?>