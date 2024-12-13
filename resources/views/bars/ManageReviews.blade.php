<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            background-color: #f9f5f0;
            color: #4a4a4a;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        h1 {
            text-align: center;
            font-family: 'Cormorant Garamond', serif;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-section select,
        .filter-section input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
        }
        /* Review Management */
        .review-list {
            margin-top: 40px;
        }

        .review-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .review-card h4 {
            font-family: 'Cormorant Garamond', serif;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .review-card p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 10px;
        }

        .review-card .actions {
            display: flex;
            gap: 10px;
        }

        .review-card .actions button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-family: 'Montserrat', sans-serif;
        }

        .review-card .actions .approve-btn {
            background-color: #4CAF50;
            color: white;
        }

        .review-card .actions .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .review-card .actions button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
        <div class="review-list" id="reviewList">
            <h1>Manage Reviews</h1>
            <!-- Review cards dynamically inserted here -->
        </div>
    </div>

    <script>
        const reviewList = document.getElementById('reviewList');
        const reviews = [
            {
                id: 1,
                reviewer: "John Doe",
                review: "Amazing experience! Highly recommend.",
                status: "Pending",
            },
            {
                id: 2,
                reviewer: "Jane Smith",
                review: "Not satisfied with the room service.",
                status: "Pending",
            },
        ];
        function renderReviews() {
            reviewList.innerHTML = '';
            reviews.forEach((review) => {
                const card = document.createElement('div');
                card.classList.add('review-card');

                card.innerHTML = `
                    <h4>Review by ${review.reviewer}</h4>
                    <p>${review.review}</p>
                    <div class="actions">
                        <button class="approve-btn">Approve</button>
                        <button class="delete-btn">Delete</button>
                    </div>
                `;

                // Add Event Listeners for Actions
                card.querySelector('.approve-btn').addEventListener('click', () => {
                    alert(`Approved review by ${review.reviewer}`);
                });

                card.querySelector('.delete-btn').addEventListener('click', () => {
                    alert(`Deleted review by ${review.reviewer}`);
                });

                reviewList.appendChild(card);
            });
        }

        // Initial Render
        renderReviews();
    </script>
</body>
</html>
