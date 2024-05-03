<?php
        
      
$qty = $_POST['qty'];
echo $qty;
$id= $_GET['id'];
$sql6 =  "SELECT * FROM `cartuser` WHERE  `id_prd` = $id ";
$data6 = $corn-> prepare($sql6);
$data6->execute();
$product6 = $data6->fetch();  

$qyuold = $product6['qty'];



 

if($qty == $qyuold ){
    $sqlDel =  "DELETE FROM `cartuser` WHERE `id_prd` = $id ";
    echo $sqlDel;
}
if($qty < $product6['qty']){
    $sqlDel = " UPDATE `cartuser` SET `qty`='$qty' WHERE `id_prd` = $id ";
    echo $sqlDel;
}


if($corn->query($sqlDel)){
        header("Location:?page=cart");
}
    

?>