<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Activities Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>
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

    /* Featured Activities Section */
    .featured-activities {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 2rem 7%;
        background-color: #fff;
    }

    .featured-activity {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .featured-activity img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .featured-activity:hover img {
        transform: scale(1.1);
    }

    .featured-activity-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        z-index: 10;
    }

    .featured-activity h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .featured-activity p {
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    .btn-view-activity {
        text-decoration: none;
        background-color: #d4af37;
        color: #fff;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 25px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .btn-view-activity:hover {
        background-color: #b18f2a;
    }

    /* Form Section for Admin Editing */
    .form-container {
        padding: 2rem 7%;
        background-color: #fff;
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

    .form-container select,
    .form-container input[type="text"] {
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
<body>

    <!-- Header Section -->
    <header class="header">
        <h1>Featured Activities Management</h1>
    </header>

    <!-- Featured Activities Display -->
    <section class="featured-activities">
        <div class="featured-activity">
            <img src="/path/to/spa-activity.jpg" alt="Spa Activity">
            <div class="featured-activity-content">
                <h3>Spa Treatment</h3>
                <p>Relax and rejuvenate with our luxurious spa treatments.</p>
                <a href="/activity/spa" class="btn-view-activity">View Activity</a>
            </div>
        </div>

        <div class="featured-activity">
            <img src="/path/to/cooking-class.jpg" alt="Cooking Class">
            <div class="featured-activity-content">
                <h3>Cooking Class</h3>
                <p>Learn to cook traditional Moroccan dishes in a fun and interactive class.</p>
                <a href="/activity/cooking-class" class="btn-view-activity">View Activity</a>
            </div>
        </div>

        <div class="featured-activity">
            <img src="/path/to/city-tour.jpg" alt="City Tour">
            <div class="featured-activity-content">
                <h3>City Tour</h3>
                <p>Explore the beauty and culture of Marrakech with our guided city tour.</p>
                <a href="/activity/city-tour" class="btn-view-activity">View Activity</a>
            </div>
        </div>
    </section>

    <!-- Form Section for Admin Editing -->
    <section class="form-container">
        <h3>Update Featured Activities</h3>
        <form action="#" method="POST">
            <label for="activitySelect1">Select Featured Activity 1</label>
            <select id="activitySelect1" name="activitySelect1">
                <option value="spa">Spa Treatment</option>
                <option value="cooking-class">Cooking Class</option>
                <option value="city-tour">City Tour</option>
            </select>

            <label for="activitySelect2">Select Featured Activity 2</label>
            <select id="activitySelect2" name="activitySelect2">
                <option value="spa">Spa Treatment</option>
                <option value="cooking-class">Cooking Class</option>
                <option value="city-tour">City Tour</option>
            </select>

            <label for="activitySelect3">Select Featured Activity 3</label>
            <select id="activitySelect3" name="activitySelect3">
                <option value="spa">Spa Treatment</option>
                <option value="cooking-class">Cooking Class</option>
                <option value="city-tour">City Tour</option>
            </select>

            <label for="ctaText">CTA Button Text</label>
            <input type="text" id="ctaText" name="ctaText" placeholder="Enter CTA button text" value="Discover More Activities">

            <label for="ctaLink">CTA Button Link</label>
            <input type="text" id="ctaLink" name="ctaLink" placeholder="Enter CTA button link" value="/activities">

            <button type="submit" class="btn-submit">Save Changes</button>
        </form>
    </section>

</body>
</html>
