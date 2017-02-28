<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/curso-blog-2' . '/config/config.php';
spl_autoload_register(function ($class) {
  include "../class/$class/$class.class.php";
});

$session = new Session();
if (! $session->validateSession('id')) {
  header('location: login/login.php?message=Usuario o contraseña incorrectos&type=warningMessage');
}

$session->destroySession();

header('location: login/login.php');
