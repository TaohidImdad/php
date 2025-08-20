<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Plans</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
        }

        .pricing-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .pricing-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            width: calc(33.33% - 75px);  /* Updated for 6 plans */
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
        }

        .pricing-card h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #4a90e2;
        }

        .price {
            font-size: 2.5em;
            font-weight: 600;
            color: #333;
        }

        .pricing-card p {
            font-size: 1em;
            margin: 10px 0;
            color: #777;
        }

        .pricing-card .btn {
            display: inline-block;
            background-color: #4a90e2;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .pricing-card .btn:hover {
            background-color: #3578e5;
        }

        .highlight {
            border: 2px solid #4a90e2;
            box-shadow: 0 4px 16px rgba(74, 144, 226, 0.1);
        }

        @media (max-width: 1024px) {
            .pricing-card {
                width: calc(50% - 20px);  /* Adjust for two rows of 3 cards */
            }
        }

        @media (max-width: 768px) {
            .pricing-card {
                width: 100%;  /* Full width for mobile view */
            }
        }
    </style>
</head>
<body>
    <div class="container_child">
        <h1>Choose Your Plan</h1>
        <div class="pricing-container">
            <!-- Plan 1 -->
            <div class="pricing-card">
                <h2>Basic</h2>
                <div class="price">$19 / month</div>
                <p>Ideal for small businesses or individuals</p>
                <p>5 Users</p>
                <p>Basic Support</p>
                <a href="#" class="btn">Get Started</a>
            </div>

            <!-- Plan 2 -->
            <div class="pricing-card highlight">
                <h2>Standard</h2>
                <div class="price">$49 / month</div>
                <p>Great for growing teams and organizations</p>
                <p>50 Users</p>
                <p>Priority Support</p>
                <a href="#" class="btn">Get Started</a>
            </div>

            <!-- Plan 3 -->
            <div class="pricing-card">
                <h2>Professional</h2>
                <div class="price">$99 / month</div>
                <p>Perfect for large teams and enterprises</p>
                <p>200 Users</p>
                <p>24/7 Support</p>
                <a href="#" class="btn">Get Started</a>
            </div>

            <!-- Plan 4 -->
            <div class="pricing-card">
                <h2>Enterprise</h2>
                <div class="price">$199 / month</div>
                <p>Complete solution for large enterprises</p>
                <p>Unlimited Users</p>
                <p>Dedicated Support</p>
                <a href="#" class="btn">Contact Us</a>
            </div>

            <!-- Plan 5 -->
            <div class="pricing-card">
                <h2>Ultimate</h2>
                <div class="price">$299 / month</div>
                <p>For growing global businesses</p>
                <p>Unlimited Users</p>
                <p>Custom Integrations</p>
                <a href="#" class="btn">Get Started</a>
            </div>

            <!-- Plan 6 -->
            <div class="pricing-card">
                <h2>Elite</h2>
                <div class="price">$499 / month</div>
                <p>For the most advanced needs</p>
                <p>Unlimited Users</p>
                <p>Priority 1 Support</p>
                <a href="#" class="btn">Contact Us</a>
            </div>
        </div>
    </div>

    <script>
        // Optional: Add some JavaScript to handle hover animations, or other interactions if needed
    </script>
</body>
</html>
