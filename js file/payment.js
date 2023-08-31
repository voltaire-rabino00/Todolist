// Get references to relevant elements
const paymentModal = document.querySelector('.containers');
const closeButton = paymentModal.querySelector('.fa-times');
const buyButtons = document.querySelectorAll('.buy');
const previewBoxes = document.querySelectorAll('.preview'); // Add this line

// Open the payment modal when a "buy" button is clicked
buyButtons.forEach((buyButton) => {
  buyButton.addEventListener('click', () => {
    paymentModal.style.display = 'flex';
  });
});

// Close the payment modal when the close button is clicked
closeButton.addEventListener('click', () => {
  paymentModal.style.display = 'none';
  // Remove the 'active' class from all preview boxes
  previewBoxes.forEach(previewBox => {
    previewBox.classList.remove('active');
    paymentModal.style.display = 'none';
  });
});

// Close the payment modal when the "times" icon is clicked
const timesIcon = paymentModal.querySelector('.fa-times');
timesIcon.addEventListener('click', () => {
  paymentModal.style.display = 'none';
  // Remove the 'active' class from all preview boxes
  previewBoxes.forEach(previewBox => {
    previewBox.classList.remove('active');
    paymentModal.style.display = 'none';
  });
});
