<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SCHOOL MANAGEMENT SYSTEM </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/b1.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					Vaibhav Vishnu Gawade<BR>
					Ravalnath Galli, Asagaon<BR>
					Tal Chandgad Dist Kolhapur<BR>
					Maharashtra -416509<BR>
					Mail - vaibhavgawade225@gmail.com<br>Phone - 9404962252
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>SCHOOL MANAGEMENT SYSTEM </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>