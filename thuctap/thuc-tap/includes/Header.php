<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />
 
    <link rel="stylesheet" href="css/style.css"/>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="js/tabs.js"></script>
    
    
	<title>tiki.vn</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div id="header-info">
            <div id="logo"><a href="index.php"></a></div>
            <ul id="dich-vu">
                <li class="free-ship"><a href="#"><span class="dam">Miễn phí giao hàng</span><br /><span>Tận nơi - toàn quốc *</span></a></li>
                <li class="tiki-return"><a href="#"><span class="dam">15 ngày đổi trả</span><br /><span>365 ngày bảo hành</span></a></li>
                <li class="tiki-xu"><a href="#"><span class="dam">Khách hàng thân thiết</span><br /><span>Mua giá không đồng với Tiki Xu</span></a></li>
            </ul>
            <div id="user-cart">
                <div class="user">
                    <div class="pic-user"></div>
                    <?php 
                            if(isset($_SESSION['ten'])){
                                echo "<a href='thoat.php'><span class='dam'>Đăng xuất</span><br /><span>Tài khoản và Đơn hàng</span></a>";
                            }else{
                                echo "<a href='login.php'><span class='dam'>Đăng nhập</span><br /><span>Tài khoản và Đơn hàng</span></a>";
                            }
                        
                        ?>
                    
                    <ul>
                        <li>
                        <?php 
                            if(isset($_SESSION['ten'])){
                                echo "<a class='login' href='info_user.php'><p class='warning'>Chào {$_SESSION['ten']}</p></a><br />";
                            }else{
                                echo "<a class='login' href='login.php'>Đăng nhập</a><br />";
                            }
                        
                        ?>
                            
                            <a class="login-fb" href="#">Liên kết facebook</a><br />
                            <div class="new-user">Khách hàng mới <a href="new-user.php">Tạo tài khoản?</a></div>
                        </li>
                        <li><a href="info_user.php">Tài khoản của tôi</a></li>
                        <li><a href="#">Danh sách yêu thích</a></li>
                        <li><a href="#">Đánh giá của tôi</a></li>
                        <li><a href="#">Thông tin tiki Xu</a></li>
                        <li><a href="#">Thông báo</a></li>
                        <li class="top-line"><a href="gio-hang.php">Đơn hàng của tôi</a></li>
                    </ul>
                </div>
                <div class="shopping-cart">
                <div class="pic-cart"></div>
                    <a href="gio-hang.php"><span class="dam">Giỏ hàng</span></a>
                    <div class="row"></div>
                    <div class="info-shopping">
                    
                    <?php 
                         
                        if (isset($_SESSION['giohang'])){
                            	
                                $sql="select * from san_pham where id_san_pham in ({$_SESSION['giohang']})";
            	               $r = mysqli_query($dbc,$sql);
                               confirm_query($r,$sql);
                                        $tong=0;
                                        echo "<ul>";
                                    while($sp=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                                        $tong+="{$sp['gia_moi']}";
                                        echo "
                                			<li><a href='gio-hang.php'><p class='warning'>{$sp['name_san_pham']}</p></a></li>                                            
                                		";
                                    }
                                    echo "<li>Tổng tiền: {$tong} VND</ul>";
                               }else{
                        	   echo "<p class='warning'>Giỏ hàng trống</p>";
                        	}
                    
                    ?></div>
                </div>
            </div><!--end user-cart-->
            </div><!--end header-info-->