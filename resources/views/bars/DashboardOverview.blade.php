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

<?php
@include ('Sidebar')
?>
    <style>
        /* General Styles */
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Container for the Dashboard */
.container {
    width: 85%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
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
    <div class="container">
        <div class="dashboard-header">
            <h2>Dashboard Overview</h2>
        </div>

        <div class="key-statistics">
            <div class="stat-card">
                <div class="stat-header">
                    <i class="fas fa-calendar-check"></i>
                    <h3>Bookings</h3>
                </div>
                <div class="stat-value">
                    <p class="value">150</p>
                    <p class="period">This Month</p>
                </div>
                <div class="stat-footer">
                    <p><strong>Today:</strong> 12</p>
                    <p><strong>This Week:</strong> 45</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <i class="fas fa-cogs"></i>
                    <h3>Activities</h3>
                </div>
                <div class="stat-value">
                    <p class="value">50</p>
                    <p class="period">This Month</p>
                </div>
                <div class="stat-footer">
                    <p><strong>Today:</strong> 5</p>
                    <p><strong>This Week:</strong> 20</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <i class="fas fa-dollar-sign"></i>
                    <h3>Revenue</h3>
                </div>
                <div class="stat-value">
                    <p class="value">$7,500</p>
                    <p class="period">This Month</p>
                </div>
                <div class="stat-footer">
                    <p><strong>Today:</strong> $500</p>
                    <p><strong>This Week:</strong> $2,000</p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
