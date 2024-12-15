@include('bars.SidebarMenu');
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

        /* Bookings and Reviews Section */
        .bookings-reviews {
            margin-top: 30px;
        }

        .bookings-reviews .section-header {
            font-size: 1.8rem;
            color: #1f6a7b;
            margin-bottom: 20px;
        }

        .booking-item, .review-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination button {
            background-color: #1f6a7b;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 5px;
            cursor: pointer;
        }

        .pagination button:hover {
            background-color: #004d5b;
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

        <!-- Bookings Section -->
        <div class="bookings-reviews">
            <div class="section-header">All Bookings</div>
            <div class="booking-item">
                <p><strong>Booking #1</strong> - Date: 2024-12-15 - Guest: John Doe</p>
            </div>
            <div class="booking-item">
                <p><strong>Booking #2</strong> - Date: 2024-12-14 - Guest: Jane Doe</p>
            </div>
            <div class="booking-item">
                <p><strong>Booking #3</strong> - Date: 2024-12-13 - Guest: Mark Smith</p>
            </div>
            <div class="booking-item">
                <p><strong>Booking #4</strong> - Date: 2024-12-12 - Guest: Lisa Brown</p>
            </div>
            <div class="booking-item">
                <p><strong>Booking #5</strong> - Date: 2024-12-11 - Guest: Peter White</p>
            </div>
            

            <!-- Pagination -->
            <div class="pagination">
                <button>Next</button>
            </div>

            <!-- Reviews Section -->
            <div class="section-header">All Reviews</div>
            <div class="review-item">
                <p><strong>Review #1</strong> - Rating: 5/5 - "Great service!"</p>
            </div>
            <div class="review-item">
                <p><strong>Review #2</strong> - Rating: 4/5 - "Very good experience!"</p>
            </div>
            <div class="review-item">
                <p><strong>Review #3</strong> - Rating: 3/5 - "Good, but room for improvement."</p>
            </div>
            <div class="review-item">
                <p><strong>Review #4</strong> - Rating: 5/5 - "Excellent stay!"</p>
            </div>
            <div class="review-item">
                <p><strong>Review #5</strong> - Rating: 4/5 - "Nice but could be better."</p>
            </div>
        

            <!-- Pagination -->
            <div class="pagination">
                <button>Next</button>
            </div>
        </div>
    </div>
</body>
</html>
