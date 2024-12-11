<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rooms</title>
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

        .room-management {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .room-management button {
            background-color: #d4af37;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
        }

        .room-management button:hover {
            background-color: #b18f2a;
        }

        .room-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .room-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .room-card img {
            width: 100%;
            border-radius: 10px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .room-card h3 {
            margin: 10px 0;
            font-family: 'Cormorant Garamond', serif;
            color: #2c3e50;
        }

        .room-card p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 10px;
        }

        .room-card .actions {
            display: flex;
            justify-content: space-between;
        }

        .room-card .actions button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-family: 'Montserrat', sans-serif;
        }

        .room-card .actions .edit-btn {
            background-color: #2196F3;
            color: white;
        }

        .room-card .actions .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .room-card .actions button:hover {
            opacity: 0.9;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            max-width: 90%;
            text-align: center;
        }

        .modal-content input,
        .modal-content textarea {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .modal-content button {
            background-color: #d4af37;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
        }

        .modal-content button:hover {
            background-color: #b18f2a;
        }

        .modal-content .close-btn {
            background-color: #f44336;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Room Management</h1>

        <div class="room-management">
            <button id="addRoomBtn">Add New Room</button>
        </div>

        <div class="room-list" id="roomList">
            <!-- Room cards dynamically inserted here -->
        </div>
    </div>

    <!-- Add/Edit Room Modal -->
    <div class="modal" id="roomModal">
        <div class="modal-content">
            <h2 id="modalTitle">Add Room</h2>
            <input type="text" id="roomName" placeholder="Room Name">
            <textarea id="roomDescription" placeholder="Room Description"></textarea>
            <input type="number" id="roomPrice" placeholder="Price per Night">
            <input type="text" id="roomAvailability" placeholder="Availability (e.g., Available/Booked)">
            <input type="file" id="roomImage" accept="image/*">
            <button id="saveRoomBtn">Save</button>
            <button class="close-btn" id="closeModalBtn">Close</button>
        </div>
    </div>

    <script>
        const addRoomBtn = document.getElementById('addRoomBtn');
        const roomModal = document.getElementById('roomModal');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const saveRoomBtn = document.getElementById('saveRoomBtn');
        const roomList = document.getElementById('roomList');

        let isEditing = false;
        let currentEditingCard = null;

        // Open Modal
        addRoomBtn.addEventListener('click', () => {
            roomModal.classList.add('active');
            document.getElementById('modalTitle').textContent = 'Add Room';
            clearModalFields();
            isEditing = false;
        });

        // Close Modal
        closeModalBtn.addEventListener('click', () => {
            roomModal.classList.remove('active');
        });

        // Save Room
        saveRoomBtn.addEventListener('click', () => {
            const name = document.getElementById('roomName').value;
            const description = document.getElementById('roomDescription').value;
            const price = document.getElementById('roomPrice').value;
            const availability = document.getElementById('roomAvailability').value;
            const image = document.getElementById('roomImage').files[0];

            if (name && description && price && availability) {
                if (isEditing && currentEditingCard) {
                    updateRoomCard(currentEditingCard, name, description, price, availability, image);
                } else {
                    createRoomCard(name, description, price, availability, image);
                }
                roomModal.classList.remove('active');
            } else {
                alert('Please fill out all fields.');
            }
        });

        // Create Room Card
        function createRoomCard(name, description, price, availability, image) {
            const card = document.createElement('div');
            card.classList.add('room-card');

            const imageURL = image ? URL.createObjectURL(image) : 'https://via.placeholder.com/350x250';

            card.innerHTML = `
                <img src="${imageURL}" alt="Room Image">
                <h3>${name}</h3>
                <p>${description}</p>
                <p>Price: $${price}/night</p>
                <p>Availability: ${availability}</p>
                <div class="actions">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>
            `;

            // Edit and Delete Handlers
            card.querySelector('.edit-btn').addEventListener('click', () => {
                openEditModal(card);
            });

            card.querySelector('.delete-btn').addEventListener('click', () => {
                if (confirm('Are you sure you want to delete this room?')) {
                    card.remove();
                }
            });

            roomList.appendChild(card);
        }

        // Update Room Card
        function updateRoomCard(card, name, description, price, availability, image) {
            const imageURL = image ? URL.createObjectURL(image) : card.querySelector('img').src;

            card.querySelector('img').src = imageURL;
            card.querySelector('h3').textContent = name;
            card.querySelector('p:nth-of-type(1)').textContent = description;
            card.querySelector('p:nth-of-type(2)').textContent = `Price: $${price}/night`;
            card.querySelector('p:nth-of-type(3)').textContent = `Availability: ${availability}`;
        }

        // Open Edit Modal
        function openEditModal(card) {
            roomModal.classList.add('active');
            document.getElementById('modalTitle').textContent = 'Edit Room';
            isEditing = true;
            currentEditingCard = card;

            document.getElementById('roomName').value = card.querySelector('h3').textContent;
            document.getElementById('roomDescription').value = card.querySelector('p:nth-of-type(1)').textContent;
            document.getElementById('roomPrice').value = card.querySelector('p:nth-of-type(2)').textContent.replace('Price: $', '').replace('/night', '');
            document.getElementById('roomAvailability').value = card.querySelector('p:nth-of-type(3)').textContent.replace('Availability: ', '');
        }

        // Clear Modal Fields
        function clearModalFields() {
            document.getElementById('roomName').value = '';
            document.getElementById('roomDescription').value = '';
            document.getElementById('roomPrice').value = '';
            document.getElementById('roomAvailability').value = '';
            document.getElementById('roomImage').value = '';
        }
    </script>
</body>
</html>
