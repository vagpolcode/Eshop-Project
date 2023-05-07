<?php 
	

		function setcom2($conn) {
			include "config.php";
			
			if(isset($_POST['comsub'])) {
				$vid = $_POST['vid'];
				$date = $_POST['date'];
				$message = $_POST['message'];
				$stars = $_POST['stars'];
				$i = $_POST['fot'];

				$sql = "SELECT * FROM logged";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()){
				$use = $row['us'];}
			
				$sql = "INSERT INTO second_coms (vid, date, sxolio,file, stars) VALUES ('$use','$date','$message','$i', '$stars')";
				$result = $conn->query($sql);
		
		
			}
		}
		
		
		
		function getcom2($conn) {
			include "config.php";
			
			$sql = "SELECT * FROM file_click";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()){
			$file = $row['file'];
			}
			
			$sql = "SELECT * FROM second_coms";
			$result = $conn->query($sql);
			
			$i = 0;
			$sum = 0;
			echo "<br><br><br><br><h1 class='table_style'>Comment Session:</h1>";
			while($row = $result->fetch_assoc()){
				if( $row['file'] == $file  ){
				echo "<table class='bak'>";
				
				echo "<tr><td><p>".$row['vid']."</p></td>
				</tr>";
				echo "<tr><td class='table_style2'>".$row['date']."<br></td></tr>";
				echo "<tr><td>Αστέρια :".$row['stars']."</td></tr>";
				echo "<tr><td>".$row['sxolio']."<br><br></table>";
				$sum = $sum + $row['stars'];
				$i = $i + 1;
				}
			}
			if($i > 0)
			echo "<p class='login1'>Μέσος Όρος Συνολικών Αστεριών :".$sum/$i."</p>";
			
		}
		

?>