<?php 
require "../lib/connext.php";
if(isset($_POST['sub'])){
    $name =  $_POST['Name'];
    $Pass =  $_POST['password'];
     $sql = "INSERT INTO `users`(`user_name`, `passWork`)
      VALUES ('$name','$Pass')";
    $data = $corn->prepare($sql);
    $data->execute();
    header("Location:login.php");
    exit();
}




?>

<!DOCTYPE html>


<html lang="en">
<head>
<meta charset="UTF-8">
<title>Form Đăng Ký</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

    form {
        background: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        width: 300px;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box; /* Adds padding without increasing the width */
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #5c67f2;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #4a54e1;
    }
</style>
</head>
<body>



<form action="" method="POST">
<h2>Form Đăng Ký</h2>

    
    <label for="name">Tài Khoản</label><br>
    <input type="text" id="email" name="Name" placeholder="Nhập tên tài khoản của bạn" ><br>
    
    <label for="password">Mật khẩu:</label><br>
    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" ><br>
    
    <input type="submit" value="Đăng Ký" name="sub">
</form>

</body>
</html>
