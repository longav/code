
    <div class="wapper">
        <div class="header">
        <div id="mainMenu">
            <li><a href="?page=home">Trang chủ</a></li>
            <li><a href="?page=about">Giới thiệu</a></li>
            <li><a href="?page=new">Tin Tức</a></li>
            <li><a href="?page=product">Sản Phẩm</a></li>
            <li><span><a href="Pages/login.php">Đăng nhập</a></span><span><a href="Pages/dangky.php">Đăng ký</a></span></li>
            <li><a href="?page=list" <?= $_SESSION['user_name'] == 'admin' ? '' : 'hidden' ?> >List</a></li>
        </div>
        <div id="mainRight">
            <p> <i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
            <span><?= $_SESSION['user_name']?></span>
           
             <a href="?page=logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>

             <a href="?page=cart"><i class="fa fa-shopping-cart" aria-hidden="true"  ></i>
</a>
        </div>
        </div>
         <!-- end header -->
        