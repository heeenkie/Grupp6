<?php
	include_once 'header.php';
?>
<div class="container">
    <div class="body_title">
	<h>Ansök om att gå med som företag</h>
    </div>
    <div>
        <form action="include/apply.inc.php" method="post">
            Företagsnamn: <input id="input_name" type="text" name="name" placeholder="Ange  Företagsnamn">
            Mailadress: <input id="input_mail" type="text" name="mail" placeholder="Ange  Mail">
            Organisationsnummer: <input id="input_orgNum" type="text" name="orgNum" placeholder="Ange  Organisationsnummer">
            <input id="input_mail" type="text" name="mail" placeholder="Ange  Mail">
            <input id="input_mail" type="text" name="mail" placeholder="Ange  Mail">
            <input id="input_mail" type="text" name="mail" placeholder="Ange  Mail">
            <input id="input_mail" type="text" name="mail" placeholder="Ange  Mail">
            <input value="submit" type="submit" name="submit">

    </div>
</div>
<?php

	include_once 'footer.php';
?>