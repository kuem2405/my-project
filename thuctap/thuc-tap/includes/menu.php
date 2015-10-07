<div id="menu-search" class="group">
                <div id="menu-page-menu">
                    <ul>
                        <?php 
                            $q="SELECT *FROM menu";
                            $r=mysqli_query($dbc,$q);
                            confirm_query($r,$q);
                            while($m=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                                echo "
                                        <li><a href='san-pham.php?idm={$m['id_menu']}'>{$m['name_menu']}</a>
                                            <div class='info-menu'>
                                                <div class='noi-bat'>
                                                    <h3>Nổi bật</h3>
                                                    <ul>";
                                                        $q1="SELECT * FROM noi_bat where id_menu='{$m['id_menu']}'";                                    
                                                        $r1=mysqli_query($dbc,$q1);
                                                        confirm_query($r1,$q1);
                                                        while($nb=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                                            echo "<li><a href='san-pham.php?idm={$m['id_menu']}&idnb={$nb['id_noi_bat']}'>{$nb['name_noi_bat']}</a></li>";
                                                        }
                                                    echo "</ul>
                                                </div>
                                                <div class='danh-muc'>
                                                    <h3>Danh mục</h3>
                                                    <ul>";                                    
                                                        $q2="SELECT * FROM danh_muc where id_menu='{$m['id_menu']}'";                                    
                                                        $r2=mysqli_query($dbc,$q2);
                                                        confirm_query($r2,$q2);
                                                        while($dm=mysqli_fetch_array($r2,MYSQLI_ASSOC)){
                                                            echo "<li><a href='san-pham.php?idm={$m['id_menu']}&iddm={$dm['id_danh_muc']}'>{$dm['name_danh_muc']}</a></li>";
                                                        }
                                                    echo "</ul>
                                                </div>
                                                <div class='thuong-hieu'>
                                                    <h3>THƯƠNG HIỆU</h3>
                                                    <ul>";                                    
                                                        $q3="SELECT * FROM thuong_hieu where id_menu='{$m['id_menu']}'";                                    
                                                        $r3=mysqli_query($dbc,$q3);
                                                        confirm_query($r3,$q3);
                                                        while($th=mysqli_fetch_array($r3,MYSQLI_ASSOC)){
                                                            echo "<li><a href='san-pham.php?idm={$m['id_menu']}&idth={$th['id_thuong_hieu']}'>{$th['name_thuong_hieu']}</a></li>";
                                                        }
                                                    echo "
                                                    <li><a href='san-pham.php?idm={$m['id_menu']}' class='view-all'>Xem tất cả...</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                
                                ";
                            }
                        ?>
                        <?php 
                            if(isset($_SESSION['ten'])&&isset($_SESSION['quyen'])){
                                if($_SESSION['quyen']==1){
                                    echo "<li><a href='Them-sp.php'>Admin</a></li>";
                                }
                                
                            }
                        ?>
                    </ul>
                </div>
                <div id="search">
                    <form id="search-form" action="" method="get">
                        <input type="text" value="" name="s"/>
                        <input type="submit" value="Search" name="submit"/>
                    </form>
                </div>
            </div><!--end menu-search-->
        </div><!--end header-->
