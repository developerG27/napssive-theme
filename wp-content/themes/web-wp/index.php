<?php 
$ricerca = $_GET['s'];
get_header(); 

?>
	<main class="main index">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>">
					<article <?php post_class('article'); ?>>
						<?php if( has_post_thumbnail()) { the_post_thumbnail();} ?>
                  <p class="title"><?php the_title(); ?></p>
                  <footer class="footer">
                     <?php echo get_avatar( get_the_author_meta( 'ID' )); the_author_posts_link() ?> 
                  </footer>
					</article>
				</a>
         
         <?php endwhile; else: ?>
			<div class="article">
				<p>Non ho trovato nulla</p>
			</div>
         <?php endif; ?>
      </div>
   </main>
<?php get_footer() ?>
</body>
</html>