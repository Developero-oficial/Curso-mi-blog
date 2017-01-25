<?php 
/**
* 
*/
class Session
{
  
  public function __construct()
  {
    session_start();
  }

  public function addValue ($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public function getValue ($key)
  {
    if ($this->issetValue($key))
      return $_SESSION[$key];
    return false;
  }

  public function removeValue ($key)
  {
    if ($this->issetValue($key)) 
      unset($_SESSION[$key]);
  }

  public function issetValue ($value) 
  {
    return isset($_SESSION[$value]) ? true : false;
  }

  public function destroySession() {
    echo 'Session eliminada';
    session_unset();
    session_destroy();
  }
}
?>