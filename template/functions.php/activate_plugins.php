<?php
global $t_required_plugins;
$t_required_plugins = array(
  'acf' => 'advanced-custom-fields/acf.php',
);

add_action("after_switch_theme", "t_activate_plugins", 10 ,  2);
function t_activate_plugins($old_theme_name, $old_theme = false) {
  global $t_required_plugins;

  foreach ($t_required_plugins as $plugin_name => $plugin_path) {
    if (!t_is_plugin_active($plugin_name)) {
      t_activate_plugin($plugin_name);
    }
  }
}

function t_activate_plugin($plugin_name) {
  global $t_required_plugins;
  if (t_is_plugin_active($plugin_name)) {
    return true;
  }
  require_once(ABSPATH .'/wp-admin/includes/plugin.php');
  return null != activate_plugin($t_required_plugins[$plugin_name]);
}

function t_is_plugin_active($plugin_name) {
  global $t_required_plugins;
  return in_array($t_required_plugins[$plugin_name], get_option('active_plugins'));
}