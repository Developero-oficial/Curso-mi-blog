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
    $this->name = ucwords($this->name);
  }

  public function insert()
  {
    $query = "INSERT INTO `categoria`(`categoria`) VALUES ('$this->name')";
    if($this->con->query($query)) 
      return 'Se insertó la categoría';
    return 'Hubo un error';
  }

  public function selectToArray()
  {
    $query = "SELECT * FROM `categoria`";
    $res = $this->con->query($query);
    $categorias = '<option value="Ninguna">Elige una categoría</option>';
    while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
      $categorias .= "<option value='$row[categoria_id]'>$row[categoria]</option>";
    }
    return $categorias;
  }
}
?>