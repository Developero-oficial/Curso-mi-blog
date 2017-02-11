<?php 
/**
* 
*/
class Categorie
{
  private $con;
  public $name;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function setName($name)
  {
    $this->name = $con->real_escape_string($name);
  }

  public function insert()
  {
    $query = "INSERT INTO `categoria`(`categoria`) VALUES ('$this->name')";
    $res = $con->query($query);
    if ($con->num_rows > 0)
      return true;
    return false;
  }
}
?>