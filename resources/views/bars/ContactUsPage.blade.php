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
}

/* Container Style */
.container {
    width: 80%;
    margin: 0 auto;
    padding: 50px 0;
}

/* Section Title */
.section-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.5rem;
    color: #2a2a2a;
    margin-bottom: 30px;
    text-align: center;
    font-weight: bold;
}

/* Contact Form Section */
.contact-form-section {
    background-color: #fff;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #e1e1e1;
    background-image: url('https://www.example.com/your-riad-pattern.jpg'); /* Optional Riad-style pattern */
    background-size: cover;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-form .form-group {
    margin-bottom: 20px;
}

.contact-form label {
    font-weight: 600;
    font-size: 1.1rem;
    color: #5d3d27; /* Terracotta color for a Moroccan vibe */
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    color: #333;
    background-color: #f4f4f4;
}

.contact-form textarea {
    resize: vertical;
}

.contact-form .submit-btn {
    background-color: #1f6a7b; /* Moroccan blue */
    color: white;
    border: none;
    padding: 14px 25px;
    border-radius: 8px;
    font-size: 1.2rem;
    cursor: pointer;
    text-transform: uppercase;
    transition: background-color 0.3s;
}

.contact-form .submit-btn:hover {
    background-color: #004d5b; /* Darker Moroccan blue on hover */
}

/* Contact Info Section */
.contact-info-section {
    background-color: #fff;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
}

.contact-info {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
}

.contact-item h3 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #1f6a7b; /* Moroccan blue */
    margin-bottom: 10px;
}

.contact-item p {
    font-size: 1.1rem;
    color: #333;
}

/* Add some Moroccan details (border or patterns) */
.contact-item {
    border-left: 5px solid #5d3d27; /* Terracotta border */
    padding-left: 15px;
}

.contact-info-section::before {
    content: " "; 
    position: absolute;
    top: 20px;
    left: 50%;
    width: 50px;
    height: 5px;
    background-color: #f4c542; /* Gold accent line for a Moroccan look */
    transform: translateX(-50%);
}

/* Background Style (optional) */
body {
    background-color: #f0f0f0;
    background-image: url('https://www.example.com/your-textured-wall.jpg'); /* Background texture like Moroccan walls */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

/* Responsiveness */
@media (max-width: 768px) {
    .container {
        width: 95%;
    }

    .contact-info {
        grid-template-columns: 1fr; /* Stack the contact info on smaller screens */
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
