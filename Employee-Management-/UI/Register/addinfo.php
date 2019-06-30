<?php

//header('Access-Control-Allow-Origin: *');
//header('Content-type: application/json');
//## connecting to the database##

defined('DB_HOST') or define('DB_HOST', 'localhost');
defined('DB_USER') or define('DB_USER', 'root');
defined('DB_PASS') or define('DB_PASS', '');
defined('DB_NAME') or define('DB_NAME', 'newdbs');
## connect.php ##
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
//
//mysqli_select_db($conn,'register');
//    echo "connected to DB<BR>";
//
//function showError($message) {
//    echo 'Database Error <BR>'.$message;
//exit;
//}

 
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
      $name = $_POST['name'];
    echo $name;
}
//    $password2 = $_POST['password'];
//    
//  $query = mysqli_query($conn, "INSERT INTO register(name, email, password) VALUES ('$name2', '$email2', '$password2')"); 

//     echo "hi"; 
//    echo "Succesfully Registered!";
//}

?>
