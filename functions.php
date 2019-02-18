<?php
//Al posto di rand() aggiungerò la versione
wp_enqueue_style('style', get_stylesheet_uri(), rand());

//Carico lo script
//il nome, src, array(), la versione, true= nel footer, false= nel header
wp_enqueue_script('script', get_template_directory_uri() . '/script/script.js', array(), rand(), false);

//Aggiunge le post thumbnails (Immagini)
add_theme_support('post-thumbnails');

//Menu
register_nav_menus(array(
  'primary' => esc_html__('primary'),
));

// Cambio del nome del footer nel backend
function remove_footer_admin()
{
  echo 'Sviluppato da <a href="http://www.wordpress.org" target="_blank">DeveloperG27</a>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

//Messaggio quando un utente inserisce username e password sbagliati
function no_wordpress_errors()
{
  return 'Hai sbagliato!!';
}

add_filter('login_errors', 'no_wordpress_errors');

//rimuove la barra superiore wp_head()
add_action('get_header', 'my_filter_head');
function my_filter_head()
{
  remove_action('wp_head', '_admin_bar_bump_cb');
}

//Abitalita i blocchi avanzati di gutemberg
function my_custom_languages($languages)
{
  $languages[] = array('slug' => 'rust', 'mode' => 'rust', 'label' => 'Rust');
  return $languages;
}

add_filter('advanced_gutenberg_blocks_code_languages', 'my_custom_languages');

//costringe ad usare il certificato ssl
define('FORCE_SSL_ADMIN', true);

// SOLO IN SVILUPPO, ELIMINARE IN PRODUZIONE-------------------------------------------------------------------
// Elimina la versione di wp dal url: maggior sicurezza
function remove_src_version($url)
{
  $url = preg_replace('/([?&])' . 'ver' . '=[^&]+(&|$)/', '$1', $url);
  if (preg_match("/\?$/", $url) || preg_match("/\&$/", $url))
    return substr($url, 0, -1);
  else
    return $url;
}