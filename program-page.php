<!DOCTYPE html>
<?php
    // program-page.php
    include("include/connect.php");
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/program-page.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <?php
        $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID`='1'");
        $stmt->execute();
        while($row = $stmt->fetch()) { 
            ?>
    <title><?php echo($row["programName"]);?></title>
    <?php
        }
    ?>
</head>

<body>
    <main>
        <!-- Nav Bar -->
        <?php include("include/header.php");?>

        <!-- Banner -->
        <div class="banner">

        </div>
        <div class="wrapper">
            <!-- Information -->
            <div class="program-info">
                <div class="address">
                    <h1>Address</h1>
                    <?php
                        $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID`='1'");
                        $stmt->execute();
                        while($row = $stmt->fetch()) { 
                            ?>
                    <p> <?php echo($row["streetAddress"]);?> </p>
                </div>
                <div class="hours">
                    <h1>Hours</h1>
                    <p><?php echo($row["hours"]);?> </p>
                </div>
                <div class="contact">
                    <h1>Contact</h1>
                    <p> <?php echo($row["phone"]);?> </p>
                    <p> <?php echo($row["email"]);?> </p>
                    <?php
                            }
                        ?>
                </div>
            </div>

            <!-- Listings -->

            <div class="listing">
                <img src="assets/standard.png" alt="food image">
                <?php
        
                $stmt = $pdo->prepare("SELECT * FROM `fooditems` WHERE `foodID`='1'");
                $stmt->execute();

                while($row = $stmt->fetch()) { 
                    ?><h1> <?php echo($row["itemName"]);?> </h1>
                <p> <?php echo($row["itemType"]);?> </p>
                <?php
                    }
                ?>
                <div class="addtocart-button"><input type="submit" value="Select" /></div>
            </div>

            <div class="listing">
                <img src="assets/vegetarian.png" alt="food image">
                <?php
        
                $stmt = $pdo->prepare("SELECT * FROM `fooditems` WHERE `foodID`='2'");
                $stmt->execute();

                while($row = $stmt->fetch()) { 
                    ?><h1> <?php echo($row["itemName"]);?> </h1>
                <p> <?php echo($row["itemType"]);?> </p>
                <?php
                    }
                ?>
                <div class="addtocart-button"><input type="submit" value="Select" /></div>
            </div>

            <div class="listing">
                <img src="assets/standard.png" alt="food image">
                <?php
        
                $stmt = $pdo->prepare("SELECT * FROM `fooditems` WHERE `foodID`='3'");
                $stmt->execute();

                while($row = $stmt->fetch()) { 
                    ?><h1> <?php echo($row["itemName"]);?> </h1>
                <p> <?php echo($row["itemType"]);?> </p>
                <?php
                    }
                ?>
                <div class="addtocart-button"><input type="submit" value="Select" /></div>
            </div>
        </div>

    </main>
    <!-- Footer -->
    <?php include("include/footer.php");?>
    <script src="/campus-eats/js/main.js"></script>

</body>

</html>