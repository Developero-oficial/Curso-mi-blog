<?php 
class Conexion extends Mysqli
{
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
    $this->setCharset();
  }

  public function setCharset()
  {
    $this->set_charset(CONF_DB_CHARSET);
  }
}
