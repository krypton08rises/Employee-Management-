<?php
## Settings.php ##
defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USER') or define('DB_USER', 'root');
defined('DB_PASS') or define('DB_PASS', '');
defined('DB_NAME') or define('DB_NAME', 'newdata');
?>
<?php
## connect.php ##
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $conn);
function showError($message) {
echo 'Database Error <BR>'.$message;
exit;
}
//Object Connection
/*
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($conn->connect_errno) {
echo "Error". $mysqli->connect_error;
exit;
} */
?>
<?php
## bootstrap.php ##
require_once('settings.php');
require_once('connect.php');
?>
<?php
## index.php ##
require_once('bootstrap.php');
$query = "SELECT * FROM newsletter";
//$query = "INSERT INTO `newsletter` ( `email`) VALUES ('another3@email.com');";
$result = mysql_query($query) or showError(mysql_error($conn));
$num_rows = mysql_num_rows($result);
$output = 'Table Data<BR>';
while($row = mysql_fetch_array($result)){
$output .= $row['email'].'<BR>';
} //$output =
'
Inserted';
 ?>
