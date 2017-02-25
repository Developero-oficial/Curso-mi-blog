<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2/config/config.php';
spl_autoload_register(function ($class) {
  include "../class/$class/$class.class.php";
});

function selectCategorie($categorie_id){
  $categorie = new Categorie(new Conexion);
  $categorie->setId($categorie_id);
  return $categorie->selectToArray();
}

echo selectCategorie($_POST['categorie_id']);
?>