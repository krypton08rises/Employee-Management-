<?php
defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USER') or define('DB_USER', 'root');
defined('DB_PASS') or define('DB_PASS', '');
defined('DB_NAME') or define('DB_NAME', 'leaveapp');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
mysqli_select_db(DB_NAME, $conn);

function showError($message) {
    echo 'Database Error <BR>'.$message;
    exit;
}

$query1 = "SELECT COUNT(*) FROM leaves";
$result = mysqli_query($query1) or showError(mysqli_error($conn));
while($row = mysqli_fetch_array($result)){
    echo $row['COUNT(name)'] ;
}
?>  