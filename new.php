<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server = "localhost:3307";
$username = "root"; // Replace 'your_username' with your actual database username
$password = ""; // Replace 'your_password' with your actual database password
$database = "dbms3";

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];

    // Query to check if credentials exist in the database
    $sql = "SELECT * FROM participants WHERE p_full_name = '$full_name' AND p_password = '$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to a success page
        header("Location: success.html");
        exit();
    } else {
        // Login failed, redirect back to the login page with an error message
        header("Location: login.html?error=1");
        exit();
    }
}

// Close the database connection
$conn->close();
?>
