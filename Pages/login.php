<?php

require "../lib/connext.php";

session_start();
if(isset($_SESSION['user_name'])){
    header("Location:../index.php");
}
if (isset($_POST['sub'])) {

    $name = $_POST['userName'];
    $pass = $_POST['passWord'];
   
    if (!empty($name) && !empty($pass)) {


        $sql = "SELECT * FROM `users` WHERE `user_name` = '$name' AND `passWork` = '$pass' ";
        $data = $corn->query($sql);
        $ul = $data->fetchAll();
        print_r($ul);
        if (!empty($ul)) {
          
            if ($name === 'admin' && $pass === 'admin123@!') {
                $_SESSION['user_name'] = $name;

                header("Location:../index.php");
                exit();
            } else {
                // trang list
                $_SESSION['user_name'] = $name;
                header("Location:?page=product");
                exit();
            }
        } else {
         
            
            header("Location:?page=login");
        }
    }else{
        header("Location:?page=login");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/style/add.css">

</head>
<body>
<form action="" method="post" style="text-align: center;" id="form" >
        <h1>Login</h1>
        <input type="text" placeholder="user name" name="userName"><br>
        <input type="password" placeholder="pass word" name="passWord"  ><br>
        <input type="submit" value="sub" name="sub"> <br>
        <a href="dangky.php">Nếu chưa có tài khoản hãy bấm vào đây</a>
    </form>
 
</body>
</html>



    
    


