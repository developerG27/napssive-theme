<?php 
$ricerca = $_GET['s'];
get_header(); 

?>	

<section class="main-container">
	<?php get_sidebar();?>

	<div class="content">
		<div class="row">
			<div class="card card-md">
				<?php //the_post_thumbnail(); ?>
				<p> <?php //the_date(); ?> </p>
				<?php  // the_category(); ?>

				<?php the_post(); ?>				
				<h3> <?php the_title(); ?> </h3>
				<?php
					$post_tags = get_the_tags();
					if ($post_tags) {
						foreach($post_tags as $tag) {
							echo '<a href="'; echo bloginfo();
							echo '/?tag=' . $tag->slug . '" class="badge ' . $tag->slug . '">' . $tag->name . '</a>';
						}
					}
				?>
				<p> <?php the_content(); ?> </p>
				<?php echo get_avatar(get_the_author_meta('ID'));?>
				<?php the_author_posts_link(); ?>
			</div>
		</div>
	</div>
</section>

</body>
</html>