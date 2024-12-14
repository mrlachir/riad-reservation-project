
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
            /* padding-top: 80px; Adjust this value to the height of the navbar */
        }

        /* Luxurious Navigation Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 7%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        /* Initially non-fixed navbar */
        .navbar.scrolled {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: stronger shadow when fixed */
        }

        /* Styling for the logo */
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

        /* Navbar menu styling */
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

        /* Navbar auth section */
        .navbar-auth {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .btn-navbar {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            font-size: 0.8rem;
        }

        .btn-login-navbar {
            background-color: transparent;
            border: 2px solid #2c3e50;
            color: #2c3e50;
        }

        .btn-nav {
            background-color: #d4af37;
            color: #fff;
            border: 2px solid #d4af37;
        }

        .btn-login-navbar:hover {
            background-color: #2c3e50;
            color: #fff;
        }

        .btn-nav:hover {
            background-color: #b18f2a;
            border-color: #b18f2a;
        }
    </style>
 

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="https://www.alleganyco.gov/wp-content/uploads/unknown-person-icon-Image-from.png" alt="Riad Booking Logo">
            <h1>Riad Booking</h1>
        </div>

        <ul class="navbar-menu">
            <li><a href="{{route('home.page')}}">Home</a></li>
            <li><a href="{{route('room.listings')}}">Rooms</a></li>
            <li><a href="{{route('activities.listings')}}">Activities</a></li>
        </ul>

        <div class="navbar-auth">
            <a href="/login" class="btn-navbar btn-login-navbar">Sign up</a>
            <a href="/profile/page" class="btn-navbar btn-nav">Profile</a>
        </div>
    </nav>

    <!-- Page Content -->
    <!-- <div class="content">
        
    </div> -->

    <!-- Scroll effect for navbar -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
