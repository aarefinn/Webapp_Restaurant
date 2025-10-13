<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
    try {
        $menuItemID = $_POST['menu-item-id'];
        $itemName = $_POST['item-name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        $stmt = $pdo->prepare("UPDATE menuitem SET itemName = :itemName, description = :description, price = :price WHERE itemID = :menuItemID");
        $stmt->execute(['itemName' => $itemName, 'description' => $description, 'price' => $price, 'menuItemID' => $menuItemID]);
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
            
            <form class="page-edit-form" action="editMenuItem.php" method="POST">
            <h3><span>Edit Menu Item</span></h3>      
                <div class="page-edit-form-group">
                    <label for="item-name">Item Name</label>
                    <input type="text" id="item-name" name="item-name">
                </div>
                <div class="page-edit-form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description">
                </div>
                <div class="page-edit-form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price">
                </div>
                <input type="hidden" name="menu-item-id" value="<?php echo $_GET['itemID']; ?>"><br>
                <button type="page-edit-submit" name="save" class="btn btn-primary">Save</button><br>
            </form>
            <button type="page-edit-redirect" class="btn btn-primary" onclick="goBack()">Back to Page</button>
        </div>
    </section>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
