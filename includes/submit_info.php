<?php 
session_start();

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';

	$about = mysqli_real_escape_string($conn, $_POST['about']);
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$picture = mysqli_real_escape_string($conn, $_POST['picture']);
	$sex = mysqli_real_escape_string($conn, $_POST['sex']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$edu = mysqli_real_escape_string($conn, $_POST['edu']);
	$birth = mysqli_real_escape_string($conn, $_POST['birth']);
	$id = $_SESSION['foreign'];

	$sql = "SELECT * FROM info WHERE info_foreign = '$id'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	$email = $_SESSION['u_email'];
	$pwd = $_SESSION['pwd'];

	//Efelhantering
	//är aööt ifyllt
	include_once 'upload.php';
	$picname = basename( $_FILES["fileToUpload"]["name"]);
	echo $picname;
	if (empty($about) || empty($first) || empty($last)) {
		header("Location: ../profile.php?box=empty");
		exit();
	} else{

		if ($resultCheck < 1) {
			$sql = "INSERT INTO info (info_about_me, info_first_name, info_last_name, info_phone, info_foreign, info_picture, info_sex, info_edu, info_birth) VALUES ('$about', '$first', '$last' , '$phone', '$id', 'gaypics/$picname', '$sex', '$edu', '$birth')";
			mysqli_query($conn, $sql);
			//header("Location: ../profile.php?INSERT=success");
			exit();
		} else{
			$sql = "UPDATE info SET info_about_me = '$about', info_first_name = '$first', info_last_name = '$last', info_picture = 'gaypics/$picname',info_sex = '$sex', info_edu = '$edu', info_phone = '$phone', info_birth = '$birth' WHERE info_foreign = '$id'";
			mysqli_query($conn, $sql);

			//header("Location: ../profile.php?update=success");
			exit();
		}
	}

}else{
	header("Location: ../profile.php?hejhej");
	exit();
}
?>