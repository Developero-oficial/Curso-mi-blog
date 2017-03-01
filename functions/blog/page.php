<?php 
function validateId($id): bool
{
  return is_numeric($id) && $id >= 0;
}

function getArticle($id)
{
  $article = new Article(new Conexion);
  $article->setArticleId($id);
  $cliente = new Client($article);
  $res = $cliente->operate('select');
  $row = $res->fetch_array(MYSQLI_ASSOC);
  echo '<div class="blog-header">';
  echo "<a href='page.php?id=$row[articulo_id]'><img class='post-img img' src='../img/$row[img]'></a>";
  echo "<h1 class=\"blog-title\">$row[titulo]</h1>";
  echo "<p class=\"blog-post-meta\">$row[fecha]</td> by <a href=\"#\">$row[autor]</a></p>";
  echo '<hr>';
  echo '<div class="page-content">';
  echo $row['contenido'];
  echo '</div>';
}

function getId()
{
  $id = $_GET['id'] ?? '';
  if(!validateId($id)) exit('Id inválido');
  return $id;
}

