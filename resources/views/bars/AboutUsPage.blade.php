<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Riad Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: rgb(98, 140, 148);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align to top */
            flex-direction: column;
            padding-top: 50px;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            padding: 50px 0;
        }

        /* Section Styles */
        .section-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            color: #2a2a2a;
            margin-bottom: 20px;
            text-align: center;
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
            margin-left : 20px;
            line-height: 1.6;
            padding: 20px;
            background-color: #f7f0e1;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: justify; /* Justify text */
        }

        /* Riad Story Section */
        .riad-story {
            margin-bottom: 50px;
            width: 100%;
        }

        .story-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            padding: 20px;
        }

        /* Image container */
        .image-container {
            width: 100%;
            max-width: 900px;
            margin-top: 20px;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            max-width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Mission & Vision Section */
        .mission-vision {
            margin-bottom: 50px;
            width : 100%;
        }

        .mission-vision-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .mission,
        .vision {
            width: 45%;
        }

        .mission h3,
        .vision h3 {
            text-align: center; /* Center subheadings */
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .mission p,
        .vision p {
            font-size: 1.1rem;
            color: #555;
            margin-top: 10px;
            margin-left : 50px;
            text-align: justify;
            background-color : #f7f0e1;
            line-height: 1.6;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            background-color: #f7f0e1;
            padding: 20px;
            margin-left : 50px;
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
</head>
<body>
    <div class="container">
        <!-- Riad Story Section -->
        <section class="riad-story">
            <h2 class="section-title">Our Riad Story</h2>
            <div class="story-content">
                <!-- Image Container (Now appears first) -->
                <div class="image-container">
                    <img src="https://www.travelplusstyle.com/wp-content/uploads/2023/05/La-Sultana-Marrakech-patio-Bahia.jpg" alt="Riad Image">
                </div>

                <!-- Text Container (Appears below image) -->
                <div class="text">
                    <p>
                        Nestled in the heart of the historic medina of Marrakech, our Riad offers a serene escape that blends traditional Moroccan architecture with modern comforts. Built over a century ago, the Riad has been meticulously restored, preserving its original beauty while adding a touch of contemporary luxury. The intricately carved wooden doors, marble floors, and the enchanting courtyard garden with its soothing fountain reflect the authentic charm of Moroccan craftsmanship.
                    </p>
                    <p>
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
                    <h3>Anass Hadraoui</h3>
                    <p class="role">General Manager</p>
                    <p>
                        Anass has been the heart and soul of the Riad for over 10 years. With his deep knowledge of local culture and passion for hospitality, he ensures every guest feels welcome and cared for.
                    </p>
                </div>
                <div class="team-member">
                    <h3>Zakaria Chagraoui</h3>
                    <p class="role">Chef & Culinary Expert</p>
                    <p>
                        Zakaria is a master of traditional Moroccan cuisine. With over 15 years of experience, he creates exquisite dishes that are a true reflection of Morocco's rich culinary heritage.
                    </p>
                </div>
                <div class="team-member">
                   <h3>Abdelkamel Raoui</h3>
                    <p class="role">Guest Relations Manager</p>
                    <p>
                        Abdelkamel is dedicated to ensuring every guest enjoys a seamless stay at the Riad. His attention to detail guarantees that every need is met with care.
                    </p>
                </div>
            </div>
        </section>

    </div>
</body>
</html>
