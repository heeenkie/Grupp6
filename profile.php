<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/profile.css">


	<div class="input_container">
		<div class="body_title">
			<h2> Personlig information</h2>
		</div>
		<div class="input_personal_info">
		
		
			<?php 
				$id = $_SESSION['u_id'];
				$sql = "SELECT * FROM info WHERE info_foreign = '$id'";
				$result = mysqli_query($conn, $sql);

				$row = mysqli_fetch_assoc($result);

			?>
			<div>
			<img style="width:300px; height:auto;" src=<?php echo $row['info_picture'] ?>>		
			</div>
			<form action="includes/upload.php" method="post" enctype="multipart/form-data">
    		Select image to upload:
   			<input type="file" name="fileToUpload" id="fileToUpload">
    		<input type="submit" value="Upload Image" name="submit">
			</form>
			<form action="includes/submit_info.php" method="POST">
			<label>Förnamn:</label>
			<input id="input_first" type="text" name="first" value="<?php echo $row['info_first_name'] ?>" placeholder="Ange förnamn">
			<label>Efternamn:</label>
			<input id="input_last" type="text" name="last" value="<?php echo $row['info_last_name'] ?>" placeholder="Ange Efternamn">
			<label>Telefon:</label>
			<input id="input_number" type="text" name="phone" value="<?php echo $row['info_phone'] ?>" placeholder="Ange Telefonnummer">
			<input id="input_personal_number" type="text" name="birth" value="<?php echo $row['info_birth'] ?>" placeholder="personnummer">
			<label>Utbildning:</label>
			<select required id="input_education" type="text" name="edu">
				<option value=<?php echo $row['info_edu'] ?>> <?php echo $row['info_edu'] ?></option>
				<option value="Datateknik">Datateknik</option>
				<option value="Industriell Ekonomi">Industriell Ekonomi</option>
				<option value="Teknisk Design">Teknisk Design</option>
				<option value="Elektroteknik">Elektroteknik</option>
			</select>
			<label>Kön:</label>
			<select required id="input_sex" type="text" name="sex">
				<option value="<?php echo $row['info_sex'] ?>"><?php echo $row['info_sex'] ?></option>  
				<option value="Kvinna">Kvinna</option>
  				<option value="Man">Man</option>
  				<option value="Annat">Annat</option>
  				
			</select>
			<label>Personligt brev:</label>
			<!--<form action="/action_page.php">-->
  			<textarea maxlength="200" id="input_about" type="text" name="about" value="<?= $about?>" placeholder="Skriv ett kort personligt brev som du vill att företagen ska se när du skickar in din idé. (max 200 tecken)" required><?php  echo $row['info_about_me'] ?></textarea>
			  <button id="save"  name="submit" onclick="document.getElementById('id01').style.display"> Spara </button>			
		</form>
					
		</div>
		<div class="body_title">
			<h2> Känslig information</h2>
		</div>
		<div class="input_personal_info">
			
			<?php 
				$id = $_SESSION['u_id'];
				$sql = "SELECT * FROM users WHERE user_id = '$id'";
				$result = mysqli_query($conn, $sql);

				$row = mysqli_fetch_assoc($result);

			?>
			
			<input id="input_mail" type="text" name="mail" value=<?php echo $row['user_email'] ?> placeholder="Ange Mail"> 

			<input id="input_psw" type="password" name="pwd" value=<?php echo $row['user_password'] ?> placeholder="Ange Lösenord">

			<button id="save"  name="submit" onclick="document.getElementById('id01').style.display='block'"> Spara </button>			
		</div>
	</div>	



<?php

	include_once 'footer.php';
?>