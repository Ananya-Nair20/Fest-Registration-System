<?php

$server = "localhost";
$port = 3307; // Default MySQL port
$username = "root";
$password = "";
$database = "dbms3"; // Specify your database name here

// Create connection
$conn = new mysqli($server, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $P_Full_Name = $_POST['P_Full_Name'];
    $P_Gender = $_POST['P_Gender'];
    $P_Age = $_POST['P_Age'];
    $P_Phone = $_POST['P_Phone'];
    $P_Email_ID = $_POST['P_Email_ID'];
    $P_Enrollment_No = $_POST['P_Enrollment_No'];
    $event_name = $_POST['event_name'];
    $P_password = $_POST['P_password'];

    // Prepare and execute SQL query to insert data into participants table
    $stmt = $conn->prepare("INSERT INTO participants (P_Full_Name, P_Gender, P_Age, P_Phone, P_Email_ID, P_Enrollment_No, event_name, P_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisssss", $P_Full_Name, $P_Gender, $P_Age, $P_Phone, $P_Email_ID, $P_Enrollment_No, $event_name, $P_password);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Perform query on participants table
$sql_participants = "SELECT * FROM participants";
$result_participants = $conn->query($sql_participants);

if ($result_participants) {
    if ($result_participants->num_rows > 0) {
        // Output data of each row
        while($row = $result_participants->fetch_assoc()) {
            echo "Participants - Full Name: " . $row["P_Full_Name"] . " - Gender: " . $row["P_Gender"] . " - Age: " . $row["P_Age"] . " - Phone: " . $row["P_Phone"] . " - Email ID: " . $row["P_Email_ID"] . " - Enrollment No: " . $row["P_Enrollment_No"] . " - Event Name: " . $row["event_name"] .  "<br>";



        }
    } else {
        echo "0 results found in Participants table";
    }
} else {
    echo "Error executing query: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
