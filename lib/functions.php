<?php
function detect_city() {
  $entries = split(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
  $ip = $entries[0];
  $meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
  if($meta['geoplugin_city'] != '')
  {
    return $meta['geoplugin_city'];
  }else
  {
    return "Del Mundo.";
  }
}
?>