<?php
  require_once('wp-bootstrap-navwalker.php');
  
  function wpB_theme_setup(){
        register_nav_menus(array(
                 'primary' => __('Primary Menu'),
                 ));
        
      }
      
   add_action(init,'wpB_theme_setup');
   
   function skematik_jquery_js(){
    wp_enqueue_script('jquery');
}
   add_action( 'wp_enqueue_scripts', 'skematik_jquery_js' );
   
  function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js','jquery');
    wp_enqueue_script('jquery.bootstrap.min');
  }
  add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style('bootstrap.min',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap.min' );
    wp_register_style('main',get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'main');
    
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
   
   
 
?>