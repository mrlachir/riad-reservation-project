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
        <div class="footer-section">
            <h3 class="footer-heading">Follow Us</h3>
            <div class="footer-social-links">
                <a href="https://facebook.com" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="footer-section">
            <h3 class="footer-heading">Contact Info</h3>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> info@example.com</p>
            <p><strong>Address:</strong> 123 Main Street, Marrakech, Morocco</p>
        </div>

        <!-- Newsletter Subscription -->
        <div class="footer-section">
            <h3 class="footer-heading">Newsletter</h3>
            <p>Stay updated with the latest offers and news. Subscribe to our newsletter.</p>
            <form class="footer-newsletter-form">
                <input type="email" placeholder="Your email address" class="newsletter-input">
                <button type="submit" class="newsletter-btn">Subscribe</button>
            </form>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>&copy; 2024 Riad Booking. All Rights Reserved.</p>
    </div>
</footer>

<style>
/* Base styling */
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
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-section {
    display: flex;
    flex-direction: column;
}

.footer-heading {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #f8c038;
}

.footer-links {
    list-style: none;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links a {
    color: #dcdcdc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links a:hover {
    color: #f8c038;
}

.footer-social-links {
    display: flex;
    gap: 15px;
}

.social-link {
    color: #dcdcdc;
    font-size: 20px;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #f8c038;
}

.footer-newsletter-form {
    display: flex;
    gap: 10px;
}

.newsletter-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #555;
    border-radius: 5px;
    width: 100%;
}

.newsletter-btn {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #f8c038;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.newsletter-btn:hover {
    background-color: #e0b22e;
}

/* Footer Bottom */
.footer-bottom {
    background-color: #1c1c1c;
    text-align: center;
    padding: 20px 0;
    font-size: 14px;
    color: #b0b0b0;
}
</style>
