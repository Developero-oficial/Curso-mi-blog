<?php 
if (!isset($_POST['categorie'])) exit('Hubo un error. No se recibió la categoría :c');

require '../autoload_class.php';

function insertCategorie(){
  $categorie = new Categorie(new Conexion);
  $categorie->setName($_POST['categorie']);
  if ($categorie->insert())
    return 'Se insertó la categoría correctamente';
  return 'Hubo un error al insertar la categoría D:';
}

echo insertCategorie();
