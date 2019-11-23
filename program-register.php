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
                    <form class="text" action="processing-program-register.php" method="POST"><br>
                        <h1 id="welcome">Program Register</h1>
                        <p>Program Name</p><input class="textfield" name="programName" type="text" required />
                        <br>
                        <p>Email</p><input class="textfield" name="email" type="email" required /><br>
                        <p>Password</p><input class="textfield" name="password" type="password" required /><br>

                        <p>Street Address</p><input class="textfield" name="streetAddress" type="text" required />
                        <p>City</p><input class="textfield" name="city" type="text" placeholder="xxx-xxx-xxxx" required />
                        <p>Phone Number</p><input class="textfield" name="phone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />
                        <p>Hours</p><input class="textfield" name="hours" type="text" required />


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