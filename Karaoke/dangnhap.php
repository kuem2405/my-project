<?php
include("nvk_include/mysqli_connect.php");
 include("nvk_include/fucntion.php");
 include("nvk_include/header.php");
 include("nvk_include/menu_home.php");
?>
	<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(!empty($_POST['user_name'])){
				$u=$_POST['user_name'];
				$mes="";	
			}else{
				$mes="Nhập tên user name</br>";
			}
			if(!empty($_POST['pass'])){
				$p=$_POST['pass'];	
			}else{
				$mes.="Nhập password</br>";
			}
			if(isset($u) && isset($p)){
				if(kiem_tra_login($u,$p)==true){
					header("Location: http://kuem2405.esy.es");
				}else{
					$mes="Đăng nhập thất bại";
				}
			}
			
		}
	?>
	<div id="login">
		<form action="" method="post">
			<h1>User name: <input type="text" name="user_name" value="" size="25" /></br>
			<h1>Password : <input type="password" name="pass" value="" size="25" /></br>
			<?php 
				if(isset($mes)){
					echo "<p class='warning'>{$mes}</p>";
				}
			?>
			<input type="submit" name="login" value="Đăng nhập" />
			<input type="reset" name="rest" value="Nhập lại" /></br>
		</form>
	</div>

<?php

 include("nvk_include/footer.php");
?>