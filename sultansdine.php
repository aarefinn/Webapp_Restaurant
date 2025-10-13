<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHaven</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index.php">Home</a></li>
                <li><a href="restaurantHome.html">Restaurants</a></li>
                <li><a href="#description">About</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#contact-info">Contact</a></li>
            </ul>
            <h1 class="logo">FoodHaven</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase" style="background-image: url('images/sultansdinelogo.jpg');">
    </section>

    <section id="description">
        <h2 class="description-heading">About!</h2>
        <div class="decription-container">
            <div class="description-item">
                <?php
                require 'database.php';
                try {
                    $stmt = $pdo->prepare("SELECT description FROM restaurant WHERE restaurantID = :restaurantID");
                    $stmt->execute(['restaurantID' => 3]);
                    $row = $stmt->fetch();
                    $description = $row['description'];
                    echo '<p class="description-paragraph">' . $description . '</p>';
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>

            <div class="rating">
            <?php
                require 'database.php';
                try {
                    $stmt = $pdo->prepare("SELECT openingHours FROM restaurant WHERE restaurantID = :restaurantID");
                    $stmt->execute(['restaurantID' => 3]);
                    $row = $stmt->fetch();
                    $openingHours = $row['openingHours'];
                    echo '<p class="rating-paragraph"><small>Open From: </small>' . $openingHours . '</p>';
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>

            <div class="rating">
            <?php
                require 'database.php';
                try {
                    $stmt = $pdo->prepare("SELECT rating FROM restaurant WHERE restaurantID = :restaurantID");
                    $stmt->execute(['restaurantID' => 3]);
                    $row = $stmt->fetch();
                    $rating = $row['rating'];
                    echo '<p class="rating-paragraph">Restaurant Rating: ' . $rating . '</p>';
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>
        </div>
    </section>


    <?php
        require 'database.php'; 

        try {
            $stmt = $pdo->prepare("SELECT * FROM menuitem WHERE menuID = :menuID");
            $stmt->execute(['menuID' => 3]);
            $menuItems = $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    ?>


    <section id="food-menu">
        <h2 class="food-menu-heading">Menu</h2>
        <div class="food-menu-container container">
            <div class="food-menu-items">
                <?php
            
                foreach ($menuItems as $menuItem) {
                    $imageUrl = str_replace('C:\\xampp\\htdocs\\webapp\\', '/webapp/', $menuItem['imagePath']);
                    ?>
                    <div class="food-menu-item">
                        <img class="food-item-img" src="<?php echo $imageUrl; ?>" alt="<?php echo $menuItem['itemName']; ?>">
                        <h3 class="food-item-name"><?php echo $menuItem['itemName']; ?></h3>
                        <p class="food-item-description"><?php echo $menuItem['description']; ?></p>
                        <p class="food-item-price"><?php echo 'TK ' . $menuItem['price']; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>



    <section id="location">
        <h2 class="location-heading">Locations</h2>
        <div class="location-container container">
            <div class="location-items">
                <?php
                require 'database.php'; 

                try {
                    $stmt = $pdo->prepare("SELECT location, address, map FROM locations WHERE restaurantID = :restaurantID");
                    $stmt->execute(['restaurantID' => 3]); 

                    while ($row = $stmt->fetch()) {
                        $location = $row['location'];
                        $address = $row['address'];
                        $map = $row['map'];

                        echo '<div class="location-item">';
                        echo '<h3 class="location-name">' . $location . '</h3>';
                        echo '<p class="location-description">' . $address . '</p>';
                        echo '<a href="' . $map . '" target="_blank" " class="btn btn-secondary">Google Map</a>';
                        echo '</div>';
                    }

                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>
        </div>
    </section>


    <?php
        require 'database.php'; 
        try {
            $stmt = $pdo->prepare("SELECT email, contactNumber FROM restaurant WHERE restaurantID = :restaurantID");
            $stmt->execute(['restaurantID' => 3]); 

            $row = $stmt->fetch();
            $email = $row['email'];
            $number = $row['contactNumber'];
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    ?>

    <section id="contact-info">
        <h2 class="contact-info-heading">Contact:</h2>
        <div class="contact-info-container">
            <p class="contact-info-paragraph" id="contact-text">
                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> <big><font color="#117964">Or</font></big> <?php echo $number; ?>
            </p>
        </div>
    </section>

</body>
</html>