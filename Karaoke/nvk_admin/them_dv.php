<?php
include("../nvk_include/mysqli_connect.php");
 include("../nvk_include/fucntion.php");
 include("../nvk_include/header.php");
 include("../nvk_include/menu_admin.php");
?>

        <div id="info">
            <?php 
            chuyen_trang();
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        if(!empty($_POST['tendv'])){
                            $tendv=$_POST['tendv'];
                            //echo $tenphong;
                        }else{
                            echo "<p class='warning'>Vui lòng nhập tên dịch vụ.<br/></p>";
                        }
                        if(isset($_POST['dvt'])){
                            $dvt=$_POST['dvt'];
                            //echo $tenphong;
                        }else{
                            echo "<p class='warning'>Vui lòng chọn đơn vị tính.<br/></p>";
                        }
                        if(!empty($_POST['gia'])){
                            if(filter_var($_POST['gia'],FILTER_VALIDATE_INT,array('min_range'=>1))){
                                $gia=$_POST['gia'];
                                //echo $trang_thai;   
                            }
                            else{
                                echo "<p class='warning'>Vui lòng nhập đơn giá bằng số.<br/></p>";
                            }
                            
                        }else{
                            echo "<p class='warning'>Vui lòng nhập đơn giá.<br/></p>";
                        }
                        if(!empty($tendv)&&!empty($gia)&&!empty($dvt)){
                            $q="INSERT INTO tb_dich_vu(id_user, name_dich_vu,don_gia,don_vi_tinh) VALUES ('1','{$tendv}','{$gia}','{$dvt}')";
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
                    <legend>Form Thêm Dịch vụ</legend>
                        <table>
                            <tr>
                                <td><label for="tendv">Tên dịch vụ: <span class="required">*</span></label></td>
                                <td><input type="text" name="tendv" value=""/></td>
                            </tr>
                            <tr>
                                <td><label for="gia">Đơn giá<span class="required">*</span></label></td>
                                <td><input type="text" name="gia" value=""/></td>
                            </tr>
                            <tr>
                                <td><label for="dvt">Đơn vị tính<span class="required">*</span></label></td>
                                <td>
                                <select name="dvt">
                                    <option value="Lon">Lon</option>
                                    <option value="Chai">Chai</option>
                                    <option value="Két">Két</option>
                                    <option value="Bì">Bì</option>
                                    <option value="Kg">Kg</option>
                                    <option value="Dĩa">Dĩa</option>
                                    <option value="Suất">Suất</option>
                                    <option value="Thùng">Thùng</option>
                                                 
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
                <legend>Thông tin các dịch vụ trong Karaoke</legend>
                <table border=1>
                    <tr>
                        <th>Mã dịch vụ</th>
                        <th>Tên dịch vụ</th>
                        <th>Đơn giá</th>
                        <th>Đơn vị tính</th>
                        <th>Sửa</th>
                        <th>Xóa</th>                        
                    </tr>
                     <?php
                                           
                        $q1="select * FROM tb_dich_vu ORDER BY name_dich_vu";
                        $r1=mysqli_query($dbc,$q1);
                        confirm_query($r1,$q1);
                        
                        while($dv=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                            echo "
                                <tr>
                                    <td>{$dv['id_dich_vu']}</td>
                                    <td>{$dv['name_dich_vu']}</td>
                                    <td>{$dv['don_gia']}</td>
                                    <td>{$dv['don_vi_tinh']}</td>
                                    <td><a href='";
                                    echo "suadv.php?iddv={$dv['id_dich_vu']}'>Edit</a></th>
                                    <td><a href='";
                                    echo "xoadv.php?iddv={$dv['id_dich_vu']}'>Delete</a></th>     
                                </tr>
                                                                                                                             
                            ";
                        }
                     ?>   
            </table>
            </fieldset>
        </div><!--end info-->

<?php
 include("../nvk_include/footer.php");
?>