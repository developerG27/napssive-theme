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
					<p><?php the_content() ?>
				</div>
			</div>
		</main>
	</div>
</body>

<?php get_footer()?>

</html>


