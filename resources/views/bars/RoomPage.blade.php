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
        
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Activity Header -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Image Gallery -->
<div class="space-y-6 max-w-4xl mx-auto">
    <!-- Main Image Section -->
    <div class="main-image">
        <img id="mainImage" src="https://coloredmorocco.com/wp-content/uploads/2015/07/cooking-class-marrakech-tajine-tagine-morocco.jpg" alt="Activity Main Image" class="w-full h-96 object-cover rounded-lg shadow-lg transform transition-transform duration-300 ease-in-out">
    </div>

    <!-- Additional Images Section -->
    <div class="additional-images grid grid-cols-3 gap-6">
        <!-- Small Image 1 -->
        <div class="image-item">
            <img src="https://coloredmorocco.com/wp-content/uploads/2015/07/cooking-class-marrakech-tajine-tagine-morocco.jpg" alt="Additional Image 1" class="small-image w-full h-32 object-cover rounded-lg shadow-lg transform transition-transform duration-200 ease-in-out hover:scale-105 cursor-pointer" onclick="changeMainImage(this)">
        </div>
        
        <!-- Small Image 2 -->
        <div class="image-item">
            <img src="https://coloredmorocco.com/wp-content/uploads/2015/07/cooking-class-marrakech-tajine-tagine-morocco.jpg" alt="Additional Image 2" class="small-image w-full h-32 object-cover rounded-lg shadow-lg transform transition-transform duration-200 ease-in-out hover:scale-105 cursor-pointer" onclick="changeMainImage(this)">
        </div>

        <!-- Small Image 3 -->
        <div class="image-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYIHOP9kyl133oln2ehNm0IVBShBTzXqegbg&s" alt="Additional Image 3" class="small-image w-full h-32 object-cover rounded-lg shadow-lg transform transition-transform duration-200 ease-in-out hover:scale-105 cursor-pointer" onclick="changeMainImage(this)">
        </div>
    </div>
</div>

<script>
    function changeMainImage(thumbnail) {
        // Get the main image element
        const mainImage = document.getElementById("mainImage");

        // Change the source of the main image to the clicked thumbnail's source
        mainImage.src = thumbnail.src;
    }
</script>


            <!-- Activity Information -->
            <div>
                <h1 class="section-title text-3xl font-bold text-gray-800 mb-4">Moroccan Cooking Class</h1>
                
                <div class="activity-details space-y-4">
                    <p class="text-gray-600">Learn the art of traditional Moroccan cuisine in an intimate, hands-on cooking experience. Discover secret family recipes and culinary techniques passed down through generations.</p>
                    
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <span class="text-gray-700">4.8 (120 Reviews)</span>
                        </div>
                    </div>
                    
                    <div class="price-section">
                        <span class="text-2xl font-bold text-green-600">$75</span>
                        <span class="text-gray-500 ml-2">Per night</span>
                    </div>
                </div>

                <!-- Booking Form -->
                <form class="booking-form mt-6 bg-white p-6 rounded-lg shadow-md">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Check in</label>
                            <input type="date" class="w-full px-3 py-2 border rounded-md">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Check out</label>
                            <input type="date" class="w-full px-3 py-2 border rounded-md">
                        </div>
                    </div>
                    <a href="{{route('confirmmation')}}">
                        <input value="Book Now" type="button" class="w-full mt-4 bg-yellow-500 text-white py-3 rounded-md hover:bg-yellow-600 transition duration-300"/>
                    </a>
                </form>
                <!-- What's Included -->
        <div class="mt-12 mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-4">Features</h2>

            <span class="space-y-2 text-gray-600">
                Balkon | 
            </span>
            <span class="space-y-2 text-gray-600">
                Balkon | 
            </span>
            <span class="space-y-2 text-gray-600">
                Balkon | 
            </span>
            <span class="space-y-2 text-gray-600">
                Balkon | 
            </span>
            
        </div>

            </div>
        </div>

        
       <!-- Reviews Section -->
       <div id="reviews" class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="section-title text-2xl font-bold text-gray-800">Guest Reviews</h2>
                <button id="writeReviewBtn" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-200">
                    Write a Review
                </button>
            </div>

            <!-- Write Review Form -->
            <div id="writeReviewForm" class="hidden bg-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="font-bold text-gray-800 mb-4">Share Your Experience</h3>
                <form>
                    <!-- <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Your Name</label>
                        <input type="text" class="w-full px-3 py-2 border rounded-md" placeholder="Enter your name">
                    </div> -->
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Rating</label>
                        <select class="w-full px-3 py-2 border rounded-md">
                            <option>5 - Excellent</option>
                            <option>4 - Good</option>
                            <option>3 - Average</option>
                            <option>2 - Poor</option>
                            <option>1 - Terrible</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Your Review</label>
                        <textarea class="w-full px-3 py-2 border rounded-md" rows="4" placeholder="Write your review..."></textarea>
                    </div>
                    <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-md hover:bg-yellow-600 transition duration-300">
                        Submit Review
                    </button>
                </form>
                <script>
                    document.getElementById('writeReviewBtn').addEventListener('click', function() {
                        const form = document.getElementById('writeReviewForm');
                        if (form.classList.contains('hidden')) {
                            form.classList.remove('hidden');
                        } else {
                            form.classList.add('hidden');
                        }
                    });
                </script>
            </div>

            <!-- Review Cards -->
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="https://www.alleganyco.gov/wp-content/uploads/unknown-person-icon-Image-from.png" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">Sarah Johnson</h4>
                            <div class="flex">
                                5.0
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">An incredible experience! The instructor was knowledgeable and made cooking so enjoyable. I learned techniques I'll definitely use at home.</p>
                </div>
            </div>
        </div>

        <!-- Recommended Activities -->
        <div>
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-6">Recommended Activities</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Recommended Activity 1 -->
                <a href="{{ route('activity.page') }}">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://www.riadadore.com/pure-riads/img/riad-adore/the-riad/the-riad-02.jpg" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Relaxing Spa</h3>

                    </div>
                </div>
                </a>

                <!-- Recommended Activity 2 -->
                 <a href="{{ route('activity.page') }}">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://elegantculturaltours.com/wp-content/uploads/2022/02/Morocco-Elegant-Grand-Tour-post-image-4.jpg" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Cultural tour</h3>
                    </div>
                </div>
                </a>

                <!-- Recommended Activity 3 -->
                <a href="{{ route('activity.page') }}" >
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