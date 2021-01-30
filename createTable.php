<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, "student", "8889");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE TABLE stud (usn varchar(15) primary key, name varchar(30), email varchar(30), mob varchar(15))";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>