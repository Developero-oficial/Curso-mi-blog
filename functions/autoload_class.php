<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2/config/config.php';
spl_autoload_register(function ($class) {
  if(in_array($class, NORMAL_CLASS))
    return require DIR . "/curso-blog-2/class/$class/$class.class.php";
  elseif (strpos($class, 'Message') !== false)
    require DIR . "/curso-blog-2/class/Message/$class.class.php";
  else
    require DIR . "/curso-blog-2/class/Article/$class.class.php";
});
