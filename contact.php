<?php session_start(); ?>
<!DOCTYPE html>
<html>

    <head>
        <title>CampusEats</title>
        <meta charset="utf-8" />
        <meta name="description" content="Contact">
        <meta name="keywords" content="contact, campus eats">
        <?php include("include/head.php");?>
        <link href="/campus-eats/css/contact.css" rel="stylesheet">

    </head>

    <body>
    <?php include("include/header.php"); ?>
        <main id="contactForm">
            <h2>We would love to hear from you</h2>
            <section id="confirmation"></section>

            <form method="POST" class="body">
                <p>Name</p> <input name="name" type="text" required /> <br>
                <p>Email</p> <input name="email" type="email" required />
                
                <p>Message</p><input id="messageInput" name="message" type="text" required />

                <br>
                
                <button type="button" id="submitContact" onclick="processContact()">Submit</button>
            </form>
        </main>
        <?php include("include/footer.php"); ?>
        <script src="/campus-eats/js/contact.js"></script>
    </body>

</html>