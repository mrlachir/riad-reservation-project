<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Riad</title>
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

/* Login Container */
.login-container {
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
.login-title {
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

/* Forgot Password Link */
.forgot-password {
    text-align: right;
}

.forgot-link {
    font-size: 0.9rem;
    color: #1f6a7b; /* Moroccan Blue */
    text-decoration: none;
}

.forgot-link:hover {
    text-decoration: underline;
}

/* Login Button */
.login-btn {
    background-color: #1f6a7b; /* Moroccan Blue */
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-btn:hover {
    background-color: #004d5b; /* Darker Blue on hover */
}

/* Error Message */
.error-message {
    display: none; /* Hidden by default, show on error */
    margin-top: 20px;
    color: #e74c3c;
    font-size: 1rem;
    text-align: center;
}

.error-message p {
    margin: 0;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .login-container {
        padding: 30px;
    }
    .login-title {
        font-size: 2rem;
    }
}

    </style>
    <div class="login-container">
        <div class="login-form">
            <h2 class="login-title">Welcome Back to Riad</h2>
            <form action="/login" method="POST" class="form">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="form-group forgot-password">
                    <a href="#" class="forgot-link">Forgot your password?</a>
                </div>

                <div class="form-group">
                    <button type="submit" class="login-btn">Login</button>
                </div>

                <div class="error-message">
                    <p id="error-msg">Invalid email or password. Please try again.</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
