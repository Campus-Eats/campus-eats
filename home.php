<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>CampusEats</title>
   <?php
        include("include/connect.php");
        include("include/head.php");
        include("include/header.php");
        echo '<link href="css/home.css" rel="stylesheet">';

   ?>
</head>

<body>
    <main>
        <!-- <!–––––––– Hero Section ––––––––> -->
         <div class="slideshow-container">

                <div class="slideshow-content">

                    <div id=cta>
                        Fill Your Fridge with Healthy and Affordable Options.
                    </div>
                    <div class="search-container">
                        <form class="searchbar" action="./handlers/searchResults.php" method=“POST”>
                            <input type="text" placeholder="Enter Your Location" name="search">
                            <button type="submit" id="cta-button">Find Food</button>
                        </form>
                    </div>

                </div>


                <div class="mySlides fade">
                    <img src="assets/hero1.png" class="hero-img" width ='100%' >
                </div>
                <div class="mySlides fade">
                    <img src="assets/hero2.png" class="hero-img" width ='100%'>
                </div>
                <div class="mySlides fade">
                    <img src="assets/hero3.png" class="hero-img" width ='100%'>
                </div>



            </div>
    
    <script src="js/home.js"></script>


                <!-- <!–––––––– how it works––––––––> -->
                  <h2 class="title">How it Works</h2>
                <div class="grid-12-col" id="main">

                    <div class="six" id="s1">
                        <div class="six-img">
                            <img src="assets/step1.png" alt="">
                        </div>
                    </div>
                    <div class="six" id="s2">
                        <div class="paragraph">
                            <h3>Find a Food Program</h3>
                            <p>Search for food programs based on your location, then filter by your preferences. Choose
                                your desired food program. </p>
                        </div>
                    </div>
                    <div class="six" id="s3">
                        <div class="paragraph">
                            <h3>Choose and Order</h3>
                            <p>Pick up your food at its designated pick-up location. Some programs deliver! We’ll let you know which ones do.</p>
                        </div>
                    </div>
                    <div class="six" id="s4">
                        <div class="six-img">

                            <img src="assets/step2.png" alt="">
                        </div>
                    </div>
                    <div class="six" id="s5">
                        <div class="six-img">
                            <img src="assets/step3.png" alt="">
                        </div>
                    </div>
                    <div class="six" id="s6">
                        <div class="paragraph">
                            <h3>Find a Food Program</h3>
                            <p>Search for food programs based on your location, then filter by your preferences. Choose
                                your desired food program. </p>
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

    <!-- Footer -->
        <?php include("include/footer.php");?>

    </main>
</body>

</html>
