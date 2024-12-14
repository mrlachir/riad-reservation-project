@include('bars.navigationBare')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Riad Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        /* General Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        /* Container Style */
        .container {
            width: 85%;
            margin: 0 auto;
            padding: 80px 0;
        }

        /* Section Title */
        .section-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3rem;
            color: #2a2a2a;
            margin-bottom: 40px;
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            position: relative;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background-color: #f4c542; /* Golden line */
            border-radius: 2px;
        }

        /* Contact Form Section */
        .contact-form-section {
            background-color: #fff;
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: 1px solid #e1e1e1;
            margin-bottom: 50px;
            background: linear-gradient(135deg, #ffffff 0%, #f7f7f7 100%);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form .form-group {
            margin-bottom: 25px;
        }

        .contact-form label {
            font-weight: 700;
            font-size: 1.2rem;
            color: #5d3d27;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1.1rem;
            color: #333;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #1f6a7b; /* Blue focus effect */
            outline: none;
            background-color: #fff;
        }

        .contact-form .submit-btn {
            background-color: #1f6a7b; /* Blue */
            color: white;
            border: none;
            padding: 16px 30px;
            border-radius: 10px;
            font-size: 1.2rem;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .contact-form .submit-btn:hover {
            background-color: #004d5b;
            transform: scale(1.05);
        }

        /* Contact Info Section */
        .contact-info-section {
            background-color: #fff;
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-top: 60px;
            background: linear-gradient(135deg, #ffffff 0%, #f7f7f7 100%);
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .contact-item {
            background: #fdfdfd;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            border-left: 6px solid #5d3d27; /* Moroccan terracotta color */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 200px;
            position: relative;
            overflow: hidden;
        }

        .contact-item h3 {
            font-size: 1.6rem;
            font-weight: 600;
            color: #1f6a7b;
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
        }

        .contact-item p {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.6;
        }

        /* Hover Effect on Contact Item */
        .contact-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        /* Golden Accent Hover Effect */
        .contact-item:hover::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120%;
            height: 3px;
            background-color: #f4c542; /* Golden accent */
            transform: translate(-50%, -50%);
            animation: shine 1s ease-in-out infinite;
        }

        /* Shine Animation */
        @keyframes shine {
            0% {
                transform: translate(-50%, -50%) scaleX(0);
            }
            50% {
                transform: translate(-50%, -50%) scaleX(1);
            }
            100% {
                transform: translate(-50%, -50%) scaleX(0);
            }
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            .contact-info {
                grid-template-columns: 1fr; /* Stack items on small screens */
            }

            .contact-item {
                margin-bottom: 20px;
            }
        }
    </style>

    <!-- Main Contact Section -->
    <div class="container">
        
        <!-- Contact Form Section -->
        <section class="contact-form-section">
            <h2 class="section-title">Get in Touch</h2>
            <form action="submit_form.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email address">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required placeholder="Enter the subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </section>

        <!-- Contact Information Section -->
        <section class="contact-info-section">
            <h2 class="section-title">Our Contact Information</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <h3>Phone</h3>
                    <p>+212 555 123 456</p>
                </div>
                <div class="contact-item">
                    <h3>Email</h3>
                    <p>info@riadbooking.com</p>
                </div>
                <div class="contact-item">
                    <h3>Address</h3>
                    <p>123 Riad Street, Medina, Marrakech, Morocco</p>
                </div>
            </div>
        </section>

    </div>

</body>
</html>
@include('bars.Footer')