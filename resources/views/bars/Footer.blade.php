<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Riad Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
                    <li><a href='/'>Home</a></li>
                    <li><a href="/room/page">Rooms</a></li>
                    <li><a href="/About">About Us</a></li>
                    <li><a href="/Contact/us/Page">Contact Us</a></li>
                    
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="footer-section">
                <h3 class="footer-heading">Follow Us</h3>
                <div class="social-menu">
                    <ul>
                        <li>
                            <a href="https://github.com/yourusername" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub Logo">
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/yourusername" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo">
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com/yourusername" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" alt="Facebook Logo">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/yourusername" target="_blank">
                                <img src="https://logowik.com/content/uploads/images/twitter-x5265.logowik.com.webp" alt="Twitter Logo">
                            </a>
                        </li>
                    </ul>
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

        /* Footer Styling */
        .footer {
            background-color: #2d2d2d;
            color: #ffffff;
            padding: 40px 0;
            font-size: 16px;
            height: 400px;
            width:100%;
            margin-top: 60px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 60px;
            max-width: 1200px;
            height: fit-content;
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
            /* bottom: -5px; */
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
        .social-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            gap: 15px; /* Spacing between items */
        }

        .social-menu ul li {
            display: inline-block;
        }

        .social-menu ul li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #333; /* Background color */
            text-decoration: none;
            overflow: hidden; /* Ensures circular borders are clean */
            transition: all 0.3s ease;
        }

        .social-menu ul li a:hover {
            background: #555; /* Lighter background on hover */
            transform: scale(1.1); /* Slightly enlarge on hover */
        }

        .social-menu ul li a img {
            width: 30px; /* Adjust logo size */
            height: 30px;
            object-fit: contain;
        }

        /* Footer Bottom */
        .footer-bottom {
            background-color: #1c1c1c;
            text-align: center;
            padding: 25px 0;
            font-size: 16px;
            margin-top: 20px;

            color: #b0b0b0;
        }
    </style>
</body>
</html>
