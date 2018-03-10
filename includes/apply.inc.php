<?php
session_start();  
if(isset($_POST['submit'])){
	$to = "isac.arvidsson97@gmail.com";
	$from = "isac.arvidsson97@gmail.com";
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$orgNum = $_POST['orgNum'];

	$message = "företagsnamn: ". $name . "\r\n" . "mail: " . $mail . "\r\n" . "orgnumb: ". $orgNum; 
	mail($to,$message,$from);


}

?>