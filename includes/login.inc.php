<?php
session_start();

if(isset($_POST['submit'])){
		include_once 'dbh.inc.php';

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


		//Error handlers

		$sql = "SELECT * FROM users WHERE user_email ='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			 header("location: ../login_fail.php?login=emailerror");
			//print $resultCheck;

			 exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pwd, $row['user_password']);
				if ($hashedPwdCheck == false) {
					header("location: ../login_fail.php?login=pwderror");
					exit();
				}elseif ($hashedPwdCheck == true) {
					$_SESSION['u_id'] = $row['user_id'];


					header("location: ../index.php?success");

					exit();
				}

				
				}
			}
		
}else{
	header("location: ../index.php?login=errorerror");
	exit();
}

?>