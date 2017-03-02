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

  public function setEmail (string $email)
  {
    $this->email = $this->con->real_escape_string($email);
  }

  public function setPassword (string $password)
  {
    $this->password = $password;
  }

  public function signIn ()
  {
    $row = $this->getQueryResult()->fetch_array(MYSQLI_ASSOC);
    if ($this->isAffectedRows()) {
      if ($this->passwordVerify($row['password_dev']))
        return $row;
    }
    return false;
  }

  public function getQueryResult (): mysqli_result
  {
    $query = "SELECT * FROM `usuario` WHERE email_dev = '$this->email'";
    return $this->con->query($query);
  }

  public function isAffectedRows ():bool
  {
    return ($this->con->affected_rows > 0);
  }

  public function passwordVerify ($password):bool
  {
    return password_verify($this->password, $password);
  }
}
