const chatLog = document.getElementById('chatLog');
const userInput = document.getElementById('userInput');
const sendButton = document.getElementById('sendButton');

sendButton.addEventListener('click', sendMessage);
userInput.addEventListener('keyup', (event) => {
  if (event.key === 'Enter') {
    sendMessage();
  }
});

function sendMessage() {
  const message = userInput.value;
  if (message.trim() === '') return;

  const userMessage = createMessage(message, 'user');
  chatLog.appendChild(userMessage);

  const botMessage = createMessage('I got your message: ' + message, 'bot');
  chatLog.appendChild(botMessage);

  userInput.value = '';
  chatLog.scrollTop = chatLog.scrollHeight;
}

function createMessage(text, sender) {
  const messageDiv = document.createElement('div');
  messageDiv.classList.add('chat-message', `${sender}-message`);
  messageDiv.innerHTML = `<p>${text}</p>`;
  return messageDiv;
}
