<?php session_start(); ?>
<!DOCTYPE html>
<html>

    <head>
        <title>CampusEats</title>
        <meta charset="utf-8" />
        <meta name="description" content="About">
        <meta name="keywords" content="about, campus eats">
        <?php include("include/head.php");?>
        <link href="/campus-eats/css/about.css" rel="stylesheet">

    </head>

    <body>
    <?php include("include/header.php"); ?>
        <main>
            <h1>Get your groceries right on campus</h1>
            <div id="imageContainer">
                <img src="/campus-eats/assets/1.png" alt="image of groceries">
            </div>

            <p> Being a student can be tough. Even getting the bare essentials can be challenging when school becomes overwhelming.
            Thankfully, there are many programs that care about students! 
            But with so many things to do, it can be difficult to learn about all the services being offered.
            </p>
            <p> Campus Eats was made to help you find the nearest food programs to order groceries quickly and easily.
            We are dedicated to reducing food insecurities for students. 
            </p>
        </main>
        <?php include("include/footer.php"); ?>
    </body>

</html>