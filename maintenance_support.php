<style>


    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7fc;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.support-container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 90%;
    max-width: 1100px;
    display: flex;
    justify-content: space-between;
}

.content {
    display: flex;
    justify-content: space-between;
    gap: 40px;
    width: 100%;
}

.left-section, .right-section {
    width: 48%;
}

h1 {
    font-size: 32px;
    color: #89282f;
    margin-bottom: 20px;
}

p {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 20px;
}

.ticket-generator {
    margin-top: 20px;
}

.generate-btn {
    background-color: #89282f;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.generate-btn:hover {
    background-color: #6d1d22;
}

.ticket-info {
    background-color: #f0f8ff;
    border: 1px solid #89282f;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
    display: block;
}

input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

textarea {
    resize: vertical;
}

.submit-btn {
    background-color: #89282f;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.submit-btn:hover {
    background-color: #6d1d22;
}

.footer {
    margin-top: 40px;
    font-size: 14px;
    color: #888;
}

/* Mobile Responsiveness */
@media screen and (max-width: 768px) {
    .support-container {
        flex-direction: column;
        padding: 20px;
    }

    .content {
        flex-direction: column;
        gap: 30px;
    }

    .left-section, .right-section {
        width: 100%;
    }

    h1 {
        font-size: 28px;
    }

    .generate-btn, .submit-btn {
        width: 100%;
        padding: 12px 0;
        font-size: 16px;
    }
}

</style>

<section class="support-container">
    <div class="content">
        <!-- Left Section: Generate Ticket -->
        <div class="left-section">
            <h1>Generate Ticket</h1>
            <p>Need assistance? Generate a ticket to start the support process. Our team will be in touch shortly!</p>
            <div class="ticket-generator">
                <button id="generateTicket" class="generate-btn">Generate Ticket</button>
                <div id="ticket-info" class="ticket-info" style="display: none;">
                    <p>Your ticket has been created successfully!</p>
                    <p>Ticket Number: <span id="ticket-number"></span></p>
                    <p>Our support team will get back to you shortly via email.</p>
                </div>
            </div>
        </div>

        <!-- Right Section: Support Form -->
        <div class="right-section">
            <h1>Submit a Support Request</h1>
            <p>Fill out the form below and provide details of your issue or request. We will handle it promptly.</p>
            <form id="supportForm">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>

                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label for="issue">Describe your issue:</label>
                    <textarea id="issue" name="issue" required placeholder="Please describe your issue or request..." rows="5"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-btn">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script >
    // Function to handle ticket generation
document.getElementById('generateTicket').addEventListener('click', function() {
    const ticketNumber = generateTicketNumber();

    // Show ticket information and hide the button
    document.getElementById('ticket-info').style.display = 'block';
    document.getElementById('ticket-number').textContent = ticketNumber;
});

// Function to generate a unique ticket number
function generateTicketNumber() {
    const date = new Date();
    const ticketPrefix = 'TICKET-';
    const timestamp = date.getTime(); // Timestamp ensures a unique number
    const randomSuffix = Math.floor(Math.random() * 1000);
    return ticketPrefix + timestamp + '-' + randomSuffix;
}

// Handle form submission
document.getElementById('supportForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Handle form submission logic (e.g., send data to server, show confirmation)
    alert('Your support request has been submitted. We will contact you soon.');
    document.getElementById('supportForm').reset();
});

</script>
