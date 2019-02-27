<?php
$ricerca = $_GET['s'];
get_header();
?>

<section class="main-container">
  <?php get_sidebar(); ?>
  <div class="content">
    <div class="row">
      <div class="card card-md">
        <?php the_post_thumbnail(); ?>
        <?php the_date(); ?>
        <?php  the_category(); ?>

        <?php the_post(); ?>
        <h3> <?php the_title(); ?> </h3>
        <?php
        $post_tags = get_the_tags();
        if ($post_tags) {
          foreach ($post_tags as $tag) {
            //TODO: Eliminato link dal tag, bisogna creare pagina per il tag
            //echo '<a href="'; echo bloginfo(); echo '/tag' . $tag->slug . '" class="badge ' . $tag->slug . '">' . $tag->name . '</a>';
            echo '<a class="badge ' . $tag->slug . '">' . $tag->name . '</a>';
          }
        }
        ?>
        <p> <?php the_content(); ?> </p>
      </div>
    </div>
  </div>
</section>
<?php wp_footer(); ?>
</body>
</html>