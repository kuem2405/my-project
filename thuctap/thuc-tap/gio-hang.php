<?php session_start();?>
<?php
    include("includes/connect.php"); 
    include("includes/fucntion.php");
    include("includes/Header.php");
    include("includes/menu.php");
?>
            
        <div id="content">
        <?php include("includes/menu1.php");
        //Khi post
        if(isset($_GET['tt'])){
            echo "<p class='warning'>Hóa đơn của bạn đã được thanh toán.</p>";
        }
        if($_SERVER['REQUEST_METHOD']=="POST"){
                if (isset($_POST['th']))
            	{
                	$sql1="INSERT INTO `hoadon` (`hoadon_sanpham`, `hoadon_tongtien`) VALUES ('{$_SESSION['giohang']}', '$tong')";
                	$result = mysqli_query($dbc,$sql1);
                	if ($result){
                	   
                       session_destroy();
                        // delete cookies
                        setcookie('PHPSESSID', '', time()-3600, '/','', 0, 0);
                        header("Location: http://localhost:8080/thuc-tap/gio-hang.php?tt=1");
                	}
                		
                        
            	}
            }
            if(isset($_GET['idsp'])){
                if (isset($_SESSION['giohang'])){
                    
                        $_SESSION['giohang']=$_SESSION['giohang'].",".$_GET['idsp'];
                	   echo "<p class='warning'>Vừa thêm 1 sản phẩm vào giỏ hàng</p>";
                    
                	
                    }
                 else
            	{
            	   
            	   $_SESSION['giohang']=$_GET['idsp'];
            	   echo "<p class='warning'>Vừa thêm 1 sản phẩm vào giỏ hàng</p>";
            	}
            }
            
            if (isset($_SESSION['giohang'])){
                	
                    $sql="select * from san_pham where id_san_pham in ({$_SESSION['giohang']})";
	               $r = mysqli_query($dbc,$sql);
                   confirm_query($r,$sql);
                    echo "<table border='1' width='600' align='left' cellspacing='0' cellpadding='0' id='table1'>
                    		<tr>
                    			<td>Tên sản phẩm</td>
                                <td>Hình ảnh</td>
                    			<td><b>Giá</b></td>
                    		</tr>";
                            $tong=0;
                        while($sp=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                            $tong+="{$sp['gia_moi']}";
                            echo "<tr>
                    			<td>{$sp['name_san_pham']}</td>
                                <td><img src='{$sp['images']}'/></td>
                    			<td><b>{$sp['gia_moi']}</b></td>
                    		</tr>";
                        }
                        echo "<tr><td></td><td>Tổng tiền: {$tong} VND</td><td><form action='' method='post'><input type='submit' value='Thanh toán' name='th'/></form></td></tr></table>";
                   }else{
            	   echo "<p class='warning'>Giỏ hàng trống</p>";
            	}
            
            
        ?>
         

	
        <div id="san-pham">
       
             </div>        
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            