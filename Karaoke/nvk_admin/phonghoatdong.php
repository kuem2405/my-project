<?php
 include("../nvk_include/mysqli_connect.php");
 include("../nvk_include/fucntion.php");

 include("../nvk_include/header.php");
 include("../nvk_include/menu_admin.php");
?>
		
		<?php
        chuyen_trang();
            if(isset($_GET['id_phong'])&& filter_var($_GET['id_phong'],FILTER_VALIDATE_INT,array('min_range'=>1))){
                $id_phong=$_GET['id_phong'];
                $q="UPDATE tb_phong SET trang_thai='yes' where id_phong=$id_phong ";
                $r=mysqli_query($dbc,$q);
                confirm_query($r,$q);
            }
                             
            echo kiem_tra_phong(0,"yes","chitethoadon.php");
            echo kiem_tra_phong(1,"yes","chitethoadon.php");
            echo kiem_tra_phong(2,"yes","chitethoadon.php");
            echo kiem_tra_phong(3,"yes","chitethoadon.php");
            echo kiem_tra_phong(4,"yes","chitethoadon.php");
            echo kiem_tra_phong(5,"yes","chitethoadon.php");
            echo kiem_tra_phong(6,"yes","chitethoadon.php");
           
            
        ?>
<?php
 include("../nvk_include/footer.php");
?>