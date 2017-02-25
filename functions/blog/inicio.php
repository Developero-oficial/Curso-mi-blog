<?php 
require 'autoload.php';

function getArticles()
{
  $article = new Article(new Conexion);
  $cliente = new Client($article);
  $res = $cliente->operate('select');
  $posts = '';
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    $posts .= '<div class="blog-header">';
    $posts .= "<h3 class=\"blog-title\">$row[titulo]</h3>";
    $posts .= "<p class=\"blog-post-meta\">$row[fecha]</td> by <a href=\"#\">$row[autor]</a></p>";
    $posts .= '</div>';
  }
  return $posts;
}

?>