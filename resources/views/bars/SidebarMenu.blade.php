<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riad Dashboard Overview</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            /* display: flex; */
            flex-direction: column;
        }

        /* Navbar Styles */
        .navbar {
            
            width: 100%;
            background-color: #1f6a7b; /* Moroccan Blue */
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* position: fixed; */
            top: 0;
            left: 0;
            z-index: 100;
        }

        .navbar .navbar-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar-nav {
            display: flex;
            gap: 20px;
            margin-right: 20%;
        }

        .navbar-nav a {
            text-decoration: none;
            color: #fff;
            font-size: 1.1rem;
            padding: 12px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
        }

        .navbar-nav a:hover {
            background-color: #004d5b; /* Darker Blue */
        }

        .navbar-nav a.active {
            background-color: #d78f2a; /* Moroccan Terracotta for active links */
        }

        .navbar-nav a i {
            margin-right: 10px;
            font-size: 1.4rem;
        }

        /* Content Area */
        .content {
            margin-top: 80px; /* Space for the fixed navbar */
            padding: 20px;
            width: 100%;
        }

        /* Dashboard Header */
        .dashboard-header h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.5rem;
            color: #1f6a7b; /* Moroccan Blue */
            text-align: center;
            margin-bottom: 30px;
        }

        /* Key Statistics Section */
        .key-statistics {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        /* Individual Stat Card */
        .stat-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 30%;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
        }

        .stat-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .stat-header i {
            font-size: 2rem;
            color: #1f6a7b; /* Moroccan Blue */
            margin-right: 15px;
        }

        .stat-header h3 {
            font-size: 1.5rem;
            color: #333;
            font-weight: bold;
        }

        .stat-value {
            text-align: center;
            margin: 15px 0;
        }

        .stat-value .value {
            font-size: 2.5rem;
            color: #d78f2a; /* Moroccan Terracotta */
            font-weight: bold;
        }

        .stat-value .period {
            font-size: 1rem;
            color: #555;
        }

        .stat-footer {
            font-size: 0.9rem;
            color: #888;
        }


    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-title">Riad Dashboard</div>
        <div class="navbar-nav">
            <a href="{{ route('dashboard.overview') }}" class="sidebar-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="{{ route('manage.rooms') }}" class="sidebar-link"><i class="fas fa-bed"></i> Manage Rooms</a>
            <a href="{{ route('manage.users') }}" class="sidebar-link"><i class="fas fa-users"></i> Manage Users</a>
            <a href="{{ route('manage.activities') }}" class="sidebar-link"><i class="fas fa-cogs"></i> Manage Activities</a>
            <a href="{{ route('manage.homepage') }}" class="sidebar-link"><i class="fas fa-home"></i> Manage Home</a>
        </div>
    </nav>

</body>
</html>
