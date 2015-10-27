<?php

/*
Template Name: Contact Template
 */
get_header();
?>

	<div class="wrapper">
		<!-- service content start -->
		<section class="container">
			<!-- left side article start -->
			<article class="sidebar">
				<div class="gray_bg">Contact Us</div>
				<?php
				$accPost = new WP_Query('cat=10');

				if ($accPost->have_posts()) :
					while ($accPost->have_posts()) : $accPost->the_post();
				?>
				<div class="contact_green"><?php the_title(); ?></div>
				<?php
						the_content();
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
			</article>
			<!-- left side article end -->

			<!-- right side article start -->
			<article class="main clearfix">
				<div class="green_bg">
					Make an appointment
				</div>
				<div class="service_content">
					<?php
						if (have_posts()) :
						while (have_posts()) : the_post();
							the_content();
						endwhile;
						else :
							echo '<p>No content found</p>';
						endif;
					?>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
				</div>
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