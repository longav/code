<?php

   $sever="127.0.0.1";
   $name="root";
   $pass="";
 
   try{
       $corn = new PDO("mysql:host=$sever;dbname=product",$name,$pass);
       $corn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
   } catch(PDOException $e){
       echo $e ->getMessage();
       echo "connext fail";
   }
   
?>