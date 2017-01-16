<?php 
if (isset($_POST['submit'])) {
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';
  if (empty($email) or empty($password)) {
    header('location: login.php?message=Usuario o contraseña no introducidos');
  }

  // Hacer login
}
?>