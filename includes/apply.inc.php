<?php
session_start();  
if(isset($_POST['submit'])){

	$to = "isac.arvidsson97@gmail.com";
	$from = "isac.arvidsson97@gmail.com";
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$orgNum = $_POST['orgNum'];
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From:" . $from;
	ini_set( $from,$to ); // My usual e-mail address
	ini_set( 'SMTP', $from );  // My usual sender
	ini_set( 'smtp_port', 465 );
	$message = "företagsnamn: ". $name . "\r\n" . "mail: " . $mail . "\r\n" . "orgnumb: ". $orgNum; 
	mail($to,"ansökan",$message,$headers);
	echo "mail sent";

}

?>