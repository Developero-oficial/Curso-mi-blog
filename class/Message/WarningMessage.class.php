<?php 
/**
* 
*/
class WarningMessage extends Message
{
  public function getMessage ($message)
  {
    $message = strip_tags($message);
    return "<div class='alert alert-warning' role='alert'>$message</div>";
  }
}
?>