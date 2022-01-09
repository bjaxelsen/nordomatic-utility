<?php
   /*
   Plugin Name: Nordomatic Utility
   description: Helper functionality for Nordomatic site.
   Author: Bjørn Axelsen, &web
   Author URI: https://ogweb.dk
   */

// Handle Swift Performance bug (not really a problem but would would clutter error log).
add_filter('swift_performance_media_host', function($src){
  if (
    !empty($_SERVER['SERVER_NAME']) &&
    !empty($_SERVER['DOCUMENT_ROOT']) &&
    strpos($src, '//' . $_SERVER['SERVER_NAME']) === 0
  ) {
    $src = str_replace('//' . $_SERVER['SERVER_NAME'], $_SERVER['DOCUMENT_ROOT'], $src);
  }
  return $src;
});
