<?php
require '../../functions/autoload_class.php';

$message = isset($_GET['message']) && isset($_GET['type']) ? MessageFactory::createMessage($_GET['type']) : false;

$message_out = $message ? $message->getMessage($_GET['message']) :''; 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login | Mi blog</title>
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/sigin/sigin.css">
</head>
<body>
  <div class="container">
    <form class="form-signin" method="post" action="validar_login.php">
      <h2 class="form-signin-heading">Please sign in</h2>
      <?php echo $message_out; ?>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"  autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" >
      <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
    </form>
  </div> <!-- /container -->
</body>
</html>