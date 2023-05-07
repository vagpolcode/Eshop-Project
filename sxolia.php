<?php

	include "config.php";
	include 'com.php';
	include "cart.php";
	date_default_timezone_set('Europe/Athens');	
	

	$sql = "CREATE TABLE coms (vid text, date text, sxolio text, file text, stars int)";
	$result = $conn->query($sql); 
	$sql = "DELETE FROM file_click";
	$result = $conn->query($sql);
	$sql = "CREATE TABLE file_click (file text)";
	$result = $conn->query($sql); 	
	$sql = "CREATE TABLE second_coms (vid text, date text, sxolio text,file text, stars int)";
	$result = $conn->query($sql); 
	



	
	$conn->close();
?>


<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8">
		<title>PcExperts</title>
		
		<script src="script.js"> </script>
		
	</head>	
	
	<body>
	<style> <?php include 'style_1.css'; ?> </style>
		
		<div>
		<a href="home3.php">
			<img src="pcexpertsicon.jpg" alt="pc_experts_icon" class="logo">
		</a>	
		
		<form action='choose.php' method='post'>
						<input type='submit' value='back' id='subm' name='username'> 
					</form>
					
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
							
							$sql = "SELECT * FROM cate_desktop";
							$result = $conn->query($sql);

							
							while($row = $result->fetch_assoc()){
								if( $row['poso'] > 0  ){
									echo $row['title']."<img src='".$row['foto']."' alt='laptop_icon' id='ico3' class='logo'>
									 x".$row['poso'].
									" &euro; ".$row['poso']*$row['timi']."<br><br>";
									
									$sum = $sum +$row['poso']*$row['timi'];
							
								}
				
							}
								
							
							$exp = $_SESSION['exp'];
								if( $exp  =='Yes'  ){$sum = $sum +6;
							echo "<tr><th colspan='3'>Συνολικό ποσό παραγγελίας και η express παράδοση αξίας 6 ευρό : &euro;".$sum."</th></tr>";	}
							else {echo"<tr><th colspan='3'>Συνολικό ποσό παραγγελίας χωρίς express παράδοση :".$sum."</th></tr>";}	
						?>
				<button type="submit" class="btn" onclick="ok()">Επιβεβαίωση</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Κλείσιμο</button>
				
				</form>
			</b>
		
		<table>
			<tr>
				
				
				<td>
				
				
				<?php echo
				"<form method='post' action='".setcom($conn)."' enctype='multipart/form-data'>
					<input type='hidden' name='vid' value='an'>
					<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
					<input type='file' name='file' class='put'>
					<textarea name='message'></textarea><br><br>
					<select id='stars' name='stars' value='stars'>
								<option value='0'>None</option>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								</select>
					<button type='submit' id='b1' name='comsub'>comment</button>
				</form>	";
				
				
				getcom($conn);
				?>
				</td>
				
	
			</tr>
				<td>
			
				
			
				</td>
			</tr>
		</table>
	</div>
	</body>
	<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
</html>	