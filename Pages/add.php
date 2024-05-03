<?php
  

    $prd_cate ="SELECT * FROM `categornes`";
    $data = $corn->query($prd_cate);
    $list = $data->fetchAll(PDO::FETCH_ASSOC);
 
     if(isset($_POST['btn-from'])){
     
        $prd_name= $_POST['ten'];
        $prd_img= basename($_FILES['img']['name']);
        $prd_price= $_POST['price'];
        $prd_mota= $_POST['mota'];
        $prd_chitiet= $_POST['chitiet'];
        $prd_id = $_POST['op'];
        $dir = "public/img/";
        $upload = $dir.$prd_img;
         (move_uploaded_file($_FILES['img']['tmp_name'],$upload));
        $sql= "INSERT INTO `products`(`prd_name`,`img_prd`,`prd_price`, `prd_mota`, `prd_ct`,`id_cate`)
        VALUES ('$prd_name','$prd_img',$prd_price,'$prd_mota','$prd_chitiet',$prd_id)";

       if($corn->query($sql)){
        header("Location:?page=list");
       }
       
        
       
      
       
        }
     
?>

    <form action="" enctype="multipart/form-data" method="post" id="form">
        <h1>ADD PRODUCTS</h1>
        <input type="file" placeholder="img" name="img" id="img"><br>
        <input type="text" placeholder="name" name="ten" ><br>
        <input type="number" placeholder="price" name="price" ><br>
        <input type="text" placeholder="mo ta" name="mota"  ><br>
        <input type="text" placeholder="chi tiet" name="chitiet" id="chitiet" ><br>

            
            <select name="op" id="op" >
                
                <?php foreach($list as $prd){?>
                <option value="<?php echo $prd['id_cate']?>"><?php  echo $prd['cat_name']?></option>
                <?php }?>
              
            </select><br>
 
        <input type="submit" value="Submit" name="btn-from" class="sub">
    </form>
