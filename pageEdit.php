<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $description = $_POST['description-edit'];
        $rating = $_POST['rating-text'];
        $openingHours = $_POST['openingHours-text'];
        $stmt = $pdo->prepare("UPDATE restaurant SET description = :description, rating = :rating, openingHours = :openingHours WHERE restaurantID = :restaurantID");
        $stmt->execute(['description' => $description, 'openingHours' => $openingHours, 'rating' => $rating, 'restaurantID' => 1]);
        
        header('Location: adminTakeout.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHaven</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
        <section class="page-edit-showcase-area" style="background-image: url('images/admin.jpg');">
        <div class="page-edit-container">
            <form class="page-edit-form" action="pageEdit.php" method="POST">
                <h3><span>Page Edit</span></h3>
                <div class="page-edit-form-group">
                    <label for="description-edit">New Description</label>
                    <input type="text" id="description-edit" name="description-edit">
                </div>
                <div class="page-edit-form-group">
                    <label for="openingHours">New Opening Hours</label>
                    <input type="text" id="openingHours-text" name="openingHours-text">
                </div>
                <div class="page-edit-form-group">
                    <label for="rating">New Rating</label>
                    <input type="text" id="rating-text" name="rating-text">
                </div>
                <br>
            <button type="page-edit-submit" class="btn btn-primary">Save</button><br>
            </form>
            <button type="page-edit-redirect" class="btn btn-primary" onclick="goBack()">Back to Page</button>
        </div>
    </section>

    <script>
        function goBack() {
            var urlParams = new URLSearchParams(window.location.search);
            var returnPage = urlParams.get('return');
            if (returnPage) {
                window.location.href = returnPage;
            } else {
                window.location.href = 'restaurantHome.html';
            }
        }
    </script>

    </body>
</html>
