<?php
session_start();
require_once "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username AND password = :password AND admin = :admin");
    $stmt->execute(['username' => $username, 'password' => $password, 'admin' => ($role == 'admin' ? 1 : 0)]);

    if ($stmt->rowCount() == 1) {
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $role;
        setcookie("isLoggedIn", true, time() + (86400 * 30), "/");
        if ($role == 'admin') {
            header("location: adminIndex.php"); 
        } else {
            header("location: index.php"); 
        }
        exit();
    } else {
        $_SESSION["error"] = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodHaven</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <section class="login-showcase-area" style="background-image: url('images/showcaseLogin.jpg');">
        <div class="login-container">
            <form class="login-form" action="login.php" method="POST">
                <h2>FoodHaven</h2>
                <h3><span>Login</span></h3>
                <?php
                    if(isset($_SESSION["error"])) {
                        echo "<p class='error-message'>" . $_SESSION["error"] . "</p>";
                        unset($_SESSION["error"]);
                    }
                ?>
                <div class="login-form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="login-form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="login-form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="" selected disabled>Select Role</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="login-submit" class="btn btn-primary">Login</button>
            </form>
            <p class="login-signup-paragragh">Don't have an account? Sign Up!</p>
            <button type="signup-redirect" onclick="window.location.href='signup.php'" class="btn btn-primary">Sign Up</button>
            <button type="homepage" onclick="window.location.href='index.php'" class="btn btn-secondary">Home Page</button>
        </div>
    </section>
</body>
</html>
