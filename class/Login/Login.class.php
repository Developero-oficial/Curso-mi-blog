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

  public function setEmail (string $email) {
    $this->email = $email;
  }

  public function setPassword (string $password) {
    $this->password = $password;
  }

  public function signIn () {
    $query = "SELECT * FROM `usuario` WHERE email_dev = '$this->email' AND password_dev = '$this->password' ";
    $res = $this->con->query($query);
    if ($this->con->affected_rows > 0) 
      return $res->fetch_array(MYSQLI_ASSOC);
    return false;
  }

}

?>