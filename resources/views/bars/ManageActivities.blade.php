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
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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

        .actions .show-btn {
            background-color: #4caf50;
            color: white;
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
            padding: 2rem;
            width: 400px;
            border-radius: 8px;
        }

        .modal input, .modal textarea {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .modal button {
            background-color: #d4af37;
            border: none;
            padding: 1rem 2rem;
            border-radius: 5px;
            font-size: 1rem;
            color: white;
            cursor: pointer;
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
    <section>
        <table id="activityTable">
            <thead>
                <tr>
                    <th>Activity Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example row, repeat for each activity -->
                <tr>
                    <td>Cooking Class</td>
                    <td>Join us for an exclusive cooking class with local chefs!</td>
                    <td>$80 per person</td>
                    <td class="actions">
                        <button class="show-btn">Show</button>
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
                <input type="number" placeholder="Price" id="activityPrice" required>
                <input type="datetime-local" id="activityDate" required>
                <button type="submit">Save Activity</button>
            </form>
        </div>
    </div>

    <script>
        // Show Add Activity Modal
        document.getElementById('addActivityBtn').addEventListener('click', function() {
            document.getElementById('activityModal').style.display = 'flex';
            document.getElementById('modalTitle').textContent = 'Add Activity';
            document.getElementById('activityForm').reset();
        });

        // Close Modal
        document.querySelector('.modal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });

        // Submit the activity form (Add/Edit)
        document.getElementById('activityForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Logic to save or update the activity (e.g., API call)
            alert('Activity saved successfully!');
            document.getElementById('activityModal').style.display = 'none';
        });

        // Show, Edit and Delete Activity Logic
        const showBtns = document.querySelectorAll('.show-btn');
        showBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Showing activity details...');
            });
        });

        const editBtns = document.querySelectorAll('.edit-btn');
        editBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Edit activity logic here...');
                // Populate the form fields and open the modal for editing
                document.getElementById('activityModal').style.display = 'flex';
            });
        });

        const deleteBtns = document.querySelectorAll('.delete-btn');
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('Are you sure you want to delete this activity?')) {
                    this.closest('tr').remove(); // Remove the activity row
                }
            });
        });
    </script>
</body>
</html>
