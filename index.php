<?php
	include_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<div id="front_image"></div>
<div class="hero_text">
	<h1> Pitcha din idé för tusentals företag!</h1>
	<p> Nu kan du helt gratis pitcha din exjobbs idé för intressanta företag på ett smidigt sätt.<p>
	<button class="yes"><a href="companies.php">Börja pitcha!</a></button>
</div>


	<div class="index_container">
		<div class="pic">
			<h1>1</h1>
			<a href="guide.php"> <img id="img-left" src="image/img-1.png" alt="image"> </a>
			<h2> Registrera dig gratis!</h2>
		</div>
		<div class="pic">
			<h1>2</h1>
			<a href="guide.php"> <img id="img-middle" src="image/img-2.png" alt="image"> </a>
			<h2> Hitta rätt företag för dig!</h2>
		</div>
		<div class="pic">
			<h1>3</h1>
			<a href="guide.php"> <img id="img-right" src="image/img-3.png" alt="image"> </a>
			<h2>Pitcha din idé!</h2>
		</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$("#front_image").addClass("load");
</script>

<?php

	include_once 'footer.php';
?>