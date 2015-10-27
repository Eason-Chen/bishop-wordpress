<?php

/*
Template Name: About Template
 */
get_header();
?>

	<div class="wrapper">
		<!-- about content start -->
		<section class="container">
			<!-- left side article start -->
			<article class="sidebar">
				<?php
				$storyPost = new WP_Query('cat=3');

				if ($storyPost->have_posts()) :
					while ($storyPost->have_posts()) : $storyPost->the_post();
				?>
				<div class="gray_bg"><?php the_title(); ?></div>
				<?php
						the_content();
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
				<?php
				$missionPost = new WP_Query('cat=4');

				if ($missionPost->have_posts()) :
					while ($missionPost->have_posts()) : $missionPost->the_post();
				?>
				<div class="gray_bg"><?php the_title(); ?></div>
				<?php
						the_content();
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
				<?php
				$visionPost = new WP_Query('cat=5');

				if ($visionPost->have_posts()) :
					while ($visionPost->have_posts()) : $visionPost->the_post();
				?>
				<div class="gray_bg"><?php the_title(); ?></div>
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
					Our Dentists
				</div>
				<?php
				$staffPost = new WP_Query('cat=6');

				if ($staffPost->have_posts()) :
					while ($staffPost->have_posts()) : $staffPost->the_post();
				?>
				<div class="about_content">
					<div class="about_img"><?php the_post_thumbnail('about-thumbnail'); ?></div>
					<div class="about_p">
						<div class="about_name"><?php the_title(); ?></div>
						<div class="about_title"><?php echo get_post_meta($post->ID, "title_value", true); ?></div>
						<?php the_content(); ?>
					</div>
				</div>
				<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
				?>
			</article>
		</section>
		<!-- about content end -->

		<!-- bottom line start -->
		<div class="bottom_line">
			<img src="<?php echo get_template_directory_uri(); ?>/imgs/down_line.png" height="auto" width="100%" alt="">
		</div>
		<!-- bottom line end -->
	</div>

<?php
	get_footer();
?>