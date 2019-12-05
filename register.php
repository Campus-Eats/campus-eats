<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <meta charset="utf-8" />
        <meta name="description" content="Register">
        <meta name="keywords" content="register, campus eats">
        <?php include("include/head.php");?>
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
                    <h1 id="welcome">Register</h1>
                    <p id="programText">If you are a Food Program looking to join Campus Eats, <a id="terms" href="program-register.php">click here.</a></p>
                    <form method="POST"><br>
                        <div class="namefield">
                        <p>First Name</p><input class="nametexts" name="firstname" type="text" required />
                        </div>
                        <div class="namefield">
                        <p>Last Name</p><input class="nametexts" name="lastname" type="text" required />
                        </div>
                        <br>
                        <p class="textRegister">Email</p><input class="textfield" name="email" type="email" required /><br>
                        <p class="textRegister">Password</p><input class="textfield" name="password" type="password" required /><br>

                        <p id="conditionsRegister">By continuing the registration process, I agree to the <a id="terms" href="terms.php">Terms and Conditions.</a></p>

                        <br>
                        <button id="button" type="button" onclick="processRegister(); modalDisplay()">Register</button>

                    </form>
                </div>
            </div>
            <div id="modal" class="modal"> 
            <div class="modal-content">
                <span class="close">&times;</span>
                
                <p id="confirmText"></p>
                <button id="confirmBtn"></button>
            </div>
        </div>
        </main>
        <?php
        include("include/footer.php");
        ?>
        <script src="/campus-eats/js/login-register.js" type="text/javascript"></script>
    </body>

</html>