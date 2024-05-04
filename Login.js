// Check if the user is logged in (you can use session storage or cookies for this)
var isLoggedIn = true; // Assuming the user is logged in

// If the user is logged in, display the login success message and user details
if (isLoggedIn) {
    var userDetails = getUserDetails(); // Function to retrieve user details from database
    if (userDetails) {
        displayUserDetails(userDetails);
        alert("You have logged in successfully");
    } else {
        alert("Error. User details not found.");
    }
} else {
    alert("Error. Please register first");
}

// Function to retrieve user details from the database (you'll need to implement this)
function getUserDetails() {
    // Sample user details, replace with actual data from the database
    return "<button type='submit' onclick=\"window.location.href='http://localhost:8080/2/login2.php'\"> Details</button>";
}

// Function to display user details on the page
function displayUserDetails(userDetails) {
    var userDetailsDiv = document.getElementById("user-details");
    userDetailsDiv.innerHTML = userDetails;
}
