<?php
include("../nvk_include/mysqli_connect.php");
 include("../nvk_include/fucntion.php");
 include("../nvk_include/header.php");
 include("../nvk_include/menu_admin.php");
?>

        <div id="info">
            <?php
            chuyen_trang();
                    if(isset($_GET['iddv'])&&isset($_GET['idhd'])){                    
                        $iddv=$_GET['iddv'];
                        $idhd=$_GET['idhd'];
                        $q="DELETE FROM tb_cthd WHERE id_dich_vu={$iddv} and id_hoa_don={$idhd}" ;
                        $r=mysqli_query($dbc,$q);
                        confirm_query($r,$q);
                        if(mysqli_affected_rows($dbc)==1){
                            //url_stat("them_dv.php");
                            echo "<p class='sur'>Xóa thành công.</p>";
                        }else{
                            echo "<p class='warning'>Xóa không được.</p>";
                        }
                    }                    
                    
            ?>
           
            
        </div><!--end info-->

<?php
 include("../nvk_include/footer.php");
?>