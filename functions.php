<?php
// Css
function my_enqueue_styles() 
{
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap-icons-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css');
  
  if (is_front_page()) {
    // Bootstrap CSS
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
  }

  if (basename(get_page_template()) == 'sato_portfolio.php') {
    wp_enqueue_style('sato_portfolio', get_template_directory_uri() . '/assets/css/sato_portfolio.css', array(), '1.0', 'all');
    wp_enqueue_style('output', get_template_directory_uri() . '/dist/output.css', array(), '1.0', 'all');
  }
}

// Javascript
function my_enqueue_scripts() 
{
  if (is_front_page()) {
    // Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true);
    wp_enqueue_script( 'test', get_template_directory_uri() . '/assets/js/test.js', true );
  }
  if ( is_page_template( 'sato_portfolio.php' ) ) {
      wp_enqueue_script( 'nav_change', get_template_directory_uri() . '/assets/js/nav_change.js', array(), '0.1', true );
  }

} 

add_action('wp_enqueue_scripts', 'my_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

add_filter('show_admin_bar', '__return_false');
