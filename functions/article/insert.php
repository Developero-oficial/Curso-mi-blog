<?php 
require 'require.php';

$article = new Article(new Conexion);
$article->setTitle($_POST['title']);
$article->setCategorieId($_POST['categorie_id']);
$article->setContent($_POST['content']);
$cliente = new Client($article);


?>