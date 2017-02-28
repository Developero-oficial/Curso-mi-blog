<?php 
require '../autoload_class.php';
require '../validate_session.php';

if(empty($_GET['id'])) exit('No se recibió el id');
if(!is_numeric($_GET['id']) or $_GET['id'] <= 0) exit('Hubo un error');

$article = new Article(new Conexion);
$article->setArticleId($_GET['id']);
$cliente = new Client($article);

if ($cliente->operate('delete')){
  header('location: ../../dashboard/dashboard.php?message=Se eliminó correctamente');
  exit();
}
header('location: ../../dashboard/dashboard.php?message=Hubo un error al guardar el articulo :(');
