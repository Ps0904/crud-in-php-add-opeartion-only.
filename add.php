<?php
// Establish connection to your MySQL database
$servername = "localhost"; // Change this to your server name
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "trail"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

// Create INSERT query
$sql = "INSERT INTO employee (name, email, dob, mobile, address) VALUES ('$name', '$email', '$dob', '$mobile', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
