<?php session_start();?>
<html>
	<header>
		<meta charset="UTF8">
		<title>Demo</title>
		<link rel="stylesheet" type="text/css" href="nvk_style/style.css">
	</header>
	<body>
		<div id="main">
			<fieldset>
<?php 
	 
	if(isset($_SESSION['ten'])){
		echo "<p class='user_name'>{$_SESSION['ten']}</p><a href='thoat.php'> Thoát</a>";
	}
?>