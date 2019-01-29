<aside class="aside">
	<?php query_posts('compass'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<ul>
			<li> 
				<a href="<?php the_permalink(); ?>">
				    <?php the_title(); ?>
				</a>
			</li>
		</ul>
    <?php endwhile; endif; ?>
</aside>