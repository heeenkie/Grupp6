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
			 header("location: ../index.php?login=emailerror");
			//print $resultCheck;

			 exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pwd, $row['user_password']);
				if ($hashedPwdCheck == false) {
					header("location: ../index.php?login=pwderror");
					exit();
				}elseif ($hashedPwdCheck == true) {
					//$_SESSION['u_email'] = $row['user_id'];
					$_SESSION['foreign'] = $row['user_id'];
 					$_SESSION['u_email'] = $row['user_email'];
 					$sql = "SELECT * FROM info";
 					$result = mysqli_query($conn, $sql);
 					$row = mysqli_fetch_assoc($result);
 					$_SESSION['i_about'] = $row['info_about_me'];
					$_SESSION['i_first'] = $row['info_first_name'];
					$_SESSION['i_last'] = $row['info_last_name'];
					header("location: ../s_profile.php");

					exit();
				}

				
				}
			}
		
}else{
	header("location: ../index.php?login=errorerror");
	exit();
}

?>