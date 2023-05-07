<?php
	include "config.php";	
	
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

					
		<?php echo
				"
					<p>Πρόσθαισε φωτογραφία :
					<input type='file' name='file' class='put'></p>
					<p>Πρόσθαισε περιγραφή :
					<textarea name='message'></textarea><br><br></p>
					<p>Πρόσθαισε ποσότητα :
					<select id='stars' name='stars' value='stars'>
								<option value='0'>None</option>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								</select></p>
					<p>Πρόσθαισε τιμή :
					<textarea></textarea><br><br></p>
					<button type='submit' id='b1' name='comsub'>Εισαγωγή</button>
				";
				
				
				
				?>
		
		
		
	</div>
	</body>
	<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
</html>	