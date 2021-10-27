<?php
	session_start();
	require_once '../authenticate/login.php';

	$pref_longitude = 74.92356459999999;
	$pref_latitude = 15.5251559;

	$conn = mysqli_connect($hostname, $username, $password, $database);
	if(!$conn){
		die("Error connecting to server. Please try after sometime.".mysqli_connect_error());
		header('url=../index.php');
		exit();
	}

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false){
        // echo "Error 404. The page you requested doesn't exists. ".isset($_SESSION['loggedIn'])." and {$_SESSION['loggedIn']}";
		echo "<script>alert('The page you requested does not exists.')</script>";
		header("Refresh:02; url=../index.php");
        exit();
	}

	$rate_extract_query = "SELECT rate FROM hr_table WHERE username='{$_SESSION['user']}'";
	$rate_extract_res = mysqli_query($conn, $rate_extract_query);
	$rate = mysqli_fetch_row($rate_extract_res)[0];

	$extract_user_query = "SELECT username FROM auth WHERE isAdmin='no' AND isHr='no'";
	$extract_user_res = mysqli_query($conn, $extract_user_query);
	$extract_user_num = mysqli_num_rows($extract_user_res);

	$file = "EmpSalary.txt";
	$txt = fopen($file, "w") or die("Unable to open file!");

	$today = date('Y-m');
	$today = (string)$today.'%';

	for($i=0;$i<$extract_user_num;$i++){
		$user = mysqli_fetch_row($extract_user_res)[0];

		$user_query = "SELECT COUNT(*) FROM  {$user} WHERE date_ LIKE '{$today}' AND latitude>0 AND ABS(latitude-{$pref_latitude}) < 0.1 AND ABS(longitude - {$pref_longitude}) < 0.1";
		$user_res = mysqli_query($conn, $user_query);

		$user_salary = mysqli_fetch_row($user_res)[0]*$rate;

		// echo $user."__________".$user_salary."<br>";

		fwrite($txt, $user."  :  ".$user_salary.PHP_EOL);
	}


	fclose($txt);

	header('Content-Description: File Transfer');
	header('Content-Disposition: attachment; filename='.basename($file));
	// header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	header("Content-Type: application/force-download");
	// header("Refresh:01; url='adminProfile.php'");
	ob_clean();
	flush();
	readfile($file);
	exit();

?>