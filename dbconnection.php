<?php
session_start();
// Database connection and other necessary configurations
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "trail";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve input values from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $role = $_POST['role'];

    // Sanitize input to prevent SQL injection (You should use prepared statements instead)
    $username = mysqli_real_escape_string($conn, $input_username);
    $password = mysqli_real_escape_string($conn, $input_password);

    // Perform a query to check user credentials
    $query = "SELECT * FROM credentials WHERE username='$username' AND password='$password' AND role='$role'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Login successful
        echo "Login successful!";
        // Redirect or perform actions based on the user role
        // Example: Redirecting to different pages based on roles
        if ($role == 'admin') {
            header("Location: employeeregister.php");
        } elseif ($role == 'manager') {
            header("Location: employeeregister.php");
        } elseif ($role == 'employee') {
            header("Location: employeeregister.php");
        }
        exit();
    } else {
        echo "Invalid credentials";
    }
}

$conn->close();
?>
