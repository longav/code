<?php
require "lib/connext.php";
session_start();
if(!isset($_SESSION['user_name'])){
    header("Location:Pages/login.php");
}

if (isset($_GET['id'])) {
}
$sql = "SELECT * FROM `products` ";
$data = $corn->query($sql);
$product = $data->fetchAll(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/style/index.css">
    <link rel="stylesheet" href="public/style/chitiet.css">
    <link rel="stylesheet" href="public/style/add.css">
    <link rel="stylesheet" href="public/style/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <main>
        <?php
        require "inc/header.php";
        ?>
      
        <?php

        $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
        $path = "Pages/{$page}.php";
        $id = !empty($_GET['id']) ? $_GET['id'] : '';



        if (file_exists($path)) {
            require $path;
        } else {
            echo "$path";
        }


        ?>
        <!-- end content -->


        <?php
        require "inc/footer.php";
        ?>