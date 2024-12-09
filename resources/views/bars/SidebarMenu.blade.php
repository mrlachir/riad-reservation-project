<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Riad</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        /* General Styles */
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
}

/* Sidebar Styles */
.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #1f6a7b; /* Moroccan Blue */
    color: #fff;
    padding: 20px;
    position: fixed;
}

.sidebar-header {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
}

/* Sidebar Navigation */
.sidebar-nav ul {
    list-style: none;
    padding: 0;
}

.sidebar-nav ul li {
    margin: 15px 0;
}

.sidebar-nav ul li a {
    display: flex;
    align-items: center;
    padding: 12px 15px;
    text-decoration: none;
    color: #fff;
    font-size: 1.1rem;
    border-radius: 8px;
    transition: background-color 0.3s;
}

.sidebar-nav ul li a:hover {
    background-color: #004d5b; /* Darker Blue */
}

.sidebar-nav ul li a i {
    margin-right: 10px;
    font-size: 1.4rem;
}

/* Active Link */
.sidebar-nav ul li a.active {
    background-color: #d78f2a; /* Moroccan Terracotta for active links */
}

/* Content Area */
.content {
    margin-left: 250px;
    padding: 20px;
    width: calc(100% - 250px); /* Adjusting content area based on sidebar */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
        padding: 15px;
    }
    
    .content {
        margin-left: 200px;
        width: calc(100% - 200px);
    }

    .sidebar-title {
        font-size: 1.5rem;
    }

    .sidebar-nav ul li a {
        font-size: 1rem;
    }
}

    </style>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2 class="sidebar-title">Riad Dashboard</h2>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="/dashboard" class="sidebar-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="/rooms" class="sidebar-link"><i class="fas fa-bed"></i> Manage Rooms</a></li>
                <li><a href="/bookings" class="sidebar-link"><i class="fas fa-calendar-check"></i> Manage Bookings</a></li>
                <li><a href="/reviews" class="sidebar-link"><i class="fas fa-star"></i> Reviews</a></li>
                <li><a href="/users" class="sidebar-link"><i class="fas fa-users"></i> Manage Users</a></li>
                <li><a href="/activities" class="sidebar-link"><i class="fas fa-cogs"></i> Manage Activities</a></li>
                <li><a href="/" class="sidebar-link"><i class="fas fa-home"></i> Home</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <!-- Your page content goes here -->
    </div>
</body>
</html>
