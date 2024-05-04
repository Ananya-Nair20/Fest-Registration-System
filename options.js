document.addEventListener('DOMContentLoaded', function () {
    const participantBtn = document.getElementById('participant-btn');
    const volunteerBtn = document.getElementById('volunteer-btn');
    const organiserBtn = document.getElementById('organiser-btn');

    participantBtn.addEventListener('click', function () {
        window.location.href = 'Participants.html';
    });

    volunteerBtn.addEventListener('click', function () {
        window.location.href = 'Volunteers.html';
    });

    organiserBtn.addEventListener('click', function () {
        window.location.href = 'Organizers.html';
    });
});
