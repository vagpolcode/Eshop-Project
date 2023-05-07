<?php

	include "config.php";
	include "new_cart.php";
	
	$sql = "CREATE TABLE users (username text, password text, eponimo text, onoma text, mail text)";
	$result = $conn->query($sql); 
	$sql = "CREATE TABLE logged (us text, pa text)";
	$result = $conn->query($sql);
	$sql = "DELETE FROM logged";
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
		<a href="home.php">
			<img src="pcexpertsicon.jpg" alt="pc_experts_icon" class="logo">
		</a>
		
		<form action="home2.php" method="post">
		<table class="login1">
			<tr>
				<td> username: <input type="text" placeholder="type here" name="username" id="user" required>
					<br> password: <input type="password" placeholder="type here" name="password" id="pass" required> 
				</td>
				<td> 
					<input type="submit" value="login" id="subm2"> 
				</td>	
			</tr>	
			<tr>
				<td> or <a href="register.php" id="reg">register</a> here
				</td>
			</tr>	
		</table>
		</form>
		
		<table class="table_style3">
			<tr>
				<td>
					<img src="fut_des.jpg" id="ico_home">
					<img src="red_lap.jpg" id="ico_home" >
					<img src="end_des.jpg"  id="ico_home">
				</td>	
			</tr>
		</table>
		<p>Το www.pcexperts.gr είναι το ηλεκτρονικό κατάστημα έκθεσης και διάθεσης των προϊόντων μέσω του 
		Διαδικτύου της ελληνικής ανώνυμης εταιρείας «PcExperts », που εδρεύει στη Θεση Περιστέρι Αττικής, στην Ελλάδα 
		(Δ.Ο.Υ Αθηνών). Πριν εισέλθετε στο ηλεκτρονικό κατάστημα 
		και περιηγηθείτε στην ιστοσελίδα μας, σας καλούμε να συμβουλευτείτε τους κάτωθι όρους και προϋποθέσεις, 
		που εφαρμόζονται ειδικά για τη χρήση του ηλεκτρονικού καταστήματος του PcExperts , που βρίσκεται 
		στην διεύθυνση www.pcexperts.gr.
		</p>
		
		<img src="tropoi.jpg" alt="tropoi_plhromhs" id="foto">
		<p>
		Το PcExperts δεσμεύεται ως προς την πληρότητα και την εγκυρότητα των πληροφοριών που παρατίθενται 
		στην ιστοσελίδα της www.pcexperts.gr,τόσο όσον αφορά την ύπαρξη των ουσιωδών χαρακτηριστικών που κατά περίπτωση 
		περιγράφονται για κάθε προϊόν που διαθέτει, όσο και για την ακρίβεια των στοιχείων που αφορούν τις παρεχόμενες,
		από το ηλεκτρονικό κατάστημα του PcExperts, υπηρεσιών, υπό την επιφύλαξη τυχόν τεχνικών ή τυπογραφικών 
		λαθών, που έχουν διαφύγει της προσοχής ή έχουν προκύψει ακούσια ή λόγω τυχόν διακοπών λειτουργίας της ιστοσελίδας
		εκ λόγων ανωτέρας βίας.
		</p>
		
		
		</div>
	</body>	
	<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
</html>	
	