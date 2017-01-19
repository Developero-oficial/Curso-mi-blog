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

  $login = new Login(new Conexion);
  $login->setPassword($password);
  $login->setEmail($email);
}

?>