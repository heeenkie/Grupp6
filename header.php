<!DOCTYPE html>
<html lang="en">
<head>
	<title>StudentHissen </title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<meta http-equiv="content-type content="text/html; charset="UTF-8">

</head>
<body>
	<div class="topBar">
		
	
		<div class="logo_div">
			<p class="logo"> StudentHissen </p>		
		</div>

		
		<button class="home_btn"><a href="index.php">Hem</a></button>
		<button class="anslutna_företag_btn"><a href="anslutna_företag.php">Visa anslutna företag</a></button>
		<button><a href="extra.php">Extra</a></button>
			
		
		
		<button class="about_us_btn"><a href="about_us.php">Om oss</a></button>
	
		<div class="dropdown">
			<button class="drop-btn">Mina sidor</button>
			<div class="dropdown-content">
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Logga in student</button>
				<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Logga in företag</button>
			</div>
		</div>
	</div>		
	<div id="id01" class="modal">
		<form class="modal-content animate" action="/action_page.php">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="img_avatar2.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
				<label for="uname"><b>Användarnamn</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Lösenord</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
							
				<button class="loginbtn" type="submit">Logga in</button>
				<label>
				<input type="checkbox" checked="checked" name="remember"> Kom ihåg mig?</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Avbryt</button>
				<span class="signup"> <a href="signup.php">Registrera dig här </a></span>
				<span class="psw">Glömt <a href="#">lösenord?</a></span>
			</div>
		</form>
	</div>
	<div id="id02" class="modal">
		<form class="modal-content animate" action="/action_page.php">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="img_avatar2.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
				<label for="uname"><b>Företagsnamn</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Lösenord</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
							
				<button class="loginbtn" type="submit">Logga in</button>
				<label>
				<input type="checkbox" checked="checked" name="remember"> Kom ihåg mig?</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Avbryt</button>
				<span class="psw">Glömt <a href="#">lösenord?</a></span>
			</div>
		</form>
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




			
	







