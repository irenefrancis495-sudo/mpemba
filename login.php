<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Mpemba Marketplace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <main>
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-logo">
                    <i class="fa-solid fa-user-circle fa-3x" style="color:#66a6ff;"></i>
                </div>
                <h2>Welcome Back</h2>
                <p>Login to your account</p>
                <form id="login-form" method="post" action="login.php">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email address" required>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="options">
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn-primary">Login</button>
                </form>
                <div class="bottom-text">
                    Don’t have an account? <a href="#">Sign up</a>
                </div>
            </div>
        </div>
    </main>
    <?php include 'partials/footer.php'; ?>
    <script src="js/app.js"></script>
</body>
</html>
