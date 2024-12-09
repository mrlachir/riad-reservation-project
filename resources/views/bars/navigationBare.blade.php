<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riad Booking Navigation</title>
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

        /* Luxurious Navigation Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 7%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
        }

        .navbar-logo img {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
            border: 2px solid #d4af37;
        }

        .navbar-logo h1 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: #2c3e50;
            letter-spacing: 1px;
        }

        .navbar-menu {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .navbar-menu li a {
            text-decoration: none;
            color: #4a4a4a;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            transition: color 0.3s ease;
            font-size: 0.9rem;
        }

        .navbar-menu li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background-color: #d4af37;
            transition: all 0.3s ease;
        }

        .navbar-menu li a:hover {
            color: #d4af37;
        }

        .navbar-menu li a:hover::after {
            width: 100%;
            left: 0;
        }

        .navbar-auth {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .btn {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            font-size: 0.8rem;
        }

        .btn-login {
            background-color: transparent;
            border: 2px solid #2c3e50;
            color: #2c3e50;
        }

        .btn-register {
            background-color: #d4af37;
            color: #fff;
            border: 2px solid #d4af37;
        }

        .btn-login:hover {
            background-color: #2c3e50;
            color: #fff;
        }

        .btn-register:hover {
            background-color: #b18f2a;
            border-color: #b18f2a;
        }
        
</style>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="/api/placeholder/60/60" alt="Riad Booking Logo">
            <h1>Riad Booking</h1>
        </div>

        <ul class="navbar-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/rooms">Rooms</a></li>
            <li><a href="/activities">Activities</a></li>
        </ul>

        <div class="navbar-auth">
            <a href="/login" class="btn btn-login">Login</a>
            <a href="/register" class="btn btn-register">Register</a>
            <a href="/profile" class="btn btn-register">Profile</a>
        </div>
    </nav>

    <script>
        // Scroll effect for navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>