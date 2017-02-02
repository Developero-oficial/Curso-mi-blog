<?php 
/**
* 
*/
class Client
{
  protected $article;
  protected $crud;
  protected $insert;
  protected $select;
  protected $update;
  protected $delete;
  
  public function __construct(Article $article)
  {
    echo 'Iniciando Cliente </br>';
    $this->article = $article;
    $this->insert = new InsertCommand($this->article);
    $this->update = new UpdateCommand($this->article);
    $this->select = new SelectCommand($this->article);
    $this->delete = new DeleteCommand($this->article);
    $this->crud = new Crud($this->insert, $this->select, $this->update, $this->delete);
  }

  public function operate($action)
  {
    switch ($action) {
      case 'insert':
        echo '*** Petición insert </br>'; 
        return $this->crud->insert();
        break;
      case 'update':
        echo '*** Petición update </br>';
        return $this->crud->update();
        break;
      case 'delete':
        echo '*** Petición delete </br>';
        return $this->crud->delete();
        break;
      case 'select':
        echo '*** Petición select </br>';
        return $this->crud->select();
        break;
      default:
        throw new Exception("Error Processing Request", 1);
        break;
    }
  }
}
 ?>