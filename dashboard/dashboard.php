<?php 
spl_autoload_register(function ($class) {
  include "../class/$class/$class.class.php";
});

$session = new Session();
if (! $session->validateSession('asd')) {
  header('location: login/login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
}

 ?>

