<?php
##
## Initializes a database connection
##
$conn = mysql_connect(DB_HOST, DB_USER, DB_PASS);
mysql_select_db(DB_NAME, $conn);
if(!$conn) {
die("connection failed" . mysqli_connect_error());
}
function showError($message) {
echo 'Database Error <BR>'.$message;
die();
} // $
conn =
new mysqli(DB_HOST,DB_USER,DB_PASS); Object Connection
?>
