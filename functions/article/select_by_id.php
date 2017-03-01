<?php 
require '../autoload_class.php';
require '../validate_session.php';

function validateId($id)
{
  return is_numeric($id) and $id > 0;
}

function getArticle(int $id)
{
  $article = new Article(new Conexion);
  $article->setArticleId($id);
  $cliente = new Client($article);
  $res = $cliente->operate('select');
  $result_array = $res->fetch_array(MYSQLI_ASSOC);
  return json_encode($result_array);
}

$id = $_POST['id'] ?? '';
if(!validateId($id)) exit(false);
echo getArticle($id);
