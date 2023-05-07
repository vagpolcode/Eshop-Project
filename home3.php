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
							echo "<tr><th colspan='3'>Συνολικό ποσό παραγγελίας και η express παράδοση αξίας 6 ευρό : &euro;".$sum."</th></tr>";	}
							else {echo"<tr><th colspan='3'>Συνολικό ποσό παραγγελίας χωρίς express παράδοση :".$sum."</th></tr>";}	
						?>
				<button type="submit" class="btn" onclick="ok()">Επιβεβαίωση</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Κλείσιμο</button>
				
				</form>
			</b>
		
		
		<table class="login1">
			<tr><td>				<?php
					include "config.php";
	
					$sql = "SELECT * FROM logged";
					$result = $conn->query($sql);
					while($row = $result->fetch_assoc()){
					echo "Wellcome ". $row['us'];}
					echo "<td>
								<form action='choose.php' method='post'>
								<input type='submit' value='Επόμενο' id='subm2' > 
								</form>
								</td>";
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