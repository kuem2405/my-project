<?php
    if(isset($_GET['idm'])){
        $id_menu=$_GET['idm'];
        echo "
            <div id='menu-1'>
                <ul>
                    <li><p>Nổi bật</p></li>
                    <li>
                        <ul>";
                        $q1="SELECT * FROM noi_bat where id_menu='{$id_menu}'";                                    
                        $r1=mysqli_query($dbc,$q1);
                        confirm_query($r1,$q1);
                        while($nb=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                            echo "<li><a href='san-pham.php?idm={$id_menu}&idnb={$nb['id_noi_bat']}'>{$nb['name_noi_bat']}</a></li>";
                        }
                    echo "</ul>
                    </li>
                    <li><p>Danh mục</p></li>
                    <li>
                        <ul>";                                    
                        $q2="SELECT * FROM danh_muc where id_menu='{$id_menu}'";                                    
                        $r2=mysqli_query($dbc,$q2);
                        confirm_query($r2,$q2);
                        while($dm=mysqli_fetch_array($r2,MYSQLI_ASSOC)){
                            echo "<li><a href='san-pham.php?idm={$id_menu}&iddm={$dm['id_danh_muc']}'>{$dm['name_danh_muc']}</a></li>";
                        }
                    echo "</ul>
                    </li>
                    <li><p>Thương hiệu</p></li>
                    <li>
                        <ul>";                                    
                        $q3="SELECT * FROM thuong_hieu where id_menu='{$id_menu}'";                                    
                        $r3=mysqli_query($dbc,$q3);
                        confirm_query($r3,$q3);
                        while($th=mysqli_fetch_array($r3,MYSQLI_ASSOC)){
                            echo "<li><a href='san-pham.php?idm={$id_menu}&idth={$th['id_thuong_hieu']}'>{$th['name_thuong_hieu']}</a></li>";
                        }
                    echo "</ul>
                    </li>
                </ul>
            </div>
        ";
    }
?>
