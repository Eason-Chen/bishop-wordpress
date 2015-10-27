<?php

/*
Template Name: Service Template
 */
get_header();
?>

	<div class="wrapper">
		<!-- service content start -->
		<section class="container">
			<!-- left side article start -->
			<article class="sidebar">
				<div class="gray_bg">Financial Options - Availabe</div>
				<?php
				$financialPost = new WP_Query('cat=7');

				if ($financialPost->have_posts()) :
					while ($financialPost->have_posts()) : $financialPost->the_post();
				?>
				<div class="green_color"><?php the_content(); ?></div>
				<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
				<div class="gray_bg">ACC Services - Availabe</div>
				<?php
				$accPost = new WP_Query('cat=8');

				if ($accPost->have_posts()) :
					while ($accPost->have_posts()) : $accPost->the_post();
				?>
				<?php the_content(); ?>
				<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
			</article>
			<!-- left sidearticle end -->

			<!-- right side article start -->
			<article class="main clearfix">
				<div class="green_bg">
					Dental Services Available
				</div>
				<?php
				$servicePost = new WP_Query('cat=9');

				if ($servicePost->have_posts()) :
					while ($servicePost->have_posts()) : $servicePost->the_post();
				?>
				<div class="service_content">
					<div class="service_tit"><?php the_title(); ?></div>
				<?php
						the_content();
				?>
				</div>
				<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
			</article>
			<!-- right side article end -->
		</section>
		<!-- service content end -->

		<!-- bottom line start -->
		<div class="bottom_line">
			<img src="<?php echo get_template_directory_uri(); ?>/imgs/down_line.png" height="auto" width="100%" alt="">
		</div>
		<!-- bottom line end -->
	</div>

<?php
	get_footer();
?>