<?php 
require 'require.php';

function getArticles()
{
  $article = new Article(new Conexion);
  $cliente = new Client($article);
  $res = $cliente->operate('select');
  $tabla = '';
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    $tabla .= '<tr>';
    $tabla .= "<td>$row[articulo_id]</td>";
    $tabla .= "<td>$row[autor]</td>";
    $tabla .= "<td>$row[fecha]</td>";
    $tabla .= "<td>$row[titulo]</td>";
    $tabla .= "<td><a href='edit.php?id=$row[articulo_id]'>Editar</a></td>";
    $tabla .= "<td><a class='delete' href='../functions/article/delete.php?id=$row[articulo_id]'>Eliminar</a></td>";
    $tabla .= '</tr>';
  }
  return $tabla;
}

echo getArticles();
