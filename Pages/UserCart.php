<?php
    
$id= $_GET['id'];
$qty = $_POST['number'];
// echo $id;
// echo $qty;
$sql2 = "SELECT * FROM `products` WHERE `products`.`id_prd` = {$id} ";
$data2 = $corn-> prepare($sql2);
$data2->execute();
$product2 = $data2->fetch(PDO::FETCH_ASSOC);

//
$sql4 = "SELECT * FROM `users` WHERE `user_name` = '{$_SESSION['user_name']}'  ";

$data4 = $corn->query($sql4);
$data4->execute();
$ul4 = $data4->fetch();
$id2 = $ul4['id_user'] ;
// print_r($ul4) ;
//
$name_prd = $product2['prd_name'];
$id_prd = $product2['id_prd'];
$img = $product2['img_prd'];
$price = $product2['prd_price'];

//
$sql3 = "SELECT * FROM `cartuser` WHERE `id_user` = {$ul4['id_user']} AND id_prd = {$product2['id_prd']} ";
$data3 = $corn-> prepare($sql3);
$data3->execute();
$product3 = $data3->fetch(); 
// print_r($product3) ;
if(empty($product3)){
  
    $sql3 = "INSERT INTO `cartuser`(`id_user`, `id_prd`, `image`, `pirce`, `name_prd`, `qty`)
    VALUES ({$ul4['id_user'] },{$product2['id_prd']},'{$product2['img_prd']}','{$product2['prd_price']}','{$product2['prd_name']}', $qty) " ;
    // echo $sql3;
}else{
    $oldQty = $product3['qty'];
    $updateQty = $product3['qty'] + $qty;
    $sql3 = "UPDATE `cartuser` SET `qty`='$updateQty' WHERE `id_user` = {$ul4['id_user']} AND `id_prd` = {$product2['id_prd']}  " ;

    //  echo $sql3;
      
}

$data3 = $corn->prepare($sql3);
$data3->execute(); 
header("Location:?page=cart");

?>
