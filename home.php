<!DOCTYPE html>
<html>

<head>
    <title>CampusEats</title>
   <?php
        include("include/connect.php");
        include("include/head.php");
   ?>
</head>

<body>
    <!-- <!–––––––– Nav Bar ––––––––> -->
        <div class="nav">
            <label for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle" />
            <div class="menu">
                <div class="logo">CampusEats</div>
                
                
                
                <!--
                <div class="nav-icon1" alt="">
    <a href="profile.html"><img src="assets/user.svg" alt=""></a>
</div>
                <div class="nav-icon2" alt="">
    <a href="shoppingcart.html" class=nav-icon2><img src="assets/shopping-cart.svg" alt=""></a>
</div>
-->

                
                <a href="#">About</a>
                <a href="#">Contact</a>

            </div>
        </div>

        <!-- <!–––––––– Hero Section ––––––––> -->
            <div class="hero">
                <div id=cta>
                    Fill Your Fridge with Healthy and Affordable Options.
                </div>
                <div class="search-container">
                    <form class="searchbar" action="#">
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
        <h2 class="title">Register Now<h2>
            <form action="#" class="register-form">

                <input type="text" placeholder="Enter Email" name="email" required><br>
                <input type="password" placeholder="Enter Password" name="pw" required><br>
                <p>By creating an account you agree to our <a href="#">Terms and Privacy</a>.</p><br>
                <button type="submit" class="registerbtn">Register</button>
            </form>
</div>

<!-- <!–––––––– Footer ––––––––> -->
    <footer>
        <div class="company">
            <h4>Company</h4>
            <ul>
                <li><a href="">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Private Policy</a></li>
            </ul>

        </div>
        <div class="product">
            <h4>Product</h4>
            <ul>
                <li><a href="#">Partnerships</a></li>
                <li><a href="#">Sponsors</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div class="connect">
            <h4>Connect</h4>
            <ul>
                <div class=socialmedia>

                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"> <i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>

                </div>
                <li><a href="#">Support@campuseats.ca</a></li>
                <li><a href="#">+123 456 7890</a></li>
            </ul>

        </div>
    </footer>
    <div class="bottom-bar">
        <hr style="border: solid 0.5px #eaeaea;" />

        <div class="name">© 2019 CampusEats Inc</div>
    </div>


</body>

</html>