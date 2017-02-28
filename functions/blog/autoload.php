<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2/config/config.php';
spl_autoload_register(function ($class) {
  if($class === 'Conexion' || $class === 'Session')
    return include "../class/$class/$class.class.php";
  include "../class/Article/$class.class.php";
});
