<?php
session_start();
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if ($password != $confirm_password) {
        $_SESSION["error"] = "Passwords do not match";
        header("location: signup.php"); 
        exit(); 
    }
    $stmt = $pdo->prepare("INSERT INTO user (userName, email, password) VALUES (:fullname, :email, :password)");
    $stmt->execute(['fullname' => $fullname, 'email' => $email, 'password' => $password]);
    header("location: index.php");
    exit(); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodHaven - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="signup-showcase-area" style="background-image: url('images/showcaseLogin.jpg');">
        <div class="signup-container">
            <form class="signup-form" action="signup.php" method="post">
                <h2>FoodHaven</h2>
                <h3><span>Sign Up</span></h3>
                <?php if(isset($_SESSION["error"])): ?>
                    <p class="error-message"><?php echo $_SESSION["error"]; ?></p>
                    <?php unset($_SESSION["error"]); ?>
                <?php endif; ?>
                <div class="signup-form-group">
                    <label for="fullname">Username</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="signup-form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="signup-form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="signup-form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="signup-submit" class="btn btn-primary">Sign Up</button>
            </form>
            <button type="homepage" onclick="window.location.href='index.php'" class="btn btn-secondary">Home Page</button>
        </div>
    </section>
</body>
</html>

