<?php
$insert = false;
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "dbms3"; // Added database name

$con = mysqli_connect($server, $username, $password, $database); // Connect with database

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Connection made successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $P_Full_Name = $_POST['P_Full_Name'];
    $P_Gender = $_POST['P_Gender'];
    $P_Age = $_POST['P_Age'];
    $P_Phone = $_POST['P_Phone'];
    $P_Email_ID = $_POST['P_Email_ID'];
    $P_Enrollment_No = $_POST['P_Enrollment_No'];
    $event_name = $_POST['event_name'];
    $P_password = $_POST['P_password'];

    // Prepare SQL statement to avoid SQL injection
    $stmt = $con->prepare("INSERT INTO participants (P_Full_Name, P_Gender, P_Age, P_Phone, P_Email_ID, P_Enrollment_No,event_name, P_password) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssisssss", $P_Full_Name, $P_Gender, $P_Age, $P_Phone, $P_Email_ID, $P_Enrollment_No,$event_name,$P_password);

    if($stmt->execute()){
        // Redirect to thank-you.html if insertion is successful
        header("Location: thank-you.html");
        exit();
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $stmt->close();
    $con->close();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Participants Registration</title>
    <script>
        function validatePassword() {
            var password = document.getElementById("P_password");
            var confirmPassword = document.getElementById("confirm_password");

            if (password.value != confirmPassword.value) {
                alert("Passwords do not match.");
                return false; // Prevent form submission
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="bg-image">
        <!-- Background image can be added here if needed -->
    </div>
    <div class="register-box">
        <h1>Participants Registration</h1>
        <p>Enter your details and submit this form</p>

        <form action="Participants.php" method="post" onsubmit="return validatePassword();">
            <input type="text" name="P_Full_Name" id="P_Full_Name" placeholder="Enter Full Name" required>
            
            <div class="radio-button">
                <label>Gender:</label>
                <div class="gender-field">
                    <input type="radio" id="male" name="P_Gender" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="P_Gender" value="female" required>
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="P_Gender" value="other" required>
                    <label for="other">Other</label>
                </div>
            </div>

            <input type="text" name="P_Age" id="P_Age" placeholder="Enter your age" required>
            <input type="text" name="P_Phone" id="P_Phone" placeholder="Enter your phone number" required>
            <input type="email" name="P_Email_ID" id="P_Email_ID" placeholder="Enter your email" required>
            <input type="text" name="P_Enrollment_No" id="P_Enrollment_No" placeholder="Enter your enrollment number" required>
            <input type="text" name="event_name" id="event_name" placeholder="Enter event name" required>
            <input type="password" name="P_password" id="P_password" placeholder="Set your password" required>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="Participants.js"></script>
</body>
</html>
