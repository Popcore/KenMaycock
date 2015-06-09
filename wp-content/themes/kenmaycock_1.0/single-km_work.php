<?php get_header(); ?>

<div id="wrapper" class="work row">

	<aside id="slide-menu" class="small-3 medium-3 large-2 columns hide-for-small-only">
		<?php get_sidebar(); ?>
	</aside>

	<div id="main-content" class="small-10 medium-7 large-8 columns">
		<?php 

		if(have_posts()) {
			while(have_posts()) {
				the_post();

				$thumb = get_field('artwork_image');
				$thumb_url = $thumb['sizes']['large'];
				$thumb_title = $thumb['title'];
				$title = get_the_title();
				$year  = get_field('year');
				$info  = get_field('artwork_information');

				echo '<div class="single-artwork small-10 medium-10 large-10 columns">';
				
				echo 		'<div class="img-wrapper small-10 medium-8 large-8 columns">';
				echo 			'<img src="' . $thumb_url . '" title="' . $thumb_title . '" />';
				echo 		'</div>';

				echo 		'<div class="small-2 medium-2 large-2 columns"></div>';

				echo 		'<div class="text-wrapper small-10 medium-7 large-7 columns">';
				echo 			'<h2 id="artwork-title">' . $title . '</h2>';
				echo 			'<p class="year">' . $year . '</p>';
				echo 			'<p class="artwork-info">' . $info . '</p>';
				echo 		'</div>';

				echo 		'<div class="posts-nav small-10 medium-3 large-3 columns">';
				next_post_link( '%link', '<img src="'. TEMPLATEPATHO .'/library/images/icons/prev-arrow.svg"/>', true, '', 'artwork' );
				previous_post_link( '%link', '<img src="'. TEMPLATEPATHO .'/library/images/icons/next-arrow.svg"/>', true, '', 'artwork' );				
				echo '</div>';
				echo 		'</div>';
				echo '</div>';

			}
		}
		?>
	</div>

	<?php get_footer(); ?>

</div>
