<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHaven</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!--Navigation Bar-->
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#about">About Us</a></li>
                <li><a href="restaurantHome.html">Restaurants</a></li>
                <li><a href="#recommendations">Recommendation</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php" id="login-btn">Login</a></li>
                <li><a href="logout.php" id="logout-btn" style="display: none;">Logout</a></li>
            </ul>
            <h1 class="logo">FoodHaven</h1>
        </div>
    </nav>
    <!--Showcase: Motto & Background Image-->
    <section class="showcase-area" id="showcase" style="background: linear-gradient(rgba(240, 240, 240, 0.144), rgba(255, 255, 255, 0.336)), url('images/showcaseImg.png');">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Good Food, Great Mood</h1>
            <p>We will help you find restaurants</p>
            <a href="restaurantHome.html" class="btn btn-primary">Restaurants</a>
        </div>
    </section>
    <!--About Us-->
    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We help put you in a Great Mood!</h2>
                <p>
                    Welcome to FoodHaven – your ultimate guide to local dining! Discover the best restaurants in your area with ease. From cozy cafes to gourmet eateries, we've got you covered. Join us on a delicious journey through our community's culinary delights. Let's explore, indulge, and savor together at FoodHaven.<br>Bon appétit!
                </p>
            </div>
            <div class="about-img">
                <img src="images/aboutUsImg.jpg" alt="food" />
            </div>
        </div>
    </section>
    <!--Cuisines-->
    <section id="cuisines">
        <h2>Cuisines you can find!</h2>
        <div class="cuisine-container container">
            <div class="cuisine-type italian">
                <div class="img-container">
                    <img src="images/cuisineItalian.jpg " alt="error" />
                    <div class="img-content">
                        <h3><i>Italian</i></h3>
                        <a href="https://en.wikipedia.org/wiki/Italian_cuisine" class="btn btn-primary" target="blank">Learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="cuisine-type indian">
                <div class="img-container">
                    <img src="images/cuisineIndian.jpg" alt="error" />
                    <div class="img-content">
                        <h3><i>Indian</i></h3>
                        <a href="https://en.wikipedia.org/wiki/Indian_cuisine" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="cuisine-type bengali">
                <div class="img-container">
                    <img src="images/cuisineBengali.png" alt="error" />
                    <div class="img-content">
                        <h3><i>Bengali</i></h3>
                        <a href="https://en.wikipedia.org/wiki/Bengali_cuisine" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="cuisine-type chinese">
                <div class="img-container">
                    <img src="images/cuisineChinese.jpg" alt="error" />
                    <div class="img-content">
                        <h3><i>Chinese</i></h3>
                        <a href="https://en.wikipedia.org/wiki/Chinese_cuisine" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Recommendatiuons-->
    <section id="recommendations">
        <h2 class="recommendation-title">Recommended Restaurants</h2>
        <div class="recommendation-container container">
            <div class="recommendation-box">
                <div class="recommendation-detail">
                    <div class="recommendation-photo">
                        <img src="images/takeout.jpg" alt="" />
                        <a href="takeout.php" class="btn btn-primary">Takeout</a>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="recommendation-text">
                    Craving Americana in Dhaka? Takeout delivers, with juicy burgers and zesty Tex-Mex in a sleek, modern haven for casual culinary adventures.
                </p>

            </div>
            <div class="recommendation-box">
                <div class="recommendation-detail">
                    <div class="recommendation-photo">
                        <img src="images/madchef.jpg" alt="" />
                        <a href="madchef.php" class="btn btn-primary">Madchef</a>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="recommendation-text">
                    
Craving global flavors in a tranquil garden setting? Madchef beckons with an extensive menu & lush terrace, perfect for a relaxed escape in Dhaka's heart. ️
                </p>

            </div>
            <div class="recommendation-box">
                <div class="recommendation-detail">
                    <div class="recommendation-photo">
                        <img src="images/Sultans-Dine.jpg" alt="" />
                        <a href="sultansdine.php" class="btn btn-primary">Sultan's Dine</a>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="recommendation-text">
                    Spice-infused paradise awaits! Dive into kacchi biryani haven. Tender meat, fragrant rice, and melting potatoes - an explosion of flavor in every bite.
                </p>

            </div>
        </div>
    </section>

    <!--Contact US-->
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="images/logo-color.png" alt="" />
            </div>
            <?php
                require 'database.php';
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $feedbackText = $_POST['message'];

                    try {
                        $stmt = $pdo->prepare("INSERT INTO feedback (name, email, feedbackText) VALUES (:name, :email, :feedbackText)");
                        $stmt->bindParam(':name', $name);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':feedbackText', $feedbackText);
                        $stmt->execute();
                        echo "";
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                }
            ?>
            <div class="form-container">
                <h2>How Can We Improve?</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" name="name" placeholder="Your Name" required />
                    <input type="email" name="email" placeholder="E-Mail" required />
                    <textarea name="message" cols="30" rows="5" placeholder="Type Your Message" required></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer id="footer">
        <h2>FoodHaven &copy; All Rights Reserved</h2>
    </footer>



    <script>
        function isLoggedIn() {
            return document.cookie.split(';').some((item) => item.trim().startsWith('isLoggedIn='));
        }
        const loginBtn = document.querySelector("#login-btn");
        const logoutBtn = document.querySelector("#logout-btn");

        function toggleLoginStatus() {
            if (isLoggedIn()) {
                loginBtn.style.display = "none";
                logoutBtn.style.display = "block";
            } else {
                loginBtn.style.display = "block";
                logoutBtn.style.display = "none";
            }
        }
        window.onload = toggleLoginStatus;
    </script>    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js"></script>

</body>

</html>