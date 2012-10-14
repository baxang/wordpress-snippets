<?php
// http://codex.wordpress.org/Function_Reference/register_post_type
add_action('init', 't_register_custom_post_type');
function t_get_custom_post_type_params($singular, $plural = null) {
  $singular_camel = ucfirst($singular);
  if (null == $plural) $plural = $singular . 's';
  $plural_camel = ucfirst($plural);
  $plural_lower = strtolower($plural);
  return array(
    'labels' => array(
      'name'               => __( $plural_camel ),
      'singular_name'      => __( $singular_camel ),
      'add_new'            => __( 'Add New' ),
      'add_new_item'       => __( 'Add New ' . $singular_camel ),
      'edit'               => __( 'Edit' ),
      'edit_item'          => __( 'Edit ' . $singular_camel ),
      'new_item'           => __( 'New ' . $singular_camel ),
      'view'               => __( 'View ' . $singular_camel ),
      'view_item'          => __( 'View ' . $singular_camel),
      'search_items'       => __( 'Search ' . $singular_camel),
      'not_found'          => __( 'No ' . $plural_lower . ' found' ),
      'not_found_in_trash' => __( 'No ' . $plural_lower . ' found in Trash' ),
      'parent'             => __( 'Parent ' . $singular_camel ),
    ),
//    'supports'      => array('title'),
    'public'        => false,
    'publicly_queriable' => false,
    'show_in_nav_menus'  => false,
    'exclude_from_search' => true,
    'show_in_menu'  => true,
    'show_ui'       => true,
    'menu_position' => 6,
    'has_archive'   => false,
  );
}
function t_register_custom_post_type() {
  register_post_type( 'feature',
    array(
      'labels' => array(
        'name'               => __( 'Features' ),
        'singular_name'      => __( 'Feature' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Feature' ),
        'edit'               => __( 'Edit' ),
        'edit_item'          => __( 'Edit Feature' ),
        'new_item'           => __( 'New Feature' ),
        'view'               => __( 'View Feature' ),
        'view_item'          => __( 'View Feature' ),
        'search_items'       => __( 'Search Feature' ),
        'not_found'          => __( 'No features found' ),
        'not_found_in_trash' => __( 'No features found in Trash' ),
        'parent'             => __( 'Parent Feature' ),
      ),
      'supports'      => array('title'),
      'public'        => false,
      'publicly_queriable' => false,
      'show_in_nav_menus'  => false,
      'exclude_from_search' => true,
      'show_in_menu'  => true,
      'show_ui'       => true,
      'menu_position' => 6,
      'has_archive'   => false,
    )
  );

  register_post_type( 'story',
    array(
      'labels' => array(
        'name'               => __( 'Stories' ),
        'singular_name'      => __( 'Story' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Story' ),
        'edit'               => __( 'Edit' ),
        'edit_item'          => __( 'Edit Story' ),
        'new_item'           => __( 'New Story' ),
        'view'               => __( 'View Story' ),
        'view_item'          => __( 'View Story' ),
        'search_items'       => __( 'Search Story' ),
        'not_found'          => __( 'No stories found' ),
        'not_found_in_trash' => __( 'No stories found in Trash' ),
        'parent'             => __( 'Parent Story' ),
      ),
      'public'        => true,
      'menu_position' => 6,
      'taxonomies'    => array('category'),
      'has_archive'   => true,
      'rewrite'       => array('slug' => 'stories', 'with_front' => false)
    )
  );
}