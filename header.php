<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>StudentHissen </title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<meta http-equiv="content-type content="text/html; charset="UTF-8">

</head>
<body>
	<div class="topBar">
		
	
		<div class="logo_div">
			<img src="image/logo.png" class="logo" alt="logo">		
		</div>

		
		<button class="home_btn"><a href="index.php">Hem</a></button>
		<button id="connected_companies_btn" class="companies_btn"><a href="companies.php">Visa anslutna företag</a></button>
		<button id="guide_btn"><a href="guide.php">Vad är en pitch?</a></button>
		<button id="connected_companies_btn_short" class="companies_btn"><a href="companies.php">Företag</a></button>
		<button id="guide_btn_short"><a href="guide.php">pitch?</a></button>
			
		
		
		<button class="about_us_btn"><a href="about_us.php">Om oss</a></button>
	
		<div class="dropdown">
			<?php
			if(isset($_SESSION['u_id'])){
				echo '<button class="drop-btn">Mina sidor</button>';
				echo '<div class="dropdown-content" >';
				echo '<a href="profile.php"><button>Mina sidor</button></a>';
				echo '<form action="includes/logout.php">';
				echo '<button onclick=document.getElementById("id02").style.display="block" style="width:auto;">Logga ut</button>';
				echo '</form>';
				echo '</div>';			
			}
			else{
				echo '<button class="drop-btn">Logga in</button>';
				echo '<div class="dropdown-content">';
				echo '<button><a href="login_fail.php">Student</a></button>';
				echo '<button><a href="login.php">Företag</a></button>';
				echo '</div>';
			}
			?>
		</div>
	</div>		
	<div id="id01" class="modal">
		<div class="modal-content animate">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="image/avatar.png" alt="Avatar" class="avatar">
			</div>
			<form class="signup-form" action="includes/login.inc.php" method="POST">
			<div class="container">
				
				<label for="email"><b>E-mail</b></label>
				<input type="text" placeholder="Enter E-mail" name="email" required>

				<label for="pwd"><b>Lösenord</b></label>
				<input type="password" placeholder="Enter Password" name="pwd" required>			
				<button class="loginbtn" type="submit" name="submit">Logga in</button>
				</form>
				<label>

				<input type="checkbox" checked="checked" name="remember"> Kom ihåg mig?</label>
			</div>
			
			
			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Avbryt</button>
				<span class="signup">Registrera dig <a href="signup.php">här!</a></span>
				<span class="psw">Glömt <a href="#">lösenord?</a></span>
			</div>
			
		</div>
	</div>
	<div id="id02" class="modal">
		<div class="modal-content animate">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="image/avatar.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
				<label for="uname"><b>Företagsnamn</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Lösenord</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
							
				<a href="profileCompany.php"><button class="loginbtn" type="submit">Logga in</button></a>
				<label>
				<input type="checkbox" checked="checked" name="remember"> Kom ihåg mig?</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Avbryt</button>
				<span class="signup">Ansök om medlemsskap <a href="apply.php">här!</a></span>
				<span class="psw">Glömt <a href="#">lösenord?</a></span>
			</div>
</div>
	</div>

	<script>
		// Get the modal
		var modal1 = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal1) {
				modal1.style.display = "none";
			}
		}
		// Get the modal
		var modal2 = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal2) {
				modal2.style.display = "none";
			}
		}
	</script>


</body>
</html>




			
	







