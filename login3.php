<?php
$server = "localhost:3307";
$username = "root"; // Replace 'your_username' with your actual database username
$password = ""; // Replace 'your_password' with your actual database password
$database = "dbms3"; // Replace 'your_database' with your actual database name

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['P_Full_Name'];
    $password = $_POST['P_Password'];

    // Query to check if credentials exist in the database
    $sql = "SELECT * FROM participants WHERE P_Full_Name = '$full_name' AND P_Password = '$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect to Login.html if credentials are correct
        header("Location: Login.html");
        exit();
    } else {
        // Display alert box with error message
        echo "<script>alert('Enter the correct details');</script>";
    }
}

// Close the database connection
$conn->close();
?>
