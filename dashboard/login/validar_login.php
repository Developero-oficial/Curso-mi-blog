<?php
if (!isset($_POST['submit'])){
  header('location: login.php');
  exit();
}

require '../../functions/autoload_class.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if (empty($email) or empty($password)) {
  header('location: login.php?message=Usuario o contraseña no introducidos');
}

$login = new Login(new Conexion);
$login->setEmail($email);
$login->setPassword($password);
$row = $login->signIn();
if ($row){
  $session = new Session();
  $session->addValue('email', $row['email_dev']);
  $session->addValue('id', $row['id_dev']);
  $session->addValue('usuario', $row['usuario_dev']);
  header('location: ../dashboard.php');
} else {
  header('location: login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
}
