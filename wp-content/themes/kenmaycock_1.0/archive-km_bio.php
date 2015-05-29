<?php get_header(); ?>

<div id="wrapper" class="row">

	<aside id="slide-menu" class="small-2 large-2 columns hide-for-small-only">
		<?php get_sidebar(); ?>
	</aside>

	<div id="main-content" class="small-10 medium-8 large-8 columns">
			<?php			
				$args = array(
					'post_type'			=> 'km_bio',
					'post_status'		=> 'publish',
					'posts_per_page'	=> -1
				);

				$bio_loop = new WP_Query($args);

				if($bio_loop->have_posts()) {
					while($bio_loop->have_posts()) {
						$bio_loop->the_post();

						$bio_text = get_field('biography');

						echo '<p>' . $bio_text . '</p>';
					}
				}

				wp_reset_query();

			?>
	</div>

	<?php get_footer(); ?>
</div>

