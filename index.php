<?php
$ricerca = $_GET['s'];
get_header();
?>

<section class="main-container">
  <aside class="aside">
    <?php
    //Rimuove categoria 14 dal loop: news
    $categories = get_categories('hide_empty=0&exclude=14');
    foreach ($categories as $category) {

      echo '<ul> <li> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> </li> </ul>';
    }
    ?>
  </aside>

  <div class="content">
    <div class="row">
      <div class="card card-md">
        <!--Rimuove categoria 14 dal loop : news -->
        <?php query_posts('cat=-14'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
<!-- Obbligatorio senno sparisce wp_head(); -->
<?php wp_footer(); ?>
</body>
</html>
