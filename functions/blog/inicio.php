<?php 
function getArticles()
{
  $article = new Article(new Conexion);
  $cliente = new Client($article);
  $res = $cliente->operate('select');
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo "<a href='page.php?id=$row[articulo_id]'><img class='post-img img' src='../img/$row[img]'></a>";
    echo '<div class="blog-header">';
    echo "<a href='page.php?id=$row[articulo_id]'><h1 class=\"blog-title\">$row[titulo]</h1></a>";
    echo "<p class=\"blog-post-meta\">$row[fecha]</td> by <a href=\"#\">$row[autor]</a></p>";
    echo '</div>';
    echo '<hr>';
  }
}

?>