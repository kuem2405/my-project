<?php session_start();?>
<?php
    include("includes/connect.php"); 
    include("includes/fucntion.php");
    include("includes/Header.php");
    include("includes/menu.php");
?>
            
        <div id="content">
        <?php include("includes/menu2.php");
        
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_GET['idmn'])){
                    $mn=$_GET['idmn'];
                    //echo "<p class='warning'>$mn</p>";
                }
                
                if(!empty($_POST['tensp'])){
                    $ten=$_POST['tensp'];
                    //echo "<p class='warning'>$ten</p>";
                }
                if(isset($_POST['nb'])){
                    $nb=$_POST['nb'];
                    //echo "<p class='warning'>$nb</p>";
                }
                if(isset($_POST['th'])){
                    $th=$_POST['th'];
                    //echo "<p class='warning'>$th</p>";
                }
                if(isset($_POST['dm'])){
                    $dm=$_POST['dm'];
                    //echo "<p class='warning'>$dm</p>";
                }
                if(!empty($_POST['tg'])){
                    $tg=$_POST['tg'];
                    //echo "<p class='warning'>$tg</p>";
                }else{
                    $tg="";
                }
                if(!empty($_POST['gc'])){
                    $gc=$_POST['gc'];
                    //echo "<p class='warning'>$gc</p>";
                }
                if(!empty($_POST['gm'])){
                    $gm=$_POST['gm'];
                    //echo "<p class='warning'>$gm</p>";
                }
                
                if(!empty($_POST['tt'])){
                    $tt=$_POST['tt'];
                    //echo "<p class='warning'>$tt</p>";
                }else{
                    $tt="";
                }
                if(isset($_FILES['image'])){
                    $all=array('image/jpeg','image/png','image/jpg','image/x-png');
                    if(in_array(strtolower($_FILES['image']['type']),$all)){
                        $exxx=explode('.',$_FILES['image']['name']);
                        $extt= end($exxx);
                        $rename=uniqid(rand(),true).'.'."$extt";                        
                        move_uploaded_file($_FILES['image']['tmp_name'],"images/San-pham/".$rename);
                        $im="images/San-pham/".$rename;
                    }
                }else{
                    echo "<p class='warning'>hay za i.</p>";
                }
                if(isset($mn)&&isset($gc)&&isset($gm)){
                    if(empty($im)){
                        $q11="UPDATE san_pham SET";
                        $q11.=" id_menu='$mn',id_noi_bat='$nb',id_danh_muc='$dm',id_thuong_hieu='$th',name_san_pham='$ten',gia_cu=$gc,gia_moi=$gm,tac_gia='$tg',thong_tin='$tt',ban_chay='yes'";
                        $q11.=" WHERE id_san_pham='{$_GET['idsp']}'";
                        $r11=mysqli_query($dbc,$q11);
                        confirm_query($r11,$q11);
                        if($r11){
                            echo "<p class='warning'>Sửa thành công.</p>";
                        }else{
                            echo "<p class='warning'>Sửa không thành công.</p>";
                        }
                    }else{
                        $q11="UPDATE `san_pham` SET";
                        $q11.=" `id_menu`='$mn',`id_noi_bat`='$nb',`id_danh_muc`='$dm',`id_thuong_hieu`='$th',`name_san_pham`='$ten',`gia_cu`=$gc,`gia_moi`=$gm,`tac_gia`='$tg',`images`=$im,`thong_tin`='$tt',`ban_chay`='yes'";
                        $q11.= " WHERE `id_san_pham`='{$_GET['idsp']}'";
                        $r11=mysqli_query($dbc,$q11);
                        confirm_query($r11,$q11);
                        if($r11){
                            echo "<p class='warning'>Sửa thành công.</p>";
                        }else{
                            echo "<p class='warning'>Sửa không thành công.</p>";
                        }
                    }                    
                               
                }else{
                    echo "<p class='warning'>hay za.</p>";
                }
            }
        ?>
        <div id="san-pham">
        <fieldset>
        <?php
            if(isset($_GET['idsp'])){
                $q4="SELECT * FROM san_pham where id_san_pham='{$_GET['idsp']}'";
                $r4=mysqli_query($dbc,$q4);
                confirm_query($r4,$q4);
                if(mysqli_num_rows($r4)!=0){
                        $rows=mysqli_fetch_object($r4);
                        $tensp=$rows->name_san_pham;
                        $nba=$rows->id_noi_bat;
                        $dmu=$rows->id_danh_muc;
                        $thi=$rows->id_thuong_hieu;
                        $tgi=$rows->tac_gia;
                        $gcu=$rows->gia_cu;
                        $gmo=$rows->gia_moi;
                        $tti=$rows->thong_tin;
                        
                        
                }
            } 
            
        ?>
            <legend>Sửa sản phẩm</legend>
            <form action="" method="POST" enctype="multipart/form-data">
                <table >
                    <tr>
                        <th>Tên sản phẩm</th>
                        <td><input type="text" name="tensp" value="<?php if(!empty($tensp)) echo "{$tensp}";?>"/></td>
                    </tr>
                    <tr>
                        <th>Nổi bật</th>
                        <td><select name="nb" >
                        
                            <?php  
                            if(isset($_GET['idmn'])&&isset($_GET['name'])){
                                
                                $q1="SELECT * FROM noi_bat where id_menu='{$_GET['idmn']}'";
                                $r1=mysqli_query($dbc,$q1);
                                confirm_query($r1,$q1);
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "<option value='{$sp['id_noi_bat']}'";
                                    if($nba=="{$sp['id_noi_bat']}") echo "selected";
                                    echo ">{$sp['name_noi_bat']}</option>";
                                }
                                }
                            ?>
                            
                        </select></td>
                    </tr>
                    <tr>
                        <th>Danh mục</th>
                        <td><select name="dm" >
                            <?php   
                            if(isset($_GET['idmn'])&&isset($_GET['name'])){
                                $q2="SELECT * FROM danh_muc where id_menu='{$_GET['idmn']}'";
                                $r2=mysqli_query($dbc,$q2);
                                confirm_query($r2,$q2);
                                while($sp=mysqli_fetch_array($r2,MYSQLI_ASSOC)){
                                    echo "<option value='{$sp['id_danh_muc']}'";
                                    if($dmu=="{$sp['id_danh_muc']}") echo "selected";
                                    echo ">{$sp['name_danh_muc']}</option>";
                                }
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Thương hiệu</th>
                        <td><select name="th" >
                            <?php
                            if(isset($_GET['idmn'])&&isset($_GET['name'])){   
                                $q3="SELECT * FROM thuong_hieu where id_menu='{$_GET['idmn']}'";
                                $r3=mysqli_query($dbc,$q3);
                                confirm_query($r3,$q3);
                                while($sp=mysqli_fetch_array($r3,MYSQLI_ASSOC)){
                                    echo "<option value='{$sp['id_thuong_hieu']}'";
                                    if($thi=="{$sp['id_thuong_hieu']}") echo "selected";
                                    echo ">{$sp['name_thuong_hieu']}</option>";
                                }
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Tác giả</th>
                        <td><input type="text" name="tg" value="<?php if(!empty($tgi)) echo "{$tgi}";?>"/></td>
                    </tr>
                    <tr>
                        <th>Giá cũ</th>
                        <td><input type="text" name="gc" value="<?php if(!empty($gcu)) echo "{$gcu}";?>"/></td>
                    </tr>
                    <tr>
                        <th>Giá mới</th>
                        <td><input type="text" name="gm" value="<?php if(!empty($gmo)) echo "{$gmo}";?>"/></td>
                    </tr>
                    <tr>
                        <th>Thông tin</th>
                        <td><textarea name="tt" ><?php if(!empty($tti)) echo "{$tti}";?></textarea></td>
                    </tr>
                    <tr>
                        <th>Images: </th>
                        <td><input type="hidden" name="MAX_FILE_SIZE" value="524288"/><input type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="ok" value="OK"/><input type="reset" value="Xóa" name="xoa"/></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        
        
          
             </div>        
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            