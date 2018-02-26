<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<meta http-equiv="content-type content="text/html; charset="UTF-8">

</head>
<body>
	<div class="topBar">
		<div class="logo_div">
				<p class="logo">StudentHissen</p>	
		</div>

		
		<button class="hem_btn"><a href="index.php">Hem</a></button>
		<button class="anslutna_företag_btn"><a href="anslutna_företag.php">Visa anslutna företag</a></button>
		<button><a href="extra.php">Extra</a></button>
			
		
		
		<button class="om_oss_btn"><a href="om_oss.php">Om oss</a></button>
	
		<div class="dropdown">
			<button class="drop-btn">Mina sidor</button>
			<div class="dropdown-content">
			
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Logga in student</button>
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
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
							
				<button class="loginbtn" type="submit">Login</button>
				<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</div>

	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

</body>
</html>




			
	







