<?php
$ricerca = $_GET['s'];
get_header();
?>

<section class="main-container">
  <aside class="aside">
  </aside>

  <div class="content">
    <div class="row">
      <div class="card card-md news">
        <?php get_search_form(); ?>

        <div class="box-article">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


          <a href="<?php the_permalink(); ?>">
            <article class="article">
              <?php the_post_thumbnail(); ?>
              <p class="title"> <?php the_title(); ?></p>
            </article>
          </a>

        <?php endwhile; else: ?>
        </div>
          0 risultati
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

</body>
</html>