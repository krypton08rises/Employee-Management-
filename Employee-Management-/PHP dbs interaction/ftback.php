<?php
global $post;
$servername = "localhost";
$username = "root";
$password = "Whatever24";
$dbname = "practice";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Check connection
if ($conn->connect_error) {
	echo 'error random';
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['empid'])) 
{ 
$id=$_POST['empid'];
echo $id."\n";
} 
if (isset($_POST['empname'])) 
{ 
$name=$_POST['empname'];

} 
if (isset($_POST['empphoneno'])) 
{ 
$phoneno=$_POST['empphoneno'];
} 
if (isset($_POST['empemail'])) 
{ 
$email=$_POST['empemail'];
//echo email."\n";
} 
if (isset($_POST['empdob'])) 
{ 
$dob=$_POST['empdob'];
echo $dob."\n";
// Instructions if $_POST['value'] exist 
} 
if (isset($_POST['empdept'])) 
{ 
$dept=$_POST['empdept'];
//echo $empdept."\n";
} 

$link = mysqli_connect($servername, $username, $password, $dbname) or die($link);
$email = mysqli_real_escape_string($link,$email);
$name = mysqli_real_escape_string($link,$name);
$dob = mysqli_real_escape_string($link,$dob);
$dept = mysqli_real_escape_string($link,$dept);
$sql = "INSERT INTO testing (empid,empname,empphoneno,empemail,empdob,empdept) VALUES ($id,'$name',$phoneno,'$email','$dob','$dept')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
}
?>