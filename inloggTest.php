<?php
	//session_start();
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
?>


	<section class="main-container">
		<h2> Inloggad </h2>
		<div class="main-wrapper" contenteditable="true">
			
			<?php  
				//$sql = "SELECT * FROM users WHERE user_email ='$email'";

				//echo $_SESSION['u_email'];
				echo $_SESSION['u_info'];

				$sql = "INSERT INTO info (info_about_me, info_first_name, info_last_name, info_phone, info_foreign, info_picture) VALUES ('jag har en stor pk', 'Isac', 'Arvidsson', '0705872687', ".$_SESSION['foreign'].", 'gaypics/isac.jpg');";
				
				mysqli_query($conn, $sql);

			?>
		</div>
	</section>

<?php
	include_once 'footer.php';
?>
