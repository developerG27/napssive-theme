<?php 
	$ricerca = $_GET['s'];
	get_header(); 
?>


<section class="main-container">
	<?php get_sidebar();?>

	<div class="content">
		<div class="row">
			<div class="card card-md">
        <p>Hai cercato <?php echo $ricerca ?></p>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <a href="<?php the_permalink(); ?>">
          <p><?php the_title(); ?></p>
        </a>

        <?php endwhile; else: ?>

          0 risultati

        <?php endif; ?>
			</div>
		</div>
	</div>
</section>

</body>
</html>