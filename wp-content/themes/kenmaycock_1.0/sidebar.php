<span id="sidebar-logo">Ken Maycock</span>

<ul>
	<li class="menu-items">
		<a class="menu-link" data-link="biography" href="<?php echo WP_SITEURL; ?>/biography/">Biography</a>
	</li>			
	<li class="menu-items">
		<a class="menu-link" data-link="artist-statement" href="<?php echo WP_SITEURL; ?>/artist-statement/">Artist Statement</a>
	</li>
	<li class="menu-items">
		<a class="menu-link work-link" data-link="work" href="<?php echo WP_SITEURL; ?>/works/">Work</a>
			<ul id="work-subnav">
				<li>&#8594; <a class="menu-link" data-link="landscape" href="<?php echo WP_SITEURL; ?>/artwork/landscape">Landscape</a></li>
				<li>&#8594; <a class="menu-link" data-link="still-life" href="<?php echo WP_SITEURL; ?>/artwork/still-life">Still Life</a></li>
				<li>&#8594; <a class="menu-link" data-link="work-on-paper" href="<?php echo WP_SITEURL; ?>/artwork/work-on-paper">Work on Paper</a></li>
			</ul>

			<?php 
			if(is_single()) {
				global $post;
				$terms = get_the_terms($post->id, 'artwork');
				$current_term_slug = $terms[0]->slug;
				// display artwork names
				$args = array(
					'post_type'			 => 'km_work',
					'post_status'		 => 'publish',
					'posts_per_page' => -1,
					'tax_query'			 => array(
						array(
							'taxonomy' => 'artwork',
							'field' 	 => 'slug',
							'terms' 	 => $current_term_slug
						)
					)
				);
				$works_list = new WP_Query($args);
				if($works_list->have_posts()) {
					echo '<ul class="taxonomy-artworks-lists"> –';
					while($works_list->have_posts()) {
						$works_list->the_post();

						$link = get_permalink();
						$title = get_the_title();
						echo '<li>';
						echo 		'<a class="menu-link" href="' . $link . '">';
						echo 				$title;
						echo 		'</a>';
						echo '</li>';
					}
					echo '– </ul>';
					
				}
				wp_reset_query();
			} 
			?>
	</li>
	<li class="menu-items">
		<a class="menu-link" data-link="exhibitions" href="<?php echo WP_SITEURL; ?>/exhibitions/">Exhibition</a>
	</li>
	<li class="menu-items">
		<a class="menu-link" data-link="contact" href="<?php echo WP_SITEURL; ?>/contact/">Contact</a>
	</li>
</ul>