<?php get_header(); ?>

<div id="wrapper" class="row">

	<aside id="slide-menu" class="small-2 large-2 columns hide-for-small-only">
		<?php get_sidebar(); ?>
	</aside>

	<div id="main-content" class="small-10 medium-8 large-8 columns">
		<?php 
		$args = array(
			'post_type'			=> 'km_work',
			'post_status'		=> 'publish',
			'posts_per_page'	=> -1
		);

		$work_loop = new WP_Query($args);
		if($work_loop->have_posts()) {
			while($work_loop->have_posts()) {
				$work_loop->the_post();

				$thumb = get_field('artwork_image');
				$thumb_url = $thumb['sizes']['medium'];
				$thumb_title = $thumb['title'];
				$title = get_the_title();
				$info  = get_field('artwork_information');

				//print_r($thumb_url);

				echo '<div class="artwork small-5 medium-5 large-5 columns">';
				echo '<img src="' . $thumb_url . '" title="' . $thumb_title . '" />';
				echo '</div>';
			}
		}
		wp_reset_query();
		?>
	</div>

	<?php get_footer(); ?>

</div>
