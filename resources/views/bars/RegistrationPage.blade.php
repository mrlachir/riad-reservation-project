<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Riad</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        /* General Body Styles */
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
    color: #333;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Registration Container */
.register-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    max-width: 450px;
    width: 100%;
    padding: 40px;
    background-image: url('https://www.example.com/your-riad-pattern.jpg'); /* Optional Moroccan pattern */
    background-size: cover;
    background-position: center;
    position: relative;
}

/* Form Title */
.register-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.5rem;
    color: #2a2a2a;
    text-align: center;
    margin-bottom: 30px;
    font-weight: bold;
}

/* Form Styles */
.form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Form Groups */
.form-group {
    margin-bottom: 20px;
}

/* Labels */
.form-group label {
    font-size: 1rem;
    font-weight: 600;
    color: #5d3d27; /* Terracotta color */
}

/* Input Fields */
.form-group input {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 1rem;
    color: #333;
    background-color: #f4f4f4;
}

.form-group input:focus {
    outline: none;
    border-color: #1f6a7b; /* Moroccan Blue */
}

/* Terms and Conditions Checkbox */
.form-group input[type="checkbox"] {
    margin-right: 8px;
}

.form-group a {
    color: #1f6a7b; /* Moroccan Blue */
    text-decoration: none;
}

.form-group a:hover {
    text-decoration: underline;
}

/* Register Button */
.register-btn {
    background-color: #1f6a7b; /* Moroccan Blue */
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.register-btn:hover {
    background-color: #004d5b; /* Darker Blue on hover */
}

/* Login Link */
.login-link {
    text-align: center;
    margin-top: 15px;
}

.login-link p {
    font-size: 1rem;
}

.login-link a {
    color: #1f6a7b;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .register-container {
        padding: 30px;
    }
    .register-title {
        font-size: 2rem;
    }
}

    </style>
    <div class="register-container">
        <div class="register-form">
            <h2 class="register-title">Create Your Account at Riad</h2>
            <form action="/register" method="POST" class="form">
                <!-- Full Name -->
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                </div>

                <!-- Terms and Conditions -->
                <div class="form-group">
                    <label>
                        <input type="checkbox" id="terms" name="terms" required>
                        I agree to the <a href="#">Terms and Conditions</a>
                    </label>
                </div>

                <!-- Register Button -->
                <div class="form-group">
                    <button type="submit" class="register-btn">Register</button>
                </div>

                <!-- Login Link -->
                <div class="login-link">
                    <p>Already have an account? <a href="/login">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
