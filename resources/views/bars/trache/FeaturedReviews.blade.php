<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Reviews Management</title>
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

    /* Featured Reviews Section */
    .featured-reviews {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
        padding: 2rem 7%;
        background-color: #fff;
    }

    .review {
        position: relative;
        padding: 1.5rem;
        background-color: #f4f4f4;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .review:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .review .reviewer-image {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #d4af37;
        margin-bottom: 1rem;
    }

    .review h3 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }

    .review p {
        font-size: 1rem;
        color: #4a4a4a;
        margin-bottom: 1rem;
    }

    .review .reviewer-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .review .reviewer-info span {
        font-size: 0.9rem;
        color: #d4af37;
        font-weight: 500;
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
        <h1>Featured Reviews Management</h1>
    </header>

    <!-- Featured Reviews Display -->
    <section class="featured-reviews">
        <div class="review">
            <img src="/path/to/reviewer1.jpg" alt="Reviewer 1" class="reviewer-image">
            <h3>Amazing Experience!</h3>
            <p>"The stay was exceptional. The staff was friendly, and the atmosphere was perfect. Highly recommend this place for a peaceful getaway!"</p>
            <div class="reviewer-info">
                <span>John Doe</span> <span>⭐ 5.0</span>
            </div>
        </div>

        <div class="review">
            <img src="/path/to/reviewer2.jpg" alt="Reviewer 2" class="reviewer-image">
            <h3>Incredible Service!</h3>
            <p>"I loved every moment of my time here. The service was impeccable, and the food was divine. Will definitely return."</p>
            <div class="reviewer-info">
                <span>Jane Smith</span> <span>⭐ 4.8</span>
            </div>
        </div>

        <div class="review">
            <img src="/path/to/reviewer3.jpg" alt="Reviewer 3" class="reviewer-image">
            <h3>Highly Recommend!</h3>
            <p>"This was a truly magical experience. The location, the ambiance, and the hospitality made our trip unforgettable!"</p>
            <div class="reviewer-info">
                <span>Emily Johnson</span> <span>⭐ 5.0</span>
            </div>
        </div>

        <div class="review">
            <img src="/path/to/reviewer4.jpg" alt="Reviewer 4" class="reviewer-image">
            <h3>Perfect Escape</h3>
            <p>"A perfect escape from the hustle and bustle. The serene environment and amazing services made our stay unforgettable."</p>
            <div class="reviewer-info">
                <span>Michael Brown</span> <span>⭐ 4.9</span>
            </div>
        </div>
    </section>

    <!-- Form Section for Admin Editing -->
    <section class="form-container">
        <h3>Update Featured Reviews</h3>
        <form action="#" method="POST">
            <label for="reviewSelect1">Select Featured Review 1</label>
            <select id="reviewSelect1" name="reviewSelect1">
                <option value="review1">Amazing Experience - John Doe</option>
                <option value="review2">Incredible Service - Jane Smith</option>
                <option value="review3">Highly Recommend - Emily Johnson</option>
                <option value="review4">Perfect Escape - Michael Brown</option>
            </select>

            <label for="reviewSelect2">Select Featured Review 2</label>
            <select id="reviewSelect2" name="reviewSelect2">
                <option value="review1">Amazing Experience - John Doe</option>
                <option value="review2">Incredible Service - Jane Smith</option>
                <option value="review3">Highly Recommend - Emily Johnson</option>
                <option value="review4">Perfect Escape - Michael Brown</option>
            </select>

            <label for="reviewSelect3">Select Featured Review 3</label>
            <select id="reviewSelect3" name="reviewSelect3">
                <option value="review1">Amazing Experience - John Doe</option>
                <option value="review2">Incredible Service - Jane Smith</option>
                <option value="review3">Highly Recommend - Emily Johnson</option>
                <option value="review4">Perfect Escape - Michael Brown</option>
            </select>

            <label for="reviewSelect4">Select Featured Review 4</label>
            <select id="reviewSelect4" name="reviewSelect4">
                <option value="review1">Amazing Experience - John Doe</option>
                <option value="review2">Incredible Service - Jane Smith</option>
                <option value="review3">Highly Recommend - Emily Johnson</option>
                <option value="review4">Perfect Escape - Michael Brown</option>
            </select>

            <button type="submit" class="btn-submit">Save Changes</button>
        </form>
    </section>

</body>
</html>
