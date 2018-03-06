<?php
	include_once 'header.php';

?>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<div id="bajs">
	
</div>
<form action="includes/submit_info.php" method="POST">
<div class="input_container">
    <div class="input_personal_info">
		
		<?php 
    		$first = $_SESSION['i_first'];
    		$last = $_SESSION['i_last'];
    		$about = $_SESSION['i_about'];
    	?>		
	   <input id="input_first" type="text" name="first" value="<?= $first?>">
	   <input id="input_last" type="text" name="last" value="<?= $last?>">
	   <input id="input_mail" type="text" name="mail" value="<?= $mail?>">
	   <input id="input_number" type="text" name="number" value="<?= $number?>">
	   <input id="input_personal_number" type="text" name="personal_number" value="<?= $personal_number?>">
	   <input id="input_education" type="text" name="education" value="<?= $education?>">
	   <input id="input_sex" type="text" name="sex" value="<?= $sex?>">
	   <input id="input_about" type="text" name="about" value="<?= $about?>">  	  
				
				
    
    <button type="submit" name="submit"> Submit </button>
</div>
</form>

<?php

	include_once 'footer.php';
?>