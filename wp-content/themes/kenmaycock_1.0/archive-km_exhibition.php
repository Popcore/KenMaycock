<?php get_header(); ?>

<div id="wrapper" class="row">

	<h2>Exhibitions</h2>

	<aside id="slide-menu" class="small-2 large-2 columns hide-for-small-only">
		<?php get_sidebar(); ?>
	</aside>

	<div id="main-content" class="small-10 medium-8 large-8 columns">
			<?php			
				$args = array(
					'post_type'			 => 'km_exhibition',
					'post_status'		 => 'publish',
					'posts_per_page' => 1
				);

				$bio_loop = new WP_Query($args);

				if($bio_loop->have_posts()) {
					while($bio_loop->have_posts()) {
						$bio_loop->the_post();

						$solo_exhibition = get_field('solo-exhibitions');
						$group_exhibition = get_field('group_exhibitions');

						$solo_exhibition_hmtl = '<div id="solo-exhibitions" class="small-10 medium-5 large-5 columns">';
						$solo_exhibition_hmtl .= '<h3>Solo Exhibitions</h3>';
						$solo_exhibition_hmtl .= $solo_exhibition;
						$solo_exhibition_hmtl .= '</div>';
						echo $solo_exhibition_hmtl;

						$group_exhibition_html = '<div id="group-exhibitions" class="small-10 medium-5 large-5 columns">';
						$group_exhibition_html .= '<h3>Group Exhibitions</h3>';
						$group_exhibition_html .= $group_exhibition;
						$group_exhibition_html .= '</div>';
						echo $group_exhibition_html;
					}
				}

				wp_reset_query();

			?>
	</div>

	<?php get_footer(); ?>
</div>

