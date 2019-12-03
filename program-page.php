<!DOCTYPE html>
<?php
    // program-page.php
    include("include/connect.php");
    include("include/header.php");?>
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="css/program-page.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                <?php
        
                $stmt = $pdo->prepare("SELECT * FROM `fooditems`");
                $stmt->execute();

                while($row = $stmt->fetch()) { 
                    ?><div class="listing">
                    <img src="assets/vegetarian.png" alt="food image">
                    <h1> <?php echo($row["itemName"]);?> </h1>
                    <p> <?php echo($row["itemType"]);?> </p>
                    <div class="addtocart-button" >
                        <button class="btn" type="submit" >Select</button>
                    </div>                
                </div> 
                <?php }?>
            </div>

            <div id="modal" class="modal"> 
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                </div>
            </div>


    </main>
    <!-- Footer -->
    <?php include("include/footer.php");?>

    <script src="/campus-eats/js/main.js"></script>


</body>

</html>
