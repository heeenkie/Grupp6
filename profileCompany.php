<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
?>
<link rel="stylesheet" type="text/css" href="css/profile.css">



		
			 <?php 
	
				$sql = "SELECT * FROM company_info WHERE company_info_id = '1'";
				$result = mysqli_query($conn, $sql);

				$row = mysqli_fetch_assoc($result);

			?> 

			<div class="input_container">
			<div class="body_title">
				<h2> <?php echo $row['company_info_name'] ?></h2>
			</div>
			<div class="input_personal_info">
		


			<div>
			<img style="width:300px; height:auto;" src=<?php echo $row['company_info_picture'] ?>>		
			</div>
			<form action="includes/upload.php" method="post" enctype="multipart/form-data">
    		Select image to upload:
   			<input type="file" name="fileToUpload" id="fileToUpload">
    		<input type="submit" value="Upload Image" name="submit">
			</form>
			<form action="includes/submit_info.php" method="POST">
			<label>Företagsnamn:</label>
			<input id="input_first" type="text" name="first" value="<?php echo $row['company_info_name'] ?>" placeholder="Ange förnamn">
			<label>Hemsida:</label>
			<input id="input_last" type="text" name="last" value="<?php echo $row['company_info_link'] ?>" placeholder="Ange Efternamn">
		
			<label>Om oss</label>
			<!--<form action="/action_page.php">-->
  			<textarea maxlength="200" id="input_about" type="text" name="about" value="<?= $about?>" placeholder="Skriv ett kort personligt brev som du vill att företagen ska se när du skickar in din idé. (max 200 tecken)" required><?php  echo $row['company_info_about'] ?></textarea>
	
					
		</div>




<?php

	include_once 'footer.php';
?>