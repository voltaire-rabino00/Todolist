const buyButtons = document.querySelectorAll('.buy');
const paymentModal = document.querySelector('.payment-modal');
const closeButton = document.querySelector('.fa-times');

buyButtons.forEach((buyButton) => {
  buyButton.addEventListener('click', () => {
    paymentModal.style.display = 'flex';
  });
});

closeButton.addEventListener('click', () => {
  paymentModal.style.display = 'none';
});
