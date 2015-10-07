<?php session_start();?>
<?php
    include("includes/connect.php"); 
    include("includes/fucntion.php");
    include("includes/Header.php");
    include("includes/menu.php");
?>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(!empty($_POST['ten'])){
                    $ten=$_POST['ten'];
                }else{
                    echo "<p class='warning'>Mời nhập tên.</p>";
                }
                
                if(!empty($_POST['pass'])){
                    $pass=$_POST['pass'];
                }else{
                    echo "<p class='warning'>Mời Mật khẩu.</p>";
                }
                if(!empty($pass)&&!empty($ten)){
                    $q1="SELECT * FROM tb_user where ten_user='{$ten}' and pass='{$pass}'";
                    $r1=mysqli_query($dbc,$q1);
                    confirm_query($r1,$q1);
                    if(mysqli_num_rows($r1)!=0){
                        $rows=mysqli_fetch_object($r1);
                        $_SESSION['user']=$rows->ten_user;
                        $_SESSION['quyen']=$rows->quyen;
                        $_SESSION['ten']=$rows->ho_ten;
                        header("Location: http://localhost:8080/thuc-tap/");
                    }else{
                        echo "<p class='warning'>Sai tên hoặc pass.</p>";
                    }
                }
            }
        ?>
        <div id="content">
              <div align="center">
	               <table border="0" width="600" align="left" >
                        <form action="" method="post" >
                        <tr>
                            <th>Tên đăng nhập: </th>
                            <td><input type="text" name="ten"/></td>
                        </tr>
                        <tr>
                            <th>Pass: </th>
                            <td><input type="password" name="pass"/></td>
                        </tr>
                        <tr>
                        <td></td><td><input type="submit" name="ok" value="Đăng nhập"/><input type="reset" value="Nhập lại"/></td>
                        </tr>
                   </table>
                        
                        </form>
              </div>  
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            