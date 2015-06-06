<?php
/* Template Name: Lanscape */
?>


<?php get_header(); ?>

<div id="wrapper" class="row">

	<h2>Landscape</h2>

	<aside id="slide-menu" class="small-2 large-2 columns hide-for-small-only">
		<?php get_sidebar(); ?>
	</aside>
	
	<div id="main-content" class="small-10 medium-8 large-8 columns">
		<?php			
				$args = array(
					'post_type'			 => 'km_work',
					'post_status'		 => 'publish',
					'posts_per_page' => -1,
					'tax_query'			 => array(
						array(
							'taxonomy' => 'artwork',
							'field' 	 => 'slug',
							'terms' 	 => 'landscape'
						)
					)
				);

				$land_loop = new WP_Query($args);

				if($land_loop->have_posts()) {
					while($land_loop->have_posts()) {
						$land_loop->the_post();

						$artwork_title 	 = get_the_title();
						$artwork_year  	 = get_field('year');
						$artwork_img 	 	 = get_field('artwork_image');
						$artwork_img_url = $artwork_img['sizes']['medium'];
						$artwork_url 		 = get_permalink();

						echo '<div class="artwork small-5 medium-5 large-5 columns">';
						echo 		'<img src="' . $artwork_img_url . '" />';
						echo 		'<div class="info-container">';
						echo 			'<div class="overlay"></div>';
						echo 			'<h3 class="artwork-title">' . $artwork_title . '</h3>';
						echo 			'<p class="artwork-year">' . $artwork_year . '</p>';
						echo 		'</div>';
						echo 	'</div>';
					}
				}

				wp_reset_query();

			?>
	</div>

	<?php get_footer(); ?>
</div>

