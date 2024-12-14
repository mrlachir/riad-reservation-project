<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riad Booking Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- External stylesheet link -->
</head>
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

/* Riad Image & Info Section */
.riad-info {
    position: relative;
}

.riad-image img {
    width: 100%;
    height: 100vh;
    object-fit: cover;
}

.overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
}

.overlay h2 {
    font-size: 3rem;
    font-weight: 700;
}

.btn-register {
    font-size: 1rem;
    padding: 12px 30px;
    border-radius: 30px;
    color:rgb(0, 0, 0);
    background-color:rgb(226, 182, 51);
    margin-top: 20px;
}
/* .overlay .btn-register {
    font-size: 1rem;
    padding: 12px 30px;
    border-radius: 30px;
    color:rgb(0, 0, 0);
    background-color: #b18f2a;
    margin-top: 20px;
} */

/* Featured Rooms Section */
.featured-rooms {
    padding: 4rem 7%;
    text-align: center;
}

.featured-rooms h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 40px;
}

.room-cards {
    display: flex;
    justify-content: space-between;
    gap: 30px;
}

.room-card {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 30%;
    text-align: center;
    border-radius: 10px;
}

.room-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.room-card h3 {
    font-size: 1.5rem;
    margin: 15px 0;
}

.room-card p {
    font-size: 1rem;
    margin-bottom: 20px;
}

.room-card .btn-register {
    font-size: 1rem;
}

/* Featured Activities Section */
.featured-activities {
    padding: 4rem 7%;
    background-color: #f9f5f0;
    text-align: center;
}

.featured-activities h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 40px;
}

.activity-cards {
    display: flex;
    justify-content: space-between;
    gap: 30px;
}

.activity-card {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 45%;
    text-align: center;
    border-radius: 10px;
}

.activity-card img {
    width: 100%;
    height: 500px;
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

.activity-card .btn-register {
    font-size: 1rem;
}

/* Featured Reviews Section */
.featured-reviews {
    padding: 4rem 7%;
    text-align: center;
}

.featured-reviews h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 40px;
}

.review-cards {
    display: flex;
    justify-content: space-between;
    gap: 30px;
}

.review-card {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 23%;
    text-align: center;
    border-radius: 10px;
}

.review-card .stars {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.review-card p {
    font-size: 1rem;
}

/* Footer Section */
.footer {
    text-align: center;
    padding: 20px;
    background-color: #2c3e50;
    color: white;
}

.footer p {
    font-size: 1rem;
}
a {
  text-decoration: none; /* Removes underline */
  color: inherit; /* Inherits color from the parent element */
  background: none; /* Removes any background */
}
.discover-more {
    text-align: center;
    margin-top: 30px;
}
</style>
<body>

    <!-- Riad Image & Info Section -->
    <section class="riad-info">
        <div class="riad-image">
            <img src="https://sf1.mariefranceasia.com/wp-content/uploads/sites/7/2018/03/marrakech-nira.jpg" alt="Riad Image">
            <div class="overlay">
                <h2>A peaceful escape in the heart of Marrakech</h2>
                <a href="{{ route('room.listings') }}" class="btn btn-register">Explore Our Rooms</a>

            </div>
        </div>
    </section>

    <!-- Featured Rooms Section -->
    <section class="featured-rooms">
        <h2>Featured Rooms</h2>
        <div class="room-cards">
            <div class="room-card">
                <img src="https://rootsabroadtravel.com/wp-content/uploads/2022/12/Riad-Assala-04.jpg" alt="Room 1">
                <h3>Deluxe Room</h3>
                <p>Enjoy luxury and comfort in our spacious deluxe room.</p>
                <a href="{{ route('room.page') }}" class="btn btn-register">Book Now</a>
            </div>
            <div class="room-card">
                <img src="https://cache.marriott.com/marriottassets/marriott/SVQLC/svqlc-victoria-9285-hor-clsc.jpg" alt="Room 2">
                <h3>Royal Suite</h3>
                <p>Indulge in royal comfort with a beautiful view of Marrakech.</p>
                <a href="{{ route('room.page') }}" class="btn btn-register">Book Now</a>
            </div>
            <div class="room-card">
                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/494340449.jpg?k=6329668db8ad5b0158874e92172066581a807025ce1f67f1e24e2b481d8aa207&o=&hp=1" alt="Room 3">
                <h3>Garden View</h3>
                <p>Relax in our serene garden view room surrounded by nature.</p>
                <a href="{{ route('room.page') }}" class=" btn-register">
                    Book Now
                </a>
            </div>
        </div>
        <div class="discover-more">
            <a href="{{ route('room.listings') }}" class="discover-more-btn">Discover More Rooms</a>
        </div>


    </section>

    <!-- Featured Activities Section -->
    <section class="featured-activities">
        <h2>Featured Activities</h2>
        <div class="activity-cards">
            <div class="activity-card">
                <img src="https://www.riad-sindibad.com/wp-content/uploads/2020/10/DSC_1801.jpg" alt="Spa">
                <h3>Relaxing Spa</h3>
                <p>Rejuvenate your senses with a calming spa experience of Marrakech with our guided tours.</p>
                <a href="{{ route('activity.page') }}" class="btn btn-register">Learn more...</a>
            </div>
            <div class="activity-card">
                <img src="https://www.gboomoroccotours.com/wp-content/uploads/2020/10/241032722_2956237934645201_3699360125521303792_n.jpg" alt="Tours">
                <h3>Cultural Tours</h3>
                <p>Explore the rich history and culture of Marrakech with our guided tours.</p>
                <a href="{{ route('activity.page') }}" class="btn btn-register">Learn more...</a>
            </div>
        </div>
        <div class="discover-more">
            <a href="{{ route('room.listings') }}" class="discover-more-btn">Discover More Activities</a>
        </div>
    </section>








    <!-- Featured Reviews Section -->
    <section class="featured-reviews">
        <h2>Featured Reviews</h2>
        <div class="review-cards">
            <div class="review-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p>"An unforgettable experience! The service was exceptional, and the rooms were perfect." - Jane Doe</p>
            </div>
            <div class="review-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p>"I can't wait to come back! The staff made me feel at home, and the location was perfect." - John Smith</p>
            </div>
            <div class="review-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p>"A serene and peaceful getaway. Highly recommend for anyone visiting Marrakech." - Emily White</p>
            </div>
            <div class="review-card">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p>"Everything exceeded my expectations. Truly a luxury experience!" - Mark Johnson</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Riad Booking. All rights reserved.</p>
    </footer>

</body>
</html>
