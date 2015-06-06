<ul>
	<li class="menu-items">
		<a href="<?php echo WP_SITEURL; ?>/biography/">Biography</a>
	</li>			
	<li class="menu-items">
		<a href="<?php echo WP_SITEURL; ?>/artist-statement/">Artist Statement</a>
	</li>
	<li class="menu-items">
		<a href="<?php echo WP_SITEURL; ?>/works/">Work</a>
		<?php if(is_tax( 'artwork' ) || get_post_type() == 'km_work') { ?>
				<ul>
					<li><a href="<?php echo WP_SITEURL; ?>/artwork/landscape">Landscape</a></li>
					<li><a href="<?php echo WP_SITEURL; ?>/artwork/still-life">Still Life</a></li>
					<li><a href="<?php echo WP_SITEURL; ?>/artwork/work-on-paper">Work on Paper</a></li>
				</ul>
		<?php } ?>
	</li>
	<li class="menu-items">
		<a href="<?php echo WP_SITEURL; ?>/exhibitions/">Exhibition</a>
	</li>
	<li class="menu-items">
		<a href="<?php echo WP_SITEURL; ?>/contact/">Contact</a>
	</li>
</ul>