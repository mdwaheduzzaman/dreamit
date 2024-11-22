// Order form submission
const form = document.querySelector('form');
const thankYouSection = document.querySelector('.thank-you');
const orderFormSection = document.querySelector('.order-form');

form.addEventListener('submit', function(event) {
    event.preventDefault();  // Prevents the default form submission
    
    // Simulating successful form submission
    orderFormSection.style.display = 'none';  // Hide the form
    thankYouSection.style.display = 'block';  // Show the thank you message
});
