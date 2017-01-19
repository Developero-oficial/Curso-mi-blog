<?php 
/**
* 
*/
class Login
{
  private $con;
  public $email;
  public $password;
  
  public function __construct(Conexion $con)
  {
    $this->con = $con;
  }

}

?>