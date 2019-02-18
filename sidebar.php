<aside class="aside">
  <ul>
    <?php
    global $post;
    $category = get_the_category($post->ID);
    $category = $category[0]->cat_ID;
    $myposts = get_posts(array('numberposts' => 15, 'offset' => 0, 'category__in' => array($category), 'post_status' => 'publish', 'order' => 'ASC'));
    foreach ($myposts as $post) :
      setup_postdata($post);
      ?>

      <li>
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?>
        </a>
      </li>

    <?php endforeach; ?>
    <?php wp_reset_query(); ?>

  </ul>
</aside>