<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- External stylesheet link -->
</head>
<body>
    <style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body and Font Settings */
body {
    font-family: 'Montserrat', sans-serif;
    line-height: 1.6;
    background-color: #f9f5f0;
    color: #4a4a4a;
}

/* Room Info Section */
.room-info {
    padding: 4rem 7%;
    display: flex;
    justify-content: space-between;
    gap: 30px;
    flex-wrap: wrap;
}

.room-info .room-details {
    display: flex;
    gap: 30px;
}

.room-info .room-images {
    flex: 1;
}

.room-info .room-images img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 20px;
}

.room-info .room-description {
    flex: 1.5;
    max-width: 500px;
}

.room-info h1 {
    font-size: 2.5rem;
    font-weight: 700;
}

.room-info .price {
    font-size: 1.5rem;
    color: #b18f2a;
    margin: 10px 0;
}

.room-info .description {
    font-size: 1rem;
    margin-bottom: 20px;
}

.room-info h3 {
    font-size: 1.2rem;
    margin-top: 20px;
}

.room-info ul {
    list-style-type: none;
    padding-left: 0;
}

.room-info li {
    font-size: 1rem;
    margin: 5px 0;
}

.room-info .availability {
    font-size: 1.2rem;
    margin-top: 10px;
}

.room-info .rating {
    font-size: 1.2rem;
    margin-top: 20px;
}

/* Booking Section */
.booking {
    padding: 3rem 7%;
    text-align: center;
}

.booking form {
    max-width: 400px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

.booking input[type="date"] {
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.booking button {
    padding: 10px 20px;
    background-color: #b18f2a;
    color: white;
    font-size: 1rem;
    border-radius: 30px;
    border: none;
    margin-top: 20px;
    cursor: pointer;
}

.booking button:hover {
    background-color: #9f7d24;
}

/* Review Section */
.review-section {
    padding: 3rem 7%;
    background-color: #f9f5f0;
    text-align: center;
}

.review-section form {
    max-width: 500px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

.review-section textarea {
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
    resize: vertical;
}

.review-section select {
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.review-section button {
    padding: 10px 20px;
    background-color: #b18f2a;
    color: white;
    font-size: 1rem;
    border-radius: 30px;
    border: none;
    cursor: pointer;
}

.review-section button:hover {
    background-color: #9f7d24;
}

/* Recommended Activities Section */
.recommended-activities {
    padding: 4rem 7%;
    text-align: center;
}

.recommended-activities h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 40px;
}

.activity-cards {
    display: flex;
    justify-content: space-between;
    gap: 30px;
    flex-wrap: wrap;
}

.activity-card {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 30%;
    text-align: center;
    border-radius: 10px;
    margin-bottom: 30px;
}

.activity-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.activity-card h3 {
    font-size: 1.5rem;
    margin: 15px 0;
}

.activity-card p {
    font-size: 1rem;
    margin-bottom: 20px;
}

.activity-card .btn-learn-more {
    padding: 10px 20px;
    background-color: #2c3e50;
    color: white;
    font-size: 1rem;
    border-radius: 30px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.activity-card .btn-learn-more:hover {
    background-color: #1a252f;
}

/* Footer Section */
footer {
    text-align: center;
    padding: 20px;
    background-color: #2c3e50;
    color: white;
}

footer p {
    font-size: 1rem;
}

    </style>

    <!-- Room Info Section -->
    <section class="room-info">
        <div class="room-details">
            <div class="room-images">
                <img src="https://via.placeholder.com/800x600" alt="Room Image 1">
                <img src="https://via.placeholder.com/800x600" alt="Room Image 2">
                <img src="https://via.placeholder.com/800x600" alt="Room Image 3">
            </div>
            <div class="room-description">
                <h1>Deluxe Room</h1>
                <p class="price">$150 per night</p>
                <p class="description">Our Deluxe Room offers a spacious and comfortable environment, featuring elegant furnishings and modern amenities for a luxurious stay.</p>
                <h3>Features:</h3>
                <ul>
                    <li>King-size bed</li>
                    <li>Private bathroom with a jacuzzi</li>
                    <li>Air conditioning</li>
                    <li>Free WiFi</li>
                    <li>Flat-screen TV</li>
                </ul>
                <p class="availability">Availability: <strong>Available</strong></p>
                <div class="rating">
                    <span>⭐⭐⭐⭐⭐</span>
                    <p>4.8/5 - Based on 120 reviews</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="booking">
        <h2>Book Your Stay</h2>
        <form action="/book" method="post">
            <label for="check-in">Check-in Date:</label>
            <input type="date" id="check-in" name="check-in" required>
            <label for="check-out">Check-out Date:</label>
            <input type="date" id="check-out" name="check-out" required>
            <button type="submit" class="btn btn-book-now">Book Now</button>
        </form>
    </section>

    <!-- Make a Review Section -->
    <section class="review-section">
        <h2>Leave a Review</h2>
        <form action="/submit-review" method="post">
            <label for="review">Your Review:</label>
            <textarea id="review" name="review" rows="4" placeholder="Write your review here..." required></textarea>
            <label for="rating">Your Rating:</label>
            <select id="rating" name="rating" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
            <button type="submit" class="btn btn-submit-review">Submit Review</button>
        </form>
    </section>

    <!-- Recommended Activities Section -->
    <section class="recommended-activities">
        <h2>Recommended Activities</h2>
        <div class="activity-cards">
            <div class="activity-card">
                <img src="https://via.placeholder.com/350x250" alt="Spa">
                <h3>Spa & Wellness</h3>
                <p>Relax with a soothing massage or spa treatment to unwind after a long day.</p>
                <a href="/activities/spa" class="btn btn-learn-more">Learn More</a>
            </div>
            <div class="activity-card">
                <img src="https://via.placeholder.com/350x250" alt="City Tour">
                <h3>Cultural City Tour</h3>
                <p>Explore the history and beauty of the city on a guided tour through the old town.</p>
                <a href="/activities/tour" class="btn btn-learn-more">Learn More</a>
            </div>
            <div class="activity-card">
                <img src="https://via.placeholder.com/350x250" alt="Cooking Class">
                <h3>Moroccan Cooking Class</h3>
                <p>Learn how to prepare delicious Moroccan dishes in an interactive cooking class.</p>
                <a href="/activities/cooking" class="btn btn-learn-more">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Riad Booking. All rights reserved.</p>
    </footer>

</body>
</html>
