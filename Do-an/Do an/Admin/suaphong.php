<?php include('../includes/header.php')?>
<?php include('../includes/mysqli_connect.php')?>
<?php include('../includes/fucntion.php')?>
<?php include('../includes/sibar-3.php')?>

        <div id="info">
            <?php
                    if(isset($_GET['idphong'])){
                    
                        $iddv=$_GET['idphong'];
                        
                        $q1="SELECT *FROM tb_phong where id_phong='{$iddv}'";
                        $r1=mysqli_query($dbc,$q1);
                        confirm_query($r1,$q1);
                        while($dv1=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                            $namedv="{$dv1['name_phong']}";
                            
                        }
                        if($_SERVER['REQUEST_METHOD']=="POST"){
                        if(!empty($_POST['tendv'])){
                            $tenphong=$_POST['tendv'];
                            //echo $tenphong;
                        }else{
                            echo "<p class='warning'>Vui lòng nhập tên dịch vụ.<br/></p>";
                        }
                        if(isset($_POST['lau'])){
                            $lau=$_POST['lau'];
                            //echo $trang_thai;
                        }else{
                            echo "<p class='warning'>Vui lòng chọn lầu.<br/></p>";
                        }
                        if(!empty($tenphong)&&!empty($lau)){
                            $q="UPDATE tb_phong SET name_phong='{$tenphong}',lau='{$lau}' where id_phong={$iddv}" ;
                            $r=mysqli_query($dbc,$q);
                            confirm_query($r,$q);
                            if(mysqli_affected_rows($dbc)==1){
                                //url_stat("them_dv.php");
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
                    <legend>Form sửa phòng</legend>
                        <table>
                            <tr>
                                <td><label for="tendv">Tên phòng: <span class="required">*</span></label></td>
                                <td><input type="text" name="tendv" value="<?php if(!empty($namedv)) echo $namedv;?>" /></td>
                            </tr>
                            <tr>
                                <td><label for="lau">Lầu<span class="required">*</span></label></td>
                                <td>
                                <select name="lau">
                                    <option value="0">Tầng trệt</option>
                                    <option value="1">Lầu 1</option>
                                    <option value="2">Lầu 2</option>
                                    <option value="3">Lầu 3</option>
                                    <option value="4">Lầu4</option>
                                    <option value="5">Lầu 5</option>
                                    <option value="6">Lầu6</option>
                                                                        
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