<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riad Dashboard Overview</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
                padding: 15px;
            }

            .content {
                margin-left: 200px;
                width: calc(100% - 200px);
            }

            .key-statistics {
                flex-direction: column;
                align-items: center;
            }

            .stat-card {
                width: 80%;
                margin-bottom: 20px;
            }

            .stat-header h3 {
                font-size: 1.25rem;
            }

            .stat-value .value {
                font-size: 2rem;
            }
        }
    </style>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2 class="sidebar-title">Riad Dashboard</h2>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="{{ route('Dashboard.overview') }}" class="sidebar-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="{{ route('manage.rooms') }}" class="sidebar-link"><i class="fas fa-bed"></i> Manage Rooms</a></li>
                <li><a href="{{ route('manage.users') }}" class="sidebar-link"><i class="fas fa-users"></i> Manage Users</a></li>
                <li><a href="{{ route('manage.activities') }}" class="sidebar-link"><i class="fas fa-cogs"></i> Manage Activities</a></li>
                <li><a href="{{ route('home.page') }}" class="sidebar-link"><i class="fas fa-home"></i> Manage Home</a></li>
            </ul>
        </nav>
    </div>

    