<?php
	include_once 'header.php';

?>
<link rel="stylesheet" type="text/css" href="css/profile.css">

<form action="includes/submit_info.php" method="POST">
	<div class="input_container">
		<div class="body_title">
			<h2> Personlig information</h2>
		</div>
		<div class="input_personal_info">
		
		
			<?php 
				$first = $_SESSION['i_first'];
				$last = $_SESSION['i_last'];
				$number = $_SESSION['i_number'];
				$education = $_SESSION['i_education'];
				$sex = $_SESSION['i_sex'];
				$about = $_SESSION['i_about'];
				
			?>		
			
			<label>Förnamn:</label>
			<input id="input_first" type="text" name="first" value="<?= $first?>" placeholder="Ange förnamn">
			<label>Efternamn:</label>
			<input id="input_last" type="text" name="last" value="<?= $last?>" placeholder="Ange Efternamn">
			<label>Telefon:</label>
			<input id="input_number" type="text" name="number" value="<?= $number?>" placeholder="Ange Telefonnummer">
			<label>Utbildning:</label>
			<select required id="input_education" type="text" name="education" value="<?= $education?>">
				<option value="" disabled selected>Välj Utbildning</option>
				<option value="computer">Datateknik</option>
				<option value="economi">Industriell Ekonomi</option>
				<option value="design">Teknisk Design</option>
				<option value="electro">Elektroteknik</option>
			</select>
			<label>Kön:</label>
			<select required id="input_sex" type="text" name="sex" value="<?= $sex?>">
				<option value="" disabled selected>Välj Kön</option>  
				<option value="women">Kvinna</option>
  				<option value="man">Man</option>
  				<option value="other">Annat</option>
  				
			</select>
			<label>Personligt brev:</label>
			<form action="/action_page.php">
  			<textarea maxlength="200" id="input_about" type="text" name="about" value="<?= $about?>" placeholder="Skriv ett kort personligt brev som du vill att företagen ska se när du skickar in din idé. (max 200 tecken)"></textarea>
					
					
		</div>
		<div class="body_title">
			<h2> Känslig information</h2>
		</div>
		<div class="input_personal_info">
			
			<?php 
				$mail = $_SESSION['i_mail'];
				$personal_number = $_SESSION['i_personal_number'];
				$psw = $_SESSION['i_psw'];
			
			?>		
			
			<input id="input_mail" type="text" name="mail" value="<?= $mail?>" placeholder="Ange Mail"> 
			<input id="input_personal_number" type="text" name="personal_number" value="<?= $personal_number?>" placeholder="personnumber">
			<input id="input_psw" type="password" name="psw" value="<?= $psw?>" placeholder="Ange Lösenord">

			<button id="save" type="submit" name="submit"> Spara </button>			
		</div>
	</div>	
</form>


<?php

	include_once 'footer.php';
?>