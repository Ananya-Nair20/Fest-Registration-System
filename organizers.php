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
    $o_Full_Name = $_POST['o_Full_Name'];
    $o_Gender = $_POST['o_Gender'];
    $o_Age = $_POST['o_Age'];
    $o_Phone = $_POST['o_Phone'];
    $o_Email_ID = $_POST['o_Email_ID'];
    $o_Enrollment_No = $_POST['o_Enrollment_No'];
    $o_password = $_POST['o_password'];

    // Prepare SQL statement to avoid SQL injection
    $stmt = $con->prepare("INSERT INTO organizers (o_Full_Name, o_Gender, o_Age, o_Phone, o_Email_ID, o_Enrollment_No, o_password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissss", $o_Full_Name, $o_Gender, $o_Age, $o_Phone, $o_Email_ID, $o_Enrollment_No, $o_password);

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
    <title>Organizers Registration</title>
    <script>
        function validatePassword() {
            var password = document.getElementById("o_password");
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
        <h1>Organizers Registration</h1>
        <p>Enter your details and submit this form</p>

        <form action="organizers.php" method="post" onsubmit="return validatePassword();">
            <input type="text" name="o_Full_Name" id="o_Full_Name" placeholder="o_Full Name" required>
            
            <div class="radio-button">
                <label>Gender:</label>
                <div class="gender-field">
                    <input type="radio" id="male" name="o_Gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="o_Gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="o_Gender" value="other">
                    <label for="other">Other</label>
                </div>
            </div>

            <input type="text" name="o_Age" id="P_Age" placeholder="o_age" required>
            <input type="text" name="o_Phone" id="P_Phone" placeholder="0_phone_number" required>
            <input type="email" name="o_Email_ID" id="P_Email_ID" placeholder="0_email" required>
            <input type="text" name="o_Enrollment_No" id="P_Enrollment_No" placeholder="0_enrollment_number" required>
            <input type="password" name="o_password" id="P_password" placeholder="o_password" required>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="Participants.js"></script>
</body>
</html>
