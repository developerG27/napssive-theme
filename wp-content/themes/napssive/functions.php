<?php
/* Stili Css */
//Al posto di rand() aggiungerò la versione
wp_enqueue_style( 'style', get_stylesheet_uri(), rand() ); 
wp_enqueue_scripts( 'script'); 

//Rimuove la version scritta di Wordpress
function wpb_remove_version(){
  return '';
}
add_filter('the_generator', 'wpb_remove_version');

//Aggiunge jQuery
wp_enqueue_script('jquery');

//Carico lo script
//il nome, src, array(), la versione, true= nel footer, false= nel header
wp_enqueue_script('script',get_template_directory_uri().'/script.js',array(),rand(),false);

//Aggiungo le post thumbnails
add_theme_support('post-thumbnails');   

//menu
register_nav_menus( array(
  'primary' => esc_html__('primary'),
));

// Cambio del nome del footer nel backend
function remove_footer_admin () {
  echo 'Sviluppato da <a href="http://www.wordpress.org" target="_blank">DeveloperG27</a>';
  }
  add_filter('admin_footer_text', 'remove_footer_admin');

//Manipolare RSS Footer
function wpbeginner_postrss($content) {
  if(is_feed()){
  $content = 'This post was written by Syed Balkhi '.$content.'Check out WPBeginner';
  }
  return $content;
  }
  add_filter('the_excerpt_rss', 'wpbeginner_postrss');
  add_filter('the_content', 'wpbeginner_postrss');

//Messaggio quando un utente inserisce username e password sbagliati
function no_wordpress_errors(){
  return 'Hai sbagliato!!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

//Infinite scroll
add_theme_support( 'infinite-scroll', array(
  'container' => 'content',
  'footer' => 'page',
) );

//wp_head()
add_action('get_header', 'my_filter_head');
function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 

//Code gute
function my_custom_languages( $languages ) {
  $languages[] = array('slug' => 'rust', 'mode' => 'rust', 'label' => 'Rust') ;

  return $languages;
}
add_filter( 'advanced_gutenberg_blocks_code_languages', 'my_custom_languages' );