<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Activities</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>
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

    /* Activity Management Section */
    .activity-container {
        padding: 2rem 7%;
    }

    .activity-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        border-radius: 8px;
    }

    .activity-details {
        flex: 1;
    }

    .activity-details h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2c3e50;
    }

    .activity-details p {
        font-size: 1rem;
        color: #7d7d7d;
    }

    .activity-details .price {
        font-size: 1.2rem;
        color: #d4af37;
        font-weight: 600;
    }

    /* Button Styles */
    .btn {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .btn-add {
        background-color: #d4af37;
        color: #fff;
        border: 2px solid #d4af37;
    }

    .btn-edit {
        background-color: transparent;
        border: 2px solid #2c3e50;
        color: #2c3e50;
    }

    .btn-delete {
        background-color: transparent;
        border: 2px solid #e74c3c;
        color: #e74c3c;
    }

    .btn-add:hover {
        background-color: #b18f2a;
        border-color: #b18f2a;
    }

    .btn-edit:hover {
        background-color: #2c3e50;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #c0392b;
        border-color: #c0392b;
        color: #fff;
    }

    /* Modal Form for Adding/Editing Activities */
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
<body>
    <!-- Header -->
    <header class="header">
        <h1>Manage Activities</h1>
        <a href="javascript:void(0);" class="btn btn-add" id="addActivityBtn">Add Activity</a>
    </header>

    <!-- Activity List -->
    <section class="activity-container">
        <div class="activity-card">
            <div class="activity-details">
                <h3>Cooking Class</h3>
                <p>Join us for an exclusive cooking class with local chefs!</p>
                <div class="price">$80 per person</div>
            </div>
            <div>
                <a href="javascript:void(0);" class="btn btn-edit">Edit</a>
                <a href="javascript:void(0);" class="btn btn-delete">Delete</a>
            </div>
        </div>

        <!-- Repeat activity cards as necessary -->
        <!-- More activities here -->
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

        // Edit/Delete Activity Logic can be implemented here
    </script>
</body>
</html>

