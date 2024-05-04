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
    $v_Full_Name = $_POST['v_Full_Name'];
    $v_Gender = $_POST['v_Gender'];
    $v_Age = $_POST['v_Age'];
    $v_Phone = $_POST['v_Phone'];
    $v_Email_ID = $_POST['v_Email_ID'];
    $v_Enrollment_No = $_POST['v_Enrollment_No'];
    $v_password = $_POST['v_password'];

    // Prepare SQL statement to avoid SQL injection
    $stmt = $con->prepare("INSERT INTO volunteers (v_Full_Name, v_Gender, v_Age, v_Phone, v_Email_ID, v_Enrollment_No, v_password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissss", $v_Full_Name, $v_Gender, $v_Age, $v_Phone, $v_Email_ID, $v_Enrollment_No, $v_password);

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
    <title>volunteers Registration</title>
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
        <h1>volunteers Registration</h1>
        <p>Enter your details and submit this form</p>

        <form action="volunteers.php" method="post" onsubmit="return validatePassword();">
            <input type="text" name="v_Full_Name" id="v_Full_Name" placeholder="v_Full Name" required>
            
            <div class="radio-button">
                <label>Gender:</label>
                <div class="gender-field">
                    <input type="radio" id="male" name="v_Gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="v_Gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="v_Gender" value="other">
                    <label for="other">Other</label>
                </div>
            </div>

            <input type="text" name="P_Age" id="v_Age" placeholder="v_age" required>
            <input type="text" name="P_Phone" id="v_Phone" placeholder="v_phone_number" required>
            <input type="email" name="P_Email_ID" id="v_Email_ID" placeholder="v_email" required>
            <input type="text" name="P_Enrollment_No" id="v_Enrollment_No" placeholder="v_enrollment_number" required>
            <input type="password" name="v_password" id="v_password" placeholder="v_password" required>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="Participants.js"></script>
</body>
</html>
