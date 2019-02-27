<?php
//Al posto di rand() aggiungerò la versione
wp_enqueue_style('style', get_stylesheet_uri(), rand());

//carico jquery
add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
  wp_enqueue_script(
    'your-script',
    get_template_directory_uri() . '/script/script.js',
    array('jquery')
  );
}

//Aggiungo post-thumbnail
add_theme_support('post-thumbnails');

//Menu
register_nav_menus(array(
  'primary' => esc_html__('primary'),
));

// Cambio del nome del footer nel backend
function remove_footer_admin(){
  echo 'Sviluppato da <a href="http://www.wordpress.org" target="_blank">DeveloperG27</a>';
}

//Abitalita i blocchi avanzati di gutemberg
function my_custom_languages($languages){
  $languages[] = array('slug' => 'rust', 'mode' => 'rust', 'label' => 'Rust');
  return $languages;
}
add_filter('advanced_gutenberg_blocks_code_languages', 'my_custom_languages');

//costringe ad usare il certificato ssl
define('FORCE_SSL_ADMIN', true);