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
    $row = $this->getArrayQueryResult();
    if ($this->isAffectedRows()) {
      if ($this->passwordVerify($row['password_dev']))
        return $row;
    }      
    return false;
  }

  public function getArrayQueryResult ()
  {
    $query = "SELECT * FROM `usuario` WHERE email_dev = '$this->email'";
    $result = $this->con->query($query);
    return $result->fetch_array(MYSQLI_ASSOC);
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
