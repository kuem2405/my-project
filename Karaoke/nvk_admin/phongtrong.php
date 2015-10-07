<?php
include("../nvk_include/mysqli_connect.php");
 include("../nvk_include/fucntion.php");
 include("../nvk_include/header.php");
 include("../nvk_include/menu_admin.php");
?>
		<?php
		chuyen_trang();
			echo kiem_tra_phong(0,"no","phonghoatdong.php");
            echo kiem_tra_phong(1,"no","phonghoatdong.php");
            echo kiem_tra_phong(2,"no","phonghoatdong.php");
            echo kiem_tra_phong(3,"no","phonghoatdong.php");
            echo kiem_tra_phong(4,"no","phonghoatdong.php");
            echo kiem_tra_phong(5,"no","phonghoatdong.php");
            echo kiem_tra_phong(6,"no","phonghoatdong.php");
		?>
<?php
 include("../nvk_include/footer.php");
?>