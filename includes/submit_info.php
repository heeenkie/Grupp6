<?php 
session_start();

if(isset($_POST['submit'])){
	include_once 'dbh.inc.php';

	$about = mysqli_real_escape_string($conn, $_POST['about']);
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$id = $_SESSION['foreign'];

	$sql = "SELECT * FROM info WHERE info_foreign = '$id'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	//Efelhantering
	//är aööt ifyllt
	if (empty($about) || empty($first) || empty($last)) {
		header("Location: ../s_profile.php?box=empty");
		exit();
	} else{

		if ($resultCheck < 1) {
			$sql = "INSERT INTO info (info_first, info_last, info_about_me) VALUES ('$first', '$last' ,$about);";
			mysqli_query($conn, $sql);
		}else{
			$sql = "UPDATE info SET (info_first='$first', info_last='$last', info_about_me='$about') WHERE (info_foreign = '$id')";
			mysqli_query($conn, $sql);

			header("Location: ../s_profile.php?signup=success");
			exit();
		}
	}

}else{
	header("Location: ../s_profile.php");
	exit();
}
?>