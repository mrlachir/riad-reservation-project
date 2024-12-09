<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Riad Booking</title>
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

        <!-- Profile Header -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-12">
            <div class="flex items-center space-x-6">
                <img src="/api/placeholder/100/100" alt="User Avatar" class="w-24 h-24 rounded-full shadow-lg">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">John Doe</h1>
                    <p class="text-lg text-gray-600">Welcome back! Here's an overview of your profile.</p>
                </div>
            </div>
        </div>

        <!-- User Info Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-4">Personal Information</h2>
            <form class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="first-name" class="block text-gray-700 mb-2">First Name</label>
                        <input type="text" id="first-name" class="w-full px-3 py-2 border rounded-md" value="John">
                    </div>
                    <div>
                        <label for="last-name" class="block text-gray-700 mb-2">Last Name</label>
                        <input type="text" id="last-name" class="w-full px-3 py-2 border rounded-md" value="Doe">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" class="w-full px-3 py-2 border rounded-md" value="john.doe@example.com">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 mb-2">Phone</label>
                        <input type="tel" id="phone" class="w-full px-3 py-2 border rounded-md" value="(123) 456-7890">
                    </div>
                </div>
                <div class="text-right">
                    <button class="bg-yellow-500 text-white px-6 py-2 rounded-md hover:bg-yellow-600 transition duration-300">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>

        <!-- Booking History Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-4">Booking History</h2>
            <div class="space-y-4">
                <div class="flex justify-between items-center py-3 border-b">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">Moroccan Cooking Class</h3>
                        <p class="text-gray-600">Date: March 10, 2024 | 2 Participants</p>
                    </div>
                    <span class="text-gray-600">$150</span>
                </div>
                <div class="flex justify-between items-center py-3 border-b">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">Marrakech Market Tour</h3>
                        <p class="text-gray-600">Date: February 22, 2024 | 3 Participants</p>
                    </div>
                    <span class="text-gray-600">$195</span>
                </div>
                <div class="flex justify-between items-center py-3 border-b">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800">Desert Sunset Tour</h3>
                        <p class="text-gray-600">Date: January 15, 2024 | 1 Participant</p>
                    </div>
                    <span class="text-gray-600">$95</span>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-4">Your Reviews</h2>
            <div class="space-y-4">
                <div class="bg-gray-100 p-4 rounded-md">
                    <div class="flex items-center mb-2">
                        <h3 class="font-bold text-gray-800">Moroccan Cooking Class</h3>
                        <div class="flex ml-4 text-yellow-500">
                            <!-- Star Rating -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600">This cooking class was incredible! I learned so much and had a great time with the group. The instructor was amazing and so friendly.</p>
                </div>
            </div>
        </div>

        <!-- Change Password Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-12">
            <h2 class="section-title text-2xl font-bold text-gray-800 mb-4">Change Password</h2>
            <form class="space-y-4">
                <div>
                    <label for="current-password" class="block text-gray-700 mb-2">Current Password</label>
                    <input type="password" id="current-password" class="w-full px-3 py-2 border rounded-md">
                </div>
                <div>
                    <label for="new-password" class="block text-gray-700 mb-2">New Password</label>
                    <input type="password" id="new-password" class="w-full px-3 py-2 border rounded-md">
                </div>
                <div>
                    <label for="confirm-password" class="block text-gray-700 mb-2">Confirm New Password</label>
                    <input type="password" id="confirm-password" class="w-full px-3 py-2 border rounded-md">
                </div>
                <div class="text-right">
                    <button class="bg-yellow-500 text-white px-6 py-2 rounded-md hover:bg-yellow-600 transition duration-300">
                        Save Password
                    </button>
                </div>
            </form>
        </div>

        <!-- Logout Section -->
        <div class="text-center">
            <button class="bg-red-500 text-white px-6 py-2 rounded-md hover:bg-red-600 transition duration-300">
                Logout
            </button>
        </div>
    </div>

</body>

</html>
