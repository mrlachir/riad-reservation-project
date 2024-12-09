<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Details - Riad Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
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
            <div class="space-y-4">
                <div class="main-image">
                    <img src="/api/placeholder/600/400" alt="Activity Main Image" class="w-full h-96 object-cover rounded-lg shadow-lg">
                </div>
                <div class="image-thumbnails flex space-x-2">
                    <img src="/api/placeholder/150/100" alt="Thumbnail 1" class="w-24 h-20 object-cover rounded cursor-pointer opacity-70 hover:opacity-100">
                    <img src="/api/placeholder/150/100" alt="Thumbnail 2" class="w-24 h-20 object-cover rounded cursor-pointer opacity-70 hover:opacity-100">
                    <img src="/api/placeholder/150/100" alt="Thumbnail 3" class="w-24 h-20 object-cover rounded cursor-pointer opacity-70 hover:opacity-100">
                </div>
            </div>

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
                        <span class="text-gray-400">|</span>
                        <div class="flex items-center space-x-2">
                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 16c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"/>
                                <path d="M13 7h-2v5l4.25 2.5.75-1.23-3-1.77z"/>
                            </svg>
                            <span class="text-gray-700">3 Hours</span>
                        </div>
                    </div>
                    
                    <div class="price-section">
                        <span class="text-2xl font-bold text-green-600">$75</span>
                        <span class="text-gray-500 ml-2">per person</span>
                    </div>
                </div>

                <!-- Booking Form -->
                <form class="booking-form mt-6 bg-white p-6 rounded-lg shadow-md">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Date</label>
                            <input type="date" class="w-full px-3 py-2 border rounded-md">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Participants</label>
                            <select class="w-full px-3 py-2 border rounded-md">
                                <option>1 Person</option>
                                <option>2 Persons</option>
                                <option>3 Persons</option>
                                <option>4 Persons</option>
                            </select>
                        </div>
                    </div>
                    <button class="w-full mt-4 bg-yellow-500 text-white py-3 rounded-md hover:bg-yellow-600 transition duration-300">
                        Book Now
                    </button>
                </form>
            </div>
        </div>

        <!-- Detailed Description -->
        <div class="mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-4">About This Experience</h2>
            <p class="text-gray-600 leading-relaxed">
                Immerse yourself in the vibrant world of Moroccan cuisine. Our cooking class takes you on a culinary journey through traditional recipes, local ingredients, and time-honored cooking techniques. You'll learn to prepare authentic dishes like tagine, couscous, and traditional Moroccan salads.
            </p>
        </div>

        <!-- What's Included -->
        <div class="mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-4">What's Included</h2>
            <ul class="space-y-2 text-gray-600">
                <li class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                    </svg>
                    Professional cooking instructor
                </li>
                <li class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                    </svg>
                    All ingredients and cooking equipment
                </li>
                <li class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                    </svg>
                    Lunch or dinner with your prepared dishes
                </li>
            </ul>
        </div>

        <!-- Reviews Section -->
        <div class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <h2 class="section-title text-2xl font-bold text-gray-800">Guest Reviews</h2>
                <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-200">
                    Write a Review
                </button>
            </div>

            <!-- Review Cards -->
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/50/50" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">Sarah Johnson</h4>
                            <div class="flex">
                                {/* Star Rating */}
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
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

        <!-- Related Activities -->
        <div>
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-6">Related Activities</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/api/placeholder/400/300" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Marrakech Market Tour</h3>
                        <p class="text-gray-600 text-sm mb-2">Explore the vibrant souks of Marrakech</p>
                        <div class="flex justify-between items-center">
                            <span class="text-green-600 font-bold">$65</span>
                            <a href="#" class="text-yellow-600 hover:underline">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/api/placeholder/400/300" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Desert Sunset Tour</h3>
                        <p class="text-gray-600 text-sm mb-2">Experience the magic of Moroccan desert</p>
                        <div class="flex justify-between items-center">
                            <span class="text-green-600 font-bold">$95</span>
                            <a href="#" class="text-yellow-600 hover:underline">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/api/placeholder/400/300" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 mb-2">Traditional Hammam</h3>
                        <p class="text-gray-600 text-sm mb-2">Relax with authentic Moroccan spa treatment</p>
                        <div class="flex justify-between items-center">
                            <span class="text-green-600 font-bold">$55</span>
                            <a href="#" class="text-yellow-600 hover:underline">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>