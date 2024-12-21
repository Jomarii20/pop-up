// Show the signup popup
function showSignupPopup() {
    document.querySelector('.signup-popup').classList.add('show');
}

// Close the popup
function closePopup(popupClass) {
    document.querySelector('.' + popupClass).classList.remove('show');
}

// Optionally, you can add a click event listener to close the login popup when clicking outside the form
window.addEventListener('click', function(event) {
    if (event.target.classList.contains('popup')) {
        event.target.classList.remove('show');
    }
});
