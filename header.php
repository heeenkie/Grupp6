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
				<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Logga in företag</button>
			</div>
			
		</div>	
		</div>


<script>
	jQuery(document).ready(function($))
	{
	var screenSizeLimit = 1350;
	if ($(window).width() < screenSizeLimit) {
		$('.topBar').remove();
	}
	}	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

