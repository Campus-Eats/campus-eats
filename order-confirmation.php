<?php 
    //order-confirmation.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/results.css">
    <title>Order Confirmation</title>

    <?php include("include/head.php"); ?>
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <div class="body">
            <h1>You've successfully placed your order!</h1>
            <p>We've sent you a confirmation email at <?php echo($row['email']);?></p>
            <a href="/campus-eats/home.php">Back to Home</a>
        </div>
    </main>
    <?php include("include/footer.php");?>
</body>
</html>