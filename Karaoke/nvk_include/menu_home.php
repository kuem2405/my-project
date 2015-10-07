<legend>
	<?php
	if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
		if(kiem_tra_login($_SESSION['user'],$_SESSION['pass'])==true){
			echo "
				<div id='menu'>
					<ul>
					<li ><a href='index.php' class='active'>Home</a></li>
					<li><a href='nvk_admin/phonghoatdong.php'>Phòng hoạt động</a></li>
					<li><a href='nvk_admin/phongtrong.php'>Phòng trống</a></li>
					<li><a href='nvk_admin/them_dv.php'>Thêm dịch vụ</a></li>
					<li><a href='nvk_admin/themphong.php'>Thêm phòng</a></li>
					<li><a href='#'>Quản lí hóa đơn</a></li>
					</ul>
				</div>	
			";
		}
	}else{
	echo "
		<div id='menu'>
		<ul>
			<li ><a href='index.php' class='active'>Home</a></li>
			<li><a href='dangnhap.php'>Đăng nhập</a></li>
			<li><a href='dangki.php'>Đăng kí</a></li>
			</ul>
		</div>		
	";

}
?>				
</legend>