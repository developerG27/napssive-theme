<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head() ?>
  <!-- Material Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <?php wp_enqueue_script('NomeScript', '/script.js', false, '2.0', false); ?>

  <title>
    <?php
    if (is_home()) {
      echo get_bloginfo('');
    } else if (is_single()) {
      echo the_title();
    } else {
      echo get_bloginfo('');
    }
    ?>
  </title>
</head>
<body class="theme">
<header class="header">
  <div class="container">
    <div class="brand_search">
      <a href="<?php bloginfo('url'); ?>" class="brand"><p> Compass </p></a>
    </div>

    <div class="box-menu">
      <?php
        wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_id' => 'primary',
        ) );

      ?>
      <i id="app-menu" class="material-icons">
        apps
      </i>
    </div>
    
    <div id="secondary-menu" class="secondary-menu none">
      <ul>
        <li>Primo</li>
        <li>Secondo</li>
        <li>Terzo</li>
        <li>Quarto</li>
        <li>Quinto</li>
      </ul>
    </div>
  </div>
</header>