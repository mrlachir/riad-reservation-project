<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Riad Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <!-- Main Content -->

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Quick Links -->
            <div class="footer-section">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/rooms">Rooms</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms-conditions">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="footer-section social-box">
                <h3 class="footer-heading">Follow Us</h3>
                <div class="footer-social-links">
                    <a href="https://facebook.com" class="social-link" aria-label="Follow us on Facebook">
                        <img src = https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Facebook_logo_%28square%29.png/800px-Facebook_logo_%28square%29.png alt = facebook>
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com" class="social-link" aria-label="Follow us on Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com" class="social-link" aria-label="Follow us on Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://linkedin.com" class="social-link" aria-label="Follow us on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="footer-section">
                <h3 class="footer-heading">Contact Info</h3>
                <p><strong>Phone:</strong> (123) 456-7890</p>
                <p><strong>Email:</strong> info@example.com</p>
                <p><strong>Address:</strong> 123 Main Street, Marrakech, Morocco</p>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; 2024 Riad Booking. All Rights Reserved.</p>
        </div>
    </footer>

    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #f9fafb;
        }

        /* Footer Styling */
        .footer {
            background-color: #2d2d2d;
            color: #ffffff;
            padding: 40px 0;
            font-size: 16px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-section {
            display: flex;
            flex-direction: column;
            gap: 25px;
            padding: 30px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .footer-heading {
            font-size: 26px;
            font-weight: 700;
            color: #f8c038;
            margin-bottom: 20px;
            text-transform: uppercase;
            position: relative;
            letter-spacing: 1px;
        }

        .footer-heading::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: #f8c038;
        }

        /* Footer Links */
        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #dcdcdc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #f8c038;
        }

        /* Social Links Box */
        .social-box {
            background: linear-gradient(135deg, #f8c038, #ff8c00);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .footer-social-links {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .social-link {
            font-size: 40px;
            color: #fff;
            background-color: #333;
            border-radius: 50%;
            padding: 15px;
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            color: #f8c038;
            background-color: #fff;
            transform: scale(1.2);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Footer Bottom */
        .footer-bottom {
            background-color: #1c1c1c;
            text-align: center;
            padding: 25px 0;
            font-size: 16px;
            color: #b0b0b0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .footer-social-links {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .social-link {
                font-size: 35px;
                width: 60px;
                height: 60px;
            }

            .footer-heading {
                font-size: 22px;
            }
        }
    </style>
</body>
</html>
