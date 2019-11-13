<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <meta charset="utf-8" />
        <meta name="description" content="Log In">
        <meta name="keywords" content="login, campus eats">
        <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/immfavicon.ico"/> -->

        <?php include("include/head.php");?>
    </head>

    <body>
        <?php
        include("include/header.php");
        ?>
        <main>
            <form action="processing-login.php" method="POST">
                <h1>Log in</h1>
                Email: <input name="email" type="email" required />
                Password: <input name="password" type="password" required />

                <input type="submit">

            </form>
        </main>
        <?php include("include/footer.php");?>

    </body>

</html>