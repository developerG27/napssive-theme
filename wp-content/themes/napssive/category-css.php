<?php 
	$ricerca = $_GET['s'];
	get_header(); 
?>
<section class="main-container">
<aside class="aside">
	<?php query_posts('category_name=css');?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<ul>
			<li> 
				<a href="<?php the_permalink(); ?>">
				    <?php the_title(); ?>
				</a>
			</li>
		</ul>
    <?php endwhile; endif; ?>
	

    <?php wp_reset_query(); ?>
</aside>

	<div class="content">
		<div class="row">
			<div class="card card-md">

			</div>
		</div>
	</div>
</section>

</body>
</html>