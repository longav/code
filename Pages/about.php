<?php
// require "../lib/connext.php";

$id = $_GET['id'];
$sql = "SELECT * FROM `products` WHERE `id_prd`= {$id} ";
$data = $corn->prepare($sql);
$data->execute();
$prd = $data->fetch();

//
// $sql3 = "SELECT * FROM `products` WHERE `cartuser`";
// $data3 = $corn->prepare($sql3);
// $data3->execute();
// $prd3 = $data->fetch();

// if (isset($_POST['btn-from'])) {

//     $prd_name = $_POST['prd_name'];
//     $prd_img = basename($_FILES['img']['tmp_name']);
//     $prd_price = $_POST['prd_price'];
//     $prd_mota = $_POST['prd_mota'];
//     $prd_chitiet = $_POST['chitiet'];
//     $prd_id = $_POST['op'];


//     $sql = "INSERT INTO `products`(`prd_name`,`img_prd`,`prd_price`, `prd_mota`, `prd_ct`,`id_cate`)
//     VALUES ('$prd_name','$prd_img',$prd_price,'$prd_mota','$prd_chitiet',$prd_id)";

//     if ($corn->query($sql)) {
//         header("Location:list.php");
//     }


//     $dir = "img/";
//     $upload = $dir . $prd_img;
//     if (move_uploaded_file($_FILES['img']['tmp_name'], $upload)) {
//         echo "thank you";
//     } else {
//         echo "have not file";
//     }
// }

?>




<div class="product">
    <div class="product_child">
        <div class="product_content_ct">
            <div class="product_img_child">
                <img src="public/img/<?php echo $prd['img_prd'] ?>" alt="">
            </div>
            <div class="product_review">
                
            <form action="?page=UserCart&id=<?= $prd['id_prd'] ?>" method="post">
                    <div class="product_name">
                        <p class="prd-name" name="prd_name"><?php echo $prd['prd_name'] ?></p>
                    </div>
                    <div class="product_price">
                        <p>Price: <?php echo $prd['prd_price'] ?></p>
                    </div>
                    <div class="prd_review_text">
                        <p>Mã sản phẩm: <span> <?php echo $prd['id_prd'] ?></span></p>
                        <p>Mô tả sản phẩm:</p>
                        <p> <?php echo $prd['prd_mota'] ?></p>



                            <label for="number">Số lượng:</label>
                            <input type="number" name="number" class="number" value="1">
                            <button type="submit">add</button>
                       



                    </div>
                </form>
            </div>


        </div>
      
    </div>
</div>





</main>