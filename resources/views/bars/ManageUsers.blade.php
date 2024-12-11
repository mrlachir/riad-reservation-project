<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: #f9f5f0;
            color: #4a4a4a;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        h1 {
            text-align: center;
            font-family: 'Cormorant Garamond', serif;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-section select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
        }

        .booking-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .booking-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .booking-card h3 {
            font-family: 'Cormorant Garamond', serif;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .booking-card p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 10px;
        }

        .booking-card .actions {
            display: flex;
            gap: 10px;
        }

        .booking-card .actions button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-family: 'Montserrat', sans-serif;
        }

        .booking-card .actions .approve-btn {
            background-color: #4CAF50;
            color: white;
        }

        .booking-card .actions .cancel-btn {
            background-color: #f44336;
            color: white;
        }

        .booking-card .actions .modify-btn {
            background-color: #2196F3;
            color: white;
        }

        .booking-card .actions button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manage Bookings</h1>

        <div class="filter-section">
            <select id="filterDate">
                <option value="">Filter by Date</option>
                <option value="today">Today</option>
                <option value="week">This Week</option>
                <option value="month">This Month</option>
            </select>

            <select id="filterRoomType">
                <option value="">Filter by Room Type</option>
                <option value="single">Single Room</option>
                <option value="double">Double Room</option>
                <option value="suite">Suite</option>
            </select>

            <select id="filterStatus">
                <option value="">Filter by Status</option>
                <option value="upcoming">Upcoming</option>
                <option value="completed">Completed</option>
                <option value="canceled">Canceled</option>
            </select>
        </div>

        <div class="booking-list" id="bookingList">
            <!-- Booking cards dynamically inserted here -->
        </div>
    </div>

    <script>
        const bookingList = document.getElementById('bookingList');

        // Sample Data for Bookings
        const bookings = [
            {
                id: 1,
                name: "John Doe",
                date: "2024-12-12",
                roomType: "Suite",
                status: "Upcoming",
            },
            {
                id: 2,
                name: "Jane Smith",
                date: "2024-12-10",
                roomType: "Double",
                status: "Completed",
            },
            {
                id: 3,
                name: "Alice Johnson",
                date: "2024-12-15",
                roomType: "Single",
                status: "Canceled",
            },
        ];

        // Function to Render Bookings
        function renderBookings() {
            bookingList.innerHTML = '';
            bookings.forEach((booking) => {
                const card = document.createElement('div');
                card.classList.add('booking-card');

                card.innerHTML = `
                    <h3>Booking for ${booking.name}</h3>
                    <p>Date: ${booking.date}</p>
                    <p>Room Type: ${booking.roomType}</p>
                    <p>Status: ${booking.status}</p>
                    <div class="actions">
                        <button class="approve-btn">Approve</button>
                        <button class="cancel-btn">Cancel</button>
                        <button class="modify-btn">Modify</button>
                    </div>
                `;

                // Add Event Listeners for Actions
                card.querySelector('.approve-btn').addEventListener('click', () => {
                    alert(`Approved booking for ${booking.name}`);
                });

                card.querySelector('.cancel-btn').addEventListener('click', () => {
                    alert(`Canceled booking for ${booking.name}`);
                });

                card.querySelector('.modify-btn').addEventListener('click', () => {
                    alert(`Modify booking for ${booking.name}`);
                });

                bookingList.appendChild(card);
            });
        }

        // Initial Render
        renderBookings();
    </script>
</body>
</html>