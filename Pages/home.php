<div class="content">
<?php

$sql = "SELECT * FROM `products` ";
$data = $corn->query($sql);
$product = $data->fetchAll(); ?>

<div class="product">

    <div class="product_text">
        <h3>LAPTOP</h3>
    </div>
    <div class="product_child">

 
        <?php foreach ($product as $prd) {
            if ($prd['id_cate'] == 2) {  
        ?>
            <a href="?page=about&id=<?php echo $prd['id_prd'] ?>">

                <div class="product_content">

                    <div class="product_img">
                        <img src="public/img/<?php echo $prd['img_prd'] ?> " alt="">
                    </div>
                    <div class="product_name">
                        <p><?php echo $prd['prd_name'] ?></p>
                    </div>
                    <div class="product_price">
                        <p><?php echo $prd['prd_price'] ?>đ</p>
                    </div>

                </div>
            </a>




        <?php   }  }
        
        ?>
        
    </div>

    <div class="product_text">
        <h3>SMART PHONE</h3>
    </div>
    <div class="product_child">
        <?php foreach ($product as $prd) {
            if ($prd['id_cate'] == 1) {  
        ?>


            <a href="?page=about&id=<?php echo $prd['id_prd'] ?>">

                <div class="product_content">

                    <div class="product_img">
                        <img src="public/img/<?php echo $prd['img_prd'] ?> " alt="">
                    </div>
                    <div class="product_name">
                        <p><?php echo $prd['prd_name'] ?></p>
                    </div>
                    <div class="product_price">
                        <p><?php echo $prd['prd_price'] ?>đ</p>
                    </div>

                </div>


            </a>

        <?php     }
        } 
        ?>
    </div>
</div>  
</div>