<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $restaurantID = 1;
        $email = $_POST['email-edit'];
        $contactNumber = $_POST['contact-number-edit'];
        $stmt = $pdo->prepare("UPDATE restaurant SET email = :email, contactNumber = :contactNumber WHERE restaurantID = :restaurantID");
        $stmt->execute(['email' => $email, 'contactNumber' => $contactNumber, 'restaurantID' => $restaurantID]);
        header('Location: adminTakeout.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

try {
    $stmt = $pdo->prepare("SELECT email, contactNumber FROM restaurant WHERE restaurantID = :restaurantID");
    $stmt->execute(['restaurantID' => 1]);
    $row = $stmt->fetch();
    $email = $row['email'];
    $contactNumber = $row['contactNumber'];
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHaven - Contact Edit</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <section class="page-edit-showcase-area" style="background-image: url('images/admin.jpg');">
        <div class="page-edit-container">
            <form class="page-edit-form" action="pageContactEdit.php" method="POST">
                <h2>FoodHaven</h2>
                <h3><span>Contact Edit</span></h3>
                <div class="page-edit-form-group">
                    <label for="email-edit">Email</label>
                    <input type="text" id="email-edit" name="email-edit" value="<?php echo $email; ?>">
                </div>
                <div class="page-edit-form-group">
                    <label for="contact-number-edit">Contact Number</label>
                    <input type="text" id="contact-number-edit" name="contact-number-edit" value="<?php echo $contactNumber; ?>">
                </div>
                <button type="page-edit-submit" class="btn btn-primary">Save</button>
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
