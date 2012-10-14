<?php
add_action('after_switch_theme', 't_set_options');
function t_set_options() {
  // http://codex.wordpress.org/Option_Reference
  $options = array(
    'blogname'            => 'Your website name',
    'blogdescription'     => '',
    'show_on_front'       => 'page',
    'gmt_offset'          => '9',
    'permalink_structure' => '/%postname%/',
    'category_base'       => '',
    'tag_base'            => '',
  );
  foreach ($options as $name => $value) {
    update_option($name, $value);
  }
}