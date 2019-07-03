<?php
## Settings.php ##
defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USER') or define('DB_USER', 'root');
defined('DB_PASS') or define('DB_PASS', '');
defined('DB_NAME') or define('DB_NAME', 'newdbs');
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $conn);
function showError($message) {
        echo 'Database Error <BR>'.$message;
        exit;
    }
//$query1 = "select count(name) from tempdbs";
//$res1 = mysqli_query($query1) or showError(mysqli_error($conn));    
//echo $res1;
$query = "SELECT * FROM newsletter";
//$query = "INSERT INTO `newsletter` ( `email`) VALUES ('another3@email.com');";
$result = mysqli_query($query) or showError(mysqli_error($conn));
$num_rows = mysqli_num_rows($result);
$output = 'Table Data<BR>';
while($row = mysqli_fetch_array($result)){
$output .= $row['email'].'<BR>';
?>