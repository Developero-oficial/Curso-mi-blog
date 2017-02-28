<?php 
$session = new Session();
if (! $session->validateSession('id')) {
  header('location: ../../dashboard/login/login.php?message=Debes iniciar sesión&type=warningMessage');
}
