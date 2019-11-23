<!DOCTYPE html>
<html>

<head>
    <title>CampusEats</title>
   <?php
        // include("include/connect.php");
        include("include/head.php");
        include("include/header.php");
        echo '<link href="css/main.css" rel="stylesheet">';
        echo '<link href="css/home.css" rel="stylesheet">';
   ?>
</head>

<body>
    <main>
    <!-- <!–––––––– Nav Bar ––––––––> -->
    <!-- <div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle" />
        <div class="menu">
            <div class="logo">
                <a href="/campus-eats/home.php"><img src="/campus-eats/assets/logo.svg">
            </div>
                
            <div class="nav-icon1" alt="">
                <a href="profile.html"><img src="assets/user.svg" alt="black user icon"></a>
            </div>
            <div class="nav-icon2" alt="">
                <a href="shoppingcart.html" class=nav-icon2><img src="assets/shopping-cart.svg" alt="black small shopping bag"></a>
            </div>
            <a class="nav-items" href="#">About</a>
            <a class="nav-items" href="#">Contact</a>
        </div>
    </div> -->

        <!-- <!–––––––– Hero Section ––––––––> -->
        <div class="hero">
            <div id=cta>
                Fill Your Fridge with Healthy and Affordable Options.
            </div>
            <div class="search-container">
                <form class="searchbar" action="/campus-eats/handlers/searchResults.php?location=<?php echo($location) ?>" method="GET">
                    <input type="text" placeholder="Enter Your Location" name="search">
                    <button type="submit">Find Food</button>
                </form>
            </div>

        </div>

                <!-- <!–––––––– how it works––––––––> -->
        <h2 class="title">How it Works</h2>
                <div class="grid-12-col">

                    <div class="six">
                        <div class="six-img">
                            <img src="assets/1.png" alt="">
                        </div>
                    </div>
                    <div class="six">
                        <div class="paragraph">
                            <h3>Find a Food Program</h3>
                            <p>Search for food programs based on your location, then filter by your preferences. Choose your desired food program. </p>
                        </div>
                    </div>
                    <div class="six">
                        <div class="paragraph">
                            <h3>Find a Food Program</h3>
                            <p>Search for food programs based on your location, then filter by your preferences. Choose your desired food program. </p>
                        </div>
                    </div>
                    <div class="six">
                        <div class="six-img">

                            <img src="assets/1.png" alt="">
                        </div>
                    </div>
                    <div class="six">
                        <div class="six-img">
                            <img src="assets/1.png" alt="">
                        </div>
                    </div>
                    <div class="six">
                        <div class="paragraph">
                            <h3>Find a Food Program</h3>
                            <p>Search for food programs based on your location, then filter by your preferences. Choose your desired food program. </p>
                        </div>
                    </div>
                </div>

            <!--REGISTER SECTION-->
        <div class="register">
            <h2 class="title">Register Now</h2>
                <form action="#" class="register-form">

                    <input type="text" placeholder="Enter Email" name="email" required><br>
                    <input type="password" placeholder="Enter Password" name="pw" required><br>
                    <p>By creating an account you agree to our <a href="#">Terms and Privacy</a>.</p><br>
                    <button type="submit" class="registerbtn">Register</button>
                </form>
    </div>

    <!-- <!–––––––– Footer ––––––––> -->
        <?php include("include/footer.php");?>

    </main>
</body>

</html>
