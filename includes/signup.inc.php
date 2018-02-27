<?php 

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Efelhantering
	//är aööt ifyllt
	if (empty($email) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else{
		/*if (!preg_match("/^[a-zA-Z]*$/", $pwd)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else{*/
			//check if email is
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../signup.php?signup=email-invalid");
				exit();
			}/*else{
				//finns email redan
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysql_query($conn, $sql);
				$resultCheck = mysql_num_rows($result);

				if($resultCheck > 0)
				{
					header("Location: ../signup.php?signup=email-taken");
					exit();

				} */else{
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//låt person komma in i databas
					$sql = "INSERT INTO users (user_email, user_password) VALUES ('$email', '$hashedPwd');";
					mysqli_query($conn, $sql);

					header("Location: ../signup.php?signup=success");
					exit();

				}
			}
		//}
	//}

}else{
	header("Location: ../signup.php");
	exit();
}
?>