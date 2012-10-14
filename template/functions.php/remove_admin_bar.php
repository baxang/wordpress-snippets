<?php
// http://codex.wordpress.org/Function_Reference/show_admin_bar
// http://codex.wordpress.org/Plugin_API/Filter_Reference/show_admin_bar

add_filter( 'show_admin_bar', '__return_false' );

// OR

add_action('init', 't_remove_admin_bar');
function t_remove_admin_bar() {
  if (is_admin_bar_showing())
    show_admin_bar( false );
}