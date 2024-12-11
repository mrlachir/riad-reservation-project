<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
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

    /* Profile Section */
    .profile-container {
        padding: 2rem 7%;
    }

    .profile-card {
        background-color: #fff;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        border-radius: 8px;
    }

    .profile-card h3 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 1rem;
    }

    .profile-form input,
    .profile-form textarea {
        width: 100%;
        padding: 1rem;
        margin-bottom: 1rem;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 1rem;
    }

    .profile-form label {
        font-weight: 600;
        color: #2c3e50;
        display: block;
        margin-bottom: 0.5rem;
    }

    .btn {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        font-size: 0.9rem;
        display: inline-block;
    }

    .btn-update {
        background-color: #d4af37;
        color: #fff;
        border: 2px solid #d4af37;
    }

    .btn-update:hover {
        background-color: #b18f2a;
        border-color: #b18f2a;
    }

    .section-header {
        margin-bottom: 1.5rem;
        font-size: 1.6rem;
        font-weight: 600;
        color: #2c3e50;
    }

    .settings-container {
        background-color: #fff;
        padding: 2rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        border-radius: 8px;
    }

    .settings-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1.2rem;
    }

    .settings-item label {
        font-weight: 500;
        color: #4a4a4a;
        font-size: 1rem;
    }

    .settings-item select,
    .settings-item input {
        font-size: 1rem;
        padding: 0.8rem;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .settings-item input[type="checkbox"] {
        width: auto;
    }

    .settings-item input[type="checkbox"]:checked {
        background-color: #d4af37;
    }

    .btn-save {
        background-color: #2c3e50;
        color: #fff;
        border: 2px solid #2c3e50;
    }

    .btn-save:hover {
        background-color: #1a2a36;
    }

</style>
<body>
    <!-- Header -->
    <header class="header">
        <h1>Admin Profile</h1>
    </header>

    <!-- Profile Details Section -->
    <section class="profile-container">
        <div class="profile-card">
            <h3>Update Admin Details</h3>
            <form class="profile-form">
                <label for="adminName">Admin Name</label>
                <input type="text" id="adminName" placeholder="Enter name" required>

                <label for="adminEmail">Email</label>
                <input type="email" id="adminEmail" placeholder="Enter email" required>

                <label for="adminContact">Contact Information</label>
                <input type="tel" id="adminContact" placeholder="Enter contact number" required>

                <a href="javascript:void(0);" class="btn btn-update">Update Profile</a>
            </form>
        </div>
    </section>

    <!-- Admin Settings Section -->
    <section class="profile-container">
        <div class="settings-container">
            <h3 class="section-header">Settings</h3>

            <form>
                <div class="settings-item">
                    <label for="adminPassword">Password</label>
                    <input type="password" id="adminPassword" placeholder="Enter new password">
                </div>

                <div class="settings-item">
                    <label for="notificationSettings">Email Notifications</label>
                    <select id="notificationSettings">
                        <option value="on">On</option>
                        <option value="off">Off</option>
                    </select>
                </div>

                <div class="settings-item">
                    <label for="adminPreferences">Preferences</label>
                    <input type="checkbox" id="adminPreferences" checked>
                    <label for="adminPreferences">Enable special admin preferences</label>
                </div>

                <a href="javascript:void(0);" class="btn btn-save">Save Settings</a>
            </form>
        </div>
    </section>
</body>
</html>
