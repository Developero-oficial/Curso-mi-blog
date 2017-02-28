<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2/config/config.php';
spl_autoload_register(function ($class) {
  if($class == 'Session' or $class == 'Conexion' or $class == 'Categorie')
    return require "../../class/$class/$class.class.php";
  require "../../class/Article/$class.class.php";
});
