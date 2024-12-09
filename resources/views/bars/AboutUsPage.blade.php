<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Riad Booking</title>
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

.container {
    width: 80%;
    margin: 0 auto;
    padding: 50px 0;
}

/* Section Styles */
.section-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.5rem;
    color: #2a2a2a;
    margin-bottom: 20px;
}

.subheading {
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
    margin-top: 20px;
}

.text {
    font-size: 1.1rem;
    color: #555;
    margin-top: 10px;
    text-align: justify;
}

/* Riad Story Section */
.riad-story {
    margin-bottom: 50px;
}

.story-content {
    display: flex;
    gap: 30px;
}

.image-container img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.text-container {
    flex: 1;
}

/* Mission & Vision Section */
.mission-vision {
    margin-bottom: 50px;
}

.mission-vision-content {
    display: flex;
    justify-content: space-between;
}

.mission, .vision {
    width: 45%;
}

.mission p, .vision p {
    font-size: 1.1rem;
    color: #555;
    margin-top: 10px;
    text-align: justify;
}

/* Team Section */
.team {
    margin-bottom: 50px;
}

.team-members {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.team-member {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 30%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.team-member-img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
}

.team-member h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 10px;
}

.role {
    font-size: 1rem;
    font-weight: 500;
    color: #777;
    margin-bottom: 10px;
}

.team-member p {
    font-size: 1rem;
    color: #555;
    text-align: center;
    margin-top: 10px;
}

    </style>

    <!-- Main Content -->
    <div class="container">
        
        <!-- Riad Story Section -->
        <section class="riad-story">
            <h2 class="section-title">Our Riad Story</h2>
            <div class="story-content">
                <div class="image-container">
                    <img src="path-to-your-image.jpg" alt="Riad Image">
                </div>
                <div class="text-container">
                    <p class="text">
                        Nestled in the heart of the historic medina of Marrakech, our Riad offers a serene escape that blends traditional Moroccan architecture with modern comforts. Built over a century ago, the Riad has been meticulously restored, preserving its original beauty while adding a touch of contemporary luxury. The intricately carved wooden doors, marble floors, and the enchanting courtyard garden with its soothing fountain reflect the authentic charm of Moroccan craftsmanship.
                    </p>
                    <p class="text">
                        Over the years, the Riad has served as a sanctuary for travelers from around the world, offering an oasis of calm amid the hustle and bustle of the city. Every corner of our Riad has its own story, and we are proud to continue sharing the spirit and heritage of Marrakech with our guests.
                    </p>
                </div>
            </div>
        </section>

        <!-- Mission & Vision Section -->
        <section class="mission-vision">
            <h2 class="section-title">Our Mission & Vision</h2>
            <div class="mission-vision-content">
                <div class="mission">
                    <h3 class="subheading">Mission</h3>
                    <p>
                        Our mission is to provide our guests with an unforgettable experience by offering a unique blend of Moroccan hospitality, rich culture, and luxurious comfort. We aim to create an authentic, personalized experience that celebrates the beauty of our heritage while ensuring every guest feels at home.
                    </p>
                </div>
                <div class="vision">
                    <h3 class="subheading">Vision</h3>
                    <p>
                        Our vision is to be recognized as one of the finest Riad experiences in Marrakech, offering world-class service while preserving the essence of Moroccan culture. We aim to be a place where every guest feels welcome, valued, and inspired by the timeless beauty of our surroundings and the warmth of our hospitality.
                    </p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team">
            <h2 class="section-title">Meet Our Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <img src="path-to-team-member-image.jpg" alt="Team Member 1" class="team-member-img">
                    <h3>Amina El-Haouti</h3>
                    <p class="role">General Manager</p>
                    <p>
                        Amina has been the heart and soul of the Riad for over 10 years. With her deep knowledge of local culture and passion for hospitality, she ensures every guest feels welcome and cared for.
                    </p>
                </div>
                <div class="team-member">
                    <img src="path-to-team-member-image.jpg" alt="Team Member 2" class="team-member-img">
                    <h3>Youssef Benhaddou</h3>
                    <p class="role">Chef & Culinary Expert</p>
                    <p>
                        Youssef is a master of traditional Moroccan cuisine. With over 15 years of experience, he creates exquisite dishes that are a true reflection of Morocco's rich culinary heritage.
                    </p>
                </div>
                <div class="team-member">
                    <img src="path-to-team-member-image.jpg" alt="Team Member 3" class="team-member-img">
                    <h3>Samira Bensaid</h3>
                    <p class="role">Guest Relations Manager</p>
                    <p>
                        Samira is dedicated to ensuring every guest enjoys a seamless stay at the Riad. Her attention to detail guarantees that every need is met with care.
                    </p>
                </div>
            </div>
        </section>

    </div>

</body>
</html>
