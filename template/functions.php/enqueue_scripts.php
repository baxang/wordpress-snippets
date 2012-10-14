<?php
add_action('wp_enqueue_scripts', 't_enqueue_scripts');
function t_qneueue_scripts() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('extra', get_stylesheet_directory_uri() . '/css/extra.css');

  wp_enqueue_script('jquery');
  wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), false, true);
}