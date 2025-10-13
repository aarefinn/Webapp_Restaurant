<?php
$host = 'localhost';
$dbname = 'foodhaven';
$username = 'root';
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query("SELECT CURRENT_TIMESTAMP");
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
