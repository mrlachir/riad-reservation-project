<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riad Reservation Confirmation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap');

        body {
            font-family: 'Scheherazade New', serif;
            background-color: #F5E6D3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: linear-gradient(rgba(245, 230, 211, 0.9), rgba(245, 230, 211, 0.9)), 
                              url('data:image/svg+xml;utf8,<svg width="100" height="100" transform="rotate(25)" opacity="0.3" xmlns="http://www.w3.org/2000/svg"><pattern id="p" patternUnits="userSpaceOnUse" width="50" height="50"><path d="M25 0v50M0 25h50" fill="none" stroke="%23C19A6B" stroke-width="2"/></pattern><rect width="100%" height="100%" fill="url(%23p)"/></svg>');
        }

        .confirmation-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 500px;
            width: 90%;
            text-align: center;
            border: 3px solid #C19A6B;
            position: relative;
            overflow: hidden;
        }

        .confirmation-container::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: url('data:image/svg+xml;utf8,<svg width="200" height="200" xmlns="http://www.w3.org/2000/svg"><pattern id="moroccan" patternUnits="userSpaceOnUse" width="40" height="40"><path d="M0 0 L40 0 L20 20 Z" fill="%23E6D2B5" opacity="0.3"/></pattern><rect width="100%" height="100%" fill="url(%23moroccan)"/></svg>');
            z-index: -1;
            opacity: 0.5;
        }

        .riad-logo {
            width: 100px;
            height: 100px;
            background-color: #C19A6B;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .riad-logo::before {
            content: '✓';
            color: white;
            font-size: 50px;
            font-weight: bold;
        }

        h1 {
            color: #5D4037;
            margin-bottom: 15px;
            font-size: 2em;
        }

        .booking-details {
            background-color: #F0E5D8;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            text-align: left;
        }

        .detail-item {
            margin-bottom: 10px;
            border-bottom: 1px solid #D7C0A3;
            padding-bottom: 10px;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: #8B4513;
            font-weight: bold;
            margin-right: 10px;
        }

        .button {
            display: inline-block;
            background-color: #C19A6B;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            font-weight: bold;
        }

        .button:hover {
            background-color: #A47551;
        }

        @media (max-width: 600px) {
            .confirmation-container {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <div class="riad-logo"></div>
        <h1>Reservation Confirmed</h1>
        <p>Thank you for booking your stay at our Riad</p>
        
        <div class="booking-details">
            <div class="detail-item">
                <span class="detail-label">Reservation Date:</span>
                <span>15 December 2024</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Room Type:</span>
                <span>Deluxe Moroccan Suite</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Check-in:</span>
                <span>2:00 PM</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Guests:</span>
                <span>2 Adults</span>
            </div>
        </div>

        <a href="{{route('home.page')}}" class="button">Go To Home</a>
    </div>
</body>
</html>