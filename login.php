<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <meta charset="utf-8" />
        <meta name="description" content="Log In">
        <meta name="keywords" content="login, campus eats">
        <?php include("include/head.php");?>
        <link href="/campus-eats/css/login-register.css" rel="stylesheet">
        
    </head>

    <body>
    <?php include("include/header.php");?>

        <main>
            <div class="parent"> 
                <section class="item1">
                    <img src="/campus-eats/assets/white-net.jpg">
                </section>

                <div class="item2">
                    <form action="processing-login.php" method="POST">
                    <h1 id="welcome">Welcome</h1>
                    <p id="blacktext">Not a member yet? <a href="register.php" class="subgreytext">Sign up now</a></p>
                    <p class="text">Email address</p> <input class="textfield" name="email" type="email" required />
                    <p class="text">Password</p> <input class="textfield" name="password" type="password" required />

                    <br>                    
                    
                    <div>
                        <p id="conditions">By continuting, you agree to the <a id="terms" target="_blank" href="#">Terms and Conditions</a>.</p>
                    </div>

                    <!-- <input type="checkbox"> <p>Remember me</p> -->
                    <input id="button" type="submit" value="Login Now">

                </form>

                </div>

                <!-- <a><p>Forgot your password?</p></a> -->
                
            </div>
        </main>
        <?php
        include("include/footer.php");
        ?>

    </body>

</html>