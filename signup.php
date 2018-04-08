<?php
	include_once 'header.php';
?>

<link rel="stylesheet" type="text/css" href="css/signup.css">

	<section class="main-container">
		<div class="main-wrapper">
			<h2> Signup</h2>
			<form class="signup-form" action="includes/signup.inc.php" method="POST">
				<label for="email">E-post</label>
				<input id="email" type="text" name="email" placeholder="E-mail">
				<label for="pwd">Lösenord</label>
				<input id ="pwd" type="password" name="pwd" placeholder="password">
				<label for="pwd1">Upprepa lösenord</label>
				<input id="pwd1" type="password" name="pwd" placeholder="password">
				<button id="submit" type="submit" name="submit">Registrera dig</button>
			</form>
		</div>
	</section>

<?php
	include_once 'footer.php';
?>
