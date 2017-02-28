<?php 
require '../autoload_class.php';
require '../validate_session.php';

function getArticles()
{
  $article = new Article(new Conexion);
  $cliente = new Client($article);
  $res = $cliente->operate('select');
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo '<tr>';
    echo "<td>$row[articulo_id]</td>";
    echo "<td>$row[autor]</td>";
    echo "<td>$row[fecha]</td>";
    echo "<td>$row[titulo]</td>";
    echo "<td><a href='edit.php?id=$row[articulo_id]'>Editar</a></td>";
    echo "<td><a class='delete' href='../functions/article/delete.php?id=$row[articulo_id]'>Eliminar</a></td>";
    echo  '</tr>';
  }
}

getArticles();
