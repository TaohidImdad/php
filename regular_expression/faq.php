<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Intels.co</title>
    <link rel="stylesheet" href="faq-style.css">
    <style>/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body and Typography */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f7fc;
    color: #333;
}

h1, h2, h3 {
    font-weight: normal;
}

a {
    text-decoration: none;
    color: #1d5fd6;
}

a:hover {
    text-decoration: underline;
}

/* Header */
.header {
    background-color: #1d5fd6;
    color: white;
    padding: 20px 0;
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.header h1 {
    font-size: 28px;
}

.header nav ul {
    display: flex;
    list-style: none;
}

.header nav ul li {
    margin-left: 20px;
}

.header nav ul li a {
    color: white;
    font-size: 16px;
    font-weight: bold;
}

/* FAQ Section */
.faq-section {
    background-color: white;
    padding: 40px 20px;
}

.faq-section .container {
    max-width: 800px;
    margin: 0 auto;
}

h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 28px;
    color: #1d5fd6;
}

.faq-item {
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
}

.faq-question {
    font-size: 20px;
    color: #1d5fd6;
    cursor: pointer;
    transition: color 0.3s ease;
}

.faq-question:hover {
    color: #1558a0;
}

.faq-answer {
    margin-top: 10px;
    font-size: 16px;
    color: #555;
    line-height: 1.5;
}

/* Footer */
.footer {
    background-color: #1d5fd6;
    color: white;
    padding: 20px 0;
    text-align: center;
}

.footer p {
    font-size: 14px;
}

/* Mobile Responsiveness */
@media screen and (max-width: 768px) {
    .header .container {
        flex-direction: column;
        align-items: flex-start;
    }

    .header nav ul {
        flex-direction: column;
        margin-top: 20px;
    }

    .faq-section {
        padding: 20px 10px;
    }

    h2 {
        font-size: 24px;
    }

    .faq-question {
        font-size: 18px;
    }

    .faq-answer {
        font-size: 14px;
    }
}
</style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <h1>Intels.co</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            
            <div class="faq-item">
                <h3 class="faq-question">What is Intels.co?</h3>
                <p class="faq-answer">Intels.co is a software company that specializes in providing advanced solutions to businesses, helping them scale operations and improve productivity.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How can I get started with your software?</h3>
                <p class="faq-answer">You can get started by signing up for a free trial on our website. Once registered, you'll have access to all the features for 30 days.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Is your software compatible with all devices?</h3>
                <p class="faq-answer">Yes, our software is compatible with Windows, macOS, and Linux. We also provide a mobile version for both iOS and Android.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">How do I contact customer support?</h3>
                <p class="faq-answer">You can reach our customer support team through the "Contact Us" page on our website or by sending an email to support@intels.co.</p>
            </div>

            <div class="faq-item">
                <h3 class="faq-question">Do you offer any training for new users?</h3>
                <p class="faq-answer">Yes! We offer a range of training resources, including video tutorials, webinars, and one-on-one consultations to help new users get started with our software.</p>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Intels.co - All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
