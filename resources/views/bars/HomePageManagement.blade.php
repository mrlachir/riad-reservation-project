<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: #f9f5f0;
            color: #4a4a4a;
        }

        /* Header Section */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 7%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .header h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 80vh;
            background-image: url('/path/to/your-image.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-text {
            z-index: 10;
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-btn {
            text-decoration: none;
            background-color: #d4af37;
            color: #fff;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .cta-btn:hover {
            background-color: #b18f2a;
        }

        /* Form Section for Admin Editing */
        .form-container {
            padding: 2rem 7%;
        }

        .form-container h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .form-container label {
            font-weight: 600;
            color: #2c3e50;
            display: block;
            margin-bottom: 0.5rem;
        }

        .form-container input[type="text"],
        .form-container input[type="file"],
        .form-container select {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container .btn-submit {
            background-color: #d4af37;
            color: #fff;
            border: 2px solid #d4af37;
            padding: 10px 20px;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-container .btn-submit:hover {
            background-color: #b18f2a;
            border-color: #b18f2a;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="header">
        <h1>Home Page Management</h1>
    </header>


    <!-- Form Section for Admin Editing -->
    <section class="form-container">
        <h3>Update Hero Section</h3>
        <form action="/api/update-homepage" method="POST" enctype="multipart/form-data">
            <label for="heroImage">Upload New Hero Image</label>
            <input type="file" id="heroImage" name="heroImage" accept="image/*">

            <label for="overlayText">Overlay Text</label>
            <input type="text" id="overlayText" name="overlayText" placeholder="Enter new text" value="A peaceful escape in the heart of Marrakech">

            <label for="activitiesSelection">Select 2 Activities</label>
            <select id="activitiesSelection" name="activities">
                <option value="activity1">Activity 1</option>
                <option value="activity2">Activity 2</option>
                <option value="activity3">Activity 3</option>
                <option value="activity4">Activity 4</option>
            </select>
            <select id="activitiesSelection" name="activities">
                <option value="activity1">Activity 1</option>
                <option value="activity2">Activity 2</option>
                <option value="activity3">Activity 3</option>
                <option value="activity4">Activity 4</option>
            </select>

            <label for="roomsSelection">Select 3 Rooms</label>
            <select id="roomsSelection" name="rooms">
                <option value="room1">Room 1</option>
                <option value="room2">Room 2</option>
                <option value="room3">Room 3</option>
                <option value="room4">Room 4</option>
            </select>

            <label for="reviewsSelection">Select 4 Reviews</label>
            <select id="reviewsSelection" name="reviews">
                <option value="review1">Review 1</option>
                <option value="review2">Review 2</option>
                <option value="review3">Review 3</option>
                <option value="review4">Review 4</option>
            </select>

            <button type="submit" class="btn-submit">Save Changes</button>
        </form>
    </section>

    <script>
        // JavaScript to update the hero section text dynamically
        const heroTextInput = document.getElementById('overlayText');
        const heroTextDisplay = document.getElementById('heroText');

        heroTextInput.addEventListener('input', function() {
            heroTextDisplay.textContent = heroTextInput.value;
        });
    </script>

</body>
</html>
