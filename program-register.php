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
        <link href="css/main.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/footer.css" rel="stylesheet">
    </head>

    <body>
        <?php include("include/header.php"); ?>
        <main>
            <div class="parent"> 
                <section class="item1">
                    <img src="assets/white-net.jpg">
                </section>

                <div id="programRegister-item2">
                    <h1 id="welcome">Program Register</h1>
                    <form class="text" action="processing-program-register.php" method="POST">
                        <p class="textProgramRegister">Program Name</p><input class="textfield" name="programName" type="text" required />
                        <p class="textProgramRegister">Email</p><input class="textfield" name="email" type="email" required />
                        <p class="textProgramRegister">Password</p><input class="textfield" name="password" type="password" required />

                        <p class="textProgramRegister">Street Address</p><input class="textfield" name="streetAddress" type="text" required />
                        <p class="textProgramRegister">City</p><input class="textfield" name="city" type="text" required />
                        <p class="textProgramRegister">Phone Number</p><input class="textfield" name="phone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx" required />
                        <p class="textProgramRegister">Hours</p><input class="textfield" name="hours" type="text" required />


                        <p id="conditions">By continuing the registration process, I agree to the <a id="terms" href="terms.php">Terms and Conditions.</a></p>

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