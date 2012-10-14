<?php
add_action("after_switch_theme", "t_register_menu", 10 ,  2);
function t_register_menu() {
  $menu_name = 'Primary';
  $menu_exists = is_nav_menu($menu_name, array('slug' => 'primary'));
  if ( !$menu_exists ) {
    $menu_id = wp_create_nav_menu($menu_name);
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title'   => __('home'),
        'menu-item-url'     => '/',
        'menu-item-status'  => 'publish')
    );
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title'   => __('work'),
        'menu-item-url'     => '/work',
        'menu-item-status'  => 'publish')
    );
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title'   => __('blog'),
        'menu-item-url'     => '/blog',
        'menu-item-status'  => 'publish')
    );
    wp_update_nav_menu_item($menu_id, 0, array(
        'menu-item-title'   => __('about'),
        'menu-item-url'     => '/about',
        'menu-item-status'  => 'publish')
    );
  }
}