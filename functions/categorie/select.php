<?php 
require '../autoload_class.php';

function selectCategorie($categorie_id){
  $categorie = new Categorie(new Conexion);
  $res = $categorie->select();
  while ($row = $res->fetch_array(MYSQLI_ASSOC)){
    if($categorie_id == $row['categoria_id'])
      echo "<option selected value='$row[categoria_id]'>$row[categoria]</option>";
    else
      echo "<option value='$row[categoria_id]'>$row[categoria]</option>";
  }
  }

$id = empty($_POST['categorie_id']) ? '' : $_POST['categorie_id'];
selectCategorie($id);