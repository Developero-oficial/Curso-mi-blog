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

  public function __construct(InsertCommand $insertC, SelectCommand $selectC, UpdateCommand $updateC, DeleteCommand $deleteC)
  {
    $this->insert = $insertC;
    $this->select = $selectC;
    $this->update = $updateC;
    $this->delete = $deleteC;
  }

  public function insert()
  {
    $this->insert->exec();
  }

  public function select()
  {
    $this->select->exec();
  }

  public function update()
  {
    $this->update->exec();
  }

  public function delete()
  {
    $this->delete->exec();
  }
}

?>