<?php 
$ricerca = $_GET['s'];
get_header(); 

?>	

<section class="main-container">
	<?php get_sidebar();?>

	<div class="content">
		<div class="row">
			<div class="card card-md">
				<?php the_post_thumbnail(); ?>
				<?php the_category(); ?>
				<?php the_post(); ?>
				<?php the_title(); ?>
				<?php the_content(); ?>
				<?php the_date(); ?>
				<?php the_tags(); ?>
				<?php echo get_avatar(get_the_author_meta('ID'));?>
				<?php the_author_posts_link(); ?>
			</div>
			<div class="card card-md">

			</div>
		</div>
	</div>
</section>

</body>
</html>


