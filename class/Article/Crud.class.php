<?php 
/**
* 
*/
class Crud
{
  protected $insert;
  protected $select;
  protected $update;
  protected $delete;

  public function __construct(
    InsertCommand $insertC
    ,SelectCommand $selectC
    ,UpdateCommand $updateC
    ,DeleteCommand $deleteC
  )
  {
    echo 'Iniciando Crud </br></br>';
    $this->insert = $insertC;
    $this->select = $selectC;
    $this->update = $updateC;
    $this->delete = $deleteC;
  }

  public function insert()
  {
    echo '** Crud -> insert </br>';
    return $this->insert->exec();
  }

  public function select()
  {
    echo '** Crud -> select </br>';
    return $this->select->exec();
  }

  public function update()
  {
    echo '** Crud -> update </br>';
    return $this->update->exec();
  }

  public function delete()
  {
    echo '** Crud -> delete </br>';
    return $this->delete->exec();
  }
}

?>