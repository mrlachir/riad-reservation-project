<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Riad Theme</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6A4C3B;
            --secondary-color: #D4B483;
            --background-color: #F1E4D3;
            --text-color: #2C2A29;
            --mosaic-pattern: linear-gradient(
                45deg, 
                rgba(106, 76, 59, 0.1) 25%, 
                transparent 25%, 
                transparent 50%, 
                rgba(106, 76, 59, 0.1) 50%, 
                rgba(106, 76, 59, 0.1) 75%, 
                transparent 75%, 
                transparent
            );
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Lora', serif;
            background-color: var(--background-color);
            background-image: var(--mosaic-pattern);
            background-size: 40px 40px;
            color: var(--text-color);
            line-height: 1.6;
        }

        .dashboard {
            max-width: 900px;
            margin: 2rem auto;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(106, 76, 59, 0.2);
            overflow: hidden;
            border: 3px solid var(--primary-color);
        }

        .dashboard-header {
            background-color: var(--primary-color);
            color: var(--background-color);
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .dashboard-header::before,
        .dashboard-header::after {
            content: '';
            position: absolute;
            background-color: var(--secondary-color);
            height: 5px;
        }

        .dashboard-header::before {
            top: 0;
            left: 0;
            width: 100%;
        }

        .dashboard-header::after {
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .dashboard-header h1 {
            margin: 0;
            font-size: 1.8em;
            letter-spacing: 2px;
        }

        .user-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .user-table th, .user-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid var(--secondary-color);
        }

        .user-table th {
            background-color: rgba(212, 180, 131, 0.2);
            font-weight: bold;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.8em;
            letter-spacing: 1px;
        }

        .status-pending {
            background-color: #FFC107;
            color: var(--text-color);
        }

        .status-active {
            background-color: #4CAF50;
            color: white;
        }

        .status-blocked {
            background-color: #F44336;
            color: white;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-family: 'Lora', serif;
            font-size: 1em;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-approve {
            background-color: var(--primary-color);
            color: var(--background-color);
        }

        .btn-block {
            background-color: var(--secondary-color);
            color: var(--text-color);
        }

        .btn-remove {
            background-color: #F44336;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 15px;
            width: 400px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            border: 3px solid var(--primary-color);
        }

        .modal-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        @media (max-width: 600px) {
            .dashboard {
                margin: 1rem;
                border-radius: 10px;
            }

            .user-table {
                font-size: 0.9em;
            }
        }

        /* Decorative geometric pattern */
        .dashboard-header::after {
            background: repeating-linear-gradient(
                45deg,
                var(--secondary-color),
                var(--secondary-color) 10px,
                transparent 10px,
                transparent 20px
            );
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="dashboard-header">
            <h1>User Management</h1>
        </div>
        <table class="user-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>john_doe</td>
                    <td>john@example.com</td>
                    <td><span class="status status-pending">Pending</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-approve">Approve</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>jane_smith</td>
                    <td>jane@example.com</td>
                    <td><span class="status status-active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-block">Block</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>bob_miller</td>
                    <td>bob@example.com</td>
                    <td><span class="status status-blocked">Blocked</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-remove">Remove</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="modal" id="confirmModal">
        <div class="modal-content">
            <h2>Confirm Action</h2>
            <p id="modalMessage">Are you sure?</p>
            <div class="modal-buttons">
                <button class="btn btn-block" onclick="closeModal()">Cancel</button>
                <button class="btn btn-remove" onclick="confirmAction()">Confirm</button>
            </div>
        </div>
    </div>

    <script>
        function showModal(message) {
            const modal = document.getElementById('confirmModal');
            const modalMessage = document.getElementById('modalMessage');
            modalMessage.textContent = message;
            modal.style.display = 'flex';
        }

        function closeModal() {
            const modal = document.getElementById('confirmModal');
            modal.style.display = 'none';
        }

        function confirmAction() {
            console.log('Action confirmed');
            closeModal();
        }

        document.querySelectorAll('.btn-approve').forEach(btn => {
            btn.addEventListener('click', () => {
                showModal('Are you sure you want to approve this user?');
            });
        });

        document.querySelectorAll('.btn-block').forEach(btn => {
            btn.addEventListener('click', () => {
                showModal('Are you sure you want to block this user?');
            });
        });

        document.querySelectorAll('.btn-remove').forEach(btn => {
            btn.addEventListener('click', () => {
                showModal('Are you sure you want to remove this user?');
            });
        });
    </script>
</body>
</html>