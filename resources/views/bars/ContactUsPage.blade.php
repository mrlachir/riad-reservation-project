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
:root {
    --primary-color: #1f6a7b;
    --secondary-color: #5d3d27;
    --accent-color: #f4c542;
    --background-color: #f7f7f7;
    --text-color: #333;
    --font-family-sans: 'Montserrat', sans-serif;
    --font-family-serif: 'Cormorant Garamond', serif;
}

body {
    font-family: var(--font-family-sans);
    line-height: 1.6;
    background-color: var(--background-color);
    color: var(--text-color);
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

.container {
    width: 85%;
    margin: 0 auto;
    padding: 80px 0;
}

.visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* Section Title */
.section-title {
    font-family: var(--font-family-serif);
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
    background-color: var(--accent-color);
    border-radius: 2px;
}

/* Contact Info Section */
.contact-info-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: #fff;
    border-radius: 15px;
    padding: 50px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    margin-bottom: 50px;
    background: linear-gradient(135deg, #ffffff 0%, var(--background-color) 100%);
}

.contact-info {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 30px;
    justify-content: center;
    max-width: 1000px;
    margin-top: 20px;
}

.contact-item {
    background: #fdfdfd;
    border-radius: 10px;
    padding: 40px;
    text-align: center;
    border-left: 6px solid var(--secondary-color);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 200px;
}

.contact-item h3 {
    font-size: 1.6rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 15px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.contact-item p {
    font-size: 1.1rem;
    color: var(--text-color);
    line-height: 1.6;
}

.contact-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

/* Contact Form Section */
.contact-form-section {
    background-color: #fff;
    border-radius: 15px;
    padding: 50px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background: linear-gradient(135deg, #ffffff 0%, var(--background-color) 100%);
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
    color: var(--secondary-color);
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
    color: var(--text-color);
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: var(--primary-color);
    outline: none;
    background-color: #fff;
}

.contact-form .submit-btn {
    background-color: var(--primary-color);
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

/* Responsiveness */
@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    .contact-info {
        grid-template-columns: 1fr;
    }
}


    </style>

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