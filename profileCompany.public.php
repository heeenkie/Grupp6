<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
?>


<link rel="stylesheet" type="text/css" href="css/profileCompanyPublic.css">
<div class="base">
	<div  class="title1">

		<h2 class="title_span">Företagsnamn</h2>
	</div>

	<div  class="picture">
		<img src="image/csnlogo.svg" alt="Mountain View" class="picture_style">
	</div>

	<div  class="edu">
		<p>Civilingenjör Datateknik</p>
	</div>

	<div  class="about">
		<p>Som blivande civilingenjörsstudent kan du söka en sommarkurs där CSN visstidsanställer studenter till sommaren 2018. Vi är speciellt intresserade av artificiell intelligens och hoppas kunna lära oss mer genom detta uppdrag. </p>
	</div>

	<div  class="pitch">
 			<textarea maxlength="200" id="input_about" type="text" name="about" value="<?= $about?>" placeholder="Skriv ett kort personligt brev som du vill att företagen ska se när du skickar in din idé. (max 200 tecken)" required>Pitcha här!</textarea>
			  <button id="save"  name="submit" onclick="document.getElementById('id01').style.display"> Spara </button>			
	</div>
</div>



		

<?php

	include_once 'footer.php';
?>