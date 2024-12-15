@include('bars.SidebarMenu');

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Riad Theme</title>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <style>


        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
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

        .role {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 0.8em;
            letter-spacing: 1px;
        }

        .role-admin {
            background-color: #4CAF50;
            color: white;
        }

        .role-user {
            background-color: #FFC107;
            color: var(--text-color);
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

        .btn-edit {
            background-color: var(--primary-color);
            color: var(--background-color);
        }

        .btn-delete {
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

    </style>
</head>
<body>
    <div class="dashboard">
        <div class="dashboard-header">
            <h1>User Management</h1>
        </div>
        <table class="user-table" id="userTable">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>john_doe</td>
                    <td>john@example.com</td>
                    <td><span class="role role-admin">Admin</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>jane_smith</td>
                    <td>jane@example.com</td>
                    <td><span class="role role-user">User</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Delete</button>
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
                <button class="btn btn-delete" onclick="confirmAction()">Confirm</button>
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

        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', function() {
                const row = this.closest('tr');
                const currentRole = row.querySelector('.role');
                const newRole = currentRole.textContent === 'Admin' ? 'User' : 'Admin';
                
                currentRole.textContent = newRole;
                if (newRole === 'Admin') {
                    currentRole.className = 'role role-admin';
                } else {
                    currentRole.className = 'role role-user';
                }
            });
        });

        document.querySelectorAll('.btn-delete').forEach(btn => {
            btn.addEventListener('click', function() {
                showModal('Are you sure you want to delete this user?');
                const row = this.closest('tr');
                const modalConfirm = document.querySelector('.btn-delete');
                modalConfirm.addEventListener('click', () => {
                    row.remove();
                    closeModal();
                });
            });
        });
    </script>
</body>
</html>
