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
                    echo "<p class='warning'>Mời nhập Mật khẩu.</p>";
                }
                if(!empty($_POST['pass1'])){
                    $pass1=$_POST['pass1'];
                }else{
                    echo "<p class='warning'>Mời nhập Mật khẩu.</p>";
                }
                if(!empty($_POST['ht'])){
                    $ht=$_POST['ht'];
                }else{
                    echo "<p class='warning'>Mời nhập họ tên.</p>";
                }
                if($pass==$pass1){
                    if(!empty($pass)&&!empty($ten)&&!empty($ht)){
                    $q1="INSERT INTO `tb_user`(`ten_user`, `pass`, `ho_ten`, `quyen`) VALUES ('{$ten}','{$pass}','{$ht}',3)";
                    $r1=mysqli_query($dbc,$q1);
                    confirm_query($r1,$q1);
                    echo "<p class='warning'>Đăng kí thành công.</p>";
                    /*if(mysqli_fetch_field($r1)){
                        echo "<p class='warning'>Đăng kí thành công.</p>";
                        header("Location: http://localhost:8080/thuc-tap/");
                    }else{
                        echo "<p class='warning'>Đăng kí không thành công.</p>";
                    }*/
                }
                }else{
                    echo "<p class='warning'>Password không trùng khớp</p>";
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
                            <th>Nhập lại Pass: </th>
                            <td><input type="password" name="pass1"/></td>
                        </tr>
                        <tr>
                            <th>Họ tên: </th>
                            <td><input type="text" name="ht"/></td>
                        </tr>
                        <tr>
                        <td></td><td><input type="submit" name="ok" value="Đăng Kí"/><input type="reset" value="Nhập lại"/></td>
                        </tr>
                   </table>
                        
                        </form>
              </div>  
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            