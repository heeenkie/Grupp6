<?php
	include_once 'header.php';

?>
<link rel="stylesheet" type="text/css" href="css/profile.css">


	<div class="input_container">
		<div class="body_title">
			<h2> Personlig information</h2>
		</div>
		<div class="input_personal_info">
		
		
			<?php 
				$first = $_SESSION['i_first'];
				$last = $_SESSION['i_last'];
				$phone = $_SESSION['i_phone'];
				$edu = $_SESSION['i_edu'];
				$sex = $_SESSION['i_sex'];
				$about = $_SESSION['i_about'];
				$picture = $_SESSION['i_picture'];
				
			?>
			<div>
			<img src="<?= $picture?>">		
			</div>
			<form action="upload.php" method="post" enctype="multipart/form-data">
    		Select image to upload:
   			<input type="file" name="fileToUpload" id="fileToUpload">
    		<input type="submit" value="Upload Image" name="submit">
			</form>
			<form action="includes/submit_info.php" method="POST">
			<label>Förnamn:</label>
			<input id="input_first" type="text" name="first" value="<?= $first?>" placeholder="Ange förnamn">
			<label>Efternamn:</label>
			<input id="input_last" type="text" name="last" value="<?= $last?>" placeholder="Ange Efternamn">
			<label>Telefon:</label>
			<input id="input_number" type="text" name="phone" value="<?= $phone?>" placeholder="Ange Telefonnummer">
			<label>Utbildning:</label>
			<select required id="input_education" type="text" name="edu" value="<?= $edu?>">
				<option value="<?= $edu?>" ><?php echo$edu?></option>
				<option value="Datateknik">Datateknik</option>
				<option value="Industriell Ekonomi">Industriell Ekonomi</option>
				<option value="Teknisk Design">Teknisk Design</option>
				<option value="Elektroteknik">Elektroteknik</option>
			</select>
			<label>Kön:</label>
			<select required id="input_sex" type="text" name="sex" value="<?= $sex?>">
				<option value="<?= $sex?>"><?php echo $sex?></option>  
				<option value="Kvinna">Kvinna</option>
  				<option value="Man">Man</option>
  				<option value="Annat">Annat</option>
  				
			</select>
			<label>Personligt brev:</label>
			<!--<form action="/action_page.php">-->
  			<textarea maxlength="200" id="input_about" type="text" name="about" value="<?= $about?>" placeholder="Skriv ett kort personligt brev som du vill att företagen ska se när du skickar in din idé. (max 200 tecken)" required><?php  echo $about ?></textarea>
			  <button id="save"  name="submit" onclick="document.getElementById('id01').style.display='block'"> Spara </button>			
		
					
		</div>
		<div class="body_title">
			<h2> Känslig information</h2>
		</div>
		<div class="input_personal_info">
			
			<?php 
				$mail = $_SESSION['u_email'];
				$birth = $_SESSION['i_birth'];
				$pwd = $_SESSION['pwd'];
			
			?>		
			
			<input id="input_mail" type="text" name="mail" value="<?= $mail?>" placeholder="Ange Mail"> 
			<input id="input_personal_number" type="text" name="birth" value="<?= $birth?>" placeholder="personnummer">
			<input id="input_psw" type="password" name="pwd" value="<?= $pwd?>" placeholder="Ange Lösenord">

			<button id="save"  name="submit" onclick="document.getElementById('id01').style.display='block'"> Spara </button>			
		</div>
	</div>	
</form>


<?php

	include_once 'footer.php';
?>