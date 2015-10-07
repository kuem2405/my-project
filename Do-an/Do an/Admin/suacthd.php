<?php include('../includes/header.php')?>
<?php include('../includes/mysqli_connect.php')?>
<?php include('../includes/fucntion.php')?>
<?php include('../includes/sibar-3.php')?>

        <div id="info">
            <?php
                    if(isset($_GET['iddv'])&&isset($_GET['idhd'])){
                    
                        $iddv=$_GET['iddv'];
                        $idhd=$_GET['idhd'];
                        $q1="SELECT *FROM tb_dich_vu where id_dich_vu='{$iddv}'";
                        $r1=mysqli_query($dbc,$q1);
                        confirm_query($r1,$q1);
                        while($dv1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                            $namedv="{$dv1['name_dich_vu']}";
                            
                        }
                        if($_SERVER['REQUEST_METHOD']=="POST"){
                        if(!empty($_POST['tendv'])){
                            $tendv=$_POST['tendv'];
                            //echo $tenphong;
                        }else{
                            echo "<p class='warning'>Vui lòng nhập tên dịch vụ.<br/></p>";
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
                        if(!empty($tendv)&&!empty($gia)){
                            $q="UPDATE tb_cthd SET so_luong='{$gia}' where id_dich_vu={$iddv} and id_hoa_don={$idhd}" ;
                            $r=mysqli_query($dbc,$q);
                            confirm_query($r,$q);
                            if(mysqli_affected_rows($dbc)==1){
                                //url_stat("them_dv.php");
                                //redirect_to("");
                                
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
                    <legend>Form sửa chi tiết hóa đơn</legend>
                        <table>
                            <tr>
                                <td><label for="tendv">Tên dịch vụ: <span class="required">*</span></label></td>
                                <td><input type="text" name="tendv" value="<?php if(!empty($namedv)) echo $namedv;?>" readonly="true"/></td>
                            </tr>
                            <tr>
                                <td><label for="gia">Số lượng<span class="required">*</span></label></td>
                                <td><input type="text" name="gia" value=""/></td>
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