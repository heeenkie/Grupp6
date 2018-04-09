<?php 
session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>StudentHissen </title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta http-equiv="content-type content="text/html; charset="UTF-8">
</head>
<body>
    <form class="signup-form" action="includes/login.inc.php" method="POST">
    <div class="container">
        <h1>
            Logga in som student
        </h1>
        <label for="email"><b>E-mail</b></label><br>
        <input type="text" placeholder="Skriv in email här..." name="email" required><br><br>
        <label for="psw"><b>Lösenord</b></label><br>
        <input type="password" placeholder="Skriv in lösenord här..." name="pwd" required><br><br>

        <button id="login-btn" type="submit" name="submit">logga in</button> <br>

        <a href=".php">Glömt lösen</a>
        <a href="signup.php">Registrera dig</a>
    </form>
    </div>
</body>
</html>