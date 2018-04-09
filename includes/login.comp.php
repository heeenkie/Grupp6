<?php
session_start();


if(isset($_POST['submit'])){
		include_once 'dbh.inc.php';

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


		//Error handlers

		$sql = "SELECT * FROM company_users WHERE company_user_email ='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			 header("location: ../login_company.php?login=emailerror");
			//print $resultCheck;

			 exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($pwd, $row['company_user_password']);
				if ($pwdCheck == false) {
					header("location: ../login_company.php?login=pwderror");
					exit();
				}elseif ($hashedPwdCheck == true) {
					$_SESSION['u_id'] = $row['user_id'];


					header("location: ../profile.php");

					exit();
				}

				
				}
			}
		
}else{
	header("location: ../login_company.php?login=errorerror");
	exit();
}

?>