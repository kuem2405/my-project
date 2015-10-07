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
                        //Kiểm tra phải là file ảnh hay không
                        $exxx=explode('.',$_FILES['image']['name']);
                        $extt= end($exxx);
                        $rename=uniqid(rand(),true).'.'."$extt";                        
                        move_uploaded_file($_FILES['image']['tmp_name'],"images/San-pham/".$rename);
                        $im="images/San-pham/".$rename;
                    }
                }else{
                    echo "<p class='warning'>Không có ảnh.</p>";
                }
                if(isset($mn)&&isset($gc)&&isset($gm)&&isset($im)){
                                $q10="INSERT INTO san_pham(id_menu, id_noi_bat, id_danh_muc, id_thuong_hieu, name_san_pham, gia_cu, gia_moi, tac_gia, images, thong_tin, ban_chay)";
                                $q10.=" VALUES ('$mn','$nb','$dm','$th','$ten',$gc,$gm,'$tg','$im','$tt','yes')";
                                $r10=mysqli_query($dbc,$q10);
                                confirm_query($r10,$q10);
                                if($r10){
                                    echo "<p class='warning'>Thêm thành công.</p>";
                                }
                }else{
                    echo "<p class='warning'>hay za.</p>";
                }
            }
        ?>
        <div id="san-pham">
        <fieldset>
            <legend>Thêm sản phẩm</legend>
            <form action="" method="POST" enctype="multipart/form-data">
                <table >
                    <tr>
                        <th>Tên sản phẩm</th>
                        <td><input type="text" name="tensp"/></td>
                    </tr>
                    <tr>
                        <th>Nổi bật</th>
                        <td><select name="nb">
                        
                            <?php  
                            if(isset($_GET['idmn'])&&isset($_GET['name'])){
                                
                                $q1="SELECT * FROM noi_bat where id_menu='{$_GET['idmn']}'";
                                $r1=mysqli_query($dbc,$q1);
                                confirm_query($r1,$q1);
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "<option value='{$sp['id_noi_bat']}'>{$sp['name_noi_bat']}</option>";
                                }
                                }
                            ?>
                            
                        </select></td>
                    </tr>
                    <tr>
                        <th>Danh mục</th>
                        <td><select name="dm">
                            <?php   
                            if(isset($_GET['idmn'])&&isset($_GET['name'])){
                                $q2="SELECT * FROM danh_muc where id_menu='{$_GET['idmn']}'";
                                $r2=mysqli_query($dbc,$q2);
                                confirm_query($r2,$q2);
                                while($sp=mysqli_fetch_array($r2,MYSQLI_ASSOC)){
                                    echo "<option value='{$sp['id_danh_muc']}'>{$sp['name_danh_muc']}</option>";
                                }
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Thương hiệu</th>
                        <td><select name="th">
                            <?php
                            if(isset($_GET['idmn'])&&isset($_GET['name'])){   
                                $q3="SELECT * FROM thuong_hieu where id_menu='{$_GET['idmn']}'";
                                $r3=mysqli_query($dbc,$q3);
                                confirm_query($r3,$q3);
                                while($sp=mysqli_fetch_array($r3,MYSQLI_ASSOC)){
                                    echo "<option value='{$sp['id_thuong_hieu']}'>{$sp['name_thuong_hieu']}</option>";
                                }
                                }
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Tác giả</th>
                        <td><input type="text" name="tg"/></td>
                    </tr>
                    <tr>
                        <th>Giá cũ</th>
                        <td><input type="text" name="gc"/></td>
                    </tr>
                    <tr>
                        <th>Giá mới</th>
                        <td><input type="text" name="gm"/></td>
                    </tr>
                    <tr>
                        <th>Thông tin</th>
                        <td><textarea name="tt"></textarea></td>
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
        
        <?php
            
            if(isset($_GET['idmn'])&&isset($_GET['name'])){
                $q="SELECT * FROM san_pham where id_menu='{$_GET['idmn']}'";
                $r=mysqli_query($dbc,$q);
                confirm_query($r,$q);
                if(mysqli_num_rows($r)<1){
                    echo "<p class='warning'>Không có sản phẩm nào bạn đã chọn.</p>";
                }else{
                    echo "<fieldset>
                            <legend>Thông tin tất cả sản phẩm của {$_GET['name']}</legend>
                            <table >
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Tác giả</th>
                                    <th>Giá cũ</th>
                                    <th>Giá mới</th>
                                    <th>Thông tin</th>
                                </tr>   ";
                    
                    while($sp=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                        echo "
                              <tr>
                                    <td><a href='sua.php?idsp={$sp['id_san_pham']}&idmn={$_GET['idmn']}&name={$_GET['name']}' >{$sp['name_san_pham']}</a></td>
                                    <td><img src='{$sp['images']}'/></td>
                                    <td>{$sp['tac_gia']}</td>
                                    <td>{$sp['gia_cu']}</td>
                                    <td>{$sp['gia_moi']}</td>
                                    <td>{$sp['thong_tin']}</td>
                                </tr>            
                              
                        ";
                    }
                    echo "</table>
                        </fieldset>";
                }
            }else{
                echo "<p class='warning'>Vui lòng chọn loại sản phẩm muốn thêm</p>";
            }
        ?>
          
             </div>        
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            