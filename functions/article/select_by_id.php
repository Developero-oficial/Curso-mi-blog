<?php 
require 'require.php';

function validateId($id)
{
  if(!is_numeric($id) || $id <= 0){
    return false;
  }
  return true;
}

function getArticles($id)
{
  $article = new Article(new Conexion);
  $article->setArticleId($id);
  $cliente = new Client($article);
  $res = $cliente->operate('select');
  $result_array = $res->fetch_array(MYSQLI_ASSOC);
  return json_encode($result_array);
}

$id = $_POST['id'] ?? '';
if(!validateId($id)) exit('Id inválido');
echo getArticles($id);
