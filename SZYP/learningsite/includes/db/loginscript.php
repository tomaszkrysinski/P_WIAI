<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
else {
  header('Location: learningpanel.php');
  echo 'Zostajesz przekierowany. <a href="learningpanel.php">Kliknij tutaj jeżeli to nie nastąpi.</a>';
  exit();
}
require './includes/db/dbconnect.php';
?>
