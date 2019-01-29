<?php 
	$ricerca = $_GET['s'];
	get_header(); 
?>


<section class="main-container">
	<aside class="aside">
		<?php query_posts('compass'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<ul>
				<li> 
					<a href="<?php the_permalink(); ?>">
						<article <?php post_class('lista-titolo'); ?>>
							<p class="title"><?php the_title(); ?></p>
						</article>
					</a>
				</li>
			</ul>
      <?php endwhile; endif; ?>
	</aside>
</section>
</body>
</html>