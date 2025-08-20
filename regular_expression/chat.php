<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Support - Intels.co</title>
    <link rel="stylesheet" href="chat-style.css">
    <style>
        /* Chat Widget Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f7fc;
}

.chat-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 300px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    display: none; /* Initially hidden */
    flex-direction: column;
    height: 400px;
}

.chat-header {
    background-color: #1d5fd6;
    color: #fff;
    padding: 12px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.chat-title {
    font-size: 16px;
}

.close-btn {
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
}

.chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
    background-color: #f8f8f8;
}

.message {
    padding: 8px 12px;
    border-radius: 15px;
    margin-bottom: 12px;
    max-width: 75%;
}

.received {
    background-color: #e4e6eb;
    align-self: flex-start;
}

.sent {
    background-color: #1d5fd6;
    color: white;
    align-self: flex-end;
}

.chat-footer {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f4f7fc;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}

#userMessage {
    width: 80%;
    padding: 8px;
    border-radius: 20px;
    border: 1px solid #ccc;
    font-size: 14px;
}

#sendMessageBtn {
    background-color: #1d5fd6;
    color: #fff;
    border: none;
    padding: 8px 12px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 14px;
}

#sendMessageBtn:hover {
    background-color: #1558a0;
}

/* Chat Icon (floating) */
.chat-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #1d5fd6;
    color: #fff;
    padding: 12px;
    border-radius: 50%;
    font-size: 30px;
    cursor: pointer;
    display: block;
    transition: background-color 0.3s ease;
}

.chat-icon:hover {
    background-color: #1558a0;
}

    </style>
</head>
<body>
    <!-- Chat Support Widget -->
    <div class="chat-widget">
        <div class="chat-header" id="chatHeader">
            <span class="chat-title">Chat with us</span>
            <button id="closeBtn" class="close-btn">X</button>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="message received">
                <span class="message-text">Hello! How can we assist you today?</span>
            </div>
        </div>
        <div class="chat-footer">
            <input type="text" id="userMessage" placeholder="Type your message..." />
            <button id="sendMessageBtn">Send</button>
        </div>
    </div>

    <div class="chat-icon" id="chatIcon">
        <span>💬</span>
    </div>

    <script src="chat.js"></script>
    <script>
        // JavaScript for chat UI behavior

const chatWidget = document.querySelector('.chat-widget');
const chatIcon = document.querySelector('#chatIcon');
const closeBtn = document.querySelector('#closeBtn');
const sendMessageBtn = document.querySelector('#sendMessageBtn');
const userMessage = document.querySelector('#userMessage');
const chatBody = document.querySelector('#chatBody');
const chatHeader = document.querySelector('#chatHeader');

// Show and hide the chat widget when the icon is clicked
chatIcon.addEventListener('click', () => {
    chatWidget.style.display = 'flex'; // Show chat
    chatIcon.style.display = 'none'; // Hide the chat icon
});

// Close chat widget
closeBtn.addEventListener('click', () => {
    chatWidget.style.display = 'none'; // Hide chat
    chatIcon.style.display = 'block'; // Show the chat icon
});

// Send message when the user clicks the send button
sendMessageBtn.addEventListener('click', () => {
    const messageText = userMessage.value.trim();
    
    if (messageText) {
        // Display the user's message
        const userMessageDiv = document.createElement('div');
        userMessageDiv.classList.add('message', 'sent');
        userMessageDiv.innerHTML = `<span class="message-text">${messageText}</span>`;
        chatBody.appendChild(userMessageDiv);
        chatBody.scrollTop = chatBody.scrollHeight; // Scroll to the bottom

        // Clear the input field
        userMessage.value = '';

        // Simulate a reply from the support bot
        setTimeout(() => {
            const botMessageDiv = document.createElement('div');
            botMessageDiv.classList.add('message', 'received');
            botMessageDiv.innerHTML = `<span class="message-text">Thank you for your message! We will get back to you shortly.</span>`;
            chatBody.appendChild(botMessageDiv);
            chatBody.scrollTop = chatBody.scrollHeight; // Scroll to the bottom
        }, 1000);
    }
});

// Close chat when the user clicks outside
window.addEventListener('click', (e) => {
    if (!chatWidget.contains(e.target) && !chatIcon.contains(e.target)) {
        chatWidget.style.display = 'none';
        chatIcon.style.display = 'block';
    }
});

    </script>
</body>
</html>
