<?php
	include "config.php";	
	include "cart.php";
				
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

					
		
		<table class="table_style3">
			<tr class="table_category">
				<th colspan="5" class="login1">Πλατφόρμα επεξεργασίας Διαχειριστή : <form action='admin2.php' method='post'>
						<input type='submit' value='edit' id="subm" name='username'> 
					</form></td>
			</tr>	
			<tr class="table_category">
				 <?php
					$sql = "SELECT * FROM cate_laptop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'PurpleNight'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i3</p><p>ram: 4gb</p><p>disk: 120gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;399</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check0()" value="off"> </td>
				<td><h1>Ποσότητα: </h1> <select id="quan0" name="quan0" onchange="buy()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_laptop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'RedFire'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i3 gpu: gtx 1030</p><p>ram: 8gb</p><p>disk: 240gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;459</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check1()" value="off">  </td>
				<td><h1>Ποσότητα:</h1> <select id="quan1" name="quan1" onchange="buy()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_laptop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'BlackShadow'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i5</p><p>ram: 4gb</p><p>disk: 240gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;599</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check2()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select id="quan2" name="quan2" onchange="buy()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_laptop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'WhiteCrystal'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i5 gpu: mx 230</p><p>ram: 8gb</p><p>disk: 240gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?></td>
				<td><h1>Price</h1><p>&euro;629</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check3()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select id="quan3" name="quan3" onchange="buy()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_laptop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'GreenSlayer'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i5 gpu: gtx 1050</p><p>ram: 8gb</p><p>disk: 500gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;899</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check4()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select id="quan4" name="quan4" onchange="buy()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_laptop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'UltraSteel'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i7 gpu: mx 250</p><p>ram: 16gb</p><p>disk: 500gb m2</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;1049</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check5()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select id="quan5" name="quan5" onchange="buy()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
			
			<tr class="table_category">
				<th colspan="5" class="login1">Παρακαλούμε επιλέξτε ποιο ή ποια απο τα παρακάτω προϊόντα επιθυμείτε για
				αγορά : </td>
			</tr>	
			<tr class="table_category">
				 <?php
					$sql = "SELECT * FROM cate_desktop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'LittleOne'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: celeron</p><p>ram: 4gb</p><p>disk: 500gb hdd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;299</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check0()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select  id="quan0" name="quan0" onchange="buy1()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_desktop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'BlackDesk'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i3</p><p>ram: 4gb</p><p>disk: 240gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;399</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check1()" value="off">  </td>
				<td><h1>Ποσότητα:</h1> <select id="quan1" name="quan1" onchange="buy1()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_desktop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'DarkCrystal'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i5</p><p>ram: 8gb</p><p>disk: 240gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;529</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check2()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select id="quan2" name="quan2" onchange="buy1()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_desktop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'PowerDesk'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i5 gpu: gtx 1050</p><p>ram: 8gb</p><p>disk: 240gb + ssd 1tb hdd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;699</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check3()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select id="quan3" name="quan3" onchange="buy1()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_desktop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'FutureChrome'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i7 gpu: gtx 1060</p><p>ram: 16gb</p><p>disk: 500gb ssd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?> </td>
				<td><h1>Price</h1><p>&euro;849</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check4()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select  id="quan4" name="quan4" onchange="buy1()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
			<tr class="table_category">
				<?php
					$sql = "SELECT * FROM cate_desktop";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					if($row['title'] == 'AlienView'){
					$foto = $row['foto'];
					$title = $row['title'];}}
					echo"<td><h1> ".$title." </h1> <p>cpu: i9 gpu: rtx 2070</p><p>ram: 32gb</p><p>disk: 500gb m2 + 2tb hdd</p>  </td>
				<td><img src='".$foto."' alt='laptop_icon' id='ico2' class='logo'>	
					</a>";
					?>  </td>
				<td><h1>Price</h1><p>&euro;1499</p></td>
				<td class="buy"><input type="checkbox" id="subm3" onclick="check5()" value="off"> </td>
				<td><h1>Ποσότητα:</h1> <select  id="quan5" name="quan5" onchange="buy1()">
								<option value="0">None</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								</select>  </td>
			</tr>	
		</table>
		
		
	</div>
	</body>
	<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
</html>	