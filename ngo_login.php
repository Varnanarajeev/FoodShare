<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO Login - FoodShare</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="auth-container">
        <div class="auth-form">
            <div class="auth-header">
                <h1>🍽️ FoodShare</h1>
                <h2>NGO Login</h2>
                <p>Access your dashboard to manage food donations and help your community</p>
            </div>

            <form method="POST" class="form" id="ngoLoginForm">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary btn-full">Login to Dashboard</button>
            </form>

            <div class="auth-links">
                <a href="forgot_password.php">Forgot your password?</a>
            </div>

            <div class="auth-footer">
                <p>Don't have an account? <a href="ngo_register.php">Register as NGO</a></p>
                <p>Are you a donor? <a href="donor_login.php">Donor Login</a></p>
                <p>Admin access? <a href="admin_login.php">Admin Login</a></p>
            </div>
        </div>

        <div class="auth-image">
            <img src="https://images.pexels.com/photos/6995244/pexels-photo-6995244.jpeg?auto=compress&cs=tinysrgb&w=800" alt="NGO community work" />
        </div>
    </div>

    <script src="main.js"></script>
    <script src="auth.js"></script>
</body>

</html>