<?php
add_filter('jpeg_quality', 't_jpeg_quality');
function t_jpeg_quality($arg) {
  return (int) 95;
}