// Load user data on the profile page
window.onload = function() {
    const userName = localStorage.getItem('userName');
    const userEmail = localStorage.getItem('userEmail');
    const userDob = localStorage.getItem('userDob');

    if (userName && userEmail && userDob) {
        document.getElementById('userName').innerText = userName;
        document.getElementById('userEmail').innerText = userEmail;
        document.getElementById('userDob').innerText = userDob;
    }
};

// Logout functionality
document.getElementById('logoutButton').addEventListener('click', function() {
    localStorage.clear(); // Clear all stored data
    window.location.href = 'login.html'; // Redirect to login page
});

// Back button function
function goBack() {
    window.location.href = 'login.html'; // Redirect to login page
}