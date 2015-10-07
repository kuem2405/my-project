<?php include('../includes/header.php')?>
<?php include('../includes/mysqli_connect.php')?>
<?php include('../includes/fucntion.php')?>
<?php include('../includes/sibar-3.php')?>

        <div id="info">
            <?php
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

<?php include('../includes/footer.php')?>