<?php
add_filter('wp_title', 't_wp_title', 11, 3);
function t_wp_title($title, $sep, $seplocation) {
  if (is_home()) $title = 'Home';

  // get the page number
  if( get_query_var( 'paged' ) ) $page_num = $left_sep. get_query_var( 'paged' ) . $right_sep; // on index
  elseif( get_query_var( 'page' ) ) $page_num = $left_sep . get_query_var( 'page' ) . $right_sep; // on single
  else $page_num = '';

  return $title . " {$sep} " . get_bloginfo('name');
}