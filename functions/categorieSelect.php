<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2/config/config.php';
spl_autoload_register(function ($class) {
  include "../class/$class/$class.class.php";
});

function selectCategorie(){
  $categorie = new Categorie(new Conexion);
  return $categorie->selectToArray();
}

echo selectCategorie();
?>