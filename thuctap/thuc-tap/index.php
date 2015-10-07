<?php session_start();?>
<?php
    include("includes/connect.php"); 
    include("includes/fucntion.php");
    include("includes/Header.php");
    include("includes/menu.php");
?>
           
        <div id="content">
        <?php include("includes/quangcao.php");?>
            <div id="san-pham">
                <div class="a-san-pham">
                    <span class="tieu-de">Sách Tiếng Việt</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#sach-moi" class="active">Mới</a></li>
                            <li><a href="#sach-noi-bat">Nổi bật</a></li>
                            <li><a href="#sach-giam-gia">Giảm giá</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="sach-moi" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_noi_bat=2 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Tiki Khuyên Đọc</span>
                <div id="tabs-navi">
                        
                        <div class="tabs-container">
                            <div class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_danh_muc=2 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Điện Tử</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#dt-moi" class="active">Mới Nhất</a></li>
                            
                            <li><a href="#dt-giam-gia">Giảm giá</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="dt-moi" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_noi_bat=6 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Phụ Kiện Điện Tử</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#tai-nghe" class="active">Tai Nghe</a></li>
                            <li><a href="#usb">USB</a></li>
                            <li><a href="#pin-sac">Pin Sạc</a></li>
                            <li><a href="#chuot-ban-phim">Giảm giá</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="tai-nghe" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_danh_muc=16 Limit 1,5";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Gia Dụng</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#gd-moi" class="active">Mới Nhất</a></li>
                            <li><a href="#gd-gg">Giảm Giá</a></li>
                            <li><a href="#dien-gd">Điện Gia Đình</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="gd-moi" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_noi_bat=10 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Sản phẩm nhà bếp</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#ln" class="active">Lò nướng</a></li>
                            <li><a href="#n">Nồi</a></li>
                            <li><a href="#b">Bếp</a></li>
                            <li><a href="#x">Xay ép</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="ln" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_danh_muc=21 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Thời Trang</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#tt-moi" class="active">Mới nhất</a></li>
                            <li><a href="#tt-nam">Thời trang nam</a></li>
                            <li><a href="#tt-nu">Thời trang nữ</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="tt-moi" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_noi_bat=18 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Quà tặng</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#qt-moi" class="active">Mới Nhất</a></li>
                            <li><a href="#qt-gg">Giảm Giá</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="qt-moi" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_noi_bat=14 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Phụ Kiện Thời Trang</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#gd" class="active">Giày - Dép</a></li>
                            <li><a href="#pk">Phụ kiện</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="gd" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_danh_muc=41 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Đồ chơi</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#dc-moi" class="active">CubicFun</a></li>
                            <li><a href="#dc-gg">Nici</a></li>
                            <li><a href="#dc-gd">Metal Works</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="dc-moi" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_danh_muc=28 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->
                
                <div class="a-san-pham">
                    <span class="tieu-de">Sức khỏe và Sắc đẹp</span>
                <div id="tabs-navi">
                        <ul class="tabs2">
                            <li ><a href="#sk-moi" class="active">Mới Nhất</a></li>
                            <li><a href="#sk-gg">Giảm Giá</a></li>
                        </ul><br />
                        <div class="tabs-container">
                            <div id="sk-moi" class="tabs-content2">
                                 <ul>
                                    <?php 
                                        $q="SELECT *FROM san_pham WHERE id_noi_bat=22 Limit 0,4";
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
                                    ?>
                                 </ul>
                            </div><!--end sach-moi-->
                        </div>
                    </div>
                </div><!--end 1-san-pham-->                   
            </div><!--end #san-pham-->
            <div id="thong-tin-trai">
                <h3>Top 100 sách bán chạy trong tuần</h3>
                <div class="thong-tin-left">
                    <table >
                        <?php 
                            $q1="SELECT *FROM san_pham WHERE id_menu=1 Limit 0,5";
                            $r1=mysqli_query($dbc,$q1);
                            confirm_query($r1,$q1);
                            if(mysqli_num_rows($r1)<1){
                                echo "<p>Không có sản phẩm nào.</p>";
                            }else{
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "
                                    <div class='gach-chan'>
                                       <a href='ChiTietSanPham.php?idm={$sp['id_menu']}&idsp={$sp['id_san_pham']}' ><img src='{$sp['images']}' align='top' /></a>
                                       <div class='thong-tin1'>
                                            <a href='#'>{$sp['name_san_pham']}</a> 
                                            <div class='moi'></div><br/>
                                            <span class='tac-gia'>{$sp['tac_gia']}</span><br />
                                            <span class='gia-moi'>{$sp['gia_moi']} đ</span>
                                            <span class='gia-cu'> {$sp['gia_cu']} đ</span>
                                       </div>
                                       </div>
                                    ";
                                }
                            }
                        ?>
                    </table>                    
                </div>
                
                <h3>Top 100 hàng điện tử bán chạy trong tuần</h3>
                <div class="thong-tin-left">
                    <table >
                        <?php 
                            $q1="SELECT *FROM san_pham WHERE id_menu=2 Limit 0,5";
                            $r1=mysqli_query($dbc,$q1);
                            confirm_query($r1,$q1);
                            if(mysqli_num_rows($r1)<1){
                                echo "<p>Không có sản phẩm nào.</p>";
                            }else{
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "
                                    <div class='gach-chan'>
                                       <a href='ChiTietSanPham.php?idm={$sp['id_menu']}&idsp={$sp['id_san_pham']}' ><img src='{$sp['images']}' align='top' /></a>
                                       <div class='thong-tin1'>
                                            <a href='#'>{$sp['name_san_pham']}</a> 
                                            <div class='moi'></div><br/>
                                            <span class='tac-gia'>{$sp['tac_gia']}</span><br />
                                            <span class='gia-moi'>{$sp['gia_moi']} đ</span>
                                            <span class='gia-cu'> {$sp['gia_cu']} đ</span>
                                       </div>
                                       </div>
                                    ";
                                }
                            }
                        ?>
                    </table>                    
                </div>
                
                <h3>Top 100 hàng gia dụng bán chạy trong tuần</h3>
                <div class="thong-tin-left">
                    <table >
                        <?php 
                            $q1="SELECT *FROM san_pham WHERE id_menu=3 Limit 0,5";
                            $r1=mysqli_query($dbc,$q1);
                            confirm_query($r1,$q1);
                            if(mysqli_num_rows($r1)<1){
                                echo "<p>Không có sản phẩm nào.</p>";
                            }else{
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "
                                    <div class='gach-chan'>
                                       <a href='ChiTietSanPham.php?idm={$sp['id_menu']}&idsp={$sp['id_san_pham']}' ><img src='{$sp['images']}' align='top' /></a>
                                       <div class='thong-tin1'>
                                            <a href='#'>{$sp['name_san_pham']}</a> 
                                            <div class='moi'></div><br/>
                                            <span class='tac-gia'>{$sp['tac_gia']}</span><br />
                                            <span class='gia-moi'>{$sp['gia_moi']} đ</span>
                                            <span class='gia-cu'> {$sp['gia_cu']} đ</span>
                                       </div>
                                       </div>
                                    ";
                                }
                            }
                        ?>
                    </table>                    
                </div>
                
                <h3>Top 100 quà tặng bán chạy trong tuần</h3>
                <div class="thong-tin-left">
                    <table >
                        <?php 
                            $q1="SELECT *FROM san_pham WHERE id_menu=4 Limit 0,5";
                            $r1=mysqli_query($dbc,$q1);
                            confirm_query($r1,$q1);
                            if(mysqli_num_rows($r1)<1){
                                echo "<p>Không có sản phẩm nào.</p>";
                            }else{
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "
                                    <div class='gach-chan'>
                                       <a href='ChiTietSanPham.php?idm={$sp['id_menu']}&idsp={$sp['id_san_pham']}' ><img src='{$sp['images']}' align='top' /></a>
                                       <div class='thong-tin1'>
                                            <a href='#'>{$sp['name_san_pham']}</a> 
                                            <div class='moi'></div><br/>
                                            <span class='tac-gia'>{$sp['tac_gia']}</span><br />
                                            <span class='gia-moi'>{$sp['gia_moi']} đ</span>
                                            <span class='gia-cu'> {$sp['gia_cu']} đ</span>
                                       </div>
                                       </div>
                                    ";
                                }
                            }
                        ?>
                    </table>                    
                </div>
                
                <h3>Top 100 thời trang bán chạy trong tuần</h3>
                <div class="thong-tin-left">
                    <table >
                        <?php 
                            $q1="SELECT *FROM san_pham WHERE id_menu=5 Limit 0,5";
                            $r1=mysqli_query($dbc,$q1);
                            confirm_query($r1,$q1);
                            if(mysqli_num_rows($r1)<1){
                                echo "<p>Không có sản phẩm nào.</p>";
                            }else{
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "
                                    <div class='gach-chan'>
                                       <a href='ChiTietSanPham.php?idm={$sp['id_menu']}&idsp={$sp['id_san_pham']}' ><img src='{$sp['images']}' align='top' /></a>
                                       <div class='thong-tin1'>
                                            <a href='#'>{$sp['name_san_pham']}</a> 
                                            <div class='moi'></div><br/>
                                            <span class='tac-gia'>{$sp['tac_gia']}</span><br />
                                            <span class='gia-moi'>{$sp['gia_moi']} đ</span>
                                            <span class='gia-cu'> {$sp['gia_cu']} đ</span>
                                       </div>
                                       </div>
                                    ";
                                }
                            }
                        ?>
                    </table>                    
                </div>
                
                <h3>Top 100 sức khỏe và làm đẹp bán chạy trong tuần</h3>
                <div class="thong-tin-left">
                    <table >
                        <?php 
                            $q1="SELECT *FROM san_pham WHERE id_menu=6 Limit 0,5";
                            $r1=mysqli_query($dbc,$q1);
                            confirm_query($r1,$q1);
                            if(mysqli_num_rows($r1)<1){
                                echo "<p>Không có sản phẩm nào.</p>";
                            }else{
                                while($sp=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                    echo "
                                    <div class='gach-chan'>
                                       <a href='ChiTietSanPham.php?idm={$sp['id_menu']}&idsp={$sp['id_san_pham']}' ><img src='{$sp['images']}' align='top' /></a>
                                       <div class='thong-tin1'>
                                            <a href='#'>{$sp['name_san_pham']}</a> 
                                            <div class='moi'></div><br/>
                                            <span class='tac-gia'>{$sp['tac_gia']}</span><br />
                                            <span class='gia-moi'>{$sp['gia_moi']} đ</span>
                                            <span class='gia-cu'> {$sp['gia_cu']} đ</span>
                                       </div>
                                       </div>
                                    ";
                                }
                            }
                        ?>
                    </table>                    
                </div>
            </div><!--end thong-tin-trai-->
        <div id="mua-hang-tiki">
                <h1>Mua hàng trực tuyến tại Tiki.vn</h1>
                <hr />
                <a href="#"><img src="images/tiki_home.png"/></a>
                <p>Công ty Cổ phần Ti Ki ra đời vào tháng 3/2010, với cách thức kinh doanh Mua hàng online - Giao hàng tận nơi. Bắt đầu với mô hình nhà sách trên mạng - cho phép đọc giả dễ dàng tìm sách & mua sách online - đến nay Tiki đã có tới hàng chục nghìn sản phẩm từ các thương hiệu uy tín của 6 ngành hàng Sách, Điện tử, Gia dụng, Thời trang, Quà tặng, Làm đẹp - Sức khoẻ. Không chỉ vậy, mua sắm trực tuyến tại Tiki.vn giúp quý khách tiết kiệm được thời gian, công sức mà vẫn bảo đảm được các quyền lợi về bảo hành, đổi/trả.
Chỉ cần mở website Tiki.vn và mua hàng qua mạng, quý khách sẽ được giao sản phẩm tới tận nơi miễn phí khi đặt đơn hàng từ 100.000đ trong phạm vi Tp.HCM và từ 200.000đ đối với các tỉnh thành khác. Hãy cùng hàng triệu người tiêu dùng Việt Nam trải nghiệm tiện ích mua hàng trên mạng dễ dàng, tiện ích cùng Tiki.vn</p>
            </div><!--end mua-hang-tiki-->
            
        </div><!--end content-->
<?php
include("includes/footer.php");
//include("includes/menu.php");

?>
            