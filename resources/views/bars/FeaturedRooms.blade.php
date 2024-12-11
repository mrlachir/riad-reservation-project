<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Rooms Management</title>
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

    /* Featured Rooms Section */
    .featured-rooms {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        padding: 2rem 7%;
        background-color: #fff;
    }

    .featured-room {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .featured-room img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .featured-room:hover img {
        transform: scale(1.1);
    }

    .featured-room-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        z-index: 10;
    }

    .featured-room h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .featured-room p {
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    .btn-view-room {
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

    .btn-view-room:hover {
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
        <h1>Featured Rooms Management</h1>
    </header>

    <!-- Featured Rooms Display -->
    <section class="featured-rooms">
        <div class="featured-room">
            <img src="/path/to/room-image1.jpg" alt="Room 1">
            <div class="featured-room-content">
                <h3>Deluxe Room</h3>
                <p>Spacious and luxurious with a king-sized bed and a beautiful view.</p>
                <a href="/room/1" class="btn-view-room">View Room</a>
            </div>
        </div>

        <div class="featured-room">
            <img src="/path/to/room-image2.jpg" alt="Room 2">
            <div class="featured-room-content">
                <h3>Junior Suite</h3>
                <p>Modern decor with cozy interiors and an intimate ambiance.</p>
                <a href="/room/2" class="btn-view-room">View Room</a>
            </div>
        </div>

        <div class="featured-room">
            <img src="/path/to/room-image3.jpg" alt="Room 3">
            <div class="featured-room-content">
                <h3>Garden Villa</h3>
                <p>Private villa with a garden view and all the comforts you need.</p>
                <a href="/room/3" class="btn-view-room">View Room</a>
            </div>
        </div>
    </section>

    <!-- Form Section for Admin Editing -->
    <section class="form-container">
        <h3>Update Featured Rooms</h3>
        <form action="#" method="POST">
            <label for="roomSelect1">Select Featured Room 1</label>
            <select id="roomSelect1" name="roomSelect1">
                <option value="room1">Deluxe Room</option>
                <option value="room2">Junior Suite</option>
                <option value="room3">Garden Villa</option>
            </select>

            <label for="roomSelect2">Select Featured Room 2</label>
            <select id="roomSelect2" name="roomSelect2">
                <option value="room1">Deluxe Room</option>
                <option value="room2">Junior Suite</option>
                <option value="room3">Garden Villa</option>
            </select>

            <label for="roomSelect3">Select Featured Room 3</label>
            <select id="roomSelect3" name="roomSelect3">
                <option value="room1">Deluxe Room</option>
                <option value="room2">Junior Suite</option>
                <option value="room3">Garden Villa</option>
            </select>

            <label for="ctaText">CTA Button Text</label>
            <input type="text" id="ctaText" name="ctaText" placeholder="Enter CTA button text" value="Discover More Rooms">

            <label for="ctaLink">CTA Button Link</label>
            <input type="text" id="ctaLink" name="ctaLink" placeholder="Enter CTA button link" value="/rooms">

            <button type="submit" class="btn-submit">Save Changes</button>
        </form>
    </section>

</body>
</html>
