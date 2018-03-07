<?php
	include_once 'header.php';

?>
<link rel="stylesheet" type="text/css" href="css/s_profile.css">
<form action="includes/submit_info.php" method="POST">
<div class="input_container">
    <div class="input_personal_info">
		
		<?php 
    		$first = $_SESSION['i_first'];
    		$last = $_SESSION['i_last'];
    		$about = $_SESSION['i_about'];
    	?>		
	   <input type="text" name="first" value="<?= $first?>">
	   <input type="text" name="last" value="<?= $last?>">
	   <input type="text" name="about" value="<?= $about?>">  	  
				
				
    
    <button type="submit" name="submit"> Submit </button>
</div>
</form>

<?php

	include_once 'footer.php';
?>