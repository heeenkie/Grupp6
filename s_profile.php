<?php
	include_once 'header.php';
?>
<link rel="stylesheet" type="text/css" href="css/s_profile.css">

<div class="input_container">
    <div class="input_personal_info">
				
		<label for="firstname"><b>Förnamn</b></label>
		<input type="text" placeholder="Ange förnamn" name="firstname" required>

		<label for="surname"><b>efternamn</b></label>
		<input type="password" placeholder="Ange efternamn" name="surname" required>			
				
    </div>
    <div class="input_info"contenteditable="true">
    Skriv ditt personliga brev här.
    </div>
</div>
<?php

	include_once 'footer.php';
?>