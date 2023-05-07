<?php
	include "config.php";	

		$sql = "DELETE FROM cate_desktop";
		$result = $conn->query($sql);
		$sql = "CREATE TABLE cate_desktop (title text, foto text,poso int, timi int)";
		$result = $conn->query($sql);
	session_start();
							$_SESSION['dposo0'] = 0;
							$_SESSION['dposo1'] = 0;
							$_SESSION['dposo2'] = 0;
							$_SESSION['dposo3'] = 0;
							$_SESSION['dposo4'] = 0;
							$_SESSION['dposo5'] = 0;
							$_SESSION['exp'] ='No';
							
							$_SESSION['dposo0'] = $_POST['quan0'];
							$_SESSION['dposo1'] = $_POST['quan1'];
							$_SESSION['dposo2'] = $_POST['quan2'];
							$_SESSION['dposo3'] = $_POST['quan3'];
							$_SESSION['dposo4'] = $_POST['quan4'];
							$_SESSION['dposo5'] = $_POST['quan5'];
							
						$dposo0 =$_SESSION['dposo0'] ;
						$dposo1	=$_SESSION['dposo1'] ;
						$dposo2	=$_SESSION['dposo2'] ;
						$dposo3	=$_SESSION['dposo3'] ;
						$dposo4	=$_SESSION['dposo4'] ;
						$dposo5	=$_SESSION['dposo5'];
				

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
							
							$sql = "SELECT * FROM cate_desktop";
							$result = $conn->query($sql);

							$sum = 0;
							while($row = $result->fetch_assoc()){
								if( $row['poso'] > 0  ){
									echo $row['title']."<img src='".$row['foto']."' alt='desktop_icon' id='ico3' class='logo'>
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
						
							
							
							
							$sql = "SELECT * FROM cate_desktop";
							$result = $conn->query($sql);

							$sum = 0;
							while($row = $result->fetch_assoc()){
								if( $row['poso'] > 0  ){
									echo "<tr><td class='bak1'>".$row['title']."<img src='".$row['foto']."' alt='desktop_icon' id='ico2' class='logo'>
									</td><td class='bak1'>Ποσότητα τεμαχίου : x".$row['poso'].
									"</td><td class='bak1'>Τιμή σειράς:  &euro; ".$row['poso']*$row['timi']."</td></tr>";
									
									$sum = $sum + $row['poso']*$row['timi'];
							
								}
				
							}
							
							$_SESSION['exp'] = $_POST['exp'];
							$exp = $_SESSION['exp'];
								if( $exp =='Yes'  ){$sum = $sum +6;
							echo "<tr><th colspan='3'>Συνολικό ποσό παραγγελίας και η express παράδοση αξίας 6 ευρό : &euro;".$sum."</th></tr>";	}
							else {echo"<tr><th colspan='3'>Συνολικό ποσό παραγγελίας χωρίς express παράδοση :".$sum."</th></tr>";}		
						?>
				
			</table>
		
			</div>		
		</body>
		<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
</html>	