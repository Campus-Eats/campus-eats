<header>
    <nav class="ce-container-nav">
        <a href="/campus-eats/home.php"><img src="/campus-eats/assets/logo.svg"></a>
        <div class="nav-menu">
            <ul class="nav-list">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <!-- <li><a href="search.php">Search</a></li> -->
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php">Register</a></li>

                <?php 
                if(! isset($_SESSION['userID']) || ! isset($_SESSION['programID'])) { ?>
                    <li><a href="/campus-eats/login.php">LogIn</a></li>
                <?php
                };

                if(isset($_SESSION['userID']) || isset($_SESSION['programID'])){
                ?>
                    <li><a href="/campus-eats/logout.php">LogOut</a></li>
                <?php 
                };
                ?>
            </ul>


            <div class="hamburger-menu">
                <label for="toggle" onclick="showHam()">&#9776;</label>
                <section id="hamMenu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <!-- <li><a href="search.php">Search</a></li> -->
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="register.php">Register</a></li>
                        <?php 
                        if(! isset($_SESSION['userID']) || ! isset($_SESSION['programID'])) { ?>
                            <li><a href="/campus-eats/login.php">LogIn</a></li>
                        <?php
                        };

                        if(isset($_SESSION['userID']) || isset($_SESSION['programID'])){
                        ?>
                            <li><a href="/campus-eats/logout.php">LogOut</a></li>
                        <?php 
                        };
                        ?>

                    </ul>
                </section>
                <!-- <input type="checkbox" id="toggle" /> -->
            </div>
        </div>
    </nav>
</header>

<script src="/campus-eats/js/header.js"></script>


