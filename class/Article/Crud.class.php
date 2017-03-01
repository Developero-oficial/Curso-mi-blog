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
    $this->insert = $insertC;
    $this->select = $selectC;
    $this->update = $updateC;
    $this->delete = $deleteC;
  }

  public function insert(): int
  {
    return $this->insert->exec();
  }

  public function select(): mysqli_result
  {
    return $this->select->exec();
  }

  public function update(): int
  {
    return $this->update->exec();
  }

  public function delete(): int
  {
    return $this->delete->exec();
  }
}
