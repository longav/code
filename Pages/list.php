


<div class="prd">
<h1>
        <button><a href="?page=add">ADD</a></button>
      </h1>
    
   

    <table border="1" style="margin: 0 auto;">
      <tr>
        <th>img</th>
        <th>name</th>
        <th>price</th>
        <th>del</th>
        <th>edit</th>
      </tr>
      <tr>
      
        <?php
        if($_SESSION['user_name'] == 'admin'){

        
         foreach ($product as $prd) { ?>
      
            <td><img src="public/img/<?php echo $prd['img_prd'] ?>" style="width: 90%;height: 100px;" alt=""></td>
            <td><?php echo $prd['prd_name'] ?></td>
            <td><?php echo $prd['prd_price'] ?></td>
            <td><a href="?page=delete&id=<?php echo $prd['id_prd']?>" style="margin-right: 10px;">del</a></td>
            <td><a href="?page=edit&id=<?php echo $prd['id_prd'] ?>">edit</a></td>
          
      </tr>
    <?php  } 
    }else{
        header("Location:?page=product");
    }
    ?> 
    </table>

</div>




