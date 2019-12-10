<?php
    include("isLoggedIn.php");
    include("isAdmin.php");

    // echo $isLoggedIn;
    // echo $isAdmin;
?>
<header>
    <nav class="ce-container-nav">
        <a href="/campus-eats/home.php"><img src="/campus-eats/assets/logo.svg"></a>
        <div class="nav-menu">
            <ul class="nav-list">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <!-- <li><a href="search.php">Search</a></li> -->
                <li><a href="contact.php">Contact</a></li>
                <li><a href="search.php">Search</a></li>
                <?php if ($isLoggedIn): ?>
                    <?php if ($isAdmin): ?>
                        <li><a href="my-programs.php">My Program</a></li>
                    <?php endif; ?>
                    <li><a href="/campus-eats/handlers/logout.php">Logout</a></li>
                <?php endif; ?>
                <?php if (!$isLoggedIn): ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Signup</a></li>
                    <!-- <li><a style="padding: 0px 20px;" class="ce-button ce-button-primary" href="register.php">Signup</a></li> -->
                <?php endif; ?>
            </ul>


            <div class="hamburger-menu">
                <label for="toggle" onclick="showHam()">&#9776;</label>
                <section id="hamMenu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <!-- <li><a href="search.php">Search</a></li> -->
                    <li><a href="contact.php">Contact</a></li>
                    <?php if ($isLoggedIn): ?>
                        <?php if ($isAdmin): ?>
                            <li><a href="register.php">My Programs</a></li>
                        <?php endif; ?>
                        <li><a href="/campus-eats/handlers/logout.php">Logout</a></li>
                    <?php endif; ?>
                    <?php if (!$isLoggedIn): ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Signup</a></li>
                    <?php endif; ?>
                </section>
                <!-- <input type="checkbox" id="toggle" /> -->
            </div>
        </div>
    </nav>
</header>

<script src="/campus-eats/js/header.js"></script>