<?php session_start();?>
<?php
    include("includes/connect.php"); 
    include("includes/fucntion.php");
    include("includes/Header.php");
    include("includes/menu.php");
?>
            
        <div id="content">
        <?php include("includes/menu1.php");?>
            <div id="san-pham">
            
                <div class="a-san-pham">
                    <span class="tieu-de"></span>
                <div id="tabs-navi">
                        
                        <div class="tabs-container">
                            <div  class="tabs-content2">
                                 <ul>
                                 <!--<p>Khong co</p>
                                    <li>
                                    <a href="#">
                                    <img src="images/San-pham/1.jpg"/>
                                    <br/>Hồ Duyên</a> 
                                    <div class="moi"></div>
                                    <br/><span class="tac-gia">Công Tử Hoan Hỉ</span>
                                    <br /><span class="gia-moi">51.000 đ</span>
                                    <span class="gia-cu"> 64.000 đ</span>
                                    </li>-->
                                    <?php
                                        if(isset($_GET['idm'])){
                                            $idm=$_GET['idm'];
                                            if(isset($_GET['idnb'])){//neu ton tai idnb
                                                $q="SELECT *FROM san_pham WHERE id_noi_bat={$_GET['idnb']}";
                                                $r=mysqli_query($dbc,$q);
                                                confirm_query($r,$q);
                                                if(mysqli_num_rows($r)<1){
                                                    echo "<p>Không có sản phẩm nào.</p>";
                                                }else{
                                                    while($nd=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                                                        echo "
                                                           <li>
                                                                <a href='ChiTietSanPham.php?idm={$nd['id_menu']}&idsp={$nd['id_san_pham']}'>
                                                                <img src='{$nd['images']}'/>
                                                                <br/>{$nd['name_san_pham']}</a> 
                                                                <div class='moi'></div>
                                                                <br/><span class='tac-gia'>{$nd['tac_gia']}</span>
                                                                <br /><span class='gia-moi'>{$nd['gia_moi']} đ</span>
                                                                <span class='gia-cu'> {$nd['gia_cu']} đ</span>
                                                            </li> 
                                                        ";
                                                    }
                                                }
                                            }elseif(isset($_GET['idth'])){//neu ton tai idth
                                                $q1="SELECT *FROM san_pham WHERE id_thuong_hieu={$_GET['idth']}";
                                                $r1=mysqli_query($dbc,$q1);
                                                confirm_query($r1,$q1);
                                                if(mysqli_num_rows($r1)<1){
                                                    echo "<p>Không có sản phẩm nào.</p>";
                                                }else{
                                                    while($th=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                                        echo "
                                                           <li>
                                                                <a href='ChiTietSanPham.php?idm={$th['id_menu']}&idsp={$th['id_san_pham']}'>
                                                                <img src='{$th['images']}'/>
                                                                <br/>{$th['name_san_pham']}</a> 
                                                                <div class='moi'></div>
                                                                <br/><span class='tac-gia'>{$th['tac_gia']}</span>
                                                                <br /><span class='gia-moi'>{$th['gia_moi']} đ</span>
                                                                <span class='gia-cu'> {$th['gia_cu']} đ</span>
                                                            </li> 
                                                        ";
                                                    }
                                                }
                                            }elseif(isset($_GET['iddm'])){//neu ton tai iddm
                                                $q2="SELECT *FROM san_pham WHERE id_danh_muc={$_GET['iddm']}";
                                                $r2=mysqli_query($dbc,$q2);
                                                confirm_query($r2,$q2);
                                                if(mysqli_num_rows($r2)<1){
                                                    echo "<p>Không có sản phẩm nào.</p>";
                                                }else{
                                                    while($dm=mysqli_fetch_array($r2,MYSQLI_ASSOC)){
                                                        echo "
                                                           <li>
                                                                <a href='ChiTietSanPham.php?idm={$dm['id_menu']}&idsp={$dm['id_san_pham']}'>
                                                                <img src='{$dm['images']}'/>
                                                                <br/>{$dm['name_san_pham']}</a> 
                                                                <div class='moi'></div>
                                                                <br/><span class='tac-gia'>{$dm['tac_gia']}</span>
                                                                <br /><span class='gia-moi'>{$dm['gia_moi']} đ</span>
                                                                <span class='gia-cu'> {$dm['gia_cu']} đ</span>
                                                            </li> 
                                                        ";
                                                    }
                                                }   
                                            }else{//khong ton tai idnd, idth, iddm
                                                $q3="SELECT *FROM san_pham WHERE id_menu={$idm}";
                                                $r3=mysqli_query($dbc,$q3);
                                                confirm_query($r3,$q3);
                                                if(mysqli_num_rows($r3)<1){
                                                    echo "<p>Không có sản phẩm nào.</p>";
                                                }else{
                                                    while($sp=mysqli_fetch_array($r3,MYSQLI_ASSOC)){
                                                        echo "
                                                           <li>
                                                                <a href='ChiTietSanPham.php?idm={$sp['id_menu']}&idsp={$sp['id_san_pham']}'>
                                                                <img src='{$sp['images']}'/>
                                                                <br/>{$sp['name_san_pham']}</a> 
                                                                <div class='moi'></div>
                                                                <br/><span class='tac-gia'>{$sp['tac_gia']}</span>
                                                                <br /><span class='gia-moi'>{$sp['gia_moi']} đ</span>
                                                                <span class='gia-cu'> {$sp['gia_cu']} đ</span>
                                                            </li> 
                                                        ";
                                                    }
                                                }
                                            }
                                        }
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                    
            </div><!--end #san-pham-->
           
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            