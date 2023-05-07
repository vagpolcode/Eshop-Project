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
	

<button id="open" class="open-button" onclick="openForm()" >Καλάθι</button>
		  

			<b class="form-popup" id="myForm">
				<form class="form-container">
				<h1>Καλάθι</h1>
				
						<b id="agora0"> purplenight x 0   σύνολο  &euro;0</b><br>
						<b id="agora1"> RedFire x 0  σύνολο  &euro;0</b><br>
						<b id="agora2"> BlackShadow x 0  σύνολο  &euro;0</b><br>
						<b id="agora3"> WhiteCrystal x 0  σύνολο  &euro;0</b><br>
						<b id="agora4"> GreenSlayer x 0  σύνολο  &euro;0</b><br>
						<b id="agora5"> UltraSteel  x 0  σύνολο  &euro;0</b><br><br>
						<b id="agora">Σύνολο στο καλάθι: 0</b><br>
						
				<button type="submit" class="btn" onclick="ok()">Επιβεβαίωση</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Κλείσιμο</button>
				<button type="button" class="btn cancel" onclick="buy3()">Άδιασμα</button>
				</form>
			</b>

	
	<a href="home3.php">
			<img src="pcexpertsicon.jpg" alt="pc_experts_icon" class="logo">
		</a>	
		
		<form action='choose.php' method='post'>
						<input type='submit' value='back' id="subm" name='username'> 
					</form>
					
		<form action="feedback.php" method="post">
		<table class="table_style3">
			<tr class="table_category">
				<th colspan="5" class="login1">Παρακαλούμε επιλέξτε ποιο ή ποια απο τα παρακάτω προϊόντα επιθυμείτε για
				αγορά : </td>
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
			
			
			
			<tr>
				<td colspan="3">
					
					<table class="table_style2">
						<tr>
							<th colspan="2">Παρακαλούμε συμπληρώστε τα στοιχεία για την ολοκλήρωση της αγοράς: </td>
						</tr>	
						<tr>
							<td>Περιοχή :  </td>
							<td> <input type="text" placeholder="type here" required> </td>
						</tr>
						<tr>
							<td>Διεύθυνση :  </td>
							<td> <input type="text" placeholder="type here" required> </td>
						</tr>	
						<tr>
							<td>Ταχυδρομικός Αριθμός :  </td>
							<td> <input type="number" placeholder="type here" required> </td>
						</tr>
						<tr>
							<td>Αριθμός τηλεφώνου :  </td>
							<td> <input type="number" placeholder="type here" required>  </td>
						</tr>
						<tr>
							<td>Τρόπος πληρωμής :  </td>
							<td>  <select required>
								<option value="">None</option>
								<option value="card">Χρεωστική κάρτα</option>
								<option value="metr">Μετρητά με την παράδωση</option>
								</select> 
							</td>
						</tr>	
						<tr>
							<td>Αριθμός κάρτας :  </td>
							<td> <input type="number" placeholder="αν είναι μετρητά γράψε 1" required> </td> </form>
						</tr>
						<tr>
							<td>Ημερομηνία παράδωσης :  </td>
							<td> <input type="date" placeholder="type here" min="2020-04-26" required> </td>
						</tr>
						<tr>
							<td>Express παράδωση :</td>
							<td> Ναι<input type="radio" name="exp" id="Yes" value="Yes" required>
								Όχι<input type="radio" name="exp" id="No" value="No" required>
							</td>
						</tr>
					</table>	
					
				</td>
			<td>	
				<input type="submit" value="Ολοκλήρωση αγοράς" id="subm">
				</form>
			</td>
		</tr>
				<tr><td> <input type="button" name="ΤΥΧΑΙΑ ΕΠΙΛΟΓΗ" value="ΤΥΧΑΙΑ ΕΠΙΛΟΓΗ" id="ran" onclick="rand()"> </td></tr>
		</table>
		
		
	</div>
	</body>
	<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
</html>	