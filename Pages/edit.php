<?php
    
    $id= $_GET['id'];
    $prd_cates ="SELECT * FROM `categornes`";
    $prd_cate ="SELECT * FROM `products`  where `products`.`id_prd`= {$id}";
    $data = $corn->query($prd_cates);
    $list = $data->fetchAll (PDO::FETCH_ASSOC);
    $datas = $corn->query($prd_cate);
    $lists = $datas->fetch(PDO::FETCH_ASSOC);
    
     if(isset($_POST['btn-edit'])){
     
        $prd_name= $_POST['ten'];
        $prd_img= basename($_FILES['img']['name']);
        $prd_price= $_POST['price'];
        $prd_mota= $_POST['mota'];
        $prd_chitiet= $_POST['chitiet'];
        $prd_id = $_POST['op'];
        $dir = "public/img/";
      
        if(isset($prd_img)){
            move_uploaded_file($_FILES['img']['tmp_name'],$dir.$prd_img);
            $sql= "UPDATE `products` SET `prd_name`='$prd_name',
            `prd_price`='$prd_price',`prd_mota`='$prd_mota',`prd_ct`='$prd_chitiet' ,`img_prd`='$prd_img',`id_cate`='$prd_id' WHERE `products`.`id_prd`= {$id}";
            
        }else{
            $sql= "UPDATE `products` SET `prd_name`='$prd_name',
            `prd_price`='$prd_price',`prd_mota`='$prd_mota',`prd_ct`='$prd_chitiet',`id_cate`='$prd_id' WHERE `products`.`id_prd`= {$id}";
         
        }
       $data1 = $corn->prepare($sql);
       $data1->execute();
       header("Location:?page=product");
    
  
 
    }
       
        
        
    
?>

    <form action="" enctype="multipart/form-data" method="post" id="form" >
        <h1>Edit</h1>
        <input type="file" placeholder="img" name="img" style="height: 80px;width: 200px;"  ><br>
        <input type="text" placeholder="name" name="ten" style="height: 80px;width: 200px;"value="<?php echo $lists['prd_name'] ?>"><br>
        <input type="number" placeholder="price" name="price"  style="height: 80px;width: 200px;" value="<?php echo $lists['prd_price'] ?>"><br>
        <input type="text" placeholder="mo ta" name="mota"  style="height: 80px;width: 200px;" value="<?php echo $lists['prd_mota'] ?>"><br>
        <input type="text" placeholder="chi tiet" name="chitiet"  style="height: 80px;width: 500px;" value="<?php echo $lists['prd_ct'] ?>"><br>

            
            <select name="op" >
                 
                <?php foreach($list as $prd){ ?>
                 
                <option value="<?php echo $prd['id_cate']?>"  <?= ($lists['id_cate'] == $prd['id_cate']) ? "selected" : "" ?> >
                    <?php  echo $prd['cat_name']?>
                </option>
                
                <?php }?>
              
            </select><br>
 
         <input type="submit" value="Submit" name="btn-edit">
    </form>
