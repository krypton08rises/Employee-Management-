<?php
// settings.php
defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USER') or define('DB_USER', 'root');
defined('DB_PASS') or define('DB_PASS', '');
defined('DB_NAME') or define('DB_NAME', 'newdatabase');
// connect.php
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
// $conn = new mysqli(DB_HOST,DB_USER,DB_PASS); Obect Connection
//bootstrap
require_once('settings.php');
require_once('connect.php');
/* Object Connection
if($conn->connect_error){
die("connection failed" . $conn->connect_error());
} */
if(!$conn) {
die("connection failed" . mysqli_connect_error());
} echo '
Connected successfully';
?>
