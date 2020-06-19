<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$day = $_POST['day'];
$time = $_POST['time'];
$start = $_POST['stime'];
$end = $_POST['etime'];
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$date = date('Y-m-d H:i:s');
$dsn = "mysql:dbname=reserve;host=localhost";
$user = "root";
$password = "root";	 
try {
	$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e){
	print('connection failed:'.$err->getMessage());
} 



	header("Location: insert.php");
     exit;

?>
  

