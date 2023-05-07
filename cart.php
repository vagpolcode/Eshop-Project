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
						$poso0 	=$_SESSION['poso0'] ;
						$poso1	=$_SESSION['poso1'] ;
						$poso2	=$_SESSION['poso2'] ;
						$poso3	=$_SESSION['poso3'] ;
						$poso4	=$_SESSION['poso4'] ;
						$poso5	=$_SESSION['poso5'] ;
							$sum = 0;
				
				$title = "PurpleNight";
				$foto = "pur_lap.jpg";
				$poso = "0";
				$timi = "399";
				$sql = "INSERT INTO cate_laptop (title, foto, poso, timi) VALUES ('$title','$foto','$poso0','$timi')";
				$result = $conn->query($sql);
				
				$title = "RedFire";
				$foto = "red_lap.jpg";
				$poso = "0";
				$timi = "459";
				$sql = "INSERT INTO cate_laptop (title, foto, poso, timi) VALUES ('$title','$foto','$poso1','$timi')";
				$result = $conn->query($sql);
				
				$title = "BlackShadow";
				$foto = "bla_lap.jpg";
				$poso = "0";
				$timi = "599";
				$sql = "INSERT INTO cate_laptop (title, foto, poso, timi) VALUES ('$title','$foto','$poso2','$timi')";
				$result = $conn->query($sql);
				
				$title = "WhiteCrystal";
				$foto = "whi_lap.jpg";
				$poso = "0";
				$timi = "629";
				$sql = "INSERT INTO cate_laptop (title, foto, poso, timi) VALUES ('$title','$foto','$poso3','$timi')";
				$result = $conn->query($sql);
				
				$title = "GreenSlayer";
				$foto = "gre_lap.jpg";
				$poso = "0";
				$timi = "899";
				$sql = "INSERT INTO cate_laptop (title, foto, poso, timi) VALUES ('$title','$foto','$poso4','$timi')";
				$result = $conn->query($sql);
				
				$title = "UltraSteel";
				$foto = "mac_lap.jpg";
				$poso = "0";
				$timi = "1049";
				$sql = "INSERT INTO cate_laptop (title, foto, poso, timi) VALUES ('$title','$foto','$poso5','$timi')";
				$result = $conn->query($sql);
				
						$dposo0 =$_SESSION['dposo0'] ;
						$dposo1	=$_SESSION['dposo1'] ;
						$dposo2	=$_SESSION['dposo2'] ;
						$dposo3	=$_SESSION['dposo3'] ;
						$dposo4	=$_SESSION['dposo4'] ;
						$dposo5	=$_SESSION['dposo5'] ;
				
				
						$title = "LittleOne";
						$foto = "kon_des.jpg";
						$poso = "0";
						$timi = "299";
						$sql = "INSERT INTO cate_desktop (title, foto, poso, timi) VALUES ('$title','$foto','$dposo0','$timi')";
						$result = $conn->query($sql);
						
						$title = "BlackDesk";
						$foto = "bla_des.jpg";
						$poso = "0";
						$timi = "399";
						$sql = "INSERT INTO cate_desktop (title, foto, poso, timi) VALUES ('$title','$foto','$dposo1','$timi')";
						$result = $conn->query($sql);
						
						$title = "DarkCrystal";
						$foto = "lin_des.jpg";
						$poso = "0";
						$timi = "529";
						$sql = "INSERT INTO cate_desktop (title, foto, poso, timi) VALUES ('$title','$foto','$dposo2','$timi')";
						$result = $conn->query($sql);
						
						$title = "PowerDesk";
						$foto = "pwr_des.jpg";
						$poso = "0";
						$timi = "699";
						$sql = "INSERT INTO cate_desktop (title, foto, poso, timi) VALUES ('$title','$foto','$dposo3','$timi')";
						$result = $conn->query($sql);
						
						$title = "FutureChrome";
						$foto = "fut_des.jpg";
						$poso = "0";
						$timi = "849";
						$sql = "INSERT INTO cate_desktop (title, foto, poso, timi) VALUES ('$title','$foto','$dposo4','$timi')";
						$result = $conn->query($sql);
						
						$title = "AlienView";
						$foto = "end_des.jpg";
						$poso = "0";
						$timi = "1499";
						$sql = "INSERT INTO cate_desktop (title, foto, poso, timi) VALUES ('$title','$foto','$dposo5','$timi')";
						$result = $conn->query($sql);
?>