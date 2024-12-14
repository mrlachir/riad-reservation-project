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

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        .room-card img {
            width: 100px; /* Image size */
            height: 100px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 10px;
        }

        .actions button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-family: 'Montserrat', sans-serif;
        }

        .actions .edit-btn {
            background-color: #2196F3;
            color: white;
        }

        .actions .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .actions button:hover {
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

        <!-- Room List Table -->
        <table id="roomList">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Room Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Room rows dynamically inserted here -->
            </tbody>
        </table>
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
        const roomList = document.getElementById('roomList').getElementsByTagName('tbody')[0];

        let isEditing = false;
        let currentEditingRow = null;

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
                if (isEditing && currentEditingRow) {
                    updateRoomRow(currentEditingRow, name, description, price, availability, image);
                } else {
                    createRoomRow(name, description, price, availability, image);
                }
                roomModal.classList.remove('active');
            } else {
                alert('Please fill out all fields.');
            }
        });

        // Create Room Row in the Table
        function createRoomRow(name, description, price, availability, image) {
            const row = document.createElement('tr');

            const imageURL = image ? URL.createObjectURL(image) : 'https://via.placeholder.com/100';

            row.innerHTML = `
                <td><img src="${imageURL}" alt="Room Image"></td>
                <td>${name}</td>
                <td>${description}</td>
                <td>$${price}</td>
                <td>${availability}</td>
                <td class="actions">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            `;

            // Edit and Delete Handlers
            row.querySelector('.edit-btn').addEventListener('click', () => {
                openEditModal(row);
            });

            row.querySelector('.delete-btn').addEventListener('click', () => {
                if (confirm('Are you sure you want to delete this room?')) {
                    row.remove();
                }
            });

            roomList.appendChild(row);
        }

        // Update Room Row in the Table
        function updateRoomRow(row, name, description, price, availability, image) {
            const imageURL = image ? URL.createObjectURL(image) : row.querySelector('img').src;

            row.querySelector('img').src = imageURL;
            row.querySelector('td:nth-child(2)').textContent = name;
            row.querySelector('td:nth-child(3)').textContent = description;
            row.querySelector('td:nth-child(4)').textContent = `$${price}`;
            row.querySelector('td:nth-child(5)').textContent = availability;
        }

        // Open Edit Modal
        function openEditModal(row) {
            roomModal.classList.add('active');
            document.getElementById('modalTitle').textContent = 'Edit Room';
            isEditing = true;
            currentEditingRow = row;

            document.getElementById('roomName').value = row.querySelector('td:nth-child(2)').textContent;
            document.getElementById('roomDescription').value = row.querySelector('td:nth-child(3)').textContent;
            document.getElementById('roomPrice').value = row.querySelector('td:nth-child(4)').textContent.replace('$', '');
            document.getElementById('roomAvailability').value = row.querySelector('td:nth-child(5)').textContent;
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
