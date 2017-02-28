<?php 
require '../autoload_class.php';
require '../validate_session.php';
require '../files/files.php';

$img = '';

if(!empty($_FILES['user-file']['tmp_name'])){
  if (!validar($_FILES)){
    header('location: ../../dashboard/edit.php');
    exit();
  }
  $img = upload($_FILES);
}

$article = new Article(new Conexion);
$article->setTitle($_POST['title']);
$article->setAuthor($session->getValue('usuario'));
$article->setCategorieId($_POST['categorie_id']);
$article->setContent($_POST['content']);
$article->setImg($img);
$article->setArticleId($_POST['id_article']);

$cliente = new Client($article);

if ($cliente->operate('update') > 0){
  header('location: ../../dashboard/dashboard.php?message=Se insertó correctamente');
  exit();
}

header('location: ../../dashboard/dashboard.php?message=Hubo un error al guardar el articulo :(');
?>