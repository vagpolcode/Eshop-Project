
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
			<a href="home.php">
				<img src="pcexpertsicon.jpg" alt="pc_experts_icon" class="logo">
			</a>
			
			<p class="table_style3"><?php

	include "config.php";
	
	$eponimo = $_POST['eponimo'];
	$onoma = $_POST['onoma'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$mail = $_POST['mail'];
	$idio = 0;
	
	$sql = "SELECT (username) FROM users";
	$result = $conn->query($sql);
	if($result->num_rows >0){
					
		while($row = $result->fetch_assoc()){
		if($user == $row['username']){
			echo "Select Another username</p><br>
			<form action='register.php'>
			<input type='submit' value='back' id='subm2' name='username'> 
			</form>";
			$idio = 1;
			break;
		}
					}
	}
	
	if($idio == 0){
		$sql = "INSERT INTO users (username, password, eponimo, onoma, mail) VALUES ('$user','$pass','$eponimo','$onoma','$mail')";
		$result = $conn->query($sql);
		
		if($result == TRUE)
		{
			echo "Τα στοιχεία σας αποθηκεύτηκαν με επιτυχια!<br><br>Πατήστε στο εικονίδιο για να επιστρέψετε στην Αρχική σελίδα.</p>";
		}
		else{
			echo "Error inserting record: </p>". $conn->error;
		}
	}
	$conn->close();

	
?>
	</div>
		</body>
		<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
	
</html>		