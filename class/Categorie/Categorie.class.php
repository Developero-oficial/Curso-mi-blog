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
    $this->name = $this->con->real_escape_string($name);
  }

  public function insert()
  {
    $query = "INSERT INTO `categoria`(`categoria`) VALUES ('$this->name')";
    if($this->con->query($query)) 
      return 'Se insertó la categoría';
    return 'Hubo un error';
  }
}
?>