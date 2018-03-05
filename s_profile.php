<?php
	include_once 'header.php';

?>
<link rel="stylesheet" type="text/css" href="css/s_profile.css">

<div class="input_container">
    <div class="input_personal_info">
				
	    <div class="input_info" contenteditable="true">
    	<?php 
    		echo $_SESSION['i_first'];
    	?>
        </div>
		
		<div class="input_info" contenteditable="true">
    	<?php 
    		echo $_SESSION['i_last'];
    	?>
        </div>			
				
    </div>
    <div class="input_info" contenteditable="true">
    	<?php 
    		echo $_SESSION['i_about'];
    	?>
    </div>
</div>
<?php

	include_once 'footer.php';
?>