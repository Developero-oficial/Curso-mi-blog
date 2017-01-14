<?php 

require '../../config/config.php';

class Conexion extends Mysqli
{  
  private static $instance;
  private $host;
  private $user;
  private $pass;
  private $db;

  public function __construct()
  {
    $this->host = CONF_DB_HOST;
    $this->user = CONF_DB_USER;
    $this->pass = CONF_DB_PASS;
    $this->db = CONF_DB_DATABASE;
    parent::__construct($this->host, $this->user, $this->pass, $this->db);
    $this->connect_errno ? exit('Error en la conexión ' . $this->connect_errno) : '';
    $this->setCharset(CONF_DB_CHARSET);
  } 

  public function setCharset ($charset) {
    $this->set_charset($charset);
  } 

}

$conn = new Conexion();
var_dump($conn);

?>
