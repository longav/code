
<?php

$sql4 = "SELECT * FROM `users` WHERE `user_name` = '{$_SESSION['user_name']}' ";

$data4 = $corn->query($sql4);
$ul4 = $data4->fetch();
$id2 = $ul4['id_user'] ;

$sql5 = "SELECT * FROM `cartuser` WHERE `cartuser`.`id_user` = {$id2} ";
$data5 = $corn-> prepare($sql5);
$data5->execute();
$product5 = $data5->fetchAll(PDO::FETCH_ASSOC); 
// print_r($product5);


?>




<div class="main">

    <div class="cart">
        <h1>GIỎ HÀNG CỦA <?= $_SESSION['user_name'] ?></h1>
    </div>
    <table>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Xóa sản phẩm</th>
        </tr>
        <?php foreach ($product5 as  $value) {?>
            <form action="?page=deletePrduser&id=<?= $value['id_prd']?>" method="post">
                <tr>
                <td><?=  $value['id_prd']?></td>
                <td class="img">
                <img src="public/img/<?php echo $value['image'] ?> " height="100px" alt="">
                </td>
                <td class="name"><?=  $value['name_prd']?></td>
                <td></td>
                <td><input type="number" value="<?= $value['qty']?>" name="qty" style="-webkit-appearance: none;" ></td>
                <td><?= ($value['pirce'] *  $value['qty']) ?></td>
                <td><button type="submit">Xóa hàng</button></td>
                
            </tr>
            </form>
  <?php      }
?>   

    </table>
    <div class="sum">
  
        <div class="btn-cart">
            <input type="submit" value="cập nhập giỏ hàng" name="update">
            <input type="submit" value="Thanh toán" name="buy">
        </div>
     
    </div>



</div>