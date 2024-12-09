<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities Listings</title>
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

/* Header Section */
header {
    text-align: center;
    padding: 3rem 0;
    background-color: #b18f2a;
    color: white;
}

header h1 {
    font-size: 2.5rem;
    font-weight: 700;
}

header p {
    font-size: 1.2rem;
    margin-top: 10px;
}

/* Activities Section */
.activities {
    padding: 4rem 7%;
    text-align: center;
}

.activities h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 40px;
}

/* Activity Cards */
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
    width: 45%;
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

.activity-card .price {
    font-size: 1.2rem;
    font-weight: bold;
    color: #b18f2a;
}

.activity-card .booking-info {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #777;
}

/* Button Styles */
.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #b18f2a;
    color: white;
    font-size: 1rem;
    border-radius: 30px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #9f7d24;
}

.btn-learn-more {
    background-color: #2c3e50;
}

.btn-learn-more:hover {
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

    <!-- Header Section -->
    <header>
        <h1>Explore Our Activities</h1>
        <p>Discover exciting activities during your stay at our Riad</p>
    </header>

    <!-- Activities Section -->
    <section class="activities">
        <h2>Featured Activities</h2>
        <div class="activity-cards">
            <!-- Activity Card 1 -->
            <div class="activity-card">
                <img src="https://via.placeholder.com/350x250" alt="Spa">
                <h3>Relaxing Spa</h3>
                <p>Unwind with a rejuvenating spa treatment designed to relax your body and mind.</p>
                <p class="price">$50 per person</p>
                <p class="booking-info">Availability: Daily, 10:00 AM - 6:00 PM</p>
                <a href="/activities/spa" class="btn btn-learn-more">Learn More</a>
            </div>

            <!-- Activity Card 2 -->
            <div class="activity-card">
                <img src="https://via.placeholder.com/350x250" alt="Cultural Tour">
                <h3>Cultural Tour</h3>
                <p>Take a guided tour to explore the rich history and vibrant culture of Marrakech.</p>
                <p class="price">$30 per person</p>
                <p class="booking-info">Availability: Mon-Sat, 9:00 AM - 3:00 PM</p>
                <a href="/activities/tours" class="btn btn-learn-more">Learn More</a>
            </div>

            <!-- Activity Card 3 -->
            <div class="activity-card">
                <img src="https://via.placeholder.com/350x250" alt="Cooking Class">
                <h3>Moroccan Cooking Class</h3>
                <p>Learn how to cook authentic Moroccan dishes in a hands-on, interactive class.</p>
                <p class="price">$40 per person</p>
                <p class="booking-info">Availability: Tuesdays & Thursdays, 4:00 PM - 7:00 PM</p>
                <a href="/activities/cooking" class="btn btn-learn-more">Book Now</a>
            </div>

            <!-- Activity Card 4 -->
            <div class="activity-card">
                <img src="https://via.placeholder.com/350x250" alt="Yoga Retreat">
                <h3>Yoga Retreat</h3>
                <p>Join our peaceful yoga retreat to connect with nature and restore your balance.</p>
                <p class="price">$80 per session</p>
                <p class="booking-info">Availability: Every Weekend, 7:00 AM - 9:00 AM</p>
                <a href="/activities/yoga" class="btn btn-learn-more">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Riad Booking. All rights reserved.</p>
    </footer>

</body>
</html>
