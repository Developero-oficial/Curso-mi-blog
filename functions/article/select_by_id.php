<?php 
require 'require.php';

var_dump($_POST);
function getArticles()
{
  $article = new Article(new Conexion);
  $cliente = new Client($article);
  // $res = $cliente->operate('select');
}

echo getArticles();
