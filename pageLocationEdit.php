<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $locationID = $_POST['location-id'];
        $location = $_POST['location-edit'];
        $address = $_POST['address-edit'];
        $map = $_POST['map-edit'];

        $stmt = $pdo->prepare("UPDATE locations SET location = :location, address = :address, map = :map WHERE locationID = :locationID AND restaurantID = 1");
        $stmt->execute(['location' => $location, 'address' => $address, 'map' => $map, 'locationID' => $locationID]);

        header('Location: adminTakeout.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

$locationID = $_GET['locationID']; 
$stmt = $pdo->prepare("SELECT * FROM locations WHERE locationID = :locationID AND restaurantID = 1");
$stmt->execute(['locationID' => $locationID]);
$locationData = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHaven - Location Edit</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<section class="page-edit-showcase-area" style="background-image: url('images/admin.jpg');">
    <div class="page-edit-container">
        <form class="page-edit-form" action="pageLocationEdit.php" method="POST">
            <h3><span>Location Edit</span></h3>
            <input type="hidden" name="location-id" value="<?php echo $locationData['locationID']; ?>">
            <div class="page-edit-form-group">
                <label for="location-edit">Location Name</label>
                <input type="text" id="location-edit" name="location-edit" value="<?php echo $locationData['location']; ?>">
            </div>
            <div class="page-edit-form-group">
                <label for="address-edit">Address</label>
                <input type="text" id="address-edit" name="address-edit" value="<?php echo $locationData['address']; ?>">
            </div>
            <div class="page-edit-form-group">
                <label for="map-edit">Map Link</label>
                <input type="text" id="map-edit" name="map-edit" value="<?php echo $locationData['map']; ?>">
            </div><br>
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
