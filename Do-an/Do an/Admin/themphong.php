<?php include('../includes/header.php')?>
<?php include('../includes/mysqli_connect.php')?>
<?php include('../includes/fucntion.php')?>
<?php include('../includes/sibar-3.php')?>

        <div id="info">
            <?php 
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        if(!empty($_POST['ten_phong'])){
                            $tenphong=$_POST['ten_phong'];
                            //echo $tenphong;
                        }else{
                            echo "<p class='warning'>Vui lòng điền tên phòng.<br/></p>";
                        }
                        if(isset($_POST['trang_thai'])){
                            $trang_thai=$_POST['trang_thai'];
                            //echo $trang_thai;
                        }else{
                            echo "<p class='warning'>Vui lòng chọn trạng thái.<br/></p>";
                        }
                        if(isset($_POST['lau'])){
                            $lau=$_POST['lau'];
                            //echo $trang_thai;
                        }else{
                            echo "<p class='warning'>Vui lòng chọn lầu.<br/></p>";
                        }
                        if(!empty($tenphong)&&!empty($trang_thai)){
                            $q="INSERT INTO tb_phong(name_phong,lau,trang_thai) VALUES ('{$tenphong}','{$lau}','{$trang_thai}')";
                            $r=mysqli_query($dbc,$q);
                            confirm_query($r,$q);  
                            if(mysqli_affected_rows($dbc)==1){
                                echo "<p class='sur'>Thêm thành công.</p>";
                            }else{
                                echo "<p class='warning'>Thêm không được.</p>";
                            }  
                        }
                        
                    }
            ?>
            <form action="" method="POST">                
                <fieldset>
                    <legend>Form Thêm Phòng</legend>
                        <table>
                            <tr>
                                <td><label for="ten-phong">Tên phòng<span class="required">*</span></label></td>
                                <td><input type="text" name="ten_phong" value=""/></td>
                            </tr>
                            <tr>
                                <td><label for="trang-thai">Trạng thái<span class="required">*</span></label></td>
                                <td>
                                <select name="trang_thai">
                                    <option value="yes">Đang hoạt động</option>
                                    <option value="no">Trống</option>                                    
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="lau">Lầu<span class="required">*</span></label></td>
                                <td>
                                <select name="lau">
                                    <option value="0">Tầng trệt</option>
                                    <option value="1">Lầu 1</option>
                                    <option value="2">Lầu 2</option>
                                    <option value="3">Lầu 3</option>
                                    <option value="4">Lầu 4</option>
                                    <option value="5">Lầu 5</option>
                                    <option value="6">Lầu 6</option>
                                                                        
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Add" name="add"/><input type="reset" name="reset" value="Reset"/></td>
                            </tr>
                        </table>
                </fieldset>            
            </form>
            <fieldset>
                <legend>Thông ti các phòng Karaoke</legend>
                <table border=1>
                    <tr>
                        <th>Mã phòng</th>
                        <th>Tên phòng</th>
                        <th>Lầu</th>
                        <th>Trạng thái</th>
                        <th>Sửa</th>
                        <th>Xóa</th>                        
                    </tr>
                     <?php
                                           
                        $q1="select * FROM tb_phong as p ";
                        $r1=mysqli_query($dbc,$q1);
                        confirm_query($r1,$q1);
                        
                        while($dv=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                            echo "
                                <tr>
                                    <td>{$dv['id_phong']}</td>
                                    <td>{$dv['name_phong']}</td>
                                    <td>{$dv['lau']}</td>
                                    <td>{$dv['trang_thai']}</td>
                                    <td><a href='";
                                    echo "suaphong.php?idphong={$dv['id_phong']}'>Edit</a></th>
                                    <td><a href='";
                                    echo "xoaphong.php?idphong={$dv['id_phong']}'>Delete</a></th>     
                                </tr>
                                                                                                                             
                            ";
                        }
                     ?>   
            </table>
            </fieldset>
        </div><!--end info-->

<?php include('../includes/footer.php')?>