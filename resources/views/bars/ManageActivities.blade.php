<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Activities</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        a {
        text-decoration: none;
        /* Removes underline */
        color: inherit;
        /* Inherits color from the parent element */
        background: none;
        /* Removes any background */
    }

        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: #f9f5f0;
            color: #4a4a4a;
        }

        /* Header Styles */
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

        /* Table Styling */
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 10%;

            
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        .actions button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-family: 'Montserrat', sans-serif;
            margin-right: 5px;
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
            background-color: #fff;
            padding: 2.5rem;
            width: 450px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .modal input, .modal textarea {
            width: 100%;
            padding: 1.2rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
            font-family: 'Montserrat', sans-serif;
            transition: border-color 0.3s ease;
        }

        .modal input:focus, .modal textarea:focus {
            border-color: #2196F3;
            outline: none;
        }

        .modal button {
            background-color: #d4af37;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 8px;
            font-size: 1.1rem;
            font-family: 'Montserrat', sans-serif;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-add {
            background-color: #d4af37;
            border: none;
            padding: 1rem 2.5rem;
            border-radius: 8px;
            font-size: 1.1rem;
            font-family: 'Montserrat', sans-serif;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal button:hover {
            background-color: #b18f2a;
        }
        
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <h1>Manage Activities</h1>
        <a href="javascript:void(0);" class="btn btn-add" id="addActivityBtn">Add Activity</a>
    </header>

    <!-- Activity List Table -->
    <section >
        <table id="activityTable">
            <thead>
                <tr>
                    <th>Profile Photo</th>
                    <th>Activity Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row, repeat for each activity -->
                <tr>
                    <td><img src="profile1.jpg" alt="Profile Photo" style="width:50px; height:50px; border-radius:50%;"></td>
                    <td>Cooking Class</td>
                    <td>Join us for an exclusive cooking class with local chefs!</td>
                    <td class="actions">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <!-- More activity rows here -->
            </tbody>
        </table>
    </section>

    <!-- Modal for Adding/Editing Activity -->
    <div class="modal" id="activityModal">
        <div class="modal-content">
            <h3 id="modalTitle">Add Activity</h3>
            <form id="activityForm">
                <input type="text" placeholder="Activity Name" id="activityName" required>
                <textarea placeholder="Description" id="activityDescription" required></textarea>
                <input type="file" id="activityPhoto" accept="image/*" required>
                <button type="submit">Save Activity</button>
            </form>
        </div>
    </div>

    <script>
    // Show Add Activity Modal
    document.getElementById('addActivityBtn').addEventListener('click', function () {
        document.getElementById('activityModal').style.display = 'flex';
        document.getElementById('modalTitle').textContent = 'Add Activity';
        document.getElementById('activityForm').reset();
    });

    // Close Modal
    document.querySelector('.modal').addEventListener('click', function (e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });

    // Submit the activity form (Add/Edit)
    document.getElementById('activityForm').addEventListener('submit', function (e) {
        e.preventDefault();

        // Get input values
        const activityName = document.getElementById('activityName').value;
        const activityDescription = document.getElementById('activityDescription').value;
        const activityPhotoInput = document.getElementById('activityPhoto');

        // Validate photo upload
        if (!activityPhotoInput.files.length) {
            alert('Please upload a photo.');
            return;
        }

        // Create a new FileReader to read the image file
        const reader = new FileReader();
        reader.onload = function (e) {
            const imageSrc = e.target.result; // Base64 encoded image

            // Create a new row in the table
            const newRow = `
                <tr>
                    <td><img src="${imageSrc}" alt="Profile Photo" style="width:50px; height:50px; border-radius:50%;"></td>
                    <td>${activityName}</td>
                    <td>${activityDescription}</td>
                    <td class="actions">
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            `;

            // Append the new row to the table body
            document.querySelector('#activityTable tbody').insertAdjacentHTML('beforeend', newRow);

            // Add event listeners for the new buttons
            addEventListenersToButtons();

            // Close the modal
            document.getElementById('activityModal').style.display = 'none';
        };

        // Read the uploaded file as a Data URL
        reader.readAsDataURL(activityPhotoInput.files[0]);
    });

    // Add event listeners for Edit and Delete buttons
    function addEventListenersToButtons() {
        const editBtns = document.querySelectorAll('.edit-btn');
        editBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const row = this.closest('tr');
                const activityName = row.cells[1].textContent;
                const activityDescription = row.cells[2].textContent;

                // Populate the form fields for editing
                document.getElementById('activityName').value = activityName;
                document.getElementById('activityDescription').value = activityDescription;

                // Open the modal
                document.getElementById('activityModal').style.display = 'flex';
                document.getElementById('modalTitle').textContent = 'Edit Activity';
            });
        });

        const deleteBtns = document.querySelectorAll('.delete-btn');
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                if (confirm('Are you sure you want to delete this activity?')) {
                    this.closest('tr').remove();
                }
            });
        });
    }

    // Initialize event listeners for existing buttons
    addEventListenersToButtons();
</script>

</body>
</html>
