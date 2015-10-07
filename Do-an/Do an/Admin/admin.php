<?php include('../includes/header.php')?>
<?php include('../includes/mysqli_connect.php')?>
<?php include('../includes/fucntion.php')?>
<?php include('../includes/sibar-3.php')?>
        <div id="info">
        <?php
            //mysql_query("SET NAMES 'utf-8'");
           // mysql_query("SET NAMES UTF8");
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(!empty($_POST['submit'])){
                    $submit=$_POST['submit'];
                }
                
                if(!empty($_POST['thanh-toan'])){
                    $thanh_toan=$_POST['thanh-toan'];
                }
                
                if(!empty($submit)){//neu nguoi dung nhan vao nut submit
                    if(isset($_POST['product'])&&filter_var($_POST['product'],FILTER_VALIDATE_INT, array('min_range'=>1))){
                        $product=$_POST['product'];                     
                    }else{
                        echo "<p class='warning'>Chưa chọn sản phẩm<br/></p>";
                    }
                    if(!empty($_POST['so_luong'])){
                        if(filter_var($_POST['so_luong'],FILTER_VALIDATE_INT, array('min_range'=>1))){
                            $so_luong=$_POST['so_luong'];   
                        }else{
                            echo "<p class='warning'>Số lượng vui lòng nhập số</p>";
                        }
                    }else{
                        echo "<p class='warning'>Chưa có số lượng</p>";
                    }
                    
                }//ket thuc kiem tra submit co ton tai khong 
               
            }
             $mes=" ";
                echo "<p>{$mes}</p>";
                if(!empty($thongbao)){
                    echo $thongbao;
                }
        ?>
            
            <form action="" method="post">
                <fieldset>
                    <legend>  Lựa chọn dịch vụ  </legend>
                    <table>
                        <caption><span class="ten_phong">
                            <?php 
                                if(isset($_GET['id_phong'])&& filter_var($_GET['id_phong'],FILTER_VALIDATE_INT,array('min_range'=>1))){
                                    $q10="SELECT * FROM tb_phong WHERE id_phong={$_GET['id_phong']}";
                                    $r10=mysqli_query($dbc,$q10);
                                    confirm_query($r10,$q10);
                                    while($p=mysqli_fetch_array($r10,MYSQLI_ASSOC)){
                                        echo "{$p['name_phong']}"." Lầu "."{$p['lau']}";
                                    }
                                }
                            ?>
                        </span></caption>
                        <tr>
                            <td><label for="Ten-dich-vu">Tên dịch vụ: <span class="required">*</span></label></td>
                            <td>
                                <select name="product" size="5" multiple="" tabindex="1">
                                
                                    <!--<option value="1">Dịch vụ phụ thu 1</option>
                                    <option value="2">Dịch vụ phụ thu 2</option>
                                    <option value="3">Dịch vụ phụ thu 3</option>
                                    <option value="4">Dịch vụ phụ thu 4</option>
                                    <option value="5">Dịch vụ phụ thu 5</option>
                                    <option value="6">Dịch vụ phụ thu 6</option>-->
                                    <?php
                                       
                                        $q1="select * FROM tb_dich_vu ORDER BY name_dich_vu";
                                        $r1=mysqli_query($dbc,$q1);
                                        confirm_query($r1,$q1);
                                        
                                        while($dv=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                            echo "
                                                <option value={$dv['id_dich_vu']}>{$dv['name_dich_vu']} ({$dv['don_vi_tinh']})</option>                                            
                                            ";
                                        }
                                    ?>                                
                                
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="so-luong">Số lượng: <span class="required">*</span></label></td>
                            <td><input type="text" name="so_luong" size="20" maxlength="3" value="" tabindex="2"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="OK"/><input type="reset" name="reset" value="Xóa"/></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
            <fieldset>
                <legend>  Thông tin hóa đơn  </legend>
                <table border=1>
                	<thead>
                		<tr>
                			<th><a href="<?php getURL();?>&id=dv">Tên dịch vụ</a></th>
                			<th><a href="<?php getURL();?>&id=dg">Đơn giá</th>
                			<th><a href="<?php getURL();?>&id=sl">Số lượng</th>
                            <th><a href="<?php getURL();?>&id=tt">Tổng tiền</th>                                
                            <th>Edit</th>
                            <th>Delete</th>
                		</tr>
                	</thead>
                	<tbody>
                        <?php
                            
                            
                        
                            $hien_tai=date('Y-m-d H:i:s');
                            if(isset($_GET['id_phong'])&& filter_var($_GET['id_phong'],FILTER_VALIDATE_INT,array('min_range'=>1))){
                                $id_phong=$_GET['id_phong'];
                                
                                //select tb_hoa_don khi id_phong =$id_phong                                            
                                $q2="SELECT * FROM tb_hoa_don WHERE id_phong=$id_phong and trang_thai LIKE 'no'";
                                $r2=mysqli_query($dbc,$q2);
                                confirm_query($r2,$q2);
                                //kiem tra san pham va so luong da duoc chon hay chua
                                if(!empty($product)&&!empty($so_luong)){
                                    while($hd=mysqli_fetch_array($r2,MYSQLI_ASSOC)){
                                        //echo "{$hd['id_hoa_don']}";
                                        $q5="INSERT INTO tb_cthd(id_hoa_don, id_dich_vu, so_luong) VALUES ({$hd['id_hoa_don']},{$product},{$so_luong})";
                                        $r5=mysqli_query($dbc,$q5);
                                        confirm_query($r5,$q5);
                                    }
                                }else{
                                    $thongbao="<br/>Vui lòng chọn sản phẩm và điền số lượng.";
                                }
                                
                                if(!empty($thanh_toan)){
                                    while($hd=mysqli_fetch_array($r2,MYSQLI_ASSOC)){
                                        $q6="UPDATE tb_phong as p, tb_hoa_don as hd SET p.trang_thai='no', hd.trang_thai='yes' where p.id_phong={$id_phong} and id_hoa_don={$hd['id_hoa_don']}";
                                        $r6=mysqli_query($dbc,$q6);
                                        confirm_query($r6,$q6);                                                                                                      
                                        
                                    }
                                    $mes= "Phòng đã thanh toán";
                                    header("Location: http://localhost:8080/Do%20an/admin/phong_hoat_dong.php");
                                    exit;
                                }
                                
                                //kiem tra hoa don co ton tai khong
                                if(mysqli_num_rows($r2)>0){
                                    
                                    $q4="SELECT dv.don_vi_tinh as dvt,hd.id_hoa_don as mahd,dv.id_dich_vu as madv, dv.name_dich_vu as dvu, dv.don_gia as dg, ct.so_luong as sl,(dv.don_gia * ct.so_luong) AS tong_tien ";
                                    $q4.="FROM tb_hoa_don AS hd ";
                                    $q4.="JOIN tb_cthd AS ct ";
                                    $q4.="USING ( id_hoa_don ) ";
                                    $q4.="JOIN tb_dich_vu AS dv ";
                                    $q4.="USING ( id_dich_vu ) ";
                                    $q4.="WHERE hd.id_phong ={$id_phong} ";
                                    $q4.="AND hd.trang_thai LIKE 'no' ";
                                    $r=mysqli_query($dbc,$q4);
                                    confirm_query($r,$q4);
                                    $tong=0;
                                    while($cthd=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                                        $tong+="{$cthd['tong_tien']}";
                                        
                                        echo "
                                            <tr>
                                                <td>{$cthd['dvu']}</td>
                                                <td>{$cthd['dg']}/{$cthd['dvt']}</td>
                                                <td>{$cthd['sl']}</td>
                                                <td>{$cthd['tong_tien']}</td>
                                                <td><a class='edit' href='";
                                                echo "suacthd.php?iddv={$cthd["madv"]}&idhd={$cthd["mahd"]}'>Edit</a></td>
                                                <td><a class='delete' href='";
                                                echo "xoacthd.php?iddv={$cthd["madv"]}&idhd={$cthd["mahd"]}'>Delete</a></td>
                                            </tr>                                         
                                        ";
                                        
                                    }//end while loop
                                }else{
                                    
                                    $q7="select * FROM tb_phong as p where p.trang_thai='yes' ";
                                    $r7=mysqli_query($dbc,$q7);
                                    confirm_query($r7,$q7);
                                    if(isset($r7)){
                                        $q3="INSERT INTO tb_hoa_don(id_user,id_phong,ngay_lap,trang_thai) VALUES ('1','{$id_phong}','{$hien_tai}','no')";
                                        $r3=mysqli_query($dbc,$q3);
                                        confirm_query($r3,$q3);
                                    }else{
                                        $mes= "Phòng đã thanh toán";
                                    }                                   
                                    
                                }//ket thuc else kiem tra hoa don co ton tai khong
                                
                            } 
                            else{
                                $id_phong="Không có phòng.";
                                $mes=$id_phong;
                            }
                        ?>
                        <?php
                            /*$now = getdate();
                            $currentTime = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"];
                            $currentDate = $now["mday"] . "." . $now["mon"] . "." . $now["year"];
                            $currentWeek = $now["wday"] . "."; 
                            echo $now["hours"] .":" . $now["minutes"] . ":" . $now["seconds"]; 
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            echo date('Y-m-d H:i:s')."<br/>";
                            */
                            
                        ?>
                        <tr>
                            <td></td>
                            
                            <td colspan="5"><form action="" method="post"><input type="submit" name="thanh-toan" value="Thanh toán"/> <label for="tong"> Tổng: </label>
                            <input type="text" name="total" size="20" maxlength="3" value="<?php if(!empty($tong)){echo $tong;} ?>" tabindex="2" readonly="true"/></form></td>
                            
                        </tr>
                	</tbody>
                </table>
            </fieldset>
        </div><!--end info-->

<?php include('../includes/footer.php')?>