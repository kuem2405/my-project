<?php include('../includes/header.php')?>
<?php include('../includes/mysqli_connect.php')?>
<?php include('../includes/fucntion.php')?>
<?php include('../includes/sibar-3.php')?>

        <div id="info">
            <?php
                    if(isset($_GET['iddv'])){
                    
                        $iddv=$_GET['iddv'];
                        $q1="SELECT *FROM tb_dich_vu where id_dich_vu='{$iddv}'";
                        $r1=mysqli_query($dbc,$q1);
                        confirm_query($r1,$q1);
                        while($dv1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                            $namedv="{$dv1['name_dich_vu']}";
                            $dongia="{$dv1['don_gia']}";
                        }
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
                            $q="UPDATE tb_dich_vu SET name_dich_vu='{$tendv}',don_gia='{$gia}',don_vi_tinh='{$dvt}' where id_dich_vu={$iddv}";
                            $r=mysqli_query($dbc,$q);
                            confirm_query($r,$q);
                            if(mysqli_affected_rows($dbc)==1){
                                //url_stat("them_dv.php");
                                //header("Location : http://localhost:8080/Do an/admin/them_dv.php");
                                //exit();
                                echo "<p class='sur'>Sửa thành công.</p>";
                            }else{
                                echo "<p class='warning'>Sửa không được.</p>";
                            }
                        }
                        
                    }
                    } 
                    
            ?>
            <form action="" method="POST">                
                <fieldset>
                    <legend>Form sửa Dịch vụ</legend>
                        <table>
                            <tr>
                                <td><label for="tendv">Tên dịch vụ: <span class="required">*</span></label></td>
                                <td><input type="text" name="tendv" value="<?php if(!empty($namedv)) echo $namedv;?>"/></td>
                            </tr>
                            <tr>
                                <td><label for="gia">Đơn giá<span class="required">*</span></label></td>
                                <td><input type="text" name="gia" value="<?php if(!empty($dongia)) echo $dongia;?>"/></td>
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
            
        </div><!--end info-->

<?php include('../includes/footer.php')?>