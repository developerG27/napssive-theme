<?php
$ricerca = $_GET['s'];
get_header();
?>

<section class="main-container">
  <aside class="aside">
    <?php
    $categories = get_categories();

    foreach ($categories as $category) {
      echo '<ul> <li> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> </li> </ul>';
    }
    ?>
  </aside>

  <div class="content">
    <div class="row">
      <div class="card card-md">
        <?php get_search_form(); ?>
        <p>Hai cercato <?php echo $ricerca ?></p>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

        <?php endwhile; else: ?>

          0 risultati

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

</body>
</html>