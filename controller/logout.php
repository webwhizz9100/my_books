<?php


   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   session_destroy();
   
  echo "You have logged out";
  header('Location: ../index.php');
   
?>
