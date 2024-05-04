document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registration-form');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const fullName = document.getElementById('full-name').value;
        const gender = document.querySelector('input[name="gender"]:checked').value;
        const age = document.getElementById('age').value;
        const phone = document.getElementById('phone').value;
        const email = document.getElementById('email').value;
        const enrollmentNo = document.getElementById('enrollment-no').value;

        if (!fullName || !gender || !age || !phone || !email || !enrollmentNo) {
            errorMessage.textContent = 'Please fill in all required fields.';
            return;
        }

        // Here you can perform the AJAX request to save the form data to the database
        // For demonstration purposes, I'm just logging the data to the console
        console.log('Form data:', {
            fullName,
            gender,
            age,
            phone,
            email,
            enrollmentNo
        });

        // Reset the form after successful submission
        form.reset();
        errorMessage.textContent = '';

        // Redirect or perform any other action after successful submission
    });
});
