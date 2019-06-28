<?php
$servername = "localhost";
$username = "root";
$password = "Whatever24";
$dbname = "practice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE testing (
empid INT NOT NULL,
empname VARCHAR(30) NOT NULL,
empphoneno INT NOT NULL,
empemail VARCHAR(30) NOT NULL,
empdob DATE NOT NULL,
empdept VARCHAR(30) NOT NULL,
empleaves INT DEFAULT 0,
empsalary INT DEFAULT 0
)";

if ($conn->query($sql) === TRUE) {
    echo "Table testing created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>