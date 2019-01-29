<?php 
$ricerca = $_GET['s'];
get_header(); 

?>	
	<div class="single">
		<main class="main">
			<div class="container single">
				<div class="article">
					<?php the_post_thumbnail(); ?>
					<?php the_category() ?>
					<p><?php the_post() ?> </p>
					<p class="title"><?php the_title() ?></p>
					<p><?php the_content() ?> </p>
					<p><?php the_date() ?> </p>
					<p><?php the_tags() ?> </p>
					<?php echo get_avatar( get_the_author_meta( 'ID' )); the_author_posts_link() ?> 
				</div>
			</div>
		</main>
	</div>
</body>

<?php get_footer()?>

</html>


