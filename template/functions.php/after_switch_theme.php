<?php
add_action("after_switch_theme", "t_after_switch_theme", 10 ,  2);
function t_after_switch_theme($old_theme_name, $old_theme = false) {
  // Update options, activate plugins etc.
}