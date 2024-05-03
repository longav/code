<?php

$id= $_GET['id'];
$sql ="DELETE FROM products WHERE `products`.`id_prd` = {$id}";
    if($corn->query($sql)){
            header("Location:?page=list");
    }
?>