<?php 
if (!isset($_POST['categorie'])) exit('Hubo un error. No se recibió la categoría :c');

require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2/config/config.php';
spl_autoload_register(function ($class) {
  include "../class/$class/$class.class.php";
});

function insertCategorie(){
  $categorie = new Categorie(new Conexion);
  $categorie->setName($_POST['categorie']);
  return $categorie->insert();
}

echo insertCategorie();
