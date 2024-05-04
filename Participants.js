/*function registerParticipant() {
    var firstName = document.getElementById("first-name").value;
    var lastName = document.getElementById("last-name").value;
    var gender = document.querySelector('input[name="gender"]:checked').value;
    var age = document.getElementById("age").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var participantId = document.getElementById("participant-id").value;

    // Validation
    if (!firstName || !lastName || !gender || !age || !phone || !email || !participantId) {
        document.getElementById("error-message").innerText = "Please fill in all required fields.";
        return;
    }

    // Here, you would make an AJAX request to your server to store the data in the database
    // For the sake of simplicity, let's assume the registration is successful
    //alert("Participant registered successfully");
    //document.getElementById("registration-form").reset();
}

// Add event listener to the next button
document.getElementById('next-btn').addEventListener('click', function () {
    // Redirect to the next page
    window.location.href = 'events.html';
});
//Redirect based on the selected role
        if (role === 'participant') {
            window.location.href = 'thank_you.html';
        } else if (role === 'organiser') {
            window.location.href = 'organiser.html';
        } else if (role === 'volunteer') {
            window.location.href = 'volunteer.html';
        }*/

       /*  document.addEventListener('DOMContentLoaded', function () 
        {
            const form = document.getElementById('registration-form');
            const errorMessage = document.getElementById('error-message');
            const nextButton = document.getElementById('register-btn');
        
            form.addEventListener('submit', function (event)
             {
                event.preventDefault();
        
                const firstName = document.getElementById('first-name').value;
                const lastName = document.getElementById('last-name').value;
                const gender = document.querySelector('input[name="gender"]:checked').value;
                const age = document.getElementById('age').value;
                const phone = document.getElementById('phone').value;
                const email = document.getElementById('email').value;
                const participantId = document.getElementById('participant-id').value;
                const role = document.querySelector('input[name="role"]:checked').value;
        
                if (!firstName || !lastName || !gender || !age || !phone || !email) {
                    errorMessage.textContent = 'Please fill in all required fields.';
                    return;
                }
        
                // Here you can perform the AJAX request to save the form data to the database
                // For demonstration purposes, I'm just logging the data to the console
                console.log('Form data:', {
                    firstName,
                    lastName,
                    gender,
                    age,
                    phone,
                    email,
                    participantId,
                    role
                });
        
                // Reset the form after successful submission
                form.reset();
                errorMessage.textContent = '';
        
                // Redirect based on the selected role
                if (role === 'participant') {
                    window.location.href = 'thank_you.html';
                } else if (role === 'organiser') {
                    window.location.href = 'organiser.html';
                } else if (role === 'volunteer') {
                    window.location.href = 'volunteer.html';
                }
            });
           document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('registration-form');
                const errorMessage = document.getElementById('error-message');
                const nextButton = document.getElementById('next-btn');
            
                nextButton.addEventListener('click', function () {
                    const role = document.querySelector('input[name="role"]:checked').value;
                    
                    if (role === 'participant') {
                        // Redirect to the thank you page
                        window.location.href = 'thank_you.html';
                    } else if (role === 'organiser') {
                        // Redirect to the organiser page
                        window.location.href = 'organiser.html';
                    } else if (role === 'volunteer') {
                        // Redirect to the volunteer page
                        window.location.href = 'volunteer.html';
                    }
                });
            });
            
        });
        */

       /* document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registration-form');
            const errorMessage = document.getElementById('error-message');
            const nextButton = document.getElementById('next-btn');
        
            form.addEventListener('submit', function (event) {
                event.preventDefault();
        
                const firstName = document.getElementById('first-name').value;
                const lastName = document.getElementById('last-name').value;
                const gender = document.querySelector('input[name="gender"]:checked').value;
                const age = document.getElementById('age').value;
                const phone = document.getElementById('phone').value;
                const email = document.getElementById('email').value;
                const participantId = document.getElementById('participant-id').value;
                const role = document.querySelector('input[name="role"]:checked').value;
        
                if (!firstName || !lastName || !gender || !age || !phone || !email) {
                    errorMessage.textContent = 'Please fill in all required fields.';
                    return;
                }
        
                // Here you can perform the AJAX request to save the form data to the database
                // For demonstration purposes, I'm just logging the data to the console
                console.log('Form data:', {
                    firstName,
                    lastName,
                    gender,
                    age,
                    phone,
                    email,
                    participantId,
                    role
                });
        
                // Reset the form after successful submission
                form.reset();
                errorMessage.textContent = '';
        
                // Redirect based on the selected role
                if (role === 'Participant') {
                    window.location.href = 'D:\dbms own\thank-you.html';
                } else if (role === 'organiser') {
                    window.location.href = 'organiser.html';
                } else if (role === 'volunteer') {
                    window.location.href = 'volunteer.html';
                }
            });
        });
        */

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('registration-form');
            const errorMessage = document.getElementById('error-message');
            const nextButton = document.getElementById('next-btn');
        
            form.addEventListener('submit', function (event) {
                event.preventDefault();
        
                const firstName = document.getElementById('first-name').value;
                const lastName = document.getElementById('last-name').value;
                const gender = document.querySelector('input[name="gender"]:checked').value;
                const age = document.getElementById('age').value;
                const phone = document.getElementById('phone').value;
                const email = document.getElementById('email').value;
                const participantId = document.getElementById('participant-id').value;
                const role = document.querySelector('input[name="role"]:checked').value;
        
                if (!firstName || !lastName || !gender || !age || !phone || !email) {
                    errorMessage.textContent = 'Please fill in all required fields.';
                    return;
                }
        
                // Here you can perform the AJAX request to save the form data to the database
                // For demonstration purposes, I'm just logging the data to the console
                console.log('Form data:', {
                    firstName,
                    lastName,
                    gender,
                    age,
                    phone,
                    email,
                    participantId,
                    role
                });
        
                // Reset the form after successful submission
                form.reset();
                errorMessage.textContent = '';
        
                // Redirect based on the selected role
                /*if (role === 'Participant') {
                    window.location.href = 'thank-you.html';
                } else if (role === 'organiser') {
                    window.location.href = 'organiser.html';
                } else if (role === 'volunteer') {
                    window.location.href = 'volunteer.html';
                }*/

              /*  document.addEventListener('DOMContentLoaded', function () {
                    const nextButton = document.getElementById('next-btn');
                
                    nextButton.addEventListener('click', function () {
                        window.location.href = 'thank-you.html';
                    });
                });
                */

               
            });

        });
        