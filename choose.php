<?php
	include "config.php";	
	include "cart.php";
		$sql = "DELETE FROM cate";
		$result = $conn->query($sql);		
		$sql = "CREATE TABLE cate (title text, foto text)";
		$result = $conn->query($sql); 

				$title = "laptop";
				$foto = "lap.jpg";
				$sql = "INSERT INTO cate (title, foto) VALUES ('$title','$foto')";
				$result = $conn->query($sql);
				
				$title = "desktop";
				$foto = "desk.jpg";
				$sql = "INSERT INTO cate (title, foto) VALUES ('$title','$foto')";
				$result = $conn->query($sql);
				
				$title = "comments";
				$foto = "com.png";
				$sql = "INSERT INTO cate (title, foto) VALUES ('$title','$foto')";
				$result = $conn->query($sql);
				
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
							echo "<tr><th colspan='3'>Συνολικό ποσό παραγγελίας και η express παράδωση αξίας 6 ευρό : &euro;".$sum."</th></tr>";	}
							else {echo"<tr><th colspan='3'>Συνολικό ποσό παραγγελίας χωρίς express παράδωση :".$sum."</th></tr>";}		
						?>
				<button type="submit" class="btn" onclick="ok()">Επιβεβαίωση</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Κλείσιμο</button>
				</form>
			</b>
		
		<table class="table_style3">
			<tr>
				<th colspan="2" class="login1">
					Επέλεξε την κατηγορία που επιθυμείς :
				</th>
			</tr>
			<tr>
				<td> 
					<?php
					$sql = "SELECT * FROM cate";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'laptop'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo 
					$title.
					"<span class='tooltip'>
					<a href='laptop.php'>
					<img src='".$foto."' alt='laptop_icon' id='ico' class='logo'>	
					</a>";
					?>
					<span class="tooltiptext">Εδώ θα βρείτε τις καλύτερες προσφορές για laptop πατήστε πάνω στην εικόνα για συνέχεια.</span></span>
				</td>
				<td> 
				
				<?php
					$sql = "SELECT * FROM cate";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'desktop'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo 
					$title.
					"<span class='tooltip'>	
					<a href='desktop.php'>
					<img src='".$foto."' alt='desktop_icon' id='ico' class='logo'>	
					</a>";
					
					
					?>
					<span class="tooltiptext">Εδώ θα βρείτε τις καλύτερες προσφορές για desktop πατήστε πάνω στην εικόνα για συνέχεια.</span></span>
				</td>
			</tr>
			<tr>
				<td><?php
					$sql = "SELECT * FROM cate";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'comments'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo 
					$title.
					"<span class='tooltip'>	
					<a href='sxolia.php'>
					<img src='".$foto."' alt='comments_icon' id='ico' class='logo'>	
					</a>";
					
					$conn->close();
					?>
					<span class="tooltiptext">Εδώ θα βρείτε όλα τα σχόλια και τις αξιολογήσεις των προϊόντων.</span></span>
				</td>
			
			</tr>
		</table>
	</div>
	</body>
	<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
	
</html>	