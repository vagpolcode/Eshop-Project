<?php
	include "config.php";	
		$sql = "DELETE FROM cate_laptop";
		$result = $conn->query($sql);		
		$sql = "CREATE TABLE cate_laptop (title text, foto text,poso int, timi int)";
		$result = $conn->query($sql); 
	session_start();
	
							$_SESSION['poso0'] = 0;
							$_SESSION['poso1'] = 0;
							$_SESSION['poso2'] = 0;
							$_SESSION['poso3'] = 0;
							$_SESSION['poso4'] = 0;
							$_SESSION['poso5'] = 0;
							$_SESSION['exp'] ='No';
							
							$_SESSION['poso0'] = $_POST['quan0'];
							$_SESSION['poso1'] = $_POST['quan1'];
							$_SESSION['poso2'] = $_POST['quan2'];
							$_SESSION['poso3'] = $_POST['quan3'];
							$_SESSION['poso4'] = $_POST['quan4'];
							$_SESSION['poso5'] = $_POST['quan5'];
							
						$poso0 	=$_SESSION['poso0'] ;
						$poso1	=$_SESSION['poso1'] ;
						$poso2	=$_SESSION['poso2'] ;
						$poso3	=$_SESSION['poso3'] ;
						$poso4	=$_SESSION['poso4'] ;
						$poso5	=$_SESSION['poso5'];
				
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
		
?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<title>PcExperts</title>
		<link rel="stylesheet" type="text/css" href="style_1.css">
		<script src="script.js"> </script>
		
	</head>	
	
		<body>
			<style> <?php include 'style_1.css'; ?> </style>
			<div>
			<b class="open-log"><b style="color:white">user:  </b>
				<?php
					include "config.php";
					
					$sql = "SELECT us FROM logged";
					$result = $conn->query($sql);
					if($result->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{echo $row['us'];}
					}
				?><br><br>
				<a href="home.php">
					Logout
				</a>
			</b>
			
			<a href="home3.php">
			<img src="pcexpertsicon.jpg" alt="pc_experts_icon" class="logo">
			</a>
			
			<button id="open" class="open-button" onclick="openForm()" >Καλάθι</button>
		  

			<b class="form-popup" id="myForm">
				<form class="form-container">
				<h1>Καλάθι</h1>
				<?php
						include "config.php";	
							
							$sql = "SELECT * FROM cate_laptop";
							$result = $conn->query($sql);

							$sum = 0;
							while($row = $result->fetch_assoc()){
								if( $row['poso'] > 0  ){
									echo $row['title']."<img src='".$row['foto']."' alt='laptop_icon' id='ico3' class='logo'>
									 x".$row['poso'].
									" &euro; ".$row['poso']*$row['timi']."<br><br>";
									
									$sum = $sum +$row['poso']*$row['timi'];
							
								}
				
							}	
							
							$_SESSION['exp'] = $_POST['exp'];
							$exp = $_SESSION['exp'];
							if( $exp =='Yes'  ){$sum = $sum +6;
							echo "<tr><th colspan='3'>Συνολικό ποσό παραγγελίας και η express παράδοση αξίας 6 ευρό : &euro;".$sum."</th></tr>";	}
							else {echo"<tr><th colspan='3'>Συνολικό ποσό παραγγελίας χωρίς express παράδοση :".$sum."</th></tr>";}
						?>
				<button type="submit" class="btn" onclick="ok()">Επιβεβαίωση</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Κλείσιμο</button>
				
				</form>
			</b>
			
			<table class="table_style3">
				<tr>
					<th colspan="3" class="login1">Η αγορά ολοκληρώθηκε με επιτυχία </th></tr>
						<?php
							include "config.php";	
							$sql = "CREATE TABLE cart (title text, foto text,poso int, timi int)";
							$result = $conn->query($sql); 
							
							
							
							
							$sql = "SELECT * FROM cate_laptop";
							$result = $conn->query($sql);

							$sum = 0;
							while($row = $result->fetch_assoc()){
								if( $row['poso'] > 0  ){
									echo "<tr><td class='bak1'>".$row['title']."<img src='".$row['foto']."' alt='laptop_icon' id='ico2' class='logo'>
									</td><td class='bak1'>Ποσότητα τεμαχίου : x".$row['poso'].
									"</td><td class='bak1'>Τιμή σειράς:  &euro; ".$row['poso']*$row['timi']."</td></tr>";
									
									$sum = $sum + $row['poso']*$row['timi'];
							
								}
				
							}
							
							$_SESSION['exp'] = $_POST['exp'];
							$exp = $_SESSION['exp'];
								if( $exp =='Yes'  ){$sum = $sum +6;
							echo "<tr><th colspan='3'>Συνολικό ποσό παραγγελίας και η express παράδοοη αξίας 6 ευρό : &euro;".$sum."</th></tr>";	}
							else {echo"<tr><th colspan='3'>Συνολικό ποσό παραγγελίας χωρίς express παράδοση :".$sum."</th></tr>";}	
						?>
				
			</table>
		
			</div>		
		</body>
		<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
</html>	