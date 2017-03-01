<?php 
/**
* 
*/
class Article
{
  public $con;
  public $title;
  public $author;
  public $categorie_id;
  public $content;
  public $img;
  public $article_id;

  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

  public function setTitle(string $title)
  {
    $this->title = $this->con->real_escape_string($title);
    $this->title = ucwords($this->title);
  }

  public function setAuthor(string $author)
  {
    $this->author = $this->con->real_escape_string($author);
  }

  public function setCategorieId(int $categorie_id)
  {
    $this->categorie_id = $this->con->real_escape_string($categorie_id);
  }

  public function setContent(string $content)
  {
    $this->content = $this->con->real_escape_string($content);
  }

  public function setImg(string $img)
  {
    $this->img = $this->con->real_escape_string($img);
  }

  public function setArticleId(int $article_id)
  {
    $this->article_id = $this->con->real_escape_string($article_id);
  }

  public function select(): mysqli_result
  {
    $query = "SELECT * FROM `articulo`";
    if($this->article_id){
      $query .= "WHERE `articulo_id` = $this->article_id";
    }
    return $this->con->query($query);
  }

  public function insert(): int
  {
    $query = "INSERT INTO `articulo`(`categoria_id`, `autor`, `titulo`, `contenido`, `fecha`, `img`) VALUES ($this->categorie_id, '$this->author', '$this->title', '$this->content', '". date('Y-m-d') . "', '$this->img')";
    $this->con->query($query);
    return $this->con->affected_rows;
  }

  public function update(): int
  {
    if ($this->img) {
      $query = "UPDATE `articulo` SET `categoria_id`= $this->categorie_id, `titulo`= '$this->title', `contenido`= '$this->content', `img`='$this->img' WHERE `articulo_id` = $this->article_id";
    } else{
      $query = "UPDATE `articulo` SET `categoria_id`= $this->categorie_id, `titulo`= '$this->title', `contenido`= '$this->content' WHERE `articulo_id` = $this->article_id";
    }
    $this->con->query($query);
    return $this->con->affected_rows;
  }

  public function delete(): int
  {
    $query = "DELETE FROM `articulo` WHERE `articulo_id` = $this->article_id";
    $this->con->query($query);
    return $this->con->affected_rows;
  }
}
