<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8" />
        <meta name="description" content="Register">
        <meta name="keywords" content="register, campus eats">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="css/login-register.css" rel="stylesheet">
    </head>

    <body>
        <?
        include("include/header.php");
        ?>
        <main>
            <div class="parent"> 
                <section class="item1">
                    <img src="assets/white-net.jpg">
                </section>

            <div class="item2">
                    <form class="text" action="processing-register.php" method="POST"><br>
                        <h1 id="welcome">Register</h1>
                        <div class="namefield">
                        <p>First Name</p><input class="nametexts" name="firstname" type="text" required />
                        </div>
                        <div class="namefield">
                        <p>Last Name</p><input class="nametexts" name="lastname" type="text" required />
                        </div>
                        <br>
                        <p>Email</p><input class="textfield" name="email" type="email" required /><br>
                        <p>Password</p><input class="textfield" name="password" type="password" required /><br>

                        <p>By continuing the registration process, I agree to the <a class="subgreytext" href="terms.php">Terms and Conditions.</a></p>

                        <br>
                        <input id="button" type="submit">

                    </form>
                </div>
            </div>
        </main>

        <?php
        include("include/footer.php");
        ?>
    </body>

</html>