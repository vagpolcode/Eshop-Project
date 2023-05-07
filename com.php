<?php 
	

		function setcom($conn) {
			include "config.php";
			
			if(isset($_POST['comsub'])) {
				$vid = $_POST['vid'];
				$date = $_POST['date'];
				$message = $_POST['message'];
				$stars = $_POST['stars'];
				
				$name = $_FILES['file']['name'];			
				$location = $_FILES['file']['tmp_name'];			
				$size = $_FILES['file']['size'];			
				$type = $_FILES['file']['type'];	
				$folder = "C:/xampp/htdocs/apallaktikh";	
				move_uploaded_file($location,$folder.$name);
	
				
				
				$sql = "SELECT * FROM logged";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()){
				$use = $row['us'];}
			
				$sql = "INSERT INTO coms (vid, date, sxolio, file, stars) VALUES ('$use','$date','$message','$name','$stars')";
				$result = $conn->query($sql);
		
		
			}
		}
		
		
		
		function getcom($conn) {
			include "config.php";
			
			
			
			$sql = "SELECT * FROM coms";
			$result = $conn->query($sql);
			
			$i = "";
			echo "<br><br><br><br><h1 class='table_style'>Comment Session:</h1>";
			while($row = $result->fetch_assoc()){
				
				$i = $row['file'];
				echo "<table class='bak'>";
				
				echo "<tr><td><p>".$row['vid']."</p></td>
				</tr>";
				echo "<tr><td class='table_style2'>".$row['date']."<br></td></tr>";
				echo "<tr><td>Αστέρια :".$row['stars']."</td></tr>";
				echo "<tr><td>".$row['sxolio']."<br><br></td><td>";	
				echo "<form method='post' action='sxolia2.php'>
				<input type='hidden' name='fot' id='fot' value='".$i."' required>
					
				<input type='submit' name='view' value='view'>
				<img src='".$row['file'].
				"'id='icocom' alt=''>";

				echo "</form>";
				echo "</td></tr>";
				echo "</table>";
			}
			
		}
		

?>