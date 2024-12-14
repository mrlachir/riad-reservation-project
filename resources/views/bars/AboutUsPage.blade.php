@include('bars.navigationBare')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Riad Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        body {
            background-color: white;
            color: #333;
            overflow-x: hidden;
        }

        /* Section Styles */
        .section {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Header Styles */
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: #3498db;
        }

        /* Content Styles */
        .content {
            max-width: 1200px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        /* Riad Story Section */
        .riad-story .image-container {
            max-width: 900px;
            width: 100%;
            margin-bottom: 30px;
        }

        .riad-story img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }

        .riad-story .text {
            max-width: 800px;
            text-align: center;
            color: #34495e;
            font-size: 1.1rem;
        }

        /* Mission & Vision Styles */
        .mission-vision-content {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            width: 100%;
        }

        .mission, .vision {
            flex: 1;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Team Section */
        .team-members {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            width: 100%;
        }

        .team-member {
            flex: 1;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .role {
            color: #7f8c8d;
            margin-bottom: 15px;
            font-style: italic;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2.5rem;
            }

            .mission-vision-content,
            .team-members {
                flex-direction: column;
            }

            .mission, 
            .vision, 
            .team-member {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }
    </style>
</head>
<body>
    <!-- Riad Story Section -->
    <section class="section riad-story">
        <div class="content">
            <h2 class="section-title">Our Riad Story</h2>
            <div class="image-container">
                <img src="https://www.travelplusstyle.com/wp-content/uploads/2023/05/La-Sultana-Marrakech-patio-Bahia.jpg" alt="Riad Image">
            </div>
            <div class="text">
                <p>
                    Nestled in the heart of the historic medina of Marrakech, our Riad offers a serene escape that blends traditional Moroccan architecture with modern comforts. Built over a century ago, the Riad has been meticulously restored, preserving its original beauty while adding a touch of contemporary luxury.
                </p>
                <p>
                    Over the years, the Riad has served as a sanctuary for travelers from around the world, offering an oasis of calm amid the hustle and bustle of the city.
                </p>
            </div>
            <div class="scroll-indicator">▼</div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="section mission-vision">
        <div class="content">
            <h2 class="section-title">Our Mission & Vision</h2>
            <div class="mission-vision-content">
                <div class="mission">
                    <h3>Mission</h3>
                    <p>
                        Our mission is to provide our guests with an unforgettable experience by offering a unique blend of Moroccan hospitality, rich culture, and luxurious comfort. We aim to create an authentic, personalized experience that celebrates the beauty of our heritage while ensuring every guest feels at home.
                    </p>
                </div>
                <div class="vision">
                    <h3>Vision</h3>
                    <p>
                        Our vision is to be recognized as one of the finest Riad experiences in Marrakech, offering world-class service while preserving the essence of Moroccan culture. We aim to be a place where every guest feels welcome, valued, and inspired by the timeless beauty of our surroundings.
                    </p>
                </div>
            </div>
            <div class="scroll-indicator">▼</div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section team">
        <div class="content">
            <h2 class="section-title">Meet Our Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <h3>Mohammed Lachir</h3>
                    <p class="role">General Manager</p>
                    <p>
                        Anass has been the heart and soul of the Riad for over 10 years. With his deep knowledge of local culture and passion for hospitality, he ensures every guest feels welcome and cared for.
                    </p>
                </div>
                <div class="team-member">
                    <h3>Zakariae Chagraoui</h3>
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
            <div class="scroll-indicator">▼</div>
        </div>
    </section>
</body>
</html>
@include('bars.Footer')