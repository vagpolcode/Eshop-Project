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
			<form action="process.php" method="post">
			
			<table class="table_style3">
				<tr>
					<th colspan="2" class="login1">Παρακαλούμε συμπληρώστε τα προσωπικά σας στοιχεία : </td>
				</tr>	
				<tr>
					<td>Επώνυμο :  </td>
					<td> <input type="text" placeholder="type here" name="eponimo" required> </td>
				</tr>	
				<tr>
					<td>Όνομα :  </td>
					<td> <input type="text" placeholder="type here" name="onoma" required> </td>
				</tr>
				<tr>
					<td>new username :  </td>
					<td> <input type="text" placeholder="type here" name="user" required>  </td>
				</tr>
				<tr>
					<td>new password :  </td>
					<td> <input type="password" placeholder="type here" name="pass" required> </td>
				</tr>	
				<tr>
					<td>new email :  </td>
					<td> <input type="email" placeholder="type here" name="mail" required> </td>
				</tr>	
				<tr>
					<td></td><td><input type="submit" value="Εγγραφή" name="register" name="subm"> </td>
				</tr>
			</table>
			
			
			</form>

			</div>
		</body>
		<footer>Copyright © 2020 PcExperts, Inc. All rights reserved.</footer>
	
</html>		
		