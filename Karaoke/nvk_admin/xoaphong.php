<?php
include("../nvk_include/mysqli_connect.php");
 include("../nvk_include/fucntion.php");
 include("../nvk_include/header.php");
 include("../nvk_include/menu_admin.php");
?>

        <div id="info">
            <?php
            chuyen_trang();
                    if(isset($_GET['idphong'])){                    
                        $iddv=$_GET['iddv'];
                        
                        $q="DELETE FROM tb_phong WHERE id_phong={$idphong}" ;
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