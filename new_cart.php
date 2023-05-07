<?php
	include "config.php";	
		$sql = "DELETE FROM cate_laptop";
		$result = $conn->query($sql);		
		$sql = "CREATE TABLE cate_laptop (title text, foto text,poso int, timi int)";
		$result = $conn->query($sql); 
		$sql = "DELETE FROM cate_desktop";
		$result = $conn->query($sql);		
		$sql = "CREATE TABLE cate_desktop (title text, foto text,poso int, timi int)";
		$result = $conn->query($sql); 
		session_start();
		
							$_SESSION['poso0'] = 0;
							$_SESSION['poso1'] = 0;
							$_SESSION['poso2'] = 0;
							$_SESSION['poso3'] = 0;
							$_SESSION['poso4'] = 0;
							$_SESSION['poso5'] = 0;
							
							$_SESSION['dposo0'] = 0;
							$_SESSION['dposo1'] = 0;
							$_SESSION['dposo2'] = 0;
							$_SESSION['dposo3'] = 0;
							$_SESSION['dposo4'] = 0;
							$_SESSION['dposo5'] = 0;
							
							
							$_SESSION['exp'] ='No';
?>