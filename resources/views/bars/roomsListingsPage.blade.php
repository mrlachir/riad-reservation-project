@include('bars.navigationBare')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Listings</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
       
    </style>
</head>
<body>
    <style>
         /* General Reset */
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and Font Settings */
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: #f9f5f0;
            color: #4a4a4a;
        }

        /* Header Section */
        header {
            background-color: #2c3e50;
            padding: 15px 30px;
            color: white;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 600;
        }

        /* Search & Filters Section */
        /* .search-filter {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            gap: 15px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .search-filter input, .search-filter select, .search-filter .price-range {
            padding: 12px;
            width: 100%;
            max-width: 250px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .search-filter button {
            padding: 12px 30px;
            background-color: #b18f2a;
            color: white;
            font-size: 1rem;
            border-radius: 30px;
            border: none;
            cursor: pointer;
        }

        .search-filter button:hover {
            background-color: #7f6b20;
        } */

        /* Search & Filters Section */
.search-filter {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin-bottom: 40px;
    justify-content: center;
}

/* Styling the inputs and selects */
.search-filter input, 
.search-filter select, 
.search-filter .price-range input {
    padding: 12px;
    width: 220px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 1rem;
    background-color: #f5f5f5;
    transition: all 0.3s ease;
}

.search-filter input:focus,
.search-filter select:focus,
.search-filter .price-range input:focus {
    border-color: #b18f2a;
    background-color: #fff;
    outline: none;
}

/* Price Range Input Styling */
.price-range {
    display: flex;
    gap: 10px;
}

/* Button Styling */
.search-filter button {
    padding: 12px 25px;
    background-color: #b18f2a;
    color: white;
    font-size: 1rem;
    border-radius: 30px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 150px;
}

.search-filter button:hover {
    background-color: #7f6b20;
}

.search-filter button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .search-filter {
        flex-direction: column;
        align-items: center;
    }

    .search-filter input,
    .search-filter select,
    .price-range input {
        width: 100%;
        max-width: 300px;
    }

    .search-filter button {
        width: 100%;
    }
}


        /* Rooms Display Section */
        .rooms-container {
            padding: 0 7%;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .room-card {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            text-align: center;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .room-card:hover {
            transform: scale(1.05);
        }

        .room-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .room-card h3 {
            font-size: 1.5rem;
            margin: 15px 0;
        }

        .room-card p {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .room-card .btn-book {
            font-size: 1rem;
            padding: 10px 20px;
            background-color: #b18f2a;
            color: white;
            border-radius: 30px;
            text-decoration: none;
        }

        .room-card .btn-book:hover {
            background-color: #7f6b20;
        }

        /* Footer Section */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
        }

        footer p {
            font-size: 1rem;
        }
        

    </style>

<header>
    <h1>Rooms</h1>
</header>

<!-- Search & Filters Section -->


<!-- Search & Filters Section -->
<section class="search-filter">
    <input type="text" id="search" placeholder="Search by room name/type...">
    <select id="room-type">
        <option value="">Room Type</option>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="suite">Suite</option>
    </select>
    <select id="availability">
        <option value="">Availability</option>
        <option value="available">Available</option>
        <option value="booked">Booked</option>
    </select>

    <!-- Price Range Filter -->
    <div class="price-range">
        <input type="number" id="min-price" placeholder="Min Price" step="10" min="0">
        <input type="number" id="max-price" placeholder="Max Price" step="10" min="0">
    </div>

    <button onclick="applyFilters()">Apply Filters</button>
</section>


<!-- Rooms Display Section -->
<section class="rooms-container" id="rooms-container">
    <!-- Room cards will be dynamically added here -->
</section>



<script>
    const roomsData = [
        { id: 1, name: 'Deluxe Room', type: 'single', price: 100, description: 'Enjoy luxury and comfort in our spacious deluxe room.', availability: 'available', image: 'https://www.angsana.com/assets/2021-12/riad-bab-firdaus-deluxe-room.jpg' },
        { id: 2, name: 'Royal Suite', type: 'suite', price: 300, description: 'Indulge in royal comfort with a beautiful view of Marrakech.', availability: 'available', image: 'https://riadfes.com/_novaimg/4634126-1425596_0_207_2200_1199_2200_1200.rc.jpg' },
        { id: 3, name: 'Garden View', type: 'double', price: 150, description: 'Relax in our serene garden view room surrounded by nature.', availability: 'booked', image: 'https://www.telegraph.co.uk/content/dam/Travel/hotels/africa/morocco/marrakech/riad-les-yeux-bleus-marrakech-morocco-p-xlarge.jpg' },
        { id: 4, name: 'Standard Room', type: 'single', price: 80, description: 'Affordable yet comfortable single room perfect for solo travelers.', availability: 'available', image: 'https://th.bing.com/th/id/OIP.rbGH9RagQPfRbe3nZCrmaQHaKD?w=768&h=1042&rs=1&pid=ImgDetMain' },
    ];

    // Function to render rooms
    function renderRooms(rooms) {
        const container = document.getElementById('rooms-container');
        container.innerHTML = ''; // Clear previous rooms
        rooms.forEach(room => {
            const card = document.createElement('div');
            card.classList.add('room-card');

            card.innerHTML = `
                <img src="${room.image}" alt="${room.name}">
                <h3>${room.name}</h3>
                <p>${room.description}</p>
                <p><strong>$${room.price}</strong></p>
                <p><strong>Availability:</strong> ${room.availability}</p>
                <a href="{{route('room.page')}}" class="btn-book" ${room.availability === 'booked' ? 'style="background-color: #ccc; cursor: not-allowed;"' : ''}>Book Now</a>
            `;
            container.appendChild(card);
        });
    }

    // Filter function
    function applyFilters() {
        const searchQuery = document.getElementById('search').value.toLowerCase();
        const roomType = document.getElementById('room-type').value;
        const availability = document.getElementById('availability').value;
        const minPrice = parseFloat(document.getElementById('min-price').value) || 0;
        const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;

        const filteredRooms = roomsData.filter(room => {
            const matchesSearch = room.name.toLowerCase().includes(searchQuery);
            const matchesRoomType = roomType ? room.type === roomType : true;
            const matchesAvailability = availability ? room.availability === availability : true;
            const matchesPrice = room.price >= minPrice && room.price <= maxPrice;
            return matchesSearch && matchesRoomType && matchesAvailability && matchesPrice;
        });

        renderRooms(filteredRooms);
    }

    // Initialize page with all rooms
    document.addEventListener('DOMContentLoaded', () => {
        renderRooms(roomsData);
    });
</script>

</body>
</html>
@include('bars.Footer')