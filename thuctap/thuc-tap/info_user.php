<?php session_start();?>
<?php
    include("includes/connect.php"); 
    include("includes/fucntion.php");
    include("includes/Header.php");
    include("includes/menu.php");
?>
        
        <div id="content">
              <div align="center">
	               <table border="0" width="600" align="left" >
                        <?php
                            
                                if(isset($_SESSION['user'])){
                                    $q1="SELECT * FROM tb_user where ten_user='{$_SESSION['user']}' ";
                                    $r1=mysqli_query($dbc,$q1);
                                    confirm_query($r1,$q1);
                                    if(mysqli_num_rows($r1)!=0){
                                        $rows=mysqli_fetch_object($r1);
                                        echo "
                                            <tr>
                                                <th>Tên đăng nhập</th>
                                                <td>{$rows->ten_user}</td>
                                             </tr>
                                            <tr>
                                                <th>Pass</th>
                                                <td>{$rows->pass}</td>
                                             </tr>
                                            <tr>
                                                <th>Họ tên:</th>
                                                <td>{$rows->ho_ten}</td>
                                             </tr>
                                            <tr>
                                                <th>Quyền</th>
                                                <td>";
                                                if($rows->quyen==1){echo "admin";}elseif($rows->quyen==2){echo "Quản lí";}else{echo "khách";}
                                                echo "</td>
                                             </tr>
                                            ";
                                    }else{
                                        echo "<p class='warning'>Không có thông tin.</p>";
                                    }
                                }
                            
                        ?>
                   </table>
                        
                        
              </div>  
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            