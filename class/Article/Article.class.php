<?php 
/**
* 
*/
class Article
{
  private $con;
  public $title;
  public $categorie_id;
  public $content;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function setTitle($title)
  {
    $this->title = $this->con->real_escape_string($title);
  }

  public function setCategorieId($categorie_id)
  {
    $this->categorie_id = $this->con->real_escape_string($categorie_id);
  }

  public function setContent($content)
  {
    $this->content = $this->con->real_escape_string($content);
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