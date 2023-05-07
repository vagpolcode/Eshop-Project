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
		
		<table class="login1">
			<tr><td>				<?php

					include "config.php";
					
					
					$username = $_POST['username'];
					$password = $_POST['password'];
					$i = 0;
					$sql = "DELETE FROM logged";
					$result = $conn->query($sql);
	
					$sql = "SELECT username, password FROM users";
					$result = $conn->query($sql);

						
						
					if($result->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{	if($row["username"] == $username && $row["password"] == $password)
							{
							echo "Wellcome ".$row["username"];
							$sql = "INSERT INTO logged (us,pa) VALUES ('$username','$password')";
							$result = $conn->query($sql);
							if($row["username"] == 'admin' && $row["password"] == 'admin'){$i = 2;}
							else{$i = 1;}
							break;	
							}
						}
						if($i == 0){ echo "Try again!";
									echo "<td>
										<form action='home.php' method='post'>
										<input type='submit' value='Επόμενο'  id='subm2' > 
										</form>
										</td>";
						}
						elseif($i == 1){
							echo "<td>
								<form action='choose.php' method='post'>
								<input type='submit' value='Επόμενο' id='subm2' > 
								</form>
								</td>";
							
						}
						elseif($i == 2){
							echo "<td>
								<form action='admin.php' method='post'>
								<input type='submit' value='Επόμενο' id='subm2' > 
								</form>
								</td>";
							
						}
					}
					else{
						echo "Δεν υπάρχει χρήστης, δοκιμάστε για νέα εγγραφή";
					}
					

					$conn->close();

				?>
				</td>
				</tr>
		</table>
		
		
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