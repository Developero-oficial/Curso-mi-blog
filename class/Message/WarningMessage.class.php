<?php 
/**
* 
*/
class WarningMessage extends Message
{
  public function getMessage (string $message): string
  {
    $message = strip_tags($message);
    return "<div class='alert alert-warning' role='alert'>$message</div>";
  }
}
