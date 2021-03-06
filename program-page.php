<?php session_start();
    // program-page.php
    
    include("include/connect.php");
    include("include/isLoggedIn.php");
    include("include/isAdmin.php");
    $programID = $_GET['programID'];

    if(!$programID) {
        header("Location:program-register.php");
    }

    $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID`=$programID");
    $stmt->execute();
    $row = $stmt->fetch();

    $userID = $row["userID"];
    $userStmt = $pdo->prepare("SELECT * FROM `users` WHERE `userID`=$userID");
    $userStmt->execute();
    $user = $userStmt->fetch();

?>
<!DOCTYPE html>
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
    
    <title><?php echo($row["programName"]);?></title>
</head>

<body>
    <?php include("include/header.php");?>
    <main>
        <!-- Banner -->
        <div class="banner">

        </div>
        <div class="wrapper">
            <!-- Information -->
            <div class="program-info">
                <?php if ($isLoggedIn): ?>
                    <?php if ($row['userID'] ==  $_SESSION['userID']): ?>
                        <a href="program-form.php">Update My Program</a>
                    <?php endif; ?>
                <?php endif; ?> 
                <div class="address">
                    <h1>Address</h1>
                    <p> <?php echo($row["address"]);?> </p>
                </div>
                <div class="hours">
                    <h1>Hours</h1>
                    <p><?php echo($row["hours"]);?> </p>
                </div>
                <div class="contact">
                    <h1>Contact</h1>
                    <p> <?php echo($row["phone"]);?> </p>
                    <p>
                        <?php
                            echo($user["email"]);
                        ?>
                    </p>
                </div>
            </div>

            <!-- Listings -->
                <?php
        
                $stmt = $pdo->prepare("SELECT * FROM `fooditems`");
                $stmt->execute();

                while($row = $stmt->fetch()) { 
                    ?><div class="listing">
                    <img src=<?php echo($row["itemImage"]);?> alt="food image">
                    <h1> <?php echo($row["itemName"]);?> </h1>
                    <p> <?php echo($row["itemType"]);?> </p>
                
                <?php if ($isLoggedIn): ?>
                    <?php if (!$isAdmin): ?>
                        <div class="addtocart-button" >
                            <button class="btn" type="submit" >Select</button>
                        </div>   
                    <?php endif; ?>
                <?php endif; ?>   
                </div> 
                <?php }?>
            </div>

            <div id="modal" class="modal"> 
                <div class="modal-content">
                    <span class="close">&times;</span>
                    
                    <p id="confirmText"></p>
                    <button id=cancelBtn></button>
                    <button id="confirmBtn" onclick="processConfirm()"></button>
                </div>
            </div>


    </main>
    <!-- Footer -->
    <?php include("include/footer.php");?>

    <script src="/campus-eats/js/main.js"></script>


</body>

</html>
