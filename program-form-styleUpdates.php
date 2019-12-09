<?php
session_start();

    include("include/connect.php");
        
        $programID = $_SESSION["programID"];
        $stmt = $pdo->prepare("SELECT * FROM `foodprograms` WHERE `programID` = '$programID';");
        $stmt->execute();
        $row = $stmt->fetch();

        $programData['programName'] = $row['programName'];
        $programData['address'] = $row['address'];
        $programData['description'] = $row['description'];
        $programData['city'] = $row['city'];
        $programData['phone'] = $row['phone'];
        $programData['hours'] = $row['hours'];
        $programData['image'] = $row['image'];
        $programData['email'] = $row['email'];
        $programData['addressDetails'] = $row['addressDetails'];
        $programData['password'] = ""; //for security 
        
        // change form action to call update article
        $programFormAction = "handlers/updateProgram.php?programID=$programID";
        // Edit Program details page header as a literal string; is changeable
        $pageHeader = "Edit Program Details";
        // }
//     } else {
//         header("Location:/campus-eats/search.php");
//     }
// ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include("include/head.php");?>
        <link href="css/program-form.css" rel="stylesheet" type="text/css">

        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
        <title>Program Form</title>
    </head>

    <body>
        <?php include("include/header.php"); ?> 	
    	<main class="wrapper">
            <h1><?php echo $pageHeader ?></h1>
            <form
                action="<?php echo $programFormAction?>"
                method="POST"
                enctype="multipart/form-data"
            >  
                <h2 id="welcome">Program Register</h2>
                <div>
                    <label for="programName">Program Name: </label><br>
                    <input 
                        class="textfield" 
                        name="programName" 
                        type="text" 
                        required 
                        value="<?php echo($programData['programName']);?>"/>
                </div>
                <div>
                    <label for="email">Email: </label><br>
                    <input 
                        class="textfield" 
                        name="email" 
                        type="text" 
                        required 
                        value="<?php echo($programData['email']);?>"/>
                </div>
                <div>
                    <label for="password">Password: </label><br>
                    <input 
                        class="textfield" 
                        name="password" 
                        type="text" 
                        required 
                        value="<?php echo($programData['password']);?>"/>
                </div>
                <div>
                    <label for="description">Description: </label><br>
                    <textarea
                        class="textfield" 
                        name="description" 
                        type="text" 
                        required><?php echo($programData['description']);?></textarea>
                </div>
                <div>
                    <label for="address">Street Address: </label><br>
                    <input 
                        class="textfield" 
                        name="address" 
                        type="text" 
                        required 
                        value="<?php echo($programData['address']);?>"/>
                </div>
                <div>
                    <label for="addressDetails">Location on campus: </label><br>
                    <textarea 
                        class="textfield" 
                        name="description" 
                        type="text" 
                        required><?php echo($programData['addressDetails']);?></textarea>
                </div>
                <div>
                    <label for="email">City: </label><br>
                    <input 
                        class="textfield" 
                        name="city" 
                        type="text" 
                        required 
                        value="<?php echo($programData['city']);?>"/>
                </div>
                <div>
                    <label for="phone">Phone: </label><br>
                    <input 
                        class="textfield" 
                        name="phone" 
                        type="text" 
                        required 
                        value="<?php echo($programData['phone']);?>"/>
                </div>
                <div>
                    <label for="hours">Hours: </label><br>
                    <input 
                        class="textfield" 
                        name="email" 
                        type="text" 
                        required 
                        value="<?php echo($programData['hours']);?>"/>
                </div>
                <div>
                    <label for="image"><h3>Upload an image:</h3> </label>
                    <input id="image" name="image" type="file" value="image"/><br>
                </div>
                <input id="submitBtn" type="submit" name="upload_image" value="Submit">
            </form>
		</main>
		<?php include("include/footer.php"); ?> 
    </body>
</html>