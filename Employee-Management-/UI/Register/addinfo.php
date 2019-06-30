<?php

## connecting to the database##

defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USER') or define('DB_USER', 'root');
defined('DB_PASS') or define('DB_PASS', '');
defined('DB_NAME') or define('DB_NAME', 'newdbs');
## connect.php ##
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);

mysqli_select_db($conn,'register');
echo "connected to DB<BR>";

function showError($message) {
echo 'Database Error <BR>'.$message;
exit;
}

if (isset($_POST['name'])) {
$name2 = $_POST['name'];
$email2 = $_POST['email'];
$password2 = $_POST['password'];
$query = mysql_query("insert into register(name, email, password) values ('$name2', '$email2', '$password2')"); //Insert Query
echo "Form Submitted succesfully";
}


?>
