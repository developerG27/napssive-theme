<?php 
$ricerca = $_GET['s'];
get_header(); 

?>
	<main class="main index">
		<div class="container">
        
         <?php query_posts('compass'); ?>
         <?php the_tags(); ?>
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
         <?php endwhile; endif; ?>

         <h1>Questa è solo la pagina di compass</h1>
            
         <div>
         <h2>Questa è la lista che si troverà in aside</h2>
         <?php query_posts('compass'); ?>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <a href="<?php the_permalink(); ?>">
            <article <?php post_class('lista-titolo'); ?>>
               <p class="title"><?php the_title(); ?></p>
            </article>
			</a>
         <?php endwhile; endif; ?>
         </div>  
      </div>
   </main>
<?php get_footer() ?>
</body>
</html>