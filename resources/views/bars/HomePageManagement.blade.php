@include('bars.SidebarMenu');

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
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Make the select elements appear in one line with width 20% */
        .form-container .select-group {
            display: flex;
            justify-content: space-between;
            /* gap: 1rem; Add space between selects */
        }

        .form-container select {
            width: 20%; /* Set width to 20% */
            white-space: nowrap; /* Prevents the content from wrapping */
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

        #overlayText{
            width: 50%;
        }
        #heroImage{
            width: 50%;
    
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
            <div class="select-group">
                <select id="activitiesSelection" name="activities">
                    <option value="activity1">Activity 1</option>
                    <option value="activity2">Activity 2</option>
                    <option value="activity3">Activity 3</option>
                    <option value="activity4">Activity 4</option>
                </select>
                <select id="activitiesSelection2" name="activities">
                    <option value="activity1">Activity 1</option>
                    <option value="activity2">Activity 2</option>
                    <option value="activity3">Activity 3</option>
                    <option value="activity4">Activity 4</option>
                </select>
            </div>

            <label for="roomsSelection">Select 3 Rooms</label>
            <div class="select-group">
                <select id="roomsSelection" name="rooms">
                    <option value="room1">Room 1</option>
                    <option value="room2">Room 2</option>
                    <option value="room3">Room 3</option>
                    <option value="room4">Room 4</option>
                </select>
                <select id="roomsSelection2" name="rooms">
                    <option value="room1">Room 1</option>
                    <option value="room2">Room 2</option>
                    <option value="room3">Room 3</option>
                    <option value="room4">Room 4</option>
                </select>
                <select id="roomsSelection3" name="rooms">
                    <option value="room1">Room 1</option>
                    <option value="room2">Room 2</option>
                    <option value="room3">Room 3</option>
                    <option value="room4">Room 4</option>
                </select>
            </div>

            <label for="reviewsSelection">Select 4 Reviews</label>
            <div class="select-group">
                <select id="reviewsSelection" name="reviews">
                    <option value="review1">Review 1</option>
                    <option value="review2">Review 2</option>
                    <option value="review3">Review 3</option>
                    <option value="review4">Review 4</option>
                </select>
                <select id="reviewsSelection2" name="reviews">
                    <option value="review1">Review 1</option>
                    <option value="review2">Review 2</option>
                    <option value="review3">Review 3</option>
                    <option value="review4">Review 4</option>
                </select>
                <select id="reviewsSelection3" name="reviews">
                    <option value="review1">Review 1</option>
                    <option value="review2">Review 2</option>
                    <option value="review3">Review 3</option>
                    <option value="review4">Review 4</option>
                </select>
                <select id="reviewsSelection4" name="reviews">
                    <option value="review1">Review 1</option>
                    <option value="review2">Review 2</option>
                    <option value="review3">Review 3</option>
                    <option value="review4">Review 4</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">Save Changes</button>
        </form>
    </section>

</body>
</html>
