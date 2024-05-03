
<?php
session_start();
if(isset($_SESSION['user_name'])  ){
  unset($_SESSION['user_name']);
   header("Location:Pages/login.php");
   exit();
}else{
  header("Location:Pages/login.php");
    exit();
}

?>