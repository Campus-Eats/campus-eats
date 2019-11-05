<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8" />
        <meta name="description" content="Register">
        <meta name="keywords" content="register, campus eats">
        <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/immfavicon.ico"/> -->
    </head>

    <body>
        <?
        include("include/header.php");
        ?>
        <main>
            <h1>Register</h1>
            <form action="processing-register.php" method="POST"><br>
                First Name:<input name="firstname" type="text" required /><br>
                Last Name:<input name="lastname" type="text" required /><br>
                Email: <input name="email" type="email" required /><br>
                Password: <input name="password" type="password" required /><br>

                <p>By continuing the registration process, I agree to the <a href="terms.php">Terms and Conditions.</a></p>

                <br>
                <input type="submit">

            </form>
        </main>
        <?php
        include("include/footer.php");
        ?>
    </body>

</html>