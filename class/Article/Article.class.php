<?php 
/**
* 
*/
class Article
{
  private $con;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function select()
  {
    return 'select';
  }

  public function insert()
  {
    return 'insert';
  }

  public function update()
  {
    return 'update';
  }

  public function delete()
  {
    return 'delete';
  }  
}

?>