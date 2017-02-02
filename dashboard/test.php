<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2/config/config.php';
spl_autoload_register(function ($class) {
  if($class === 'Conexion')
    return include "../class/$class/$class.class.php";
  include "../class/Article/$class.class.php";
});

$article = new Article(new Conexion);
$cliente = new Client($article);

writeln($cliente->operate('insert'));
writeln($cliente->operate('update'));
writeln($cliente->operate('select'));
writeln($cliente->operate('delete'));

function writeln($value)
{
  print("$value </br></br>");
}