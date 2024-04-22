// Selecting elements from the DOM
const logerBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

// Adding event listener to the register link
registerLink.addEventListener('click', () => {
    // Adding 'active' class to the logerBox
    logerBox.classList.add('active');
});

// Adding event listener to the login link
loginLink.addEventListener('click', () => {
    // Removing 'active' class from the logerBox
    logerBox.classList.remove('active');
});
