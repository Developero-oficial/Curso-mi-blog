<?php 
require 'require.php';
require 'files.php';

if (! validar($_FILES)) {
  header('location: ../../dashboard/post.php');
  exit();
} 

$img = upload($_FILES);

$article = new Article(new Conexion);
$article->setTitle($_POST['title']);
$article->setAuthor($session->getValue('usuario'));
$article->setCategorieId($_POST['categorie_id']);
$article->setContent($_POST['content']);
$article->setImg($img);

$cliente = new Client($article);

if ($cliente->operate('insert')){
  header('location: ../../dashboard/post.php?message=Se insertó correctamente');
  exit();
}

header('location: ../../dashboard/post.php?message=Hubo un error al guardar el articulo :(');
?>