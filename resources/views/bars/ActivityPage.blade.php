@include('bars.navigationBare')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Details - Riad Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        a {
  text-decoration: none; /* Removes underline */
  color: inherit; /* Inherits color from the parent element */
  background: none; /* Removes any background */
}
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .section-title {
            font-family: 'Cormorant Garamond', serif;
        }
        /* Full height for the main image */
        .main-image img {
            height: 80vh;  /* Full viewport height */
            object-fit: cover; /* Ensure the image covers the space */
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Activity Header -->
        <div class="mb-12">
            <!-- Image with Activity Name and Info -->
            <div class="mb-6">
                <!-- Main Image -->
                <div class="main-image">
                    <img src="https://coloredmorocco.com/wp-content/uploads/2015/07/cooking-class-marrakech-tajine-tagine-morocco.jpg" alt="Moroccan Cooking Class" class="object-cover rounded-lg shadow-lg mb-4">
                </div>
                <h1 class="section-title text-3xl font-bold text-gray-800">Moroccan Cooking Class</h1>
                <p class="text-gray-600 leading-relaxed">Learn the art of traditional Moroccan cuisine in an intimate, hands-on cooking experience. Discover secret family recipes and culinary techniques passed down through generations.</p>
            </div>
        </div>

    
        <!-- Recommended Activities -->
        <div>
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-6">Recommended Activities</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Recommended Activity 1 -->
                <a href="#">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://www.riadadore.com/pure-riads/img/riad-adore/the-riad/the-riad-02.jpg" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Relaxing Spa</h3>

                    </div>
                </div>
                </a>

                <!-- Recommended Activity 2 -->
                 <a href="#">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://elegantculturaltours.com/wp-content/uploads/2022/02/Morocco-Elegant-Grand-Tour-post-image-4.jpg" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Cultural tour</h3>
                    </div>
                </div>
                </a>

                <!-- Recommended Activity 3 -->
                <a href="#" >
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://www.ilove-marrakech.com/blog/wp-content/uploads/2024/03/Looking-for-the-Best-Yoga-and-Wellness-Retreats-in-Marrakech-1.png" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Yoga Retreat</h3>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
@include('bars.Footer')