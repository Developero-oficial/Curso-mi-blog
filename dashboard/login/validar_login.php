<?php 
spl_autoload_register(function ($class) {
  include "../../class/$class/$class.class.php";
});

if (isset($_POST['submit'])) {
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';
  if (empty($email) or empty($password)) {
    header('location: login.php?message=Usuario o contraseña no introducidos');
  }
  // ' OR '1'='1 
  $login = new Login(new Conexion);
  $login->setEmail($email);
  $login->setPassword($password);
  $row = $login->signIn();
  if ($row)
  {
    $session = new Session();
    $session->addValue('email', $row['email_dev']);
    $session->addValue('id', $row['id_dev']);
    $session->addValue('usuario', $row['usuario_dev']);
    header('location: ../dashboard.php');
  } else {
    header('location: login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
  }
  
}

?>